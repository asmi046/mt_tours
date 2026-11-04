export default class Snow {
    constructor(options = {}) {
        this.options = Object.assign({
            density: 0.00008,
            maxFlakes: 160,
            minFlakes: 30,
            speed: 1,
            wind: 0.25,
            sizeMin: 1,
            sizeMax: 3.2,
            opacityMin: 0.35,
            opacityMax: 0.9,
            zIndex: 9000,
            icon: null,
        }, options);

        this.canvas = null;
        this.ctx = null;
        this.image = null;
        this.flakes = [];
        this.width = 0;
        this.height = 0;
        this.running = false;
        this.rafId = null;
        this.lastTime = 0;
        this.resizeTimeout = null;

        this.tick = this.tick.bind(this);
        this.onResize = this.onResize.bind(this);
        this.onVisibilityChange = this.onVisibilityChange.bind(this);
    }

    init() {
        if (this.canvas) return this;

        this.canvas = document.createElement('canvas');
        this.canvas.className = 'snow-canvas';
        this.canvas.setAttribute('aria-hidden', 'true');
        this.canvas.style.zIndex = this.options.zIndex;
        document.body.appendChild(this.canvas);

        this.ctx = this.canvas.getContext('2d');

        if (this.options.icon) {
            this.image = new Image();
            this.image.src = this.options.icon;
        }

        this.resize();

        window.addEventListener('resize', this.onResize);
        document.addEventListener('visibilitychange', this.onVisibilityChange);

        return this;
    }

    resize() {
        const dpr = Math.min(window.devicePixelRatio || 1, 2);

        this.width = window.innerWidth;
        this.height = window.innerHeight;

        this.canvas.width = Math.round(this.width * dpr);
        this.canvas.height = Math.round(this.height * dpr);
        this.canvas.style.width = this.width + 'px';
        this.canvas.style.height = this.height + 'px';
        this.ctx.setTransform(dpr, 0, 0, dpr, 0, 0);

        const count = Math.min(
            this.options.maxFlakes,
            Math.max(this.options.minFlakes, Math.round(this.width * this.height * this.options.density))
        );

        this.flakes = Array.from({ length: count }, () => this.createFlake(true));
    }

    createFlake(initial = false) {
        const { sizeMin, sizeMax, opacityMin, opacityMax } = this.options;
        const radius = sizeMin + Math.random() * (sizeMax - sizeMin);
        const depth = Math.random();

        return {
            x: Math.random() * this.width,
            y: initial ? Math.random() * this.height : -radius,
            radius: radius,
            opacity: opacityMin + Math.random() * (opacityMax - opacityMin),
            fallSpeed: (0.25 + depth * 0.9) * radius,
            drift: 0.15 + Math.random() * 0.6,
            phase: Math.random() * Math.PI * 2,
            phaseSpeed: 0.008 + Math.random() * 0.018,
        };
    }

    drawFlake(flake) {
        if (this.image && this.image.complete && this.image.naturalWidth) {
            const size = flake.radius * 4;

            this.ctx.globalAlpha = flake.opacity;
            this.ctx.drawImage(this.image, flake.x - size / 2, flake.y - size / 2, size, size);
            this.ctx.globalAlpha = 1;

            return;
        }

        this.ctx.beginPath();
        this.ctx.arc(flake.x, flake.y, flake.radius, 0, Math.PI * 2);
        this.ctx.fillStyle = `rgba(255, 255, 255, ${flake.opacity})`;
        this.ctx.fill();
    }

    tick(time) {
        if (!this.running) return;

        const dt = this.lastTime ? Math.min((time - this.lastTime) / 16.667, 3) : 1;
        this.lastTime = time;

        this.ctx.clearRect(0, 0, this.width, this.height);

        for (const flake of this.flakes) {
            flake.phase += flake.phaseSpeed * dt;
            flake.y += flake.fallSpeed * this.options.speed * dt;
            flake.x += (Math.sin(flake.phase) * flake.drift + this.options.wind) * dt;

            if (flake.y - flake.radius > this.height) {
                flake.y = -flake.radius;
                flake.x = Math.random() * this.width;
            }

            if (flake.x > this.width + 20) flake.x = -20;
            if (flake.x < -20) flake.x = this.width + 20;

            this.drawFlake(flake);
        }

        this.rafId = requestAnimationFrame(this.tick);
    }

    start() {
        if (this.running || !this.canvas) return;
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

        this.running = true;
        this.lastTime = 0;
        this.rafId = requestAnimationFrame(this.tick);
    }

    stop() {
        this.running = false;

        if (this.rafId) {
            cancelAnimationFrame(this.rafId);
            this.rafId = null;
        }
    }

    onResize() {
        clearTimeout(this.resizeTimeout);
        this.resizeTimeout = setTimeout(() => this.resize(), 150);
    }

    onVisibilityChange() {
        if (document.hidden) {
            this.stop();
        } else {
            this.start();
        }
    }

    destroy() {
        this.stop();
        clearTimeout(this.resizeTimeout);
        window.removeEventListener('resize', this.onResize);
        document.removeEventListener('visibilitychange', this.onVisibilityChange);

        if (this.canvas) {
            this.canvas.remove();
            this.canvas = null;
            this.ctx = null;
        }
    }
}

function parseOptions(value) {
    if (!value) return {};

    if (value.trim().startsWith('{')) {
        try {
            return JSON.parse(value);
        } catch (error) {
            return {};
        }
    }

    return {};
}

function initSnow() {
    const holder = document.querySelector('[data-snow]');
    if (!holder) return;

    const raw = holder.dataset.snow;
    if (raw === 'false' || raw === '0') return;

    const snow = new Snow(parseOptions(raw));

    snow.init();
    snow.start();

    window.snow = snow;
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initSnow);
} else {
    initSnow();
}
