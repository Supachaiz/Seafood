<!doctype html>
<html lang="en" data-layout="horizontal" data-topbar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<head>

    <meta charset="utf-8" />
    <title>Fresh Seafood</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('')}}/public/img/Logo.png">

    <!--Swiper slider css-->
    <link href="{{url('')}}/public/new/assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{url('')}}/public/new/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{url('')}}/public/new/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{url('')}}/public/new/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{url('')}}/public/new/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{url('')}}/public/new/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url('')}}/public/new/assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{url('')}}/public/new/assets/libs/aos/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Hammersmith+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Athiti:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{url('')}}/public/new/assets/libs/@tarekraafat/autocomplete.js/css/autoComplete.css">
    <style>

        *{
            font-family: 'Kanit', sans-serif;
        }
        .text-about{
            position: absolute;
            top: 473px;
            text-align: center;
            color: #fff;
        }

        .navbar-landing {
            padding: 0% !important;
        }
        .text-alignment{
            position: absolute;
        }
        .text-Headerseafood{
            font-size: 70px;
            color: #433f76;
            font-family: 'Athiti', cursive !important;
        }
        .text-Headerseafood1{
            font-size: 50px;
            color: #433f76;
            font-family: 'Athiti', cursive !important;
        }
        .text-seafood{
            font-size: 16px;
        }
        .bg-card{
            background: rgb(237, 237, 237)
        }
        .btn_amout{

        }
        ::-webkit-scrollbar {
        width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10%;
            }

            /* Handle */
            ::-webkit-scrollbar-thumb {
            background: rgb(177, 176, 176);
            }

            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
            background: rgb(126, 126, 126);
            }
        @media (max-width:991px){
            .text-title{

            }
        }
    </style>
    @yield('style')

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">
@yield('modal')
    <!-- Begin page -->
    <div class="layout-wrapper landing">
        @yield('nav')
        <nav class="navbar navbar-expand-lg navbar-landing fixed-top bg-seafood" id="navbar">
            <div class="container">
                <button class="navbar-toggler py-0 fs-20 text-body " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <a class="navbar-brand" href="index.html" >
                        <img src="{{url('')}}/public/img/logo.png" class="card-logo card-logo-dark" alt="logo dark" style="height: 70px;">
                        <img src="{{url('')}}" class="card-logo card-logo-light" alt="logo light">
                    </a>
                    {{-- <h4 class="navbar-brand" style="height: 17%;">ร้านปลาทะเลป้าพิศวงซีฟู้ต</h4> --}}
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                        <li class="nav-item">
                            <a class="nav-link fs-15 fw-semibold" href="{{url('/')}}">หน้าหลัก</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-15 fw-semibold" href="{{url('product')}}">สินค้าและบริการ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-15 fw-semibold" href="{{url('order')}}">สรุปรายการสั่งซื้อ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-15 fw-semibold" href="{{url('manageorder')}}">ติดตามคำสั่งซื้อ</a>
                        </li>
                        <li class="nav-item">
                            <div class="float-end">
                                <div class="dropdown topbar-head-dropdown ms-1 header-item">
                                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                        <i class='bx bx-shopping-bag fs-22'></i>
                                        <span class="position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-info" id="count_ship">0</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 dropdown-menu-cart" aria-labelledby="page-header-cart-dropdown">
                                        <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="m-0 fs-16 fw-semibold"> My Cart</h6>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="badge badge-soft-warning fs-13"><span class="cartitem-badge"></span>
                                                        สินค้า</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-simplebar style="max-height: 300px;">
                                            <div class="p-2" id="list_ship">
                                                <div class="text-center empty-cart" id="empty-cart">
                                                    <div class="avatar-md mx-auto my-3">
                                                        <div class="avatar-title bg-soft-info text-info fs-36 rounded-circle">
                                                            <i class='bx bx-cart'></i>
                                                        </div>
                                                    </div>
                                                    <h5 class="mb-3">Your Cart is Empty!</h5>
                                                    <a href="apps-ecommerce-products.html" class="btn btn-success w-md mb-3">Shop Now</a>
                                                </div>
                                                {{-- <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{url('')}}/public/img/fish/kapongsod_1.jpeg" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                                        <div class="flex-1">
                                                            <h6 class="mt-0 mb-1 fs-14">
                                                                <a href="apps-ecommerce-product-details.html" class="text-reset">Branded
                                                                    T-Shirts</a>
                                                            </h6>
                                                            <p class="mb-0 fs-12 text-muted">
                                                                ปลากะพงขาวตัวใหญ่:
                                                            </p>
                                                        </div>
                                                        <div class="px-2">
                                                            <h5 class="m-0 fw-normal">$<span class="cart-item-price">220 บาท</span></h5>
                                                        </div>
                                                        <div class="ps-2">
                                                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border" id="checkout-elem">
                                            <div class="d-flex justify-content-between align-items-center pb-3">
                                                <h5 class="m-0 text-muted">Total:</h5>
                                                <div class="px-2">
                                                    <h5 class="m-0" id="cart-item-total">฿ 0</h5>
                                                </div>
                                            </div>

                                            <a href="{{url('order')}}" class="btn btn-success text-center w-100">
                                                Checkout
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>


                    </ul>
                    @if (isset(Auth::user()->id ))
                    {{Auth::user()->name }}
                    <a  class="menu-link ms-2" href="{{ route('logout') }}" onclick="   event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="svg-icon svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <rect fill="#000000" opacity="0.3" transform="translate(9.000000, 12.000000) rotate(-270.000000) translate(-9.000000, -12.000000) " x="8" y="6" width="2" height="12" rx="1"/>
                                <path d="M20,7.00607258 C19.4477153,7.00607258 19,6.55855153 19,6.00650634 C19,5.45446114 19.4477153,5.00694009 20,5.00694009 L21,5.00694009 C23.209139,5.00694009 25,6.7970243 25,9.00520507 L25,15.001735 C25,17.2099158 23.209139,19 21,19 L9,19 C6.790861,19 5,17.2099158 5,15.001735 L5,8.99826498 C5,6.7900842 6.790861,5 9,5 L10.0000048,5 C10.5522896,5 11.0000048,5.44752105 11.0000048,5.99956624 C11.0000048,6.55161144 10.5522896,6.99913249 10.0000048,6.99913249 L9,6.99913249 C7.8954305,6.99913249 7,7.89417459 7,8.99826498 L7,15.001735 C7,16.1058254 7.8954305,17.0008675 9,17.0008675 L21,17.0008675 C22.1045695,17.0008675 23,16.1058254 23,15.001735 L23,9.00520507 C23,7.90111468 22.1045695,7.00607258 21,7.00607258 L20,7.00607258 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(15.000000, 12.000000) rotate(-90.000000) translate(-15.000000, -12.000000) "/>
                                <path d="M16.7928932,9.79289322 C17.1834175,9.40236893 17.8165825,9.40236893 18.2071068,9.79289322 C18.5976311,10.1834175 18.5976311,10.8165825 18.2071068,11.2071068 L15.2071068,14.2071068 C14.8165825,14.5976311 14.1834175,14.5976311 13.7928932,14.2071068 L10.7928932,11.2071068 C10.4023689,10.8165825 10.4023689,10.1834175 10.7928932,9.79289322 C11.1834175,9.40236893 11.8165825,9.40236893 12.2071068,9.79289322 L14.5,12.0857864 L16.7928932,9.79289322 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.500000, 12.000000) rotate(-90.000000) translate(-14.500000, -12.000000) "/>
                            </g>
                        </svg></span>
                        <span class="menu-text" hidden> &emsp;{{ __('Logout') }}</span>
                    </a>
                    <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                        @csrf
                        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="user_id" id="user_id" value="@if(isset(Auth::user()->id)){{Auth::user()->id}}@endif">
                    </form>

                    @else
                        <a href="{{url('login')}}" class="btn btn-link fw-medium text-decoration-none text-dark">Sign
                            in</a>
                        <a href="{{url('register')}}" class="btn btn-primary">Sign Up</a>

                    @endif


            </div>
            </div>
        </nav>
            @yield('content')

        <footer class="custom-footer bg-dark py-5 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mt-4">
                        <div>
                            <div>
                                <img src="{{url('')}}/public/img/logo.png" alt="logo light" height="40" width="60">
                            </div>
                            <div class= "text-title">
                                <p>ร้านปลาทะเลป้าพิศวงซีฟู้ด </p>
                                <p class="text-title2">ร้านปลาทะเลป้าพิศวงซีฟู้ดเป็นหนึงในร้านของเครือป้าพิศวงที่จำหน่ายของวัตถุดิบสดๆ ไม่ว่าจะเป็น ของทะเล ผัก ไก่
                                    ซึ่งการันตีคุณภาพด้วยประสบการณ์การดำเนินกิจการมากถึง 20 ปีซึ่งเป็นการสืบทอดกิจการกันแบบรุ่นสู่รุ่นทำให้ลูกค้าสามารถไว้วางในด้านของการจัดหาวัตถุดิปต่างๆ เพื่อให้ลูกค้าได้ของดีที่สุด</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 ms-lg-auto">
                        <div class="row">
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Website</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list fs-14">
                                        <li><a href="pages-profile.html">Home</a></li>
                                        <li><a href="pages-gallery.html">Product</a></li>
                                        <li><a href="apps-projects-overview.html">Order</a></li>
                                        <li><a href="pages-timeline.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Contact</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list fs-14">
                                        <li>
                                            <a href="pages-pricing.html">
                                             <i class="fa-brands fa-facebook"></i>
                                            ร้านปลาทะเลป้าพิศวงซีฟู้ด
                                            </a>
                                        </li>
                                        <li>
                                            <a href="apps-mailbox.html">
                                                <i class="fa-brands fa-line"></i>
                                                MuuMuuseafood
                                            </a>
                                        </li>
                                        <li><a href="apps-chat.html">
                                            <i class="fa-solid fa-phone"></i>
                                            086-322-9164 <br>
                                            &ensp; &nbsp; 063-629-5858
                                            </a>
                                        </li>
                                        <li><a href="apps-chat.html">
                                            <i class="fa-solid fa-globe"></i>
                                            www.muumuuseafood.com
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">ที่อยู่ของทางร้าน</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list fs-14">
                                        <li>
                                            <a href="pages-faqs.html"><i class="fa-solid fa-location-dot"></i> เลขที่ 1 ซอย เสรีไทย 41 <br> แขวง คลองกุ่ม เขต บึงกุ่ม กรุงเทพมหานคร 10240</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row text-center text-sm-start align-items-center mt-5">
                    <div class="col-sm-6">

                        <div>
                            <p class="copy-rights mb-0">
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> © Velzon - Themesbrand
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-3 mt-sm-0">
                            <ul class="list-inline mb-0 footer-social-link">
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-facebook-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-github-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-linkedin-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-google-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-dribbble-line"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->

    </div>

    <!-- end layout wrapper -->


    <!-- JAVASCRIPT -->

    <script src="{{url('')}}/public/new/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('')}}/public/new/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{url('')}}/public/new/assets/libs/node-waves/waves.min.js"></script>
    <script src="{{url('')}}/public/new/assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <script src="{{url('')}}/public/new/assets/js/pages/form-input-spin.init.js"></script>

    <!--Swiper slider js-->
    <script src="{{url('')}}/public/new/assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- landing init -->
    <script src="{{url('')}}/public/new/assets/js/pages/swiper.init.js"></script>
    <script src="{{url('')}}/public/new/assets/js/pages/landing.init.js"></script>
    <script src="{{url('')}}/public/new/assets/js/pages/ecommerce-order.init.js"></script>
    <script src="{{url('')}}/public/new/assets/js/pages/ecommerce-order.init.js"></script>
    <script src="{{url('')}}/public/new/assets/libs/aos/aos.js"></script>
    <script src="{{url('')}}/public/new/assets/js/pages/animation-aos.init.js"></script>
    @yield('script')
</body>

</html>
