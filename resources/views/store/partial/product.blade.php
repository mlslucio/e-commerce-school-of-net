
@foreach($products as $prod)
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="product info text-center">


                    @if(count($prod->images) > 0)
                        <img src="{{url('uploads/'.$prod->images->first()->id. '.'.$prod->images->first()->extension)}}"  width="200" alt="" />
                    @else
                        <img src="{{url('images/no-img.jpg')}}"  width="200" alt="" />

                    @endif

                    <h2>{{$prod->price}}</h2>
                    <p>{{$prod->name}}</p>
                    <a href="{{route('store.product',array('id'=>$prod->id))}}" class="btn btn-default add-to-cart"><i class="fa fa-crosshairs"></i>Mais detalhes</a>

                    <a href="{{route('cart.add',['id'=>$prod->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar no carrinho</a>
                </div>
                <div class="product-overlay">
                    <div class="overlay-content">
                        <h2>{{$prod->price}}</h2>
                        <p>{{$prod->name}}</p>
                        <a href="{{route('store.product',array('id'=>$prod->id))}}" class="btn btn-default add-to-cart"><i class="fa fa-crosshairs"></i>Mais detalhes</a>

                        <a href="{{route('cart.add',['id'=>$prod->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar no carrinho</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


  @endforeach