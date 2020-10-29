@extends('admin.layouts.app')
@section('title-content')
    Danh Sách Bài Viết Đấu Giá
@endsection
@section('content')
    <div class="col-md-12 flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            @endif
        @endforeach
    </div> <!-- end .flash-message -->
    <!-- Main content -->
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
                                                Tên bài viết đấu giá
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">
                                                Giá
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">
                                                Thời gian bắt đầu
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">
                                                Thời gian kết thúc
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">
                                                Ngày tạo
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($news as $value)
                                            <tr role="row">
                                                <td>{{$value['title']}}</td>
                                                <td>{{number_format($value['price'])}} VNĐ</td>
                                                <td>{{date_format(new DateTime($value['start_date']), 'd-m-Y H:i')}}</td>
                                                <td>{{date_format(new DateTime($value['end_date']), 'd-m-Y H:i')}}</td>
                                                <td>
                                                    <a href="{{route('show_edit_news', $value['news_id'])}}">
                                                        <button class="btn btn-warning btn-sm" data-id="{{$value['id']}}"><i class="fa fa-edit"></i> Xem, Sửa</button>
                                                    </a>
                                                    <a href="{{route('dau_gia_delete', $value['id'])}}">
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
    <!-- /.content -->

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
        });
    </script>
@endsection