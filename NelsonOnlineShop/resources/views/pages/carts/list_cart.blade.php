
<div class="col-12" id="list-cart">
    <!-- Cart Table -->
    <div class="cart-table table-responsive mb-30">
        <table class="table">
            <thead>
                <tr>
                    <th class="pro-thumbnail">Hình ảnh</th>
                    <th class="pro-title">Tên sản phẩm</th>
                    <th class="pro-price">Giá bán</th>
                    <th class="pro-quantity">Số lượng</th>
                    <th class="pro-subtotal">Tổng tiền</th>
                    <th class="pro-remove">Cập nhật</th>
                    <th class="pro-remove">Xoá</th>
                </tr>
            </thead>
            <tbody>
                @if(Session::has("Cart") != null)
                @foreach(Session::get('Cart')->products as $item)
                <tr>
                    <td class="pro-thumbnail"><a href="#"><img src="{{url('/')}}/nelsononlineshop/{{($item['productInfo']->Image)}}" alt=""></a></td>
                    <td class="pro-title"><a href="#">{{($item['productInfo']->ProductName)}}</a></td>
                    <td class="pro-price"><span>{{number_format($item['productInfo']->Price)}}đ</span></td>
                    <td class="pro-quantity">
                        <div class="pro-qty"><input id="quanty-item-{{$item['productInfo']->Id}}" type="number" value="{{$item['quanty']}}"></div>
                    </td>
                    <td class="pro-subtotal"><span>{{number_format($item['price'])}}đ</span></td>
                    <td class="pro-remove"><i style="cursor: pointer;" onclick="SaveListItemCart({{$item['productInfo']->Id}});" class="fa fa-save"></i></td>
                    <td class="pro-remove"><i style="cursor: pointer;" onclick="DeleteListItemCart({{$item['productInfo']->Id}});" class="fa fa-trash-o"></i></td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <div class="row">

        <div class="col-lg-6 col-12 mb-5">
        </div>
        <!-- Cart Summary -->
        <div class="col-lg-6 col-12 mb-30 d-flex">
            <div class="cart-summary">
                <div class="cart-summary-wrap">
                    <h4>Giỏ hàng của bạn</h4>
                    <p>Tổng tiền sản phẩm <span>{{number_format(Session::get('Cart')->totalPrice)}}</span></p>
                    <p>Ship <span>$00.00</span></p>
                    <h2>Tổng tiền <span>{{number_format(Session::get('Cart')->totalPrice)}}</span></h2>
                </div>
                <div class="cart-summary-button">
                    <a href="{{url('/Checkout')}}"><button class="btn" >Thanh Toán</button></a>
                    <button class="btn">Cập nhật</button>
                </div>
            </div>
        </div>
    </div>
</div>



