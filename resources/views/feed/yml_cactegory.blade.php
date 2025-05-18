@php
    echo '<?xml version="1.0" encoding="UTF-8"?>';
@endphp

<yml_catalog date="{{ date("Y-m-d\TH:i:sP") }}">
<shop>
    <name>MirTurisma46</name>
    <company>ООО "Мир Туризма 46"</company>
    <url>https://tours.mirturizma46.ru/</url>
    <currencies>
        <currency id="RUR" rate="1" />
    </currencies>

    <categories>
        @foreach ($categorys as $item)
            <category id="{{ $item['id'] }}">{{ $item['title'] }}</category>
        @endforeach
    </categories>

    <set id="s1">
        <name>Экскурсионные туры по России </name>
        <url>{{ route('home') }}</url>
    </set>

    <offers>
        @foreach ($cat_product as $item)
            <offer id="{{$item->id}}">
                <name>{{$item->title}}</name>
                <url>{{route('tour_page', $item->slug)}}</url>

                <picture>{{route('home').$item->img}}</picture>

                <price>{{ $item->prices[0]['price'] }}</price>
                <oldprice>{{ $item->prices[0]['price'] + 1500 }}</oldprice>

                <currencyId>RUR</currencyId>
                <categoryId>{{ $curent_category }}</categoryId>

                <set-ids>s1</set-ids>

                <sales_notes>Необходима предоплата</sales_notes>

                <param name="Количество дней">{{ $item->deycount }}</param>
                <param name="Дата выезда">{{ $item->start_data }}</param>

                <description>{{$item->title}}</description>


            {{--
                <store>true</store>
                <pickup>true</pickup> --}}
            </offer>
        @endforeach
    </offers>
    <gifts>
        <!-- подарки не из прайс‑листа -->
    </gifts>
    <promos>
        <!-- промоакции -->
    </promos>
</shop>

</yml_catalog>
