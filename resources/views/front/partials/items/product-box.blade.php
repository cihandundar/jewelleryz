<a href="#" class="relative group md:px-0 px-5">
    <div class="bg-gray-100 overflow-hidden md:w-[300px] md:h-[300px] w-full h-full relative">
        <span class="absolute bg-gray-400 text-xs py-1 px-3 text-white top-5 z-10">On Sale</span>
        <img src="{{ $item['image'] }}" alt="collectionImage"
            class="w-full h-auto opacity-100 transition-opacity duration-300 group-hover:opacity-0">
        @if (isset($item['hover_image']))
            <img src="{{ $item['hover_image'] }}" alt="hoverImage"
                class="absolute inset-0 w-full h-full object-cover opacity-0 group-hover:opacity-100 transition-opacity duration-300">
        @endif
    </div>

    <div class="mt-2">{{ $item['name'] }}</div>
    <div>
        @if (isset($item['old_price']))
            <span class="line-through text-gray-500 mr-2">${{ $item['old_price'] }}</span>
        @endif
        <span class="text-black">${{ $item['price'] }}</span>
    </div>
</a>
