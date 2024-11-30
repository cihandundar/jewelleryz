<section class="pb-10">
    <div class="container max-w-screen-xl mx-auto ">
        <div class="py-[90px]">
            <div class="text-7xl italic text-center">
                Explore Our Signature Collections
            </div>
            <div class="text-center pt-5 italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore <br>
                et
                dolore magna aliqua. Ut enim ad minim veniam.
            </div>
        </div>
        <div class="flex items-center gap-5" id="collection-btn">
            <button data-category="latest" class="category-btn">LATEST</button>
            <button data-category="deals" class="category-btn">HOT DEALS</button>
            <button data-category="most" class="category-btn">MOST SOLD</button>
        </div>

        <div>
            <div class="collection latest-menu flex gap-5 pt-10">
                @foreach ($collection['latest'] as $item)
                    <a href="#" class="relative group">
                        <div class="bg-gray-100 overflow-hidden w-[300px] h-[300px] relative">
                            <img src="{{ $item['image'] }}" alt="collectionImage"
                                class="w-full h-auto opacity-100 transition-opacity duration-300 group-hover:opacity-0">
                            @if (isset($item['hover_image']))
                                <img src="{{ $item['hover_image'] }}" alt="hoverImage"
                                    class="absolute inset-0 w-full h-full object-cover opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            @endif
                        </div>

                        <div class="mt-2">{{ $item['name'] }}</div>
                        <div>${{ $item['price'] }}</div>
                    </a>
                @endforeach
            </div>

            <div class="collection deals-menu flex gap-5 pt-10" style="display: none;">
                @foreach ($collection['deals'] as $item)
                    <a href="#" class="relative group">
                        <div class="bg-gray-100 overflow-hidden w-[300px] h-[300px] relative">
                            <img src="{{ $item['image'] }}" alt="collectionImage"
                                class="w-full h-auto opacity-100 transition-opacity duration-300 group-hover:opacity-0">
                            @if (isset($item['hover_image']))
                                <img src="{{ $item['hover_image'] }}" alt="hoverImage"
                                    class="absolute inset-0 w-full h-full object-cover opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            @endif
                        </div>

                        <div class="mt-2">{{ $item['name'] }}</div>
                        <div>${{ $item['price'] }}</div>
                    </a>
                @endforeach
            </div>

            <div class="collection most-menu flex gap-5 pt-10" style="display: none;">
                @foreach ($collection['most'] as $item)
                    <a href="#" class="relative group">
                        <div class="bg-gray-100 overflow-hidden w-[300px] h-[300px] relative">
                            <img src="{{ $item['image'] }}" alt="collectionImage"
                                class="w-full h-auto opacity-100 transition-opacity duration-300 group-hover:opacity-0">
                            @if (isset($item['hover_image']))
                                <img src="{{ $item['hover_image'] }}" alt="hoverImage"
                                    class="absolute inset-0 w-full h-full object-cover opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            @endif
                        </div>

                        <div class="mt-2">{{ $item['name'] }}</div>
                        <div>${{ $item['price'] }}</div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>
