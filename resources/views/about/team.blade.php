@extends('layouts.main')
@section('content')
    <section class="page-title-wrapper w-full h-[345px]">
        <div class="theme-container mx-auto h-full">
            <div
                class="w-full h-full flex sm:flex-row flex-col sm:justify-between justify-center space-y-3 sm:space-y-0 items-center">
                <h2 class="headline-default text-primary-900">
                    Team
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
                                    Meet Our Team Members
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



    <section class="financ-section py-[60px]">
        <div class="theme-container mx-auto">
            <div class="w-full relative">
                <h2 class="headline-default text-primary-900 lg:mb-[60px] mb-[30px]">
                    Meet Our Team Members
                </h2>

                <p class="p-b-3" style="font-size: 18px; text-align: justify; color: black;">
                    Our overseas employment agency consists of a skilled team dedicated to connecting talented
                    individuals with international job opportunities. We have a deep understanding of global
                    markets,
                    immigration laws, and visa processes. Our extensive network of contacts allows us to offer a
                    wide
                    range of employment opportunities in various sectors. We prioritize transparency, ethical
                    practices,
                    and open communication, providing personalized guidance and support to job seekers. Our
                    commitment
                    to excellence ensures successful placements and long-term relationships with clients.
                </p>
                <br>
                
                <div class="financ-swiper overflow-hidden">
                    <div class="swiper-wrapper">
                        @foreach ($teams as $team)
                            <div class="swiper-slide">
                                <div class="item sm:p-10 p-5 border border-primaryBorder rounded">
                                    <div class="flex justify-between items-start mb-5">
                                        <div class="flex space-x-5 items-center">
                                            <div class="w-[80px] h-[80px] rounded-full border border-primary-500">
                                                <img src="{{ $team->photo }}" alt=""
                                                    class="w-full h-full object-cover" />
                                            </div>
                                            <div class="flex-1">
                                                <div class="flex items-center mb-2.5">
                                                    <span>
                                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10.418 4.87891L14.3281 5.45312C14.6562 5.50781 14.9297 5.72656 15.0391 6.05469C15.1484 6.35547 15.0664 6.71094 14.8203 6.92969L11.9766 9.74609L12.6602 13.7383C12.7148 14.0664 12.5781 14.3945 12.3047 14.5859C12.0312 14.8047 11.6758 14.8047 11.375 14.668L7.875 12.7812L4.34766 14.668C4.07422 14.8047 3.69141 14.8047 3.44531 14.5859C3.17188 14.3945 3.03516 14.0664 3.08984 13.7383L3.74609 9.74609L0.902344 6.92969C0.65625 6.71094 0.574219 6.35547 0.683594 6.05469C0.792969 5.72656 1.06641 5.50781 1.39453 5.45312L5.33203 4.87891L7.08203 1.24219C7.21875 0.941406 7.51953 0.75 7.875 0.75C8.20312 0.75 8.50391 0.941406 8.64062 1.24219L10.418 4.87891Z"
                                                                fill="#FFDF00" />
                                                        </svg>
                                                    </span>
                                                    <span>
                                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10.418 4.87891L14.3281 5.45312C14.6562 5.50781 14.9297 5.72656 15.0391 6.05469C15.1484 6.35547 15.0664 6.71094 14.8203 6.92969L11.9766 9.74609L12.6602 13.7383C12.7148 14.0664 12.5781 14.3945 12.3047 14.5859C12.0312 14.8047 11.6758 14.8047 11.375 14.668L7.875 12.7812L4.34766 14.668C4.07422 14.8047 3.69141 14.8047 3.44531 14.5859C3.17188 14.3945 3.03516 14.0664 3.08984 13.7383L3.74609 9.74609L0.902344 6.92969C0.65625 6.71094 0.574219 6.35547 0.683594 6.05469C0.792969 5.72656 1.06641 5.50781 1.39453 5.45312L5.33203 4.87891L7.08203 1.24219C7.21875 0.941406 7.51953 0.75 7.875 0.75C8.20312 0.75 8.50391 0.941406 8.64062 1.24219L10.418 4.87891Z"
                                                                fill="#FFDF00" />
                                                        </svg>
                                                    </span>
                                                    <span>
                                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10.418 4.87891L14.3281 5.45312C14.6562 5.50781 14.9297 5.72656 15.0391 6.05469C15.1484 6.35547 15.0664 6.71094 14.8203 6.92969L11.9766 9.74609L12.6602 13.7383C12.7148 14.0664 12.5781 14.3945 12.3047 14.5859C12.0312 14.8047 11.6758 14.8047 11.375 14.668L7.875 12.7812L4.34766 14.668C4.07422 14.8047 3.69141 14.8047 3.44531 14.5859C3.17188 14.3945 3.03516 14.0664 3.08984 13.7383L3.74609 9.74609L0.902344 6.92969C0.65625 6.71094 0.574219 6.35547 0.683594 6.05469C0.792969 5.72656 1.06641 5.50781 1.39453 5.45312L5.33203 4.87891L7.08203 1.24219C7.21875 0.941406 7.51953 0.75 7.875 0.75C8.20312 0.75 8.50391 0.941406 8.64062 1.24219L10.418 4.87891Z"
                                                                fill="#FFDF00" />
                                                        </svg>
                                                    </span>
                                                    <span>
                                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10.418 4.87891L14.3281 5.45312C14.6562 5.50781 14.9297 5.72656 15.0391 6.05469C15.1484 6.35547 15.0664 6.71094 14.8203 6.92969L11.9766 9.74609L12.6602 13.7383C12.7148 14.0664 12.5781 14.3945 12.3047 14.5859C12.0312 14.8047 11.6758 14.8047 11.375 14.668L7.875 12.7812L4.34766 14.668C4.07422 14.8047 3.69141 14.8047 3.44531 14.5859C3.17188 14.3945 3.03516 14.0664 3.08984 13.7383L3.74609 9.74609L0.902344 6.92969C0.65625 6.71094 0.574219 6.35547 0.683594 6.05469C0.792969 5.72656 1.06641 5.50781 1.39453 5.45312L5.33203 4.87891L7.08203 1.24219C7.21875 0.941406 7.51953 0.75 7.875 0.75C8.20312 0.75 8.50391 0.941406 8.64062 1.24219L10.418 4.87891Z"
                                                                fill="#FFDF00" />
                                                        </svg>
                                                    </span>
                                                    <span>
                                                        <svg width="16" height="15" viewBox="0 0 16 15"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10.418 4.87891L14.3281 5.45312C14.6562 5.50781 14.9297 5.72656 15.0391 6.05469C15.1484 6.35547 15.0664 6.71094 14.8203 6.92969L11.9766 9.74609L12.6602 13.7383C12.7148 14.0664 12.5781 14.3945 12.3047 14.5859C12.0312 14.8047 11.6758 14.8047 11.375 14.668L7.875 12.7812L4.34766 14.668C4.07422 14.8047 3.69141 14.8047 3.44531 14.5859C3.17188 14.3945 3.03516 14.0664 3.08984 13.7383L3.74609 9.74609L0.902344 6.92969C0.65625 6.71094 0.574219 6.35547 0.683594 6.05469C0.792969 5.72656 1.06641 5.50781 1.39453 5.45312L5.33203 4.87891L7.08203 1.24219C7.21875 0.941406 7.51953 0.75 7.875 0.75C8.20312 0.75 8.50391 0.941406 8.64062 1.24219L10.418 4.87891Z"
                                                                fill="#FFDF00" />
                                                        </svg>
                                                    </span>
                                                </div>
                                                <h2 class="text-gray-700 text-lg spline-sans font-semibold">
                                                    {{ $team->name ?? '' }}
                                                </h2>
                                                <span class="text-base leading-7 text-primary-100">
                                                    {{ $team->position ?? '' }}
                                                </span>
                                            </div>
                                        </div>
                                        <span class="sm:inline-block hidden">
                                            <svg width="35" height="26" viewBox="0 0 35 26" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M35 16.125C35 21.3594 30.7812 25.5 25.625 25.5H25C23.5938 25.5 22.5 24.4062 22.5 23C22.5 21.6719 23.5938 20.5 25 20.5H25.625C27.9688 20.5 30 18.5469 30 16.125V15.5H25C22.1875 15.5 20 13.3125 20 10.5V5.5C20 2.76562 22.1875 0.5 25 0.5H30C32.7344 0.5 35 2.76562 35 5.5V8V10.5V16.125ZM15 16.125C15 21.3594 10.7812 25.5 5.625 25.5H5C3.59375 25.5 2.5 24.4062 2.5 23C2.5 21.6719 3.59375 20.5 5 20.5H5.625C7.96875 20.5 10 18.5469 10 16.125V15.5H5C2.1875 15.5 0 13.3125 0 10.5V5.5C0 2.76562 2.1875 0.5 5 0.5H10C12.7344 0.5 15 2.76562 15 5.5V8V10.5V16.125Z"
                                                    fill="#028835" />
                                            </svg>
                                        </span>
                                    </div>
                                    <p class="text-primary-100 text-base leading-7">
                                        ACQUIRE COMPANY LIMITED -
                                        Overseas Employment Agency
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="swiper-pagination"></div>
                    <div class="lg:flex hidden space-x-5 items-center absolute right-0 top-[45px]">
                        <button type="button"
                            class="swiper-button-prev w-[67px] h-[67px] flex justify-center items-center bg-primary-50 text-primary-500 rounded-full focus:text-white focus:bg-primary-500">
                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                <path
                                    d="M1.29883 5.89453L6.61133 0.582031C7.00977 0.150391 7.70703 0.150391 8.10547 0.582031C8.53711 0.980469 8.53711 1.67773 8.10547 2.07617L4.61914 5.5625H14.8125C15.377 5.5625 15.875 6.06055 15.875 6.625C15.875 7.22266 15.377 7.6875 14.8125 7.6875H4.61914L8.10547 11.207C8.53711 11.6055 8.53711 12.3027 8.10547 12.7012C7.70703 13.1328 7.00977 13.1328 6.61133 12.7012L1.29883 7.38867C0.867188 6.99023 0.867188 6.29297 1.29883 5.89453Z" />
                            </svg>
                        </button>
                        <button type="button"
                            class="swiper-button-next w-[67px] h-[67px] flex justify-center items-center bg-primary-50 text-primary-500 rounded-full focus:text-white focus:bg-primary-500">
                            <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                <path
                                    d="M14.543 7.38867C14.9746 6.99023 14.9746 6.29297 14.543 5.89453L9.23047 0.582031C8.83203 0.150391 8.13477 0.150391 7.73633 0.582031C7.30469 0.980469 7.30469 1.67773 7.73633 2.07617L11.2227 5.5625H1.0625C0.464844 5.5625 0 6.06055 0 6.625C0 7.22266 0.464844 7.6875 1.0625 7.6875H11.2227L7.73633 11.207C7.30469 11.6055 7.30469 12.3027 7.73633 12.7012C8.13477 13.1328 8.83203 13.1328 9.23047 12.7012L14.543 7.38867Z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br>
@endsection
