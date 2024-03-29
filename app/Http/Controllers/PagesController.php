<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use App\Models\User;
use App\Models\Review;
use App\Models\Subcategory;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Inertia\Inertia;
use mysql_xdevapi\TableInsert;


class PagesController extends Controller
{
    /**
     * Displays the welcome page.
     *
     * @return \Inertia\Response
     */
    public function index()
    {   $content = Cart::content();
        $count = $content->count();
//        $amount = $content->count();
//        if ($amount > 0) {
//            $count = $amount;
//        } else
//        {$count = 0;}
        return Inertia::render('Welcome', compact('count'));
//        dd($products);
    }
//    {
//        return Inertia::render('Welcome', [
//        ]);
//
//
//    }


    /**
     * Displays a single product.
     */
    public function product($id)
    {
        $reviews = Review::query()->where('product_id', '=', $id)->get();
        $reviewMap = $reviews->map(function($item, $key){
            return (object)$item;
        });
        $averageGrade = $reviewMap->avg('grade');
        $reviewCount = count($reviews);
        $selectedTab = "description";
//        dd($reviewCount);
        $selectedPhoto = "https://freddy.hr/image/cache/catalog/izdelki/NOW1HC006P_N/NOW1HC006P_N-667x1000h.jpg";
        $quantity = 1;
        $content = Cart::content();
        $count = $content->count();
        $product = Product::findOrFail($id);
        $collection = Collection::findOrFail($product->collection_id);
        return Inertia::render('Product', compact('product', 'collection', 'count', 'quantity', 'selectedPhoto', 'averageGrade', 'reviewCount', 'selectedTab'));
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
            $col = Collection::where('id', $id)->first(),
                               
            'categories' => Category::query()->where('collection_id', '=', $id)->get(),
            $content = Cart::content(),
                'selectedView' => 'multi',
                'count' => $content->count(),
                'products' => Product::
                               query($id)

                ->when(request()->hasAny('length78', 'length34', 'lengthBl', 'lengthS', 'lengthN', 'col' ), function ($query, $id) {
                    if(request()->input('length78') === "true"){
                        // dd($id);
                        $query->orWhere('length', '=', '7/8')->where('collection_id', '=', request()->input('col'));;
                    }
                })
                ->when(request()->hasAny('length78', 'length34', 'lengthBl', 'lengthS', 'lengthN', 'col' ), function ($query, $id) {
                    if(request()->input('length34') === "true"){
                        $query->orWhere('length', '=', '3/4')->where('collection_id', '=', request()->input('col'));;
                    }
                })
                ->when(request()->hasAny('length78', 'length34', 'lengthBl', 'lengthS', 'lengthN', 'col' ), function ($query, $id) {
                    if(request()->input('lengthBl') === "true"){
                        $query->orWhere('length', '=', 'bicycle length')->where('collection_id', '=', request()->input('col'));;
                    }
                })
                ->when(request()->hasAny('length78', 'length34', 'lengthBl', 'lengthS', 'lengthN', 'col' ), function ($query, $id) {
                    if(request()->input('lengthS') === "true"){
                        $query->orWhere('length', '=', 'short')->where('collection_id', '=', request()->input('col'));;
                    }
                })
                ->when(request()->hasAny('length78', 'length34', 'lengthBl', 'lengthS', 'lengthN', 'col' ), function ($query, $id) {
                    if(request()->input('lengthN') === "true"){
                        $query->orWhere('length', '=', 'normal')->where('collection_id', '=', request()->input('col'));;
                    }
                })


                               
                ->when(request()->hasAny('sizeXxs', 'sizeXs', 'sizeS', 'sizeM', 'sizeL', 'sizeXl', 'col' ), function ($query, $id) {
                    if(request()->input('sizeXxs') === "true"){
                        $query->orWhere('size', '=', 'XXS')->where('collection_id', '=', request()->input('col'));;
                    }
                })
                ->when(request()->hasAny('sizeXxs', 'sizeXs', 'sizeS', 'sizeM', 'sizeL', 'sizeXl', 'col' ), function ($query, $id) {
                    if(request()->input('sizeXs') === "true"){
                        $query->orWhere('size', '=', 'XS')->where('collection_id', '=', request()->input('col'));;
                    }
                })
                ->when(request()->hasAny('sizeXxs', 'sizeXs', 'sizeS', 'sizeM', 'sizeL', 'sizeXl', 'col' ), function ($query, $id) {
                    if(request()->input('sizeS') === "true"){
                        $query->orWhere('size', '=', 'S')->where('collection_id', '=', request()->input('col'));;
                    }
                })
                ->when(request()->hasAny('sizeXxs', 'sizeXs', 'sizeS', 'sizeM', 'sizeL', 'sizeXl', 'col' ), function ($query, $id) {
                    if(request()->input('sizeM') === "true"){
                        $query->orWhere('size', '=', 'M')->where('collection_id', '=', request()->input('col'));;
                    }
                })
                ->when(request()->hasAny('sizeXxs', 'sizeXs', 'sizeS', 'sizeM', 'sizeL', 'sizeXl', 'col' ), function ($query, $id) {
                    if(request()->input('sizeL') === "true"){
                        $query->orWhere('size', '=', 'L')->where('collection_id', '=', request()->input('col'));;
                    }
                })
                ->when(request()->hasAny('sizeXxs', 'sizeXs', 'sizeS', 'sizeM', 'sizeL', 'sizeXl', 'col' ), function ($query, $id) {
                    if(request()->input('sizeXl') === "true"){
                        $query->orWhere('size', '=', 'XL')->where('collection_id', '=', request()->input('col'));;
                    }
                })


                               
                ->when(request()->hasAny('waistM', 'waistH', 'waistHi', 'col'), function ($query, $id) {
                    if(request()->input('waistM') === "true"){
                        $query->orWhere('waist', '=', 'medium')->where('collection_id', '=', request()->input('col'));;
                    }
                })
                ->when(request()->hasAny('waistM', 'waistH', 'waistHi', 'col'), function ($query, $id) {
                    if(request()->input('waistH') === "true"){
                        $query->orWhere('waist', '=', 'high')->where('collection_id', '=', request()->input('col'));;
                    }
                })
                ->when(request()->hasAny('waistM', 'waistH', 'waistHi', 'col'), function ($query, $id) {
                    if(request()->input('waistHi') === "true"){
                        $query->orWhere('waist', '=', 'higher')->where('collection_id', '=', request()->input('col'));;
                    }
                })


                               
                ->when(request()->hasAny('blue', 'beige', 'grey', 'military', 'pink', 'black', 'col'), function ($query, $id) {
                    if(request()->input('blue') === "true"){
                        $query->orWhere('color', '=', 'blue')->where('collection_id', '=', request()->input('col'));;
                    }
                })
                ->when(request()->hasAny('blue', 'beige', 'grey', 'military', 'pink', 'black', 'col'), function ($query, $id) {
                    if(request()->input('beige') === "true"){
                        $query->orWhere('color', '=', 'beige')->where('collection_id', '=', request()->input('col'));;
                    }
                })
                ->when(request()->hasAny('blue', 'beige', 'grey', 'military', 'pink', 'black', 'col'), function ($query, $id) {
                    if(request()->input('grey') === "true"){
                        $query->orWhere('color', '=', 'grey')->where('collection_id', '=', request()->input('col'));;
                    }
                })
                ->when(request()->hasAny('blue', 'beige', 'grey', 'military', 'pink', 'black', 'col'), function ($query, $id) {
                    if(request()->input('military') === "true"){
                        $query->orWhere('color', '=', 'military')->where('collection_id', '=', request()->input('col'));;
                    }
                })
                ->when(request()->hasAny('blue', 'beige', 'grey', 'military', 'pink', 'black', 'col'), function ($query, $id) {
                    if(request()->input('pink') === "true"){
                        $query->orWhere('color', '=', 'pink')->where('collection_id', '=', request()->input('col'));;
                    }
                })
                ->when(request()->hasAny('blue', 'beige', 'grey', 'military', 'pink', 'black', 'col'), function ($query, $id) {
                    if(request()->input('black') === "true"){
                        $query->orWhere('color', '=', 'black')->where('collection_id', '=', request()->input('col'));;
                    }
                })
                ->when(request()->has('col'), function ($query, $id) {

                    $query->where('collection_id', '=', request()->input('col'));

                })
                ->when(request()->has('vMin'), function ($query, $id) {

                    $query->where('price', '>=', request()->input('vMin'))->where('collection_id', '=', request()->input('col'));;

                })
                ->when(request()->has('vMax'), function ($query, $id) {

                    $query->where('price', '<=', request()->input('vMax'))->where('collection_id', '=', request()->input('col'));;

                })
            
                   // ->orWhere('collection_id', '=', $id)
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
                    'collection_id' => $product->collection_id,
                    'description' => $product->description
                ]),
            'filters' => (new \Illuminate\Http\Request)->only([
                'sizeXxs', 'sizeXs', 'sizeS', 'sizeM', 'sizeL', 'sizeXl', 'filters',
                'waistM', 'waistH', 'waistHi', 'collection',
                'length78', 'length34', 'lengthBl', 'lengthS', 'lengthN',
                'vMin', 'vMax',
                'blue', 'beige', 'grey', 'military', 'pink', 'black', 'col'
            ])

        ]);


    }
    public function tester()
    {
        $users = User::all();
        return Inertia::render(('TermsOfService'), compact('users'));
    }

    public function review($id)
    {
        $product = Product::findOrFail($id);
        $content = Cart::content();
        $count = $content->count();
        return Inertia::render(('Review'), compact('product', 'count'));
    }

    public function reviews($id)
    {
        $product = Product::findOrFail($id);
        $content = Cart::content();
        $count = $content->count();
        $reviews = Review::query()->where('product_id', '=', $id)->get();
//        $reviews = Review::all();
        return Inertia::render(('Reviews'), compact('reviews', 'product', 'count'));
//        dd($reviews);
    }

    public function postreview(Request $request)
    {
        $review = new Review();
        $review->content = $request->contents;
        $review->grade = $request->grade;
        $review->product_id = $request->productID;
        $review->user_name = $request->user;
        $review->save();
        return \redirect()->back()->with('message', 'Thank you for your feedback!');
    }

    public function sizetable()
    {
        $content = Cart::content();
        $count = $content->count();
        return Inertia::render(('Sizetable'), compact('count'));
    }

    public function account()
    {
//        $user = User::findOrFail($id);
        $user = auth()->user()->id;
//        dd($user);
        $content = Cart::content();
        $count = $content->count();
        return Inertia::render(('Account'), compact('count', 'user'));
    }

    public function awardpoints($id)
    {
//        $user = User::findOrFail($id);
        $user = User::findOrFail($id);
        $content = Cart::content();
        $count = $content->count();
        return Inertia::render(('Awardpoints'), compact('count', 'user'));
    }

    public function address($id)
    {
        $user = User::findOrFail($id);
        $content = Cart::content();
        $count = $content->count();
        return Inertia::render(('Address'), compact('count', 'user'));
    }

    public function mailinglist(Request $request)
    {
        $email = $request->email;
        // dd($email);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return \redirect()->back()->with('message', 'Please provide a valid email!');
        }
        if (!$request->terms){
            return \redirect()->back()->with('message', 'You must accept the confidentiality agreement!');
        }else{
            return \redirect()->back()->with('message', 'Thank you for signing up!');
        }
//        $review = new MailingL();
//        $review->content = $request->contents;
//        $review->grade = $request->grade;
//        $review->product_id = $request->productID;
//        $review->user_name = $request->user;
//        $review->save();
//        return \redirect()->back()->with('message', 'Thank you for your feedback!');
//        dd($request);
    }

    public function orderhistory($id)
    {
        $user = User::findOrFail($id);
        $content = Cart::content();
        $count = $content->count();
        return Inertia::render(('Orderhistory'), compact('count', 'user'));
    }

    public function transactionhistory($id)
    {
        $user = User::findOrFail($id);
        $content = Cart::content();
        $count = $content->count();
        return Inertia::render(('Transactionhistory'), compact('count', 'user'));
    }

    public function wishlist($id)
    {
        $user = User::findOrFail($id);
        $content = Cart::content();
        $count = $content->count();
        return Inertia::render(('Wishlist'), compact('count', 'user'));
    }

    public function terms()
    {
        $content = Cart::content();
        $count = $content->count();
        return Inertia::render(('TermsOfService'), compact('count'));
    }
}
