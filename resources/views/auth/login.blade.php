<!doctype html>
<html class="no-js" lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | New Site</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

     <!-- CSS here -->
     <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
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

<style>
    /* .login-container {
         background: url("{{ asset('assets/img/auth/bg3.jpg') }}");
         backdrop-filter: blur(10px); 
     }

     .is_dark .login-container {
         background: url("{{ asset('assets/img/auth/bg3-dark.jpg') }}");
         backdrop-filter: blur(10px); 
     } */
  </style>
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
 
 {{-- <style>
    .login-theme-switcher.switch {
  position: absolute;
  top: 0;
  z-index: 9999999;
  transition: 0.3s;
}

.login-theme-switcher.switch:hover {
  top: 0;
}

@media (min-width: 1500px) and (max-width: 1920px) {
  .login-theme-switcher.switch {
    top: 0;
  }
}
.login-theme-switcher.switch button {
  display: flex;
  font-size: 20px;
  color: var(--whiteColor);
  background: var(--primaryColor);
  padding: 10px;
  line-height: 20px;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  width: 90px;
  box-shadow: 0px 6px 34px rgba(215, 216, 222, 0.15);
  border: none;
}

.login-theme-switcher.switch button svg {
  width: 20px;
  margin-right: 10px;
}

.login-theme-switcher.switch button span {
  font-size: 16px;
}
 </style> --}}
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
    <main class="overflow-hidden">

        <!-- login__section__start -->
        <div class="login-container sp_top_100 sp_bottom_100">
            <div class="container">
                <div class="row">
                 <div class="col-xl-5 col-md-8 col-sm-10 col-11 m-auto">
                            <div class="login p-5" style="position: relative;background-color: var(--bodyBg);">
                                
                                <div class="text-center">
                                    <h2 class="">Login</h2>
                                    <p class="">Login to your account to continue</p>
                                </div>



                                <form method="POST" action="{{ route('login') }}" style="" id="sign_in_form">
                                    @csrf
                                    <div class="fv-row login-form">
                                        {{-- <label class="">Email</label> --}}
                                        <input class="login-input @error('email') is-invalid @enderror" type="text" name="email"  placeholder="Email Address">
                                        @error('email')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="email" data-validator="notEmpty">{{ $message }}</div>
                                        </div>
                                    @enderror
                                    </div>
                                    <div class="fv-row login-form">
                                        {{-- <label class="form-label">Password</label> --}}
                                        <input class="login-input @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
                                        @error('password')
                                    <div class="fv-plugins-message-container invalid-feedback">
                                        <div data-field="email" data-validator="notEmpty">{{ $message }}</div>
                                    </div>
                                @enderror
                                    </div>
                                    <div class="login-form d-flex justify-content-between flex-wrap gap-2">
                                        <div class="form__check">
                                            <input id="forgot" type="checkbox">
                                            <label for="forgot"> Remember me</label>
                                        </div>
                                        <div class="text-end login-form-link">
                                            <a href="#">Forgot your password?</a>
                                        </div>
                                    </div>
                                    <div class="login__button">
                                        <button class="default-button btn-block" type="submit" id="sign_in_submit">
                                            <span class="indicator-label">Login</span>
                                            <span class="indicator-progress">Please wait...
                                                <span class="spinner-border spinner-border-sm ms-2 align-middle"></span></span>
                                        </button>
                                    </div>
                                </form>

                              


                            </div>
                        </div>
                    

                </div>

                <div class=" login__shape__img educationarea__shape_image">
                    <img class="hero__shape hero__shape__1" src="{{ asset('assets/img/education/hero_shape2.png') }}" alt="Shape">
                    <img class="hero__shape hero__shape__2" src="{{ asset('assets/img/education/hero_shape3.png') }}" alt="Shape">
                    <img class="hero__shape hero__shape__3" src="{{ asset('assets/img/education/hero_shape4.png') }}" alt="Shape">
                    <img class="hero__shape hero__shape__4" src="{{ asset('assets/img/education/hero_shape5.png') }}" alt="Shape">
                </div>


            </div>
        </div>

        <!-- login__section__end -->

        

    </main>





    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/plugins/toastr/build/toastr.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
       
      </script>
       <script>
        "use strict";
        var SigninGeneral = function() {
            var e, t, i;
             if (localStorage.getItem("affiliatecompiledcourse-theme-color") === "dark" || (!("affiliatecompiledcourse-theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
          document.getElementById("switch-theme")?.classList.add("dark--mode");
        } 
        if (localStorage.getItem("affiliatecompiledcourse-theme-color") === "light") {
          document.getElementById("switch-theme")?.classList.remove("dark--mode");
        } 
        
        // toastr.options = {
        //     positionClass: 'login'
        // }
            return {
                init: function() {
                    e = document.querySelector("#sign_in_form"),
                    t = document.querySelector("#sign_in_submit"), 
                    i = FormValidation.formValidation(e, {
                            fields: {
                                email: {
                                    validators: {
                                        regexp: {
                                            regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
                                            message: "The value is not a valid email address"
                                        },
                                        notEmpty: {
                                            message: "Email address is required"
                                        }
                                    }
                                },
                                password: {
                                    validators: {
                                        notEmpty: {
                                            message: "The password is required"
                                        }
                                    }
                                }
                            },
                            plugins: {
                                trigger: new FormValidation.plugins.Trigger,
                                bootstrap: new FormValidation.plugins.Bootstrap5({
                                    rowSelector: ".fv-row",
                                    eleInvalidClass: "is-invalid",
                                    eleValidClass: "is-valid"
                                })
                            }
                        }), 
                        t.addEventListener("click", (function(n) {
                            n.preventDefault(),
                            i.validate().then((function(i) {
                                "Valid" == i ? (t.setAttribute("data-loading", "true"), t
                                    .disabled = !0, setTimeout((function() {
                                        t.removeAttribute("data-loading"), t
                                            .disabled = !1;
                                            e.submit();
                                    }), 2e3)) : toastr.error(
                                    'Sorry, looks like there are some errors detected, please try again.'
                                )
                            }))
                        }))
                }
            }
        }();
        document.addEventListener("DOMContentLoaded", (function() {
            SigninGeneral.init()
        }));
    </script>


</body>


<!-- Mirrored from html.themewin.com/edurock-preview/edurock/login.html by HTTrack Website Copier/3.x [XR&CO'2017], Tue, 08 Aug 2023 04:03:34 GMT -->
</html>