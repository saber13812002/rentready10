<!-- Footer Area -->
<footer class="footer-area bg-[#01371F] pt-60 lg:pt-50 pb-60 lg:pb-50 relative">
    <div class="container">
        <div class="grid gap-25 grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3">
            <div class="single-footer-widget md:pl-25">
                <h3 class="font-bold text-18px md:text-20px lg:text-24px mb-8 md:mb-20 lg:mb-12 text-white">
                    Address
                </h3>
                <p class="text-white font-medium text-22px mb-12">
                    {{ $footers->address }}
                </p>
                <h3 class="font-bold text-18px md:text-20px lg:text-24px mb-8 md:mb-20 lg:mb-12 text-white">
                    Phone
                </h3>
                <p class="text-white font-medium text-22px">
                    {{ $footers->phone }}
                </p>
            </div>
            <div class="single-footer-widget flex flex-row justify-center items-center">
                <a href="/" class="logo inline-block mb-20 lg:mb-25 w-[110px] h-[110px]">
                    <img src="{{ $footers->logo }}" alt="logo">
                </a>
            </div>
            <div class="single-footer-widget flex flex-col justify-between items-end">
                <a class="font-bold text-18px md:text-20px lg:text-24px mb-8 md:mb-20 lg:mb-12 text-white border-b border-white">Contact
                    Us</a>
                <ul class="mt-15 md:mt-25 md:mb-25">
                    <li class="inline-block mr-5 last:mr-0">
                        <a href="{{ $footers->facebook }}" target="_blank"
                           class="block w-35 border-white border rounded-full transition relative h-35 text-center hover:opacity-90">
                            <img src="/storage/assets/img/social/white-facebook.svg"
                                 class="w-8 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="facebook">
                        </a>
                    </li>
                    <li class="inline-block mr-5 last:mr-0">
                        <a href="{{ $footers->twitter }}" target="_blank"
                           class="block w-35 rounded-full border-white border transition relative h-35 text-center hover:opacity-90">
                            <img src="/storage/assets/img/social/white-twitter.svg"
                                 class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="twitter">
                        </a>
                    </li>
                    <li class="inline-block mr-5 last:mr-0">
                        <a href="{{ $footers->linkedin }}" target="_blank"
                           class="block w-35 rounded-full border-white border transition relative h-35 text-center hover:opacity-90">
                            <img src="/storage/assets/img/social/white-linkedin.svg"
                                 class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="linkedin">
                        </a>
                    </li>
                    <li class="inline-block mr-5 last:mr-0">
                        <a href="{{ $footers->instagram }}" target="_blank"
                           class="block w-35 rounded-full border-white border transition relative h-35 text-center hover:opacity-90">
                            <img src="/storage/assets/img/social/white-instagram.svg"
                                 class="w-15 absolute left-0 right-0 top-1/2 m-auto -translate-y-2/4" alt="instagram">
                        </a>
                    </li>
                </ul>
                @if($footers->become_pro_show)
                    <a href="{{$footers->become_pro_link}}"
                       class="font-bold text-18px md:text-20px lg:text-24px mb-8 md:mb-20 lg:mb-12 text-white border-b border-white">Become
                        a Pro</a>
                @else
                    <div></div>
                @endif
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->
