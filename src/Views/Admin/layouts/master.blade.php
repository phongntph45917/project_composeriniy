<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    @include('layouts.partials.head');
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">



        @include('layouts.partials.nav');


        <!-- Content Start -->
        <div class="content">
            @include('layouts.partials.topbar')


            @yield('content')


            @include('layouts.partials.footer')
        </div>
        <!-- Content End -->

        @include('layouts.partials.script');
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>


</body>

</html>
s
