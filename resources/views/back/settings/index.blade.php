@extends('back.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            All Settings
            <small>There are all Settings</small>
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
                            <th>Site Title</th>
                            <th>Site Logo</th>
                            <th>Favicon</th>
                            <th>Address</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Copyright</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i = 1; @endphp
                        @foreach($settings as $setting)
                            <tr>
                                <td>{{ $setting->site_title }}</td>
                                <td><img src="{{ asset('public/image/site-logo/'.$setting->site_logo) }}"  alt="" width="50px"></td>
                                <td><img src="{{ asset('public/image/favicon/'.$setting->favicon) }}"  alt="" width="50px"></td>
                                <td>{{ $setting->address }}</td>
                                <td>{{ $setting->mobile }}</td>
                                <td>{{ $setting->email }}</td>
                                <td>{{ $setting->copyright_text }}</td>
                                <td>
                                    <form id="delete-form{{$i}}" action="{{ route('settingDestroy',$setting->id) }}" method="POST" style="display: inline-block">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success btn-flat btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">

                                                <li><a href="{{ route('settingEdit', $setting->id) }}"> <i class="fa fa-edit"></i> Edit</a></li>
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
                <div class="box-footer">
                </div>
            </div>
        </div>
    </section>
@endsection
