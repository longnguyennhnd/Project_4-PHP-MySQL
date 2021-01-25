@extends('layout.layout_shopping-cart')
@section('content')

<div class="blog-section section pt-90 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-40 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-lg-1 order-2">
                <!-- Single Sidebar Start  -->
                <div class="common-sidebar-widget">
                    <h3 class="sidebar-title">Search</h3>
                    <div class="sidebar-search">
                        <form action="#">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <!-- Single Sidebar End  -->
                <!-- Single Sidebar Start  -->
                <div class="common-sidebar-widget">
                    <h3 class="sidebar-title">Bài viết gần đây</h3>
                    <div class="sidebar-blog">
                        <a href="blog-details.html" class="image"><img width="120px" src="{{url('/')}}/nelsononlineshop/{{$blog->image}}" alt=""></a>
                        <div class="content">
                            <h5><a href="blog-details.html">{{$blog->title}} (đang xem)</a></h5>
                            <span>{{date('d-m-Y', strtotime($blog->created_at))}}</span>
                        </div>
                        
                    </div>
                    @foreach($blogs as $item)
                    <div class="sidebar-blog">
                        <a href="blog-details.html" class="image"><img width="120px" src="{{url('/')}}/nelsononlineshop/{{$item->image}}" alt=""></a>
                        <div class="content">
                            <h5><a href="blog-details.html">{{$item->title}}</a></h5>
                            <span>{{$fmdate2}}</span>
                        </div>
                    </div>
                        @endforeach
                </div>
                <!-- Single Sidebar End  -->
                <!-- Single Sidebar Start  -->
                {{-- <div class="common-sidebar-widget">
                    <h3 class="sidebar-title">Recent comments</h3>
                    <div class="sidebar-blog">
                        <div class="image"><img src="assets/images/icons/author.png" alt=""></div>
                        <div class="content">
                            <p>admin says:</p>
                            <a href="#">Nulla auctor mi vel nisl...</a>
                        </div>
                    </div>
                    <div class="sidebar-blog">
                        <div class="image"><img src="assets/images/icons/author.png" alt=""></div>
                        <div class="content">
                            <p>admin says:</p>
                            <a href="#">Nulla auctor mi vel nisl...</a>
                        </div>
                    </div>
                    <div class="sidebar-blog">
                        <div class="image"><img src="assets/images/icons/author.png" alt=""></div>
                        <div class="content">
                            <p>admin says:</p>
                            <a href="#">Nulla auctor mi vel nisl...</a>
                        </div>
                    </div>
                    <div class="sidebar-blog">
                        <div class="image"><img src="assets/images/icons/author.png" alt=""></div>
                        <div class="content">
                            <p>admin says:</p>
                            <a href="#">Nulla auctor mi vel nisl...</a>
                        </div>
                    </div>
                </div> --}}
                <!-- Single Sidebar End  -->
                <!-- Single Sidebar Start  -->
                
                <!-- Single Sidebar End  -->
                <!-- Single Sidebar Start  -->
                <div class="common-sidebar-widget">
                    <h3 class="sidebar-title bb-0">Tags</h3>
                    <ul class="sidebar-tag">
                        <li><a href="#">Painting</a></li>
                        <li><a href="#">Plumbing</a></li>
                        <li><a href="#">Flooring</a></li>
                        <li><a href="#">Roofing</a></li>
                        <li><a href="#">Tools</a></li>
                        <li><a href="#">Electrical</a></li>
                    </ul>
                </div>
                <!-- Single Sidebar End  -->
            </div>
            <div class="col-lg-9 order-lg-2 order-1 mb-sm-40 mb-xs-30 pl-40 pl-md-15 pl-sm-15 pl-xs-15">
                <div class="row">
                    <div class="blog-details col-12">
                        <div class="blog-inner">
                            <div class="blog-media">
                                <div class="image"><img src="{{url('/')}}/nelsononlineshop/{{$blog->image}}" alt=""></div>
                            </div>
                            <div class="content">
                                <ul class="meta">
                                    <li>{{date('d-m-Y', strtotime($blog->created_at))}}</li>
                                    <li><a href="#">25 Likes</a></li>
                                    <li><a href="#">28 Views</a></li>
                                </ul>
                                <h2 class="title">{{$blog->title}}</h2>
                                <div class="desc mb-30">
                                    <p>{!!$blog->paragraph_1!!}</p>
                                    {{-- <blockquote class="blockquote mt-30 mb-30">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate ad totam est optio mollitia dolores rem ducimus. Odio assumenda distinctio adipisci! Consequuntur excepturi eos nulla.</p>
                                        <span class="author">__Denise Miller</span>
                                    </blockquote> --}}

                                    {{-- <div class="row">
                                        <div class="col-md-6">
                                            <ul class="blog-post-list mb-30">
                                                <li> Lorem boluptatum deleniti atque corrupti sdolores et quas molestias cepturi sint eca itate non similique </li>
                                                <li> Lorem boluptatum deleniti atque corrupti sdolores et quas molestias cepturi sint eca itate non similique </li>
                                                <li> Lorem boluptatum deleniti atque corrupti sdolores et quas molestias cepturi sint eca itate non similique </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="blog-post-list mb-30">
                                                <li> Lorem boluptatum deleniti atque corrupti sdolores et quas molestias cepturi sint eca itate non similique </li>
                                                <li> Lorem boluptatum deleniti atque corrupti sdolores et quas molestias cepturi sint eca itate non similique </li>
                                            </ul>
                                        </div>
                                    </div> --}}

                                    <div class="row">
                                        @foreach($moreimg as $value)
                                        <div class="col-md-6">
                                            <div class="blog-gallery img-full mb-30">
                                                <img src="{{url('/')}}/nelsononlineshop/{{$value}}" alt="">
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>

                                    <p>{!!$blog->paragraph_2!!}</p>

                                </div>
                                <ul class="tags">
                                    <li><i class="fa fa-tags"></i></li>
                                    <li><a href="#">Painting</a></li>
                                    <li><a href="#">Plumbing</a></li>
                                    <li><a href="#">Furniture</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-12 mt-60 mt-sm-30 mt-xs-20">
                        <!-- Start Comment -->
                        <div class="comments-wrapper">
                            <div class="inner">
                                <h3>3 Comments</h3>
                                <div class="commnent-list-wrap mt-25">

                                    <!-- Start Single Comment -->
                                    <div class="comment">
                                        <div class="thumb">
                                            <img src="assets/images/author/author2.jpg" alt="Multipurpose">
                                        </div>
                                        <div class="content">
                                            <div class="info d-flex justify-content-between">
                                                <h6 class="mb-0">Fatema Asrafi</h6>
                                                <span class="reply-btn"><a href="#">Reply</a></span>
                                            </div>
                                            <div class="comment-footer mt-5">
                                                <span>May 17, 2018 at 1:59 am</span>
                                            </div>
                                            <div class="text mt-5 pr-50 pr-sm-5">
                                                <p class="bk_pra">To link your Facebook and Twitter accounts,
                                                    open the Instagram app on your phone or tablet, and select
                                                    the Profile tab in the bottom-right corner of the screen.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Comment -->

                                    <!-- Start Single Comment -->
                                    <div class="comment comment-reply">
                                        <div class="thumb">
                                            <img src="assets/images/author/author3.jpg" alt="Multipurpose">
                                        </div>
                                        <div class="content">
                                            <div class="info d-flex justify-content-between">
                                                <h6 class="mb-0">SCOTT JAMES</h6>
                                                <span class="reply-btn"><a href="#">Reply</a></span>
                                            </div>
                                            <div class="comment-footer mt-5">
                                                <span>May 17, 2018 at 1:59 am</span>
                                            </div>
                                            <div class="text mt-5 pr-50 pr-sm-5">
                                                <p class="bk_pra">To link your Facebook and Twitter accounts,
                                                    open the Instagram app on your phone or tablet, and select
                                                    the Profile tab in the bottom-right corner of the screen.</p>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Single Comment -->

                                    <!-- Start Single Comment -->
                                    <div class="comment">
                                        <div class="thumb">
                                            <img src="assets/images/author/author4.jpg" alt="Multipurpose">
                                        </div>
                                        <div class="content">
                                            <div class="info d-flex justify-content-between">
                                                <h6 class="mb-0">SCOTT JAMES</h6>
                                                <span class="reply-btn"><a href="#">Reply</a></span>
                                            </div>
                                            <div class="comment-footer mt-5">
                                                <span>May 17, 2018 at 1:59 am</span>
                                            </div>
                                            <div class="text mt-5 pr-50 pr-sm-5">
                                                <p class="bk_pra">To link your Facebook and Twitter accounts,
                                                    open the Instagram app on your phone or tablet, and select
                                                    the Profile tab in the bottom-right corner of the screen.</p>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Single Comment -->

                                </div>
                            </div>
                        </div>
                        <!-- End Comment -->
                    </div> --}}
                    {{-- <div class="col-12 mt-60 mt-sm-30 mt-xs-20">
                        <div class="comment-wrapper">

                            <h3>Leave Your Comment</h3>

                            <div class="comment-form">
                                <form action="#">
                                    <div class="row row-10">
                                        <div class="col-md-6 col-12 mb-20"><input type="text" placeholder="Your Name"></div>
                                        <div class="col-md-6 col-12 mb-20"><input type="email" placeholder="Your Email"></div>
                                        <div class="col-12 mb-20"><textarea placeholder="Your Message"></textarea></div>
                                        <div class="col-12"><button class="btn">Send Comment</button></div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection