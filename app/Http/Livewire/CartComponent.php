<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Cart;

class CartComponent extends Component
{
    public function increassQTY($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId,$qty);
    }
    public function decreassQTY($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId,$qty);
    }
    public function remove($rowId)
    {
        Cart::remove($rowId);
        session()->flash('success_msg','Iteam removed');
    }
    public function destroy()
    {
        Cart::destroy();
    }
    public function render()
    {
        $viewed_products = Product::inRandomOrder()->limit(6)->get();
        return view('livewire.cart-component',['viewed_products'=>$viewed_products])->layout('layouts.base');
    }
}
