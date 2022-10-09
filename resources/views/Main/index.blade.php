@extends('layouts.main')
@section('style')

@endsection

@section('modal')

@endsection

@section('content')
    <div class="row" style="position: relative; align-items: center;">
        <img src="{{url('')}}/public/img/bg1.png" alt="" class="w-100" >

        <div class="col-12 text-alignment ">
            <div class="ms-5" data-aos="fade-right">
                <span class="text-Headerseafood ">ปลาทะเลป้าพิศวงซีฟู๊ต <br> </span>
                <span class="text-Headerseafood1">อาหารทะเลสดๆส่งตรงจากแพปลา <br> </span>
                <span class="text-seafood">ขายอาหารทะเล ผักสด หมู ไก่ ของแห้ง และวัตถุดิบสำหรับประกอบอาหารทุกชนิดศุนย์รวมวัตถุดิบอาหารทะเลและผักสด <br> </span>
                <span class="text-seafood">เราใส่ใจทุกรายละเอียดพร้อมบริการจัดส่งทั่วประเทศไทย</span>
                <div class="mt-5">
                    <a href="{{url('product')}}" class="btn btn-primary btn-lg w-25" type="button" style="border-radius: 15px 15px 15px 15px;">Product <i class="lab las la-fish"></i> </a>
                    <button class="btn btn-outline-primary btn-lg w-25 md-2" type="submit" style="border-radius: 15px 15px 15px 15px;">Learn More </button>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container">
        <div class="row">
            <div class="col-lg-12">
            </div>
        </div>
    </div> --}}
<section class="section" id="services">
    <div class="container">
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5" data-aos="fade-up">
                        <h3 class="mb-3 fw-bold">เกี่ยวกับเรา</h3>
                        <p class="text-muted mb-4">ร้านปลาทะเลป้าพิศวงซีฟู้ตนำเดินกิจการมานับ 10ปี และเป็นร้านจำหน่ายของสด
                            ที่อยู่ในเครือป้าพิศวง โดยเครือป้าพิศวงเป็นตระกูลที่มีประสบการณ์การประกอบกิจการมามากกว่า 30 ปี
                        </p>
                    </div>
                </div>
            </div>
                <div class="card mt-3" data-aos="zoom-in">
                    <div class="card-body">
                        <div class="swiper pagination-dynamic-swiper rounded">
                            <div  class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{url('')}}/public/img/bg01.jpg" alt="" class="img-fluid"  height="17"/>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{url('')}}/public/img/bg02.jpg" alt="" class="img-fluid" />
                                </div>
                                {{-- <div class="swiper-slide">
                                    <img src="{{url('')}}/public/img/bg04.jpg" alt="" class="img-fluid" />
                                </div> --}}
                            </div>
                            <div class="swiper-pagination dynamic-pagination"></div>
                        </div>
                    </div><!-- end card-body -->
                </div>
        </div>
        <div class="row mt-2" data-aos="fade-up">
            <h1>ร้านปลาทะเลป้าพิศวงซีฟู้ต</h1>
            <span class="h4">ร้านปลาทะเลป้าพิศวงซีฟู้ตจำหน่ายอาหารทะเลทุกชนิด โดยประกอบไปด้วย ปลาทะเล ปลาน้ำจืด กุ้งขาว  กุ้งทะเล กุ้งแม่น้ำ ปลาหมึก หอยชนิดต่างๆ พร้อมบริการจัดส่งร้านอาหารทั่วประเทศ โดยเราเป็นศูนย์รวมวัตถุดิบชั้นยอดสำหรับแม่ครัวที่ต้องการปรุงอาหารที่บ้านและร้านอาหาร คุณภาพเกรดเอ การันตีมาตรฐานของร้านโดยทีมงานป้าพิศวงโดยมีประสบการณ์การค้าขายมาแล้วกว่า 10 ปี พร้อมบริการจัดส่งทั่วประเทศไทย</span>
        </div>
    </div>


</section>

