@extends('layouts.adminlayout')
     @section('content')
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <!-- general form elements -->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3 style="color: #51be78;">  County Details</h3>
                                    
                                </div>

                                <div class="card-body">



                                    <form action="{{ route('counties.store')}}" method="post" enctype="multipart/form-data">
                                       @csrf
                                           <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group" style="width:100%;">
                                                    <label style="color: #51be78;">County Name</label>
                                                    <input type="text" name="county" class="form-control"></div>
                                            </div>
                                           <div class="col-lg-6">
                                                <div class="form-group" style="width:100%;">
                                                    <label style="color: #51be78;">Region Name</label>
                                                   <select class="form-control" name="region" id="category" onChange="getSubCat(this.value);" >
                    <option value="">Select Region </option>
                    	@foreach($regions as $value)
                    <option value="{{ $value->region }}">{{ $value->region }}</option>
                    	@endforeach     
                    </select> </div>
                                            </div>

                                           
                                        </div>
                                        <div class="row">
                                        
                                            <div class="col-lg-12">
                                                <hr/>
                                                <button  type="submit" href="#" name="submit" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal" style="border:none;background: #51be78;">Add County</button>
                                    
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