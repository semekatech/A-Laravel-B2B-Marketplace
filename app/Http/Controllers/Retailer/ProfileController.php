<?php

namespace App\Http\Controllers\Retailer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Region;
use App\Models\County;
use App\Models\Town;
use App\Models\Category;
use App\Models\retailers\Retailer;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  $user=auth()->user();
        $profile = Retailer::where('retailer_id',$user->id)->get();
     return view('retailers/profile.index',[
     'profile'=> $profile]);
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
     return view('retailers/profile.create')
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
         'store'=> 'required', 
          'category'=> 'required',
           'store_description'=> 'required',
            'location_description'=> 'required',
             'mobile1'=> 'required',
              'mobile2'=> 'required',
               'town'=> 'required', 
               'region'=> 'required',
                'county'=> 'required',
         ]);
        
    $data = $request->all();

      if($request->hasFile('image')){
        $image=$request->file('image');
        $filename=$image->getClientOriginalName();
        $image->storeAs('public/',$filename);
        $data['image']="$filename";
        $data['retailer_id'] = auth()->id();
        
    }
 Retailer::create($data);
    
      return redirect('retailers/profile');
            
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
