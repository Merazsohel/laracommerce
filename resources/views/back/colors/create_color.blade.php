@extends('back.layouts.master')

@section('content')
    <div class="content-wrapper" style="min-height: 649px;">
        <section class="content-header">
            <h1>
                Add Color
                <small>Store New Color</small>
            </h1>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <form role="form" action="{{route('storeColor')}}" method="post">
                        @csrf
                        <div class="box-body">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-xs-6 col-md-offset-2">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="color">
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="box-footer">
                            <div class="btn-group pull-right">
                                <button type="reset" class="btn btn-danger"><i class="fa fa-close"></i> Cancel</button>
                                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </section>

    </div>

@endsection