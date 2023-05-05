<?php

use App\Http\Controllers\BilingPortalController;
use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ManageSubscriptionController;
use App\Http\Controllers\PagesController;
use App\Models\Product;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;

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

//Route::options('/{any}', function(){ return ''; })->where('any', '.*');
//Route::get('/test', function (){
//
//   return Inertia::render('Welcome', [
//   ]);
//});

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('collection/{id}', [PagesController::class, 'collection'])->name('collection');
Route::get('product/{id}', [PagesController::class, 'product'])->name('product');

Route::get('cart', [CartController::class, 'index'])->name('cart.index');
Route::post('cart.store', [CartController::class, 'store'])->name('cart.store');
Route::post('cart.remove', [CartController::class, 'remove'])->name('cart.remove');

Route::get('/subscription', ManageSubscriptionController::class)->name('subscription');
Route::get('/billing-portal', BilingPortalController::class)->name('billing-portal');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');



Route::get('/wrups', function (){
    return Inertia::render('Home', [
        'products' => Product::query()
            ->when(request()->hasAny('lengthNormal', 'lengthRegular', ), function ($query ) {
                if(request()->input('lengthNormal') === "true"){
                    $query->orWhere('length', '=', '1');
                }
                if(request()->input('lengthRegular') === "true"){
                    $query->orWhere('length', '=', '2');
                }
            })
            ->paginate(10)
            ->withQueryString()
            ->through(fn($product) => [
                'id' => $product->id,
                'name' => $product->name,
                'length' => $product->length
            ]),
        'filters' => Request::only(['lengthNormal', 'lengthRegular', 'filters',])
    ]);
});



//Route::get('/', function (){
//    return Inertia::render('Home', [
//        'products' => Product::query()
//            ->when(Request::input('lengthNormal'), function ($query, $lengthNormal) {
//                if($lengthNormal === "false"){
//                    $query->where('length', '!=', '1');
//                }
//            })
//        ->when(Request::input('lengthRegular'), function ($query, $lengthRegular) {
//            if($lengthRegular === "false"){
//                $query->where('length', '!=', '2');
//            }
//        })
//            ->paginate(10)
//            ->withQueryString()
//            ->through(fn($product) => [
//                'id' => $product->id,
//                'name' => $product->name,
//                'length' => $product->length
//            ]),
//        'filters' => Request::only(['lengthNormal', 'lengthRegular'])
//    ]);
//});


Route::get('/welcome', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
