        @extends('layout.master')


        <div class="row">
            <div class="col-sm10">

                @section('content')

                <h3>Todos os Pedidos</h3>


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
                                            <select name="alterar_status_pedido" id="select{{$order->id}}">
                                                @if($order->status == 0)
                                                    <option selected value="0">pendente</option>
                                                    <option  value="1">confirmado</option>
                                                    <option  value="2">enviado</option>

                                                @elseif($order->status == 1)
                                                    <option selected value="1">confirmado</option>
                                                    <option  value="2">enviado</option>
                                                    <option  value="0">pendente</option>
                                                @else
                                                    <option selected value="2">enviado</option>
                                                    <option  value="1">confirmado</option>
                                                    <option  value="0">pendente</option>
                                                @endif

                                            </select>


                                            <button value="{{$order->id}}" name="alterar_pedido">Alterar</button>

                                        </td>


                                    </tr>


                                @endforeach
                            </tbody>

                        </table>
                    @stop

                        </div>
                    </div>





