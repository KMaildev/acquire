<section class="hero-area-2 w-full lg:h-[758px] py-20 relative">
    <div class="theme-container h-full mx-auto">
        <div class="w-full grid lg:grid-cols-2 grid-cols-1 gap-[30px] lg:gap-0 h-full justify-center items-center">
            <div class="article-area">
                <h1
                    class="text-primary-900 xl:text-[70px] text-[50px] font-bold leading-[60px] xl:leading-[70px] mb-5 text-center lg:text-start">
                    ACQUIRE COMPANY LIMITED
                </h1>
                <p class="text-primary-900 text-base leading-7 mb-9 text-center lg:text-start">
                    We are ready to deliver foreign workers to employers directly to the workplace.
                </p>
                <div class="flex justify-center lg:justify-start space-x-10 items-center">
                    <a href="{{ route('about.index') }}">
                        <div
                            class="px-[46px] py-[20px] bg-primary-500 hover:bg-primary-900 common-trans rounded-lg text-white text-lg spline-sans leading-none">
                            <span>
                                Read More
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div data-aos="fade-left" data-aos-duration="1000"
                class="thumb-area xl:h-auto h-[500px] transform xl:scale-100 scale-90">
                <img src="{{ asset('assets/img/hero-img-2.png') }}" alt=""
                    class="w-full h-full object-contain" />
            </div>
        </div>
    </div>
    <div>
        <div class="shape absolute left-5 bottom-[314px]">
            <img src="{{ asset('assets/img/hero-shape-1.png') }}" alt="" class="opacity-[0.1]" />
        </div>
        <div class="shape absolute left-[80px] bottom-[160px]">
            <img src="{{ asset('assets/img/hero-shape-2.png') }}" alt="" />
        </div>
        <div class="shape absolute left-5 bottom-5">
            <img src="{{ asset('assets/img/hero-shape-3.png') }}" alt="" class="opacity-[0.1]" />
        </div>
        <div class="shape absolute left-[218px] bottom-5">
            <img src="{{ asset('assets/img/hero-shape-4.png') }}" alt="" class="opacity-[0.1]" />
        </div>
    </div>
</section>
