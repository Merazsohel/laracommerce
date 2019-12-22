@extends('back.layouts.master')

@section('content')

    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$newOrders}}</h3>
              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a  href="{{route('orderindex')}}"  class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$completeOrders}}</h3>
              <p>Orders Delivered</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{route('orderindex')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$totalCustomers}}</h3>
              <p>Total Customers</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$totalAdmins}}</h3>
              <p>Admins</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{route('adminroleindex')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$totalProducts}}</h3>
              <p>Total Products</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{route('productindex')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$totalSuppliers}}</h3>
              <p>Total Vendors</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$totalBrands}}</h3>
              <p>Total Brands</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{route('brandindex')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>

      <div class="row">
        <section class="col-lg-6 connectedSortable">
            <label>Product Sales Summery</label>
          <div class="nav-tabs-custom">
            <canvas id="totalProductSale" width="400" height="400"></canvas>
          </div>
        </section>

        <section class="col-lg-6 connectedSortable">
            <label>Monthly Sales Summery</label>
          <div class="nav-tabs-custom">
            <canvas id="monthlySale" width="400" height="400"></canvas>
          </div>
        </section>


        <section class="col-lg-6 connectedSortable">
            <label>Sales Summery of Each Category</label>
          <div class="nav-tabs-custom">
            <canvas id="categoryWiseSale" width="400" height="400"></canvas>
          </div>
        </section>
      </div>

    </section>
@endsection
@section('script')

  <script>

      $(document).ready(function(){
          Chart.defaults.line.spanGaps = true;
          var token='{{\Illuminate\Support\Facades\Session::token()}}';
          'use strict';
          $.ajax({
              url:"{{route('productSalseReport')}}",
              method:"post",
              data:{
                  _token:token
              },
              success:function(data){
                  var title =[];
                  var total= [];
                  for(var i in data[0]){
                      title.push("Supplier: "+data[0][i].name);
                      total.push(data[0][i].total);
                  }
                  var BARCHARTHOME = $('#totalProductSale');
                  var barChartHome = new Chart(BARCHARTHOME, {
                      type: 'bar',
                      options:
                          {
                              legend: {
                                  display: true
                              }
                          },
                      data: {
                          labels: title,
                          datasets: [
                              {
                                  label: 'Total Sales',
                                  backgroundColor: [
                                      'rgba(255, 99, 132, 0.2)',
                                      'rgba(54, 162, 235, 0.2)',
                                      'rgba(255, 206, 86, 0.2)',
                                      'rgba(75, 192, 192, 0.2)',
                                      'rgba(153, 102, 255, 0.2)',
                                      'rgba(255, 159, 64, 0.2)'
                                  ],
                                  borderColor:
                                      '#fff',
                                  borderWidth: 1,
                                  data:total,
                              }
                          ]
                      }
                  });

                  var month =[];
                  var totalsale= [];
                  for(var i in data[1]){
                      month.push(data[1][i].month+" "+data[1][i].year);
                      totalsale.push(data[1][i].total);
                  }
                  var BARCHARTHOME = $('#monthlySale');
                  var barChartHome = new Chart(BARCHARTHOME, {
                      type: 'bar',
                      options:
                          {
                              scales:
                                  {
                                      xAxes: [{
                                          display:true,
                                          gridLines: {
                                              color: '#eee'
                                          }
                                      }],
                                      yAxes: [{
                                          display: true,
                                          ticks: {
                                              beginAtZero:true
                                          }
                                      }],
                                  },

                              legend: {
                                  display: true
                              }
                          },
                      data: {
                          labels: month,
                          datasets: [
                              {
                                  label: 'Total Sales',
                                  backgroundColor: [
                                      'rgba(255, 99, 132, 0.2)',
                                      'rgba(54, 162, 235, 0.2)',
                                      'rgba(255, 206, 86, 0.2)',
                                      'rgba(75, 192, 192, 0.2)',
                                      'rgba(153, 102, 255, 0.2)',
                                      'rgba(255, 159, 64, 0.2)'
                                  ],
                                  borderColor:
                                      '#fff',
                                  borderWidth: 1,
                                  data:totalsale,
                              }
                          ]
                      }
                  });

                  var category =[];
                  var totalsale= [];
                  for(var i in data[2]){
                      category.push(data[2][i].category);
                      totalsale.push(data[2][i].total);
                  }
                  var BARCHARTHOME = $('#categoryWiseSale');

                  var lineChartHome = new Chart(BARCHARTHOME, {
                      type: 'line',
                      options:
                          {
                              scales:
                                  {
                                      xAxes: [{
                                          display:true,
                                          gridLines: {
                                              color: '#eee'
                                          }
                                      }],
                                      yAxes: [{
                                          display: true,
                                          ticks: {
                                              beginAtZero:true
                                          },
                                      }],
                                  },
                                  
                          },
                      data: {
                          labels: category,
                          datasets: [
                              {
                                  data:totalsale,
                                  borderColor:'#e51048',
                                  backgroundColor:'rgba(255, 206, 86, 0.2)',
                              }
                          ]
                      }
                  });
              },

              error:function (data) {
                console.log(data);
              }
          });

      })

  </script>
@endsection