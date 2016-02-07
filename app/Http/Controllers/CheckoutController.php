<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Events\CheckoutEvent;
use CodeCommerce\Order;
use CodeCommerce\OrderItem;
use Illuminate\Http\Request;
use CodeCommerce\Category;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{

    public function place(Order $orderModel, OrderItem $orderItem)
    {


        if (!Session::has('cart')) {

            return redirect()->route('cart');

        }

        $cart = Session::get('cart');
        $categories = Category::all();




        if ($cart->getTotal() > 0) {

            $order = $orderModel->create(['user_id' => Auth::user()->id, 'total' => $cart->getTotal()]);
            foreach ($cart->all() as $k => $item) {

                $order->items()->create(['product_id' => $k, 'price' => $item['price'], 'qtd' => $item['qtd']]);

            }


            $cart->clear();

            event(new CheckoutEvent(Auth::user(), $order));

            return view('store.checkout', compact('order','cart','categories'));

        } else {
            $order= [];
            return view('store.checkout', ['cart'=>'empty','categories'=>$categories]);
        }

    }



}
