@extends('admin.layouts.app')
@section('title-content')
    Thống Kê Đấu Giá Chi Tiết
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
                <p>Thống kê đấu giá : <strong>{{$news['title']}}</strong></p>
                <p>Mức giá khởi điểm :<strong>{{number_format($news['price'])}} VNĐ</strong></p>
                @if(!empty($bookingCao))
                    <p>Người đấu giá cao nhất : <strong>{{$bookingCao['name']}} - {{number_format($bookingCao['price'])}} VNĐ</strong></p>
                @endif
            </div>
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
                                                Tên
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">
                                                Điện thoại
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">
                                                Giá đấu
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">
                                                Email
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">
                                                Tỉnh
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">
                                                Huyện
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">
                                                Xã
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">
                                                Thời gian đấu giá
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($booking as $value)
                                            <tr role="row">
                                                <td>{{$value['name']}}</td>
                                                <td>{{$value['phone']}}</td>
                                                <td>{{number_format($value['price'])}}</td>
                                                <td>{{$value['email']}}</td>
                                                <td>{{$value['tinh']}}</td>
                                                <td>{{$value['huyen']}}</td>
                                                <td>{{$value['xa']}}</td>
                                                <td>{{$value['created_at']}}</td>
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
                "order": [[ 7, "desc" ]],
                "pageLength": 10,
                "paging": true,
                "info" : false
            });
            $(".alert" ).fadeOut(10000);
        });
    </script>
@endsection