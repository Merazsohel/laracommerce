@extends('back.layouts.master')

@section('content')
<section class="content">
    <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                                <div class="row">
                                    <div class="col-md-3 col-sm-5">
                                        <div class="form-group">
                                            <label>Suppliers</label>
                                            <form name="supplierform" id="supplierform"  method="get">
                                                <select class="form-control" id="supplier">
                                                    <option>Select Supplier</option>
                                                    @foreach($suppliers as $supplier)
                                                        <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                                    @endforeach
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-5">
                                        <div class="form-group">
                                            <label>Select Brands</label>
                                            <form action="" method="get" id="brandform">
                                                <select id="brand" class="form-control">
                                                    <option value="">Select Brand</option>
                                                    @foreach($brands as $brand)
                                                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                    @endforeach
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-5">
                                        <div class="form-group">
                                            <label>Select Category</label>
                                            <form method="get" id="categoryform">
                                                <select class="form-control" id="category">
                                                    <option value="">Select Category</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->category}}</option>
                                                    @endforeach
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-5">
                                        <div class="form-group">
                                            <label>Select Type</label>
                                            <form method="get" id="childcategoryform">
                                                <select class="form-control" id="childcategory">
                                                    <option value="">Select Type</option>
                                                    @foreach($childcategories as $childcategory)
                                                        <option value="{{$childcategory->id}}">{{$childcategory->childcategory}}</option>
                                                    @endforeach
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">All Products</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped "  style="width:100%">
                <thead>
                    <tr>
                      <th>Title</th>
                      <th>TP</th>
                      <th>MRP</th>
                      <th>Code</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     @php $z=0; @endphp
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
                                    <img src="{{asset('public/image/product-images/'.$image->image)}}" alt="">
                                    <a href="#." data-id="{{$image->id}}" class="editImageButton" data-toggle="modal"  data-target="#myModal"><i class="fa fa-edit"></i> Edit</a>
                                  </div>
                                @php $i++; @endphp    
                              @endforeach
                          </td>
                          <td>
                            <div class="btn-group">
                                <form id="delete-form{{$z}}" action="{{ route('product.delete',$product->id) }}" method="POST" style="display: inline-block">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success btn-flat btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Action <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="{{route('productedit',$product->id)}}"> <i class="fa fa-edit"></i> Edit</a></li>
                                            <li>
                                                <a href="javaScript:void(0)" data-id="{{$z}}" class="btn-delete"> <i class="fa fa-trash"></i> Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                          </td>
                        </tr>
                          @php $z++; @endphp
                    @endforeach
                </tbody>
              </table>

            </div>
            <!-- /.box-body -->
          </div>

          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Default Modal</h4>
                  </div>
                <form action="" id="imageUpdateForm" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                  <div class="modal-body">
                      <p>Existing Image</p>
                      <div id="existinimage"></div>
                      <label>Update Product Image</label>
                      <div class="form-group">
                          <div class="btn btn-default btn-file">
                              <i class="fa fa-paperclip"></i> Attachment
                              <input type="file" name="image">
                          </div>
                      </div>
                      <input type="hidden" id="id" name="id">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </form>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>

</section>
@endsection
@section('script')
    <script>
        $('.editImageButton').on('click',function (e) {
            e.preventDefault();
            var id=$(this).data('id');

            document.getElementById('imageUpdateForm').action = '{{route('updateproductimage')}}'
            $.ajax({
                url:'{{route('getproductimage')}}',
                type:'post',
                data:{
                    '_token':'{{csrf_token()}}',
                    'id':id
                },
                success:function (res) {
                    console.log(res);
                    $('#existinimage').html('<img src="public/image/product-images/'+res.image+'" style="width: 100px;">');
                    $('#id').val(res.id);
                },
                error:function (res) {
                    alert(res.responseText);
                }
            })
        })

        $('#supplier').on('change',function () {
            $("#supplierform").attr('action',  document.location.origin+'/ecommerce/admin/supplier/product/search/'+$(this).val()+'');
            this.form.submit();
        })

        $('#brand').on('change',function () {
            $("#brandform").attr('action',  document.location.origin+'/ecommerce/admin/brand/product/search/'+$(this).val()+'');
            this.form.submit();
        })
        $('#category').on('change',function () {
            $("#categoryform").attr('action',  document.location.origin+'/ecommerce/admin/category/product/search/'+$(this).val()+'');
            this.form.submit();
        })
        $('#childcategory').on('change',function () {
            $("#childcategoryform").attr('action',  document.location.origin+'/ecommerce/admin/type/product/search/'+$(this).val()+'');
            this.form.submit();
        })
    </script>
@endsection