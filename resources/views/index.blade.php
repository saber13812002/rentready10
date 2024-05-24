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
    <link rel="icon" type="image/png" href="{{ $footers->logo }}">
</head>
<body dir="ltr">

<div class="bg-cover bg-no-repeat" style="background-image: url({{ $backgrounds['slider']??"" }})">

    <div class="main-banner-area relative z-1 h-fit">

        @include('layouts.menu', compact('menus','footers'))

        @include('layouts.nav_response', compact('menus','footers'))

        <div class="main-banner-area lg:bg-transparent flex flex-row justify-center items-center h-full relative">
            <div class="container xl:max-w-full 3xl:max-w-[1700px]">
                @foreach($sliders as $slider)
                    <div
                        class="grid gap-25 md:gap-40 grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2">
                        <div class="main-banner-content self-center md:text-center lg:text-left mb-30">
                            <h1 class="font-bold text-25px md:text-40px lg:text-68px 2xl:text-60px 3xl:text-70px text-white mb-10 md:mb-12 lg:mb-15">
                                <strong>{{ $slider->title }}</strong></h1>
                            <p class="text-13px md:text-15px lg:text-15px xl:text-30px leading-9 text-white md:max-w-[625px] lg:max-w-[100%] xl:max-w-[540px] md:m-auto lg:m-0">
                                {{ $slider->description }}</p>
                        </div>
                        <div class="main-banner-image text-center wow animate__animated animate__fadeInUp"
                             data-wow-delay=".1s">
                            <img
                                src="{{ $slider->image }}"
                                alt="main-banner-image">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>

<div class="features-area pt-30 lg:pt-50 pb-60 md:pb-80 lg:pb-50 relative bg-[#01371F]">
    <div class="container">
        <div class="section-title md:mb-20 lg:mb-20 text-center">
            <h2 class="font-black text-22px md:text-30px lg:text-35px xl:text-65px mb-6 text-white">
                {{ $options['why_title']??"" }}</h2>
            <p class="lg:text-30px md:text-15px text-13px lg:max-w-2xl lg:mx-auto leading-7 md:leading-9 text-white">
                {{ $options['why']??"" }}</p>
        </div>
    </div>
</div>

<div class="pt-60 md:pt-80 lg:pt-100 bg-[#c0d1c0] relative">
    <div class="container">
        <div
            class="grid md:gap-50 lg:gap-25 xl:gap-50 grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2">
            <div>
                @foreach($benefits as $benefit)
                    <div class="relative flex flex-row items-start gap-20 ease-in duration-300 rounded-lg mt-25">
                        <div class="flex flex-row justify-start items-start pt-10 mb-18 md:mb-0">
                            <img
                                src="{{ $benefit->logo }}">
                        </div>
                        <div>
                            <h3 class="font-bold text-22px md:text-28px lg:text-34px mb-8">
                                {{ $benefit->title }}
                            </h3>
                            <p class="leading-7 md:leading-8 text-optional-color mb-10 md:mb-15 text-13px md:text-15px lg:text-16px">{{ $benefit->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div>
                <img
                    src="{{ $benefits[0]->image??"" }}"
                    class="rounded-lg mb-25 inline-block wow animate__animated animate__fadeInUp" alt="benefits-image" data-wow-delay=".1s">
            </div>
        </div>
    </div>
</div>

<div class="feedback-area relative pt-60 md:pt-80 lg:pt-100 pb-60 md:pb-80 lg:pb-100 bg-[#01371F]">
    <div
        class="customOne swiper-button-prev absolute left-0 top-1/2 mt-0 w-42 md:w-50 bg-white shadow-custom-box-shadow3 rounded-full mr-10 opacity-100 h-42 md:h-50 top-0 inline-block after:hidden hover:bg-secondary-gradient-color">
        <svg xmlns="http://www.w3.org/2000/svg"
             class="h-26 w-26 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12"/>
        </svg>
    </div>
    <div class="swiper feedbackSwiperSlides -mb-20 pl-15 pr-15 md:pl-0 md:pr-0 z-0">
        <div class="swiper-wrapper">
            @foreach($quotes as $quote)
                <div class="swiper-slide flex flex-row justify-center items-center text-center">
                    <div class="single-feedback-box w-[450px]">
                        <div>
                            <h1 class="text-[#c1d2c1] font-bold text-28px md:text-60px lg:text- leading-7 md:leading-[5rem]">
                                "{{ $quote->content }}"</h1>
                            <div class="client-info flex items-center justify-center mt-15 md:mt-20">
                                <div class="title ml-15 md:ml-20 self-center">
                                    <h3 class="text-[#c1d2c1] text-16px md:text-17px lg:text-18px font-bold mb-5 md:mb-8">
                                        {{ $quote->author }}</h3>
                                    <span
                                        class="text-13px md:text-14px text-[#c1d2c1] font-medium opacity-95">{{ $quote->localtion }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div
        class="customTwo swiper-button-next absolute right-0 top-1/2 mt-0 w-42 md:w-50 bg-white shadow-custom-box-shadow3 rounded-full ml-10 h-42 md:h-50 top-0 inline-block after:hidden hover:bg-secondary-gradient-color">
        <svg xmlns="http://www.w3.org/2000/svg"
             class="h-20 w-20 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
        </svg>
    </div>
</div>

@include('layouts.footer',compact('footers'))

<script src="/storage/assets/js/jquery.min.js"></script>
<script src="/storage/assets/js/swiper-bundle.min.js"></script>
<script src="/storage/assets/js/meanmenu.min.js"></script>
<script src="/storage/assets/js/main.js"></script>
<script src="/storage/assets/js/wow.min.js"></script>
</body>
</html>
