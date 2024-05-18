<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/storage/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/storage/assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="/storage/assets/css/animate.min.css">
    <link rel="stylesheet" href="/storage/assets/dist/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <title>{{ $options['title']??"" }}</title>
    <link rel="icon" type="image/png" href="/storage/assets/img/logo.png">
</head>
<body dir="ltr">

<div class="bg-[#c0d1c0]">
    <div class="main-banner-area relative z-1">

        @include('layouts.menu', compact('menus','footers'))

        @include('layouts.nav_response', compact('menus','footers'))


        <div class="main-banner-area bg-[#c0d1c0] relative z-1 pt-60 md:pt-80 xl:pt-40">
            <div class="container xl:max-w-full 3xl:max-w-[1700px]">
                <div class="w-full flex flex-row justify-center items-center">
                    <div class="main-banner-content self-center md:text-center lg:text-left mb-30">
                        <h1 class="font-bold text-center text-25px md:text-40px lg:text-44px xl:text-55px 2xl:text-60px 3xl:text-70px text-black-color mb-10 md:mb-12 lg:mb-15">
                            <strong>{{ $options['solutions_title']??"" }}</strong></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div
    class="features-area flex flex-row justify-center items-center h-[100vh] pt-30 lg:pt-50 pb-60 md:pb-80 lg:pb-50 relative z-1 bg-cover bg-no-repeat"
    style="background-image: url(https://images.squarespace-cdn.com/content/v1/65e8d0f31425f9758c64fabb/9e10d46c-b996-40f8-81d9-56245cf45d4a/Pros.png)">
    <div class="container">
        <h1 class="font-bold text-center text-25px md:text-40px lg:text-44px xl:text-55px 2xl:text-60px 3xl:text-70px text-white mb-10 md:mb-12 lg:mb-15">
            {{ $options['our_services_title']??"" }}</h1>
        <div class="section-title md:mb-20 lg:mb-20 text-center flex flex-row items-center justify-between">
            <ul>
                @foreach($our_services->where('odd',1) as $our_service)
                    <li class="mb-15 lg:mb-18 last:mb-0 relative flex flex-row items-center gap-18">
                        <img
                            src="{{ $our_service->logo }}"
                            class="w-[76px] h-[78px] bg-center bg-no-repeat bg-cover relative font-bold text-15px text-secondary-color text-center"
                            alt=""/>
                        <h1 class="font-bold text-14px md:text-15px lg:text-30px">
                            <a href="blog-details.html" class="inline-block text-white ease-in duration-300">
                               {{ $our_service->title }}
                            </a>
                        </h1>
                    </li>
                @endforeach
            </ul>
            <ul>
                @foreach($our_services->where('odd',0) as $our_service)
                    <li class="mb-15 lg:mb-18 last:mb-0 relative flex flex-row items-center gap-18">
                        <img
                            src="{{ $our_service->logo }}"
                            class="w-[76px] h-[78px] bg-center bg-no-repeat bg-cover relative font-bold text-15px text-secondary-color text-center"
                            alt=""/>
                        <h1 class="font-bold text-14px md:text-15px lg:text-30px">
                            <a href="blog-details.html" class="inline-block text-white ease-in duration-300">
                                {{ $our_service->title }}
                            </a>
                        </h1>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<div class="pt-60 pb-60 md:pt-80 lg:pt-100 bg-[#c0d1c0] relative z-1">
    <div class="container">
        <h1 class="font-bold text-center text-25px md:text-40px lg:text-44px xl:text-55px 2xl:text-60px 3xl:text-70px text-black-color mb-30 md:mb-30 lg:mb-50">
            {{ $options['solution_benefits_title']??"" }}</h1>
        <div
            class="grid md:gap-50 lg:gap-25 xl:gap-50 grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2">
            <div>
                <div class="relative flex flex-row items-start gap-20 ease-in duration-300 rounded-lg mt-25">
                    <div class="flex flex-row justify-start items-start pt-10 -z-1 mb-18 md:mb-0">
                        <img
                            src="https://images.squarespace-cdn.com/content/v1/65e8d0f31425f9758c64fabb/a2795dca-6eca-4388-b7dc-0b55ec7e25b1/1.png">
                    </div>
                    <div>
                        <h3 class="font-bold text-22px md:text-28px lg:text-34px mb-8">
                            <a href="blog-details.html"
                               class="inline-block text-black-color ease-in duration-300">
                                Faster Turn Times </a>
                        </h3>
                        <p class="leading-7 md:leading-8 text-optional-color mb-10 md:mb-15 text-13px md:text-15px lg:text-16px">
                            Our digital turn board automates service scheduling with Rent Ready's Vendor Network,
                            helping shave days off your turns so you can put units back on the market faster. </p>
                    </div>
                </div>
                <div class="relative flex flex-row items-start gap-20 ease-in duration-300 rounded-lg mt-25">
                    <div class="flex flex-row justify-start items-start pt-10 -z-1 mb-18 md:mb-0">
                        <img
                            src="https://images.squarespace-cdn.com/content/v1/65e8d0f31425f9758c64fabb/a2795dca-6eca-4388-b7dc-0b55ec7e25b1/1.png">
                    </div>
                    <div>
                        <h3 class="font-bold text-22px md:text-28px lg:text-34px mb-8">
                            <a href="blog-details.html"
                               class="inline-block text-black-color ease-in duration-300">
                                Faster Turn Times </a>
                        </h3>
                        <p class="leading-7 md:leading-8 text-optional-color mb-10 md:mb-15 text-13px md:text-15px lg:text-16px">
                            Our digital turn board automates service scheduling with Rent Ready's Vendor Network,
                            helping shave days off your turns so you can put units back on the market faster. </p>
                    </div>
                </div>
                <div class="relative flex flex-row items-start gap-20 ease-in duration-300 rounded-lg mt-25">
                    <div class="flex flex-row justify-start items-start pt-10 -z-1 mb-18 md:mb-0">
                        <img
                            src="https://images.squarespace-cdn.com/content/v1/65e8d0f31425f9758c64fabb/a2795dca-6eca-4388-b7dc-0b55ec7e25b1/1.png">
                    </div>
                    <div>
                        <h3 class="font-bold text-22px md:text-28px lg:text-34px mb-8">
                            <a href="blog-details.html"
                               class="inline-block text-black-color ease-in duration-300">
                                Faster Turn Times </a>
                        </h3>
                        <p class="leading-7 md:leading-8 text-optional-color mb-10 md:mb-15 text-13px md:text-15px lg:text-16px">
                            Our digital turn board automates service scheduling with Rent Ready's Vendor Network,
                            helping shave days off your turns so you can put units back on the market faster. </p>
                    </div>
                </div>
            </div>
            <div>
                <a href="blog-details.html" class="block">
                    <img
                        src="https://images.squarespace-cdn.com/content/v1/65e8d0f31425f9758c64fabb/1f25fe2f-dbc8-4124-b880-04b1b1b90caf/Group+2772.png"
                        class="rounded-lg mb-25 inline-block" alt="blog-image">
                </a>
            </div>
        </div>
    </div>
