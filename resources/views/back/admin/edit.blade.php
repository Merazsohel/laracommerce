@extends('back.layouts.master')

@section('content')
    <section class="content">
        <!-- Default box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Admin Role Update</h3>
            </div>
            <form role="form" action="{{ route('adminupdate', $admin->id) }}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PUT">
              <div class="box-body">
                 <div class="box-body">
                    <div class="row">
                        <div class="col-ms-3 col-xs-4">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" value="{{ $admin->firstName }}">
                            </div>
                        </div>
                        <div class="col-ms-3 col-xs-4">
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" value="{{ $admin->lastName }}">
                            </div>
                        </div>
                        <div class="col-ms-3 col-xs-4">
                            <div class="form-group">
                                <label for="email">E-mail Address</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $admin->email }}">
                            </div>
                        </div>
                        <div class="col-ms-3 col-xs-4">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" id="password" name="password">
                            </div>
                        </div>
                      
                        <div class="col-ms-3 col-xs-4">
                            <label>Admin Role</label>
                            <div class="form-group">
                                <div class="checkbox">
                                    @foreach($roles as $role)
                                    @if($admin->hasRole($role->role))
                                        <label>
                                            <input type="checkbox" checked  value="{{$role->id}}" class="minimal" name="role_id[]" />
                                               {{$role->role}}
                                        </label>
                                        @else
                                        <label>
                                            <input type="checkbox"  value="{{$role->id}}" class="minimal" name="role_id[]" />
                                                {{$role->role}}
                                        </label>
                                        @endif
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
                        <a href="{{route('adminroleindex')}}" class="btn btn-danger"> <i class="fa fa-close"></i> Back</a>
                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Update</button>
                    </div>
              </div>
            </form>
        </div>
    <!-- /.box -->
    </section>
  <!-- /.content -->
@endsection
