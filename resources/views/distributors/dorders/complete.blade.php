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
                  <th>Order id</th>
                  <th>Retailer</th>
                  <th>Order Date</th>
               
                  <th>Order Status</th>
                </tr>
                </thead>
                <tbody>
               
                
                  @if($orders->count()> 0)   
@foreach($orders as $value) 
             
                <tr>
                  <td><a href="/distributors/dorders/{{ $value->order_id }}" style="color: #51be78;">{{ $value->order_id }}</a></td>
                  <td>{{ $value->store }}</td>
                  <td>{{ $value->created_at }}</td>
                  <td style="color: green;">Complete</td>
              
                </tr>
                 @endforeach
             @else
		 <tr>
                  <td></td>
                  <td></td>
                  <td>No Complete Order</td>
                </tr>
                   @endif
                </tbody>
                
              </table>
              
           </div>
   </div></div></div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->

@endsection