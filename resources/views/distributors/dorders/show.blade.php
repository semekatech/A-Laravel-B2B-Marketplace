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
                  <th>Product</th>
                  <th>Price</th>
                  <th>Units</th>
               
                  <th>Total</th>
                </tr>
                </thead>
                <tbody>
               
                
                  @if($order->count()> 0)   
@foreach($order as $value) 
             
                <tr>
                  <td>{{ $value->product }}</td>
                  <td>{{ $value->price }}</td>
                  <td>{{ $value->units }}</td>
                   <td>{{ $value->total}}</td>
              
                </tr>
                 @endforeach
             @else
		 <tr>
                  <td></td>
                  <td></td>
                  <td>No Pending Order</td>
                </tr>
                   @endif
                </tbody>
                
              </table>
              
           </div>
   </div></div></div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->

@endsection