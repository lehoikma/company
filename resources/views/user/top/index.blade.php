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
            $catePrd1 = \App\Models\ProductsLanguages::User()->orderBy('updated_at', 'desc')->limit(9)->get();
        ?>
        @foreach($catePrd1 as $key=>$value)
            <div class="col-md-4 col-xs-12" style="margin-bottom: 10px">
                <a class="title-name">{{$value['name']}}</a>
                <div class="img-height">
                    <a href="{{route('products_detail', ['title' => str_slug($value['name']), 'id' => $value['products_id']])}}">
                        <img src="/upload/{{$value['image']}}" alt="{{$value['id']}}">
                    </a>
                </div>
                <div class="text-center" style="    border: 1px solid #ee9600;
    padding: 4px;
    border-radius: 5px;">
                    <a class="promotional">Giá : {{$value['price'] ? number_format($value['price']).' VNĐ' : 'Liên Hệ'}}</a>
                </div>
                <input id="{{$value['id']}}" type="hidden" value="/upload/{{$value['image']}}">
            </div>
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
                    <h5> {{strtoupper($value['name'])}}</h5>
                </div>
            </a>
            @if(count($newsLanguage) > 0)
                <div class="tt-text">
                    <a class="linkss" href="">{{$newsLanguage[0]['title']}}</a>
                    <p>{{substr($newsLanguage[0]['content'], 0, 80)}} ...</p>
                    <ul>
                        @foreach($newsLanguage as $key=>$valueNews)
                            @if($key == 0)
                                @continue
                            @endif
                            <li>
                                <a href="">
                                    <ins>{{$valueNews['title']}}</ins>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        @endforeach
    </div>
    <!-- hoi dap -->
@endsection
@section('script')
    <script language="javascript">
      var childPic=document.getElementById("ja-feature-products").getElementsByTagName("img");
console.log(childPic);
      for(var i=0;i<childPic.length;i++)
      {
        var alter='';
        alter=childPic[i].alt;
        childPic[i].setAttribute("onmouseover","onPicOver('"+alter+"');");
        childPic[i].setAttribute("onmouseout","onPicOut();");
      }

      function onPicOver(d)
      {
        var inp=document.getElementById(d);
        console.log(d);
        var src="http://fengshui.local/"+ inp.value;
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