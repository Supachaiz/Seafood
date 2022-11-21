@extends('layouts.menu')
@section('style')
<meta name="csrf-token" content="{{ csrf_token() }}" />

@endsection

@section('modal')

@endsection



@section('content')


<section class="section pb-0 hero-section" id="hero"  data-aos="zoom-out">

    <div class="container">


        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h3 class="mb-3 fw-bold">สินค้า <span class="text-danger">และบริการของเรา</span></h3>
                    <p class="text-muted mb-4">สินค้าและบริการของเราทางเรามีสินค้าและบริการหลายชนิด โดยสินค้าจะประกอบไปด้วย ปลาทะเล ปลาน้ำจืด กุ้งเกษตรหรือกุ้งขาว กุ้งทะเลชนิดต่างๆ หอย ปูม้าทะเล ปลาหมึก แมงกระพรุน</p>
                </div>
            </div>

        </div>
        <!-- end row -->
        <div class="row">
            @foreach ( $product as $pd )
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body text-center p-4 list-ship">
                        <div class="avatar-xl mx-auto mb-4 position-relative">
                            <img src="{{url('')}}/public/img/{{$pd->product_img}}" alt="" class="img-fluid ">

                        </div>
                        <!-- end card body -->
                        <h5 class="mb-1"><a href="pages-profile.html" class="text-body">{{$pd->product_name}}</a></h5>
                        <p class="text-muted mb-0">{{$pd->product_detail}}</p>
                        <span class="">ราคา {{$pd->product_price}} บาท</span>
                        <div class="input-step mt-2">
                            <button type="button" class="minus">–</button>
                            <input type="number" class="product-quantity" value="0" min="0" max="100" readonly id="p{{$pd->product_id}}" price="{{$pd->product_price}}">
                            <button type="button" class="plus">+</button>
                        </div>
                        <div class="row mt-3">
                            <button type="button" onclick="send_cart('p{{$pd->product_id}}','{{$pd->product_id}}')" class="btn btn-outline-primary w-100">เพิ่มในรถเข็น</button>
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>

            @endforeach
            <!-- end col -->
        </div>
            <!-- end col -->

        <!-- end row -->
        {{-- <div class="row">
            <div class="col-lg-12">
                <div class="text-center mt-2">
                    <a href="pages-team.html" class="btn btn-primary">ดูเพิ่มเติม <i class="ri-arrow-right-line ms-1 align-bottom"></i></a>
                </div>
            </div>
        </div> --}}
    </div>

</section>



@endsection

@section('script')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    var emlty_ship = `
        <div class="text-center empty-cart" id="empty-cart">
            <div class="avatar-md mx-auto my-3">
                <div class="avatar-title bg-soft-info text-info fs-36 rounded-circle">
                    <i class='bx bx-cart'></i>
                </div>
            </div>
            <h5 class="mb-3">Your Cart is Empty!</h5>
            <a href="apps-ecommerce-products.html" class="btn btn-success w-md mb-3">Shop Now</a>
        </div>
    `
    // 'list_ship'
    function send_cart(id_product,data_id){
        var product_count = $("#"+id_product).val()
        var ship = $("#count_ship").text()
        if($("#"+id_product).hasClass('buy')===false && product_count!=0){
            $("#count_ship").text(parseInt(ship)+1)
            $("#"+id_product).addClass('buy')
        }else if($("#"+id_product).hasClass('buy') && product_count==0){
            $("#count_ship").text(parseInt(ship)-1)
            $("#"+id_product).removeClass('buy')
        }
        send_data(data_id,"{{@Auth::user()->id}}",product_count);

        all_list()
        // alert(product_count)
    }

    function all_list(){
        var count_buy = 0;
        var total = 0;
        var list_show = '';
        var count_ship =  $(".product-quantity").length
        for(i=0;i<count_ship;i++){
            if($($(".product-quantity")[i]).hasClass('buy')){
                count_buy ++;
                var img = $($(".list-ship img")[i]).attr('src');
                var product_name = $($(".list-ship .text-body")[i]).text();
                var product_detail = $($(".list-ship .text-muted")[i]).text();
                var product_amount = $($(".list-ship .product-quantity")[i]).val();
                var product_price = $($(".list-ship .product-quantity")[i]).attr('price');
                var product_id = $($(".list-ship .product-quantity")[i]).attr('id');
                total = total+(parseInt(product_amount)*parseInt(product_price))
                list_show += `
                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2" id="top_ship${product_id}">
                    <div class="d-flex align-items-center">
                        <img src="${img}" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                        <div class="flex-1">
                            <h6 class="mt-0 mb-1 fs-14">
                                <a href="apps-ecommerce-product-details.html" class="text-reset">${product_name}</a>
                            </h6>
                            <p class="mb-0 fs-12 text-muted">
                                ${product_detail}:
                            </p>
                            <p class="mb-0 fs-12 text-muted">
                               <span> จำนวนสินค้า </span> ${product_amount} ชิ้น:
                            </p>
                        </div>
                        <div class="px-2">
                            <h5 class="m-0 fw-normal">$<span class="cart-item-price">${product_price} บาท</span></h5>
                        </div>
                        <div class="ps-2">
                            <button onclick="remove_ship('${product_id}')" type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                        </div>
                    </div>
                </div>
                `
            }


        }
        $("#list_ship").html(null);
        var s = new Intl.NumberFormat('en-IN', { maximumSignificantDigits: 3 }).format(total)
        $("#cart-item-total").text('฿ '+s)
        if(count_buy==0){
            $("#list_ship").append(emlty_ship)
        }else{
            $("#list_ship").append(list_show)
        }
    }


    function remove_ship(ship_id){
        $("#"+ship_id).val(0);
        $("#"+ship_id).removeClass('buy')
        all_list()
    }


    function send_data(data_id,user_id,amount){
        $.post("{{url('product')}}",
        {
            data_id : data_id,
            user_id : user_id,
            amount  : amount,
        },
        function(data, status)
        {
            if(data='success'){alert('OK')}
        });
    }
</script>
@endsection

