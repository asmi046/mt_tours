<section>
    <div class="container kurort_select">
        @foreach ($resorts as $direction => $resorts)
            <h3>{{ $direction }}</h3>
            <div class="kurort_select__line">
                @foreach ($resorts as $resort)
                    <a href="#" class="select_button">{{ $resort['title'] }}</a>
                @endforeach
            </div>
        @endforeach
    </div>
</section>
