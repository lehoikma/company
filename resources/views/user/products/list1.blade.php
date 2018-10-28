@extends('user.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12" style="padding-bottom: 15px;
    border-bottom: 1px solid #fff3f3;">Trang Chủ > Sản Phẩm</div>
        <h3 class="col-md-12" style="margin-bottom: 20px">Danh Sách Sản Phẩm</h3>
        @foreach($data as $value)
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single-post" style="margin-bottom: 30px;overflow-x: hidden;">
                <div class="post-thumb">
                    <a href="{{route('products_detail', ['title' => str_slug($value['name']), 'id' => $value['id']])}}">
                        <img style="width: 100%; height: 180px" src="/upload/{{$value['image']}}" alt="" title="{{$value['name']}}">
                    </a>
                </div>

                <h5 class="small-font" style="text-align: center;margin-top: 10px;">
                    <a href="{{route('products_detail', ['title' => str_slug($value['name']), 'id' => $value['id']])}}" style="color: #0a0a0a">
                        {{$value['name']}}
                    </a>
                </h5>
            </div>
        @endforeach
    </div>
    <div class="text-center">{{$data->links()}}</div>
@endsection