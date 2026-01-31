<script>
    let geoPoint = @json($geoPoint);
    var myMap3;

    ymaps.ready(init);

    function init() {
        let coords = JSON.parse(geoPoint);

        myMap3 = new ymaps.Map('one_hotel_map', {
            center: coords,
            zoom: 10,
            controls: ['zoomControl', 'fullscreenControl']
        }, {
            searchControlProvider: 'yandex#search'
        });

        let pin = new ymaps.Placemark(coords, {}, {
            iconLayout: 'default#image',
            iconImageHref: '{{ asset('img/icon/geo_map_yello.svg') }}',
            iconImageSize: [50, 74],
            iconImageOffset: [-25, -74]
        });

        myMap3.geoObjects.add(pin);
    }
</script>

<div id="one_hotel_map" class="all-hotel-map-wrapper one_hotel_map"></div>
