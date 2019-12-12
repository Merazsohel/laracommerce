
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Meraz Shop</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" href="{{asset('public/front/images/favicon.png')}}" type="image/x-icon" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('public/back/bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{ asset('public/back/plugins/iCheck/all.css')}}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset('public/back/plugins/datepicker/datepicker3.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('public/back/dist/css/AdminLTE.min.css')}}">
  <!-- Input tags -->
  <link rel="stylesheet" href="{{ asset('public/back/dist/css/bootstrap-tagsinput.css')}}">
  <!-- alertify -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/alertify.min.css"/>
  <!-- Default theme -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/default.min.css"/>
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('public/back/dist/css/skins/_all-skins.min.css')}}">

  <!-- Custom style -->
  <link rel="stylesheet" href="{{ asset('public/back/dist/css/custom.css')}}">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{route('adminindex')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Meraz</b>SHOP</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        Logo
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              
              <span class="hidden-xs">{{strtoupper(\Illuminate\Support\Facades\Auth::guard('admin')->user()->firstName)}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ asset('front/images/logo.png')}} " class="img-circle" alt="User Image">

                <p>
                  {{strtoupper(\Illuminate\Support\Facades\Auth::guard('admin')->user()->firstName)}}
                </p>
              </li>
            
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">

                  {{ \Illuminate\Support\Facades\Auth::guard('admin')->user()->username }}
                  <a class=" btn btn-default btn-flat" href="{{route('adminlogout')}}"
                     onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                    {{ __('Logout')}}
                  </a>
                  <form id="logout-form" action="{{route('adminlogout')}}" method="POST" style="display: none;">
                    @csrf
                  </form>

                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          logo
        </div>
        <div class="pull-left info">
          <p> {{strtoupper(\Illuminate\Support\Facades\Auth::guard('admin')->user()->firstName)}}</p>
          
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="{{ route('adminindex') }}"><i class="fa fa-dashboard"></i> <span> Dashboard </span></a></li>
        <li><a href="{{ route('orderindex') }}"><i class="fa fa-bullhorn"></i> <span> All Orders </span></a></li>
        <li><a href="{{ route('categorycreate') }}"><i class="fa fa-sitemap"></i> <span> All Categories </span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cubes"></i> <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="{{route('productindex')}}"><i class="fa fa-circle-o"></i> All Products</a></li>  
              <li><a href="{{route('productcreate')}}"><i class="fa fa-circle-o"></i> Add New</a></li>
              <li><a href="{{route('todaysSale')}}"><i class="fa fa-circle-o"></i>Todays Sales</a></li>
              <li><a href="{{route('allsalesData')}}"><i class="fa fa-circle-o"></i>All Sales</a></li>
              <li><a href="{{route('productsalesdata')}}"><i class="fa fa-circle-o"></i>Product sales data</a></li>
              <li><a href="{{route('categorywisesale')}}"><i class="fa fa-circle-o"></i>Category Wise Sale</a></li>
              <li><a href="{{route('supplierwise')}}"><i class="fa fa-circle-o"></i>Supplier Wise Sale</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-secret"></i> <span>Advertisement</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('advertisementcreate')}}"><i class="fa fa-circle-o"></i> Add New</a></li>
            <li><a href="{{route('advertisementindex')}}"><i class="fa fa-circle-o"></i> Manage Advertisement</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-secret"></i> <span>Supplier</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('suppliercreate')}}"><i class="fa fa-circle-o"></i> Add New</a></li>
            <li><a href="{{route('supplierindex')}}"><i class="fa fa-circle-o"></i> All Supplier</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-secret"></i> <span>Delivery Payment</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('deliverypayment')}}"><i class="fa fa-circle-o"></i> All Payment Records</a></li>
          </ul>
        </li>
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-shield"></i> <span>Brand</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('brandcreate')}}"><i class="fa fa-circle-o"></i> Add New</a></li>
            <li><a href="{{route('brandindex')}}"><i class="fa fa-circle-o"></i> All Brands</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-truck"></i> <span>Delivery</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('deliverycreate')}}"><i class="fa fa-circle-o"></i> Add New</a></li>
            <li><a href="{{route('deliveryindex')}}"><i class="fa fa-circle-o"></i> All Delivery Companies</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Admin Role</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admincreate')}}"><i class="fa fa-circle-o"></i> Add New</a></li>
            <li><a href="{{route('adminroleindex')}}"><i class="fa fa-circle-o"></i> All Roles</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-truck"></i> <span>Supplier Payment</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('supplierpayment')}}"><i class="fa fa-circle-o"></i> Payment Details</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-truck"></i> <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('salesindex')}}"><i class="fa fa-circle-o"></i> Sales Report</a></li>
          </ul>
        </li>
        <li class="header">System Manage</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-secret"></i> <span>Inventory</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('inventoryitemcreate')}}"><i class="fa fa-circle-o"></i> Add Item</a></li>
            <li><a href="{{route('inventoryitemcreate')}}"><i class="fa fa-circle-o"></i></a></li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        @section('content')@show
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Developed By Meraz</strong>
  </footer>
  
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{ asset('public/back/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('public/back/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('public/back/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{ asset('public/back/plugins/iCheck/icheck.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<!-- Date Range Picker -->
<script src="{{ asset('public/back/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('public/back/plugins/fastclick/fastclick.js') }}"></script>
<!-- CKEditor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/back/dist/js/app.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('public/back/dist/js/demo.js') }}"></script>
<!-- Input tags -->
<script src="{{ asset('public/back/dist/js/bootstrap-tagsinput.min.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/alertify.min.js"></script>
<script src="{{asset('public/back/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/back/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(function () {
        $('#example1').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,

            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        });
    });

    $(function(){
      $('#example2').DataTable();
    });
    
    $(function(){
      $('#childcategory').DataTable();
    });
    
    @if(session('success'))
    alertify.success('{{session('success')}}');
    @endif

    @if(session('error'))
      alertify.error('{{session('error')}}');
    @endif

  $(document).on('click','.btn-delete',function (e){
    e.preventDefault();
    var id = $(this).data('id');
    console.log(id);
      alertify.confirm('Delete Message', 'Are You Sure You Wand To Delete ?', function(){
          $("#delete-form"+id).submit(); 
          },
          function(){}
          );
      });
</script>
@yield('script')

<script src="{{ asset('public/back/dist/js/activation.js') }}"></script>

</body>
</html>
