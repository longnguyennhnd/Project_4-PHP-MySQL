<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nelson - Nội thất hàng đầu Việt Nam</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Place favicon.ico in the root directory -->
    <link href="{{asset('frontend/images/favicon.ico')}}" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="{{asset('frontend/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/vendor/iconfont.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/vendor/helper.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/plugins/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/sweetalert2/sweetalert2.min.css')}}">
    <link rel="stylesheet"
        href="{{asset('backend/vendors/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/jquery-scrollbar/jquery.scrollbar.css')}}">
    <!-- Modernizr JS -->
    <script src="{{asset('frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>

</head>

<body>
    <div id="main-wrapper">
    @include('layout.header')
    <!--Checkout section start-->
    
    <div
        class="checkout-section section pt-90 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-40  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Checkout Form Start-->
                    <form action="{{URL::to('/Checkout')}}" method="POST" class="checkout-form">
                        @csrf
                        <div class="row row-40">

                            <div class="col-lg-7">

                                <!-- Billing Address -->
                                <div id="billing-form" class="mb-10">
                                    <h4 class="checkout-title">Địa chỉ thanh toán</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Họ Tên*</label>
                                            <input type="text" name="name" required value="<?php
                                            $name = Session::get('name');
                                            if($name){
                                                echo $name;
                                            }
                                            ?>" placeholder="Họ Tên">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Email*</label>
                                            <input type="email" name="Email" id="Email" required value="<?php
                                            $Email = Session::get('Email');
                                            if($Email){
                                                echo $Email;
                                            }
                                            ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Vui lòng nhập đúng định dạng Email" placeholder="Email ">
                                            <a class="btn btn-primary" style="color: #fff; text-transform: none;" style="cursor: pointer" type="button" onclick="SendMail()">Gửi Mail</a>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Số Điện Thoại*</label>
                                            <input required type="text" name="phone_number" value="<?php
                                            $phone_number = Session::get('phone_number');
                                            if($phone_number){
                                                echo $phone_number;
                                            }
                                            ?>" placeholder="Số điện thoại">
                                        </div>
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Xác thực Gmail*</label>
                                            <input required type="text" name="code" placeholder="Code" title="Bạn phải nhập mã xác thực">
                                            <p style="color: red;"><?php
                                                $phone_number = Session::get('xacthuc');
                                                if($phone_number){
                                                    echo $phone_number;
                                                }
                                                ?></p>

                                        </div>

                                        <div class="col-12 mb-20">
                                            <label>Địa chỉ*</label>
                                            <input required type="text" name="address" value="<?php
                                            $address = Session::get('address');
                                            if($address){
                                                echo $address;
                                            }
                                            ?>" placeholder="Địa chỉ">
                                            
                                            {{-- <input type="text" placeholder="Address line 2"> --}}
                                        </div>

                                        <div class="col-12 mb-20">
                                            <div class="check-box">
                                                <input type="checkbox" id="create_account">
                                                <label for="create_account">Tạo tài khoản?</label>
                                            </div>
                                            <div class="check-box">
                                                <input type="checkbox" id="shiping_address" data-shipping>
                                                <label for="shiping_address">Chuyển hàng đến địa chỉ khác</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Shipping Address -->
                                <div id="shipping-form">
                                    <h4 class="checkout-title">Địa chỉ giao hàng</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Họ Tên*</label>
                                            <input type="text" name="name1" value="" placeholder="Họ Tên">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Email*</label>
                                            <input type="email" name="Email1" value="" placeholder="Email ">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Số Điện Thoại*</label>
                                            <input type="text" name="phone_number1" value="" placeholder="Phone number">
                                        </div>

                                        <div class="col-12 mb-20">
                                            <label>Địa chỉ*</label>
                                            <input type="text" name="address1" value="" placeholder="Địa chỉs">
                                            {{-- <input type="text" placeholder="Address line 2"> --}}
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-5">
                                <div class="row">
                                    
                                    <!-- Cart Total -->
                                    <div class="col-12 mb-60">
                                        @if(Session::has("Cart") != null)
                                        
                                        <h4 class="checkout-title">Giỏ hàng của bạn</h4>

                                        <div class="checkout-cart-total">
                                            <h4>Sản phẩm <span>Tổng tiền</span></h4>
                                            <ul>
                                                @foreach(Session::get('Cart')->products as $item)
                                                <li>{{($item['productInfo']->ProductName)}} X {{$item['quanty']}} <span>{{number_format($item['price'])}}đ</span></li>
                                                @endforeach
                                            </ul>
                                            <p>Sub Total <span>{{number_format(Session::get('Cart')->totalPrice)}}đ</span></p>
                                            <p>Giao hàng miễn phí <span>$00.00</span></p>

                                            <h4>Tổng tiền <span>{{number_format(Session::get('Cart')->totalPrice)}}đ</span></h4>

                                        </div>
                                        
                                        @endif
                                    </div>

                                    <!-- Payment Method -->
                                    <div class="col-12 mb-30">

                                        <h4 class="checkout-title">Phương thức thanh toán</h4>

                                        <div class="checkout-payment-method">

                                            {{-- <div class="single-method">
                                                <input type="radio" id="payment_check" name="payment-method"
                                                    value="check">
                                                <label for="payment_check">Check Payment</label>
                                                <p data-method="check">Please send a Check to Store name with Store
                                                    Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                            </div> --}}

                                            <div class="single-method">
                                                <input type="radio" id="payment_bank" name="payment-method"
                                                    value="bank">
                                                <label for="payment_bank">Chuyển tiền qua ngân hàng</label>
                                                {{-- <p data-method="bank">Please send a Check to Store name with Store
                                                    Street, Store Town, Store State, Store Postcode, Store Country.</p> --}}
                                            </div>

                                            <div class="single-method">
                                                <input type="radio" id="payment_cash" name="payment-method"
                                                    value="cash">
                                                <label for="payment_cash">Thanh toán trực tiếp</label>
                                                <p data-method="cash">Please send a Check to Store name with Store
                                                    Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                            </div>

                                            <div class="single-method">
                                                <input type="radio" id="payment_paypal" name="payment-method"
                                                    value="paypal">
                                                <label for="payment_paypal">Ví Momo</label>
                                                {{-- <p data-method="paypal">Please send a Check to Store name with Store
                                                    Street, Store Town, Store State, Store Postcode, Store Country.</p> --}}
                                            </div>
                                            <div class="single-method">
                                                <input type="checkbox" id="accept_terms">
                                                <label for="accept_terms">Tôi đã đọc và đồng ý với điều khoản dịch vụ</label>
                                            </div>
                                        </div>

                                        <button class="place-order btn btn-lg btn-round">Thanh Toán</button>
                                        
                                    </div>

                                </div>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    @include('layout.footer')
    </div>
    <!--Checkout section end-->


    <script src="{{asset('frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script
        src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
    <script src="{{asset('frontend/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/plugins/plugins.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
    <script src="{{asset('backend/vendors/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('backend/vendors/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="vendors/jquery/jquery.min.js"></script>
    <script src="{{asset('backend/vendors/popper.js/popper.min.js')}}"></script>
    <script src="{{asset('backend/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
    {{-- <script src="{{asset('backend/vendors/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('backend/vendors/jquery-scrollLock/jquery-scrollLock.min.js')}}"></script> --}}
    <script src="{{asset('backend/vendors/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
    <!-- App functions and actions -->
    <script src="{{asset('backend/js/app.min.js')}}"></script>

    <!-- Demo only -->
    <script src="{{asset('backend/demo/js/demo.js')}}"></script>

    <script>
        function SendMail(){
            const email=$("#Email").val();
            $.ajax({
                url: '/send-mail',
                method: 'POST',
                data:{
                    Email:email
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success:function(data){
                    if(data.success){
                        $.notify({
                            title: 'Thông báo: ',
                            message: 'Đã gửi 1 mail tới gmail của bạn',
                            url: ''
                        },{
                        delay: 3000,
                        template:   '<div data-notify="container" style="background-color: #32c787;;height: 40px;" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
                                    '<span  data-notify="icon"></span> ' +
                                    '<span style="font-size: 13px; position: relative; top: -8px;" data-notify="title">{1}</span> ' +
                                    '<span style="font-size: 13px;position: relative; top: -8px;" data-notify="message">{2}</span>' +
                                    '<div class="progress" data-notify="progressbar">' +
                                        '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                                    '</div>' +
                                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
                                    // '<button type="button" aria-hidden="true" data-notify="dismiss" class="alert--notify__close">Close</button>' +
                                '</div>'
                        });
                    }
                    if(data.errors){
                        $.notify({
                            title: 'Thông báo: ',
                            message: 'Bạn phải nhập Email',
                            url: ''
                        },{
                        delay: 3000,
                        template:   '<div data-notify="container" style="background-color: #ff6b68;height: 40px;" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
                                    '<span  data-notify="icon"></span> ' +
                                    '<span style="font-size: 13px; position: relative; top: -8px;" data-notify="title">{1}</span> ' +
                                    '<span style="font-size: 13px;position: relative; top: -8px;" data-notify="message">{2}</span>' +
                                    '<div class="progress" data-notify="progressbar">' +
                                        '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                                    '</div>' +
                                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
                                    // '<button type="button" aria-hidden="true" data-notify="dismiss" class="alert--notify__close">Close</button>' +
                                '</div>'
                        });
                    }
                } 
            })

        }
        
    </script>