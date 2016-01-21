        @extends('store.store')

    @section('cat')
        @include('store.partial.categories')
    @stop


        <div class="col-sm-10 padding-right">
            @section('content')
            <div style="background-color: white;" class="product-details"><!--product-details-->
                <div class="col-sm-5">
                    <div class="view-product">

                        @if(count($product->images) > 0)
                            <img src="{{url('uploads/'.$product->images->first()->id. '.'.$product->images->first()->extension)}}"  width="200" alt="" />
                        @else
                            <img src="{{url('images/no-img.jpg')}}"  width="200" alt="" />

                        @endif



                    </div>
                    <div id="similar-product" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                @if(count($product->images) > 0)
                                    <img src="{{url('uploads/'.$product->images->first()->id. '.'.$product->images->first()->extension)}}"  width="200" alt="" />
                                @else
                                    <img src="{{url('images/no-img.jpg')}}"  width="200" alt="" />

                                @endif
                            </div>

                        </div>

                    </div>

                </div>
                <div class="col-sm-7">
                    <div class="product-information"><!--/product-information-->

                        <h2>{{$product->category->name}}---{{$product->name}}</h2>

                        <p>{{$product->description}}</p>
                                <span>
                                    <span>R${{number_format($product->price,2,",",".")}}</span>
                                        <a href="{{route('cart.add',['id'=>$product->id])}}" class="btn btn-fefault cart">
                                            <i class="fa fa-shopping-cart"></i>
                                            Adicionar no Carrinho
                                        </a>
                                </span>
                       <h2>Tags</h2>
                        @foreach($product->tags as $tag)
                            <a href="{{route('store.tag',array('id'=>$tag->id))}}">{{$tag->name.","}}</a>

                        @endforeach
                    </div>
                    <!--/product-information-->
                </div>

            <!--/product-details-->
        </div>




            @stop
        </div>

