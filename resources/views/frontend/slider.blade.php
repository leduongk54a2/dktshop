<div class="owl-slider">
    <div class="item">
        <!-- ============================ -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              @for($i=0;$i<count($sliders);$i++)
                <li data-target="#myCarousel" data-slide-to="{{$i}}" class="{{$i==0?'active':''}};?>"></li>
            @endfor
<!--                <li data-target="#myCarousel" data-slide-to="1"></li>-->
<!--                <li data-target="#myCarousel" data-slide-to="2"></li>-->
<!--                <li data-target="#myCarousel" data-slide-to="3"></li>-->
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              @foreach($sliders as $slider)
                <div class="item {{$slider->id == 1 ? 'active' : ''}}"><img src={{ asset($slider->img)}}
                                              alt="{{$slider->name}}"></div>
            @endforeach
<!--                <div class="item"><img src="../../asset/frontend/images/slideshow1221b.jpg"-->
<!--                                       alt="Los Angeles"></div>-->
<!--                <div class="item"><img src="../../asset/frontend/images/chicago.jpg" alt="Chicago">-->
<!--                </div>-->
<!--                <div class="item"><img src="../../asset/frontend/images/ny.jpg" alt="New York"></div>-->
            </div>

            <!-- Left and right controls -->
        </div>
        <!-- ============================ -->
    </div>
</div>
