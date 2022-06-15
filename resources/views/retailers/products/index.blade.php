@extends('layouts.retlayout')
     @section('content')
      <div class="container-fluid">
      <!-- END ALERTS AND CALLOUTS -->
        <br/>
          <!-- left column -->
          <!-- Small Box (Stat card) -->
        <div class="row">
         @if($products->count()> 0)   
        @foreach($products as $product)
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box " style="background: white;">
            <div class="card-body">
            <div class="image">
                <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid pad"  style="height:200px; width:100%;">
              </div>
              
              <br />
              <span style="color: #51be78;"><b>KSh {{ $product->price }}</b></span>
               <br />
              <a href="/retailers/products/{{ $product->id }}" class="small-box-footer" style="color: black;">
              <b>{{ $product->product_name }}</b>
                <br />
              </a>
              <br />
               <span class="float-right text-muted" style="color:black;">Points:{{ $product->points }}</span>
              <button type="button" class="btn btn-default btn-sm" style="background: none; border:none; color:green"><a href="/retailers/products/{{ $product->id }}" > <i class="fas fa-cart-plus fa-lg mr-2" style="color: #51be78;"></i></a> </button>
               
            </div></div>
          </div>
           @endforeach
             @else
		<div class="tab-pane active" id="tab_1">
                   no 
                   @endif

        <!-- /.row -->

      </div><!-- /.container-fluid -->

@endsection