@extends('layouts.distlayout')
     @section('content')
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon  elevation-1" style="background-color: #51be78;color:white"><i class="fas fa-shopping-basket"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Retailers</span>
                  <span class="info-box-number"> {{ $favourite }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon elevation-1" style="background-color: #51be78;color:white"><i class="fas fa-cart-plus"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Pending Orders</span>
                  <span class="info-box-number">
                    {{ $pending }}
                    <small></small>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon elevation-1" style="background-color: #51be78;color:white"><i class="fas fa-cart-plus"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Complete Orders</span>
                  <span class="info-box-number">{{ $complete }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
  
            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>
  
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon elevation-1" style="background-color:#51be78;color:white"><i class="fas fa-dollar-sign"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">My Wallet</span>
                  <span class="info-box-number">120,000</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            
            <!-- /.col -->
          </div>
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
        <div class="row">
          <!-- Left col -->
           <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Top Products</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Product Name</th>
                      <th>Points</th>
                      <th>Status</th>
                    
                    </tr>
                    </thead>
                    <tbody>
                     @foreach($products as $value)
                    <tr>
                     
                      <td>{{ $value->product_name }}</td>
                           <td>{{ $value->points }}</td>
                      <td><span class="badge badge-success">Available</span></td>
                      
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
               
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Products</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">
  
  
         <!-- PRODUCT LIST -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="color: #51be78;">Top Retailers</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
               
                  @foreach($retailers as $value)
                  <li class="item">
                    <div class="product-img">
                     
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title" style="color:#51be78;">{{ $value->store }}
                        <span class="badge badge-warning float-right " style="background: #51be78;;">{{ $value->town }}</span></a>
                      <span class="product-description">
                   
                     
                      </span>
                    </div>
                  </li>
                  @endforeach
           
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <a href="/distributors/fevourite" class="uppercase" style="color:#51be78;"><b>View All Retailers</b></a>
              </div>
              <!-- /.card-footer -->
            </div>
            </section>
            <!-- right col -->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </div><!-- /.container-fluid -->


      <script>
        $(function () {
          /* ChartJS
           * -------
           * Here we will create a few charts using ChartJS
           */
      
          //--------------
          //- AREA CHART -
          //--------------
      
          // Get context with jQuery - using jQuery's .get() method.
          var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
      
          var areaChartData = {
            labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [
              {
                label               : 'Digital Goods',
                backgroundColor     : 'rgba(60,141,188,0.9)',
                borderColor         : 'rgba(60,141,188,0.8)',
                pointRadius          : false,
                pointColor          : '#3b8bba',
                pointStrokeColor    : 'rgba(60,141,188,1)',
                pointHighlightFill  : '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data                : [28, 48, 40, 19, 86, 27, 90]
              },
              {
                label               : 'Electronics',
                backgroundColor     : 'rgba(210, 214, 222, 1)',
                borderColor         : 'rgba(210, 214, 222, 1)',
                pointRadius         : false,
                pointColor          : 'rgba(210, 214, 222, 1)',
                pointStrokeColor    : '#c1c7d1',
                pointHighlightFill  : '#fff',
                pointHighlightStroke: 'rgba(220,220,220,1)',
                data                : [65, 59, 80, 81, 56, 55, 40]
              },
            ]
          }
      
          var areaChartOptions = {
            maintainAspectRatio : false,
            responsive : true,
            legend: {
              display: false
            },
            scales: {
              xAxes: [{
                gridLines : {
                  display : false,
                }
              }],
              yAxes: [{
                gridLines : {
                  display : false,
                }
              }]
            }
          }
      
          // This will get the first returned node in the jQuery collection.
          var areaChart       = new Chart(areaChartCanvas, { 
            type: 'line',
            data: areaChartData, 
            options: areaChartOptions
          })
      
          //-------------
          //- LINE CHART -
          //--------------
          var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
          var lineChartOptions = jQuery.extend(true, {}, areaChartOptions)
          var lineChartData = jQuery.extend(true, {}, areaChartData)
          lineChartData.datasets[0].fill = false;
          lineChartData.datasets[1].fill = false;
          lineChartOptions.datasetFill = false
      
          var lineChart = new Chart(lineChartCanvas, { 
            type: 'line',
            data: lineChartData, 
            options: lineChartOptions
          })
      
          //-------------
          //- DONUT CHART -
          //-------------
          // Get context with jQuery - using jQuery's .get() method.
          var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
          var donutData        = {
            labels: [
                'Chrome', 
                'IE',
                'FireFox', 
                'Safari', 
                'Opera', 
                'Navigator', 
            ],
            datasets: [
              {
                data: [700,500,400,600,300,100],
                backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
              }
            ]
          }
          var donutOptions     = {
            maintainAspectRatio : false,
            responsive : true,
          }
          //Create pie or douhnut chart
          // You can switch between pie and douhnut using the method below.
          var donutChart = new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions      
          })
      
          //-------------
          //- PIE CHART -
          //-------------
          // Get context with jQuery - using jQuery's .get() method.
          var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
          var pieData        = donutData;
          var pieOptions     = {
            maintainAspectRatio : false,
            responsive : true,
          }
          //Create pie or douhnut chart
          // You can switch between pie and douhnut using the method below.
          var pieChart = new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions      
          })
      
          //-------------
          //- BAR CHART -
          //-------------
          var barChartCanvas = $('#barChart').get(0).getContext('2d')
          var barChartData = jQuery.extend(true, {}, areaChartData)
          var temp0 = areaChartData.datasets[0]
          var temp1 = areaChartData.datasets[1]
          barChartData.datasets[0] = temp1
          barChartData.datasets[1] = temp0
      
          var barChartOptions = {
            responsive              : true,
            maintainAspectRatio     : false,
            datasetFill             : false
          }
      
          var barChart = new Chart(barChartCanvas, {
            type: 'bar', 
            data: barChartData,
            options: barChartOptions
          })
      
          //---------------------
          //- STACKED BAR CHART -
          //---------------------
          var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
          var stackedBarChartData = jQuery.extend(true, {}, barChartData)
      
          var stackedBarChartOptions = {
            responsive              : true,
            maintainAspectRatio     : false,
            scales: {
              xAxes: [{
                stacked: true,
              }],
              yAxes: [{
                stacked: true
              }]
            }
          }
      
          var stackedBarChart = new Chart(stackedBarChartCanvas, {
            type: 'bar', 
            data: stackedBarChartData,
            options: stackedBarChartOptions
          })
        })
      </script>
      @endsection