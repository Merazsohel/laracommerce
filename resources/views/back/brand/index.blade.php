@extends('back.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
           All Brnads Lists
            <small>There are all Brands list</small>
        </h1>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box box-primary">
        <div class="box-header with-border">
              <div class="box-body">
                  <table class="table table-bordered table-striped ">
                      <thead>
                          <tr>
                              <th>Name</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @php $i = 1; @endphp
                          @foreach($brands as $brand)
                          <tr>
                            <td>{{ $brand->name }}</td>
                            <td>
                                <form id="delete-form{{$i}}" action="{{ route('branddestroy',$brand->id) }}" method="POST" style="display: inline-block">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success btn-flat btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#"> <i class="fa fa-eye"></i> Show</a></li>
                                            <li><a href="{{ route('brandedit', $brand->id) }}"> <i class="fa fa-edit"></i> Edit</a></li>
                                            <li>
                                                <a href="javaScript:void(0)" data-id="{{$i}}" class="btn-delete"> <i class="fa fa-trash"></i> Delete</a>
                                            </li>          
                                        </ul>
                                    </div>
                                </form>
                              </td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                {{-- Footer content --}}
              </div>
        </div>
    </div>
    <!-- /.box -->
    </section>
  <!-- /.content -->
@endsection
