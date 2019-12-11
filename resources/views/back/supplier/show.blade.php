@extends('back.layouts.master')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-primary">
            <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="{{ asset('back/dist/img/user4-128x128.jpg') }}" alt="User profile picture">

            <h3 class="profile-username text-center">{{$supplier->name}}</h3>

            <p class="text-muted text-center">{{$supplier->companyname}}</p>

            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                <b>Total Product</b> <a class="pull-right">{{$totalProduct}}</a>
                </li>
                <li class="list-group-item">
                <b>Total Amount</b> <a class="pull-right">5403</a>
                </li>
                <li class="list-group-item">
                <b>Due Amount</b> <a class="pull-right">1,287</a>
                </li>
            </ul>

            <a href="#" class="btn btn-primary btn-block"><b>Agrement Copy</b></a>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- About Me Box -->
        <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

            <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
            </p>

            <hr>

            <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

            <p class="text-muted">Malibu, California</p>

            <hr>

            <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

            <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
            </p>

            <hr>

            <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{$supplier->companyname}}'s  Products</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped "  style="width:100%">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Sup. Price</th>
                            <th>Price</th>
                            <th>Code</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->title}}</td>
                                <td>{{$product->supplierprice}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->pcode}}</td>
                                <td>
                                @php $i=0; @endphp
                                    @foreach($product->image as $image)
                                        <div class="index-img">
                                        <img src="{{asset('image/product-images/'.$image->image)}}" alt="">
                                        <a href="#." data-id="{{$image->id}}" class="editImageButton" data-toggle="modal"  data-target="#myModal"><i class="fa fa-edit"></i> Edit</a>
                                        </div>
                                    @php $i++; @endphp    
                                    @endforeach
                                </td>
                                <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success btn-flat btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#"> <i class="fa fa-eye"></i> Show</a></li>
                                        <li><a href="{{route('productedit',$product->id)}}"> <i class="fa fa-edit"></i> Edit</a></li>
                                        <li><a href="#"> <i class="fa fa-trash"></i> delete</a></li>
                                    </ul>
                                </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    {{$products->links()}}
                </div>
                <!-- /.box-body -->
                </div>
        </div>
        <!-- /.col -->
    </div>
        <!-- /.row -->
</section>
@endsection
