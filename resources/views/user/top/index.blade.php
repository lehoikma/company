@extends('user.layouts.app')
@section('slide')
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
            <?php
            $catePrd = \App\Models\ProductsLanguages::User()->orderBy('updated_at', 'desc')->limit(10)->get();
            ?>
            @foreach($catePrd as $key=>$value)
                <div class="carousel-item col-md-3 {{$key == 0 ? 'active' : ''}}">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 1" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="/upload/{{$value['image']}}">
                            </a>
                            <p>{{$value['name']}}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection
@section('content')
    <!-- san pham -->

    <div id="ja-feature-products" class="row">
        <?php
        $catePrd = \App\Models\CategoryProductsLanguages::User()->get();

        ?>
        @foreach($catePrd as $value)
            <div class="col-md-12" style="margin-top: 5px;padding-bottom: 3px;font-weight: bold;margin-bottom: 10px;">
                <div class="title-hd">
                    <h5> {{mb_strtoupper($value['name'], 'UTF-8')}}</h5>
                </div>
            </div>
            <?php
                $catePrd1 = \App\Models\ProductsLanguages::User()->where('category_product_id', $value['id'])->orderBy('updated_at', 'desc')->limit(3)->get();
            ?>
            @foreach($catePrd1 as $key=>$value)
                <div class="col-md-4 col-xs-12" style="margin-bottom: 10px">
                    <a class="title-name" style="font-size: 16px">{{$value['name']}}</a>
                    <div class="img-height">
                        <a href="{{route('products_detail', ['title' => str_slug($value['name']), 'id' => $value['products_id']])}}">
                            <img src="/upload/{{$value['image']}}" alt="{{$value['id']}}">
                        </a>
                    </div>
                    <div class="text-center" style="    border: 1px solid #ee9600;
        padding: 4px;
        border-radius: 5px;">
                        <a class="promotional" style="font-size: 16px">Giá : {{$value['price'] ? $value['price'].' VNĐ' : 'Liên Hệ'}}</a>
                    </div>
                    <input id="{{$value['id']}}" type="hidden" value="/upload/{{$value['image']}}">
                </div>
            @endforeach
        @endforeach
    <!-- san pham -->
    </div>

    <!-- hoi dap -->
    <div class="row">
        <?php
            $categoryNews = \App\Models\CategoriesNewsLanguage::User()->get();
        ?>
        @foreach($categoryNews as $key=>$value)
            <?php $newsLanguage = \App\Models\NewsLanguage::User()->where('category_news_id', $value['news_category_id'])->get();?>
            <div class="hdap col-md-6 col-sx-12">
            <a href="" class="hdaps" id="{{$value['news_category_id']}}">
                <div class="title-hd">
                    <h5> {{mb_strtoupper($value['name'], 'UTF-8')}}</h5>
                </div>
            </a>

            @if(count($newsLanguage) > 0)
                <div class="tt-text">
                    <ul style="padding: 0px;" class="ul-news">
                        @foreach($newsLanguage as $key=>$valueNews)
                            @if($key == 0)
                                <div class="first-news">
                                    <li>
                                        <a href="{{route('news_detail', ['title' => str_slug($newsLanguage[0]['title']), 'id' => $newsLanguage[0]['news_id']])}}">
                                            <img src="/upload/{{$newsLanguage[0]['image']}}" alt="" style="width: 100%; margin-top: 10px;">
                                        </a>
                                    </li>
                                    <li style="margin: 10px 0px;">
                                        <a href="{{route('news_detail', ['title' => str_slug($newsLanguage[0]['title']), 'id' => $newsLanguage[0]['news_id']])}}">
                                            <ins style="font-size: 14px;color: #bb0000;text-decoration: none;font-weight: bold;">{{$newsLanguage[0]['title']}}</ins>
                                        </a>
                                    </li>
                                    <li>
                                        <p>{{substr(strip_tags($newsLanguage[0]['content']), 0, 200)}} ...</p>
                                    </li>
                                </div>
                                @continue;
                            @endif
                                @if($key < 5)
                                <li style="float: left">
                                    <div class="col-md-4 {{$key}}" style="float: left; padding: 0px">
                                        <a href="{{route('news_detail', ['title' => str_slug($valueNews['title']), 'id' => $valueNews['news_id']])}}">
                                        <img src="/upload/{{$valueNews['image']}}" alt="" style="width: 100%; margin-top: 10px;">
                                        </a>
                                    </div>
                                    <div class="col-md-8" style="float: left">
                                        <a href="{{route('news_detail', ['title' => str_slug($valueNews['title']), 'id' => $valueNews['news_id']])}}">
                                            <ins style="    font-size: 12px;
    color: #bb0000;
    text-decoration: none;
    font-weight: bold;">{{$valueNews['title']}}</ins>
                                        </a>
                                    </div>
                                </li>
                                @endif
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        @endforeach

            <div class="hdap col-md-6 col-sx-12">
                <a href="" class="hdaps" id="1">
                    <div class="title-hd">
                        <h5> Videos</h5>
                    </div>
                </a>
                <?php
                    $videos = \App\Models\Videos::orderBy('id', 'desc')->limit(2)->get();
                ?>
                @foreach($videos as $k => $video)
                    <div class="tt-text">
                        <ul style="padding: 0px;" class="ul-news">
                            <div class="first-news video-top">
                                <li style="margin-top: 10px">
                                    {!! $video['videos'] !!}
                                </li>
                                <li style="margin: 10px 0px;">
                                    <a href="">
                                        <ins style="font-size: 14px;color: #bb0000;text-decoration: none;font-weight: bold;">Treo tranh Phong Thủy mang may mắn đến cho nhà bạn</ins>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </div>
                @endforeach
            </div>
    </div>
    <!-- hoi dap -->
@endsection
@section('script')
    <script language="javascript">
      var childPic=document.getElementById("ja-feature-products").getElementsByTagName("img");
      for(var i=0;i<childPic.length;i++)
      {
        var alter='';
        alter=childPic[i].alt;
        childPic[i].setAttribute("onmouseover","onPicOver('"+alter+"');");
        childPic[i].setAttribute("onmouseout","onPicOut();");
      }

      function onPicOver(d)
      {
        var domain = document.location.hostname;
        var inp=document.getElementById(d);
        var src="http://"+domain+ inp.value;
        console.log(src);
        var img="<img src='"+ src +"' width='350px' />";
        Tip(img);
      }

      function onPicOut()
      {
        UnTip();
      }

    </script>
    <script src="/js/wz_tooltip.js" language="javascript" type="text/javascript"></script>
@endsection