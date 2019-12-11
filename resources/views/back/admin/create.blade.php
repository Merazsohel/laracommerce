@extends('back.layouts.master')

@section('content')
    <section class="content">
        <!-- Default box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"> Add Admin Role </h3>
                <div class="box-tools pull-right">
                    <a href="{{route('adminindex')}}" class="btn btn-primary btn-xs" data-toggle="tooltip" title="" data-original-title="View All">
                        <i class="fa fa-eye"></i> View All
                    </a>
                </div>
            </div>
            <form role="form" action="{{ route('adminstore') }}" method="post">
                {{csrf_field()}}  
                <div class="box-body">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-ms-3 col-xs-4">
                                <div class="form-group">
                                    <label for="firstName">First Name</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                                </div>
                            </div>
                            <div class="col-ms-3 col-xs-4">
                                <div class="form-group">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" name="lastName">
                                </div>
                            </div>
                            <div class="col-ms-3 col-xs-4">
                                <div class="form-group">
                                    <label for="email">E-mail Address</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="col-ms-3 col-xs-4">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div>
                            <div class="col-ms-3 col-xs-4">
                                <div class="form-group">
                                    <label for="confirmPassword">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
                                </div>
                            </div>
                            <div class="col-ms-3 col-xs-4">
                                <label>Admin Role</label>
                                <div class="form-group">
                                    <div class="checkbox">
                                        @foreach($roles as $role)
                                            <label>
                                                <input type="checkbox" value="{{$role->id}}" class="minimal" name="role_id[]" />
                                                   {{strtoupper($role->role)}}
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <div class="btn-group pull-right">
                        <button type="reset" class="btn btn-warning"> <i class="fa fa-close"></i> Cancel</button>
                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Submit</button>
                    </div>
                </div>
            </form>
        </div>
    <!-- /.box -->
    </section>
  <!-- /.content -->
@endsection
