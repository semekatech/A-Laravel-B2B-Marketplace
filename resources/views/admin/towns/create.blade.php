@extends('layouts.adminlayout')
     @section('content')
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <!-- general form elements -->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3>  Towns Details</h3>
                                    
                                </div>

                                <div class="card-body">



                                    <form action="{{ route('towns.store')}}" method="post" enctype="multipart/form-data">
                                       @csrf
                                           <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group" style="width:100%;">
                                                    <label>Town Name</label>
                                                    <input type="text" name="town" class="form-control"></div>
                                            </div>
                                           <div class="col-lg-6">
                                                <div class="form-group" style="width:100%;">
                                                    <label>County Name</label>
                                                   <select class="form-control" name="county" id="category" onChange="getSubCat(this.value);" >
                    <option value="">Select County </option>
                    	@foreach($counties as $county)
                    <option value="{{ $county->county }}">{{ $county->county }}</option>
                    	@endforeach     
                    </select> </div>
                                            </div>

                                           
                                        </div>
                                        <div class="row">
                                         <div class="col-lg-6">
                                                <div class="form-group" style="width:100%;">
                                                    <label>Region Name</label>
                                                   <select class="form-control" name="region" id="category" onChange="getSubCat(this.value);" >
                    <option value="">Select Region </option>
                    	@foreach($regions as $value)
                    <option value="{{ $value->region }}">{{ $value->region }}</option>
                    	@endforeach     
                    </select> </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <hr/>
                                                <button  type="submit" href="#" name="submit" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">Add</button>
                                    
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