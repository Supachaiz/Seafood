@extends('layouts.menu')
@section('style')

@endsection

@section('modal')

@endsection



@section('content')



 <section class="section bg-light py-5 mt-5" id="features" data-aos="fade-up-right">
    <div class="bg-overlay bg-overlay-pattern"></div>
    <div class="container">

        <div class="card">
            <div class="card-body">
                <a href="{{url('product')}}" type="button" class="btn btn-warning btn-label waves-effect waves-light rounded-pill"><i class="ri-arrow-left-up-line label-icon align-middle rounded-pill fs-16 me-2"></i> Back</a>
                 <h3 class="text-center">สรุปการสั่งซื้อรายการการสั่งซื้อ</h3>
                <div class="row mt-2">
                    <div class="col-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="row ">
                                    <div class="col-6 text-center ">
                                    <img src="{{url('')}}/public/img/fish/kapongsod_1.jpeg" class="w-50" alt="">
                                    </div>
                                    <div class="col-6">
                                        <div class="row align-items-center ">
                                            <div class="col-6 fs-5">
                                                <span class="fw-bold text-nowrap"> ชื่อสินค้า : </span>
                                            </div>
                                            <div class="col-6 fs-5">
                                                <span class="text-nowrap">ปลากะพงทะเล 7-8 ขีด</span>
                                            </div>
                                            <div class="col-6 fs-5">
                                                <span class="fw-bold text-nowrap"> ราคา : </span>
                                            </div>
                                            <div class="col-6 fs-5">
                                                <span class="text-nowrap">200 บาท</span>
                                            </div>
                                            <div class="col-6 fs-5">
                                                <span class="fw-bold text-nowrap"> จำนวน : </span>
                                            </div>
                                            <div class="col-6 fs-5">
                                                <div class="input-step mt-2">
                                                    <button type="button" class="minus">–</button>
                                                    <input type="number" class="product-quantity" value="1" min="0" max="100" readonly>
                                                    <button type="button" class="plus">+</button>
                                                </div>
                                            </div>
                                            <div class="col-12 fs-5">
                                                <span class="fw-bold">จัดเตรียมปลา : </span>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <input type="text" placeholder="คอดเกล็ต ควักไส้ หั่นแกง แร่เนื้อ..." class="form-control w-100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4 ">
                                    <div class="col-6 text-center ">
                                    <img src="{{url('')}}/public/img/fish/kapongsod_1.jpeg" class="w-50" alt="">
                                    </div>
                                    <div class="col-6">
                                        <div class="row align-items-center ">
                                            <div class="col-6 fs-5">
                                                <span class="fw-bold text-nowrap"> ชื่อสินค้า : </span>
                                            </div>
                                            <div class="col-6 fs-5">
                                                <span class="text-nowrap">ปลากะพงทะเล 7-8 ขีด</span>
                                            </div>
                                            <div class="col-6 fs-5">
                                                <span class="fw-bold text-nowrap"> ราคา : </span>
                                            </div>
                                            <div class="col-6 fs-5">
                                                <span class="text-nowrap">200 บาท</span>
                                            </div>
                                            <div class="col-6 fs-5">
                                                <span class="fw-bold text-nowrap"> จำนวน : </span>
                                            </div>
                                            <div class="col-6 fs-5">
                                                <div class="input-step mt-2">
                                                    <button type="button" class="minus">–</button>
                                                    <input type="number" class="product-quantity" value="1" min="0" max="100" readonly>
                                                    <button type="button" class="plus">+</button>
                                                </div>
                                            </div>
                                            <div class="col-12 fs-5">
                                                <span class="fw-bold">จัดเตรียมปลา : </span>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <input type="text" placeholder="คอดเกล็ต ควักไส้ หั่นแกง แร่เนื้อ..." class="form-control w-100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4 ">
                                    <div class="col-6 text-center ">
                                    <img src="{{url('')}}/public/img/fish/kapongsod_1.jpeg" class="w-50" alt="">
                                    </div>
                                    <div class="col-6">
                                        <div class="row align-items-center ">
                                            <div class="col-6 fs-5">
                                                <span class="fw-bold text-nowrap"> ชื่อสินค้า : </span>
                                            </div>
                                            <div class="col-6 fs-5">
                                                <span class="text-nowrap">ปลากะพงทะเล 7-8 ขีด</span>
                                            </div>
                                            <div class="col-6 fs-5">
                                                <span class="fw-bold text-nowrap"> ราคา : </span>
                                            </div>
                                            <div class="col-6 fs-5">
                                                <span class="text-nowrap">200 บาท</span>
                                            </div>
                                            <div class="col-6 fs-5">
                                                <span class="fw-bold text-nowrap"> จำนวน : </span>
                                            </div>
                                            <div class="col-6 fs-5">
                                                <div class="input-step mt-2">
                                                    <button type="button" class="minus">–</button>
                                                    <input type="number" class="product-quantity" value="1" min="0" max="100" readonly>
                                                    <button type="button" class="plus">+</button>
                                                </div>
                                            </div>
                                            <div class="col-12 fs-5">
                                                <span class="fw-bold">จัดเตรียมปลา : </span>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <input type="text" placeholder="คอดเกล็ต ควักไส้ หั่นแกง แร่เนื้อ..." class="form-control w-100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4 ">
                                    <div class="col-6 text-center ">
                                    <img src="{{url('')}}/public/img/fish/kapongsod_1.jpeg" class="w-50" alt="">
                                    </div>
                                    <div class="col-6">
                                        <div class="row align-items-center ">
                                            <div class="col-6 fs-5">
                                                <span class="fw-bold text-nowrap"> ชื่อสินค้า : </span>
                                            </div>
                                            <div class="col-6 fs-5">
                                                <span class="text-nowrap">ปลากะพงทะเล 7-8 ขีด</span>
                                            </div>
                                            <div class="col-6 fs-5">
                                                <span class="fw-bold text-nowrap"> ราคา : </span>
                                            </div>
                                            <div class="col-6 fs-5">
                                                <span class="text-nowrap">200 บาท</span>
                                            </div>
                                            <div class="col-6 fs-5">
                                                <span class="fw-bold text-nowrap"> จำนวน : </span>
                                            </div>
                                            <div class="col-6 fs-5">
                                                <div class="input-step mt-2">
                                                    <button type="button" class="minus">–</button>
                                                    <input type="number" class="product-quantity" value="1" min="0" max="100" readonly>
                                                    <button type="button" class="plus">+</button>
                                                </div>
                                            </div>
                                            <div class="col-12 fs-5">
                                                <span class="fw-bold">จัดเตรียมปลา : </span>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <input type="text" placeholder="คอดเกล็ต ควักไส้ หั่นแกง แร่เนื้อ..." class="form-control w-100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-5 ">
                        <div class="card mt-2 ">
                            <div class="card-body">
                               <span class="fs-5">กรอกข้อมูลลูกค้า</span>
                               <hr>
                               <div class="row">
                                    <div class="col-lg-12">
                                        <div>
                                            <label for="basiInput" class="form-label">ชื่อลูกค้า</label>
                                            <input type="password" class="form-control" id="basiInput" placeholder="ชื่อลูกค้า">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div>
                                            <label for="basiInput" class="form-label">เบอร์โทรศัพท์</label>
                                            <input type="password" class="form-control" id="basiInput"placeholder="เบอร์โทรศัพท์">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div>
                                            <label for="basiInput" class="form-label">รายละเอียดที่อยู่ในการจัดส่ง</label>
                                            <input type="password" class="form-control" id="basiInput"placeholder="ที่อยู่ในการจัดส่ง">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div>
                                            <label for="basiInput" class="form-label">ช่วงเวลาที่ต้องการจัดส่ง</label>
                                            <input type="password" class="form-control" id="basiInput"placeholder="ช่วงเวลาที่ต้องการจัดส่ง">
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                        <div class="card mt-2 ">
                            <div class="card-body">
                               <span class="fs-5">สรุปการสั่งซื้อและวิธีการชำระเงิน</span>
                               <hr>
                               <div class="row">
                                    <div class="col-6">
                                        <span>จำนวนสินค้าทั้งหมด : </span>
                                    </div>
                                    <div class="col-6 text-end">
                                        <span>3 ชิ้น</span>
                                    </div>
                                    <div class="col-6">
                                        <span> ค่าบริการจัดส่ง: </span>
                                    </div>
                                    <div class="col-6 text-end">
                                        <span>3 ชิ้น</span>
                                    </div>
                                    <div class="col-6">
                                        <span>ราคาสิ้นค้าทั้งหมด : </span>
                                    </div>
                                    <div class="col-6 text-end">
                                        <span>500 บาท</span>
                                    </div>
                                    <div class="col-12"><hr></div>
                                    <div class=""><span>วิธีการชำระเงิน</span></div>
                                    <div class="col-12">
                                        <span> ชำระผ่านทางบัญชีธนาคาร: </span>
                                    </div>
                                    <div class="col">
                                        <span>ธนาคารกสิกรไทย : 6752174626</span>
                                    </div>
                                    <div class="col">
                                        <span>ชื่อบัญชี นางสาวพลอยไพลิน ชั้วปลี</span>
                                    </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col align-items-end">
                        <button type="button" class="btn btn-success btn-label float-end waves-effect waves-light rounded-pill"> <i class="ri-check-double-line label-icon align-middle rounded-pill fs-16 me-2"></i>สั่งซื้อสินค้า</button>
                    </div>
                </div>
            </div>
        </div>

    </div>



</section>

<section class="section"  id="plans">



</section>

{{-- </section> --}}

{{-- <section class="section bg-light" id="reviews">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h3 class="mb-3 fw-bold">ติดต่อเรา</h3>
                    <p class="text-muted mb-4">ลูกค้าสามารถสั่งสินค้ากับเราได้อย่างหลายช่องทางไม่ว่าจะเป็นทาง Facebook Line หรือเบอร์โทรศัพท์</p>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row gy-4">
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
@endsection --}}

@section('script')

@endsection

