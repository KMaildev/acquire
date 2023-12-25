@extends('layouts.main')
@section('content')
    @include('layouts.slider')

    <section class="progress-step">
        <div class="progress-step-wrapper py-[60px]">
            <div class="theme-container mx-auto">
                <h2 class="text-center headline-default text-primary-900 lg:mb-[60px] mb-[30px]">
                    ACQUIRE COMPANY LIMITED <br> Overseas Employment Agency
                </h2>

                <div class="grid lg:grid-cols-3 sm:grid-cols-2 sm:gap-[30px] gap-5">

                    <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100"
                        class="item p-[30px] bg-white rounded">
                        <div class="flex justify-between items-center mb-5">
                            <div class="w-[60px] h-[60px] rounded-full bg-secondary flex items-center justify-center">
                                <img src="assets/img/progress-1.svg" alt="progress" />
                            </div>
                            <h2 class="counter spline-sans">01</h2>
                        </div>
                        <h2 class="xl:text-lg text-md font-bold spline-sans text-gray-700 mb-5">
                            Expertise and Experience
                        </h2>
                        <p class="xl:text-base text-sm xl:leading-7 text-primary-100">
                            With over a decade of experience in overseas employment, we have developed a deep understanding
                            of the intricacies involved in various industries and regions, making us your trusted partner in
                            this journey.
                        </p>
                    </div>


                    <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300"
                        class="item p-[30px] bg-white rounded">
                        <div class="flex justify-between items-center mb-5">
                            <div class="w-[60px] h-[60px] rounded-full bg-secondary flex items-center justify-center">
                                <img src="{{ asset('data/9436120.png') }}" alt="progress" />
                            </div>
                            <h2 class="counter spline-sans">02</h2>
                        </div>
                        <h2 class="xl:text-lg text-md font-bold spline-sans text-gray-700 mb-5">
                            Comprehensive Services
                        </h2>
                        <p class="xl:text-base text-sm xl:leading-7 text-primary-100">
                            From visa procurement to pre-departure orientation and continuous support, we offer a complete
                            suite of services to ensure a smooth and successful overseas employment experience.
                        </p>
                    </div>

                    <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400"
                        class="item p-[30px] bg-white rounded">
                        <div class="flex justify-between items-center mb-5">
                            <div class="w-[60px] h-[60px] rounded-full bg-secondary flex items-center justify-center">
                                <img src="{{ asset('data/13530460.png') }}" alt="progress" />
                            </div>
                            <h2 class="counter spline-sans">03</h2>
                        </div>
                        <h2 class="xl:text-lg text-md font-bold spline-sans text-gray-700 mb-5">
                            Global Network
                        </h2>
                        <p class="xl:text-base text-sm xl:leading-7 text-primary-100">
                            Our vast global network connects you to opportunities you might not find elsewhere. We have
                            strong relationships with employers and job seekers across the world.
                        </p>
                    </div>
                </div>
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
    </div>


    <section class="fun-fact-area lg:pt-[120px] xl:pb-0 lg:pb-[120px] py-[60px] xl:min-h-[100px]"
        style="
          background-image: url(assets/img/fun-fact-bg.png);
          background-repeat: no-repeat;
          background-size: cover;
        ">
        <div class="theme-container mx-auto relative">
            <div
                class="w-full flex flex-wrap lg:flex-nowrap gap-[30px] lg:gap-0 justify-between items-center xl:mb-[100px] lg:mb-[60px] mb-[30px]">
                <div class="item flex space-x-5 items-center">
                    <div
                        class="xl:w-[80px] xl:h-[80px] w-16 h-16 rounded-full bg-primary-500 flex justify-center items-center">
                        <img src="assets/img/project.svg" alt="" />
                    </div>
                    <div class="flex-1">
                        <p class="xl:text-[40px] font-bold text-white text-2xl xl:leading-[55px]">
                            <span class="purecounter" data-purecounter-duration="1" data-purecounter-end="30"></span>K+
                        </p>
                        <p class="xl:text-base text-sm text-white leading-7">
                            Complete Projects
                        </p>
                    </div>
                </div>
                <div class="w-[5px] h-[160px] bg-[#1A5E52] xl:block hidden"></div>
                <div class="item flex space-x-5 items-center">
                    <div
                        class="xl:w-[80px] xl:h-[80px] w-16 h-16 rounded-full bg-primary-500 flex justify-center items-center">
                        <img src="assets/img/client.svg" alt="" />
                    </div>
                    <div class="flex-1">
                        <p class="xl:text-[40px] font-bold text-white text-2xl xl:leading-[55px]">
                            <span class="purecounter" data-purecounter-duration="1" data-purecounter-end="24"></span>K+
                        </p>
                        <p class="xl:text-base text-sm text-white leading-7">
                            Client Satisfaction
                        </p>
                    </div>
                </div>
                <div class="w-[5px] h-[160px] bg-[#1A5E52] xl:block hidden"></div>
                <div class="item flex space-x-5 items-center">
                    <div
                        class="xl:w-[80px] xl:h-[80px] w-16 h-16 rounded-full bg-primary-500 flex justify-center items-center">
                        <img src="assets/img/members.svg" alt="" />
                    </div>
                    <div class="flex-1">
                        <p class="xl:text-[40px] font-bold text-white text-2xl xl:leading-[55px]">
                            <span class="purecounter" data-purecounter-duration="1" data-purecounter-end="12"></span>K+
                        </p>
                        <p class="xl:text-base text-sm text-white leading-7">
                            Active Members
                        </p>
                    </div>
                </div>
                <div class="w-[5px] h-[160px] bg-[#1A5E52] xl:block hidden"></div>
                <div class="item flex space-x-5 items-center">
                    <div
                        class="xl:w-[80px] xl:h-[80px] w-16 h-16 rounded-full bg-primary-500 flex justify-center items-center">
                        <img src="assets/img/award.svg" alt="" />
                    </div>
                    <div class="flex-1">
                        <p class="xl:text-[40px] font-bold text-white text-2xl xl:leading-[55px]">
                            <span class="purecounter" data-purecounter-duration="1" data-purecounter-end="5"></span>K+
                        </p>
                        <p class="xl:text-base text-sm text-white leading-7">
                            Winning Award
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