<section class="section bg-light py-5" id="features">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h3 class="mb-3 fw-bold">สินค้า <span class="text-danger">และบริการของเรา</span></h3>
                    <p class="text-muted mb-4">สินค้าและบริการของเราทางเรามีสินค้าและบริการหลายชนิด โดยสินค้าจะประกอบไปด้วย ปลาทะเล ปลาน้ำจืด กุ้งเกษตรหรือกุ้งขาว กุ้งทะเลชนิดต่างๆ หอย ปูม้าทะเล ปลาหมึก แมงกระพรุน</p>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row"  data-aos="zoom-in">
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body text-center p-4">
                        <div class="avatar-xl mx-auto mb-4 position-relative"  >
                            <img src="{{url('')}}/public/img/fish/kapongsod_1.jpeg" alt="" class="img-fluid ">

                        </div>
                        <!-- end card body -->
                        <h5 class="mb-1"><a href="pages-profile.html" class="text-body">ปลาทะเล</a></h5>
                        <p class="text-muted mb-0">ปลากะพงทะเลและปลาอื่นๆ</p>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body text-center p-4">
                        <div class="avatar-xl mx-auto mb-4 position-relative">
                            <img src="{{url('')}}/public/img/shimp/shimp1.jpg" alt="" class="img-fluid rounded-circle">

                        </div>
                        <!-- end card body -->
                        <h5 class="mb-1"><a href="pages-profile.html" class="text-body">กุ้ง</a></h5>
                        <p class="text-muted mb-0">กุ้งเกษตรและกุ้งทะเล</p>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body text-center p-4">
                        <div class="avatar-xl mx-auto mb-4 position-relative">
                            <img src="{{url('')}}/public/img/squid/squid.jpg" alt="" class="img-fluid rounded-circle">

                        </div>
                        <!-- end card body -->
                        <h5 class="mb-1"><a href="pages-profile.html" class="text-body">หมึก</a></h5>
                        <p class="text-muted mb-0">หมึกสำหรับผัดและย่าง</p>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body text-center p-4">
                        <div class="avatar-xl mx-auto mb-4 position-relative">
                            <img src="{{url('')}}/public/img/crab/crab.jpg" alt="" class="img-fluid rounded-circle">

                        </div>
                        <!-- end card body -->
                        <h5 class="mb-1"><a href="pages-profile.html" class="text-body">ปูและเนื้อปู</a></h5>
                        <p class="text-muted mb-0">ปูม้าทะเลและเนื้อปู</p>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
        <div class="row" data-aos="fade-up">
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body text-center p-4">
                        <div class="avatar-xl mx-auto mb-4 position-relative">
                            <img src="{{url('')}}/public/img/fish/tt.jpg" alt="" class="img-fluid rounded-circle">

                        </div>
                        <!-- end card body -->
                        <h5 class="mb-1"><a href="pages-profile.html" class="text-body">ปลาทับทิม</a></h5>
                        <p class="text-muted mb-0">ปลาน้ำจืด</p>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body text-center p-4">
                        <div class="avatar-xl mx-auto mb-4 position-relative">
                            <img src="{{url('')}}/public/img/shell/shell01.png" alt="" class="img-fluid rounded-circle">

                        </div>
                        <!-- end card body -->
                        <h5 class="mb-1"><a href="pages-profile.html" class="text-body">หอยหลากหลากชนิด</a></h5>
                        <p class="text-muted mb-0">หอยไทยแท้สดๆ</p>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body text-center p-4">
                        <div class="avatar-xl mx-auto mb-4 position-relative">
                            <img src="{{url('')}}/public/img/salmon/salmon.jpg" alt="" class="img-fluid rounded-circle">

                        </div>
                        <!-- end card body -->
                        <h5 class="mb-1"><a href="pages-profile.html" class="text-body">ปลาแซลม่อน</a></h5>
                        <p class="text-muted mb-0">ปลาแซลม่อนเทราต์</p>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body text-center p-4">
                        <div class="avatar-xl mx-auto mb-4 position-relative">
                            <img src="{{url('')}}/public/img/etc/numjim.png" alt="" class="img-fluid rounded-circle">

                        </div>
                        <!-- end card body -->
                        <h5 class="mb-1"><a href="pages-profile.html" class="text-body">น้ำจิ้ม</a></h5>
                        <p class="text-muted mb-0">น้ำจิ้มซีฟู้ตและน้ำจิ้มสามรส</p>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
        <div class="row" data-aos="fade-up">
            <div class="col-lg-12">
                <div class="text-center mt-2">
                    <a href="{{url('product')}}" class="btn btn-primary">ดูเพิ่มเติม <i class="ri-arrow-right-line ms-1 align-bottom"></i></a>
                </div>
            </div>
        </div>
    </div>



</section>

