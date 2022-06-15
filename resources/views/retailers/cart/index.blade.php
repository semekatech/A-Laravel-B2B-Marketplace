@extends('layouts.retlayout')
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
                  <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th style="color: #51be78;">Product Name</th>
                      <th style="color: #51be78;">Unit Price</th>
                      <th style="color: #51be78;">Units</th>
                      <th  style="color: #51be78;">Total Price</th>
                       <th style="color: #51be78;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   @if($items->count()> 0)   
        @foreach($items as $item)
             
                    <tr>
                      <td>1.</td>
                      <td>{{ $item->product }}</td>
                      <td>{{ $item->price }} Ksh</td>
                      <td>{{ $item->units }}</td>
                      
                    <td>{{ $item->total }}</td>
                <td> 
     <form id="delete-frm" class="" action="{{ route('cart.destroy', $item->id) }}" method="POST">
   	{{ csrf_field() }}
								{{ method_field('DELETE') }}
                                <button style="background: none; border:none;"><i class="fas fa-trash" style="color: #f05050"></i></button>
                               
</form>
 
     </td>
                    </tr>
                    <br />
                     <form  action="{{ route('cashout.store')}}" method="post">
                     @csrf
                    <input type="hidden"  name="distributor_id" value="{{ $item->distributor_id }}" />
                    @endforeach
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="color: #51be78;"> <b>TOTAL</b></td>
                    <td style="color: #51be78;"><b>{{ $sum }}</b></td>
                    <td> 
                    <button  class="btn btn-primary mb-2" style="background: #51be78; border: none;">CHECK OUT</button>
                    </form></td>
             @else
             <td></td><td></td>
	<td style="color: red;">Cart is empty</td>
                 
                   @endif
                  </tbody>
                </table>
              
           </div>
   </div></div></div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->

@endsection