<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Nelson - Nội thất hàng đầu Việt Nam</title>
    <!-- Vendor styles -->
    <link rel="stylesheet"
        href="{{asset('backend/vendors/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/jquery-scrollbar/jquery.scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/fullcalendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/dropzone/dropzone.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/nouislider/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/trumbowyg/ui/trumbowyg.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/flatpickr/flatpickr.min.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/vendors/rateyo/jquery.rateyo.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/sweetalert2/sweetalert2.min.css')}}">
    
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.css.map')}}">

    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css.map')}}">
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap-grid.css.map')}}">
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap-grid.min.css.map')}}">
    <!-- Demo only -->
    <link rel="stylesheet" href="{{asset('backend/demo/css/demo.css')}}">
    <!-- App styles -->
    <link rel="stylesheet" href="{{asset('backend/css/app.min.css')}}">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> --}}

</head>
<style>
    *{
        font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
</style>
<body data-ma-theme="blue-grey">
    <main class="main">
        <div class="page-loader">
            <div class="page-loader__spinner">
                <svg viewBox="25 25 50 50">
                    <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                </svg>
            </div>
        </div>

        <header class="header">
            <div class="navigation-trigger hidden-xl-up" data-ma-action="aside-open" data-ma-target=".sidebar">
                <div class="navigation-trigger__inner">
                    <i class="navigation-trigger__line"></i>
                    <i class="navigation-trigger__line"></i>
                    <i class="navigation-trigger__line"></i>
                </div>
            </div>

            <div class="header__logo hidden-sm-down">
                <h1><a href="index.html">Admin</a></h1>
            </div>

            <form class="search">
                <div class="search__inner">
                    <input type="text" class="search__text" placeholder="Search for people, files, documents...">
                    <i class="zmdi zmdi-search search__helper" data-ma-action="search-close"></i>
                </div>
            </form>

            <ul class="top-nav">
                <li class="hidden-xl-up"><a href="" data-ma-action="search-open"><i class="zmdi zmdi-search"></i></a>
                </li>

                <li class="dropdown">
                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-email"></i></a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                        <div class="listview listview--hover">
                            <div class="listview__header">
                                Messages

                                <div class="actions">
                                    <a href="messages.html" class="actions__item zmdi zmdi-plus"></a>
                                </div>
                            </div>

                            <a href="" class="listview__item">
                                {{-- <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt=""> --}}

                                <div class="listview__content">
                                    <div class="listview__heading">
                                        David Belle <small>12:01 PM</small>
                                    </div>
                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                </div>
                            </a>

                            <a href="" class="listview__item">
                                {{-- <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt=""> --}}

                                <div class="listview__content">
                                    <div class="listview__heading">
                                        Jonathan Morris
                                        <small>02:45 PM</small>
                                    </div>
                                    <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                </div>
                            </a>

                            <a href="" class="listview__item">
                                {{-- <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt=""> --}}

                                <div class="listview__content">
                                    <div class="listview__heading">
                                        Fredric Mitchell Jr.
                                        <small>08:21 PM</small>
                                    </div>
                                    <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue
                                        ultricies</p>
                                </div>
                            </a>

                            <a href="" class="listview__item">
                                {{-- <img src="demo/img/profile-pics/4.jpg" class="listview__img" alt=""> --}}

                                <div class="listview__content">
                                    <div class="listview__heading">
                                        Glenn Jecobs
                                        <small>08:43 PM</small>
                                    </div>
                                    <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est
                                        consectetur neque</p>
                                </div>
                            </a>

                            <a href="" class="listview__item">
                                {{-- <img src="demo/img/profile-pics/5.jpg" class="listview__img" alt=""> --}}

                                <div class="listview__content">
                                    <div class="listview__heading">
                                        Bill Phillips
                                        <small>11:32 PM</small>
                                    </div>
                                    <p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante
                                        placerat</p>
                                </div>
                            </a>

                            <a href="" class="view-more">View all messages</a>
                        </div>
                    </div>
                </li>

                <li class="dropdown top-nav__notifications">
                    <a href="" data-toggle="dropdown" class="top-nav__notify">
                        <i class="zmdi zmdi-notifications"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                        <div class="listview listview--hover">
                            <div class="listview__header">
                                Notifications

                                <div class="actions">
                                    <a href="" class="actions__item zmdi zmdi-check-all"
                                        data-ma-action="notifications-clear"></a>
                                </div>
                            </div>

                            <div class="listview__scroll scrollbar-inner">
                                <a href="" class="listview__item">
                                    {{-- <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt=""> --}}

                                    <div class="listview__content">
                                        <div class="listview__heading">David Belle</div>
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                    </div>
                                </a>

                                <a href="" class="listview__item">
                                    {{-- <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt=""> --}}

                                    <div class="listview__content">
                                        <div class="listview__heading">Jonathan Morris</div>
                                        <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                    </div>
                                </a>

                                <a href="" class="listview__item">
                                    {{-- <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt=""> --}}

                                    <div class="listview__content">
                                        <div class="listview__heading">Fredric Mitchell Jr.</div>
                                        <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at
                                            augue ultricies</p>
                                    </div>
                                </a>

                                <a href="" class="listview__item">
                                    {{-- <img src="demo/img/profile-pics/4.jpg" class="listview__img" alt=""> --}}

                                    <div class="listview__content">
                                        <div class="listview__heading">Glenn Jecobs</div>
                                        <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui
                                            est consectetur neque</p>
                                    </div>
                                </a>

                                <a href="" class="listview__item">
                                    {{-- <img src="demo/img/profile-pics/5.jpg" class="listview__img" alt=""> --}}

                                    <div class="listview__content">
                                        <div class="listview__heading">Bill Phillips</div>
                                        <p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante
                                            placerat</p>
                                    </div>
                                </a>

                                <a href="" class="listview__item">
                                    {{-- <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt=""> --}}

                                    <div class="listview__content">
                                        <div class="listview__heading">David Belle</div>
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                    </div>
                                </a>

                                <a href="" class="listview__item">
                                    {{-- <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt=""> --}}

                                    <div class="listview__content">
                                        <div class="listview__heading">Jonathan Morris</div>
                                        <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                    </div>
                                </a>

                                <a href="" class="listview__item">
                                    {{-- <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt=""> --}}

                                    <div class="listview__content">
                                        <div class="listview__heading">Fredric Mitchell Jr.</div>
                                        <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at
                                            augue ultricies</p>
                                    </div>
                                </a>
                            </div>

                            <div class="p-1"></div>
                        </div>
                    </div>
                </li>

                <li class="dropdown hidden-xs-down">
                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-check-circle"></i></a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                        <div class="listview listview--hover">
                            <div class="listview__header">Tasks</div>

                            <a href="" class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading mb-2">HTML5 Validation Report</div>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 75%" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading mb-2">Google Chrome Extension</div>

                                    <div class="progress">
                                        <div class="progress-bar bg-warning" style="width: 43%" aria-valuenow="43"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading mb-2">Social Intranet Projects</div>

                                    <div class="progress">
                                        <div class="progress-bar bg-success" style="width: 20%" aria-valuenow="20"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading mb-2">Bootstrap Admin Template</div>

                                    <div class="progress">
                                        <div class="progress-bar bg-info" style="width: 60%" aria-valuenow="60"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading mb-2">Youtube Client App</div>

                                    <div class="progress">
                                        <div class="progress-bar bg-danger" style="width: 80%" aria-valuenow="80"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="view-more">View all tasks</a>
                        </div>
                    </div>
                </li>

                <li class="dropdown hidden-xs-down">
                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-apps"></i></a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                        <div class="row app-shortcuts">
                            <a class="col-4 app-shortcuts__item" href="">
                                <i class="zmdi zmdi-calendar"></i>
                                <small class="">Calendar</small>
                                <span class="app-shortcuts__helper bg-red"></span>
                            </a>
                            <a class="col-4 app-shortcuts__item" href="">
                                <i class="zmdi zmdi-file-text"></i>
                                <small class="">Files</small>
                                <span class="app-shortcuts__helper bg-blue"></span>
                            </a>
                            <a class="col-4 app-shortcuts__item" href="">
                                <i class="zmdi zmdi-email"></i>
                                <small class="">Email</small>
                                <span class="app-shortcuts__helper bg-teal"></span>
                            </a>
                            <a class="col-4 app-shortcuts__item" href="">
                                <i class="zmdi zmdi-trending-up"></i>
                                <small class="">Reports</small>
                                <span class="app-shortcuts__helper bg-blue-grey"></span>
                            </a>
                            <a class="col-4 app-shortcuts__item" href="">
                                <i class="zmdi zmdi-view-headline"></i>
                                <small class="">News</small>
                                <span class="app-shortcuts__helper bg-orange"></span>
                            </a>
                            <a class="col-4 app-shortcuts__item" href="">
                                <i class="zmdi zmdi-image"></i>
                                <small class="">Gallery</small>
                                <span class="app-shortcuts__helper bg-light-green"></span>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="dropdown hidden-xs-down">
                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-item theme-switch">
                            Theme Switch

                            <div class="btn-group btn-group-toggle btn-group--colors" data-toggle="buttons">
                                <label class="btn bg-green active"><input type="radio" value="green" autocomplete="off"
                                        checked></label>
                                <label class="btn bg-blue"><input type="radio" value="blue" autocomplete="off"></label>
                                <label class="btn bg-red"><input type="radio" value="red" autocomplete="off"></label>
                                <label class="btn bg-orange"><input type="radio" value="orange"
                                        autocomplete="off"></label>
                                <label class="btn bg-teal"><input type="radio" value="teal" autocomplete="off"></label>

                                <div class="clearfix mt-2"></div>

                                <label class="btn bg-cyan"><input type="radio" value="cyan" autocomplete="off"></label>
                                <label class="btn bg-blue-grey"><input type="radio" value="blue-grey"
                                        autocomplete="off"></label>
                                <label class="btn bg-purple"><input type="radio" value="purple"
                                        autocomplete="off"></label>
                                <label class="btn bg-indigo"><input type="radio" value="indigo"
                                        autocomplete="off"></label>
                                <label class="btn bg-brown"><input type="radio" value="brown"
                                        autocomplete="off"></label>
                            </div>
                        </div>
                        <a href="" class="dropdown-item">Fullscreen</a>
                        <a href="" class="dropdown-item">Clear Local Storage</a>
                    </div>
                </li>

                <li class="hidden-xs-down">
                    <a href="" data-ma-action="aside-open" data-ma-target=".chat" class="top-nav__notify">
                        <i class="zmdi zmdi-comment-alt-text"></i>
                    </a>
                </li>
            </ul>
        </header>

        <aside class="sidebar">
            <div class="scrollbar-inner">
                <div class="user">
                    <div class="user__info" data-toggle="dropdown">
                        <img class="user__img" src="{{asset('backend/demo/img/profile-pics/8.jpg')}}" alt="">
                        <div>
                            <div class="user__name">
                                <?php
                                    $name = Session::get('name');
                                    if($name){
                                        echo $name;
                                    }
                                    ?>
                            </div>
                            <div class="user__email">
                                <?php
                                    $Email = Session::get('Email');
                                    if($Email){
                                        echo $Email;
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="">Hồ sơ</a>
                        <a class="dropdown-item" href="">Cài đặt</a>
                        <a class="dropdown-item" href="{{URL::TO('/logout')}}">Đăng xuất</a>
                    </div>
                </div>

                <ul class="navigation">
                    <li class="navigation__active"><a href="{{URL::to('/dashboard')}}"><i class="zmdi zmdi-home"></i>
                            Home</a></li>
                    <li>
                        <a href="{{url('/QLLoaiSP')}}"><i class="zmdi zmdi-view-list zmdi-hc-fw"></i> Quản lý loại sản phẩm</a>
                    </li>

                    <li><a href="{{url('/Product')}}"><i class="zmdi zmdi-apps zmdi-hc-fw"></i> Quản lý sản phẩm</a></li>
                    <li><a href="{{url('/Order')}}"><i class="zmdi zmdi-local-atm zmdi-hc-fw"></i> Quản lý hoá đơn</a></li>
                    <li><a href="{{url('/Account')}}"><i class="zmdi zmdi-accounts-list zmdi-hc-fw"></i> Quản lý tài khoản</a>
                    </li>
                    <li><a href="{{url('/Blog')}}"><i class="zmdi zmdi-collection-text zmdi-hc-fw"></i>Quản lý bài viết</a>
                    </li>
                    <li><a href="{{url('/thongke')}}"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>Thống kê báo cáo</a>
                    </li>
                    
                </ul>
            </div>
        </aside>

        <aside class="chat">
            <div class="chat__header">
                <h2 class="chat__title">Chat <small>Currently 20 contacts online</small></h2>

                <div class="chat__search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <i class="form-group__bar"></i>
                    </div>
                </div>
            </div>

            <div class="scrollbar-inner">
                <div class="listview listview--hover chat__buddies">
                    <a class="listview__item chat__available">
                        {{-- <img src="demo/img/profile-pics/7.jpg" class="listview__img" alt=""> --}}

                        <div class="listview__content">
                            <div class="listview__heading">Jeannette Lawson</div>
                            <p>hey, how are you doing.</p>
                        </div>
                    </a>

                    <a class="listview__item chat__available">
                        {{-- <img src="demo/img/profile-pics/5.jpg" class="listview__img" alt=""> --}}

                        <div class="listview__content">
                            <div class="listview__heading">Jeannette Lawson</div>
                            <p>hmm...</p>
                        </div>
                    </a>

                    <a class="listview__item chat__away">
                        {{-- <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt=""> --}}

                        <div class="listview__content">
                            <div class="listview__heading">Jeannette Lawson</div>
                            <p>all good</p>
                        </div>
                    </a>

                    <a class="listview__item">
                        {{-- <img src="demo/img/profile-pics/8.jpg" class="listview__img" alt=""> --}}

                        <div class="listview__content">
                            <div class="listview__heading">Jeannette Lawson</div>
                            <p>morbi leo risus portaac consectetur vestibulum at eros.</p>
                        </div>
                    </a>

                    <a class="listview__item">
                        {{-- <img src="demo/img/profile-pics/6.jpg" class="listview__img" alt=""> --}}

                        <div class="listview__content">
                            <div class="listview__heading">Jeannette Lawson</div>
                            <p>fusce dapibus</p>
                        </div>
                    </a>

                    <a class="listview__item chat__busy">
                        {{-- <img src="demo/img/profile-pics/9.jpg" class="listview__img" alt=""> --}}

                        <div class="listview__content">
                            <div class="listview__heading">Jeannette Lawson</div>
                            <p>cras mattis consectetur purus sit amet fermentum.</p>
                        </div>
                    </a>
                </div>
            </div>

            <a href="messages.html" class="btn btn--action btn-danger"><i class="zmdi zmdi-plus"></i></a>
        </aside>

        <section class="content">

            @yield('admin_content')

            <footer class="footer hidden-xs-down">
                <p>© Material Admin Responsive. All rights reserved.</p>

                <ul class="nav footer__nav">
                    <a class="nav-link" href="">Homepage</a>

                    <a class="nav-link" href="">Company</a>

                    <a class="nav-link" href="">Support</a>

                    <a class="nav-link" href="">News</a>

                    <a class="nav-link" href="">Contacts</a>
                </ul>
            </footer>
        </section>
    </main>

    <!-- Older IE warning message -->
    <!--[if IE]>
                <div class="ie-warning">
                    <h1>Warning!!</h1>
                    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

                    <div class="ie-warning__downloads">
                        <a href="http://www.google.com/chrome">
                            <img src="img/browsers/chrome.png" alt="">
                        </a>

                        <a href="https://www.mozilla.org/en-US/firefox/new">
                            <img src="img/browsers/firefox.png" alt="">
                        </a>

                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                        </a>

                        <a href="https://support.apple.com/downloads/safari">
                            <img src="img/browsers/safari.png" alt="">
                        </a>

                        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                            <img src="img/browsers/edge.png" alt="">
                        </a>

                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                        </a>
                    </div>
                    <p>Sorry for the inconvenience!</p>
                </div>
            <![endif]-->

    <!-- Javascript -->
    <!-- Vendors -->
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
        .create(document.querySelector('#Note'))
        .catch(error=>{
            console.error(error);
        });                                             
    </script>
    <script src="{{asset('backend/vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backend/vendors/popper.js/popper.min.js')}}"></script>
    <script src="{{asset('backend/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/vendors/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('backend/vendors/jquery-scrollLock/jquery-scrollLock.min.js')}}"></script>

    <script src="{{asset('backend/vendors/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('backend/vendors/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('backend/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <script src="{{asset('backend/vendors/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('backend/vendors/jqvmap/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('backend/vendors/easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('backend/vendors/salvattore/salvattore.min.js')}}"></script>
    <script src="{{asset('backend/vendors/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('backend/vendors/moment/moment.min.js')}}"></script>
    <script src="{{asset('backend/vendors/fullcalendar/fullcalendar.min.js')}}"></script>

    <!-- Charts and maps-->
    <script src="{{asset('backend/demo/js/flot-charts/curved-line.js')}}"></script>
    <script src="{{asset('backend/demo/js/flot-charts/dynamic.js')}}"></script>
    <script src="{{asset('backend/demo/js/flot-charts/line.js')}}"></script>
    <script src="{{asset('backend/demo/js/flot-charts/chart-tooltips.js')}}"></script>
    <script src="{{asset('backend/demo/js/other-charts.js')}}"></script>
    <script src="{{asset('backend/demo/js/jqvmap.js')}}"></script>

    <!-- App functions and actions -->
    {{-- Data table --}}
    <script src="{{asset('backend/vendors/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('backend/vendors/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/vendors/datatables-buttons/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('backend/vendors/datatables-buttons/buttons.print.min.js')}}"></script>
    <script src="{{asset('backend/vendors/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('backend/vendors/datatables-buttons/buttons.html5.min.js')}}"></script>
    {{-- end Data table --}}
    <script src="{{asset('backend/js/app.min.js')}}"></script>
    <script src="{{asset('backend/vendors/jquery-mask-plugin/jquery.mask.min.js')}}"></script>
    <script src="{{asset('backend/vendors/select2/js/select2.full.min.js')}}"></script>
    <script src="{{asset('backend/vendors/dropzone/dropzone.min.js')}}"></script>
    <script src="{{asset('backend/vendors/moment/moment.min.js')}}"></script>
    <script src="{{asset('backend/vendors/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('backend/vendors/trumbowyg/trumbowyg.min.js')}}"></script>
    <script src="{{asset('backend/vendors/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{asset('backend/vendors/rateyo/jquery.rateyo.min.js')}}"></script>
    <script src="{{asset('backend/vendors/jquery-text-counter/textcounter.min.js')}}"></script>
    <script src="{{asset('backend/vendors/autosize/autosize.min.js')}}"></script>
    <script src="{{asset('backend/vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{asset('backend/vendors/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('backend/vendors/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{url('editor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{url('editor/ckfinder/ckfinder.js')}}"></script>
    @yield('js')
</body>

</html>