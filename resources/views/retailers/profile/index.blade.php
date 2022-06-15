     @extends('layouts.retlayout')
     @section('content')
        <div class="content">
        <div class="row">
        
          <div class="col-md-4">
         
                 	@foreach($profile as $value)
                  
                  
                   
            <div class="card card-user">
            	
              <div class="image">
                <img src="{{ asset('storage/' . $value->image) }}" class="avatar border-gray" alt="..." style="height: 500; width:100%;">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                
                    <h5 class="title text-center"> {{ $value->store }}</h5>
                  </a>
               
                </div>
                
                <p class="description text-center">
                   {{ $value->store_description }}
                </p>
              </div>
         
            </div>
          
          </div>
          <div class="col-md-8">
            <div class="card card-user">
             
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                      
                        <label>Region</label>
                        <input type="text" class="form-control" disabled="" value="{{ $value->region }}">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>County</label>
                        <input type="text" class="form-control" disabled="" value="{{ $value->county }}" >
                      </div>
                    </div>
                      
                  </div>
              <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                      
                        <label>Town</label>
                        <input type="text" class="form-control" disabled="" value="{{ $value->town }}">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Category</label>
                        <input type="text" class="form-control" disabled="" value="{{ $value->category }}" >
                      </div>
                    </div>
                      
                  </div>
              <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                      
                        <label>Mobile1</label>
                        <input type="text" class="form-control" disabled="" value="{{ $value->mobile1 }}">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Mobile2</label>
                        <input type="text" class="form-control" disabled="" value="{{ $value->mobile2 }}" >
                      </div>
                    </div>
                      
                  </div>
         
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Location Description</label>



 <textarea name="" class="form-control" disabled="" >{{ $value->location_description }}</textarea>
                      </div>
                    </div>
                  </div>
                
                  
        
                       <a href="/aspirant/{{ $value->id }}/edit" class="btn btn-primary btn-round">REQUEST UPDATE</a>
                       	@endforeach
                                        <div class="clearfix"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
            @endsection