@extends('back.layouts.master')

@section('content')
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">All Suppliers</h3>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
                  <table class="table table-bordered table-striped " id="example1">
                      <thead>
                          <tr>
                              <th>Name</th>
                              <th>Company</th>
                              <th>Phone Number</th>
                              <th>E-mail Address</th>
                              <th>Address</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @php $i = 1 @endphp
                          @foreach($suppliers as $supplier)
                            <tr>
                                <td>{{ $supplier->name }}</td>
                                <td>{{ $supplier->companyname }}</td>
                                <td>{{ $supplier->phone }}</td>
                                <td>{{ $supplier->email }}</td>
                                <td>{{ $supplier->address }}</td>
                                <td>
                                    <form id="delete-form{{$i}}" action="{{ route('supplierdestroy',$supplier->id) }}" method="POST" style="display: inline-block">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success btn-flat btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="{{route('suppliershow',$supplier->id)}}"> <i class="fa fa-eye"></i> Show</a></li>
                                                <li><a href="{{route('supplieredit',$supplier->id)}}"> <i class="fa fa-edit"></i> Edit</a></li>
                                                <li>
                                                    <a href="javaScript:void(0)" data-id="{{$i}}" class="btn-delete"> <i class="fa fa-trash"></i> Delete</a>
                                                </li>          
                                            </ul>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            @php $i++ @endphp
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
