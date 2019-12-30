@extends('back.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Update Color
        </h1>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <form role="form" action="{{ route('updateColor', $color->id) }}" method="post" >
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="PUT">
                    <div class="box-body">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-xs-6 col-md-offset-2">

                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="color" value="{{$color->color}}">
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <div class="btn-group pull-right">
                            <a href="{{route('addSettings')}}" class="btn btn-danger"> <i class="fa fa-close"></i> Cancel</a>
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
