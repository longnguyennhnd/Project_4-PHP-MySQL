<style>
    .mega-menu > li{
    border-left: 0;
    width: 50%;
}
</style>
<header class="header header-transparent header-sticky  d-lg-block d-none">
    <div class="header-deafult-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-2 col-md-4 col-12">
                    <!--Logo Area Start-->
                    <div class="logo-area">
                        <a href="/home"><img src="frontend/images/logo.png" alt=""></a>
                    </div>
                    <!--Logo Area End-->
                </div>
                <div class="col-xl-6 col-lg-6 col-md-4 d-none d-lg-block col-12">
                    <!--Header Menu Area Start-->
                    <div class="header-menu-area text-center">
                        <nav class="main-menu">
                            <ul>
                                <li><a href="/home">Home</a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="index.html">Home One</a></li>
                                        <li><a href="index-2.html">Home Two</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="shop.html">Shop</a>
                                    <ul class="mega-menu four-column left-0">
                                    <li><a href="{{url('chude')}}/{{('1')}}" class="item-link">Nội thất gia đình</a>
                                            <ul>
                                                 @foreach(App\productcategories::with('themes')->where('themeID',1)->get() as $item1)
                                                <li><a href="{{url('loai-san-pham', $item1->Id)}}">{{$item1->category_name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="{{url('chude2')}}/{{('2')}}" class="item-link">Nội thất văn phòng</a>
                                            <ul>
                                                 @foreach(App\productcategories::with('themes')->where('themeID',2)->get() as $item1)
                                                <li><a href="{{url('loai-san-pham', $item1->Id)}}">{{$item1->category_name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">Hàng Mới Về</a></li>
                                <li><a href="">Về Chúng Tôi</a></li>
                                <li><a href="/contact">Liên hệ</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--Header Menu Area End-->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-5 col-12">
                    <!--Header Search And Mini Cart Area Start-->
                    <div class="header-search-cart-area">
                        <ul>
                            <li><a class="header-search-toggle" href="#"><i class="flaticon-magnifying-glass"></i></a>
                            </li>
                            <li class="currency-menu"><a href="#"><i class="flaticon-user"></i></a>
                                <!--Crunccy dropdown-->
                                <ul class="currency-dropdown">
                                    <!--Language Currency Start-->
                                    <li><a href="#">Ngôn Ngữ</a>
                                        <ul>
                                            <li class="active"><a href="#"><img src="frontend/images/en-gb.png"
                                                        alt="">Tiếng Việt</a></li>
                                            <li><a href="#"><img src="frontend/images/de-de.png" alt="">English</a></li>
                                        </ul>
                                    </li>
                                    <!--Language Currency End-->
                                    <!--USD Currency Start-->
                                    <li><a href="#">Tiền tệ</a>
                                        <ul>
                                            <li><a href="#"> Đ Đồng</a></li>
                                            <li><a href="#"> $ US Dollar</a></li>
                                        </ul>
                                    </li>
                                    <!--USD Currency End-->
                                    <!--Account Currency Start-->
                                    <li><a href="my-account.html">Tài khoản của tôi</a>
                                        <ul>
                                            <li><a href="/dangnhap-dangky">Đăng nhập</a></li>
                                            <li><a href="#orders">Thanh toán</a></li>
                                            <li><a href="/myaccount">Tài khoản của tôi</a></li>
                                            @if(Session::has("Cart") != null)
                                            <li><a href="{{url('/List-Carts')}}">Giỏ hàng</a></li>
                                            @else
                                            <li><a href="#">Giỏ hàng</a></li>
                                            @endif
                                            <li><a href="/Wishlists">Wishlist</a></li>
                                        </ul>
                                    </li>
                                    <!--Account Currency End-->
                                </ul>
                                <!--Crunccy dropdown-->
                            </li>
                            <li class="mini-cart"><a href="#"><i class="flaticon-shopping-cart"></i> 
                                @if(Session::has("Cart") != null)
                                    <span class="mini-cart-total">({{Session::get('Cart')->totalQuanty}})</span></a>
                                @else
                                    <span class="mini-cart-total">(0)</span></a>
                                @endif
                                <!--Mini Cart Dropdown Start-->
                                <div class="header-cart" style="width: 400px;">
                                    @if(Session::has("Cart") != null)
                                    <div id="change-item-cart">
                                        <ul class="cart-items">
                                            @foreach(Session::get('Cart')->products as $item)
                                            <li class="single-cart-item">
                                                <div class="cart-img">
                                                    <a href="cart.html"><img src="{{url('/')}}/nelsononlineshop/{{($item['productInfo']->Image)}}" alt=""></a>
                                                </div>
                                                <div class="cart-content" style="width: 50%;">
                                                    <h5 class="product-name"><a
                                                            href="single-product.html">{{($item['productInfo']->ProductName)}}</a>
                                                    </h5>
                                                    <span class="product-quantity">{{$item['quanty']}} ×</span>
                                                    <span
                                                        class="product-price">{{number_format($item['productInfo']->Price)}}đ</span>
                                                </div>
                                                <div class="cart-item-remove" style="cursor: pointer">
                                                    <i data-id="{{$item['productInfo']->Id}}" class="fa fa-trash"></i>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        <div class="cart-total">
                                            <h5>Total : <span
                                                    class="float-right">{{number_format(Session::get('Cart')->totalPrice)}}đ</span>
                                            </h5>
                                        </div>
                                        @if(Session::has("Cart") != null)
                                        <div class="cart-btn">
                                            <a href="{{url('/List-Carts')}}">Xem giỏ hàng</a>
                                            <a href="{{url('/Checkout')}}">Thanh toán</a>
                                        </div>
                                        @endif
                                    </div>
                                   
                                    @else
                                    <div id="change-item-cart">
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
                                            <a href="#">Xem giỏ hàng</a>
                                            <a href="#">Thanh toán</a>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <!--Mini Cart Dropdown End-->
                            </li>
                        </ul>
                    </div>
                    <!--Header Search And Mini Cart Area End-->
                </div>
            </div>
        </div>
    </div>
</header>
<!--Header section end-->


<!-- main-search start -->
<div class="main-search-active">
    <div class="sidebar-search-icon">
        <button class="search-close"><i class="fa fa-times"></i></button>
    </div>
    <div class="sidebar-search-input">
        <form action="{{URL::to('/search')}}" method="POST">
            @csrf
            <div class="form-search">
                <input id="search" class="input-text" name="searchkey" value="" placeholder="" type="search">
                <button>
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </form>
        <p class="form-description">Nhấn enter để tìm hoặc Esc để đóng</p>
    </div>
</div>