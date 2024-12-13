<section class="py-10">
    <div class="container max-w-screen-xl mx-auto ">
        <div class="py-[90px]">
            <div class="md:text-7xl text-4xl italic text-center">
                Our Features
            </div>
            <div class="text-center pt-5 italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam.
            </div>
        </div>
        <div class="swiper ourFeaturedSlider">
            <div class="swiper-wrapper">
                @foreach ($featured as $item)
                    <div class="swiper-slide">
                        @include('front.partials.items.product-box')
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next  bg-blue-950 p-5 rounded-full text-white shadow-lg border-2 border-white">
            </div>

            <div class="swiper-button-prev  bg-blue-950 p-5 rounded-full text-white shadow-lg border-2 border-white">
            </div>
        </div>
    </div>
</section>