</div>

<div class="pt-60 md:pt-80 lg:pt-100 pb-60 md:pb-80 lg:pb-100">
    <!-- Overview Area -->
    <div class="overview-area relative z-1">
        <div class="container">
            <div class="flex flex-row justify-start items-center w-full relative">
                <div class="overview-image z-1 w-[50%] h-full">
                    <img
                        src="https://images.squarespace-cdn.com/content/v1/65e8d0f31425f9758c64fabb/1b39e0e5-ca65-43ea-a36d-f910227c9019/1.png?format=750w 750w"
                        class="rounded-md wow animate__animated animate__fadeInUp" data-wow-delay=".1s" alt="">
                </div>
                <div
                    class="overview-content w-[50%] flex flex-col justify-center items-center gap-18 self-center lg:relative lg:top-12 xl:top-20">
                    <img alt=""
                         src="https://images.squarespace-cdn.com/content/v1/65e8d0f31425f9758c64fabb/4cff5693-8143-4142-927d-85090be599c0/1.png"
                         class="w-[100px] h-100"/>
                    <p class="font-bold text-13px md:text-30px lg:text-20px leading-7 md:leading-8 text-optional-color text-center w-[350px]">
                        The residents' notice to vacate status automatically triggers the turn scheduling process
                        through
                        our integration with your property management system.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Overview Area -->

    <!-- Overview Area -->
    <div class="overview-area relative z-1">
        <div class="container">
            <div class="flex flex-row justify-start items-center w-full relative">
                <div
                    class="overview-content w-[50%] flex flex-col justify-center items-center gap-18 self-center lg:relative lg:top-12 xl:top-20">
                    <img alt=""
                         src="https://images.squarespace-cdn.com/content/v1/65e8d0f31425f9758c64fabb/4cff5693-8143-4142-927d-85090be599c0/1.png"
                         class="w-[100px] h-100"/>
                    <p class="font-bold text-13px md:text-30px lg:text-20px leading-7 md:leading-8 text-optional-color text-center w-[350px]">
                        The residents' notice to vacate status automatically triggers the turn scheduling process
                        through
                        our integration with your property management system.</p>
                </div>
                <div class="overview-image z-1 w-[50%] h-full">
                    <img
                        src="https://images.squarespace-cdn.com/content/v1/65e8d0f31425f9758c64fabb/1b39e0e5-ca65-43ea-a36d-f910227c9019/1.png?format=750w 750w"
                        class="rounded-md wow animate__animated animate__fadeInUp" data-wow-delay=".1s" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- End Overview Area -->

    <!-- Overview Area -->
    <div class="overview-area relative z-1">
        <div class="container">
            <div class="flex flex-row justify-start items-center w-full relative">
                <div class="overview-image z-1 w-[50%] h-full">
                    <img
                        src="https://images.squarespace-cdn.com/content/v1/65e8d0f31425f9758c64fabb/1b39e0e5-ca65-43ea-a36d-f910227c9019/1.png?format=750w 750w"
                        class="rounded-md wow animate__animated animate__fadeInUp" data-wow-delay=".1s" alt="">
                </div>
                <div
                    class="overview-content w-[50%] flex flex-col justify-center items-center gap-18 self-center lg:relative lg:top-12 xl:top-20">
                    <img alt=""
                         src="https://images.squarespace-cdn.com/content/v1/65e8d0f31425f9758c64fabb/4cff5693-8143-4142-927d-85090be599c0/1.png"
                         class="w-[100px] h-100"/>
                    <p class="font-bold text-13px md:text-30px lg:text-20px leading-7 md:leading-8 text-optional-color text-center w-[350px]">
                        The residents' notice to vacate status automatically triggers the turn scheduling process
                        through
                        our integration with your property management system.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Overview Area -->
