@extends('layouts.menu')
@section('style')

@endsection

@section('modal')

@endsection



@section('content')


<section class="section pb-0 hero-section" id="hero" data-aos="fade-up-left">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{url('manageorder')}}" type="submit" class="btn btn-warning btn-label waves-effect waves-light rounded-pill"><i class="ri-arrow-left-up-line label-icon align-middle rounded-pill fs-16 me-2"></i> ย้อนกลับ</a>
                <div class="card mt-2">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h5 class="card-title flex-grow-1 mb-0">Order #ชื่อลูกค้า</h5>
                            {{-- <div class="flex-shrink-0">
                                <a href="apps-invoices-details.html" class="btn btn-success btn-sm"><i class="ri-download-2-fill align-middle me-1"></i> Invoice</a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-card">
                            <table class="table table-nowrap align-middle table-borderless mb-0">
                                <thead class="table-light text-muted">
                                    <tr>
                                        <th scope="col">ออเดอร์</th>
                                        <th scope="col">ราคา</th>
                                        <th scope="col">การชำระเงิน</th>
                                        <th scope="col">ที่อยู่ในการจัดส่ง</th>
                                        <th scope="col">ช่วงเวลาที่ต้องการจัดส่ง</th>
                                        <th scope="col">เบอร์โทรศัพท์</th>
                                        <th scope="col" class="text-end">Total Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-md bg-light rounded p-1">
                                                    <img src="{{url('')}}/public/img/fish/kapongsod_1.jpeg" alt="" class="img-fluid d-block">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h5 class="fs-14"><a href="apps-ecommerce-product-details.html" class="text-body">ปลากะพง</a></h5>
                                                    <p class="text-muted mb-0">จำนวน: <span class="fw-medium">2 ตัว</span></p>
                                                    <p class="text-muted mb-0">การจัดเตรียมปลา: <span class="fw-medium">แร่เนื้อ 2 ด้าน</span></p>

                                                </div>
                                            </div>
                                        </td>
                                        <td>$119.99</td>
                                        <td>ผ่านทางธนาคาร</td>
                                        <td>
                                            <span>1/81 หมู่บ้านพาทาโกเนีย ....</span>
                                        </td>
                                        <td class="fw-medium text-end">
                                            11:30 Pm
                                        </td>
                                        <td class="fw-medium text-end">
                                            089-555-5555
                                        </td>
                                        <td class="fw-medium text-end">
                                            500 บาท
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-md bg-light rounded p-1">
                                                    <img src="{{url('')}}/public/img/fish/kao.webp" alt="" class="img-fluid d-block">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h5 class="fs-14"><a href="apps-ecommerce-product-details.html" class="text-body">ปลากะพง</a></h5>
                                                    <p class="text-muted mb-0">จำนวน: <span class="fw-medium">2 ตัว</span></p>
                                                    <p class="text-muted mb-0">การจัดเตรียมปลา: <span class="fw-medium">แร่เนื้อ 2 ด้าน</span></p>

                                                </div>
                                            </div>
                                        </td>
                                        <td>$119.99</td>
                                        <td>ผ่านทางธนาคาร</td>
                                        <td>
                                            <span>1/81 หมู่บ้านพาทาโกเนีย ....</span>
                                        </td>
                                        <td class="fw-medium text-end">
                                            11:30 Pm
                                        </td>
                                        <td class="fw-medium text-end">
                                            089-555-5555
                                        </td>
                                        <td class="fw-medium text-end">
                                            500 บาท
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-md bg-light rounded p-1">
                                                    <img src="{{url('')}}/public/img/shimp/shimp1.jpg" alt="" class="img-fluid d-block">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h5 class="fs-14"><a href="apps-ecommerce-product-details.html" class="text-body">ปลากะพง</a></h5>
                                                    <p class="text-muted mb-0">จำนวน: <span class="fw-medium">2 ตัว</span></p>
                                                    <p class="text-muted mb-0">การจัดเตรียม: <span class="fw-medium">แร่เนื้อ 2 ด้าน</span></p>

                                                </div>
                                            </div>
                                        </td>
                                        <td>$119.99</td>
                                        <td>ผ่านทางธนาคาร</td>
                                        <td>
                                            <span>1/81 หมู่บ้านพาทาโกเนีย ....</span>
                                        </td>
                                        <td class="fw-medium text-end">
                                            11:30 Pm
                                        </td>
                                        <td class="fw-medium text-end">
                                            089-555-5555
                                        </td>
                                        <td class="fw-medium text-end">
                                            500 บาท
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-success btn-label waves-effect right waves-light rounded-pill float-end"><i class="ri-check-double-line label-icon align-middle rounded-pill fs-16 ms-2"></i> Success</button>
                        </div>
                    </div>
                </div>
                <!--end card-->

                <!--end card-->

            </div>

        </div>

    </div>


</section>



@endsection

@section('script')

@endsection

