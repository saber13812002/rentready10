<nav class="navbar flex flex-row flex-wrap pt-10 pb-10">
    <a class="navbar-brand self-center w-[90px] h-[90px]" href="/">
        <img src="{{ $footers->logo }}" alt="logo">
    </a>
    <div class="flex self-center grow basis-auto gap-18">
        <ul class="self-center flex flex-row gap-18 ml-auto pt-30 pb-30">

            @foreach($menus as $menu)
                <li class="mr-12 xl:mr-15 relative group">
                    <a href="/{{ $menu->slug }}"
                       class="block text-black-color active font-semibold text-16px ease-in duration-300 relative">{{$menu->title}}</a>
                </li>
            @endforeach
        </ul>
        <div class="self-center">
            <a href="contact.html"
               class="inline-block font-semibold text-13px md:text-14px lg:text-15px rounded-xl text-white pt-17 pb-13 pl-35 pr-35 bg-[#14944c] shadow-custom-box-shadow hover:shadow-secondary-btn ease-in duration-300">Login</a>
        </div>
    </div>
</nav>
