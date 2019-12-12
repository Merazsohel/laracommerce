@extends('back.layouts.master')

@section('content')
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">All Advertisements </h3>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
                  <table class="table table-bordered table-striped ">
                      <thead>
                          <tr>
                              <th>Mmain Title</th>
                              <th>Sub Title</th>
                              <th>Advertisement Items</th>
                              <th>Position</th>
                              <th>Image</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @php $i = 1 @endphp
                          @foreach($advertisements as $advertisement)
                            <tr>
                                <td>{{ $advertisement->title }}</td>
                                <td>{{ $advertisement->subtitle }}</td>
                                <td>{{ $advertisement->link }}</td>
                                <td>{{ $advertisement->position }}</td>
                                <td>
                                    <img width="50" src="{{ asset('image/advertisement-images/'.$advertisement->photo) }}" alt="">
                                </td>
                                <td>
                                    <form id="delete-form{{$i}}" action="{{ route('advertisementdestroy',$advertisement->id) }}" method="POST" style="display: inline-block">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success btn-flat btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#"> <i class="fa fa-eye"></i> Show</a></li>
                                                <li><a href="{{route('advertisementedit',$advertisement->id)}}"> <i class="fa fa-edit"></i> Edit</a></li>
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
