@extends('layout.layout_shopping-cart')
@section('content')

<div class="wishlist-section section pt-90 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-45  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <!-- Cart Table -->
                <div class="cart-table table-responsive mb-30">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="pro-thumbnail">Hình ảnh</th>
                                <th class="pro-title">Sản phẩm</th>
                                <th class="pro-price">Giá</th>
                                <th class="pro-addtocart">Thêm giỏ hàng</th>
                                <th class="pro-remove">Xoá</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td class="pro-thumbnail"><a href="#"><img src="{{url('/')}}/nelsononlineshop/{{$item->products->Image}}" alt="Product"></a></td>
                                <td class="pro-title"><a href="/chitiet-sanpham/{{$item->products->Id}}">{{$item->products->ProductName}}</a></td>
                                <td class="pro-price"><span>{{number_format($item->products->Sale_price)}}đ</span></td>
                                <td class="pro-addtocart"><button class="btn">Thêm vào giỏ hàng</button></td>
                                <td class="pro-remove"><a class="removeItem" data-id="{{$item->products->Id}}" href=""><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

@section('js')
<script>
    $(document).ready(function () {
        $('.removeItem').off('click').on('click', function (event) {
            event.preventDefault();
            var id = $(this).data("id");
            $.ajax({
                url: 'Wishlists/delete/' + id,
                success: function (data){
                    $.notify({
                        title: ' Thông báo',
                        message: 'Xoá thành công',
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
                    setTimeout(function(){
                        window.location.reload();
                    }, 4500);
                }
            })
        });
    });
</script>
@endsection