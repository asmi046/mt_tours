@props(['dop_class' => ''])
<footer class="footer_all {{ $dop_class }}">
    <a class="logo" href="https://www.mirturizma46.ru/">
        <img src="{{ asset('img/logo_white.svg')}}" alt="Экскурсионные туры из Курска - МирТуризма">
    </a>

    <nav>
        <x-menu-puncts></x-menu-puncts>
    </nav>
    <hr>
    <a class="phone" href="tel:+7{{ phone_format(config('contacts.phone')) }}">{{ config('contacts.phone') }}</a>
    <br>
    <a class="email" href="mailto:{{ phone_format(config('contacts.email')) }}">{{ config('contacts.email') }}</a>
    <div class="reqvizites">
        <span>ООО «Мир туризма 46»</span> <span>ИНН/КПП 4632297723/463201001</span> <span>ОГРН 1234600004638</span>
    </div>

</footer>
