<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nelson - Nội thất hàng đầu Việt Nam</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link rel="stylesheet" href="vendors/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="{{asset('backend/vendors/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/jquery-scrollbar/jquery.scrollbar.css')}}">
    <!-- Modernizr JS -->
    <script src="{{asset('frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <div id="main-wrapper">
        @include('layout.header')
        @yield('content')
        @include('layout.footer')
    </div>


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
    <script>
       function AddCart(id){
            $.ajax({
                url: '/Add-Cart/' + id,
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
                        align: "right"
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
        
        function RenderCart(response) {
            $('#change-item-cart').empty();
            $('#change-item-cart').html(response);
            $('.mini-cart-total').text($("#total-quanty-cart").val());
        }

        function SaveListItemCart(id) {
            console.log();
            $.ajax({
                url: 'Save-Item-List-Cart/' + id + '/' + $("#quanty-item-" + id).val(),
                type: 'GET'
            }).done(function (response) {
                console.log('aaaa');
                RenderListCart(response);
                $.notify({
                    title: 'Thông báo: ',
                    message: 'Cập nhật thành công giỏ hàng',
                    url: ''
                }, {
                    delay: 3000,
                    placement: {
                        from: "bottom",
                        align: "right"
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
        function DeleteListItemCart(id) {
            $.ajax({
                url: 'Delete-Item-List-Cart/' + id,
                type: 'GET'
            }).done(function (response) {
                RenderListCart(response);
                $.notify({
                    title: 'Thông báo: ',
                    message: 'Đã xoá sản phẩm khỏi giỏ hàng',
                    url: ''
                }, {
                    delay: 3000,
                    placement: {
                        from: "bottom",
                        align: "right"
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
        function RenderListCart(response) {
            $('#list-cart').empty();
            $('#list-cart').html(response);
            $('.pro-qty').prepend('<button class="dec qtybtn">-</button>');
            $('.pro-qty').append('<button class="inc qtybtn">+</button>');
            $('.qtybtn').on('click', function () {
                var $button = $(this);
                var oldValue = $button.parent().find('input').val();
                if ($button.hasClass('inc')) {
                    var newVal = parseFloat(oldValue) + 1;
                } else {
                    // Don't allow decrementing below zero
                    if (oldValue > 0) {
                        var newVal = parseFloat(oldValue) - 1;
                    } else {
                        newVal = 0;
                    }
                }
                $button.parent().find('input').val(newVal);
            });
        }
    </script>


    <script>
    function AddCmt() {
        var name = $('#name').val();
        var comment = $("textarea[name='comment']").val();
        var productid = $('#productid').val();
        var email = $('#email').val();
        var rating = $("input[name='stars']:checked"). val();
        $.ajax({
            url: "{{ route('postComment') }}",
            method: "POST",
            enctype: 'multipart/formdata',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                productid: productid,
                name: name,
                comment: comment,
                email: email,
                rating: rating
            },
            dataType: "json",
            success: function (data) {
                if (data.errors) {
                    var er = data.errors[0];
                    $.notify({
                        title: ' Thông báo',
                        message: er,
                        url: ''
                    }, {
                        delay: 3000,
                        placement: {
                            from: "top",
                            align: "bottom"
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

                if (data.ermail) {
                    $.notify({
                        title: ' Thông báo',
                        message: 'Mỗi Email chỉ được đánh giá 1 lần duy nhất'
                    }, {
                        delay: 3000,
                        placement: {
                            from: "top",
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

                if (data.success) {
                    $('#sample_form')[0].reset();
                    $.notify({
                        title: ' Thông báo',
                        message: 'Thêm bình luận thành công',
                        url: ''
                    }, {
                        delay: 3000,
                        placement: {
                            from: "bottom",
                            align: "left"
                        },
                        template: '<div data-notify="container" style="background-color: #32c787;height: 40px;" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
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
                    // alert('OK');
                }
            },
            error: function (error) {
                console.log(error)
            }
        })
    }
</script>
@yield('js')
</body>

</html>