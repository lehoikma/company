@extends('admin.layouts.app')
@section('title-content')
    Tạo Danh Mục Tic Tức
@endsection
@section('content')
    <div class="col-md-12 flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            @endif
        @endforeach
    </div> <!-- end .flash-message -->
    <div class="col-md-12">
        <form action="{{route('category_news_save')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="col-md-6">
                <label>Tên Danh Mục ( Tiếng Việt )<span style="color: red">(*)</span></label>
                <div class="form-group">
                    <input type="text" name="name[]" class="form-control" placeholder="Nhập tên danh mục ..." value="{{old('name')}}">
                </div>
                @if ($errors->has('name'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('name') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                <label>Tên Danh Mục (Tiếng Anh)</label>
                <div class="form-group">
                    <input type="text" name="name[]" class="form-control" placeholder="Nhập tên danh mục tiếng anh..." value="{{old('name')}}">
                </div>
            </div>
            <div class=" col-md-8" style="margin-top: 20px">
                <button type="submit" class="btn btn-primary"> Tạo Danh Mục</button>
            </div>
        </form>
    </div>

    <div class="col-md-12" style="padding-top: 20px">
        <section class="content" style="padding-top: 0px">
            <div class="row">
                <div class="col-xs-12">
                    <h3>
                        Danh Sách Danh Mục
                    </h3>
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">
                                                    Tên
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">
                                                    Ngày tạo
                                                </th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($category as $value)
                                                <tr role="row">
                                                    <td>{{$value['name']}}</td>
                                                    <td>{{$value['created_at']}}</td>
                                                    <td>
                                                        <a href="{{route('category_news_edit', $value['news_category_id'])}}">
                                                            <button class="btn btn-warning btn-sm" data-id="{{$value['id']}}"><i class="fa fa-edit"></i> Sửa</button>
                                                        </a>
                                                        <a href="{{route('category_news_delete', $value['news_category_id'])}}">
                                                            <button class="btn btn-danger btn-sm" data-id="{{$value['id']}}"><i class="fa fa-trash"></i> Xoá</button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
    </div>
@endsection
@section('script')
    <script>
        $(function () {
            $("#example1").DataTable({
                "pageLength": 10,
                "paging": true,
                "info" : false
            });
            $(".alert" ).fadeOut(10000);
//        $('#example2').DataTable({
//          "pageLength": 3,
//          "paging": true,
//          "lengthChange": false,
//          "searching": false,
//          "ordering": true,
//          "info": true,
//          "autoWidth": false
//        });
        });
    </script>
@endsection