@extends('admin.layouts.app')
@section('title-content')
    Danh Sách Sản Phẩm
@endsection
@section('content')
    <section class="content" style="padding-top: 0px">
        <div class="row">
            <div class="col-xs-12">
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
                                                Name
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">
                                                Hình Ảnh
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">
                                                Giá
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">
                                                Ngày tạo
                                            </th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($listPrd as $value)
                                            <tr role="row">
                                                <td>{{$value['name']}}</td>
                                                <td>{!! $value['image'] ? '<img src="/upload/'.$value['image'].'" width="100">' : '' !!}</td>
                                                <td>{{$value['price']}}</td>
                                                <td>{{$value['created_at']}}</td>
                                                <td>
                                                    <a href="{{route('prd_edit', $value['products_id'])}}">
                                                        <button class="btn btn-warning btn-sm" data-id="{{$value['id']}}"><i class="fa fa-edit"></i> Sửa</button>
                                                    </a>
                                                    <a href="{{route('prd_delete', $value['products_id'])}}">
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