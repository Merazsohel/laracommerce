@extends('back.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Add New product
            <small>Store product details</small>
        </h1>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box box-primary">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <div class="box-header with-border">
            <form role="form" method="post" action="{{route('productstore')}}" enctype="multipart/form-data">
            {{csrf_field()}}
              <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="title">Product Title *</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Product Title" required>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label for="supplierprice">Trade Price *</label>
                            <input type="text" class="form-control" id="supplierprice" name="supplierprice" placeholder="Supplier Price" required>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label for="price">MRP *</label>
                            <input type="text" class="form-control" id="price" name="price" placeholder="Selling Price" required>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-3">
                        <div class="form-group">
                            <label>Select Brand</label>
                            <select class="form-control" name="brand_id" required>
                                <option value="">Brand</option>
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-3">
                        <div class="form-group">
                            <label>Select Supplier</label>
                            <select class="form-control" name="supplier_id" required>
                                <option value="">Supplier</option>
                                @foreach($suppliers as $supplier)
                                 <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-3">
                        <div class="form-group">
                            <label>Select Category</label>
                            <select class="form-control" name="category_id" required>
                                <option value="">Category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-3">
                        <div class="form-group">
                            <label>Select Subcategory</label>
                            <select class="form-control" name="subcategory_id" required>
                                <option value="">Subcategory</option>
                                @foreach($subcategories as $subcategory)
                                    <option value="{{$subcategory->id}}">{{$subcategory->subcategory}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-3">
                        <div class="form-group">
                            <label>Select Child Category</label>
                            <select class="form-control" name="child_category" required>
                                <option value="">Category</option>
                                @foreach($childcategories as $childcategory)
                                    <option value="{{$childcategory->id}}">{{$childcategory->childcategory}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-3">
                        <div class="form-group">
                            <label>Product Code *</label>
                            <input type="text" name="pcode" class="form-control" required>
                        </div>
                    </div>


                    <div class="col-sm-4 col-xs-3">
                        <label>Select Color</label>
                        <div class="form-group">
                            <div class="checkbox">
                                @foreach($colors as $color)
                                <label>
                                <input type="checkbox" value="{{$color->color}}" class="minimal" name="color[]">
                                    {{$color->color}}
                                </label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-3">
                        <label>Select Sizes</label>
                        <div class="form-group">
                            <div class="checkbox">
                                @foreach($sizes as $size)
                                <label>
                                <input type="checkbox"  value="{{$size->name}}" class="minimal" name="size[]">
                                   {{$size->name}}
                                </label>
                               @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="">Product Key Point *</label>
                            <textarea id="keypoint" name="keypoint" rows="10" cols="80">
                            </textarea>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="">Product Description</label>
                            <textarea id="description" name="description" rows="10" cols="80">
                            </textarea>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-3">
                        <label>Product Image</label>
                        <div class="form-group">
                            <div class="btn btn-default btn-file">
                              <i class="fa fa-paperclip"></i> Attachment
                              <input type="file" name="images[]" multiple required>
                            </div>
                            <p class="help-block">You can upload multiple image by pressing Ctrl</p>

                          </div>
                    </div>
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Add Product</button>
              </div>
            </form>
        </div>
    </div>

    </section>

@endsection