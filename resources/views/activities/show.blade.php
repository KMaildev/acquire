@extends('layouts.main')
@section('title', 'Activities')
@section('content')


    <section class="page-title-wrapper w-full h-[345px]">
        <div class="theme-container mx-auto h-full">
            <div
                class="w-full h-full flex sm:flex-row flex-col sm:justify-between justify-center space-y-3 sm:space-y-0 items-center">
                <h2 class="headline-default text-primary-900">
                    Gallery & Activities
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
                                    {{ $category->title ?? '' }}
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

    <div class="lg:pt-[120px] lg:pb-[240px] pt-[60px] pb-[120px]">
        <div class="theme-container mx-auto">
            <div class="w-full">

                <center>
                    <h2 class="headline-default text-primary-900 mb-5">
                        Our Gallery & Activities
                    </h2>

                    <p class="p-b-3" style="font-size: 18px; text-align: justify; color: black;">
                        Our gallery showcases a vibrant collection of photographs and testimonials from individuals who
                        have successfully found employment through our agency. These visuals depict diverse work
                        environments, cultural experiences, and personal growth opportunities that await those who
                        embark on their overseas employment journey with us. From bustling cityscapes to breathtaking
                        natural landscapes, our gallery captures the essence of working abroad and inspires our clients
                        to explore new horizons.
                    </p>
                </center>
                <br>
                <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 lg:gap-y-[80px] gap-y-[60px] gap-x-[30px]">
                    @foreach ($activities as $activity)
                        @php
                            $images = explode(',', $activity->images);
                        @endphp
                        @foreach ($images as $image)
                            <a href="javascript::void(0)">
                                <div class="w-full relative group">
                                    <div class="w-full h-[440px] rounded overflow-hidden">
                                        <img data-enlargeable="" src="{{ $image }}"
                                            class="w-full h-full object-cover" alt="blog" />
                                    </div>
                                    <div class="w-full px-10 absolute -bottom-[34px]">
                                        <div style="box-shadow: 0 0 60px rgba(0, 0, 0, 0.05)"
                                            class="w-full h-[68px] bg-white rounded flex justify-center items-center group-hover:bg-primary-500 common-trans">
                                            <span
                                                class="text-lg font-bold spline-sans text-primary-900 group-hover:text-white common-trans">
                                                {{ $activity->title ?? '' }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
