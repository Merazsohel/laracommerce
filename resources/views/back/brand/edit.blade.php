@extends('back.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Update  information
        </h1>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box box-primary">
        <div class="box-header with-border">
            <form role="form" action="{{ route('brandupdate', $brand->id) }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PUT">
              <div class="box-body">
                 <div class="box-body">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="name">Brand Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $brand->name }}">
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="btn btn-default btn-file" style="margin-top: 25px">
                                <i class="fa fa-paperclip"></i> Brand Logo
                                <input type="file" name="photo">
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                    <div class="btn-group pull-right">
                        <a href="{{route('brandindex')}}" class="btn btn-danger"> <i class="fa fa-close"></i> Cancel</a>
                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Update</button>
                    </div>
              </div>
            </form>
        </div>
    </div>
    <!-- /.box -->
    </section>
  <!-- /.content -->
@endsection
