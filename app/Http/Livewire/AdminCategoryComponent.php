<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $categories = Category::paginate(4);
        return view('livewire.admin-category-component',['categories'=>$categories])->layout('layouts.base');
    }
}
