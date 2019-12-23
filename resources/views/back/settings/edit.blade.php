@extends('back.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Update Settings
        </h1>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <form role="form" action="{{ route('settingsUpdate', $setting->id) }}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="PUT">
                    <div class="box-body">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-xs-6 col-md-offset-2">
                                    <div class="form-group">
                                        <label for="name">Site Title</label>
                                        <input type="text" class="form-control" name="site_title" value="{{$setting->site_title}}">
                                    </div>

                                    <div class="form-group">
                                    <img src="{{ asset('public/image/site-logo/'.$setting->site_logo) }}"  alt="">
                                    </div>

                                    <div class="form-group">
                                        <div class="btn btn-default btn-file">
                                            <i class="fa fa-paperclip"></i> Site Logo
                                            <input type="file" name="site_logo">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <img src="{{ asset('public/image/favicon/'.$setting->favicon) }}"  alt="">
                                    </div>

                                    <div class="form-group">
                                        <div class="btn btn-default btn-file" >
                                            <i class="fa fa-paperclip"></i> Favicon
                                            <input type="file" name="favicon">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Address</label>
                                        <input type="text" class="form-control" name="address" value="{{$setting->address}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Email</label>
                                        <input type="email" class="form-control" name="email" value="{{$setting->email}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Mobile</label>
                                        <input type="text" class="form-control" name="mobile" value="{{$setting->mobile}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Facebook Link</label>
                                        <input type="text" class="form-control" name="facebook_link" value="{{$setting->facebook_link}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Twitter Link</label>
                                        <input type="text" class="form-control" name="twitter_link" value="{{$setting->twitter_link}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Instagram Link</label>
                                        <input type="text" class="form-control" name="instagram_link" value="{{$setting->instagram_link}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">LinkedIn Link</label>
                                        <input type="text" class="form-control" name="linkedIn_link" value="{{$setting->linkedIn_link}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Copyright Text</label>
                                        <input type="text" class="form-control" name="copyright_text" value="{{$setting->copyright_text}}">
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
