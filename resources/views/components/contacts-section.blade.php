<section id="contacts" class="contacts_section">
    <div class="container">
        <div class="contacts_blk">
            <x-map.map-in-page></x-map.map-in-page>
            <div class="text">
                <h2>Свяжитесь с нами любым удобным способом:</h2>
                <a class="phone" href="tel:+7{{ phone_format(config('contacts.phone')) }}">{{ config('contacts.phone') }}</a>
                <a class="email" href="mailto:{{ phone_format(config('contacts.email')) }}">{{ config('contacts.email') }}</a>
                <p>{{ config('contacts.adress') }}</p>

                <x-social-net></x-social-net>
            </div>
        </div>
    </div>
</section>
