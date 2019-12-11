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
            <div class="box-header with-border">
                <form role="form" method="post" action="{{route('productupdate',$product->id)}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="PUT">
                    <div class="box-body">

                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="title">Product Title</label>
                                    <input type="text" class="form-control" value="{{$product->title}}" id="title" name="title" placeholder="Product Title">
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <label for="supplierprice">Supllier Price</label>
                                    <input type="text" class="form-control" value="{{$product->supplierprice}}" id="supplierprice" name="supplierprice" placeholder="Supplier Price">
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <label for="price">Selling Price</label>
                                    <input type="text" class="form-control" value="{{$product->price}}" id="price" name="price" placeholder="Selling Price">
                                </div>
                            </div>
                        </div>
                        
                         <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="">Product Keypoint</label>
                                    <textarea id="keypoint" name="keypoint" rows="10" cols="80">
                                        {{$product->keypoint}}
                            </textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="">Product Description</label>
                                    <textarea id="description" name="description" rows="10" cols="80">
                                        {{$product->description}}
                            </textarea>
                                </div>
                            </div>
                        </div>

                       

                        <div class="row">
                            <div class="col-ms-3 col-xs-3">
                                <div class="form-group">
                                    <label>Select Brand</label>
                                    <select class="form-control" name="brand_id">
                                        <option value="">Brand</option>
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}"   {{$product->brand_id==$brand->id ?  'selected':''}}  >{{$brand->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-ms-3 col-xs-3">
                                <div class="form-group">
                                    <label>Select Supplier</label>
                                    <select class="form-control" name="supplier_id">
                                        <option value="">Brand</option>
                                        @foreach($suppliers as $supplier)
                                            <option value="{{$supplier->id}}" {{$product->supplier_id==$supplier->id ? 'selected':''}}  >{{$supplier->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-ms-3 col-xs-3">
                                <div class="form-group">
                                    <label>Select Category</label>
                                    <select class="form-control" name="category_id">
                                        <option value=""> Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" {{$product->category_id==$category->id ? 'selected':''}} >{{$category->category}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-ms-3 col-xs-3">
                                <div class="form-group">
                                    <label>Select Sub-category</label>
                                    <select class="form-control" name="subcategory_id">
                                        <option value=""> Category</option>
                                        @foreach($subcategories as $category)
                                            <option value="{{$category->id}}" {{$product->subcategory_id==$category->id ? 'selected':''}} >{{$category->subcategory}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="col-ms-3 col-xs-3">
                                <div class="form-group">
                                    <label>Select Child category</label>
                                    <select class="form-control" name="child_category">
                                        <option value="">Child Category</option>
                                        @foreach($childcategories as $category)
                                            <option value="{{$category->id}}" {{$product->child_category==$category->id ? 'selected':''}} >{{$category->childcategory}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-ms-3 col-xs-3">
                                <div class="form-group">
                                    <label>Product Code</label>
                                    <input type="text" name="pcode" value="{{$product->pcode}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-ms-3 col-xs-3">
                                <div class="form-group">
                                    <label>Product Weight</label>
                                    <input type="text" name="weight" value="{{$product->weight}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-ms-3 col-xs-3">
                                <label>Select Color</label>
                                <div class="form-group">
                                   <span style="color:crimson"> Current Colors:
                                    @foreach($product->color as $color)
                                       {{strtoupper($color->color.", ")}}
                                    @endforeach
                                    </span>
                                    <div class="form-group">
                            <div class="checkbox">
                                <label>
                                <input type="checkbox" value="red" class="minimal" name="color[]">
                                    Red
                                </label>
                           
                                <label>
                                <input type="checkbox"  value="blue" class="minimal" name="color[]">
                                    Blue
                                </label>
                           
                                <label>
                                <input type="checkbox"  value="black" class="minimal" name="color[]">
                                    Black
                                </label>
                                <input type="checkbox"  value="green" class="minimal" name="color[]">
                                    Green
                                </label>
                                <input type="checkbox"  value="white" class="minimal" name="color[]">
                                    White
                                </label>
                                 <input type="checkbox"  value="pink" class="minimal" name="color[]">
                                    Pink
                                </label>
                                <input type="checkbox"  value="yellow" class="minimal" name="color[]">
                                    Yellow
                                </label>
                                <input type="checkbox"  value="silver" class="minimal" name="color[]">
                                    Silver
                                </label>
                                <input type="checkbox"  value="purple" class="minimal" name="color[]">
                                    Purple
                                </label>
                                 <input type="checkbox"  value="magento" class="minimal" name="color[]">
                                    Magento
                                </label>
                            </div>
                        </div>
                                </div>
                            </div>
                            <div class="col-ms-3 col-xs-3">
                                <label>Select Sizes</label>
                                <div class="form-group">
                                  <span style="color:crimson">  Current Sizes :
                                    @foreach($product->size as $size)
                                        {{strtoupper($size->size.", ")}}
                                    @endforeach
                                    </span>
                                    <div class="checkbox">
                                        <label>
                                        <input type="checkbox"  value="xl" class="minimal" name="size[]">
                                            Extra Large
                                        </label>
                                        <label>
                                        <input type="checkbox" value="l" class="minimal" name="size[]">
                                            Large
                                        </label>
                                         <input type="checkbox" value="m" class="minimal" name="size[]">
                                            Medium
                                        </label>
                                        <label>
                                        <input type="checkbox" value="s" class="minimal" name="size[]">
                                            Small
                                        </label>
                                        <label>
                                        <input type="checkbox" value="xs" class="minimal" name="size[]">
                                            Extra Small
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-ms-3 col-xs-3">
                                <div class="form-group">
                                    <label>Price Discount</label>
                                    @if(!is_null($product->discount))
                                        <input type="text" value="{{$product->discount->amount}}" name="discount" class="form-control">
                                    @else
                                        <input type="text" name="discount" class="form-control">
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-3">
                                @foreach($product->image as $image)
                                    <img src="{{asset('image/product-images/'.$image->image)}}" style="width: 80px" alt="">
                                @endforeach
                                <label>Upload Product Image</label>
                                <div class="form-group">
                                    <div class="btn btn-default btn-file">
                                        <i class="fa fa-paperclip"></i> Attachment
                                        <input type="file" name="images[]" multiple>
                                    </div>
                                    <p class="help-block">You can upload multiple image by pressing Ctrl</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update Product</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
@endsection
