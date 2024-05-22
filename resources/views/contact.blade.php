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

<div class="bg-[#01371F]">
    <div class="main-banner-area relative z-1 h-fit pb-13">

        @include('layouts.menu', compact('menus','footers'))

        @include('layouts.nav_response', compact('menus','footers'))

        <div class="container xl:max-w-full">
            <div class="flex flex-row justify-center">
                <div class="w-[45rem]">
                    <h2 class="font-bold text-22px md:text-30px lg:text-68px mb-25 lg:mb-35 text-white text-center">
                        Questions?</h2>
                    <form class="flex flex-col justify-center items-center" method="POST"
                          action="{{ route('submit-form') }}">

                        @csrf

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @else

                            <div class="w-full">
                                <div class="flex flex-row items-center justify-between gap-20 p-20">
                                    <div class="flex flex-col justify-start items-start w-full">
                                        <label class="font-bold text-white">First Name</label>
                                        <input type="text" name="first_name"
                                               class="block w-full rounded-xl text-white bg-[#F5F0E8] h-50 lg:h-42 leading-[50px] lg:leading-[60px] pl-15 pr-15  outline-0   text-13px md:text-15px lg:text-16px">
                                    </div>
                                    <div class="flex flex-col justify-start items-start w-full">
                                        <label class="font-bold text-white">Last Name</label>
                                        <input type="text" name="last_name"
                                               class="block w-full rounded-xl text-white bg-[#F5F0E8] h-50 lg:h-42 leading-[50px] lg:leading-[60px] pl-15 pr-15  outline-0   text-13px md:text-15px lg:text-16px">
                                    </div>
                                </div>
                                <div class="p-20">
                                    <label class="font-bold text-white">Company (required)</label>
                                    <div class="grid gap-20 grid-cols-1 ">
                                        <input type="text" name="company"
                                               class="block w-full rounded-xl text-white bg-[#F5F0E8] h-50 lg:h-42 leading-[50px] lg:leading-[60px] pl-15 pr-15  outline-0   text-13px md:text-15px lg:text-16px">
                                    </div>
                                </div>
                                <div class="p-20">
                                    <label class="font-bold text-white">Phone Number (required)</label>
                                    <div class="grid gap-20 grid-cols-1 ">
                                        <input type="text" name="phone"
                                               class="block w-full rounded-xl text-white bg-[#F5F0E8] h-50 lg:h-42 leading-[50px] lg:leading-[60px] pl-15 pr-15  outline-0   text-13px md:text-15px lg:text-16px">
                                    </div>
                                </div>
                                <div class="p-20">
                                    <label class="font-bold text-white">Email (required)</label>
                                    <div class="grid gap-20 grid-cols-1 ">
                                        <input type="text" name="email"
                                               class="block w-full rounded-xl text-white bg-[#F5F0E8] h-50 lg:h-42 leading-[50px] lg:leading-[60px] pl-15 pr-15  outline-0   text-13px md:text-15px lg:text-16px">
                                    </div>
                                </div>
                                <div class="p-20">
                                    <label class="font-bold text-white">Questions? How can we help?</label>
                                    <div class="grid gap-20 grid-cols-1 ">
                                        <input type="text" name="topic"
                                               class="block w-full rounded-xl text-white bg-[#F5F0E8] h-50 lg:h-42 leading-[50px] lg:leading-[60px] pl-15 pr-15  outline-0   text-13px md:text-15px lg:text-16px">
                                    </div>
                                </div>
                            </div>


                            <button type="submit"
                                    class="inline-block font-semibold text-13px md:text-14px lg:text-15px mt-15 md:mt-25 rounded-xl text-black-color pt-17 pb-13 pl-35 pr-35 bg-[#c0d1c0]">
                                Submit
                            </button>
                        @endif


                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pt-40 md:pt-40 lg:pt-40 pb-40 md:pb-40 lg:pb-40 relative">
    <div class="container">
        <div class="section-title text-center">
            <h1 class="font-bold text-22px md:text-50px lg:text-50px mb-6 text-black-color">General Contact</h1>
            <div>
                <h2 class="font-bold text-35px">Address</h2>
                <p class="md:text-22px text-13px lg:max-w-2xl lg:mx-auto leading-7 font-medium md:leading-8 text-optional-color">{{ $footers->address }}</p>
            </div>
            <div class="mt-30">
                <h2 class="font-bold text-35px">Phone</h2>
                <p class="md:text-22px text-13px lg:max-w-2xl lg:mx-auto leading-7 font-medium md:leading-8 text-optional-color">{{ $footers->phone }}</p>
            </div>
            <div class="mt-30">
                <h2 class="font-bold text-35px">Connect with Us</h2>
                <ul class="mt-15 md:mt-25">
                    <li class="inline-block mr-5 last:mr-0">
                        <a href="{{ $footers->facebook }}" target="_blank"
                           class="block w-35 rounded-full transition relative h-35 bg-[#4267B2] text-center hover:opacity-90">
                            <img src="/storage/assets/img/social/white-facebook.svg"
                                 class="w-8 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="facebook">
                        </a>
                    </li>
                    <li class="inline-block mr-5 last:mr-0">
                        <a href="{{ $footers->twitter }}" target="_blank"
                           class="block w-35 rounded-full transition relative h-35 bg-[#1DA1F2] text-center hover:opacity-90">
                            <img src="/storage/assets/img/social/white-twitter.svg"
                                 class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="twitter">
                        </a>
                    </li>
                    <li class="inline-block mr-5 last:mr-0">
                        <a href="{{ $footers->linkedin }}" target="_blank"
                           class="block w-35 rounded-full transition relative h-35 bg-[#2867B2] text-center hover:opacity-90">
                            <img src="/storage/assets/img/social/white-linkedin.svg"
                                 class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="linkedin">
                        </a>
                    </li>
                    <li class="inline-block mr-5 last:mr-0">
                        <a href="{{ $footers->instagram }}" target="_blank"
                           class="block w-35 rounded-full transition relative h-35 bg-instagram-gradient-color text-center hover:opacity-90">
                            <img src="/storage/assets/img/social/white-instagram.svg"
                                 class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="instagram">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer',compact('footers'))

<div
    class="progress-wrap bg-white rounded-full block z-50 cursor-pointer fixed w-[3rem] h-[3rem] right-24 bottom-24 opacity-0 invisible">
    <svg xmlns="http://www.w3.org/2000/svg"
         class="h-24 w-24 text-center m-auto absolute left-0 right-0 top-1/2 -translate-y-2/4" fill="none"
         viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7l4-4m0 0l4 4m-4-4v18"/>
    </svg>
</div>

<script src="/storage/assets/js/jquery.min.js"></script>
<script src="/storage/assets/js/swiper-bundle.min.js"></script>
<script src="/storage/assets/js/meanmenu.min.js"></script>
<script src="/storage/assets/js/main.js"></script>
</body>
</html>
