
<div id="changeMonth">
        <div class="card-body">
                <h4 class="card-title">Các hoá đơn đã thanh toán trong tháng {{$mon}}:</h4>
            </div>
                <table class="table table-bordered">
                    <thead class="thead-default">
                        <tr>
                                <th style="text-align: center;">STT</th>
                            <th style="text-align: center;">Tên khách hàng</th>
                            <th style="text-align: center;">Email</th>
                            <th style="text-align: center;">Địa chỉ</th>
                            <th style="text-align: center;">Tổng tiền</th>
                            <th style="text-align: center;">Số điện thoại</th>
                            <th style="text-align: center;">Ngày đặt</th>
                        </tr>
                    </thead>
        
                    <tbody id="vs-list" name='vs-list'>
                        @foreach ($data as $hd=>$item)
                        <tr>
                        <td>{{$hd+1}}</td>
                            <td style="text-align: center;">{{$item->name}}</td>
                            <td style="text-align: center;">{{$item->Email}}</td>
                            <td style="text-align: center;">{{$item->shipping_address}}</td>
                            <td style="text-align: center;">{{number_format($item->total_money)}}đ</td>
                            <td style="text-align: center;">{{$item->phone_number}}</td>
                            <td style="text-align: center;">{{date('d-m-Y', strtotime($item->created_at))}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                           
                </table>
                <h4>Doanh thu tháng {{$mon}}:   {{number_format($doanhthu)}}đ</h4>
</div>