<?php

namespace App\Http\Controllers\Distributor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\distributor\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a=Auth()->user()->id;
        $products=Product::where('distributor_id',$a)->get();
        return view('distributors/products.index',
    ['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('distributors/products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name'=>'required',
            'points'=>'required',
            'price'=>'required',
            'image'=>'required',
        ]);
        $input=$request->all();
        if ($request->hasFile('image')) {
            $image=$request->file('image');
            $filename=$image->getClientOriginalName();
            $image->StoreAs('public/',$filename);
            $input['image']="$filename";
    
        }
         $input['distributor_id']=auth()->user()->id;
        Product::create($input);
        return redirect('distributors/products/');
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
        return view('distributors/products.edit',[
            'value'=>Product::find($id),
        ]);
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
        $product=Product::findOrfail($id);
        $product->product_name=$request->product_name;
        $product->points=$request->points;
        $product->price=$request->price;

        if ($request->hasFile('image')) {
            $image=$request->file('image');
            $filename=$image->getClientOriginalName();
            $image->StoreAs('public/',$filename);
            $product['image']="$filename";
        }

        $product->save();

        return redirect('distributors/products/');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect('distributors/products/');
    }
}
