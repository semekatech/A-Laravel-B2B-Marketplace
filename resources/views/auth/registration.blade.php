@extends('auth.layout')
@section('content')
<style>
#error{
    color:red;
    font-style:bold;
}</style>
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">�</button>
    <strong>{{ $message }}</strong>
</div>
@endif             <form  id="signup-form" action="{{ route('register.post') }}" method="POST"class="signup-form">
                 
                            
					 @csrf
                    <p style="color:black; text-align:center;">Register account.</p>
                       <br />
       <div class="form-group">
                            <input type="text" class="form-input" name="fullName" id="firstname" placeholder="fullname" required="" class="@error('fullName') is-invalid @enderror" />
							 @error('firstname')
    <div class="alert alert-danger" id="error">{{ $message }}</div>
@enderror
                        </div>
             
                        <div class="form-group">
                            <input type="text" class="form-input" name="userName" id="username" placeholder="Username" required="" class="@error('userName') is-invalid @enderror"/>
			
@error('username')
    <div class="alert alert-danger" id="error">{{ $message }}</div>
@enderror
                        </div>


						
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email" required="" class="@error('email') is-invalid @enderror"/>
						

@error('email')
    <div class="alert alert-danger" id="error">{{ $message }}</div>
@enderror

            
                        </div>
                        <div class="form-group">
                        <select name="userType" class="form-input" >
                        <option value="">Select Category</option>
                        <option value="1">Distributor</option>
                        <option value="2">Retailer</option>
                        <option value="3">Deliverer</option>
                       
                        </select>
                            
			
@error('userType')
    <div class="alert alert-danger" id="error">{{ $message }}</div>
@enderror
                        </div>
     
                        
                        <div class="form-group">
                            <input type="text" class="form-input" name="mobile" id="mobile" placeholder="Mobile" required="" class="@error('mobile') is-invalid @enderror" />
						@error('mobile')
    <div class="alert alert-danger" id="error">{{ $message }}</div>  
    
@enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password" required=""/>
							 @if ($errors->has('password'))

                                      <span class="text-danger" id="error">{{ $errors->first('password') }}</span>

                                  @endif
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password_confirmation" id="password" placeholder=" Confirm Password" required=""/>
							 @if ($errors->has('password'))

                                      <span class="text-danger" id="error">{{ $errors->first('password') }}</span>

                                  @endif
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                       
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Already Have an account ? <a href="{{ route('login')}}" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>
@endsection