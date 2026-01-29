<script>
    let mapinfo = @json($geoPoints);
    var myMap3, myPlacemark, myPlacemark2;
    console.log(mapinfo);

    ymaps.ready(init);

    function init() {
        myMap3 = new ymaps.Map('all_hotel_map', {
            center: [44.02183486277301, 39.17140031255061],
            zoom: 7,
            controls: ['zoomControl', 'fullscreenControl']
        }, {
            searchControlProvider: 'yandex#search'
        });

        var myGeoObjects = [];

        for (let i = 0; i < mapinfo.length; i++) {
            let content =
                '<img class = "mainImg" width = "100" src = "' + mapinfo[i].img + '"/>' +
                '<strong class="line">' + mapinfo[i].title + '</strong><br/>' +
                '<a class = "blueLnk line" href = "' + mapinfo[i].link + '">Подробнее...</a>';

            let pin = new ymaps.Placemark(JSON.parse(mapinfo[i].geo), {
                balloonContent: content,
            }, {

                iconLayout: 'default#image',
                iconImageHref: '{{ asset('img/icon/geo_map_yello.svg') }}',
                iconImageSize: [50, 74],
                iconImageOffset: [-25, -74]
            });

            myGeoObjects.push(pin);
        }

        var clusterer = new ymaps.Clusterer({
            clusterDisableClickZoom: false,
            clusterOpenBalloonOnClick: false,
            preset: 'islands#invertedYellowClusterIcons'


        });

        clusterer.add(myGeoObjects);
        myMap3.geoObjects.add(clusterer);

    }
</script>

<section class="all-hotel-map-section">
    <div class="container">
        <div id="all_hotel_map" class="all-hotel-map-wrapper all_hotel_map">

        </div>
    </div>
</section>
