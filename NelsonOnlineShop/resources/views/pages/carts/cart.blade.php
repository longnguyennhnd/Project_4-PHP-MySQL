@if(Session::has("Cart") != null)
<div id="change-item-cart">
    <ul class="cart-items">
        @foreach(Session::get('Cart')->products as $item)
        <li class="single-cart-item">
            <div class="cart-img">
                <a href="cart.html"><img src="{{url('/')}}/nelsononlineshop/{{($item['productInfo']->Image)}}" alt=""></a>
            </div>
            <div class="cart-content" style="width: 50%;">
                <h5 class="product-name"><a href="single-product.html">{{($item['productInfo']->ProductName)}}</a></h5>
                <span class="product-quantity">{{$item['quanty']}} ×</span>
                <span class="product-price">{{number_format($item['productInfo']->Price)}}đ</span>
            </div>
            <div class="cart-item-remove" style="cursor: pointer">
                <i data-id="{{$item['productInfo']->Id}}" class="fa fa-trash"></i>
            </div>
        </li>
        @endforeach
    </ul>
    <div class="cart-total">
        <h5>Tota: <span class="float-right">{{number_format(Session::get('Cart')->totalPrice)}}đ</span></h5>
        <input hidden id="total-quanty-cart" type="number" value="{{Session::get('Cart')->totalQuanty}}">
    </div>
    <div class="cart-btn">
        <a href="{{url('/List-Carts')}}">Xem giỏ hàng</a>
        <a href="checkout.html">Checkout</a>
    </div>
</div>


@else
    <ul class="cart-items">
        <li class="single-cart-item">
            <div class="cart-content" style="width: 50%;">
                <h5 class="product-name"><a
                        href="single-product.html">Không có sản phẩm nào trong giỏ hàng</a>
                </h5>
                
            </div>
            
        </li>
    </ul>
    <div class="cart-total">
        <h5>Total : <span
                class="float-right">0đ</span>
        </h5>
    </div>
    <div class="cart-btn">
        <a href="{{url('/List-Carts')}}">Xem giỏ hàng</a>
        <a href="checkout.html">Checkout</a>
    </div>
@endif                               

