<div class="bg-blue-950 text-white py-2">
    <marquee>
        <div class="flex gap-32">
            <div class="flex items-center gap-2"><img class="w-5" src="{{ asset('front/assets/images/ring.png') }}"
                    alt=""> Flat
                30 % Sale
                Going On
                Selected Products. <a class="uppercase" href="#">View
                    Products.</a></div>
            <div class="flex items-center gap-2"><img class="w-5" src="{{ asset('front/assets/images/ring.png') }}"
                    alt=""> Flat
                30 % Sale
                Going On
                Selected Products. <a class="uppercase" href="#">View
                    Products.</a></div>
            <div class="flex items-center gap-2"><img class="w-5" src="{{ asset('front/assets/images/ring.png') }}"
                    alt=""> Flat
                30 % Sale
                Going On
                Selected Products. <a class="uppercase" href="#">View
                    Products.</a></div>
            <div class="flex items-center gap-2"><img class="w-5" src="{{ asset('front/assets/images/ring.png') }}"
                    alt=""> Flat
                30 % Sale
                Going On
                Selected Products. <a class="uppercase" href="#">View
                    Products.</a></div>

        </div>
    </marquee>
</div>
<header class="py-3">
    <div class="container max-w-screen-xl mx-auto">
        <div class="flex justify-between items-center lg:px-0 px-3 ">
            <a href="{{ getHomeUrl() }}"><img src="{{ setting('logo') }}" alt="logo" class="w-40">
            </a>
            <nav id="nav-menu" data-menu="closed"
                class="bg-white absolute top-0 min-h-[100vh] w-full px-5 duration-500 ease-out z-20 lg:min-h-fit lg:static lg:bg-transparent lg:w-auto ">

                <div class="cursor-pointer absolute right-5 top-5 lg:hidden block"><i id="closeicon"
                        class="fa-solid fa-xmark"></i>
                </div>
                <ul class="flex flex-col items-center gap-10 pt-20 lg:pt-0 lg:flex-row">
                    <a href="{{ getHomeUrl() }}"><img src="{{ setting('logo') }}" alt="logo"
                            class="w-40 lg:hidden block">
                    </a>
                    @if ($menuData = getMenu('Ana Menü')->data)
                        @foreach ($menuData as $data)
                            @include('front.partials.default_menu_item')
                        @endforeach
                    @endif
                </ul>
            </nav>


            <ul class="flex gap-4 items-center">
                <li><a href="#"><i class="fa-solid fa-magnifying-glass"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-user"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>

            <div class="cursor-pointer lg:hidden"><i id="hamburger" class="fa-solid fa-bars text-2xl"></i></div>
        </div>
    </div>
</header>
