@extends('layouts.retlayout')
     @section('content')
   
      <!-- END ALERTS AND CALLOUTS -->
        <br/>
          <!-- left column -->
          <!-- Small Box (Stat card) -->
        <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none"></h3>
              <div class="col-12">
                <img src="{{ asset('storage/' . $product->image) }}" class="product-image" alt="Product Image">
              </div>
              
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3"><small><b>{{  $product->product_name }}</b></small></h3>
              
              <hr>
              <h5>Price per Unit</h5>
              <div class="btn-group btn-group-toggle" data-toggle="buttons" style="color: green;">
                <b>KSh {{  $product->price }}  </b>
              </div>

              <h4 class="mt-3"><small>Please select units</small></h4>
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                
                <label class="btn btn-default text-center">
                    <form action="{{ route('cart.store') }}" method="POST">
                @csrf
                 <input type="text" placeholder="0" name="units" class="totalCal"  style="width:200px;background:inherit; border:none;">
                <input type="hidden" value="{{  $product->product_name }}" name="product">
                <input type="hidden" value="{{  $product->price }}" name="price">
                <input type="hidden" value="{{  $product->points }}" name="points">
                <input type="hidden" value="{{  $product->distributor_id }}" name="distributor_id">
                </label>
              </div>
              <div class="bg-gray py-2 px-3 mt-4">
              
                <h4 class="mt-0">
                  <small>Total Cost: <span style="color: black;">KSh</span> <span id="total" style="color: black;"></span> </small>
                </h4>
                
                
               
              </div>

              <div class="mt-4">
               
                 <button  type="submit"  name="submit" class="btn btn-primary btn-lg btn-flat" >Buy Now</button>
 </form>
                <div class="btn btn-default btn-lg btn-flat">
                  <i class="fas fa-heart fa-lg mr-2"></i> 
                  Add to Wishlist
                </div>
              </div>

            

            </div>
          </div>
          
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
<script>
$(document).ready(calculate);   
$(document).on("keyup", calculate);

function calculate() {
    var sum ={{  $product->price }};
    $(".totalCal").each(function(){
         
        sum *= +$(this).val();
        sum=sum.toFixed();
       
    });
    $("#total").html(sum);
    $("#total2").html(sum);

}

$(document).ready(calculate2);   
$(document).on("keyup", calculate2);
function calculate2() {
    var amt ={{  $product->price }};
    $(".totalCal").each(function(){
         
        amt *= +$(this).val();
        
    });

    $("#amount").html(amt);
} 
</script>
@endsection