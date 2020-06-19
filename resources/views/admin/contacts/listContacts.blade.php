@extends('admin.layouts.app')
@section('title-content')
    Liên Hệ
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
                                                Tên
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">
                                                Số Điện Thoại
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">
                                                Email
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">
                                                Nội Dung
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">
                                                Ngày tạo
                                            </th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($contacts as $value)
                                            <tr role="row">
                                                <td>{{$value['name']}}</td>
                                                <td>{{$value['phone']}}</td>
                                                <td>{{$value['email']}}</td>
                                                <td>{{$value['content']}}</td>
                                                <td>{{$value['created_at']}}</td>
                                                <td>
                                                    @if($value['status'] == 0)
                                                        <a href="{{route('update_status_contacts', $value['id'])}}">
                                                            <button class="btn btn-danger btn-sm">Liên Hệ</button>
                                                        </a>
                                                    @else
                                                        <button class="btn btn-primary btn-sm" data-id="{{$value['id']}}">Đã Liên Hệ</button>
                                                    @endif
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
                "order": [[ 4, "desc" ]],
                "pageLength": 10,
                "paging": true,
                "info" : false
            });
            $(".alert" ).fadeOut(10000);
        });
    </script>
@endsection