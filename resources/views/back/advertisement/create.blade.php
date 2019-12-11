@extends('back.layouts.master')

@section('content')
    <section class="content">
        <!-- Default box -->
        <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Add Addervtisement / Slider Image</h3>
        </div>
        <form role="form" action="{{ route('advertisementstore') }}"method="post" enctype="multipart/form-data">
            {{csrf_field()}}
              <div class="box-body">
                 <div class="box-body">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="title">Main Title</label>
                                <input type="text" class="form-control" id="title" name="title" >
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="subtitle">Sub Title</label>
                                <input type="text" class="form-control" id="subtitle" name="subtitle" >
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="link">Reference Link</label>
                                <input type="text" class="form-control" id="link" name="link" >
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label>Select Position</label>
                                <select class="form-control" name="position" required>
                                    <option value="slider">Slider</option>
                                    <option value="sidebar">Top Left</option>
                                    <option value="middle">Home Page Middle</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <div class="btn btn-default btn-file" style="margin-top:25px">
                                    <i class="fa fa-paperclip"></i> Advertisement Image
                                    <input type="file" name="photo">
                                </div>
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
