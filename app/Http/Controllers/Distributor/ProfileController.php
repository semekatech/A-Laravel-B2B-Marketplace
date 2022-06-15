<?php

namespace App\Http\Controllers\Distributor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\distributor\DistributorProfile;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Region;
use App\Models\Town;
use App\Models\County;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
 $regions = Region::All();
  $towns = Town::All();
  $counties = County::All();
   $categories = Category::All();
        return view('distributors/profile.create')
        ->with('regions',$regions)
      ->with('towns',$towns)
      ->with('counties',$counties)
      ->with('categories',$categories);
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
        'store_name'=>'required',
        'category'=>'required',
        'region'=>'required',
        'county'=>'required',
        'town'=>'required',
        'location_description'=>'required',
        'deliverystatus'=>'required',
        'working_days'=>'required',
        'image'=>'required',
        'contact1'=>'required',
        'contact2'=>'required',
        'store_description'=>'required',
       ]);
       $input= $request->all();
       if($request->hasFile('image')){
           $image=$request->file('image');
           $filename=$image->getClientOriginalName();
           $image->StoreAs('public/',$filename);
           $input['image']="$filename";
           $input['distributor_id'] =auth()->id();
           $input['working_days']= $request->input('working_days');

       }
       DistributorProfile::create($input);
       return redirect('');

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
        //
    }
}
