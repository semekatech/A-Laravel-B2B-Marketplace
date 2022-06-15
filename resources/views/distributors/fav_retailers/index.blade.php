@extends('layouts.distlayout')
     @section('content')
      <div class="container-fluid">
      <!-- END ALERTS AND CALLOUTS -->
        <br/>

        <div class="row">
    
          <div class="col-12">
            <!-- Custom Tabs -->
            
            @if($fav_retailers->count()> 0)   
@foreach($fav_retailers as $value)
<a href="">
            <div class="card">
     <div class="card-header d-flex p-0">
                <h3 class="card-title p-3" style="color: #51be78;"><b>{{ $value->store }}</b></h3>
                <ul class="nav nav-pills ml-auto p-2" style="margin-right: 80px;">
                 
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" style="color: #51be78;">
                     <b>Actions <span class="caret"></span></b> 
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" tabindex="-1" href="" type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default1"  >
     
                      
                      <a class="dropdown-item" tabindex="-1" href="#"><button class="btn btn-primary"  style="background:none; border:none;color:black">View Profile</button></a>
                      <a class="dropdown-item" tabindex="-1" href="#"><button class="btn btn-primary"  style="background:none; border:none;color:black">Report</button></a>
                    </div>
                  </li>
                </ul>
              </div><!-- /.card-header -->
                   
              <div class="card-body">
        
                 
                    
                    Retailers In <b><span style="color: #51be78;"><u>{{ $value->category }}</u></span></b></p>
                    <p>{{ $value->location_description }}</p>
                    <p style="color: #51be78;"><u> Location</u></p>
                    <p ><b>Region:</b> {{ $value->region }} || <b>County:</b> {{ $value->county }} || <b>Town:</b> {{ $value->town }}</p>
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