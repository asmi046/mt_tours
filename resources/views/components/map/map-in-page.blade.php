@php
        $data = [
            'geo' => config('contacts.geo'),
            'adres' => config('contacts.adres'),
            'phone' => config('contacts.phone')
        ];
@endphp

<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script>

    ymaps.ready(init);

    function init () {
        let centerMap =[{{ $data['geo'] }}]
        var myMap = new ymaps.Map("map_page", {
            // Координаты центра карты
            center: centerMap,
            // Масштаб карты
            zoom: 15,
            // Выключаем все управление картой
            controls: ['geolocationControl','zoomControl']
        });

        var myGeoObjects = [];


        var clusterer = new ymaps.Clusterer({
            clusterDisableClickZoom: false,
            clusterOpenBalloonOnClick: false,
            preset: 'islands#greenClusterIcons',
        });

        myGeoObjects = new ymaps.Placemark([{{ $data['geo'] }}],
            {
                hintContent: '<div class="map-hint">{{ $data['adres'] }}</div>',
                balloonContent: '<div class="map-hint"><b>«ПрофМедика»</b> <br/> {{ $data['adres'] }} <br/>  {{ $data['phone'] }} </div>',
            }, {
                preset: 'islands#icon',
                iconColor: '#FF5301'
            }

        );
        clusterer.add(myGeoObjects);






        myMap.geoObjects.add(clusterer);
        // Отключим zoom
        myMap.behaviors.disable('scrollZoom');

    }

</script>

<div id="map_page" class="map">

</div>
