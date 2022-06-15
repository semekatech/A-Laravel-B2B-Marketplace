@extends('layouts.adminlayout')
@section('content')
<div class="content">

    <div class="container-fluid">
    
     
        <!-- end row -->
       
    <div class="content">
    
                    <div class="container-fluid">
    
                        
                        <!-- end row -->
    
                        <div class="row">
    
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h3 style="color: #51be78;">Wholesalers/Distributor Details</h3>
                                       
                                    </div>
    
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Store Name</th>
                                                        <th>Category</th>
                                                        <th>Region</th>
                                                        <th>County</th>
                                                        <th>Town</th> 
                                                        <th>Location</th>
                                                        <th>Delivery</th> 
                                                         <th>Contacts</th>  
                                                                                                                                        
                                                        <th>Action</th>
                                                        
                                                    </tr>
                                                </thead>
    
                                                @foreach($users as $value)
                                                    <tr>
                                                    <td>{{ $value->store_name}}</td>
                                                    <td>{{ $value->category}}</td>                                                
                                                    <td>{{ $value->region}}</td>
                                                    <td>{{$value->county}}</td>
                                                    <td>{{$value->town}}</td>
                                                    <td>{{$value->location_description}}</td>
                                                    <td>{{$value->deliverystatus}}</td>
                                                    
                                                    <td>{{$value->contact1}}</td>
                                                 
                                                    
                                                    <td><button style="background:none; border:none"><a href="#"><i class="fa fa-lock"  style="color: #51be78;"></i></a></button>
                                                    
                                                        
                                                    </td>
                                                    </tr>
                                                @endforeach
                                        
                                            </table>
                                        </div>
                                        <!-- end table-responsive-->
    
                                    </div>
                                    <!-- end card-body-->
    
                                </div>
                                <!-- end card-->
    
                            </div>
    
                        </div>
                        <!-- end row-->
    
                    </div>
                    <!-- END container-fluid -->
    
                </div>
    <!-- END container-fluid -->
    
    </div>
@endsection