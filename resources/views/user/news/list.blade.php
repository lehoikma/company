@extends('user.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12" style="padding-bottom: 15px;
    border-bottom: 1px solid #fff3f3;">Trang Chủ > Sản Phẩm > {{$title}}</div>
        <h3 class="col-md-12" style="margin-bottom: 20px">Danh Sách Sản Phẩm</h3>
            @foreach($listNewsCategory as $value)
                <div class="col-xs-12" style="margin-bottom: 30px; float: left">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="float: left">
                        <a href="{{route('news_detail', ['title' => $value['title'], 'id' => $value['id']])}}">
                            <img src="/upload/{{$value['image']}}" style="width: 200px; height: 150px">
                        </a>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" style="float: left">
                        <a style="font-family: SFD-Bold;font-size: 20px;line-height: 26px;color: #333;text-decoration: none;display: block;margin-bottom: 10px;font-weight: bold;margin-top: -5px;" href="{{route('news_detail', ['title' => $value['title'], 'id' => $value['id']])}}">
                            {{$value['title']}}
                        </a>
                        <span class="time-posted">Ngày: {{date_format(date_create($value['created_at']), 'Y-m-d')}}</span>
                        <p>{!! substr($value['content'], 0, 200) !!} ... </p>
                    </div>
                </div>
            @endforeach
    </div>
    <div class="text-center">{{$listNewsCategory->links()}}</div>
@endsection