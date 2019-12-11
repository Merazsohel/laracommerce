@extends('back.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Add New Delivery
            <small>Store product details</small>
        </h1>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box box-primary">
        <div class="box-header with-border">
            <form role="form" action="{{ route('deliverystore') }}" method="post">
                {{csrf_field()}}  
                <div class="box-body">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label for="name">Delivery Company Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label for="name">Address</label>
                                    <input type="text" class="form-control" id="name" name="address" required>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label for="name">Phone Number</label>
                                    <input type="text" class="form-control" id="name" name="phone" required>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="form-group">
                                <label for="">Delivery Policy</label>
                                    <textarea id="description" name="policy" rows="10" cols="80" required></textarea>
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
    </div>
    <!-- /.box -->
    </section>
  <!-- /.content -->
@endsection
