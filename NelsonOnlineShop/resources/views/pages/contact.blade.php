@extends('layout.layout_shopping-cart')
@section('content')

        <div class="conact-section section pt-85 pt-lg-65 pt-md-55 pt-sm-45 pt-xs-35  pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-form-wrap">
                            <h3 class="contact-title">Viết cho chúng tôi</h3>
                            <form id="contact-form" action="assets/php/mail.php" method="post">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="name-fild-padding mb-sm-30 mb-xs-30">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="contact-form-style mb-20">
                                                        <label class="fild-name">Tên</label>
                                                        <input name="name" placeholder="" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="contact-form-style mb-20">
                                                        <label class="fild-name">Email</label>
                                                        <input name="email" placeholder="" type="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="check-box">
                                                        <input type="checkbox" id="create_account">
                                                        <label for="create_account">Tôi không phải robot</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="contact-form-style bl">
                                            <label class="fild-name pl-15">Tin nhắn</label>
                                            <textarea class="pl-15" name="message" placeholder="Viết tin nhắn tại đây.."></textarea>
                                            <button class="btn" type="submit"><span>Gửi tin nhắn</span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--Contact section end-->
        <!--Contact Map section start-->
        <div class="contact-map-section section">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8394.484060789484!2d106.14604728187958!3d20.268441778532782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313674cf4ab35ba1%3A0x7b0dc127141f05bd!2zTmdoxKlhIFRo4buLbmgsIE5naMSpYSBIxrBuZyBEaXN0cmljdCwgTmFtIERpbmgsIFZpZXRuYW0!5e1!3m2!1sen!2s!4v1592971257165!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

@endsection