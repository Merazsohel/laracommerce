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
                <form role="form" method="post" action="{{route('productstore')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="box-body">

                        <div class="row">
                            <div class="col-sm-6 col-xs-6">
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
                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
@endsection
@section('script')
    <script>

    </script>
@endsection