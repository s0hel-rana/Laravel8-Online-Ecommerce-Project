<?php
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\AdminCategoryComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\UserDashboardComponent;
use App\Http\Livewire\AdminDashboardComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\SearchComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',HomeComponent::class);

Route::get('/shop',ShopComponent::class);

Route::get('/cart',CartComponent::class)->name('product.cart');

Route::get('/checkout',CheckoutComponent::class);

Route::get('/products/details/{slug}',DetailsComponent::class)->name('product.details');

Route::get('/products-category/{category_slug}',CategoryComponent::class)->name('product.category');

Route::get('/product-search',SearchComponent::class)->name('product.search');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

//route for admin
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function(){
    Route::get('admin/dashboard', AdminDashboardComponent::class)->name('admin.dashborad');
    Route::get('admin/category',AdminCategoryComponent::class)->name('admin.category');
    Route::get('admin/add-category',AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('admin/edit-category/{category_slug}',AdminEditCategoryComponent::class)->name('admit.editcategory');
});

//route for user/customer
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('user/dashboard', UserDashboardComponent::class)->name('user.dashborad');
});
