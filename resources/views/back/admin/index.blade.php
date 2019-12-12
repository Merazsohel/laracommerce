@extends('back.layouts.master')

@section('content')
    <section class="content">
        <!-- Default box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">All Admin Roles</h3>
                <div class="box-tools pull-right">
                    <a href="{{route('admincreate')}}" class="btn btn-primary btn-xs" data-toggle="tooltip" title="" data-original-title="Add New Admin">
                        <i class="fa fa-plus"></i> Add New
                    </a>
                </div>
            </div>
                <div class="box-body">
                    <table class="table table-bordered table-striped ">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1; @endphp
                            @foreach($admins as $admin)
                            <tr>
                                <td>{{ $admin->firstName.' '.$admin->lastName }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>@foreach( $admin->roles as $role) | {{$role->role}} | @endforeach</td>
                                <td>
                                    <form id="delete-form{{$i}}" action="{{ route('admindestroy',$admin->id) }}" method="POST" style="display: inline-block">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success btn-flat btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Action <span class="caret"></span></button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#"> <i class="fa fa-eye"></i> Show</a></li>
                                                    <li><a href="{{route('adminedit',$admin->id)}}"> <i class="fa fa-edit"></i> Edit</a></li>
                                                    <li>
                                                        <a href="javaScript:void(0)" data-id="{{$i}}" class="btn-delete"> <i class="fa fa-trash"></i> Delete</a>
                                                    </li>          
                                                </ul>
                                            </div>
                                        </form>
                                </td>
                            </tr>
                            @php $i++; @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
        </div>
    <!-- /.box -->
</section>
  <!-- /.content -->
@endsection
