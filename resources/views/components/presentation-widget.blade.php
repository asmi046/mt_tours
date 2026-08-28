@props(['video' => '', 'text' => ''])

<div class="presentation_widget" data-presentation-widget hidden>
    <button class="presentation_widget_close" type="button" aria-label="Закрыть" data-presentation-close>
        <svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="3"
            stroke-linecap="round">
            <line x1="6" y1="6" x2="18" y2="18"></line>
            <line x1="18" y1="6" x2="6" y2="18"></line>
        </svg>
    </button>

    <div class="presentation_widget_video">
        <video autoplay muted loop playsinline>
            <source src="{{ $video }}" type="video/mp4">
        </video>
    </div>

    @if ($text)
        <p class="presentation_widget_text font_caveat">{{ $text }}</p>
    @endif
</div>

<script>
    (function() {
        const widget = document.querySelector('[data-presentation-widget]');
        if (!widget) return;

        setTimeout(() => {
            widget.removeAttribute('hidden');
            requestAnimationFrame(() => widget.classList.add('is_visible'));
        }, 3000);

        widget.addEventListener('click', function(e) {
            if (e.target.closest('[data-presentation-close]')) {
                widget.classList.remove('is_visible');
                setTimeout(() => {
                    const video = widget.querySelector('video');
                    if (video) video.pause();
                    widget.remove();
                }, 400);
            }
        });
    })();
</script>