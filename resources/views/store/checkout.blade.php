        @extends('store.store')



        <div class="col-sm-10 padding-right">
                @section('content')

                    @if($cart == 'empty')
                        <h3>Carrinho vazio =/</h3>
                    @else
                        <h3>Pedido realizado com sucesso</h3>
                        <p>O pedido {{$order->id}} foi realizado com sucesso!</p>

                    @endif

                @stop

            </div>


