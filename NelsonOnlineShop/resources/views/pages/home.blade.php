@extends('layout.layouthome')
@section('content')
 <!-- Banner section start -->
 <div class="banner-section section pt-30">
    <div class="container">
        <div class="row">
            @foreach($theme as $key)
            <div class="col-lg-6 col-md-6 col-sm-12">
                <!-- Single Banner Start -->
                    <div class="single-banner-item mb-30">
                        <div class="banner-image">
                            <a href="chude/{{$key->Id}}">
                                <img src="frontend/images/{{$key->Image}}" alt="">
                            </a>
                        </div>
                        <div style="margin-bottom: 60px;" class="banner-content">
                            <h3 class="title">{!!$key->theme_name!!}</h3>
                        <a href="chude/{{$key->Id}}">SHOP NOW</a>
                        </div>
                    </div>
                <!-- Single Banner End -->
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Banner section End -->




<!--Product section start-->
<div class="product-section section pt-70 pt-lg-50 pt-md-40 pt-sm-30 pt-xs-20 pb-55 pb-lg-35 pb-md-25 pb-sm-15 pb-xs-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title text-center mb-15">
                    <h2>Nội thất phổ biến</h2>
                </div>
                <div class="product-tab mb-50 mb-sm-30 mb-xs-20">
                    <ul class="nav">
                        <li><a class="active show" data-toggle="tab" href="#home">GIA ĐÌNH</a></li>
                        <li><a data-toggle="tab" href="#office">VĂN PHÒNG</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div id="home" class="tab-pane fade active show">
                <div class="row">
                    @foreach($pro as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!--  Single Grid product Start -->
                        <div class="single-grid-product mb-40">
                            <div class="product-image">
                                <div class="product-label">
                                    <span>-20%</span>
                                </div>
                                <a href="/chitiet-sanpham/{{$item->Id}}">
                                <img src="{{url('/')}}/nelsononlineshop/{{$item->Image}}" class="img-fluid" alt="">
                                    <img src="{{url('/')}}/nelsononlineshop/{{$item->Image}}" class="img-fluid" alt="">
                                </a>

                                <div class="product-action">
                                    <ul>
                                        <li><a onclick="AddCart({{$item->Id}})" href="javascript:"><i class="fa fa-cart-plus"></i></a></li>
                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a onclick="AddWishlist({{$item->Id}})" href="javascript:"><i class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                            <h3 class="title"> <a href="single-product.html">{{$item->ProductName}}</a></h3>
                            @if($item->Date_sale >= $dtnow)
                            <p class="product-price"><span class="discounted-price">{{number_format($item->Sale_price,0)}}đ</span> <span class="main-price discounted">{{number_format($item->Price,0)}}đ</span></p>
                            @else
                            <p class="product-price"><span class="discounted-price">{{number_format($item->Sale_price,0)}}đ</span></p>

                            @endif
                        </div>
                        </div>
                        <!--  Single Grid product End -->
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>



<!-- Banner section start -->
<div class="banner-section section pb-40 pb-sm-30 pb-xs-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Single Banner Start -->
                <div class="single-banner-item pt-100 pt-md-80 pt-sm-70 pt-xs-50 pb-120 pb-md-100 pb-sm-90 pb-xs-50 mb-30 bg-image" data-bg="frontend/images/banner3.jpg">
                    <div class="sp-banner-content">
                        <span class="normat-text">GIẢM GIẢ LÊN ĐẾN 50%</span>
                        <h2 class="title">GHẾ Zigzag King</h2>
                        <span class="normat-text">CÒN LẠI</span>
                        <div class="countdown-area">
                            <div class="product-countdown" data-countdown="2020/08/01"></div>
                        </div>
                        <a href="shop.html">SHOP NOW</a>
                    </div>
                </div>
                <!-- Single Banner End -->
            </div>
        </div>
    </div>
</div>
<!-- Banner section End -->




<!--Features section start-->
<div class="features-section section pt-30 pt-lg-15 pt-md-0 pt-sm-0 pt-xs-15">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6">
                <!-- Single Feature Start -->
                <div class="single-feature mb-30">
                    <div class="feature-image">
                        <img src="frontend/images/feature-1.png" class="img-fluid" alt="">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Giao hàng tận nhà miễn phí</h4>
                        <p class="short-desc">Cung cấp giao hàng tận nhà miễn phí cho tất cả các sản phẩm trên 2.200.000Đ</p>
                    </div>
                </div>
                <!-- Single Feature End -->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Single Feature Start -->
                <div class="single-feature mb-30">
                    <div class="feature-image">
                        <img src="frontend/images/feature-2.png" class="img-fluid" alt="">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Chất lượng sản phẩm</h4>
                        <p class="short-desc">Chất lượng sản phẩm là mục tiêu hàng đầu của chúng tôi</p>
                    </div>
                </div>
                <!-- Single Feature End -->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Single Feature Start -->
                <div class="single-feature mb-30">
                    <div class="feature-image">
                        <img src="frontend/images/feature-3.png" class="img-fluid" alt="">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">3 ngày trở lại</h4>
                        <p class="short-desc">Cung cấp giao hàng tận nhà miễn phí cho tất cả các sản phẩm trên 2.200.000Đ</p>
                    </div>
                </div>
                <!-- Single Feature End -->
            </div>

        </div>
    </div>
</div>
<!--Features section end-->



<!--Blog section start-->
<div class="blog-section section pt-65 pt-lg-45 pt-md-35 pt-sm-20 pt-xs-15 pb-65 pb-lg-45 pb-md-35 pb-sm-25 pb-xs-15">
    <div class="container">

        <div class="row mb-50 mb-xs-20">
            <div class="col">
                <div class="section-title text-center">
                    <h2>Bài đăng mới nhất từ ​​Blog</h2>
                    <span>BÀI VIẾT CỦA CHÚNG TÔI</span>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($blogs as $item)

            <div class="blog col-lg-4 col-md-6">
                <div class="blog-inner mb-30">
                    <div class="blog-media"><a href="{{url('blog_detail')}}/{{$item->Id}}" class="image"><img height="200px;" src="{{url('/')}}/nelsononlineshop/{{$item->image}}" alt=""></a></div>
                    <div class="content">
                        <ul class="meta">
                            <li>{{$fmdate}}</li>
                            <li><a href="#">25 lượt thích</a></li>
                            <li><a href="#">28 lượt xem</a></li>
                        </ul>
                        <h3 class="title"><a href="blog-details.html">{{$item->title}}</a></h3>
                        <a class="read-more" href="blog-details.html">Đọc thêm</a>
                    </div>
                </div>
            </div>
            @endforeach
            

        </div>

    </div>
</div>
<!--Blog section end-->


<!-- Testimonial Area Start -->
<div class="testimonial-section section pb-80 pb-lg-60 pb-md-50 pb-sm-40 pb-xs-40">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testimonial-wrap bg-gray-two pt-45 pb-30">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="testimonial-wrapper section-space--inner">
                                <div class="testimonial-slider-content">
                                    <div class="item">
                                        <div class="row align-items-center">
                                            <div class="col-md-5">
                                                <div class="testimonial-image">
                                                    <img src="frontend/images/testimonial-2.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="testimonial testimonial-style-2 gutter-item">
                                                    <div class="testimonial-inner">
                                                        <div class="testimonial-author">
                                                            <div class="author-thumb">
                                                                <img src="frontend/images/author-1.png" alt="">
                                                            </div>
                                                            <div class="author-info">
                                                                <h4>Harry Nguyễn</h4>
                                                                <span>Người sáng lập CTO & CO, Axels</span>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-description">
                                                            <blockquote class="testimonials-text">
                                                                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="">Tôi rất vui khi mua sản phẩm từ nelson, cung cấp chất lượng sản phẩm tốt nhất. </font><font style="vertical-align: inherit;">Chất lượng sản phẩm rất khả quan. </font><font style="vertical-align: inherit;">Ngoài ra thiết kế sáng tạo của Nội thất của họ làm tôi hạnh phúc.</font></font></p>
                                                            </blockquote>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row align-items-center">
                                            <div class="col-md-5">
                                                <div class="testimonial-image">
                                                    <img src="frontend/images/testimonial-1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="testimonial testimonial-style-2 gutter-item">
                                                    <div class="testimonial-inner">
                                                        <div class="testimonial-author">
                                                            <div class="author-thumb">
                                                                <img src="frontend/images/author-1.png" alt="">
                                                            </div>
                                                            <div class="author-info">
                                                                <h4>Harry Nguyễn</h4>
                                                                <span>CTO & CO Founder, Axels</span>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-description">
                                                            <blockquote class="testimonials-text">
                                                                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="">Tôi rất vui khi mua sản phẩm từ nelson, cung cấp chất lượng sản phẩm tốt nhất. </font><font style="vertical-align: inherit;">Chất lượng sản phẩm rất khả quan. </font><font style="vertical-align: inherit;">Ngoài ra thiết kế sáng tạo của Nội thất của họ làm tôi hạnh phúc.</font></font></p>
                                                            </blockquote>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Area End -->

<!--Brand section start-->
<div class="brand-section section pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
    <div class="container">
        <div class="row">
            <div class="brand-slider section">
                <div class="col">
                    <!-- Single Brand Start -->
                    <div class="single-brand">
                        <div class="brand-image">
                            <img src="frontend/images/brand-1.png" alt="">
                        </div>
                    </div>
                    <!-- Single Brand End -->
                </div>
                <div class="col">
                    <!-- Single Brand Start -->
                    <div class="single-brand">
                        <div class="brand-image">
                            <img src="frontend/images/brand-2.png" alt="">
                        </div>
                    </div>
                    <!-- Single Brand End -->
                </div>
                <div class="col">
                    <!-- Single Brand Start -->
                    <div class="single-brand">
                        <div class="brand-image">
                            <img src="frontend/images/brand-3.png" alt="">
                        </div>
                    </div>
                    <!-- Single Brand End -->
                </div>
                <div class="col">
                    <!-- Single Brand Start -->
                    <div class="single-brand">
                        <div class="brand-image">
                            <img src="frontend/images/brand-4.png" alt="">
                        </div>
                    </div>
                    <!-- Single Brand End -->
                </div>
                <div class="col">
                    <!-- Single Brand Start -->
                    <div class="single-brand">
                        <div class="brand-image">
                            <img src="frontend/images/brand-5.png" alt="">
                        </div>
                    </div>
                    <!-- Single Brand End -->
                </div>
                <div class="col">
                    <!-- Single Brand Start -->
                    <div class="single-brand">
                        <div class="brand-image">
                            <img src="frontend/images/brand-1.png" alt="">
                        </div>
                    </div>
                    <!-- Single Brand End -->
                </div>
                <div class="col">
                    <!-- Single Brand Start -->
                    <div class="single-brand">
                        <div class="brand-image">
                            <img src="frontend/images/brand-2.png" alt="">
                        </div>
                    </div>
                    <!-- Single Brand End -->
                </div>
                <div class="col">
                    <!-- Single Brand Start -->
                    <div class="single-brand">
                        <div class="brand-image">
                            <img src="frontend/images/brand-3.png" alt="">
                        </div>
                    </div>
                    <!-- Single Brand End -->
                </div>
                <div class="col">
                    <!-- Single Brand Start -->
                    <div class="single-brand">
                        <div class="brand-image">
                            <img src="frontend/images/brand-4.png" alt="">
                        </div>
                    </div>
                    <!-- Single Brand End -->
                </div>
                <div class="col">
                    <!-- Single Brand Start -->
                    <div class="single-brand">
                        <div class="brand-image">
                            <img src="frontend/images/brand-5.png" alt="">
                        </div>
                    </div>
                    <!-- Single Brand End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--Brand section end-->
<!--Product section end-->
@endsection()
