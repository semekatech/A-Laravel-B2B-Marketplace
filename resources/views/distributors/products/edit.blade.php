@extends('layouts.distlayout')
     @section('content')
     <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <!-- general form elements -->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3>Update Product</h3>
                                    
                                </div>

                                <div class="card-body">



                                    <form action="{{ route('products.update',$value->id)}}" method="POST" enctype="multipart/form-data">
                                       @csrf
                                       @method('PUT')
                                         
                                    <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group" style="width:100%;">
                                                    <label>Product Name</label>
                                                    <input type="text" name="product_name" class="form-control" value="{{$value->product_name}}"></div>
                                            </div>
                                            
                                             
                                            </div>
                                            <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group" style="width:100%;">
                                                    <label>Points</label>
                                                    <input type="text" name="points" class="form-control" value="{{$value->points}}"></div>
                                            </div>
                                           
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group" style="width:100%;">
                                                    <label>Price</label>
                                                    <input type="text" name="price" class="form-control" value="{{$value->price}}"></div>
                                            </div>
                                             
                                            
                                            
                                           
                                            
                                            <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group" style="width:100%;">
                                                    <label>Store Image</label>
                                                    <input type="file" name="image" class="form-control"></div>
                                            </div>
                                             
                                                   
                                    
                                            <div class="col-lg-12">
                                                <hr/>
                                                <button  type="submit" href="#" name="submit" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">Update Product</button>
                                    
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