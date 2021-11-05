<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Component;

class AdminAddCategoryComponent extends Component
{
    public $name;
    public $slug;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }
    public function storeCategory()
    {
        $catetory = new Category();
        $catetory->name = $this->name;
        $catetory->slug = $this->slug;
        $catetory->save();

        session()->flash('seccess_msg','Category Added Successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('layouts.base');
    }
}
