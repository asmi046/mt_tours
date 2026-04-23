@props(['dop_class' => ''])
<footer class="footer_all {{ $dop_class }}">
    <a class="logo" href="{{ route('home') }}">
        <img src="{{ asset('img/logo_white.svg') }}" alt="Экскурсионные туры из Курска - МирТуризма">
    </a>

    <nav>
        <x-menues.puncts :name="'Меню в подвале'"></x-menues.puncts>
    </nav>
    <hr>
    <a class="phone" href="tel:+7{{ phone_format(config('contacts.phone')) }}">{{ config('contacts.phone') }}</a>
    <br>
    <a class="email" href="mailto:{{ phone_format(config('contacts.email')) }}">{{ config('contacts.email') }}</a>
    {{-- <div class="reqvizites">
        <span>ООО «Туристический центр «Мир туризма»</span> <span>ИНН/КПП 4632181253/463201001</span> <span>ОГРН 1134632011360</span>
    </div> --}}

</footer>
<section class="sub_footer">
    <div class="container">
        <div class="part">
            <a href="/page/politika-v-oblasti-obrabotki-personalnyx-dannyx">Политика в области обработки персональных
                данных</a>
            <br>
            <a href="/page/soglasie-na-obrabotku-personalnyx-dannyx">Согласие на обработку персональных
                данных</a>
        </div>

    </div>
</section>
