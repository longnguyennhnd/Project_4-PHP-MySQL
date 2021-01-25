@extends('layout.layout_shopping-cart')
@section('content')


<div class="my-account-section section pt-90 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-45  pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="row">
                    <!-- My Account Tab Menu Start -->
                    <div class="col-lg-3 col-12">
                        <div class="myaccount-tab-menu nav" role="tablist">
                            <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                Tài khoản của tôi</a>
                            <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Hoá đơn</a>

                            {{-- <a href="#download" data-toggle="tab"><i class="fa fa-cloud-download"></i> Download</a>

                            <a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i> Payment
                                Method</a> --}}

                            {{-- <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i> address</a> --}}

                            <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Chi tiết tài khoản</a>

                            <a href="/logoutclient"><i class="fa fa-sign-out"></i> Đăng xuất</a>
                        </div>
                    </div>
                    <!-- My Account Tab Menu End -->

                    <!-- My Account Tab Content Start -->
                    <div class="col-lg-9 col-12">
                        <div class="tab-content" id="myaccountContent">
                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Dashboard</h3>
                                    <div class="welcome mb-20">
                                        <p>Xin chào, <strong><?php
                                            $name = Session::get('name');
                                            if($name){
                                                echo $name;
                                            }
                                            ?></strong></p>
                                    </div>
                                    <p class="mb-0">Từ trang quản lý tài khoản. Bạn có thể dễ dàng kiểm tra &amp;  xem địa chỉ giao hàng của mình và sửa đổi mật khuẩ và chi tiết tài khoản.</p>
                                </div>
                            </div>
                            <!-- Single Tab Content End -->

                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade" id="orders" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Hoá đơn của bạn</h3>
                                    <div class="myaccount-table table-responsive text-center">
                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Tên</th>
                                                    <th>Ngày đặt</th>
                                                    <th>Trạng thái</th>
                                                    <th>Tổng tiền</th>
                                                    <th colspan="2">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach($list_order as $hd=>$item)
                                                <tr>
                                                    <td>{{$hd+1}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->created_at}}</td>
                                                    <td>{{$item->status}}</td>
                                                    <td>{{$item->total_money}}</td>
                                                    <td><a href="cart.html" class="btn">Xem</a></td>
                                                    @if($item->status == "Đã thanh toán" || $item->status == "Đã huỷ")
                                                    <td><a href="cart.html" style="background: grey; pointer-events: none;" class="btn">Huỷ</a></td>
                                                    @else
                                                    <td><a href="" id="cancelbtn" data-id="{{$item->Id}}" style="background: crimson" class="btn">Huỷ</a></td>
                                                    @endif
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade" id="account-info" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Chi tiết tài khoản</h3>

                                    <div class="account-details-form">
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-6 col-12 mb-30">
                                                    <input name="name" id="name" placeholder="Tên" value="<?php
                                                    $name = Session::get('name');
                                                    if($name){
                                                        echo $name;
                                                    }
                                                    ?>" type="text">
                                                </div>
                                                <div class="col-lg-6 col-12 mb-30">
                                                    <input name="address" id="address" placeholder="Địa chỉ" value="<?php
                                                    $address = Session::get('address');
                                                    if($address){
                                                        echo $address;
                                                    }
                                                    ?>" type="text">
                                                </div>

                                                <div class="col-lg-6 col-12 mb-30">
                                                    <input name="phone_number" id="phone_number" placeholder="Số điện thoại" value="<?php
                                                    $phone_number = Session::get('phone_number');
                                                    if($phone_number){
                                                        echo $phone_number;
                                                    }
                                                    ?>" type="text">
                                                </div>

                                                <div class="col-12 mb-30">
                                                    <input name="Email" id="email" placeholder="Email" value="<?php
                                                    $email = Session::get('Email');
                                                    if($email){
                                                        echo $email;
                                                    }
                                                    ?>" type="email">
                                                </div>

                                                <div class="col-12 mb-30">
                                                    <h4>Thay đổi mật khẩu</h4>
                                                </div>

                                                <div class="col-12 mb-30">
                                                    <input id="current_pwd" placeholder="Mật khẩu hiện tại" type="password">
                                                </div>

                                                <div class="col-lg-6 col-12 mb-30">
                                                    <input id="new_pwd" placeholder="Mật khẩu mới" type="password">
                                                </div>

                                                <div class="col-lg-6 col-12 mb-30">
                                                    <input id="confirm_pwd" placeholder="Xác nhận lại mật khẩu" type="password">
                                                </div>
                                                
                                                <div class="col-12">
                                                    <button data-id="<?php
                                                    $id = Session::get('Id');
                                                    if($id){
                                                        echo $id;
                                                    }
                                                    ?>" class="save-change-btn">Lưu thay đổi</button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Tab Content End -->
                        </div>
                    </div>
                    <!-- My Account Tab Content End -->
                </div>

            </div>

        </div>
    </div>
