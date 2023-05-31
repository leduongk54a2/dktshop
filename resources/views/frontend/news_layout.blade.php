@foreach($news as $newsItem)
<div class="item">
    <div class="article"><a href="index.php?controller=news_detail&id={{$newsItem->id}}}" class="image"> <img
                alt="{{$newsItem->title}}"
                class="img-responsive"
                src="{{asset('upload/news/'.$newsItem->img)}}"
                title="{{$newsItem->title}}"> </a>
        <div class="info">
            <h3><a href="index.php?controller=news_detail&id={{$newsItem->id}}">{{$newsItem->name}}</a></h3>
            <p class="desc">
            <p>{!! $newsItem->description !!}</p>
            </p>
        </div>F
    </div>
</div>
@endforeach


