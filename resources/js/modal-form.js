import axios from 'axios';

const getCsrf = () => document.querySelector('meta[name="_token"]')?.content || '';

document.addEventListener('submit', async (e) => {
    const form = e.target.closest('[data-modal-form]');
    if (!form) return;
    e.preventDefault();

    const popup = form.closest('.popup') || document;
    const errorWrap = form.querySelector('.error_list_wrap');
    const loader = form.querySelector('.loader');
    const accept = popup.querySelector('.accept_message');

    if (errorWrap) errorWrap.innerHTML = '';

    const phoneInput = form.querySelector('input[name="phone"]');
    const phone = phoneInput ? phoneInput.value.trim() : '';
    if (!phone) {
        if (errorWrap) errorWrap.insertAdjacentHTML('beforeend',
            '<div class="error">Поле «Телефон» не заполнено</div>');
        return;
    }

    if (loader) loader.hidden = false;

    try {
        await axios.post(form.dataset.action || '/send_consult', {
            _token: form.querySelector('input[name="_token"]')?.value || getCsrf(),
            phone,
        });

        if (typeof ym === 'function') ym(29416892, 'reachGoal', 'send');

        form.style.display = 'none';
        if (accept) {
            accept.removeAttribute('hidden');
            accept.style.display = 'block';
        }
    } catch (err) {
        const msg = err?.response?.data?.message || 'Не удалось отправить заявку. Попробуйте позже.';
        if (errorWrap) errorWrap.insertAdjacentHTML('beforeend',
            `<div class="error">${msg}</div>`);
        console.error(err);
    } finally {
        if (loader) loader.hidden = true;
    }
});
