<?php
/**
 * Created by PhpStorm.
 * User: Mauro Lucio
 * Date: 16/01/2016
 * Time: 13:25
 */

namespace CodeCommerce;


use Illuminate\Support\Facades\Session;

class Cart
{

    private $items;

    public function __construct()
    {
        $this->items = array();
    }

    public function add($id, $name, $price){

        $this->items += array(
            $id=>[
                'qtd'=>isset($this->items[$id]['qtd'])? $this->items[$id]['qtd']++:1,
                'price'=>$price,
                'name'=>$name
             ]
        );

        return $this->items;

    }

    public function editar($id, $name, $price,$qtd){

        echo $id;

        $this->items[$id] = array(
                'qtd'=>isset($this->items[$id]['qtd'])? $this->items[$id]['qtd'] = $qtd:1,
                'price'=>$price,
                'name'=>$name
             );


        return $this->items;

    }

    public function remove($id){

        unset($this->items[$id]);
    }

    public function all(){

        return $this->items;
    }

    public function getTotal(){

        $total = 0;
        foreach($this->items as $items){

            $total+= $items['qtd'] * $items['price'];
        }

        return $total;
    }

    public function editarCarrinho($id, $qtd){

        $cart = Session::get('cart');
        $arr = $cart->all();
        $arr[$id]['qtd'] = $qtd;

        return $arr;



    }

}