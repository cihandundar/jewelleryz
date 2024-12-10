<section class="pb-10">
    <div class="container max-w-screen-xl mx-auto ">
        <div class="py-[90px]">
            <div class="md:text-7xl text-4xl italic text-center">
                Explore Our Signature Collections
            </div>
            <div class="text-center pt-5 italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore <br>
                et
                dolore magna aliqua. Ut enim ad minim veniam.
            </div>
        </div>
        <div class="flex items-center gap-5 md:justify-normal justify-center" id="collection-btn">
            <button data-category="latest" class="category-btn">LATEST</button>
            <button data-category="deals" class="category-btn">HOT DEALS</button>
            <button data-category="most" class="category-btn">MOST SOLD</button>
        </div>

        <div>
            <div class="collection latest-menu flex gap-5 pt-10">
                @foreach ($collection['latest'] as $item)
                    @include('front.partials.items.product-box')
                @endforeach
            </div>

            <div class="collection deals-menu flex gap-5 pt-10" style="display: none;">
                @foreach ($collection['deals'] as $item)
                    @include('front.partials.items.product-box')
                @endforeach
            </div>

            <div class="collection most-menu flex gap-5 pt-10" style="display: none;">
                @foreach ($collection['most'] as $item)
                    @include('front.partials.items.product-box')
                @endforeach
            </div>
        </div>
    </div>
</section>
