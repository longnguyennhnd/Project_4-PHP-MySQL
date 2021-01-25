
@extends('layout.layout_category')
@section('content')


<style>
    .sidebar-list li a.active{
        color: #FF5722;
    }
</style>

<div class="row">
    <div class="col-12">
        <!-- Grid & List View Start -->
        <div class="shop-topbar-wrapper d-flex justify-content-between align-items-center">
            <div class="grid-list-option d-flex">
                <ul class="nav">
                    <li>
                        <a data-toggle="tab" href="#grid"><i class="fa fa-th"></i></a>
                    </li>
                    <li>
                        <a class="active show" data-toggle="tab" href="#list" class=""><i class="fa fa-th-list"></i></a>
                    </li>
                </ul>
                <p>Hiển thị 1–9 của 15 kết quả</p>
            </div>
            <!--Toolbar Short Area Start-->
            <div class="toolbar-short-area d-md-flex align-items-center">
                <form id="form_order" class="tree-most" method="GET" >
                <div class="toolbar-shorter ">
                   
                    <label>Sắp xếp theo:</label>
                    <select name="orderby" id="selected" class="wide">
                        <option {{ Request::get('orderby') == "md" || !Request::get('orderby') ? "selected='selected'" : "" }} value="md" selected="selected" data-display="Select">Nothing</option>
                        <option {{ Request::get('orderby') == "desc" ? "selected='selected'" : "" }} value="desc">Mới nhất</option>
                        <option {{ Request::get('orderby') == "asc" ? "selected='selected'" : "" }} value="asc">Cũ nhất</option>
                        <option {{ Request::get('orderby') == "price_max" ? "selected='selected'" : "" }} value="price_max">Giá, thấp đến cao</option>
                        <option {{ Request::get('orderby') == "price_min" ? "selected='selected'" : "" }} value="price_min">Giá, cao đến thấp</option>
                    </select>
                
                </div>
            </form>
            </div>
            <!--Toolbar Short Area End-->
        </div>
        <!-- Grid & List View End -->
    </div>
</div>

<div class="row">
    <div class="col-lg-3 order-lg-2 order-2">
        <!-- Single Sidebar Start  -->
        <div class="common-sidebar-widget">
            <h3 class="sidebar-title">Lọc theo khoảng giá</h3>
            <ul class="sidebar-list">
                <li><a class="{{ Request::get('price') == 1 ? 'active' : '' }}" href="{{ request()->fullUrlWithQuery(['price' => 1]) }}"><i class="fa fa-plus"></i>0đ - 3,000,000đ</a></li>
                <li><a class="{{ Request::get('price') == 2 ? 'active' : '' }}" href="{{ request()->fullUrlWithQuery(['price' => 2]) }}"><i class="fa fa-plus"></i>3,0000,0000đ - 5,000,000đ</a></li>
                <li><a class="{{ Request::get('price') == 3 ? 'active' : '' }}" href="{{ request()->fullUrlWithQuery(['price' => 3]) }}"><i class="fa fa-plus"></i>5,0000,0000đ - 7,000,000đ</a></li>
                <li><a class="{{ Request::get('price') == 4 ? 'active' : '' }}" href="{{ request()->fullUrlWithQuery(['price' => 4]) }}"><i class="fa fa-plus"></i>7,0000,0000đ - 10,000,000đ</a></li>
                <li><a class="{{ Request::get('price') == 5 ? 'active' : '' }}" href="{{ request()->fullUrlWithQuery(['price' => 5]) }}"><i class="fa fa-plus"></i>Hơn 10 triệu</a></li>
                
            </ul>
        </div>
        <!-- Single Sidebar Start  -->
        <div class="common-sidebar-widget">
            <h3 class="sidebar-title">Thẻ</h3>
            <ul class="sidebar-tag">
                <li><a href="#">Sofa</a></li>
                <li><a href="#">Giường ngủ</a></li>
                <li><a href="#">Kệ TV</a></li>
                
            </ul>
        </div>
        <!-- Single Sidebar End  -->
    </div>
    <div class="col-lg-9 order-lg-2 order-1">
        <div class="row">
            <div class="col-12">
                <div class="shop-product">
                    <div id="myTabContent-2" class="tab-content">
                        <div id="grid" class="tab-pane fade active show">
                            <div class="product-grid-view">
                                <div class="row"> 
                                    @foreach($product as $item)
                                    <div class="col-lg-3 col-md-6 col-sm-6">
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
                                                        <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                        <li><a href="#quick-view-modal-container" data-toggle="modal" id="{{$item->ProductName}}" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"> <a href="single-product.html">{{$item->ProductName}}</a></h3>
                                                <p class="product-price"><span class="discounted-price">{{number_format($item->Sale_price,0)}}đ</span> <span class="main-price discounted">{{number_format($item->Price,0)}}đ</span></p>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        {{-- <div id="list" class="tab-pane fade">
                            <div class="product-list-view">
                                <!-- Single List Product Start -->
                                
                                <!-- Single List Product Start -->
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-30 mb-sm-40 mb-xs-30">
            <div class="col" style="margin-left: 30%; margin-top: 80px;">
              
                    {{$product->links()}}
                
            </div>
        </div>
    </div>
</div>

@endsection()
