@extends('admin_layout')
@section('admin_content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<header class="content__title">
    <h1>CHI TIẾT HOÁ ĐƠN</h1>
    <div class="actions">
        <a href="" class="actions__item zmdi zmdi-trending-up"></a>
        <a href="" class="actions__item zmdi zmdi-check-all"></a>

        <div class="dropdown actions__item">
            <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="" class="dropdown-item">Làm mới</a>
                <a href="" class="dropdown-item">Cài đặt/a>
            </div>
        </div>
    </div>
</header>


<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table mb-3">
                <thead class="thead-light">
                    <tr>
                        <th>Thông tin hoá đơn</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $od)
                    <tr>
                        <td>Tên khách hàng</td>
                        <td>{{$od->name}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{$od->Email}}</td>
                    </tr>
                    <tr>
                        <td>Số điện thoại</td>
                        <td>{{$od->phone_number}}</td>
                    </tr>
                    <tr>
                        <td>Địa chỉ giao hàng</td>
                        <td>{{$od->shipping_address}}</td>
                    </tr>
                    <tr>
                        <td>Ngày đặt</td>
                        <td>{{$od->created_at}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <table class="table table-bordered">
                <thead class="thead-default">
                    <tr>
                        <th style="text-align: center;">STT</th>
                        <th style="text-align: center;">Tên sản phẩm</th>
                        <th style="text-align: center;">Hình ảnh</th>
                        <th style="text-align: center;">Số lượng</th>
                        <th style="text-align: center;">Đơn giá</th>
                        <th style="text-align: center;">Tổng tiền</th>
                        {{-- <th></th> --}}
                    </tr>
                </thead>

                <tbody id="vs-list" name='vs-list'>
                    @foreach ($orders_detail as $hd=>$item)
                    <tr>
                        <td style="text-align: center;"> {{$hd +1}}</td>
                        <td style="text-align: center;">{{$item->products->ProductName}}</td>
                        <td><img src="{{url('/')}}/nelsononlineshop/{{$item->products->Image}}"
                                width="90px;" alt=""></td>
                        <td style="text-align: center;">{{$item->quantity}}</td>
                        <td style="text-align: center;">{{number_format($item->price)}}đ</td>
                        <td style="text-align: center;">{{number_format($item->total_money)}}đ</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <table class="table mb-3">
                <tbody>
                    @foreach($orders as $od)
                    <tr>
                        <td style="font-weight: bold;">Tổng tiền</td>
                        <td style="float: right; margin-right: 20px; font-weight:bold; color: red">{{number_format($od->total_money)}}đ</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


{{-- Modal Confirm --}}
{{-- <div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title2"
                    style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
                    Xác nhận</h2>
            </div>
            <div class="modal-body">
                <h5 align="center"
                    style="margin:0; font-weight: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
                    Bạn có chắc muốn xoá dữ liệu này??</h5>
            </div>
            <div class="modal-footer">
                <button type="button" id="ok_button" name="ok_button" class="swal2-confirm btn btn-danger"
                    aria-label="">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div> --}}
{{-- End Modal confirm --}}
@endsection

<script src="{{asset('backend/vendors/jquery/jquery.min.js')}}"></script>