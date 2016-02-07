<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use CodeCommerce\User;
use CodeCommerce\Order;
use Illuminate\Support\Facades\Input;

class AccountController extends Controller
{
    public function index(){

    }

    public function orders(){

        $user = User::find(Auth::user()->id);
        $orders = $user->orders;


        return view('store.orders', compact('orders'));

    }

    public function adminOrders(Order $order){

        return view('store.admin_orders',['orders'=>$order->all()]);
    }

    public function alterarStatusPedido(){

        $id = Input::get('idPedido');
        $status = Input::get('status');

        $order = Order::find($id);
        $order->status = $status;
        $order->save();


    }
}
