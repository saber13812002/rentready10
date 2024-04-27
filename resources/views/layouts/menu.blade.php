

@foreach($menus as $menu)

    <div class="header-nav-item header-nav-item--collection header-nav-item--active">
        <a href="/{{ $menu->slug }}" data-animation-role="header-element" aria-current="page" class="preSlide slideIn" style="transition-timing-function: ease; transition-duration: 0.45s; transition-delay: 0.0104348s;">
            {{$menu->title}}
        </a>
    </div>

@endforeach
