@extends('layouts.main')
@section('content')
    <section class="page-title-wrapper w-full h-[345px]">
        <div class="theme-container mx-auto h-full">
            <div
                class="w-full h-full flex sm:flex-row flex-col sm:justify-between justify-center space-y-3 sm:space-y-0 items-center">
                <h2 class="headline-default text-primary-900">
                    About Us
                </h2>
                <ul class="breadcrumb-wrapper flex space-x-5 items-center">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <div class="flex space-x-5 items-center">
                                <span
                                    class="sm:text-lg text-primary-500 sm:leading-[27px] text-sm font-semibold spline-sans">
                                    Home
                                </span>
                                <span class="ico">
                                    <svg width="9" height="13" viewBox="0 0 9 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 12.5C1.71875 12.5 1.46875 12.4062 1.28125 12.2188C0.875 11.8438 0.875 11.1875 1.28125 10.8125L5.5625 6.5L1.28125 2.21875C0.875 1.84375 0.875 1.1875 1.28125 0.8125C1.65625 0.40625 2.3125 0.40625 2.6875 0.8125L7.6875 5.8125C8.09375 6.1875 8.09375 6.84375 7.6875 7.21875L2.6875 12.2188C2.5 12.4062 2.25 12.5 2 12.5Z"
                                            fill="#028835" />
                                    </svg>
                                </span>
                            </div>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">
                            <div class="flex space-x-5 items-center">
                                <span
                                    class="sm:text-lg text-primary-500 sm:leading-[27px] text-sm font-semibold spline-sans">
                                    President's Message
                                </span>
                                <span class="ico">
                                    <svg width="9" height="13" viewBox="0 0 9 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 12.5C1.71875 12.5 1.46875 12.4062 1.28125 12.2188C0.875 11.8438 0.875 11.1875 1.28125 10.8125L5.5625 6.5L1.28125 2.21875C0.875 1.84375 0.875 1.1875 1.28125 0.8125C1.65625 0.40625 2.3125 0.40625 2.6875 0.8125L7.6875 5.8125C8.09375 6.1875 8.09375 6.84375 7.6875 7.21875L2.6875 12.2188C2.5 12.4062 2.25 12.5 2 12.5Z"
                                            fill="#028835" />
                                    </svg>
                                </span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>




    <section class="faq-section-main-wrapper w-full lg:-mt-[327px] sm:-mt-[466px] my-[60px] relative z-10">
        <div class="theme-container mx-auto">
            <div data-aos="fade-up" data-aos-duration="1000"
                class="faq-two xl:w-[5000px] w-full bg-white sm:p-[60px] p-0 rounded-[10px] flex xl:flex-row flex-col xl:space-x-[75px] space-y-[75px] xl:space-y-0 xl:items-center">

                <div class="sm:w-[525px] w-full xl:h-[741px] h-[500px] relative rounded-[10px] overflow-hidden">
                    <img src="{{ asset('data/company/md.jpeg') }}" alt="thumb" class="w-full h-full object-cover" />
                </div>

                <div>
                    <p class="text-primary-500 font-bold sm:leading-8 spline-sans sm:text-xl text-md uppercase mb-2">
                        ACQUIRE COMPANY LIMITED
                    </p>
                    <h2 class="headline-default text-primary-900 mb-[60px]">
                        President's Message
                    </h2>
                    <div class="xl:w-[570px] w-full flex flex-col space-y-5">
                        <p style="text-align: justify; font-size: 18px; color: black;">
                            As the President of our esteemed overseas employment agency, I want to extend a
                            heartfelt welcome to all aspiring professionals seeking exceptional
                            opportunities abroad and to our valued clients entrusting us with their talent
                            acquisition needs.
                            <br><br>
                            Our mission is clear: to connect global talent with remarkable employment
                            prospects while fostering cultural exchange. We are committed to providing
                            comprehensive and reliable overseas employment services, guiding you every step
                            of the way to ensure your success.
                            <br><br>
                            With integrity, excellence, diversity, and responsiveness as our guiding
                            principles, we strive to deliver superior services and create a positive impact
                            on individuals and societies worldwide.
                            <br><br>
                            Thank you for trusting us with your aspirations and requirements. Together,
                            let's achieve new heights in your career or find the exceptional talent your
                            organization deserves.

                            <br><br>
                            Best Regards! 
                            <br>
                            Daw Wai Me Htun
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
@endsection
