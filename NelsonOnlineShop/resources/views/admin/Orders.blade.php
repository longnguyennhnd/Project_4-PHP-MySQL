@extends('admin_layout')
@section('admin_content')


<style>
    .table .table {
    background: none !important;
}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<meta name="csrf-token" content="{{ csrf_token() }}">
<header class="content__title">
    <h1>QUẢN LÝ LOẠI SẢN PHẨM</h1>
    <div class="actions">
        <a href="" class="actions__item zmdi zmdi-trending-up"></a>
        <a href="" class="actions__item zmdi zmdi-check-all"></a>

        <div class="dropdown actions__item">
            <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="" class="dropdown-item">Refresh</a>
                <a href="" class="dropdown-item">Manage Widgets</a>
                <a href="" class="dropdown-item">Settings</a>
            </div>
        </div>
    </div>
</header>

<div class="card" style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
    <div class="card-body">
        <div class="table-responsive">
            <table id="data-table" class="table table-bordered">
                <thead class="thead-default">
                    <tr>
                        <th style="text-align: center" >STT</th>
                        <th style="text-align: center" >Tên khách hàng</th>
                        <th style="text-align: center" >Địa chỉ</th>
                        <th style="text-align: center" >Tổng tiền</th>
                        <th style="text-align: center" >Trạng thái</th>
                        <th style="text-align: center" >Ngày đặt</th>
                        <th style="text-align: center" ></th>
                        <th style="text-align: center" ></th>
                    </tr>
                </thead>

                <tbody id="vs-list" name='vs-list'>
                    @foreach ($order as $hd=>$item)
                    <tr id="row_{{$item->Id}}">
                        <td style="text-align: center">{{$hd+1}}</td>
                        <td style="text-align: center" >{{$item->name}}</td>
                        <td style="text-align: center" >{{$item->shipping_address}}</td>
                        <td style="text-align: center">{{number_format($item->total_money)}}đ</td>
                        <td>
                            <div class="form-group">
                                @if($item->status == "Đã thanh toán" || $item->status == "Đã huỷ")
                                {{-- <label for="">Trạng thái</label> --}}
                                <select class="form-control slStatus" name="status" data-id="{{$item->Id}}">
                                  <option value="{{$item->status}}">{{$item->status}}</option>
                                  <option disabled value="Chưa xác thực">Chưa xác thực</option>
                                  <option disabled value="Chưa giao">Chưa giao</option>
                                  <option disabled value="Chưa thanh toán">Chưa thanh toán</option>
                                  <option disabled value="Đã thanh toán">Đã thanh toán</option>
                                  <option disabled value="Đã huỷ">Đã huỷ</option>
                                </select>
                                @else
                                <select class="form-control slStatus" name="status" data-id="{{$item->Id}}">
                                  <option value="{{$item->status}}">{{$item->status}}</option>
                                  <option value="Chưa xác thực">Chưa xác thực</option>
                                  <option value="Chưa giao">Chưa giao</option>
                                  <option value="Chưa thanh toán">Chưa thanh toán</option>
                                  <option value="Đã thanh toán">Đã thanh toán</option>
                                  <option value="Đã huỷ">Đã huỷ</option>
                                </select>
                                @endif
                            </div>
                        </td>
                        <td style="text-align: center">{{date('d-m-Y', strtotime($item->created_at))}}</td>

                        <td style="text-align: center" ><a href="/ViewDetail/{{$item->Id}}" class="view" name="view" id="{{ $item->Id }}"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a></td>
                        
                        <td style="text-align: center" ><a href="/PDF/{{$item->Id}}">PDF</a></td>
                        {{-- <input type="hidden" value="{{$item->Id}}" id="idorder"> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

<script src="{{asset('backend/vendors/jquery/jquery.min.js')}}"></script>

<script>
    var token = '{{ csrf_token() }}';
    $(document).ready(function(){
        $('.slStatus').off('change').on('change',function(e){
            var id = $(this).data('id');
            let status=e.target.value;
            $.ajax({
                url: '/Order/Changestatus/' +id,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{
                    status:status, 
                },
                dataType:"json",
                success:function(data){
                    console.log('aaa');
                    if(data.success){
                        $.notify({
                            title: ' Thông báo',
                            message: 'Thay đổi trang thái thành công',
                            url: ''
                        },{
                        delay: 3000,
                        template:   '<div data-notify="container" style="background-color: #32c787;" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
                                    '<span data-notify="icon"></span> ' +
                                    '<span data-notify="title">{1}</span> ' +
                                    '<span data-notify="message">{2}</span>' +
                                    '<div class="progress" data-notify="progressbar">' +
                                        '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                                    '</div>' +
                                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
                                    '<button type="button" aria-hidden="true" data-notify="dismiss" class="alert--notify__close">Close</button>' +
                                '</div>'
                        });
                        $("#data-table").load(window.location + " #data-table");
                    }
                    if(data.errors){
                        $.notify({
                            title: ' Thông báo',
                            message: 'Thay đổi trang thái thất bại',
                            url: ''
                        },{
                        delay: 3000,
                        template:   '<div data-notify="container" style="background-color: #ff6b68;" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
                                    '<span data-notify="icon"></span> ' +
                                    '<span data-notify="title">{1}</span> ' +
                                    '<span data-notify="message">{2}</span>' +
                                    '<div class="progress" data-notify="progressbar">' +
                                        '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                                    '</div>' +
                                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
                                    '<button type="button" aria-hidden="true" data-notify="dismiss" class="alert--notify__close">Close</button>' +
                                '</div>'
                        });
                    }
                } 
            })
        });
    });

</script>
