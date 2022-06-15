@extends('layouts.adminlayout')
     @section('content')
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <!-- general form elements -->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
           <br />
                            <div class="card mb-3">
                               
                                <div class="card-body">



                                    <form action="{{ route('categories.store')}}" method="post" enctype="multipart/form-data">
                                       @csrf
                                           <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group" style="width:100%;">
                                                    <label style="color: #51be78;">Category Name</label>
                                                    <input type="text" name="category" class="form-control"></div>
                                            </div>
                                           

                                           
                                        </div>
                                        <div class="row">
                                        
                                            <div class="col-lg-12">
                                                <hr/>
                                                <button  type="submit" href="#" name="submit" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal" style="background: #51be78; border:none">Add Category</button>
                                    
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