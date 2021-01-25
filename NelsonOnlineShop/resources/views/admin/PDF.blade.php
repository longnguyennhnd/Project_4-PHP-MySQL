<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<style type="text/css" media="">
html, body{
	font-family: "DejaVu Sans";
}
#bill{
	/*width: 600px;*/
	/*text-align: center;*/
}
#bill .table td{
	border-right:1px solid #444;
	border-bottom:1px solid #444;
	padding: 3px;
}
#bill .table {
	border-left:1px solid #444;
	border-top:1px solid #444;
	padding:0px;
	width: 500px;
	border-spacing: 0px;
}
.table tr{
	margin-left:15px;
}
.td
{
	text-align: center;
	font-weight: bold;
}
</style>
<body>
	<div style="text-align: center">
		<h3>Biên lai</h3>
	</div>

	<div id="bill">
		<table>
			<thead class="thead-light">
                <tr>
                    <th>Thông tin hoá đơn</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tên khách hàng</td>
                    <td>{{$orders->name}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{$orders->Email}}</td>
                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td>{{$orders->phone_number}}</td>
                </tr>
                <tr>
                    <td>Địa chỉ giao hàng</td>
                    <td>{{$orders->shipping_address}}</td>
                </tr>
                <tr>
                    <td>Ngày đặt</td>
                    <td>{{$orders->created_at}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
		</table>
		
		<h4>Danh sách sản phẩm</h4>
		<table class="table">
			<thead class="thead-default">
                <tr>
                    <th style="text-align: center;">STT</th>
                    <th style="text-align: center;">Tên sản phẩm</th>
                    <th style="text-align: center;">Số lượng</th>
                    <th style="text-align: center;">Đơn giá</th>
                    <th style="text-align: center;">Tổng tiền</th>
                    {{-- <th></th> --}}
                </tr>
            </thead>

            <tbody id="vs-list" name='vs-list'>
                @foreach ($orders_detail as $hd=>$item)
                <tr>
                    <td style="text-align: center;"> {{$hd +1}}</td>
                    <td style="text-align: center;">{{$item->products->ProductName}}</td>
                    <td style="text-align: center;">{{$item->quantity}}</td>
                    <td style="text-align: center;">{{number_format($item->price)}}đ</td>
                    <td style="text-align: center;">{{number_format($item->total_money)}}đ</td>
                </tr>
                @endforeach
            </tbody>
		</table>
		<table class="table mb-3">
            <tbody>
                <tr>
                    <td style="font-weight: bold;">Tong tien</td>
                    <td style="float: right; margin-right: 20px; font-weight:bold; color: red">{{number_format($orders->total_money)}}đ</td>
                </tr>
            </tbody>
        </table>
		<h4>Cảm ơn quý khách đã mua hàng!</h4>
	</div>
</body>
</html>