<footer>
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
        <span>ООО «Туристический центр «Мир туризма»</span> <span>ИНН/КПП 4632181253/463201001</span> <span>ОГРН 1134632011360</span>
    </div>

</footer>
