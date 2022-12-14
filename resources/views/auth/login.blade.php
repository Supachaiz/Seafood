
<head>
    <script src="{{url('')}}/public/new/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{url('')}}/public/new/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{url('')}}/public/new/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{url('')}}/public/new/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{url('')}}/public/new/assets/css/custom.min.css" rel="stylesheet" type="text/css" />
</head>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
                <div class="bg-overlay"></div>
                <!-- auth-page content -->
                <div class="auth-page-content overflow-hidden pt-lg-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card overflow-hidden">
                                    <div class="row g-0">
                                        <div class="col-lg-6">
                                            <div class="p-lg-5 p-4 auth-one-bg h-100" style="background-image: url({{url('')}}/public/img/bg01.jpg)">
                                                <div class="bg-overlay"></div>
                                                <div class="position-relative h-100 d-flex flex-column">
                                                    <div class="mb-4">
                                                        <a href="index.html" class="d-block">
                                                            <img src="{{url('')}}/public/img/bg01.jpg"alt="" height="18">
                                                        </a>
                                                    </div>
                                                    <div class="mt-auto">
                                                        <div class="mb-3">
                                                            <i class="ri-double-quotes-l display-4 text-success"></i>
                                                        </div>

                                                        <div id="qoutescarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                                            <div class="carousel-indicators">
                                                                <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                                <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                                <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                            </div>
                                                            <div class="carousel-inner text-center text-white pb-5">
                                                                <div class="carousel-item active">
                                                                    <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <p class="fs-15 fst-italic">" The theme is really great with an amazing customer support."</p>
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end carousel -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->

                                        <div class="col-lg-6">
                                            <div class="p-lg-5 p-4">
                                                <div>
                                                    <h5 class="text-primary">Welcome Back !</h5>
                                                    <p class="text-muted">Sign in to continue to Velzon.</p>
                                                </div>

                                                <div class="mt-4">
                                                    <form action="index.html">

                                                        <div class="mb-3">
                                                            <label for="email" class="form-label">Username</label>
                                                            <input type="email" class="form-control" name="email" placeholder="Enter username" :value="old('email')" required autofocus >
                                                        </div>

                                                        <div class="mb-3">
                                                            <div class="float-end">
                                                                <a href="auth-pass-reset-cover.html" class="text-muted">Forgot password?</a>
                                                            </div>
                                                            <label class="form-label" for="password-input">Password</label>
                                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                                <input type="password"  id="password" class="form-control block mt-1 w-full" type="password" placeholder="Enter password" name="password" required autocomplete="current-password">
                                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                            </div>
                                                        </div>

                                                        <div class="form-check">
                                                            <input class="form-check-input" id="remember_me" name="remember"  type="checkbox" value="" >
                                                            <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                                        </div>

                                                        <div class="flex items-center justify-end mt-4">
                                                            @if (Route::has('password.request'))
                                                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                                    {{ __('Forgot your password?') }}
                                                                </a>
                                                            @endif

                                                            <button class=" btn btn-success w-100 ml-4 mt-2" type="submit">
                                                                <span>Sign in</span>
                                                            </button>
                                                        </div>



                                                        <div class="mt-4 text-center">
                                                            <div class="signin-other-title">
                                                                <h5 class="fs-13 mb-4 title">Sign In with</h5>
                                                            </div>

                                                            <div>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-facebook-fill fs-16"></i></button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-google-fill fs-16"></i></button>
                                                                <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i class="ri-github-fill fs-16"></i></button>
                                                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i class="ri-twitter-fill fs-16"></i></button>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>

                                                <div class="mt-5 text-center">
                                                    <p class="mb-0">Don't have an account ? <a href="{{url('register')}}" class="fw-semibold text-primary text-decoration-underline"> Signup</a> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <p class="mb-0">&copy;
                                        <script>document.write(new Date().getFullYear())</script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            {{-- <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button class="ml-4" type="submit">
                    <span>Login</span>
                </button> --}}
            </div>
        </form>
        <script src="{{url('')}}/public/new/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('')}}/public/new/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{url('')}}/public/new/assets/libs/node-waves/waves.min.js"></script>
        <script src="{{url('')}}/public/new/assets/libs/feather-icons/feather.min.js"></script>
        <script src="{{url('')}}/public/new/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="{{url('')}}/public/new/assets/js/plugins.js"></script>
        <script src="{{url('')}}/public/new/assets/js/pages/password-addon.init.js"></script>
