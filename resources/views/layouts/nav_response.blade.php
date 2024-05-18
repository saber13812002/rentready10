
<!-- Navbar for Responsive -->
<div class="navbar-for-responsive hidden">
    <div class="mean-menu">
        <ul class="navbar-nav bg-[#14944c]">

            @foreach($menus as $menu)
                <li class="flex flex-row justify-center items-center">
                <a href="/{{ $menu->slug }}" class="block text-black-color active font-semibold text-16px ease-in duration-300 relative text-center w-auto">{{$menu->title}}</a>
                </li>
            @endforeach
    </div>
</div>
<!-- End Navbar for Responsive -->
