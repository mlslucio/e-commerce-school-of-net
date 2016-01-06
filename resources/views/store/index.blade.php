@extends('store.store')

@section('cat')
    @include('store.categories')
@stop

    @section('sidebar')

        @parent

    @endsection

    @section('content')
        <div class="col-sm-9 padding-right">
            <div class="features_items"><!--features_items-->
                <h2 class="title text-center">Em destaque</h2>


                <div class="col-sm-4">

                    @foreach($productFeatured as $prod)
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
                                <a href="http://commerce.dev:10088/product/2" class="btn btn-default add-to-cart"><i class="fa fa-crosshairs"></i>Mais detalhes</a>

                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar no carrinho</a>
                            </div>
                            <div class="product-overlay">
                                <div class="overlay-content">
                                    <h2>{{$prod->price}}</h2>
                                    <p>{{$prod->name}}</p>
                                    <a href="http://commerce.dev:10088/product/2" class="btn btn-default add-to-cart"><i class="fa fa-crosshairs"></i>Mais detalhes</a>

                                    <a href="http://commerce.dev:10088/cart/2/add" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar no carrinho</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div><!--features_items-->



            <div class="features_items"><!--recommended-->
                <h2 class="title text-center">Recomendados</h2>

            </div><!--recommended-->

        </div>

        </div>
        </div>
        <div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <ul class="list-inline item-details">
                    <li><a href="http://themifycloud.com">ThemifyCloud</a></li>
                    <li><a href="http://themescloud.org">ThemesCloud</a></li>
                </ul>
            </div>
        </div>
        </section>
@stop
