@extends('layouts.distlayout')
     @section('content')
     <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
        <div class="card mb-3">
            <div class="card-header">
                <h5>Are you sure you want to Approve?</h5>
                
            </div>
     <div class="card-body">

        <form action="{{route('dorders.update', $value->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                
                <input type="hidden" name="status" value="0"/>
            </div>
         
            

            <div class="form-group text-right m-b-0">
                <button class="btn btn-primary" type="submit" name="submit">
                    Approve              
                </button>
                <button type="reset" class="btn btn-secondary m-l-5">
                    Cancel
                </button>
            </div>

        </form>
    </div>
</div>
</div>
     @endsection