<section class="section"  id="plans">

    <div class="row" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h3 class="mb-3 fw-bold">บริการของเรา</h3>
                        <p class="text-muted mb-4">หากซื้อของกับเราทางเรามีบริการทำปลาและแกะกุ้งรวมถึงทำตามความต้องการของลูกค้าอย่างใส่ใจรายละเอียด
                            และมีบริการจัดส่งถึงพื้นที่ทั่วประเทศไทย โดยสินค้าจะถูกแพ็คส่งอย่างดีและตรงตามเวลาที่ลูกค้ากำหนด
                        </p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row text-center">
                <div class="col-lg-4">
                    <div class="process-card mt-4">
                        <div class="process-arrow-img d-none d-lg-block">
                            <img src="assets/images/landing/process-arrow-img.png" alt="" class="img-fluid">
                        </div>
                        <div class="avatar-sm icon-effect mx-auto mb-4">
                            <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                <i class="ri-quill-pen-line"></i>
                            </div>
                        </div>

                        <h5>เลือกสินค้า</h5>
                        <p class="text-muted">เลือกสินค้าพร้อมเลือกความต้องการของลูกค้าทางเราจะจัดสินค้าที่ดีที่สุดให้กับลูกค้า .</p>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="process-card mt-4">
                        <div class="process-arrow-img d-none d-lg-block">
                            <img src="assets/images/landing/process-arrow-img.png" alt="" class="img-fluid">
                        </div>
                        <div class="avatar-sm icon-effect mx-auto mb-4">
                            <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                <i class="ri-user-follow-line"></i>
                            </div>
                        </div>

                        <h5>กำหนดที่อยู่ในการจัดส่ง</h5>
                        <p class="text-muted">กำหนดที่อยู่ในการจัดส่งให้กับเราเพื่อที่เราจะได้ไปส่งของให้กับลูกค้าถึงที่ .</p>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="process-card mt-4">
                        <div class="avatar-sm icon-effect mx-auto mb-4">
                            <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                <i class="ri-book-mark-line"></i>
                            </div>
                        </div>
                        <h5>การชำระเงิน</h5>
                        <p class="text-muted">ทางร้านสามารถรับชำระเงินได้ทั้งแบบโอนและเก็บเงินปลายทางรวมถึงเข้าร่วมกับโครงการของรัฐบาลทุกโครงการ .</p>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>

</section>

</section>

<section class="section bg-light" id="reviews">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h3 class="mb-3 fw-bold">ติดต่อเรา</h3>
                    <p class="text-muted mb-4">ลูกค้าสามารถสั่งสินค้ากับเราได้อย่างหลายช่องทางไม่ว่าจะเป็นทาง Facebook Line หรือเบอร์โทรศัพท์</p>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row gy-4" data-aos="fade-up">
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-body">
                        <div class="swiper effect-creative-swiper rounded">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{url('')}}/public/img/bg03.jpg" alt="" class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{url('')}}/public/img/bg01.jpg" alt="" class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{url('')}}/public/img/bg02.jpg" alt="" class="img-fluid" />
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div><!-- end card-body -->
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <form>
                            <div class="row">
                                     <h2>ติดต่อซื้อขายกับเรา</h2>
                                    <div class="col-lg-12">
                                        <div class="row"></div>
                                        <div class="mt-4">
                                            <span  class="h3"><i class="fa-brands fa-square-facebook "></i>
                                                ร้านปลาทะเลป้าพิศวงซีฟู๊ต
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mt-4">
                                            <span  class="h3"><i class="fa-brands fa-line "></i>
                                                MuuMuuseafood
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mt-4">
                                            <span  class="h3"><i class="fa-solid fa-phone"></i>
                                                086-322-9164 <br>
                                                &ensp; &nbsp; 063-629-5858
                                            </span>
                                        </div>
                                    </div>
                                <div class="col-lg-12">
                                    <div class="mt-4">
                                        <span  class="h3">
                                            <i class="fa-solid fa-location-dot"></i>
                                            เลขที่ 1 ซอย เสรีไทย 41 <br> แขวง คลองกุ่ม เขต บึงกุ่ม กรุงเทพมหานคร 10240
                                        </span>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end row -->
    </div>

</section>

<section class="section" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="text-center mb-5">
                <h3 class="mb-3 fw-bold">หากลูกค้าต้องการมาซื้อของที่หน้าร้านของเรา</h3>
            </div>
        </div>
        <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.125764322983!2d100.65479881526221!3d13.771288490334856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d619c3dc5d667%3A0xce816edc046c934e!2z4Lij4LmJ4Liy4LiZ4Lit4Liy4Lir4Liy4Lij4LiX4Liw4LmA4Lil4Lib4LmJ4Liy4Lie4Li04Lio4Lin4LiH4LiL4Li14Lif4Li54LmJ4LiUICjguYDguIjguYrguKvguKHguLkp!5e0!3m2!1sth!2sth!4v1664782711629!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
@endsection

@section('script')

@endsection

