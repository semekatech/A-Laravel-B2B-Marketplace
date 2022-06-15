@extends('layouts.retlayout')
     @section('content')
      <div class="container-fluid">
      <!-- END ALERTS AND CALLOUTS -->
        <br/>
<div class="row">
          <!-- left column -->
          <div class="col-md-6">
                 </div>
            
          <div class="col-md-6">
            <!-- general form elements disabled -->
           
             
                
            <div class="card card-primary">
            
                <div class="input-group input-group-md">
                  <input type="text" class="form-control">
                  <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat">Search</button>
                  </span>
                </div>
              </form>
            </div>      
                   
        
            
                  <div class="form-group">
                  </div>
                </form>
              </div>
              
        </div>
        <div class="row">
          <div class="col-12">
            <!-- Custom Tabs -->
            
            @if($town_distributors->count()> 0)   
@foreach($town_distributors as $value) 
<a href="">
            <div class="card">
     <div class="card-header d-flex p-0" style="margin-right: 80px;">
                <h3 class="card-title p-3" style="color: #51be78;"><b>{{ $value->store_name }}</b></h3>
                <ul class="nav nav-pills ml-auto p-2">
                 
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" style="color: #51be78;">
                      <b>Actions <span class="caret"></span></b>
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" tabindex="-1" href="" type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default1" >
                      <form action="{{ route('distributors.store') }}" method="POST">
                @csrf
            <input type="hidden"  name="distributor_id" value="{{ $value->distributor_id }}" class="form-control">
            <input type="hidden"  name="store_name" value="{{ $value->store_name }}" class="form-control">
              <input type="hidden"  name="store_description" value="{{ $value->store_description }}" class="form-control">
            <input type="hidden"  name="category" value="{{ $value->category }}" class="form-control">
            <input type="hidden"  name="county" value="{{ $value->county }}" class="form-control">
            <input type="hidden"  name="town" value="{{ $value->town }}" class="form-control">
              <input type="hidden"  name="region" value="{{ $value->region }}" class="form-control">
               @if(!\App\Models\retailers\FavouriteDistributor::where('distributor_id',$value->distributor_id)->count())
              <button type="submit" class="btn btn-primary" style="background:none; border:none;color:black">Add to Network</button>
              @else
             <a class="dropdown-item" tabindex="-1" href="#"><button class="btn btn-primary"  style="background:none; border:none;color:green">Added To Pool</button></a>
               @endif
              </form></a>
                      <a class="dropdown-item" tabindex="-1" href="#"><button class="btn btn-primary"  style="background:none; border:none;color:black">View Products</button></a>
                      <a class="dropdown-item" tabindex="-1" href="#"><button class="btn btn-primary"  style="background:none; border:none;color:black">View Profile</button></a>
                     
                    </div>
                  </li>
                </ul>
              </div><!-- /.card-header -->
                   
              <div class="card-body">
        
                 
                    
                    Dealers In <span style="color:dodgerblue;"><b><u>{{ $value->category }}</u></b></span></p>
                    <p>{{ $value->store_description }}</p>
                    <p style="color: #51be78;"><u>Location</u></p>
                    <p><b>Region:</b> {{ $value->region }} || <b>County:</b> {{ $value->county }} || <b>Town:</b> {{ $value->town }}</p>
                    <hr />
                <p>Rank:</p>
                 

        
            </div>
            
                 
			
             
            <!-- ./card -->
          </div></a>
           @endforeach
             @else
		<div class="tab-pane active" id="tab_1">
                   no 
                   @endif
          <!-- /.col -->
        </div>
      </div><!-- /.container-fluid -->

@endsection