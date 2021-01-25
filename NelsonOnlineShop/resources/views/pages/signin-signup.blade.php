<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Đăng nhập, đăng ký</title>
	<LINK REL="SHORTCUT ICON" HREF="images/icon.ico">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('frontend/css/vendor/font-awesome.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/signinup.css')}}">
	<link rel="stylesheet" href="{{asset('backend/vendors/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
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
</head>

<body>
	<p><?php
		$messeges = Session::get('messeges');
		if($messeges){
			echo '<span id="text-alert">'.$messeges.'</span>';
			Session::put('messeges', null);
		}
?></p>
	
	<div class="container" id="container" style="height: 550px;">
		<div class="form-container sign-up-container">
			<form id="sample_form" method="post">
				{{ csrf_field() }}
				<h1>Đăng ký</h1>
				<div class="social-container">
					<a href="#" class="facebook-bg"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="google-bg"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="linked-bg"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>hoặc sử dụng email để đăng ký</span>
				{{-- pattern="[a-z]{1,15}" --}}
				<input type="text" placeholder="Tài khoản" id="user_name" name="user_name"/>
				<input type="password" id="password" placeholder="Mật khẩu" name="password" />
				<input type="email" class="form-contact" name="Email" id="Email" placeholder="Email">
				<input type="text" placeholder="Họ tên" id="name" name="name" />
				<input type="tel" id="phone_number" name="phone_number" placeholder="Số điện thoại" pattern="(\+84|0)\d{9}" title="Số điện thoại phải là số và có 10 kí tự">
				<input type="text" placeholder="Địa chỉ" name="address" id="address" />
				<button type="submit" name="sign up">Đăng ký</button>
			</form>
		</div>
		<div class="form-container sign-in-container">

			<form id="sample_form2">
				{{ csrf_field() }}
				<h1>Đăng nhập</h1>
				<div class="social-container">
					<a href="#" class="facebook-bg"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="google-bg"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="linked-bg"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>hoặc sử dụng tài khoản của bạn</span>
				<input type="text" required class="form-contact" id="usname" name="username" placeholder="Tài khoản">
				<input type="password" required name="password" id="pw" placeholder="Mật khẩu" />
				<a href="#">Quên mật khẩu?</a>
				<a><button type="submit" name="login">Đăng nhập</button></a>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>
					Để tiếp tục kết nối với chúng tôi, vui lòng đăng nhập với thông tin cá nhân của bạn</p>
					<button class="ghost" id="signIn">Đăng nhập</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Hello, Friend!</h1>
					<p>Nhập thông tin cá nhân của bạn để bắt đầu với chúng tôi</p>
					<button class="ghost" id="signUp">Đăng ký</button>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<p>
			Created with <i class="fa fa-heart"></i> by
			<a target="_blank" href="#">Long Nguyễn</a>
		</p>
	</footer>
	
	<script src="{{asset('backend/vendors/jquery/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/js/signinup.js')}}"></script>
	<script src="{{asset('backend/vendors/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
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
	<script>
		$(document).ready(function(){
			$('#sample_form').on('submit', function(event){
				event.preventDefault();
				var user_name = $('#user_name').val();
				var password = $('#password').val();
				var Email = $('#Email').val();
				var name = $('#name').val();
				var phone_number = $('#phone_number').val();
				var address = $('#address').val();
				$.ajax({
					url:'/dangky',
					type: "POST",
					data: {
						user_name: user_name,
						password: password,
						Email: Email,
						name: name,
						phone_number: phone_number,
						address: address
					},
					enctype: 'multipart/formdata',
					headers: {
						'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					},
					
					dataType:"json",
					success: function(data){
						var html ='';
						if (data.errors) {
                            var er = data.errors[0];
                            $.notify({
                                title: '',
                                message: er,
                                url: ''
                            }, {
                                delay: 3000,
								template: '<div data-notify="container" style="background-color: #ff6b68;height: 40px; border-radius: 4px; width: 320px;" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
                                    '<span  data-notify="icon"></span> ' +
                                    '<span style="font-size: 13px; position: relative;left: 8px; top: 8px;" data-notify="title">{1}</span> ' +
                                    '<span style="font-size: 13px;position: relative;left: 8px; top: 8px;" data-notify="message">{2}</span>' +
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
                                message: 'Đăng ký tài khoản thành công',
                                url: ''
                            }, {
                                delay: 3000,
								template: '<div data-notify="container" style="background-color: #32c787;height: 40px; border-radius: 4px;" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
									'<span  data-notify="icon"></span> ' +
									'<span style="font-size: 13px; position: relative; top: 8px;" data-notify="title">{1}</span> ' +
									'<span style="font-size: 13px;position: relative; top: 8px;" data-notify="message">{2}</span>' +
									'<div class="progress" data-notify="progressbar">' +
									'<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
									'</div>' +
									'<a href="{3}" target="{4}" data-notify="url"></a>' +
									// '<button type="button" aria-hidden="true" data-notify="dismiss" class="alert--notify__close">Close</button>' +
									'</div>'
                            });
                        }
					},
					error:function(error){
						console.log(error)
					}
				})
			});

			$('#sample_form2').on('submit', function(event){
				event.preventDefault();
				var user_name = $('#usname').val();
				var password = $('#pw').val();
				$.ajax({
					url:'/dangnhap',
					type: "POST",
					data: {
						user_name: user_name,
						password: password
					},
					enctype: 'multipart/formdata',
					headers: {
						'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					},
					
					dataType:"json",
					success: function(data){
						var html ='';
						if (data.errors) {
                            $.notify({
                                title: 'Thông báo',
                                message: 'Tài khoản hoặc mật khẩu chưa đúng'
                            }, {
                                delay: 3000,
								template: '<div data-notify="container" style="background-color: #ff6b68;height: 40px; border-radius: 4px; width: 320px;" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
                                    '<span  data-notify="icon"></span> ' +
                                    '<span style="font-size: 13px; position: relative;left: 8px; top: 8px;" data-notify="title">{1}</span> ' +
                                    '<span style="font-size: 13px;position: relative;left: 8px; top: 8px;" data-notify="message">{2}</span>' +
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
                                message: 'Đăng nhập thành công',
                                url: ''
                            }, {
                                delay: 3000,
								template: '<div data-notify="container" style="background-color: #32c787;height: 40px; border-radius: 4px;" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
									'<span  data-notify="icon"></span> ' +
									'<span style="font-size: 13px; position: relative; top: 8px;" data-notify="title">{1}</span> ' +
									'<span style="font-size: 13px;position: relative; top: 8px;" data-notify="message">{2}</span>' +
									'<div class="progress" data-notify="progressbar">' +
									'<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
									'</div>' +
									'<a href="{3}" target="{4}" data-notify="url"></a>' +
									// '<button type="button" aria-hidden="true" data-notify="dismiss" class="alert--notify__close">Close</button>' +
									'</div>'
                            });
                        }
					},
					error:function(error){
						console.log(error)
					}
				})
			});
		});
	</script>
	
</body>
</html>
