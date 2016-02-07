        @extends('store.store')


        <div class="row">
            <div class="col-sm10">

                @section('content')

                <h3>Meus Pedidos</h3>


                    <table class="table table-bordered">


                                <thead>
                                    <tr>
                                        <td>Id</td>
                                        <td>Items</td>
                                        <td>Valor</td>
                                        <td>Status</td>
                                    </tr>
                                </thead>
                            <tbody>
                                @foreach($orders as $order)

                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td>
                                            @foreach($order->items as $item)
                                                {{$item->product->name}}

                                            @endforeach

                                        </td>
                                        <td>{{$order->total}}</td>
                                        <td>

                                                @if($order->status == 0)
                                                    {{"pendente"}}

                                                @elseif($order->status == 1)
                                                {{"confirmado"}}

                                                @else
                                                    {{"enviado"}}
                                                @endif


                                        </td>
                                    </tr>


                                @endforeach
                            </tbody>

                        </table>
                    @stop

                        </div>
                    </div>





