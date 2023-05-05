<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
    /**
     * Displays the welcome page.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        return Inertia::render('Welcome', [
        ]);


    }

    /**
     * Displays a single product.
     */
    public function product($id)
    {
        $product = Product::findOrFail($id);
        $collection = Collection::findOrFail($product->collection_id);
        return Inertia::render('Product', compact('product', 'collection'));
//        dd($products);
    }

    /**
     * Displays all products from the chosen collection.
     *
     */
    public function collection($id)
    {
        return Inertia::render('Collection', [
            'collection' => Collection::findOrFail($id),
            'categories' => Category::query()->where('collection_id', '=', $id)->get(),
                'products' => Product::query()
                ->when(request()->has('vMin'), function ($query) {

                        $query->where('price', '>', request()->input('vMin'));

                })
                ->when(request()->has('vMax'), function ($query) {

                    $query->where('price', '<', request()->input('vMax'));

                })
                ->when(request()->hasAny('length78', 'length34', 'lengthBl', 'lengthS', 'legnthN' ), function ($query) {
                    if(request()->input('length78') === "true"){
                        $query->orWhere('length', '=', '7/8');
                    }
                    if(request()->input('length34') === "true"){
                        $query->orWhere('length', '=', '3/4');
                    }
                    if(request()->input('lengthBl') === "true"){
                        $query->orWhere('length', '=', 'Bl');
                    }
                    if(request()->input('lengthS') === "true"){
                        $query->orWhere('length', '=', 'S');
                    }
                    if(request()->input('legnthN') === "true"){
                        $query->orWhere('length', '=', 'N');
                    }
                })
                ->when(request()->hasAny('sizeXxs', 'sizeXs', 'sizeS', 'sizeM', 'sizeL', 'sizeXl' ), function ($query) {
                    if(request()->input('sizeXxs') === "true"){
                        $query->orWhere('size', '=', 'XXS');
                    }
                    if(request()->input('sizeXs') === "true"){
                        $query->orWhere('size', '=', 'XS');
                    }
                    if(request()->input('sizeS') === "true"){
                        $query->orWhere('size', '=', 'S');
                    }
                    if(request()->input('sizeM') === "true"){
                        $query->orWhere('size', '=', 'M');
                    }
                    if(request()->input('sizeL') === "true"){
                        $query->orWhere('size', '=', 'L');
                    }
                    if(request()->input('sizeXl') === "true"){
                        $query->orWhere('size', '=', 'XL');
                    }
                })
                ->when(request()->hasAny('waistM', 'waistH', 'waistHi'), function ($query) {
                    if(request()->input('waistM') === "true"){
                        $query->orWhere('waist', '=', 'M');
                    }
                    if(request()->input('waistH') === "true"){
                        $query->orWhere('waist', '=', 'H');
                    }
                    if(request()->input('waistHi') === "true"){
                        $query->orWhere('waist', '=', 'Hi');
                    }

                })
                ->when(request()->hasAny('blue', 'beige', 'grey', 'military', 'pink', 'black'), function ($query) {
                    if(request()->input('blue') === "true"){
                        $query->orWhere('color', '=', 'blue');
                    }
                    if(request()->input('beige') === "true"){
                        $query->orWhere('color', '=', 'beige');
                    }
                    if(request()->input('grey') === "true"){
                        $query->orWhere('color', '=', 'grey');
                    }
                    if(request()->input('military') === "true"){
                        $query->orWhere('color', '=', 'military');
                    }
                    if(request()->input('pink') === "true"){
                        $query->orWhere('color', '=', 'pink');
                    }
                    if(request()->input('black') === "true"){
                        $query->orWhere('color', '=', 'black');
                    }

                })
                ->where('collection_id', '=', $id)
//                    ->where('price', '<', 'vMax')
//                    ->where('price', '>', 'vMin')
                ->paginate(10)
                ->withQueryString()
                ->through(fn($product) => [
                    'id' => $product->id,
                    'name' => $product->name,
                    'size' => $product->size,
                    'waist' => $product->size,
                    'price' => $product->price,
                    'collection_id' => $product->collection_id
                ]),
            'filters' => (new \Illuminate\Http\Request)->only([
                'sizeXxs', 'sizeXs', 'sizeS', 'sizeM', 'sizeL', 'sizeXl', 'filters',
                'waistM', 'waistH', 'waistHi', 'collection',
                'length78', 'length34', 'lengthBl', 'lengthS', 'legnthN',
                'vMin', 'vMax',
                'blue', 'beige', 'grey', 'military', 'pink', 'black'
            ])
        ]);

    }
}
