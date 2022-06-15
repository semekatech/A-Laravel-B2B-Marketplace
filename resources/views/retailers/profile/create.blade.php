@extends('layouts.retlayout')
     @section('content')
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <!-- general form elements -->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3>  Retailer Details</h3>
                                    
                                </div>

                                <div class="card-body">



                                    <form action="{{ route('profile.store')}}" method="post" enctype="multipart/form-data">
                                       @csrf
                                           <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group" style="width:100%;">
                                                    <label>Store Name</label>
                                                    <input type="text" name="store" class="form-control"></div>
                                            </div>
                                             <div class="col-lg-6">
                                                <div class="form-group" style="width:100%;">
                                                    <label>Dealers In</label>
                                                   <select class="form-control" name="category" id="category" onChange="getSubCat(this.value);" >
                    <option value="">Select Category </option>
                    	@foreach($categories as $category)
                    <option value="{{ $category->category}}">{{ $category->category }}</option>
                    	@endforeach     
                    </select> </div>
                                            </div>
                                           

                                           
                                        </div>
                                        <div class="row">
                                        <div class="col-lg-6">
                                                <div class="form-group" style="width:100%;">
                    <label>Region Located</label>
                                                   <select class="form-control" name="region" id="category" onChange="getSubCat(this.value);" >
                    <option value="">Select Region </option>
                    	@foreach($regions as $value)
                    <option value="{{ $value->region }}">{{ $value->region }}</option>
                    	@endforeach     
                    </select> </div>
                                            </div>
                                         <div class="col-lg-6">
                                         
                                                <div class="form-group" style="width:100%;">
                                                    <label>County Located</label>
                                                   <select class="form-control" name="county" id="category" onChange="getSubCat(this.value);" >
                    <option value="">Select Region </option>
                    	@foreach($counties as $county)
                    <option value="{{ $county->county }}">{{ $county->county }}</option>
                    	@endforeach     
                    </select> </div>
                                            </div>
                                            
                                        </div>
<div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group" style="width:100%;">
                                                    <label>Town Located</label>
                                                    <input type="text" name="town" class="form-control"></div>
                                            </div>
                                             <div class="col-lg-6">
                                                <div class="form-group" style="width:100%;">
                                                    <label>Location Description</label>
                                                    <textarea  name="location_description" class="form-control"></textarea></div>
                                                     </div>
                                            </div>
                                           
 <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group" style="width:100%;">
                                                    <label>Store Contacts1</label>
                                                    <input type="text" name="mobile1" class="form-control"></div>
                                            </div>
                                             <div class="col-lg-6">
                                                <div class="form-group" style="width:100%;">
                                                    <label>Store Contact2</label>
                                                    <input type="text" name="mobile2" class="form-control"></div> </div>
                                            </div>
                                           
 <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group" style="width:100%;">
                                                    <label>Store Image</label>
                                                    <input type="file" name="image" class="form-control"></div>
                                            </div>
                                             <div class="col-lg-6">
                                                <div class="form-group" style="width:100%;">
                                                    <label>Store Description</label>
                                                    <textarea  name="store_description" class="form-control"></textarea></div>
                                                     </div>
                                                     
                                        
                                            <div class="col-lg-12">
                                                <hr/>
                                                <button  type="submit" href="#" name="submit" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">Add Profile</button>
                                    
                                            </div>
                                        
                                            </div>
                                           
                                        </div>
                                           
                                        </div>
                                        
                                    </form>
                         </div>
                                <!-- end card-body -->

                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->
            <!-- /.card -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->

@endsection