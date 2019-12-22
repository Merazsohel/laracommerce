@extends('back.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Update Vendor information
            <small>Vendor info can update from here</small>
        </h1>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box box-primary">
        <div class="box-header with-border">
            <form role="form" action="{{ route('supplierupdate', $supplier->id) }}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PUT">
            <div class="box-body">
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="title">Supplier Name</label>
                                <input type="text" class="form-control" id="title" name="name" value="{{ $supplier->name }}">
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="supplierprice">Company Name</label>
                                <input type="text" class="form-control" id="supplierprice" name="companyname" value="{{ $supplier->companyname }}">
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="price">Phone Number</label>
                                <input type="text" class="form-control" id="price" name="phone" value="{{ $supplier->phone }}">
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="price">E-mail Address</label>
                                <input type="text" class="form-control" id="price" name="email" value="{{ $supplier->email }}">
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="price">Address</label>
                                <input type="text" class="form-control" id="price" name="address" value="{{ $supplier->address }}">
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="point">Point</label>
                                <select name="point" class="form-control">
                                    <option value="a+" {{($supplier->point=='a+')? 'selected':''}}>A+</option>
                                    <option value="a" {{($supplier->point=='a')? 'selected':''}}>A</option>
                                     <option value="a-" {{($supplier->point=='a-')? 'selected':''}}>A-</option>
                                     <option value="b"  {{($supplier->point=='b')? 'selected':''}}>B</option>
                                     <option value="b-" {{($supplier->point=='b-')? 'selected':''}}>B-</option>
                                      <option value="c" {{($supplier->point=='c')? 'selected':''}}>C</option>
                                </select>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                    <div class="btn-group pull-right">
                        <a href="{{ route('supplierindex') }}" class="btn btn-danger"> <i class="fa fa-close"></i> Cancel</a>
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
