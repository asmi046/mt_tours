<div class="uni_breadcrumbs">
    <div class="_container">

        <div itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumbs">
            <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="{{ route('home') }}">
                    <span itemprop="name">Главная</span>
                    <meta itemprop="position" content="0">
                </a>
            </span>



            @if (Request::route()->named('search-tovar'))
                <span class="sep"> / </span>
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="{{ $article }}" itemprop="item" href="{{ route('search', ['search' => $article]) }}">
                        <span itemprop="name">{{ $article }}</span>
                        <meta itemprop="position" content="1">
                    </a>
                </span>

                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{ $brand }}" itemprop="item">
                        <span itemprop="name">{{ $brand }}</span>
                        <meta itemprop="position" content="2">
                    </span>
                </span>
            @elseif (Request::route()->named('sea_resort'))
                <span class="sep"> / </span>
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="Туры на море из Курска" itemprop="item" href="{{ route('sea_home') }}">
                        <span itemprop="name">Туры на море из Курска</span>
                        <meta itemprop="position" content="1">
                    </a>
                </span>

                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{ $title }}" itemprop="item">
                        <span itemprop="name">{{ $title }}</span>
                        <meta itemprop="position" content="2">
                    </span>
                </span>
            @elseif (Request::route()->named('sea_direction'))
                <span class="sep"> / </span>
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="Туры на море из Курска" itemprop="item" href="{{ route('sea_home') }}">
                        <span itemprop="name">Туры на море из Курска</span>
                        <meta itemprop="position" content="1">
                    </a>
                </span>

                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{ $title }}" itemprop="item">
                        <span itemprop="name">{{ $title }}</span>
                        <meta itemprop="position" content="2">
                    </span>
                </span>
            @elseif (Request::route()->named('kupit_proezd'))
                <span class="sep"> / </span>
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="Туры на море из Курска" itemprop="item" href="{{ route('sea_home') }}">
                        <span itemprop="name">Туры на море из Курска</span>
                        <meta itemprop="position" content="1">
                    </a>
                </span>

                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{ $title }}" itemprop="item">
                        <span itemprop="name">{{ $title }}</span>
                        <meta itemprop="position" content="2">
                    </span>
                </span>
            @elseif (Request::route()->named('sea_hotel'))
                <span class="sep"> / </span>
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="Туры на море из Курска" itemprop="item" href="{{ route('sea_home') }}">
                        <span itemprop="name">Туры на море из Курска</span>
                        <meta itemprop="position" content="1">
                    </a>
                </span>

                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="{{ $resort->title }}" itemprop="item"
                        href="{{ route('sea_resort', ['resort' => $resort->slug]) }}">
                        <span itemprop="name">{{ $resort->title }}</span>
                        <meta itemprop="position" content="1">
                    </a>
                </span>

                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{ $title }}" itemprop="item">
                        <span itemprop="name">{{ $title }}</span>
                        <meta itemprop="position" content="2">
                    </span>
                </span>
            @elseif (Request::route()->named('zagran.destination'))
                <span class="sep"> / </span>
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="Поиск туров On-Line в Курске" itemprop="item" href="{{ route('zagran.index') }}">
                        <span itemprop="name">Поиск туров On-Line в Курске</span>
                        <meta itemprop="position" content="1">
                    </a>
                </span>

                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{ $title }}" itemprop="item">
                        <span itemprop="name">{{ $title }}</span>
                        <meta itemprop="position" content="2">
                    </span>
                </span>
            @elseif (Request::route()->named('zagran.resort'))
                <span class="sep"> / </span>
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="Поиск туров On-Line в Курске" itemprop="item" href="{{ route('zagran.index') }}">
                        <span itemprop="name">Поиск туров On-Line в Курске</span>
                        <meta itemprop="position" content="1">
                    </a>
                </span>

                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="{{ $resort->title }}" itemprop="item"
                        href="{{ route('zagran.destination', ['slug' => $resort->slug]) }}">
                        <span itemprop="name">{{ $resort->title }}</span>
                        <meta itemprop="position" content="1">
                    </a>
                </span>

                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{ $title }}" itemprop="item">
                        <span itemprop="name">{{ $title }}</span>
                        <meta itemprop="position" content="2">
                    </span>
                </span>
            @elseif (isset($title))
                <span class="sep"> / </span>
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{ $title }}" itemprop="item">
                        <span itemprop="name">{{ $title }}</span>
                        <meta itemprop="position" content="1">
                    </span>
                </span>
            @endif

        </div>
    </div>
</div>
