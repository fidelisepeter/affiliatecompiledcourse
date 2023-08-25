<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('page-title') | New Site</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

     <!-- CSS here -->
     <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
     
    <link rel="stylesheet"  href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet"  href="{{ asset('assets/css/aos.min.css') }}">
    <link rel="stylesheet"  href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet"  href="{{ asset('assets/css/icofont.min.css') }}">
    <link rel="stylesheet"  href="{{ asset('assets/css/slick.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/plugins/formvalidation/dist/css/formValidation.min.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/plugins/toastr/build/toastr.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}?{{ time() }}">
 
 
     <script>
         // On page load or when changing themes, best to add inline in `head` to avoid FOUC
         if (localStorage.getItem("affiliatecompiledcourse-theme-color") === "dark" || (!("affiliatecompiledcourse-theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
           document.documentElement.classList.add("is_dark");
         } 
         if (localStorage.getItem("affiliatecompiledcourse-theme-color") === "light") {
           document.documentElement.classList.remove("is_dark");
         } 
     </script>
     @yield('styles')

<style>
    
    span.indicator-progress {
      display: none; /* Hide both spans by default */
    }

    [data-loading="true"] span.indicator-label {
      display: none; /* Hide the first span when data-loading is true */
    }

    [data-loading="true"] span.indicator-progress {
      display: inline; /* Show the second span when data-loading is true */
    }
  </style>

 </head>
 
 
 <body class="">
     <!-- pre loader area start -->
     <div class="preloader">
         <div id="circle-loader"></div>
             <div class="preloader-logo">
                 <img src="{{ asset('img/pre.png') }}" alt="Preloader">
             </div>
         </div>
     </div>
     <!-- pre loader area end -->
 
     <div class="theme-switcher switch">
        <button id="switch-theme" class="light align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon dark__mode" viewBox="0 0 512 512"><path d="M160 136c0-30.62 4.51-61.61 16-88C99.57 81.27 48 159.32 48 248c0 119.29 96.71 216 216 216 88.68 0 166.73-51.57 200-128-26.39 11.49-57.38 16-88 16-119.29 0-216-96.71-216-216z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
    
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon light__mode" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M256 48v48M256 416v48M403.08 108.92l-33.94 33.94M142.86 369.14l-33.94 33.94M464 256h-48M96 256H48M403.08 403.08l-33.94-33.94M142.86 142.86l-33.94-33.94"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"/></svg>
    
            <span class="light__mode">Light</span>
            <span class="dark__mode">Dark</span>
        </button>
    </div>
    <main class="main_wrapper">
        @include('layouts.header')
    @yield('content')
        

    </main>





    <!-- JS here -->
   
     <!-- JS here -->
     <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
     <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
     <script src="{{ asset('assets/js/popper.min.js') }}"></script>
     <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
     <script src="{{ asset('assets/js/slick.min.js') }}"></script>
     <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
     <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
     <script src="{{ asset('assets/js/wow.min.js') }}"></script>
     <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
     <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
     <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
     <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
     <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
     <script src="{{ asset('assets/js/plugins.js') }}"></script>
     <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/plugins/toastr/build/toastr.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>

    @yield('scripts')


</body>

</html>