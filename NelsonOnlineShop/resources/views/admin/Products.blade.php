@extends('admin_layout')
@section('admin_content')

<style>
    .table .table {
    background: none !important;
}
</style>

<meta name="csrf-token" content="{{ csrf_token() }}">
<header class="content__title">
    <h1>QUẢN LÝ SẢN PHẨM</h1>
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

<div class="modal fade" id="modal-large" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="text-align: center;">Thêm bản ghi</h4>
            </div>
            <div class="modal-body">
                <span id="form_result"></span>
                <form action="" method="post" id="sample_form" enctype="multipart/formdata">
                    @csrf
                    @method('post')
                    <div class="form-group">
                        <label for="">Tên sản phẩm: </label>
                        <input type="text" placeholder="Nhập tên sản phẩm" name="ProductName" id="ProductName"
                            class="form-control">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group">
                        <label for="">Loại sản phẩm: </label>
                        <select class="form-control" id="categoryID" name="categoryID">
                            @foreach($categories as $l)
                            <option value="{{$l->Id}}">{!!$l->category_name!!}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nhà cung cấp: </label>
                        <select class="form-control" id="SupplierID" name="SupplierID">
                            @foreach($suppliers as $l)
                            <option value="{{$l->Id}}">{{$l->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Giá bán: </label>
                        <input type="text" placeholder="Nhập giá sản phẩm" name="Price" id="Price" class="form-control">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group">
                        <label for="">Giá sale: </label>
                        <input type="text" placeholder="Nhập giá sale sản phẩm" name="Sale_price" id="Sale_price"
                            class="form-control">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group">
                        <div class="card widget-calendar">
                            <label for="">Ngày sale (Áp dụng đến): </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                                </div>
                                <input type="date" class="form-control hidden-md-up" placeholder="Chọn ngày">
                                <input name="Date_sale" id="Date_sale" type="text" class="form-control date-picker hidden-sm-down" placeholder="Chọn ngày">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Số lượng: </label>
                        <input type="number" min="1" max="99" placeholder="Số lượng" name="Quantity" id="Quantity"
                            class="form-control">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh:</label>
                        <input type="text" name="Image" id="Image" class="form-control" readonly>
                        <button class="mt-1 mb-1 btn btn-button-1" id="btnChooseImage">Chọn ảnh</button>
                        <div id="show_image"></div>
                    </div>
                    <div class="form-group">
                        <label for="" class="d-block">Ảnh khác:</label>
                        <button class="mt-1 mb-1 btn btn-button-1" id="btnChooseImageList">Chọn nhiều ảnh</button>
                        <div id="show_image_list" style="display: flex; flex-wrap: wrap">

                        </div>
                    </div>
                    <div style="margin-bottom: 27px;" id="mau" class="btn-group btn-group--colors btn-group-toggle" data-toggle="buttons">
                        <label class="btn bg-light-blue"><input type="checkbox" name="color" value="Sáng xanh" autocomplete="off"></label>
                        <label class="btn bg-brown"><input type="checkbox" name="color" value="Nâu" autocomplete="off"></label>
                        <label class="btn bg-dark"><input type="checkbox" name="color" value="Đen" autocomplete="off"></label>
                        <label class="btn bg-light"><input type="checkbox" name="color" value="Trắng sữa" autocomplete="off"></label>
                    </div>
                    <div class="form-group" id="kichthuoc">
                        <label for="">Kích thước: </label>
                        <input type="text" placeholder="Kích thước" name="size" id="size"
                            class="form-control">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group" id="chatlieu">
                        <label for="">Chất liệu: </label>
                        <input type="text" placeholder="Chất liệu" name="material" id="material"
                            class="form-control">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group" id="chatlieuboc">
                        <label for="">Chất liệu bọc: </label>
                        <input type="text" placeholder="Chất liệu bọc" name="upholstery_material" id="upholstery_material"
                            class="form-control">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả: </label>
                        <textarea name="description" id="Note" class="form-control" placeholder=""></textarea>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="action" id="action" />
                        <input type="hidden" name="hidden_id" id="hidden_id">
                        <input type="submit" name="action_button" id="action_button" value="Add" class="btn btn-outline-primary">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<div class="card">
    <div class="card-body">
        <button class="btn btn-info btn--raised" data-toggle="modal" data-target="#modal-large">Thêm mới</button>
        <div class="table-responsive">
            
            <table id="data-table" class="table table-bordered">
                <thead class="thead-default">
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Loại sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Giá bán</th>
                        <th>Hiện trang chủ</th>
                        <th>Dừng bán</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody id="vs-list" name='vs-list'>
                    @foreach ($products as $sp=>$item)
                    <tr>
                        <td>{{$sp+1}}</td>
                        <td>{{$item->ProductName}}</td>
                        <td>{{$item->productcategories->category_name}}</td>
                        <td><img src="{{url('/')}}/nelsononlineshop/{{$item->Image}}" width="120px;" alt="">
                        </td>
                        <td>{{number_format($item->Price)}}đ</td>
                        <td>
                            @if($item->Show_on_home == 1)
                            <a href="{{ route('product.change_show_on_home',['id'=> $item->Id]) }}">
                                <span class="badge badge-success">Active</span>
                            </a>
                            @else
                            <a href="{{ route('product.change_show_on_home',['id'=> $item->Id])}}">
                                <span class="badge badge-danger">Unactive</span>
                            </a>
                            @endif
                        </td>
                        <td>
                            @if($item->Discontinue == 1)
                            <a href="{{ route('product.change_status',['id'=> $item->Id])}}">
                                <span class="badge badge-danger">Unactive</span>
                            </a>

                            @else
                            <a href="{{ route('product.change_status',['id'=> $item->Id]) }}">
                                <span class="badge badge-success">Active</span>
                            </a>
                            
                            @endif
                        </td>
                        <td><a class="edit" name="edit" id="{{ $item->Id }}"><i class="zmdi zmdi-edit zmdi-hc-fw"
                                    style="color: black"></i></a></td>
                        <td><a id="{{ $item->Id }}" class="delete" name="delete"><i
                                    class="zmdi zmdi-delete zmdi-hc-fw delete-v" style="color: black"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="confirmModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title2" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">Xác nhận</h2>
                </div>
                <div class="modal-body">
                    <h5 align="center"  style="margin:0; font-weight: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">Bạn có chắc muốn xoá dữ liệu này??</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" id="ok_button" name="ok_button" class="swal2-confirm btn btn-danger" aria-label="">OK</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
<script>
    $(document).ready(function () {
        $('#btnChooseImage').on('click', function (event) {
            event.preventDefault();
            var url = "{!!url('/')!!}";
            url += '/nelsononlineshop';
            CKFinder.modal({
                chooseFiles: true,
                width: 1200,
                height: 700,
                onInit: function (finder) {
                    finder.on('files:choose', function (evt) {
                        var file = evt.data.files.first();
                        var img_path = file.getUrl();
                        var img_input_path = img_path.replace(url, '');
                        $("input[name='Image']").val(img_input_path);
                        var img_html = `<img src="${img_path}" alt="" height="150px" style="border: 2px solid #5f27cd">`;
                        $('#show_image').html(img_html);
                    });
                }
            });
        });

        //Click chọn nhiều ảnh
        $('#btnChooseImageList').on('click', function (event) {
            event.preventDefault();
            CKFinder.modal({
                chooseFiles: true,
                width: 1200,
                height: 700,
                onInit: function (finder) {
                    finder.on('files:choose', function (evt) {
                        var file = evt.data.files.first();
                        var img_path = file.getUrl();
                        var html = `<div class="image_list_item" style="border: 2px solid #5f27cd">
                        <img src="${img_path}" alt="" style="height: 70px">
                        <a href="#" class="btnDelMoreImg"><i class="zmdi zmdi-close zmdi-hc-fw"></i></a>
                    </div>`;
                        $('#show_image_list').append(html);
                        $('.btnDelMoreImg').off('click').on('click', function (e) {
                            e.preventDefault();
                            $(this).parent().remove();
                        });
                    });
                }
            });
        });

        $('#create_record').click(function () {
            $('#modal-large').modal('show');
        });
        
        $('#sample_form').on('submit', function (event) {
            event.preventDefault();
            if ($('#action_button').val() == 'Add') {
                var color = GetColor();
                var material = $('#material').val();
                var upholstery_material = $('#upholstery_material').val();
                var size = $('#size').val();
                var more_image = GetSrcImage();
                var ProductName = $('#ProductName').val();
                var categoryID = $('#categoryID').val();
                var SupplierID = $('#SupplierID').val();
                var Price = $('#Price').val();
                var Sale_price = $('#Sale_price').val();
                var Date_sale = $('#Date_sale').val();
                var Quantity = $('#Quantity').val();
                var Image = $("input[name='Image']").val();
                var description = $("textarea[name='description']").val();
                $.ajax({
                    url: "{{ route('Product.create') }}",
                    type: 'POST',
                    data: {
                        color: color,
                        size: size,
                        material:material,
                        upholstery_material: upholstery_material,
                        more_image: more_image,
                        ProductName: ProductName,
                        categoryID: categoryID,
                        SupplierID: SupplierID,
                        Price: Price,
                        Sale_price: Sale_price,
                        Date_sale: Date_sale,
                        Quantity: Quantity,
                        Image: Image,
                        description: description
                    },
                    // contentType: false,
                    enctype: 'multipart/formdata',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
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
                                template: '<div data-notify="container" style="z-index: 9999;position: absolute; background-color: #ff6b68;" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
                                    '<span data-notify="icon"></span> ' +
                                    '<span data-notify="title">{1}</span> ' +
                                    '<span data-notify="message">{2}</span>' +
                                    '<div class="progress" data-notify="progressbar">' +
                                    '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                                    '</div>' +
                                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
                                    '<button type="button" aria-hidden="true" data-notify="dismiss" class="alert--notify__close">Close</button>' +
                                    '</div>'
                            });
                        }
                        if (data.success) {
                            $('#sample_form')[0].reset();
                            $('#action').val('Add');
                            $('#modal-large').modal('hide');
                            $.notify({
                                title: ' Thông báo',
                                message: 'Thêm thành công',
                                url: ''
                            }, {
                                delay: 3000,
                                template: '<div data-notify="container" style="background-color: #32c787;" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
                                    '<span data-notify="icon"></span> ' +
                                    '<span data-notify="title">{1}</span> ' +
                                    '<span data-notify="message">{2}</span>' +
                                    '<div class="progress" data-notify="progressbar">' +
                                    '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                                    '</div>' +
                                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
                                    '<button type="button" aria-hidden="true" data-notify="dismiss" class="alert--notify__close">Close</button>' +
                                    '</div>'
                            });
                            $("#data-table").load(window.location + " #data-table");
                        }
                        console.log(data);
                    },
                    error: function (error) {
                        console.log(error)
                    }
                })
            }
            if ($('#action_button').val() == "Edit") {
                var id = $('#hidden_id').val();
                var more_image = GetSrcImage();
                var ProductName = $('#ProductName').val();
                var categoryID = $('#categoryID').val();
                var SupplierID = $('#SupplierID').val();
                var Price = $('#Price').val();
                var Sale_price = $('#Sale_price').val();
                var Date_sale = $('#Date_sale').val();
                var Quantity = $('#Quantity').val();
                var Image = $("input[name='Image']").val();
                var description = $("textarea[name='description']").val();
                console.log(more_image);
                $.ajax({
                    url: 'Product/update/' + id,
                    method: "POST",
                    data: {
                        more_image: more_image,
                        ProductName: ProductName,
                        categoryID: categoryID,
                        SupplierID: SupplierID,
                        Price: Price,
                        Sale_price: Sale_price,
                        Date_sale: Date_sale,
                        Quantity: Quantity,
                        Image: Image,
                        description: description
                    },
                    enctype: 'multipart/formdata',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: "json",
                    success: function (data) {
                        console.log(data);
                        var html = '';
                        if (data.errors) {
                            var er = data.errors[0];
                            $.notify({
                                title: ' Thông báo',
                                message: er,
                                url: ''
                            }, {
                                delay: 3000,
                                template: '<div data-notify="container" style="z-index: 9999;position: absolute; background-color: #ff6b68;" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
                                    '<span data-notify="icon"></span> ' +
                                    '<span data-notify="title">{1}</span> ' +
                                    '<span data-notify="message">{2}</span>' +
                                    '<div class="progress" data-notify="progressbar">' +
                                    '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                                    '</div>' +
                                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
                                    '<button type="button" aria-hidden="true" data-notify="dismiss" class="alert--notify__close">Close</button>' +
                                    '</div>'
                            });
                        }
                        if (data.success) {
                            $('#sample_form')[0].reset();
                            $('#store_image').html('');
                            $('#modal-large').modal('hide');
                            $.notify({
                                title: ' Thông báo',
                                message: 'Sửa thành công',
                                url: ''
                            }, {
                                delay: 3000,
                                template: '<div data-notify="container" style="background-color: #32c787;" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
                                    '<span data-notify="icon"></span> ' +
                                    '<span data-notify="title">{1}</span> ' +
                                    '<span data-notify="message">{2}</span>' +
                                    '<div class="progress" data-notify="progressbar">' +
                                    '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                                    '</div>' +
                                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
                                    '<button type="button" aria-hidden="true" data-notify="dismiss" class="alert--notify__close">Close</button>' +
                                    '</div>'
                            });
                            $("#data-table").load(window.location + " #data-table");
                        }
                    }
                });
            }
        });


        function GetSrcImage() {
            var srcImages = [];
            var url = "{!!url('/')!!}";
            $.each($('.image_list_item img'), function (index, value) {
                var src = $(value).prop('src');
                src = src.replace(url + '/nelsononlineshop', '');
                srcImages.push(src);
            });
            if (srcImages.length != 0)
                return JSON.stringify(srcImages);
            else
                return '';
        }

        function GetColor() {
            var color = [];
            $.each($("input[name='color']:checked"), function(){
                color.push($(this).val());
            });
            if (color.length != 0)
                return JSON.stringify(color);
            else
                return '';
        }

        //Lấy thông tin sản phẩm

        $(document).on('click', '.edit', function () {
            $('#modal-large').modal('show');
            var id = $(this).attr('id');
            $('#form_result').html(''); 
            $.ajax({
                url: 'Product/edit/' + id,
                dataType: "json",
                success: function (html) {
                    $('#ProductName').val(html.data.ProductName);
                    $('#categoryID').val(html.data.categoryID);
                    $('#SupplierID').val(html.data.SupplierID);
                    $('#Price').val(html.data.Price);
                    $('#Sale_price').val(html.data.Sale_price);
                    $('#Quantity').val(html.data.Quantity);
                    $('#Image').val(html.data.Image);
                    $('#Date_sale').val(html.data.Date_sale);
                    $('#mau').hide();
                    $('#sai').hide();
                    $('#kichthuoc').hide();
                    $('#chatlieu').hide();
                    $('#chatlieuboc').hide();
                    var url = "{!!url('/')!!}";
                    url += '/nelsononlineshop';
                    var html1 = `<img src="${url + html.data.Image}" alt="" height="150px" style="border: 2px solid #5f27cd">`;
                    $('#show_image').html(html1);
                    if (html.images != null) {
                        $('#show_image_list').html('');
                        var html1 = ``;
                        $.each(html.images, function (index, value) {
                            html1 = `<div class="image_list_item" style="border: 2px solid #5f27cd">
                            <img src="${url + value}" alt="" height="70px" class="mr-1" style="border: 1px solid #5f27cd">
                            <a href="#" class="btnDelMoreImg"><i class="zmdi zmdi-close zmdi-hc-fw"></i></a>
                            </div>`;
                            $('#show_image_list').append(html1);
                        });
                        // $('#show_image_list').html(html1);
                        $('.btnDelMoreImg').off('click').on('click', function (e) {
                            e.preventDefault();
                            $(this).parent().remove();
                        });
                    }
                    else {
                        $('#show_image_list').html('Không có ảnh khác');
                    }
                    $("textarea[name='description']").text(html.data.description);
                    $('#hidden_id').val(html.data.Id);
                    $('.modal-title').text("Sửa bản ghi");
                    $('#action_button').val("Edit");
                    $('#action').val("Edit");
                    $('#modal-large').modal('show');
                }
            })
        });

        //Xoá sản phẩm
        var id;
        $(document).on('click', '.delete', function () {
            id = $(this).attr('id');
            $('#confirmModal').modal('show');
        });

        $('#ok_button').click(function () {
            $.ajax({
                url: 'Product/delete/' + id,
                beforeSend: function () {
                    $('#ok_button').text('Deleting...');
                },
                success: function (data) {
                    setTimeout(function () {
                        $('#confirmModal').modal('hide');
                        $("#data-table").load(window.location + " #data-table");
                    }, 700);
                    $.notify({
                        title: ' Thông báo',
                        message: 'Xoá thành công',
                        url: ''
                    }, {
                        delay: 3000,
                        template: '<div data-notify="container" style="background-color: #32c787;" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
                            '<span data-notify="icon"></span> ' +
                            '<span data-notify="title">{1}</span> ' +
                            '<span data-notify="message">{2}</span>' +
                            '<div class="progress" data-notify="progressbar">' +
                            '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                            '</div>' +
                            '<a href="{3}" target="{4}" data-notify="url"></a>' +
                            '<button type="button" aria-hidden="true" data-notify="dismiss" class="alert--notify__close">Close</button>' +
                            '</div>'
                    });
                    $('#ok_button').text('OK');
                }
            })
        });
    });

</script>
@endsection