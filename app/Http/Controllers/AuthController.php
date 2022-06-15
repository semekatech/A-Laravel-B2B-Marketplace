<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\retailers\Retailer;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use App\Models\distributor\DistributorProfile; 
use App\Models\distributor\Product;
use App\Models\retailers\FavouriteDistributor;
use App\Models\retailers\Order;
class AuthController extends Controller
{
    public function retailerindex(){
        return view('auth.retailerlogin');
    }
    
    public function registration(){

        return view('auth.registration');

    }
    public function postRegistration(Request $request){

        $request->validate([
            'fullName'=>'required',
            'userType'=>'required',
            'userName'=>'required',
            'email'=>'required|email|unique:users,email',
            'mobile'=>'required|regex:/^254\d{0,9}$/|min:12',
            
            'password' => [
        'required',
        'confirmed',
        Password::min(8)
            ->mixedCase()
            ->letters()
            ->numbers()
            ->symbols()
            ->uncompromised(),
            ],
        ]);
        $data = $request->all();
        $check = $this->create($data);

         
      return redirect('/login')
        ->with('success','You are not allowed to access this page.');
       


    }
    public function postLogin(Request $request){

        $request->validate([
            'userName'=>'required',
            'password'=>'required'
        ]);
        $credentials = $request->only('userName', 'password');

        if (Auth::attempt($credentials) && Auth()->user()->userType ==2) {

            return redirect('retailers/dashboard')

                        ->withSuccess('You have Successfully loggedin');

        }




        return redirect("login")->with('success','Oppes! You have entered invalid credentials');

    

    }
    public function retailerdashboard(){
        
        if(Auth::check()){
            
      
      $user=auth()->user();
      
       $users=Retailer::where('retailer_id',$user->id)->first()->town;
         
         $fav = DistributorProfile::where('town',$users)->get();
 return view('retailers/dashboard')
      ->with('fav',$fav);
        }
        return redirect("login")->with('success','Oppes! You have entered invalid credentials');
    }
    public function create(array $data){

        return User::create([
            'fullName' => $data['fullName'],
            'userName' => $data['userName'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'userType'=>$data['userType'],
            'password' => Hash::make($data['password'])

        ]);
    }
    public function logout(){

        Session::flush();
        Auth::logout();

        return Redirect('/');
    }
    public function distributorindex(){
        return view('auth.distributorlogin');
    }
    
    
    public function distributorLogin(Request $request){

        $request->validate([
            'userName'=>'required',
            'password'=>'required'
        ]);
        $credentials = $request->only('userName', 'password');

        if (Auth::attempt($credentials) && Auth()->user()->userType ==1) {

            return redirect('distributors/dashboard')

                        ->withSuccess('You have Successfully loggedin');

        }




        return redirect("login")->with('success','Oppes! You have entered invalid credentials');

    

    }
    public function distributordashboard(){
        
        if(Auth::check()){
   
         
            return view('distributors/dashboard',[
                'pending'=>Order::where('distributor_id',Auth()->user()->id)->where('status',1)->count(),
                'complete'=>Order::where('distributor_id',Auth()->user()->id)->where('status',0)->count(),
                'favourite'=>FavouriteDistributor::where('distributor_id',Auth()->user()->id)->count(),
                'products'=>Product::where('distributor_id',Auth()->user()->id)->get(),
                'retailers' =>Retailer::All(),

            ]);
        }
        return redirect("login")->with('success','Oppes! You have entered invalid credentials');
    }
    
    
    public function adminindex(){
        return view('auth.adminlogin');
    }
    
    
    public function adminLogin(Request $request){

        $request->validate([
            'userName'=>'required',
            'password'=>'required'
        ]);
        $credentials = $request->only('userName', 'password');

        if (Auth::attempt($credentials) && Auth()->user()->userType ==0) {

            return redirect('admin/dashboard')

                        ->withSuccess('You have Successfully loggedin');

        }




        return redirect("adminlogin")->with('success','Oppes! You have entered invalid credentials');

    

    }
    public function admindashboard(){
        
        if(Auth::check()){
 $dist = DistributorProfile::All();
            return view('admin/dashboard')
      ->with('dist',$dist);
        
        }
        return redirect("login")->with('success','Oppes! You have entered invalid credentials');
    }
}