</div>

<div class="pt-60 pb-60 md:pt-80 lg:pt-100 bg-[#c0d1c0] relative z-1">
    <div class="container">
        <div class="text-center xl:ml-auto xl:mr-auto xl:max-w-[1115px]">
            <h1 class="font-black text-black-color text-25px md:text-40px lg:text-51px xl:text-65px mb-12 md:mb-15 lg:mb-20">
                Ready to Level Up Your Make Ready Process? Let’s Talk.</h1>
            <a href="profile-authentication.html"
               class="inline-block mt-0 md:mt-5 lg:mt-10 font-semibold text-13px md:text-14px lg:text-15px rounded-xl text-white pt-17 pb-15 pl-35 pr-35 bg-[#14944c] shadow-custom-box-shadow hover:shadow-primary-btn ease-in duration-300">
                Schedule a Call with Sales
            </a>
        </div>
    </div>
</div>

<div class="pt-60 pb-60 md:pt-80 lg:pt-100 bg-[#c0d1c0] relative z-1">
    <div class="container">
        <div class="text-center xl:ml-auto xl:mr-auto xl:max-w-[1115px]">
            <h1 class="font-black text-black-color text-25px md:text-40px lg:text-51px xl:text-65px mb-12 md:mb-15 lg:mb-20">
                Ready to Level Up Your Make Ready Process? Let’s Talk.</h1>
            <a href="profile-authentication.html"
               class="inline-block mt-0 md:mt-5 lg:mt-10 font-semibold text-13px md:text-14px lg:text-15px rounded-xl text-white pt-17 pb-15 pl-35 pr-35 bg-[#14944c] shadow-custom-box-shadow hover:shadow-primary-btn ease-in duration-300">
                Schedule a Call with Sales
            </a>
        </div>
    </div>
</div>


@include('layouts.footer',compact('footers'))


<script src="/storage/assets/js/jquery.min.js"></script>
<script src="/storage/assets/js/swiper-bundle.min.js"></script>
<script src="/storage/assets/js/meanmenu.min.js"></script>
<script src="/storage/assets/js/main.js"></script>
</body>
</html>

