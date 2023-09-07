<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use Gloudemans\Shoppingcart\Facades\Cart;
use Spatie\Async\Pool;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use function Termwind\render;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $total = 0;
        $atTotal = 0;
        $vat = 20;
        $products = Cart::content();
        $count = $products->count();
        foreach ($products as $product){
            $total += $product->price;
        }
        $vatAmount = $total*($vat/100);
        $atTotal = $total + $vatAmount;
        return Inertia::render('Cart', compact('products', 'count', 'total', 'atTotal', 'vatAmount'));
//        dd($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param Request $request
//     * @return RedirectResponse
//     */
    public function store(Request $request)
    {
        Cart::add($request->id, $request->name, $request->qty, $request->price, 0);
        $id = $request->id;
        $content = Cart::content();
        $count = $content->count();
//        dd(Cart::content());
//        return redirect()->route('cart.index');
//        return redirect()->route('product', $id)
//            ->with('message', 'Item added successfully!');
        return \redirect()->back()->with('message', 'Item added successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function remove(Request $request)
    {
//        $product = Cart::content()->where('rowId', '=', $id);
        Cart::remove($request->id);
//        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Start the checkout process.
     *
     * @param Request $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|RedirectResponse|\Illuminate\Routing\Redirector
* //     */
    public function checkout()
    {
        $content = Cart::content();
         $content->count();
        if ($content->count() < 1) {
            return \redirect()->back()->with('message', 'Cart is empty!');
        }

        \Stripe\Stripe::setApiKey('sk_test_51M3On7IJyyVcaOuSIYcxqumsUbjmDvuUr07NmB7NhjBDnMg8zGgfHWaEWHY6udaZDNkiy3sztaioQtNmUYMVE68V00ySUsQ5Hl');

        $products = Cart::content();
        $lineItems = [];
        $totalPrice = 0;
        foreach ($products as $product){
            $totalPrice += $product->price;
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $product->name,
                    ],
                    'unit_amount' => $product->price * 100,
                ],
                'quantity' => 1,
            ];

        }
        $session =
            \Stripe\Checkout\Session::create([
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => route('checkout.success', [], true)."?session_id={CHECKOUT_SESSION_ID}",
            'cancel_url' => route('checkout.cancel', [], true),
                'customer_creation' => 'always',
        ]);

//        $newestCliente = Order::orderBy('id', 'desc')->first(); // gets the whole row
//        $maxValue =time();
//        dd($maxValue);
        $order = new Order();
        $order->status = 'pending';
        $order->grand_total = $totalPrice;
        $order->session_id = $session->id;
        $order->order_number = time();
        $order->user_id = 1;
        $order->first_name ="user";
        $order->last_name ="userovich";
        $order->address ="userska street";
        $order->city ="user city";
        $order->post_code ="11";
        $order->phone_number ="11";
        $order->item_count ="1";
        $order->country ="useria";
        $order->save();
        return response('', 409)
            ->header('X-Inertia-Location', $session->url);
    }

    public function success(Request $request)
    {
        \Stripe\Stripe::setApiKey('sk_test_51M3On7IJyyVcaOuSIYcxqumsUbjmDvuUr07NmB7NhjBDnMg8zGgfHWaEWHY6udaZDNkiy3sztaioQtNmUYMVE68V00ySUsQ5Hl');
        $SessionId = $request->get('session_id');

        $session = \Stripe\Checkout\Session::retrieve($request->get('session_id'));

//        dd($session);

        if(!$session) {
            throw new NotFoundHttpException;
        }
        $customer = \Stripe\Customer::retrieve($session->customer);

//        dd($customer);

        return Inertia::render('Success', compact( 'customer'));
//        $content = Cart::content();
//        $count = $content->count();
//        return Inertia::render('Welcome', compact('count'));
//        return Inertia::location('/cart');
    }

    public function cancel()
    {

    }

}
