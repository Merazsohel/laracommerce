@extends('back.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            All Sizes
            <small>There are all Sizes</small>
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
                        @foreach($sizes as $size)
                            <tr>
                                <td>{{ $size->name }}</td>

                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success btn-flat btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">

                                            <li><a href="{{ route('editSize', $size->id) }}"> <i class="fa fa-edit"></i> Edit</a></li>
                                            <li>
                                                <a href="{{ route('destroySize', $size->id) }}" class="btn" onclick="return confirm('Are you sure to remove this event?');">
                                                    <i class="fa fa-trash"></i>   Delete
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="box-footer">
                </div>
            </div>
        </div>
    </section>
@endsection
