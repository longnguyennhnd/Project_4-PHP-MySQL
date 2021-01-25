@extends('layout_thongke')
@section('admin_content')

<meta name="csrf-token" content="{{ csrf_token() }}">
<section class="content">
    <header class="content__title">
        <h1>Widgets</h1>

        <div class="actions">
            <a href="" class="actions__item zmdi zmdi-trending-up"></a>
            <a href="" class="actions__item zmdi zmdi-check-all"></a>

            <div class="dropdown actions__item">
                <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="" class="dropdown-item">Refresh</a>
                    <a href="" class="dropdown-item">Manage Widgets</a>
                    <a href="" class="dropdown-item">Settings</a>
                </div>
            </div>
        </div>
    </header>

    <div class="row quick-stats">
        <div class="col-sm-6 col-md-3">
            <div class="quick-stats__item bg-blue">
                <div class="quick-stats__info">
                    <h2>{{$tonghoadontrongnam}}</h2>
                    <small>Tổng số hoá đơn</small>
                </div>

                <div class="quick-stats__chart sparkline-bar-stats">{{$thang1}},{{$thang2}},{{$thang3}},{{$thang4}},{{$thang5}},{{$thang6}},{{$thang7}},{{$thang8}},{{$thang9}},{{$thang10}},{{$thang11}},{{$thang12}}</div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="quick-stats__item bg-amber">
                <div class="quick-stats__info">
                    <h2>{{$tongsanpham}}</h2>
                    <small>Tổng SP đã bán</small>
                </div>
                
                <div class="quick-stats__chart sparkline-bar-stats">{{$thang1}},{{$spthang2}},{{$spthang3}},{{$spthang4}},{{$spthang5}},{{$spthang6}},{{$spthang7}},{{$spthang8}},{{$spthang9}},{{$spthang10}},{{$spthang11}},{{$spthang12}}</div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="quick-stats__item bg-purple">
                <div class="quick-stats__info">
                    <h2>{{number_format($tongdoanhthu)}}đ</h2>
                    <small>Tổng doanh thu</small>
                </div>

                <div class="quick-stats__chart sparkline-bar-stats">{{$dtthang1}},{{$dtthang2}},{{$dtthang3}},{{$dtthang4}},{{$dtthang5}},{{$dtthang6}},{{$dtthang7}},{{$dtthang8}},{{$dtthang9}},{{$dtthang10}},{{$dtthang11}},{{$dtthang12}}</div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="quick-stats__item bg-red">
                <div class="quick-stats__info">
                    <h2>{{$tongthanhvientrongnam}}</h2>
                    <small>Tổng số thành viên</small>
                </div>

                <div class="quick-stats__chart sparkline-bar-stats">{{$tvthang1}},{{$tvthang2}},{{$tvthang3}},{{$tvthang4}},{{$tvthang5}},{{$tvthang6}},{{$tvthang7}},{{$tvthang8}},{{$tvthang9}},{{$tvthang10}},{{$tvthang11}},{{$tvthang12}}</div>
            </div>
        </div>
    </div>

    <hr>
    <br>
    <br>

        {{-- <div class="col-md-6"> --}}
        <h3 for="">Chọn tháng bạn cần thống kê</h3>
        <br>
          <input type="month" name="" id="month" onchange="getMonth()">
        <div id="changeMonth" style="margin-top: 40px;">
            <table style="color:darkorange;" class="table table-bordered">
                <thead class="thead-default">
                    <tr>
                        <th style="text-align: center;">Tên khách hàng</th>
                        <th style="text-align: center;">Email</th>
                        <th style="text-align: center;">Địa chỉ</th>
                        <th style="text-align: center;">Tổng tiền</th>
                        <th style="text-align: center;">Số điện thoại</th>
                        <th style="text-align: center;">Ngày đặt</th>
                    </tr>
                </thead>
                <tbody id="vs-list" name='vs-list'>
                    <tr>
                        <td style="text-align: center;"></td>
                        <td style="text-align: center;"></td>
                        <td style="text-align: center;"></td>
                        <td style="text-align: center;"></td>
                        <td style="text-align: center;"></td>
                        <td style="text-align: center;"></td>
                    </tr>
                </tbody>
                
            </table>
            <h4>Doanh thu tháng: </h4>
        </div>
        {{-- </div> --}}
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    {{-- <div class="row quick-stats">
        <div class="col-sm-6 col-md-3">
            <div class="quick-stats__item bg-blue">
                <div class="quick-stats__info">
                    <h2>987,459</h2>
                    <small>Total Website Traffics</small>
                </div>

            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="quick-stats__item bg-amber">
                <div class="quick-stats__info">
                    <h2>356,785K</h2>
                    <small>Total Website Impressions</small>
                </div>

            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="quick-stats__item bg-purple">
                <div class="quick-stats__info">
                    <h2>$58,778</h2>
                    <small>Total Online Sales</small>
                </div>

            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="quick-stats__item bg-red">
                <div class="quick-stats__info">
                    <h2>214</h2>
                    <small>Total Support Tickets</small>
                </div>

            </div>
        </div>
    </div> --}}
    <hr>
    <br>
    <br>


    <h3>Thống kê hoá đơn theo ngày</h3>
    <div data-columns>
        <div class="card widget-calendar">
            <label for="">Ngày</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                </div>
                <input type="date" class="form-control hidden-md-up" placeholder="Chọn ngày">
                <input name="date" onchange="getDate();" id="date" type="text" class="form-control date-picker hidden-sm-down" placeholder="Chọn ngày">
            </div>
        </div>
    </div>

    <div class="card card--inverse widget-past-days">
        <div id="change-stat">
            <div class="card-body">
                <h4 class="card-title">Các đơn hàng trong ngày</h4>
            </div>
                <table style="color:darkorange;" class="table table-bordered">
                    <thead class="thead-default">
                        <tr>
                            <th style="text-align: center;">Tên khách hàng</th>
                            <th style="text-align: center;">Email</th>
                            <th style="text-align: center;">Địa chỉ</th>
                            <th style="text-align: center;">Tổng tiền</th>
                            <th style="text-align: center;">Số điện thoại</th>
                            <th style="text-align: center;">Ngày đặt</th>
                        </tr>
                    </thead>
        
                    <tbody id="vs-list" name='vs-list'>
                        
                        <tr>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;"></td>
                        </tr>
                        
                    </tbody>
                    
                        <h3 style="margin-top: 50px;">Doanh thu của ngày: </h3>
                            
                
                </table>
            </div>
        </div>
        
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
@endsection


<script>
        var token = '{{ csrf_token() }}';
        function getDate(){
            var date = $('#date').val();
            $.ajax({
                url: '/thongkedoanhthu',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{
                    date:date, 
                },
            }).done(function (response) {
                console.log(response);
                $('#change-stat').empty();
                $('#change-stat').html(response);
               
            });
        }
         

        function getMonth(){
            var month = $('#month').val();
            console.log(month);
            
            $.ajax({
                url: '/thongketheothang',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{
                    month:month, 
                },
            }).done(function (response) {
                console.log(response);
                $('#changeMonth').empty();
                $('#changeMonth').html(response);
               
            });
            
        }
</script>