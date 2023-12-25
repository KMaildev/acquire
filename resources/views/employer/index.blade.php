@extends('layouts.main')
@section('content')
    <section class="page-title-wrapper w-full h-[345px]">
        <div class="theme-container mx-auto h-full">
            <div
                class="w-full h-full flex sm:flex-row flex-col sm:justify-between justify-center space-y-3 sm:space-y-0 items-center">
                <h2 class="headline-default text-primary-900">
                    Employer Form
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
                                    Employer Form
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
                            Employer Form
                        </h2>
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

                    <form autocomplete="off" method="POST" action="{{ route('employer.store') }}" id="create-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label">Company Name</label>
                                    <input style="width: 630px;" autocomplete="off" type="text"
                                        class="form-control @error('company_name') is-invalid @enderror"
                                        placeholder="Company Name" name="company_name" value="{{ old('company_name') }}">
                                    @error('company_name')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="w-full">
                                <div class="sm:flex sm:space-x-[30px] w-full mb-5">
                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label">Type of Company</label>
                                            <input autocomplete="off" style="width: 190px;" type="text"
                                                class="form-control @error('company_type') is-invalid @enderror"
                                                placeholder="Type Of Company" name="company_type"
                                                value="{{ old('company_type') }}">
                                            @error('company_type')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label">Company Email Address</label>
                                            <input style="width: 190px;" type="text"
                                                class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Company Email Address" name="email"
                                                value="{{ old('email') }}">
                                            @error('email')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label">Company Phone</label>
                                            <input autocomplete="off" style="width: 190px;" type="text"
                                                class="form-control @error('phone') is-invalid @enderror"
                                                placeholder="Company Phone Number" name="phone"
                                                value="{{ old('phone') }}">
                                            @error('phone')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="w-full">
                                <div class="sm:flex sm:space-x-[30px] w-full mb-5">

                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label">Company Website</label>
                                            <input autocomplete="off" style="width: 190px;" type="text"
                                                class="form-control @error('website') is-invalid @enderror"
                                                placeholder="Company Website" name="website" value="{{ old('website') }}">
                                            @error('website')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label">Company Location</label>
                                            <input autocomplete="off" style="width: 190px;" type="text"
                                                class="form-control @error('location') is-invalid @enderror"
                                                placeholder="Company Location" name="location"
                                                value="{{ old('location') }}">
                                            @error('location')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label">Job Category</label>
                                            <input autocomplete="off" style="width: 190px;" type="text"
                                                class="form-control @error('job_category') is-invalid @enderror"
                                                placeholder="Job Category" name="job_category"
                                                value="{{ old('job_category') }}">
                                            @error('job_category')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full">
                                <div class="sm:flex sm:space-x-[30px] w-full mb-5">
                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label">Age Limit: 20-40</label>
                                            <input autocomplete="off" style="width: 190px;" type="text"
                                                class="form-control @error('age_limit') is-invalid @enderror"
                                                placeholder="Age Limit: 20-40" name="age_limit"
                                                value="{{ old('age_limit') }}">
                                            @error('age_limit')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label">Educational
                                                Requirement
                                            </label>

                                            <input autocomplete="off" style="width: 190px;" type="text"
                                                class="form-control @error('educational_requirement') is-invalid @enderror"
                                                placeholder="Educational Requirement" name="educational_requirement"
                                                value="{{ old('educational_requirement') }}">

                                            @error('educational_requirement')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label">
                                                Working Experience
                                            </label>

                                            <input autocomplete="off" style="width: 190px;" type="text"
                                                class="form-control @error('working_experience_requirement') is-invalid @enderror"
                                                placeholder="Working Experience Requirement"
                                                name="working_experience_requirement"
                                                value="{{ old('working_experience_requirement') }}">

                                            @error('working_experience_requirement')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="w-full">
                                <div class="sm:flex sm:space-x-[30px] w-full mb-5">

                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label"> Additional
                                                Requirement</label>

                                            <input autocomplete="off" style="width: 190px;" type="text"
                                                class="form-control @error('other_additional_requirement') is-invalid @enderror"
                                                placeholder="Additional Requirement" name="other_additional_requirement"
                                                value="{{ old('other_additional_requirement') }}">

                                            @error('other_additional_requirement')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label">Estimate Salary Offer</label>
                                            <input autocomplete="off" style="width: 190px;" type="text"
                                                class="form-control @error('estimate_salary_offer') is-invalid @enderror"
                                                placeholder="Estimate Salary Offer" name="estimate_salary_offer"
                                                value="{{ old('estimate_salary_offer') }}">
                                            @error('estimate_salary_offer')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label">Other Allowance</label>
                                            <input autocomplete="off" style="width: 190px;" type="text"
                                                class="form-control @error('other_allowance') is-invalid @enderror"
                                                placeholder="Other Allowance" name="other_allowance"
                                                value="{{ old('other_allowance') }}">
                                            @error('other_allowance')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full">
                                <div class="sm:flex sm:space-x-[30px] w-full mb-5">
                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label">
                                                Gender: M/10, F/10
                                            </label>
                                            <input autocomplete="off" style="width: 300px;" type="text"
                                                class="form-control @error('gender') is-invalid @enderror"
                                                placeholder="Gender: M/10, F/10" name="gender"
                                                value="{{ old('gender') }}">
                                            @error('gender')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label">Interview Type</label>
                                            <input autocomplete="off" style="width: 300px;" type="text"
                                                class="form-control @error('interview_type') is-invalid @enderror"
                                                placeholder="Interview Type: Online" name="interview_type"
                                                value="{{ old('interview_type') }}">
                                            @error('interview_type')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 py-2">
                                <div class="col-lg-12 mb-3">
                                    <button type="submit"
                                        class="rounded bg-primary-500 hover:bg-primary-900 common-trans focus:outline-none focus:ring-0 w-full h-[68px] text-white flex justify-center items-center">
                                        Submit Now
                                    </button>
                                </div>
                            </div>
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
                                    ACQUIRE COMPANY LIMITED
                                </h2>
                                <p class="text-base leading-7 text-center text-primary-100">
                                    A leading Manpower Recruiting Agency based in Myanmar, licensed and authorized by the
                                    Ministry of Labor, Employment and Social Security of Myanmar.
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
                                    Our Expertise
                                </h2>
                                <p class="text-base leading-7 text-center text-primary-100">
                                    Our expertise stands on the Malaysia, Singapore, Japan, Dubai and Middle East Countries
                                    job
                                    market.
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
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreEmployer', '#create-form') !!}
@endsection
