<div id="main_side_menue" class="side_menue_wrapper">
    <div class="shadow"></div>
    <nav class="side_menue">

        <x-menu-puncts></x-menu-puncts>

        <div class="contacts_side_menue">
            <a class="phone" href="tel:+7{{ phone_format(config('contacts.phone')) }}">{{ config('contacts.phone') }}</a>
            <a class="email" href="mailto:{{ phone_format(config('contacts.email')) }}">{{ config('contacts.email') }}</a>
        </div>
        <x-social-net></x-social-net>
    </nav>
</div>

<div class="show_menue_button"></div>

