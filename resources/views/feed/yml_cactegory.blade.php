@php
    echo '<?xml version="1.0" encoding="UTF-8"?>';
@endphp

<yml_catalog date="{{ date("Y-m-d\TH:i:sP") }}">
<shop>
    <name>MirTurisma46</name>
    <company>ООО "Мир Туризма 46"</company>
    <url>https://tours.mirturizma46.ru/</url>
    <currencies>
        <currency id="RUR" rate="1"/>
    </currencies>

    <categories>
        @foreach ($categorys as $item)
            <category id="{{ $item['id'] }}">{{ $item['title'] }}</category>
        @endforeach
    </categories>

    <offers>
        @foreach ($cat_product as $item)
            <offer id="{{$item->slug}}">
                <name>{{$item->title}}</name>
                <url>{{route('tour_page', $item->slug)}}</url>

                <picture>{{route('home').$item->img}}</picture>

                <price>{{ $item->prices[0]['price'] }}</price>
                <oldprice>{{ $item->prices[0]['price'] + 1500 }}</oldprice>

                <currencyId>RUR</currencyId>
                <categoryId>{{ $curent_category }}</categoryId>



                <description>{{$item->program}}</description>




                @foreach ($consist as $elem)
                    @continue(empty($elem['Имя']))
                    <consist name="{{$elem['Имя']}}" unit="шт">{{$elem['Количество']}}</consist>
                @endforeach


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
