<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="{{asset('backend/vendors/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
        <link rel="stylesheet" href="{{asset('backend/vendors/animate.css/animate.min.css')}}">
        <!-- App styles -->
        <link rel="stylesheet" href="{{asset('backend/css/app.min.css')}}">
    </head>

    <body data-ma-theme="green">
        <div class="login">

            <!-- Login -->

            <div class="login__block active" id="l-login">
                <div class="login__block__header">
                    <i class="zmdi zmdi-account-circle"></i>
                    Hi there! Vui lòng đăng nhập
                    <?php
                        $messeges = Session::get('messeges');
                        if($messeges){
                            echo $messeges;
                            Session::put('messeges', null);
                        }
                    ?>
                    <div class="actions actions--inverse login__block__actions">
                        <div class="dropdown">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" data-ma-action="login-switch" data-ma-target="#l-register" href="">Tạo tài khoản</a>
                                <a class="dropdown-item" data-ma-action="login-switch" data-ma-target="#l-forget-password" href="">Quên mật khẩu?</a>
                            </div>
                        </div>
                    </div>
                </div>

                <form action="{{URL::to('/admin-dashboard')}}" method="post">
                    {{ csrf_field() }}
                <div class="login__block__body">
                    <div class="form-group form-group--float form-group--centered">
                        <input type="text" name="username" class="form-control">
                        <label>Tài khoản</label>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group form-group--float form-group--centered">
                        <input type="password" name="password" class="form-control">
                        <label>Mật khẩu</label>
                        <i class="form-group__bar"></i>
                    </div>

                    <button href="index.html" type="submit" name="login" class="btn btn--icon login__block__btn"><i class="zmdi zmdi-long-arrow-right"></i></button>
                </div>
            </form>
            </div>


            <!-- Register -->
            <div class="login__block" id="l-register">
                <div class="login__block__header palette-Blue bg">
                    <i class="zmdi zmdi-account-circle"></i>
                    Đăng ký

                    <div class="actions actions--inverse login__block__actions">
                        <div class="dropdown">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" data-ma-action="login-switch" data-ma-target="#l-login" href="">Already have an account?</a>
                                <a class="dropdown-item" data-ma-action="login-switch" data-ma-target="#l-forget-password" href="">Forgot password?</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="login__block__body">
                    <div class="form-group form-group--float form-group--centered">
                        <input type="text" class="form-control">
                        <label>Name</label>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group form-group--float form-group--centered">
                        <input type="text" class="form-control">
                        <label>Email Address</label>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group form-group--float form-group--centered">
                        <input type="password" class="form-control">
                        <label>Password</label>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Accept the license agreement</span>
                        </label>
                    </div>

                    <button href="index.html" class="btn btn--icon login__block__btn"><i class="zmdi zmdi-check"></i></button>
                </div>
            </div>

            <!-- Forgot Password -->
            <div class="login__block" id="l-forget-password">
                <div class="login__block__header palette-Purple bg">
                    <i class="zmdi zmdi-account-circle"></i>
                    Forgot Password?

                    <div class="actions actions--inverse login__block__actions">
                        <div class="dropdown">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" data-ma-action="login-switch" data-ma-target="#l-login" href="">Already have an account?</a>
                                <a class="dropdown-item" data-ma-action="login-switch" data-ma-target="#l-register" href="">Create an account</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="login__block__body">
                    <p class="mt-4">Lorem ipsum dolor fringilla enim feugiat commodo sed ac lacus.</p>

                    <div class="form-group form-group--float form-group--centered">
                        <input type="text" class="form-control">
                        <label>Email Address</label>
                        <i class="form-group__bar"></i>
                    </div>

                    <button href="index.html" class="btn btn--icon login__block__btn"><i class="zmdi zmdi-check"></i></button>
                </div>
            </div>
        </div>

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
        <script src="{{asset('backend/vendors/jquery/jquery.min.js')}}"></script>
<script src="{{asset('backend/vendors/popper.js/popper.min.js')}}"></script>
<script src="{{asset('backend/vendors/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- App functions and actions -->
<script src="{{asset('backend/js/app.min.js')}}"></script>
</body>
</html>