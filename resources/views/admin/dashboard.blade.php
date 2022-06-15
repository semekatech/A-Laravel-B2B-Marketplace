@extends('layouts.adminlayout')
     @section('content')
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <br />
           <h2>Welcome<span style="color:#51be78;"> admin</span></h2>
        <div class="row">
      
          <div class="col-lg-3 col-6">
            <!-- small box -->
           
            <div class="small-box " style="background:#51be78;">
              <div class="inner">
                <h3 style="color:white;">{{ \App\Models\distributor\DistributorProfile::count() }}</h3>

                <p style="color:white;">Distributors/Wholesalers</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/admin/distributors" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ \App\Models\retailers\Retailer::count() }}</h3>

                <p>Retailers</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/admin/retailers" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
             <div class="small-box " style="background:#51be78;">
              <div class="inner">
                <h3 style="color:white;">{{ \App\Models\distributor\DistributorProfile::count() }}</h3>

                <p style="color:white;">Deliverers</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/admin/retailers" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ \App\Models\retailers\Retailer::count() }}</h3>

                <p>Sales Agents</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/admin/retailers" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
           
           
                <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Top Wholesalers/Distributors</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>Wholesalers/Distributor</th>
                    <th>Category</th>
                    <th>Perfomance</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  @foreach($dist as $value)
                    <td>
                      
                      {{ $value->store_name }}
                    </td>
                    <td>{{ $value->category }}</td>
                    <td>
                      <small class="text-success mr-1">
                        <i class="fas fa-arrow-up"></i>
                        12%
                      </small>
                      12,000 Sales
                    </td>
                   
                  </tr>
                  @endforeach
           
                  </tbody>
                </table>
              </div>
            </div>
        
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
<!-- Info Boxes Style 2 -->
            <div class="info-box mb-3 bg-danger">
              <span class="info-box-icon"><i class="fas fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Users</span>
                <span class="info-box-number">{{ \App\Models\User::count() }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-success">
              <span class="info-box-icon"><i class="fas fa-cart-plus"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Sales</span>
                <span class="info-box-number">92,050</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-danger">
              <span class="info-box-icon"><i class="fas fa-dollar-sign"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Transactions</span>
                <span class="info-box-number">100,000 Ksh</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="fas fa-shipping-fast"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Deliveries</span>
                <span class="info-box-number">10,000</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.card -->


      
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->

@endsection