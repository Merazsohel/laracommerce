@extends('back.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Update Supplier information
            <small>Supplier info can update from here</small>
        </h1>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box box-primary">
        <div class="box-header with-border">
            <form role="form" action="{{ route('deliveryupdate', $delivery->id) }}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PUT">
              <div class="box-body">
                 <div class="box-body">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="name">Company Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $delivery->name }}">
                            </div>
                        </div>
                        
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="name">Address</label>
                            <input type="text" class="form-control" id="name" name="address" value="{{ $delivery->address }}">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="name">Phone Number</label>
                            <input type="text" class="form-control" id="name" name="phone" value="{{ $delivery->phone }}">
                            </div>
                        </div>
                        
                        <div class="col-xs-12">
                            <div class="form-group">
                            <label for="">Delivery Policy</label>
                                <textarea id="description" name="policy" rows="10" cols="80">{{ $delivery->policy }}</textarea>
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
