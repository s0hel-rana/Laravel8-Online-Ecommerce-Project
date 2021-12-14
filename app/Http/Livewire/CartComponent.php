<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Cart;

class CartComponent extends Component
{
    public function increassQTY($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId,$qty);
        $this->emitTo('cart-count-component','refreshComponent');
    }
    public function decreassQTY($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId,$qty);
        $this->emitTo('cart-count-component','refreshComponent');
    }
    public function remove($rowId)
    {
        Cart::instance('cart')->remove($rowId);
        $this->emitTo('cart-count-component','refreshComponent');
        session()->flash('success_msg','Iteam removed');
    }
    public function destroy()
    {
        Cart::instance('cart')->destroy();
        $this->emitTo('cart-count-component','refreshComponent');
    }
    public function render()
    {
        $viewed_products = Product::inRandomOrder()->limit(6)->get();
        return view('livewire.cart-component',['viewed_products'=>$viewed_products])->layout('layouts.base');
    }
}
