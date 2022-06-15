<?php

namespace App\Http\Controllers\Retailer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\retailers\Retailer;
use Illuminate\Support\Facades\Auth;
use App\Models\distributor\DistributorProfile; 
use App\Models\retailers\FavouriteDistributor;
use App\Models\distributor\Product;
class DistributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=auth()->user();
        $towns=Retailer::where('retailer_id',$user->id)->first()->town;
         
         $town_distributors = DistributorProfile::where('town',$towns)->get();
     return view('retailers/distributors.index')
      ->with('town_distributors',$town_distributors);
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

             $input = FavouriteDistributor::firstOrCreate(
        [
            'distributor_id'  => request('distributor_id'),
            'store_name'  => request('store_name'),
              'store_description'  => request('store_description'),
            'category'  => request('category'),
            'region'  => request('region'),
            'town'  => request('town'),
            'county'  => request('county'),
        
            'user_id'  =>auth()->user()->id,
        ]);
        
         return redirect('retailers/favourite');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
        $products=Product::where('distributor_id',$id)->get();
      
        return view('retailers/products.index')
         ->with('products',$products) ;
    }

    public function showproduct($id)
    {
      
        $product=Product::where('id',$id)->first();
      
        return view('retailers/products.show')
         ->with('product',$product);
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
        //
    }
}
