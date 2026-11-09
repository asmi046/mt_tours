@props(['tour'])

@if ($tour->other_version_lnk && $tour->other_version_banner)
    @push('page_modals')
        <x-modal id="otherVersionTour" open-hash="otherVersionTour">
            <img class="schol_modal__img" src="{{ Storage::url($tour->other_version_banner) }}" alt="{{ $tour->title }}">
            <div class="text_styles schol_modal__cta">
                {!! $tour->other_version_text !!}
            </div>
            <div class="control_wrap">
                <a class="button" href="{{ $tour->other_version_lnk }}">Перейти к туру</a>
            </div>
        </x-modal>
    @endpush

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            var time = 15000;

            if (sessionStorage.getItem('otherVersionModalShown')) {
                time = 25000;
            }

            setTimeout(() => {
                sessionStorage.setItem('otherVersionModalShown', '1');
                if (location.hash !== '#otherVersionTour') location.hash = 'otherVersionTour';
            }, time);
        });
    </script>
@endif
