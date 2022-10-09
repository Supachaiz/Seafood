

    <meta charset="utf-8" />
    <title>Sign Up | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="{{url('')}}/public/new/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{url('')}}/public/new/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{url('')}}/public/new/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{url('')}}/public/new/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{url('')}}/public/new/assets/css/custom.min.css" rel="stylesheet" type="text/css" />



        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="auth-page-wrapper pt-5">
                <!-- auth page bg -->
                <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
                    <div class="bg-overlay"></div>

                    <div class="shape">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                            <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                        </svg>
                    </div>
                </div>

                <!-- auth page content -->
                <div class="auth-page-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center mt-sm-5 mb-4 text-white-50">
                                    <div>
                                        <a href="index.html" class="d-inline-block auth-logo">
                                            <img src="assets/images/logo-light.png" alt="" height="20">
                                        </a>
                                    </div>
                                    <p class="mt-3 fs-15 fw-medium">Premium Admin & Dashboard Template</p>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row justify-content-center">
                            <div class="col-md-8 col-lg-6 col-xl-5">
                                <div class="card mt-4">

                                    <div class="card-body p-4">
                                        <div class="text-center mt-2">
                                            <h5 class="text-primary">Create New Account</h5>
                                            <p class="text-muted">Get your free velzon account now</p>
                                        </div>
                                        <div class="p-2 mt-4">
                                            <form class="needs-validation" novalidate action="index.html">

                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                                    <input id="email" class="form-control mt-1 w-full" type="email" name="email" :value="old('email')" required>
                                                    <div class="invalid-feedback">
                                                        Please enter email
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Username <span class="text-danger">*</span></label>
                                                    <input id="name" class="form-control mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" >
                                                    <div class="invalid-feedback">
                                                        Please enter username
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="password">Password</label>
                                                    <div class="position-relative auth-pass-inputgroup">
                                                        <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password">
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                        <div class="invalid-feedback">
                                                            Please enter password
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label"  for="password_confirmation">ConfirmPassword</label>
                                                    <div class="position-relative auth-pass-inputgroup">
                                                        <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password">
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                        <div class="invalid-feedback">
                                                            Please confirm password
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <p class="mb-0 fs-12 text-muted fst-italic">By registering you agree to the Velzon <a href="#" class="text-primary text-decoration-underline fst-normal fw-medium">Terms of Use</a></p>
                                                </div>

                                                <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                                    <h5 class="fs-13">Password must contain:</h5>
                                                    <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>
                                                    <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>
                                                    <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                                                    <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>
                                                </div>

                                                <div class="mt-4">
                                                    <button class="btn btn-success w-100" type="submit">Sign Up</button>
                                                </div>

                                                <div class="mt-4 text-center">
                                                    <div class="signin-other-title">
                                                        <h5 class="fs-13 mb-4 title text-muted">Create account with</h5>
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
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->

                                <div class="mt-4 text-center">
                                    <p class="mb-0">Already have an account ? <a href="auth-signin-basic.html" class="fw-semibold text-primary text-decoration-underline"> Signin </a> </p>
                                </div>

                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </div>
                <!-- end auth page content -->

                <!-- footer -->
                <footer class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <p class="mb-0 text-muted">&copy;
                                        <script>document.write(new Date().getFullYear())</script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->
            </div>



            {{-- <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div> --}}
        </form>
        <script src="{{url('')}}/public/new/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('')}}/public/new/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{url('')}}/public/new/assets/libs/node-waves/waves.min.js"></script>
        <script src="{{url('')}}/public/new/assets/libs/feather-icons/feather.min.js"></script>
        <script src="{{url('')}}/public/new/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="{{url('')}}/public/new/assets/js/plugins.js"></script>

        <!-- particles js -->
        <script src="{{url('')}}/public/new/assets/libs/particles.js/particles.js"></script>
        <!-- particles app js -->
        <script src="{{url('')}}/public/new/assets/js/pages/particles.app.js"></script>
        <!-- validation init -->
        <script src="{{url('')}}/public/new/assets/js/pages/form-validation.init.js"></script>
        <!-- password create init -->
        <script src="{{url('')}}/public/new/assets/js/pages/passowrd-create.init.js"></script>
