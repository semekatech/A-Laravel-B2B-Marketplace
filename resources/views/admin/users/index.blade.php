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
                                        <h3 style="color: #51be78;">Users Details</h3>
                                       
                                    </div>
    
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Full Name</th>
                                                        <th>User Name</th>
                                                        <th>Contacts</th>
                                                        <th>Email</th>
                                                 
                                                        
                                                    </tr>
                                                </thead>
    
                                                @foreach($users as $value)
                                                    <tr>
                                                    <td>{{ $value->fullName}}</td>
                                                    <td>{{ $value->userName}}</td>                                                
                                                    <td>{{ $value->mobile}}</td>
                                                    <td>{{$value->email}}</td>
                                                 
                                                    
                                                        
                                                 
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