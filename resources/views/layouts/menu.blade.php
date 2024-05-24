<!-- Navbar Area -->
<div class="navbar-area relative z-2">
    <div class="wg-responsive-nav lg:hidden">
        <div class="container">
            <div class="wg-responsive-menu">
                <div class="logo">
                    <a href="/">
                        <img src="{{ $footers->logo }}" alt="logo" class="w-[90px] h-[90px]">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="wg-nav hidden lg:block">
        <div class="container xl:max-w-full 3xl:max-w-[1700px]">
            <nav class="navbar flex flex-row flex-wrap pt-10 pb-10">
                <a class="navbar-brand self-center w-[90px] h-[90px]" href="/">
                    <img src="{{ $footers->logo }}" alt="logo">
                </a>
                <div class="flex self-center grow basis-auto gap-18">
                    <ul class="self-center flex flex-row gap-18 ml-auto pt-30 pb-30">

                        @foreach($menus as $menu)
                            <li class="mr-12 xl:mr-15 relative group">
                                <a href="/{{ $menu->slug }}"
                                   class="block text-white {{ request()->is($menu->slug) ? 'active' : '' }} font-semibold text-16px ease-in duration-300 relative">{{$menu->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="self-center">
                        <a href="{{ $options['login_link']??"" }}"
                           class="inline-block font-semibold text-13px md:text-14px lg:text-15px rounded-xl text-black-color pt-17 pb-13 pl-35 pr-35 bg-[#c0d1c0]">Login</a>
                    </div>
                </div>
            </nav>

        </div>
    </div>
</div>
<!-- End Navbar Area -->
