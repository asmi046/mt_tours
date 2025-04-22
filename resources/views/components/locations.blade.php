<div class="location_wrapper">
    @foreach ($all_location as $key => $value)
    <div class="location">
        <div class="img">
            <img src="{{ asset('img/locations/'.$value) }}" alt="{{ $key }}">
        </div>
        <h3>{{ $key }}</h3>
    </div>
    @endforeach

</div>
