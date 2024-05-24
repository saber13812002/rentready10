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

<div class="bg-no-repeat bg-cover" style="background-image: url(blob:http://127.0.0.1:8000/9c86431b-034f-4bf3-a8eb-858b485c09f8)">

    <div class="main-banner-area relative z-1 pt-60 md:pt-80 xl:pt-40 h-screen" >


        @include('layouts.menu', compact('menus','footers'))

        @include('layouts.nav_response', compact('menus','footers'))


        <div class="container absolute top-1/3 left-[5%] xl:max-w-full 3xl:max-w-[1700px]">
            <div class="grid gap-25 md:gap-40 grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2">
                <div class="main-banner-content self-center md:text-center lg:text-left mb-30">
                    <h1 class="font-bold text-6rem text-white mb-10 md:mb-12 lg:mb-15"><strong>About Us</strong></h1>
                    <p class="text-11px md:text-30px lg:text-30px leading-8 text-white md:max-w-[625px] lg:max-w-[100%] xl:max-w-[540px] md:m-auto lg:m-0">{{ $options['about_us']??"" }}</p>
                </div>
                <div class="main-banner-image text-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pt-60 md:pt-80 lg:pt-100 pb-60 md:pb-80 lg:pb-100 relative bg-[#01371F]">
    <div class="container">
        <div class="section-title mb-35 md:mb-40 lg:mb-50 text-center">
            <h2 class="font-bold text-22px md:text-30px lg:text-35px xl:text-40px mb-6 text-white">“{{ $options['ceo_word']??"" }}”</h2>
            <p class="lg:text-16px md:text-15px text-13px lg:max-w-2xl lg:mx-auto leading-7 font-bold md:leading-8 text-white">{{ $options['ceo_title']??"" }}</p>
        </div>
    </div>
</div>

<div class="relative pt-60 md:pt-80 lg:pt-200 pb-60 md:pb-80 lg:pb-200 bg-subscription-bg bg-cover bg-no-repeat bg-center before:absolute before:left-0 before:right-0 before:top-0 before:bottom-0 before:bg-[#c0d1c0] before:opacity-30" style="background-image: url(blob:http://127.0.0.1:8000/9c86431b-034f-4bf3-a8eb-858b485c09f8);">
    <div class="container">
        <div class="text-center">
            <h2 class="font-black text-28pxpx md:text-30px lg:text-35px xl:text-65px mb-15 text-white">Discover more about {{ $options['title']??"" }}.</h2>
            <p class="lg:text-24px md:text-22px text-13px leading-7 font-bold md:leading-8 text-[#e1e1e1] lg:max-w-2xl lg:ml-auto lg:mr-auto">{{ $options['discover_more']??"" }}</p>
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
