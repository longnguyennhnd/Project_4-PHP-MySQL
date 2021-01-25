
@extends('layout.layout_theme')
@section('content')
<div class="col-lg-9 order-lg-2 order-1">
    <div class="row">
        <div class="col-12">
            <div class="shop-product">
                <div id="myTabContent-2" class="tab-content">
                    {{-- <div id="grid" class="tab-pane fade">
                        <div class="product-grid-view">
                            <div class="row">


                               <div class="col-lg-4 col-md-6 col-sm-6">
                                    <!--  Single Grid product Start -->
                                    <div class="single-grid-product mb-40">
                                        <div class="product-image">
                                            <div class="product-label">
                                                <span class="sale">Sale</span>
                                            </div>
                                            <a href="single-product.html">
                                                <img src="frontend/images/product-11.jpg" class="img-fluid" alt="">
                                                <img src="frontend/images/product-12.jpg" class="img-fluid" alt="">
                                            </a>

                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                    <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="title"> <a href="single-product.html">Tripod lampshade</a></h3>
                                            <p class="product-price"><span class="discounted-price">$210.00</span> <span class="main-price discounted">$240.00</span></p>
                                        </div>
                                    </div>
                                    <!--  Single Grid product End -->
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div id="list" class="tab-pane fade active show">
                        <div class="product-list-view">
                            <!-- Single List Product Start -->
                            @foreach($product as $item)
                            <div class="product-list-item mb-40">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-grid-product">
                                            <div class="product-image">
                                                <div class="product-label">
                                                    <span class="sale">New</span>
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{url('/')}}/nelsononlineshop/{{$item->Image}}" class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                        <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-6">
                                        <div class="product-content-shop-list">
                                            <div class="product-content">
                                            <h3 class="title"> <a href="single-product.html">{{$item->ProductName}}</a></h3>
                                                <div class="product-category-rating">
                                                    <span class="rating">
                                                <i class="fa fa-star active"></i>
                                                <i class="fa fa-star active"></i>
                                                <i class="fa fa-star active"></i>
                                                <i class="fa fa-star active"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                                    <span class="review"><a href="#">(1 review)</a></span>
                                                </div>
                                                <p class="product-price"><span class="discounted-price">{{number_format($item->Sale_price,0)}}đ</span> <span class="main-price discounted">{{number_format($item->Price,0)}}đ</span></p>
                                            <p class="product-desc">{{$item->description}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- Single List Product Start -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-30 mb-sm-40 mb-xs-30">
        <div class="col">
            <ul class="page-pagination">
                <li class="active"><a href="#">01</a></li>
                <li><a href="#">02</a></li>
                <li><a href="#">03</a></li>
                <li><a href="#">04</a></li>
                <li><a href="#">05</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection()