</div>
<div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title2" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">Xác nhận</h2>
            </div>
            <div class="modal-body">
                <h5 align="center"  style="margin:0; font-weight: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">Bạn có chắc muốn huỷ đơn hàng này?</h5>
            </div>
            <div class="modal-footer">
                <button type="button" id="ok_button" name="ok_button" class="swal2-confirm btn btn-danger" aria-label="">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')

<script>
    $(document).ready(function () {
        var id;
        $('#cancelbtn').off('click').on('click', function (e) {
            e.preventDefault();
             id = $(this).data('id');
            $('#confirmModal').modal('show');
            });
            $('#ok_button').click(function () {
            $.ajax({
                url: 'cancelOrder/' +id,
                beforeSend: function () {
                    $('#ok_button').text('Đang huỷ...');
                },
                success: function (data) {
                    setTimeout(function () {
                        $('#confirmModal').modal('hide');
                    }, 700);
                    $.notify({
                        title: ' Thông báo',
                        message: 'Huỷ đơn hàng thành công',
                        url: ''
                    }, {
                        delay: 3000,
                        template: '<div data-notify="container" style="background-color: #32c787;;height: 40px;" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
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
            })
        });
        
        $('.save-change-btn').off('click').on('click', function (e) {
            e.preventDefault();
            id = $(this).data('id');
            var name = $('#name').val();
            var address = $('#address').val();
            var phone_number = $('#phone_number').val();
            var Email = $('#email').val();
            var current_pwd = $('#current_pwd').val();
            var new_pwd = $('#new_pwd').val();
            var confirm_pwd = $('#confirm_pwd').val();
            $.ajax({
                    url: 'Account/update/' + id,
                    method: "POST",
                    data: {
                        name: name,
                        address: address,
                        phone_number: phone_number,
                        Email: Email,
                        current_pwd: current_pwd,
                        new_pwd: new_pwd,
                        confirm_pwd: confirm_pwd
                    },
                    enctype: 'multipart/formdata',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: "json",
                    success: function (data) {
                        console.log(data);
                        var html = '';
                        if (data.errorpass) {
                            $.notify({
                                title: ' Thông báo',
                                message: 'Mật khẩu hiện tại bạn nhập chưa đúng',
                                url: ''
                            }, {
                                delay: 3000,
                                template: '<div data-notify="container" style="z-index: 9999;position: absolute; background-color: #ff6b68;" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
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

                        if (data.errornewpass) {
                            $.notify({
                                title: ' Thông báo',
                                message: 'Xác nhận lại mật khẩu chưa đúng',
                                url: ''
                            }, {
                                delay: 3000,
                                template: '<div data-notify="container" style="background-color: #ff6b68;;height: 40px;" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
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

                        if (data.success) {
                            $.notify({
                                title: ' Thông báo',
                                message: 'Sửa tài khoản thành công',
                                url: ''
                            }, {
                                delay: 3000,
                                template: '<div data-notify="container" style="background-color: #32c787;;height: 40px;" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
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
                });
        });
    });
</script>
@endsection