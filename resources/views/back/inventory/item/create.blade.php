@extends('back.layouts.master')

@section('content')
    <section class="content">
        <!-- Default box -->
        <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"> Add New Items </h3>
        </div>
        <form role="form" action="{{ route('supplierstore') }}"method="post">
            {{csrf_field()}}
              <div class="box-body">
                 <div class="box-body">
                    <div class="row">
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="code">Item Code</label>
                                <input type="text" class="form-control" id="code" name="code" >
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="title">Item Title</label>
                                <input type="text" class="form-control" id="title" name="companyname" >
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="price">Purchase Price</label>
                                <input type="text" class="form-control" id="phone" name="" >
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="retail">Retail Price</label>
                                <input type="text" class="form-control" id="retail" name="" >
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="discount">Discount Rate</label>
                                <input type="text" class="form-control" id="discount" name="" >
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="text" class="form-control" id="quantity" name="quantity" >
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-3">
                            <div class="form-group">
                                <label>Select Category</label>
                                <select class="form-control" name="category_id">
                                    <option value="">Category</option>
                                        <option value="">Cat 01</option>
                                        <option value="">Cat 02</option>
                                </select>
                            </div>
                        </div>
    
                        <div class="col-sm-3 col-xs-3">
                            <div class="form-group">
                                <label>Select Subcategory</label>
                                <select class="form-control" name="subcategory_id">
                                    <option value="">Subcategory</option>
                                        <option value=""> sub 01</option>
                                </select>
                            </div>
                        </div>
    
                        <div class="col-sm-3 col-xs-3">
                            <div class="form-group">
                                <label>Select Child Category</label>
                                <select class="form-control" name="child_category">
                                    <option value="">Category</option>
                                        <option value="">Child -1 </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-3">
                            <div class="form-group">
                                <label>Descriptions</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-3">
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
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                    <div class="btn-group pull-right">
                        <button type="reset" class="btn btn-danger"> <i class="fa fa-close"></i> Cancel</button>
                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Submit</button>
                    </div>
              </div>
            </form>
        </div>
    <!-- /.box -->
    </section>
  <!-- /.content ishrat -->
@endsection
