<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Nelson - Nội thất hàng đầu Việt Nam</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="{{asset('frontend/images/favicon.ico')}}" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="{{asset('frontend/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/vendor/iconfont.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/vendor/helper.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/plugins/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <!-- Modernizr JS -->
    <script src="{{asset('frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>

    <div id="main-wrapper">
        @include('layout.header')
        @include('layout.banner')
        <!-- Shop Section Start -->
        <div class="shop-section section pt-60 pt-lg-40 pt-md-30 pt-sm-20 pt-xs-30  pb-70 pb-lg-50 pb-md-40 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="shop-area">
                            
                            
                                @yield('content')
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Section End -->
    </div>

    <!-- Placed js at the end of the document so the pages load faster -->
    @include('layout.footer')

    <!-- All jquery file included here -->
    <script src="{{asset('frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
    <script src="{{asset('frontend/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/plugins/plugins.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
    {{-- <script>
        function mySelect(){
            if($('#selected').val()=="Price, low to high"){
                $.ajax({
                    url: '/SortbyL'
                    
                })
            }
        }
    </script> --}}

    <script>
        $(document).ready(function(){
            $('.wide').off('change').on('change',function(){
                $("#form_order").submit();
            });
        });
    
    </script>
</body>

</html>
