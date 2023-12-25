@extends('layouts.main')
@section('content')
    <section class="page-title-wrapper w-full h-[345px]">
        <div class="theme-container mx-auto h-full">
            <div
                class="w-full h-full flex sm:flex-row flex-col sm:justify-between justify-center space-y-3 sm:space-y-0 items-center">
                <h2 class="headline-default text-primary-900">
                    Submit CV
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
                                    Apply for your job
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



    <section class="service-area w-full lg:py-[120px] py-[60px]">
        <div class="theme-container mx-auto h-full items-center">
            <div class="w-full grid xl:grid-cols-2 grid-cols-1 gap-[60px] xl:gap-0 items-center">

                <div class="grid-item" style="padding-right: 30px;">
                    <center>
                        <h2 class="headline-default text-primary-900 mb-5">
                            Apply Now
                        </h2>

                        <p class="p-b-3" style="font-size: 15px; text-align: justify; color: black;">
                            To apply for the desired job, we recommend reading the job requirements
                            carefuly then if you found yourself qualified for it, simply fill in the below form and
                            click APPLY NOW.
                        </p>
                    </center>

                    <style>
                        input[type=text] {
                            /* width: 100%; */
                            padding: 12px 20px;
                            margin: 8px 0;
                            box-sizing: border-box;
                            border: 3px solid #ccc;
                            -webkit-transition: 0.5s;
                            transition: 0.5s;
                            outline: none;
                        }

                        @media only screen and (max-width: 500px) {
                            input[type=text] {
                                width: 100% !important;
                            }
                        }

                        @media only screen and (max-width: 608px) {
                            input[type=text] {
                                width: 100% !important;
                            }
                        }

                        @media only screen and (max-width: 638px) {
                            input[type=text] {
                                width: 100% !important;
                            }
                        }
                    </style>

                    <br>
                    <form autocomplete="off" method="POST" action="{{ route('cv.store') }}" enctype="multipart/form-data"
                        id="create-form" autocomplete="off">
                        @csrf

                        <style>
                            input[type=text] {
                                width: 100%;
                                padding: 12px 20px;
                                margin: 8px 0;
                                box-sizing: border-box;
                                border: 1px solid black;
                                -webkit-transition: 0.5s;
                                transition: 0.5s;
                                outline: none;
                            }

                            input[type=text]:focus {
                                border: 1px solid black;
                            }
                        </style>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="text-black" style="color: black;">Name*</label>
                                <input type="text" name="name" class="form-control " value="">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="text-black" style="color: black;">Phone</label>
                                <input type="text" name="phone" class="form-control " value="">
                            </div>
                        </div>

                        <div class="col-lg-12 py-3">
                            <div class="form-group">
                                <label class="text-black" style="color: black;">Additional Note</label>
                                <input type="text" name="additional_note" class="form-control " value="">
                            </div>
                        </div>

                        <div class="col-lg-12 py-3">
                            <div class="form-group">
                                <label for="img" style="color: black;">
                                    Select your CV to upload
                                </label>
                                <br>
                                <input type="file" name="attachment_file" accept=".doc, .docx, .pdf"
                                    class="form-control-file" required>
                            </div>
                        </div>

                        <div>
                            <button type="submit"
                                class="rounded bg-primary-500 hover:bg-primary-900 common-trans focus:outline-none focus:ring-0 w-full h-[68px] text-white flex justify-center items-center">
                                APPLY NOW
                            </button>
                        </div>
                    </form>
                </div>


                <div class="grid-item">
                    <div class="grid sm:grid-cols-2 grid-cols-1 sm:gap-[30px] gap-5">

                        <div data-aos="fade-up" data-aos-duration="1000"
                            class="service-item p-[30px] rounded-[10px] bg-white group">
                            <a href="javascript::void(0)">
                                <div class="flex justify-center mb-5">
                                    <div class="w-[60px] h-[60px] rounded flex justify-center items-center bg-primary-50">
                                        <img src="{{ asset('assets/img/service-1.svg') }}" alt="" />
                                    </div>
                                </div>
                                <h2
                                    class="text-lg leading-7 font-bold spline-sans text-center text-primary-900 mb-5 group-hover:underline">
                                    Expertise and Experience:
                                </h2>
                                <p class="text-base leading-7 text-center text-primary-100">
                                    We have a team of experienced professionals who specialize in
                                    recruitment and talent acquisition. Our expertise allows us to understand the
                                    intricacies of various industries and job markets, enabling us to find the best
                                    candidates for your organization.
                                </p>
                            </a>
                        </div>


                        <div data-aos="fade-up" data-aos-duration="1000"
                            class="service-item p-[30px] rounded-[10px] bg-white group">
                            <a href="javascript::void(0)">
                                <div class="flex justify-center mb-5">
                                    <div class="w-[60px] h-[60px] rounded flex justify-center items-center bg-primary-50">
                                        <img src="assets/img/service-2.svg" alt="" />
                                    </div>
                                </div>
                                <h2
                                    class="text-lg leading-7 font-bold spline-sans text-center text-primary-900 mb-5 group-hover:underline">
                                    Time and Cost Savings:
                                </h2>
                                <p class="text-base leading-7 text-center text-primary-100">
                                    Recruiting and hiring can be time-consuming and expensive. As an
                                    employment agency, we handle the entire process for you, from sourcing candidates to
                                    conducting initial screenings and interviews. This saves you valuable time and resources
                                    that can be better utilized for other core business activities.
                                </p>
                            </a>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1000"
                            class="service-item p-[30px] rounded-[10px] bg-white group">
                            <a href="javascript::void(0)">
                                <div class="flex justify-center mb-5">
                                    <div class="w-[60px] h-[60px] rounded flex justify-center items-center bg-primary-50">
                                        <img src="assets/img/service-3.svg" alt="" />
                                    </div>
                                </div>
                                <h2
                                    class="text-lg leading-7 font-bold spline-sans text-center text-primary-900 mb-5 group-hover:underline">
                                    Our Operations
                                </h2>
                                <p class="text-base leading-7 text-center text-primary-100">
                                    ACQUIRE COMPANY LIMITED’s operations are managed by a team of professionals.
                                </p>
                            </a>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1000"
                            class="service-item p-[30px] rounded-[10px] bg-white group">
                            <a href="javascript::void(0)">
                                <div class="flex justify-center mb-5">
                                    <div class="w-[60px] h-[60px] rounded flex justify-center items-center bg-primary-50">
                                        <img src="assets/img/service-4.svg" alt="" />
                                    </div>
                                </div>
                                <h2
                                    class="text-lg leading-7 font-bold spline-sans text-center text-primary-900 mb-5 group-hover:underline">
                                    Our Experience
                                </h2>
                                <p class="text-base leading-7 text-center text-primary-100">
                                    We could provide different level of employees on our client’s demand in various job
                                    categories.
                                </p>
                            </a>
                        </div>

                        <br>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreCv', '#create-form') !!}
@endsection
