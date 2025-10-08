<section class="up_sale">
        <div class="container">
            <h2 class="h2_in_page">Смотрите так же <br> другие <span class="gold">туры:</span></h2>

            <swiper-container id="any_tours" init="false">
                @foreach ($catCards as $item)
                    <swiper-slide>
                        <x-tour-card :item="$item"></x-tour-card>
                    </swiper-slide>
                @endforeach
            </swiper-container>

            <div class="reviews_btn_wrapper">
                <a class="arrow_button arrow_pred" id="any_tours_btn_prev" href="#">
                    <svg class="sprite_icon">
                        <use xlink:href="#arrow"></use>
                    </svg>
                </a>
                <a class="arrow_button arrow_next" id="any_tours_btn_next" href="#">
                    <svg class="sprite_icon">
                        <use xlink:href="#arrow"></use>
                    </svg>
                </a>
            </div>
        </div>
    </section>
