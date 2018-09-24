@extends('admin.layouts.app')
@section('title-content')
    Tạo Danh Mục Sản Phẩm
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
        <form action="{{route('category_prd_save')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="col-md-8">
                <label>Tên Danh Mục <span style="color: red">(*)</span></label>
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên danh mục ..." value="{{old('name')}}">
                </div>
                @if ($errors->has('name'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('name') }}</p>
                @endif
            </div>
            <div class=" col-md-8" style="margin-top: 20px">
                <button type="submit" class="btn btn-primary"> Tạo Danh Mục</button>
            </div>
        </form>
    </div>
    <div class="col-md-8" style="padding-top: 20px">
            <h3>
                Danh Sách Danh Mục
            </h3>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Tên</th>
                <th>Ngày Tạo</th>
            </tr>
            </thead>
            <tbody>
            @if(!empty($category))
                @foreach($category as $value)
                <tr>
                    <td>{{$value['name']}}</td>
                    <td>{{$value['created_at']}}</td>
                </tr>
                @endforeach
             @endif
            </tbody>
        </table>
    </div>
@endsection