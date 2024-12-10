<section class="py-10">
    <div class="container max-w-screen-xl mx-auto ">
        <div class="flex justify-between items-center">
            <div>
                <div class="pb-2">Exclusive Deals</div>
                <div class="text-5xl">LIMITED TIME OFFER</div>
            </div>
            <a href="#" class="text-xl">Discover More</a>
        </div>
        <div class="grid md:grid-cols-2 grid-cols-1 py-10 gap-10">
            @foreach ($collection['latest'] as $item)
                <a href="#" class="relative group md:px-0 px-5 flex items-center md:flex-row flex-col">
                    <div class="bg-gray-100 overflow-hidden md:w-[400px] md:h-[400px] w-full h-full relative">
                        <span class="absolute bg-gray-400 text-xs py-1 px-3 text-white top-5 z-10">On Sale</span>
                        <img src="{{ $item['image'] }}" alt="collectionImage"
                            class="w-full h-auto opacity-100 transition-opacity duration-300 group-hover:opacity-0">
                        @if (isset($item['hover_image']))
                            <img src="{{ $item['hover_image'] }}" alt="hoverImage"
                                class="absolute inset-0 w-full h-full object-cover opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        @endif
                    </div>

                    <div
                        class="shadow-2xl md:w-[44%] w-full text-center px-2 py-10 md:-ml-10 -ml-0 relative z-10 bg-white">
                        <div class="mt-2 md:text-2xl text-2xl">{{ $item['name'] }}</div>
                        <div class="md:text-inherit text-2xl">
                            @if (isset($item['old_price']))
                                <span class="line-through text-gray-500 mr-2">${{ $item['old_price'] }}</span>
                            @endif
                            <span class="text-black">${{ $item['price'] }}</span>
                        </div>
                        <div class="flex gap-5 justify-center pt-5">
                            <button class="border-b-2 border-gray-900">Add to Cart</button>
                            <button class="border-b-2 border-gray-900">View Details</button>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
