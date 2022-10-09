@extends('layouts.menu')
@section('style')

@endsection

@section('modal')

@endsection



@section('content')


<section class="section pb-0 hero-section" id="hero" data-aos="fade-down">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" id="orderList">
                    <div class="card-header  border-0">
                        <div class="d-flex align-items-center">
                            <h5 class="card-title mb-0 flex-grow-1">Order History</h5>
                            {{-- <div class="flex-shrink-0">
                                <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Create
                                    Order</button>
                                <button type="button" class="btn btn-info"><i class="ri-file-download-line align-bottom me-1"></i> Import</button>
                                <button class="btn btn-soft-danger" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                            </div> --}}
                        </div>
                    </div>
                    <div class="card-body border border-dashed border-end-0 border-start-0">
                        <form>
                            <div class="row g-3">
                                <div class="col-xxl-5 col-sm-6">
                                    <div class="search-box">
                                        <input type="text" class="form-control search" placeholder="Search for order ID, customer, order status or something...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-xxl-2 col-sm-6">
                                    <div>
                                        <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true" id="demo-datepicker" placeholder="Select date">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-xxl-2 col-sm-4">
                                    <div>
                                        <select class="form-control" data-choices data-choices-search-false name="choices-single-default" id="idStatus">
                                            <option value="">Status</option>
                                            <option value="all" selected>All</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Inprogress">Inprogress</option>
                                            <option value="Cancelled">Cancelled</option>
                                            <option value="Pickups">Pickups</option>
                                            <option value="Returns">Returns</option>
                                            <option value="Delivered">Delivered</option>
                                        </select>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-xxl-2 col-sm-4">
                                    <div>
                                        <select class="form-control" data-choices data-choices-search-false name="choices-single-default" id="idPayment">
                                            <option value="">Select Payment</option>
                                            <option value="all" selected>All</option>
                                            <option value="Mastercard">Mastercard</option>
                                            <option value="Paypal">Paypal</option>
                                            <option value="Visa">Visa</option>
                                            <option value="COD">COD</option>
                                        </select>
                                    </div>
                                </div>
                                <!--end col-->

                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>
                    </div>
                    <div class="card-body pt-0">
                        <div>
                            <ul class="nav nav-tabs nav-tabs-custom nav-success mb-3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active All py-3" data-bs-toggle="tab" id="All" href="#home1" role="tab" aria-selected="true">
                                        <i class="ri-store-2-fill me-1 align-bottom"></i> All Orders
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link py-3 Delivered" data-bs-toggle="tab" id="Delivered" href="#delivered" role="tab" aria-selected="false">
                                        <i class="ri-checkbox-circle-line me-1 align-bottom"></i> Delivered
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link py-3 Pickups" data-bs-toggle="tab" id="Pickups" href="#pickups" role="tab" aria-selected="false">
                                        <i class="ri-truck-line me-1 align-bottom"></i> Pickups <span class="badge bg-danger align-middle ms-1">2</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link py-3 Returns" data-bs-toggle="tab" id="Returns" href="#returns" role="tab" aria-selected="false">
                                        <i class="ri-arrow-left-right-fill me-1 align-bottom"></i> Returns
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link py-3 Cancelled" data-bs-toggle="tab" id="Cancelled" href="#cancelled" role="tab" aria-selected="false">
                                        <i class="ri-close-circle-line me-1 align-bottom"></i> Cancelled
                                    </a>
                                </li>
                            </ul>

                            <div class="table-responsive table-card mb-1">
                                <table class="table table-nowrap align-middle" id="orderTable">
                                    <thead class="text-muted table-light">
                                        <tr class="text-uppercase">
                                            <th scope="col" style="width: 25px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                </div>
                                            </th>
                                            <th class="sort" data-sort="id">Order ID</th>
                                            <th class="sort" data-sort="customer_name">ชื่อลูกค้า</th>
                                            <th class="sort" data-sort="date">เวลาในการจัดส่ง</th>
                                            <th class="sort" data-sort="amount">ยอดรวมทั้งหมด</th>
                                            <th class="sort" data-sort="payment">วิธีการชำระเงิน</th>
                                            <th class="sort" data-sort="payment">สถานะการชำระเงิน</th>
                                            <th class="sort" data-sort="status">สถานะการจัดส่ง</th>
                                            <th class="sort" data-sort="city">แอคชั่น</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                </div>
                                            </th>
                                            <td class="id"><a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2101</a></td>
                                            <td class="customer_name">Frank Hook</td>
                                            <td class="date">20 Dec, 2021, <small class="text-muted">02:21
                                                    AM</small></td>
                                            <td class="amount">$654</td>
                                            <td class="payment">ชำระเงินปลายทาง</td>
                                            <td class="status"><span class="badge badge-soft-danger text-uppercase">รอการชำระเงิน</span>
                                            <td class="status"><span class="badge badge-soft-success text-uppercase">จัดส่งแล้ว</span>
                                            </td>
                                            <td>
                                                <a href="{{url('manage')}}" type="button" class="btn btn-danger btn-icon waves-effect waves-light w-50"><i class=" ri-edit-box-fill"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                </div>
                                            </th>
                                            <td class="id"><a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2101</a></td>
                                            <td class="customer_name">Frank Hook</td>
                                            <td class="date">20 Dec, 2021, <small class="text-muted">02:21
                                                    AM</small></td>
                                            <td class="amount">$654</td>
                                            <td class="payment">แบบโอนเงิน</td>
                                            <td class="status"><span class="badge badge-soft-danger text-uppercase">รอการชำระเงิน</span>
                                            <td class="status"><span class="badge badge-soft-warning text-uppercase">กำลังจัดเตรียม</span>
                                            </td>
                                            <td>
                                                <a href="{{url('manage')}}" type="button" class="btn btn-danger btn-icon waves-effect waves-light w-50"><i class=" ri-edit-box-fill"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="noresult" style="display: none">
                                    <div class="text-center">
                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:75px;height:75px">
                                        </lord-icon>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted">We've searched more than 150+ Orders We did
                                            not find any
                                            orders for you search.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="pagination-wrap hstack gap-2">
                                    <a class="page-item pagination-prev disabled" href="#">
                                        Previous
                                    </a>
                                    <ul class="pagination listjs-pagination mb-0"></ul>
                                    <a class="page-item pagination-next" href="#">
                                        Next
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!--end modal -->
                    </div>
                </div>

            </div>
            <!--end col-->
        </div>

    </div>


</section>



@endsection

@section('script')

@endsection

