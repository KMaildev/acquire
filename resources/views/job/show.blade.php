@extends('layouts.main')
@section('title', 'Jobs')
@section('content')

    <section class="page-title-wrapper w-full h-[345px]">
        <div class="theme-container mx-auto h-full">
            <div
                class="w-full h-full flex sm:flex-row flex-col sm:justify-between justify-center space-y-3 sm:space-y-0 items-center">
                <h2 class="headline-default text-primary-900">
                    Jobs
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
                                    {{ $country->country ?? '' }}
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

            <center>
                <h2 class="headline-default text-primary-900 mb-5">
                    Available Job in {{ $country->country ?? '' }}
                </h2>

                <p class="p-b-3" style="font-size: 18px; text-align: justify; color: black;">
                    ACQUIRE COMPANY LIMITED is a leading international employment agency specializing in
                    connecting employers
                    from all over the world with the best and most qualified candidates. With a wide network of
                    recruitment professionals, our team is dedicated to matching employers with the ideal candidates to
                    help your business succeed.
                </p>
            </center>
            <br>

            <div class="w-full grid sm:grid-cols-3 grid-cols-1 gap-[30px] pb-[60px] sm:pb-0">
                @foreach ($jobs as $job)
                    <a href="{{ route('cv.index') }}">
                        <div class="service-item bg-white w-full lg:p-10 p-6 rounded border border-primaryBorder">
                            <p class="text-lg font-semibold text-gray-700 mb-9">
                                Job in {{ $job->country->country ?? '' }}
                            </p>
                            <div class="mb-8">
                                <img src="{{ $job->photo }}" alt="" style="width: 100px; height: 100px;" />
                            </div>
                            <p class="lg:text-lg text-sm font-bold spline-sans sm:leading-7 text-primary-900 mb-5"
                                style="background-color: gray; padding: 14px; color: white;">
                                {{ $job->title ?? '' }}
                            </p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

@endsection
