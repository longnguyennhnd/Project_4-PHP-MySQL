<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
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
    <link rel="stylesheet" href="{{asset('backend/vendors/sweetalert2/sweetalert2.min.css')}}">
    <link rel="stylesheet"
        href="{{asset('backend/vendors/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/jquery-scrollbar/jquery.scrollbar.css')}}">
    <!-- Modernizr JS -->
    <script src="{{asset('frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>

    <div id="main-wrapper">

        <!--Header section start-->
        @include('layout.header')
        <!-- main-search start -->
        @include('layout.slide')

        @yield('content')

        @include('layout.footer')
        <!-- Modal Area End -->
    </div>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    <script src="{{asset('frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script
        src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
    <script src="{{asset('frontend/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/plugins/plugins.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
    <script src="{{asset('backend/vendors/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('backend/vendors/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="vendors/jquery/jquery.min.js"></script>
    <script src="{{asset('backend/vendors/popper.js/popper.min.js')}}"></script>
    <script src="{{asset('backend/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
    {{-- <script src="{{asset('backend/vendors/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('backend/vendors/jquery-scrollLock/jquery-scrollLock.min.js')}}"></script> --}}
    <script src="{{asset('backend/vendors/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
    <!-- App functions and actions -->
    <script src="{{asset('backend/js/app.min.js')}}"></script>

    <!-- Demo only -->
    <script src="{{asset('backend/demo/js/demo.js')}}"></script>
    {{-- @include('ckfinder::setup')
    <script type="text/javascript" src="/js/ckfinder/ckfinder.js"></script>
    <script>CKFinder.config( { connectorPath: '/vendor/ckfinder/connector' } );</script> --}}
    <script>
        function AddCart(id) {
            $.ajax({
                url: 'Add-Cart/' + id,
                type: 'GET'
            }).done(function (response) {
                RenderCart(response);
                $.notify({
                    title: 'Thông báo: ',
                    message: 'Đã thêm sản phẩm vào giỏ hàng',
                    url: ''
                }, {
                    delay: 3000,
                    placement: {
                        from: "bottom",
                        align: "left"
                    },
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
            });
        }
        $('#change-item-cart').on("click", ".cart-item-remove i", function () {
            // console.log('aaa');
            $.ajax({
                url: '/Delete-Item-Cart/' + $(this).data("id"),
                type: 'GET',
            }).done(function (response) {
                RenderCart(response);
                $.notify({
                    title: 'Thông báo: ',
                    message: 'Đã xoá sản phẩm khỏi giỏ hàng',
                    url: ''
                }, {
                    delay: 3000,
                    placement: {
                        from: "bottom",
                        align: "left"
                    },
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
            });
        });
        function RenderCart(response) {
            $('#change-item-cart').empty();
            $('#change-item-cart').html(response);
            $('.mini-cart-total').text($("#total-quanty-cart").val());
        }


        function AddWishlist(id){
            $.ajax({
                url: '/Addtowishlist/' + id,
                type: 'GET',
                success: function (data) {
                    if (data.error) {
                        $.notify({
                                title: ' Thông báo',
                                message: 'Sản phẩm này đã tồn tại trong danh sách yêu thích của bạn',
                                url: ''
                            }, {
                                delay: 3000,
                                placement: {
                                    from: "bottom",
                                    align: "left"
                                },
                                template: '<div data-notify="container" style="background-color: #ff6b68;;height: 40px;" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
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
                    }

                    if (data.errorlg) {
                        $.notify({
                                title: ' Thông báo',
                                message: 'Bạn chưa đăng nhập',
                                url: ''
                            }, {
                                delay: 3000,
                                placement: {
                                    from: "bottom",
                                    align: "left"
                                },
                                template: '<div data-notify="container" style="border-radius: 5px; background-color: #ff6b68;;height: 40px;" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
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
                    }

                    if (data.success) {
                            $.notify({
                                title: ' Thông báo',
                                message: 'Đã thêm sản phẩm vào danh sách yêu thích'
                            }, {
                                delay: 3000,
                                placement: {
                                    from: "bottom",
                                    align: "left"
                                },
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
                        }
                }
            })
        }
    </script>

</body>

</html>