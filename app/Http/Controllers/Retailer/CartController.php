<?php

namespace App\Http\Controllers\Retailer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\retailers\Cart;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $user=auth()->user();
        $items=Cart::where('retailer_id',$user->id)
        ->where('status',1)->get();
        $sum=Cart::where('retailer_id',$user->id)->sum('total');
         return view('retailers/cart.index')
      ->with('items',$items)
      ->with('sum',$sum);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                 $input = Cart::Create(
        [
            'product'  => request('product'),
            'distributor_id'  => request('distributor_id'),
              'points'  => request('points'),
            'price'  => request('price'),
            'units'  => request('units'),
            'retailer_id'  =>auth()->user()->id,
            'total' => (request('price'))*(request('units')),
            'status'=>1,
             'order_id'=>0,
        ]);
        return redirect('retailers/cart');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
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
        $product=Cart::findOrFail($id);
		$product->delete();
         return redirect('retailers/cart');
    }
}
