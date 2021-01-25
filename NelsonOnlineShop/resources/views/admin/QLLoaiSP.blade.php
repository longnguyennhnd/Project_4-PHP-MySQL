@extends('admin_layout')
@section('admin_content')

<style>
.alert{
    position: relative;
    z-index: 9999999;
    opacity: 1;
}

.table .table {
    background: none !important;
}
</style>
<meta name="csrf-token" content="{{ csrf_token() }}">
    <header class="content__title">
        <h1>QUẢN LÝ LOẠI SẢN PHẨM</h1>
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
                    {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
                    <h4 class="modal-title" style="text-align: center;">Thêm bản ghi</h4>
                </div>
                <div class="modal-body">
                    <span  id="form_result"></span>
                        <form action="" method="post" id="sample_form" enctype="multipart/formdata">
                            @csrf
                            @method('post')
                        <div class="form-group">
                            <input type="text" placeholder="Nhập tên loại sản phẩm" name="category_name" id="category_name" class="form-control">
                            <i class="form-group__bar"></i>
                        </div>
                        <div class="form-group">
                            <label for="">Nhập chủ đề</label>
                            <select  class="form-control" name="themeID" id="themeID">
                                @foreach($themes as $l)
                                <option value="{{$l->Id}}">{!!$l->theme_name!!}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Ảnh:</label>
                            <input type="text" name="Image" id="Image" class="form-control" readonly>
                            <button class="mt-1 mb-1 btn btn-button-1" id="btnChooseImage">Choose image</button>
                            <div id="show_image"></div>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="" name="Note" id="Note" class="form-control"></textarea>
                            {{-- <i class="form-group__bar"></i> --}}
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
                            <th>Tên loại</th>
                            <th>Chủ đề</th>
                            <th>Hình ảnh</th>
                            <th>Ghi chú</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody id="vs-list" name='vs-list'>
                        @foreach ($category as $item)

                            <tr id="row_{{$item->Id}}">
                                <td>{{$item->category_name}}</td>
                                <td>{!!$item->themes->theme_name!!}</td>
                                <td style="text-align: center;"><img src="{{url('/')}}/nelsononlineshop/{{$item->Image}}" style="width: 150px"" alt=""></td>
                                <td>{!!$item->Note!!}</td>
                                <td><a class="edit" name="edit" id="{{ $item->Id }}"><i class="zmdi zmdi-edit zmdi-hc-fw" style="color: black"></i></a></td>
                                <td ><a id="{{ $item->Id }}" class="delete" name="delete"><i class="zmdi zmdi-delete zmdi-hc-fw delete-v" style="color: black"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    {{-- Modal Confirm --}}
    <div id="confirmModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
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
    {{-- End Modal confirm --}}
@endsection

@section('js')
<script>
   $(document).ready(function(){
       //image ckfinder
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

        //show modal
        $('#create_record, .edit').click(function(){
            $('#modal-large').modal('show');
        });
        $('#sample_form').on('submit', function(event){
            event.preventDefault();
            if($('#action_button').val() == 'Add'){
                var category_name = $('#category_name').val();
                var themeID = $('#themeID').val();
                var Note = $('#Note').val();
                var Image = $("input[name='Image']").val();
                $.ajax({
                    url:"{{ route('QLLoaiSP.create') }}",
                    method: "POST",
                    data:{
                        category_name: category_name,
                        themeID: themeID,
                        Note: Note,
                        Image: Image
                    },
                    enctype: 'multipart/formdata',
					headers: {
						'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					},
                    dataType:"json",
                    success: function(data){
                        if(data.errors){
                           var er = data.errors[0];
                           $.notify({
                                title: ' Thông báo',
                                message: er,
                                url: ''
                                },{
                                delay: 3000,
                                template:   '<div data-notify="container" style="z-index: 9999;position: absolute; background-color: #ff6b68;" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
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
                        if(data.success){
                            $('#sample_form')[0].reset();
                            $('#action').val('Add');
                            $('#modal-large').modal('hide');
                                $.notify({
                                title: ' Thông báo',
                                message: 'Thêm thành công',
                                url: ''
                                },{
                                delay: 3000,
                                template:   '<div data-notify="container" style="background-color: #32c787;" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
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
                        // setTimeout(function(){
                        //         window.location.reload();
                        //      }, 4500);
                        // $('#data-table').DataTable().ajax.reload(null, false);
                        $("#data-table").load(window.location + " #data-table");
                        }
                        console.log(data);
                    },
                    error:function(error){
                        console.log(error)
                    }
                })
            }


            if($('#action_button').val() == "Edit")
            {
                var id = $('#hidden_id').val();
                var category_name = $('#category_name').val();
                var themeID = $('#themeID').val();
                var Note = $('#Note').val();
                var Image = $("input[name='Image']").val();
            $.ajax({
                url:'QLLoaiSP/update/' + id,
                method:"POST",
                data:{
                    category_name: category_name,
                    themeID: themeID,
                    Image: Image,
                    Note: Note
                },
                enctype: 'multipart/formdata',
				headers: {
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
				},
                dataType:"json",
                success:function(data)
                {
                    var html = '';
                    if(data.errors)
                    {
                        html = '<div class="alert alert-danger">';
                        for(var count = 0; count < data.errors.length; count++)
                        {
                            html += '<p>' + data.errors[count] + '</p>';
                        }
                    html += '</div>';
                    }
                    if(data.success)
                    {
                        $('#sample_form')[0].reset();
                        $('#store_image').html('');
                        $('#modal-large').modal('hide');
                        $.notify({
                            title: ' Thông báo',
                            message: 'Sửa thành công',
                            url: ''
                        },{
                        delay: 3000,
                        template:   '<div data-notify="container" style="background-color: #32c787;" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
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
    $(document).on('click', '.edit', function(){
            var id = $(this).attr('id');
            $('#form_result').html('');
            $.ajax({
            url:'QLLoaiSP/' + id,
            dataType:"json",
            success:function(html){
                $('#category_name').val(html.data.category_name);
                $('#themeID').val(html.data.themeID);
                var url = "{!!url('/')!!}";
                url += '/nelsononlineshop';
                var html1 = `<img src="${url + html.data.Image}" alt="" height="150px" style="border: 2px solid #5f27cd">`;
                $('#show_image').html(html1);
                $('#Image').val(html.data.Image);
                $("textarea[name='Note']").val(html.data.Note);
                $('#hidden_id').val(html.data.Id);
                $('.modal-title').text("Sửa bản ghi");
                $('#action_button').val("Edit");
                $('#action').val("Edit");
                $('#modal-large').modal('show');
            }
            })
        });

        var id;

        $(document).on('click', '.delete', function(){
            id = $(this).attr('id');
            console.log(id);
            $('#confirmModal').modal('show');
            });

            $('#ok_button').click(function(){
            $.ajax({
            url:'QLLoaiSP/delete/'+id,
            beforeSend:function(){
                $('#ok_button').text('Deleting...');
            },
            success:function(data)
            {
                if (data.errors) {
                $('#confirmModal').modal('hide');
                            $.notify({
                                title: ' Thông báo',
                                message: 'Không thể xoá loại sản phẩm đang có sản phẩm',
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
                setTimeout(function(){
                $('#confirmModal').modal('hide');
                $('#data-table').dataTable().ajax.reload();
                }, 800);
                $.notify({
                            title: ' Thông báo',
                            message: 'Xoá thành công',
                            url: ''
                        },{
                        delay: 3000,
                        template:   '<div data-notify="container" style="background-color: #32c787;" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
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
            })
        });
});

</script>
@endsection

