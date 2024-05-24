
<!-- Navbar for Responsive -->
<div class="navbar-for-responsive hidden">
    <div class="mean-menu">
        <ul class="navbar-nav bg-[#01371F]">

            @foreach($menus as $menu)
                <li class="flex flex-row justify-center items-center">
                <a href="/{{ $menu->slug }}" class="block text-black-color active font-semibold text-16px ease-in duration-300 relative text-center w-auto">{{$menu->title}}</a>
                </li>
            @endforeach
            <li class="flex flex-row justify-center items-center">
                <a href="{{ $options['login_link']??"" }}" class="block text-black-color active font-semibold text-16px ease-in duration-300 relative text-center w-auto">login</a>
            </li>
    </div>
</div>
<!-- End Navbar for Responsive -->
