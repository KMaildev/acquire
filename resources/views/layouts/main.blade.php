<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        ACQUIRE COMPANY LIMITED (Overseas Employment Agency) - @yield('title')
    </title>
    <!--    favicon-->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" />
    <!-- compiled from input.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/output.css') }}" />
    <!-- overwrite custom css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

</head>

<body>

    @include('layouts.menu')

    <main>



        @yield('content')

    </main>

    @include('layouts.footer')
</body>

</html>
