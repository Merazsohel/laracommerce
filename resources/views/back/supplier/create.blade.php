@extends('back.layouts.master')

@section('content')
    <section class="content">
        <!-- Default box -->
        <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Add New Supplier </h3>
        </div>
        <form role="form" action="{{ route('supplierstore') }}"method="post">
            {{csrf_field()}}
              <div class="box-body">
                 <div class="box-body">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="name">Supplier Name</label>
                                <input type="text" class="form-control" id="name" name="name" required >
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="companyname">Company Name</label>
                                <input type="text" class="form-control" id="companyname" name="companyname" required>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="price">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="email">E-mail Address</label>
                                <input type="email" class="form-control" id="email" name="email" >
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" required>
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
