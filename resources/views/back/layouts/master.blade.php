<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Meraz Shop</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="icon" href="{{asset('public/front/images/favicon.png')}}" type="image/x-icon"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('public/back/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('public/back/plugins/iCheck/all.css')}}">
    <link rel="stylesheet" href="{{ asset('public/back/plugins/datepicker/datepicker3.css')}}">
    <link rel="stylesheet" href="{{ asset('public/back/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/back/dist/css/bootstrap-tagsinput.css')}}">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/default.min.css"/>
    <link rel="stylesheet" href="{{ asset('public/back/dist/css/skins/_all-skins.min.css')}}">

    <link rel="stylesheet" href="{{ asset('public/back/dist/css/custom.css')}}">
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

    <header class="main-header">

        <a href="{{route('adminindex')}}" class="logo">

            <span class="logo-mini"><b>A</b>LT</span>

            <span class="logo-lg"><b>Meraz</b>SHOP</span>
        </a>

        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                            <span class="hidden-xs">{{strtoupper(\Illuminate\Support\Facades\Auth::guard('admin')->user()->firstName)}}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">

                                    {{ \Illuminate\Support\Facades\Auth::guard('admin')->user()->username }}
                                    <a class=" btn btn-default btn-flat" href="{{route('adminlogout')}}"
                                       onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout')}}
                                    </a>
                                    <form id="logout-form" action="{{route('adminlogout')}}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>

                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    logo
                </div>
                <div class="pull-left info">
                    <p> {{strtoupper(\Illuminate\Support\Facades\Auth::guard('admin')->user()->firstName)}}</p>

                </div>
            </div>

            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li><a href="{{ route('adminindex') }}"><i class="fa fa-dashboard"></i> <span> Dashboard </span></a>
                </li>
                <li><a href="{{ route('orderindex') }}"><i class="fa fa-bullhorn"></i> <span> All Orders </span></a>
                </li>
                <li><a href="{{ route('categorycreate') }}"><i class="fa fa-sitemap"></i> <span> All Categories </span></a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-product-hunt"></i> <span>Products</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('productindex')}}"><i class="fa fa-circle-o"></i> All Products</a></li>
                        <li><a href="{{route('productcreate')}}"><i class="fa fa-circle-o"></i> Add New</a></li>

                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-image"></i> <span>Slider</span>
                        <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i>  </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('advertisementcreate')}}"><i class="fa fa-circle-o"></i> Add New</a></li>
                        <li><a href="{{route('advertisementindex')}}"><i class="fa fa-circle-o"></i> Manage
                                Slider</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user-secret"></i> <span>Vendor</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('suppliercreate')}}"><i class="fa fa-circle-o"></i> Add New</a></li>
                        <li><a href="{{route('supplierindex')}}"><i class="fa fa-circle-o"></i> All Vendor</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-money"></i> <span>Delivery Payment</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('deliverypayment')}}"><i class="fa fa-circle-o"></i> All Payment
                                Records</a></li>
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
                        <li><a href="{{route('deliveryindex')}}"><i class="fa fa-circle-o"></i> All Delivery
                                Companies</a></li>
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
                        <i class="fa fa-money"></i> <span>Vendor Payment</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('datewiseSupplierPayment')}}"><i class="fa fa-circle-o"></i> Payment Details</a>
                        </li>
                    </ul>
                </li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-file-pdf-o"></i> <span>Sales Report</span>
                        <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i>  </span>
                    </a>
                    <ul class="treeview-menu">

                        <li><a href="{{route('todaysSale')}}"><i class="fa fa-circle-o"></i>Todays Sales</a></li>
                        <li><a href="{{route('allsalesData')}}"><i class="fa fa-circle-o"></i>Monthly Sales Report</a></li>
                        <li><a href="{{route('productsalesdata')}}"><i class="fa fa-circle-o"></i>All Time Sales Report</a> </li>
                        <li><a href="{{route('salesindex')}}"><i class="fa fa-circle-o"></i>Yearly Sales Report</a></li>
                        <li><a href="{{route('categorywisesale')}}"><i class="fa fa-circle-o"></i>Category Sales Report</a>  </li>
                        <li><a href="{{route('supplierwise')}}"><i class="fa fa-circle-o"></i>Vendor Sales Report</a> </li>

                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-gear"></i> <span>Settings</span>
                        <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i>  </span>
                    </a>
                    <ul class="treeview-menu">

                        <li><a href="{{route('addSettings')}}"><i class="fa fa-circle-o"></i>Add Settings</a></li>
                        <li><a href="{{route('allSettings')}}"><i class="fa fa-circle-o"></i>Manage Settings</a></li>

                    </ul>
                </li>

            </ul>

        </section>
        <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper">
        @section('content')@show
    </div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.0
        </div>
        <strong>Developed By Meraz</strong>
    </footer>

    <div class="control-sidebar-bg"></div>
</div>

<script src="{{ asset('public/back/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<script src="{{ asset('public/back/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/back/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('public/back/plugins/iCheck/icheck.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ asset('public/back/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<script src="{{ asset('public/back/plugins/fastclick/fastclick.js') }}"></script>
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script src="{{ asset('public/back/dist/js/app.min.js') }}"></script>
<script src="{{ asset('public/back/dist/js/demo.js') }}"></script>
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

    $(function () {
        $('#example2').DataTable();
    });

    $(function () {
        $('#childcategory').DataTable();
    });

    @if(session('success'))
    alertify.success('{{session('success')}}');
    @endif

    @if(session('error'))
    alertify.error('{{session('error')}}');
    @endif

    $(document).on('click', '.btn-delete', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        console.log(id);
        alertify.confirm('Delete Message', 'Are You Sure You Wand To Delete ?', function () {
                $("#delete-form" + id).submit();
            },
            function () {
            }
        );
    });
</script>
@yield('script')

<script src="{{ asset('public/back/dist/js/activation.js') }}"></script>

</body>
</html>
