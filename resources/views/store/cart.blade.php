

    @extends('store.store')

    @section('sidebar')

        @parent

    @endsection
    @section('content')

        <section id="cart_items">

            <div class="table-responsive cart_info">

                <div id="alerta" style="display:none;" class="alert-info">
                    Aguarde...
                </div>

                <table disabled class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">image</td>
                            <td class="item">item</td>
                            <td class="price">Price</td>
                            <td class="qtd">Qtd</td>
                            <td class="total">Total</td>
                            <td></td>
                        </tr>

                    </thead>

                    <tbody>
                        @forelse($cart->all() as $k=>$items)
                            <tr>
                                <td class="cart_product">
                                    <a href="{{route('store.product',array('id'=>$k))}}">imagem
                                    </a>

                                 <td class="cart_description">
                                    <h4><a href="{{route('store.product',array('id'=>$k))}}">{{$items['name']}}</a> </h4>
                                    <p>Código: {{$k}}</p>
                                </td>

                                <td class="cart_price">
                                    <h4><a href="#"> R${{$items['price']}}</a> </h4>
                                </td>

                                <td class="cart_quantity">
                                    <input style="width:15%;" type="number" min="0" name="qtd_item" id="{{$k}}"  value="{{$items['qtd']}}">
                                    <input type="hidden" id="valor{{$k}}"/>

                                </td>

                                <td class="cart_total">
                                    <p class="cart_total_price">R$ {{$items['qtd'] * $items['price']}}</p>
                                </td>

                                <td class="cart_delete">
                                    <a href="{{route('cart.destroy',['id'=>$k])}}" class="cart_quantity_delete">delete</a>
                                </td>
                            </tr>
                        @empty

                            <tr>
                                <td colspan="6" class="cart_product">
                                   <h3> Nenhum item encontrado</h3>
                                </td>
                            </tr>

                        @endforelse

                        <tr class="cart_menu">
                            <td colspan="6  ">
                                <div class="pull-right">
                                    <span>
                                        Total: R${{$cart->getTotal()}}
                                    </span>
                                    <a href="{{route('store.checkout')}}" class="btn btn-success">Fechar a compra</a>
                                </div>
                            </td>

                        </tr>


                    </tbody>

                </table>




            </div>


        </section>


    @stop

