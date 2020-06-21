@extends('admin.layouts.app')
@section('title-content')
    Sửa Bài Viết Hình Ảnh
@endsection
@section('content')
    <div class="col-md-12">
        <form method="post" action="{{route('edit_category_image')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tên Danh Mục</label>
                    <input type="hidden" name="id_category_image" value="{{$categoryImage['id']}}">
                    <input type="text" name="name_category_image" class="form-control" value="{{$categoryImage['name']}}">
                    @if ($errors->has('name_category_image'))
                        <p class="help-block text-left" style="color: red">{{ $errors->first('name_category_image') }}</p>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Ảnh đại diện</label>
                    <input type="file" name="fileToUpload">
                    <img id="image" src="/upload/{{$categoryImage['image']}}" style="width: 300px; margin-top: 10px">
                    @if ($errors->has('fileToUpload'))
                        <p class="help-block text-left" style="color: red">{{ $errors->first('fileToUpload') }}</p>
                    @endif
                </div>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Sửa Danh Mục</button>
            </div>
        </form>
    </div>
    <div class="col-md-12" style="border-top: 1px solid #ffffff;"></div>
    <div class="col-md-12" >
        <div class="col-md-12" ><h4>Danh Sách Bài Viết</h4>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th style="width:10%;">STT</th>
                    <th style="width: 15%">Hình Ảnh</th>
                    <th style="width: 40%">Tên Bài Viết</th>
                    <th style="width: 20%">Ngày Tạo</th>
                    <th style="width: 15%"></th>
                </tr>
                </thead>
                <tbody>
                @if(!empty($categoryImages))
                    @foreach($categoryImages as $value)
                        <tr>
                            <td>{{$value['id']}}</td>
                            <td>
                                <img src="/upload/{{$value['image']}}" width="100%">
                            </td>
                            <td>{{$value['name']}}</td>
                            <td>{{$value['created_at']}}</td>
                            <td>
                                <a href="{{route('show_edit_category_image',$value['id'])}}">
                                    <button class="btn btn-warning btn-sm" data-id="{{$value['id']}}"><i class="fa fa-trash"></i> Sửa</button>
                                </a>
                                <a href="{{route('delete_category_image',$value['id'])}}">
                                    <button class="btn btn-danger btn-sm" data-id="{{$value['id']}}"><i class="fa fa-trash"></i> Xoá</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>

    </div>

@endsection