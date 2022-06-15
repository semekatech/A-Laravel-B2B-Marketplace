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
                                        <h3 style="color: #51be78;">Counties Details</h3>
                                       
                                    </div>
    
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                                                <thead>
                                                    <tr>
                                                       
                                                       <th>County Name</th>
                                                        <th>Region Name</th>
                                                        <th>Actions</th>
                                                 
                                                        
                                                    </tr>
                                                </thead>
    
                                                @foreach($counties as $value)
                                                    <tr>
                                                    <td>{{ $value->county}}</td>
                                                    <td>{{ $value->region}}</td>
                                                    <td><a href="/admin/counties/{{ $value->id }}/edit"><i class="fas fa fa-pencil-alt" title="Edit" style="color: #51be78;"></i></a> 

	&nbsp;
     <form id="delete-frm" class="" action="{{ route('counties.destroy', $value->id) }}" method="POST">
   	{{ csrf_field() }}
								{{ method_field('DELETE') }}
                                <button style="background: none; border:none;"><i class="fas fa fa-trash" style="color: #f05050"></i></button>
                               
</form>
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