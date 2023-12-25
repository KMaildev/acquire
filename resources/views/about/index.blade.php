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
                                    About of Our Company
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

    <div class="about-us-page-wrapper lg:pt-[120px] lg:pb-[240px] pt-[60px] pb-[120px]">

        <section class="about-area w-full lg:pb-[120px] pb-[60px]">
            <div class="theme-container mx-auto">
                <div class="w-full grid xl:grid-cols-2 grid-cols-1 lg:gap-[66px] gap-[30px] items-center relative">
                    <div class="">
                        <div class="thumbnail-area 2xl:w-[721px] w-full 2xl:absolute 2xl:-left-[150px] -top-8 relative">
                            <img src="https://www.bizatom.com/wp-content/uploads/2022/02/57-Starting-business-foreigners.png"
                                alt="about" class="relative z-10 w-full h-full" />
                            <div
                                class="about-shape gear-2 xl:w-[385px] xl:h-[385px] md:w-[500px] md:h-[500px] w-[250px] h-[250px]">
                            </div>
                            <div
                                class="w-[250px] h-[94px] rounded-[16px] bg-primary-500 flex justify-center items-center absolute sm:top-[432px] top-[200px] sm:right-[156px] right-5 z-10">
                                <div>
                                    <div class="flex space-x-6 items-center">
                                        <span>
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="20" cy="20" r="20" fill="white" />
                                                <path
                                                    d="M26.332 25.7943C25.544 25.5133 24.258 25.4943 23.688 25.2813C23.2492 25.1672 22.8347 24.974 22.465 24.7113C22.3097 24.0566 22.2424 23.3839 22.265 22.7113C22.558 22.4302 22.7955 22.0964 22.965 21.7273C23.1351 21.0941 23.2479 20.4468 23.302 19.7933C23.302 19.7933 23.766 19.9933 23.949 19.0623C24.104 18.2623 24.399 17.8393 24.322 17.2483C24.245 16.6573 23.914 16.7983 23.914 16.7983C24.273 15.9711 24.4135 15.0655 24.322 14.1683C24.3166 13.591 24.1924 13.0209 23.9571 12.4935C23.7218 11.9662 23.3806 11.493 22.9545 11.1032C22.5285 10.7135 22.0268 10.4156 21.4806 10.2281C20.9345 10.0406 20.3556 9.96749 19.78 10.0133C19.2044 9.96746 18.6254 10.0402 18.0789 10.227C17.5324 10.4138 17.0301 10.7107 16.603 11.0994C16.1758 11.4881 15.833 11.9603 15.5956 12.4868C15.3583 13.0133 15.2315 13.5829 15.223 14.1603C15.1325 15.0567 15.2701 15.9614 15.623 16.7903C15.623 16.7903 15.293 16.6493 15.215 17.2403C15.137 17.8313 15.427 18.2603 15.586 19.0603C15.769 19.9953 16.233 19.7913 16.233 19.7913C16.2878 20.4447 16.4005 21.092 16.57 21.7253C16.7396 22.0944 16.9771 22.4282 17.27 22.7093C17.2927 23.3819 17.2254 24.0546 17.07 24.7093C16.7014 24.9723 16.2865 25.1633 15.847 25.2723C15.285 25.4903 13.998 25.5183 13.203 25.7993C12.2445 26.1586 11.4205 26.8055 10.844 27.6514C10.2676 28.4973 9.96683 29.5008 9.98304 30.5243H29.545C29.5643 29.5005 29.2656 28.4958 28.6902 27.6487C28.1148 26.8017 27.2909 26.1538 26.332 25.7943Z"
                                                    fill="#028835" />
                                                <path
                                                    d="M11.63 22.3684C12.4561 22.3573 13.2651 22.132 13.978 21.7144C12.888 20.0624 13.478 18.1354 13.254 16.3354C13.243 15.9259 13.1472 15.5231 12.9728 15.1524C12.7983 14.7817 12.549 14.4511 12.2405 14.1816C11.9319 13.912 11.5709 13.7093 11.1801 13.5862C10.7894 13.4631 10.3773 13.4224 9.97 13.4664H9.942C9.53708 13.428 9.12858 13.4729 8.74171 13.5985C8.35485 13.7241 7.99783 13.9276 7.69271 14.1966C7.38758 14.4655 7.14083 14.7942 6.96768 15.1622C6.79453 15.5303 6.69866 15.9299 6.686 16.3364C6.461 18.1294 7.086 20.2744 5.969 21.7154C6.68409 22.1261 7.49988 22.3284 8.324 22.2994C8.36668 22.6942 8.34302 23.0934 8.254 23.4804C8.01199 23.682 7.72069 23.8156 7.41 23.8674C6.79373 24.0008 6.18571 24.1697 5.589 24.3734C5.1109 24.6233 4.71018 24.999 4.43013 25.4601C4.15007 25.9212 4.00134 26.45 4 26.9894H9.647C10.1603 26.0724 10.9468 25.3383 11.897 24.8894C12.4477 24.6587 13.0371 24.5345 13.634 24.5234C13.634 24.5234 13.901 24.1014 13.022 23.9394C12.5548 23.8369 12.1016 23.6787 11.672 23.4684C11.538 23.3184 11.63 22.3684 11.63 22.3684Z"
                                                    fill="#028835" />
                                                <path
                                                    d="M27.9417 22.3684C27.1157 22.3573 26.3066 22.132 25.5938 21.7144C26.6838 20.0624 26.0937 18.1354 26.3177 16.3354C26.3288 15.9259 26.4245 15.5231 26.599 15.1524C26.7734 14.7817 27.0227 14.4511 27.3313 14.1816C27.6398 13.912 28.0009 13.7093 28.3916 13.5862C28.7824 13.4631 29.1944 13.4224 29.6017 13.4664H29.6297C30.0347 13.428 30.4432 13.4729 30.83 13.5985C31.2169 13.7241 31.5739 13.9276 31.879 14.1966C32.1842 14.4655 32.4309 14.7942 32.6041 15.1622C32.7772 15.5303 32.8731 15.9299 32.8857 16.3364C33.1107 18.1294 32.4857 20.2744 33.6027 21.7154C32.8877 22.1261 32.0719 22.3284 31.2477 22.2994C31.2051 22.6942 31.2287 23.0934 31.3177 23.4804C31.5598 23.682 31.8511 23.8156 32.1617 23.8674C32.778 24.0008 33.386 24.1697 33.9827 24.3734C34.4608 24.6233 34.8616 24.999 35.1416 25.4601C35.4217 25.9212 35.5704 26.45 35.5717 26.9894H29.9247C29.4115 26.0724 28.6249 25.3383 27.6747 24.8894C27.1241 24.6587 26.5347 24.5345 25.9377 24.5234C25.9377 24.5234 25.6707 24.1014 26.5497 23.9394C27.0169 23.8369 27.4702 23.6787 27.8997 23.4684C28.0337 23.3184 27.9417 22.3684 27.9417 22.3684Z"
                                                    fill="#028835" />
                                            </svg>
                                        </span>
                                        <div>
                                            <p class="text-white text-xl font-bold leading-[26px]">
                                                Call Now
                                            </p>
                                            <p class="text-base leading-5 text-white">
                                                09-968266438
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="about-article-area">
                        <h2 class="headline-default text-primary-900 mb-10">
                            ACQUIRE COMPANY LIMITED
                            <br>
                            <span style="font-size: 25px;">
                                Overseas Employment Agency
                            </span>
                        </h2>

                        <p class="xl:w-full max-w-4xl text-base text-primary-100 mb-14"
                            style="text-align: justify; font-size: 17px; letter-spacing: 1px; color: black;">
                            Welcome to ACQUIRE COMPANY LIMITED, a leading Overseas Employment Agency committed to
                            facilitating global career opportunities. With License No. 336/2023 issued on October 6th, 2023,
                            we stand as a beacon of reliability in connecting skilled professionals with international
                            employment prospects.
                            <br><br>
                            Our seasoned team brings extensive expertise to ensure a comprehensive
                            understanding of global job markets. At ACQUIRE, we prioritize compliance, operating ethically
                            to meet all regulations. Whether you are a job seeker looking for the perfect opportunity or an
                            employer seeking top-tier talent, ACQUIRE COMPANY LIMITED is your trusted partner for success.
                        </p>

                        <ul>
                            <li style="font-size: 20px; letter-spacing: 1px; color: black;">
                                License No.: 336/2023
                            </li>
                            <li style="font-size: 20px; letter-spacing: 1px; color: black;">
                                Date of Issue: 6th October 2023
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <section class="process-section-two w-full lg:pt-[60px] lg:pb-0 pb-[60px]">
            <div class="theme-container mx-auto">
                <div class="w-full relative">
                    <h2 class="headline-default text-primary-900 mb-[60px] text-center">
                        Our Vision, Mission, Value
                    </h2>
                    <div class="grid xl:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-[30px]">

                        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100"
                            class="item group px-[30px] py-10 rounded border border-primaryBorder relative overflow-hidden">
                            <div class="icon-thumb flex justify-center mt-2.5 mb-[90px] relative z-10">
                                <img src="{{ asset('assets/img/progress-1.svg') }}" alt=""
                                    class="w-[62px] h-[62px]" />
                            </div>
                            <p class="text-lg font-semibold spline-sans text-center text-[#E3E3E3] mb-5">
                                01
                            </p>
                            <p class="text-lg font-bold spline-sans text-center text-primary-900 mb-5">
                                Our Vision
                            </p>
                            <p class="text-primary-100 text-base text-center" style="letter-spacing: 1px; color: black;">
                                To be a global leader in connecting talent with opportunities, fostering mutually beneficial
                                relationships between job seekers and employers, and contributing to the growth and
                                development of individuals and businesses alike.
                            </p>
                            <div style="left: calc(50% - 185px)"
                                class="circle-shape group-hover:w-full group-hover:h-full w-[372px] h-[372px] rounded-full absolute bottom-[237px]">
                            </div>
                        </div>

                        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300"
                            class="item group px-[30px] py-10 rounded border border-primaryBorder relative overflow-hidden">
                            <div class="icon-thumb flex justify-center mt-2.5 mb-[90px] relative z-10">
                                <img src="{{ asset('data/focus.png') }}" alt="" class="w-[62px] h-[62px]" />
                            </div>
                            <p class="text-lg font-semibold spline-sans text-center text-[#E3E3E3] mb-5">
                                02
                            </p>
                            <p class="text-lg font-bold spline-sans text-center text-primary-900 mb-5">
                                Our Mission
                            </p>
                            <p class="text-primary-100 text-base text-center" style="letter-spacing: 1px; color: black;">
                                To be a beacon of reliability in the overseas employment industry, empowering individuals to
                                achieve their career aspirations and assisting businesses in securing the right talent to
                                drive success.
                            </p>
                            <div style="left: calc(50% - 185px)"
                                class="circle-shape group-hover:w-full group-hover:h-full w-[372px] h-[372px] rounded-full absolute bottom-[237px]">
                            </div>
                        </div>

                        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400"
                            class="item group px-[30px] py-10 rounded border border-primaryBorder relative overflow-hidden">
                            <div class="icon-thumb flex justify-center mt-2.5 mb-[90px] relative z-10">
                                <img src="{{ asset('data/goal.png') }}" alt="" class="w-[62px] h-[62px]" />
                            </div>
                            <p class="text-lg font-semibold spline-sans text-center text-[#E3E3E3] mb-5">
                                03
                            </p>
                            <p class="text-lg font-bold spline-sans text-center text-primary-900 mb-5">
                                Our Value
                            </p>
                            <p class="text-primary-100 text-base text-center" style="letter-spacing: 1px; color: black;">
                                ACQUIRE COMPANY LIMITED: Excellence, Integrity, Global Leadership. We're your trusted
                                partner, connecting talent with opportunities worldwide.
                            </p>
                            <div style="left: calc(50% - 185px)"
                                class="circle-shape group-hover:w-full group-hover:h-full w-[372px] h-[372px] rounded-full absolute bottom-[237px]">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="blog-area w-full lg:py-[120px] py-[60px]">
            <div class="theme-container mx-auto">
                <h2 class="headline-default text-center text-primary-900 lg:mb-[60px] mb-[30px]">
                    LEGAL DOCUMENTS
                </h2>
                <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 xl:gap-[30px] gap-5">

                    <div
                        class="blog-item group w-full overflow-hidden rounded bg-secondary hover:bg-white transition-all duration-300 ease-in-out">
                        <div>
                            <div class="w-full h-[386px] relative">
                                <center>
                                    <h2 class="text-md font-bold spline-sans text-primary-900 py-2">
                                        Certificate of Incorporation
                                    </h2>
                                </center>
                                <div class="w-full h-full">
                                    <img src="{{ asset('data/company/1.jpeg') }}" alt="blog"
                                        style="object-position: top; width: 100%; height: auto; object-fit: cover; background-size: corver;" />
                                </div>
                            </div>
                        </div>
                    </div>


                    <div
                        class="blog-item group w-full overflow-hidden rounded bg-secondary hover:bg-white transition-all duration-300 ease-in-out">
                        <div>
                            <div class="w-full h-[286px] relative">
                                <center>
                                    <h2 class="text-md font-bold spline-sans text-primary-900 py-2">
                                        Overseas Employment Agency Licence
                                    </h2>
                                </center>
                                <div class="w-full h-full">
                                    <img src="{{ asset('data/company/2.jpeg') }}" alt="blog"
                                        style="object-position: top; width: 100%; height: auto; object-fit: cover; background-size: corver;" />
                                </div>
                            </div>
                        </div>
                    </div>


                    <div
                        class="blog-item group w-full overflow-hidden rounded bg-secondary hover:bg-white transition-all duration-300 ease-in-out">
                        <div>
                            <div class="w-full h-[286px] relative">
                                <center>
                                    <h2
                                        class="xl:text-lg xl:leading-7 text-md font-bold spline-sans text-primary-900 py-2">
                                        Myanmar Overseas Employment Agencies Federation
                                    </h2>
                                </center>
                                <div class="w-full h-full">
                                    <img src="{{ asset('data/company/3.jpeg') }}" alt="blog"
                                        style="object-position: top; width: 100%; height: auto; object-fit: cover; background-size: corver;" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="service-area w-full lg:py-[120px] py-[60px]">
            <div class="theme-container mx-auto h-full items-center">
                <div class="w-full grid xl:grid-cols-2 grid-cols-1 gap-[60px] xl:gap-0 items-center">
                    <div class="grid-item">
                        <h2 class="headline-default text-primary-900 mb-5">
                            Organizational chart
                        </h2>
                        <p class="text-base text-primary-100 mb-14">
                            ”ACQUIRE COMPANY LIMITED”, a leading Manpower Recruiting Agency based in Myanmar, licensed and
                            authorized by the Ministry of Labor, Employment and Social Security of Myanmar. We are the
                            outstanding supplier of quality manpower to different parts of the world.
                        </p>
                    </div>

                    <div class="grid-item">
                        <div class="grid grid-cols-1 sm:gap-[30px] gap-5">
                            <img src="{{ asset('data/org.png') }}" alt="" style="width: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
