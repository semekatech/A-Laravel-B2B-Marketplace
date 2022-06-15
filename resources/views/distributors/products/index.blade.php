@extends('layouts.distlayout')
     @section('content')
      <div class="container-fluid">
      <!-- END ALERTS AND CALLOUTS -->
        <br/>
          <!-- left column -->
          <!-- Small Box (Stat card) -->
        <div class="row">
        <div class="card-header">
              <div class="card">
        <div class="card-body p-0">
                       <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Product Name</th>
                  <th>Points</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               
                
                  @if($products->count()> 0)   
@foreach($products as $value) 
             
                <tr>
                  <td>{{ $value->product_name}}</td>
                  <td>{{ $value->points }}</td>
                  <td>{{ $value->price }}</td>  
                  <td style="display: flex"><button style=" border:none; background:none"><a href="/distributors/products/{{$value->id}}/edit"><i class="fa fa-pencil-alt" class="btn btn-success"></i></a></button>
                                                
                    <form action="{{route('products.destroy',$value->id)}}" method="POST">
                        @csrf
                        {{method_field('DELETE')}}
                       <button style=" border:none; background:none"><i class="fas fa-trash-alt" style="color:red;margin-left:20px;"></i></button> 

                    </form>
                </td>                   
                </tr>
                 @endforeach
             @else
		 <tr>
                  
                  <td>No Product</td>
                </tr>
                   @endif
                </tbody>
                
              </table>
              
           </div>
   </div></div></div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->

@endsection