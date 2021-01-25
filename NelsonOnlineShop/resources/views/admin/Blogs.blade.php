@extends('admin_layout')
@section('admin_content')

<meta name="csrf-token" content="{{ csrf_token() }}">
<header class="content__title">
    <h1>QUẢN LÝ BÀI VIẾT</h1>
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
                        <label for="">Tiêu đề: </label>
                        <input type="text" placeholder="Nhập tiêu đề bài viết" name="title" id="title"
                            class="form-control">
                        <i class="form-group__bar"></i>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Ảnh:</label>
                        <input type="text" name="image" id="image" class="form-control" readonly>
                        <button class="mt-1 mb-1 btn btn-button-1" id="btnChooseImage">Choose image</button>
                        <div id="show_image"></div>
                    </div>
                    <div class="form-group">
                        <label for="" class="d-block">Ảnh khác:</label>
                        <button class="mt-1 mb-1 btn btn-button-1" id="btnChooseImageList">Choose more image</button>
                        <div id="show_image_list" style="display: flex; flex-wrap: wrap">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Đoạn văn 1: </label>
                        <textarea  name="paragraph_1" class="form-control Note" placeholder=""></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Đoạn văn 2: </label>
                        <textarea id="Note" name="paragraph_2" class="form-control Note" placeholder=""></textarea>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="action" id="action" />
                        <input type="hidden" name="hidden_id" id="hidden_id">
                        <input type="submit" name="action_button" id="action_button" value="Add" class="btn btn-info">
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
        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-large">Thêm mới</button>
        <div class="table-responsive">
            
            <table id="data-table" class="table table-bordered">
                <thead class="thead-default">
                    <tr>
                        <th>STT</th>
                        <th>Tiêu đề</th>
                        <th>Ảnh</th>
                        <th>Show on home</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody id="vs-list" name='vs-list'>
                    @foreach ($blogs as $sp=>$item)
                    <tr>
                        <td>{{$sp+1}}</td>
                        <td>{{$item->title}}</td>
                        <td><img src="{{url('/')}}/nelsononlineshop/{{$item->image}}" width="120px;" alt="">
                        </td>
                        <td>
                            @if($item->Show_on_home == 1)
                            <a href="{{ route('Blog.change_show_on_home',['id'=> $item->Id]) }}">
                                <span class="badge badge-success">Active</span>
                            </a>
                            @else
                            <a href="{{ route('Blog.change_show_on_home',['id'=> $item->Id])}}">
                                <span class="badge badge-danger">Unactive</span>
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
                        $("input[name='image']").val(img_input_path);
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
                        <a href="#" class="btnDelMoreImg"><i class="flaticon-delete-can-fill-2" style="color: #d63031; font-size: 20px"></i></a>
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
                var more_image = GetSrcImage();
                var title = $('#title').val();
                var image = $("input[name='image']").val();
                var paragraph_1 = $("textarea[name='paragraph_1']").val();
                var paragraph_2 = $("textarea[name='paragraph_2']").val();
                $.ajax({
                    url: "{{ route('Blog.create') }}",
                    type: 'POST',
                    data: {
                        title: title,
                        image:image,
                        more_image: more_image,
                        paragraph_1: paragraph_1,
                        paragraph_2: paragraph_2
                    },
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
                            setTimeout(function () {
                                window.location.reload();
                            }, 4500);
                            $('#data-table').dataTable().ajax.reload(null, false);
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
                var Quantity = $('#Quantity').val();
                var Image = $("input[name='Image']").val();
                var description = $("textarea[name='description']").val();
                console.log(id);
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
                            setTimeout(function () {
                                window.location.reload();
                            }, 4500);
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
                    $('#mau').hide();
                    $('#sai').hide();
                    $('#kichthuoc').hide();
                    $('#chatlieu').hide();
                    var url = "{!!url('/')!!}";
                    url += '/nelsononlineshop';
                    var html1 = `<img src="${url + html.data.Image}" alt="" height="150px" style="border: 2px solid #5f27cd">`;
                    $('#show_image').html(html1);
                    if (html.data.more_image != null) {
                        $('#show_image_list').html('');
                        $.each(html.images, function (index, value) {
                            var html1 = `<img src="${url + value}" alt="" height="110px" class="mr-1" style="border: 1px solid #5f27cd">`;
                            $('#show_image_list').append(html1);
                        });
                    }
                    else {
                        $('#show_image_list').html('Không có ảnh khác');
                    }

                    $("textarea[name='description']").val(html.data.description);

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
            console.log(id);
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
                        $('#data-table').dataTable().ajax.reload();
                    }, 800);
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
                    setTimeout(function () {
                        window.location.reload();
                    }, 4500);
                }
            })
        });
    });

</script>
@endsection