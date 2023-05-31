@extends('layouts.layout')
@section('content')
<h1>Tin tức</h1>
<div class="wrapper-blog">
    <!-- list news -->
    <div class="row">
     @foreach($listNews as $news)
            <div class="col-md-6 article"> <a href="controller=news_detail&id={{$news->id}}" class="image"> <img src="{{asset('upload/news/'.$news->img)}}" alt="{{$news->title}}" title="{{$news->name}}" class="img-responsive"> </a>
                <h3><a href="index.php?controller=news_detail&id=">{{$news->title}}</a></h3>
                <p class="date"></p>
                <p class="desc"></p>
            </div>
    @endforeach

<!--        <div class="col-md-6 article"> <a href="/lg-ra-mat-loat-tv-oled-4k-tich-hop-hdr-tai-ces-2016" class="image"> <img src="asset/frontend/images/tvlg.jpg" alt="LG ra mắt loạt TV OLED 4K tích hợp HDR tại CES 2016" title="LG ra mắt loạt TV OLED 4K tích hợp HDR tại CES 2016" class="img-responsive"> </a>-->
<!--            <h3><a href="/lg-ra-mat-loat-tv-oled-4k-tich-hop-hdr-tai-ces-2016">LG ra mắt loạt TV OLED 4K tích hợp HDR tại CES 2016</a></h3>-->
<!--            <p class="date">08/01/2016</p>-->
<!--            <p class="desc"></p>-->
<!--        </div>-->
<!--        <div class="col-md-6 article"> <a href="/lg-ra-mat-loat-tv-oled-4k-tich-hop-hdr-tai-ces-2016" class="image"> <img src="asset/frontend/images/tvlg.jpg" alt="LG ra mắt loạt TV OLED 4K tích hợp HDR tại CES 2016" title="LG ra mắt loạt TV OLED 4K tích hợp HDR tại CES 2016" class="img-responsive"> </a>-->
<!--            <h3><a href="/lg-ra-mat-loat-tv-oled-4k-tich-hop-hdr-tai-ces-2016">LG ra mắt loạt TV OLED 4K tích hợp HDR tại CES 2016</a></h3>-->
<!--            <p class="date">08/01/2016</p>-->
<!--            <p class="desc"></p>-->
<!--        </div>-->
<!--        <div class="col-md-6 article"> <a href="/lg-ra-mat-loat-tv-oled-4k-tich-hop-hdr-tai-ces-2016" class="image"> <img src="asset/frontend/images/tvlg.jpg" alt="LG ra mắt loạt TV OLED 4K tích hợp HDR tại CES 2016" title="LG ra mắt loạt TV OLED 4K tích hợp HDR tại CES 2016" class="img-responsive"> </a>-->
<!--            <h3><a href="/lg-ra-mat-loat-tv-oled-4k-tich-hop-hdr-tai-ces-2016">LG ra mắt loạt TV OLED 4K tích hợp HDR tại CES 2016</a></h3>-->
<!--            <p class="date">08/01/2016</p>-->
<!--            <p class="desc"></p>-->
<!--        </div>-->
    </div>
    <!-- end list news -->

    <ul class="pagination pull-right" style="margin-top: 0px !important">

        <li><a href="#">Trang</a></li>
        @for($i=1;$i<=$listNews->lastPage();$i++)
            <li><a href="/news?page={{$i}}">{{$i}}</a></li>
        @endfor
    </ul>
</div>
@endsection
