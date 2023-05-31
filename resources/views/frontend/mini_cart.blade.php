
    <div class="wrapper-mini-cart"> <span class="icon"><i class="fa fa-shopping-cart"></i></span> <a href="{{route('cart')}}"> <span class="mini-cart-count">{{$total}} </span> sản phẩm <i class="fa fa-caret-down"></i></a>
        <div class="content-mini-cart">

            <div class="has-items">
                <ul class="list-unstyled">
                @if($total <= 0)
                    <p>Khong co san pham</p>
                    @else
                    @foreach($cartProducts as $key=>$cartProduct)
                        <li class="clearfix" id="item-1853038">
                            <div class="image"> <a href="{{route('product',['id'=>$key])}}"> <img alt="" src="{{asset('frontend/images/'.$cartProduct['img'])}}" title="" class="img-responsive"> </a> </div>
                            <div class="info">
                                <h3><a href="{{route('product',['id'=>$key])}}">{{$cartProduct['name']}}</a></h3>
                                <p>{{$cartProduct['quantity']}} x {{ number_format($cartProduct["price"],0,'','.')}}₫</p>
                            </div>
                            <div> <a href="{{route('cart.delete',['id'=>$key])}}"> <i class="fa fa-times"></i></a> </div>
                        </li>
                        @endforeach
                    @endif
                </ul>
                <a href="{{route('checkout')}}" class="button">Thanh toán</a>
            </div>
        </div>
    </div>



