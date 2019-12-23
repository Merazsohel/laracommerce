@extends('back.layouts.master')

@section('content')
    <div class="content-wrapper" style="min-height: 649px;">
        <section class="content-header">
            <h1>
                Add Settings
                <small>Store New Brand Details</small>
            </h1>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <form role="form" action="{{route('storeSettings')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-xs-6 col-md-offset-2">
                                        <div class="form-group">
                                            <label for="name">Site Title</label>
                                            <input type="text" class="form-control" name="site_title">
                                        </div>

                                        <div class="form-group">
                                        <div class="btn btn-default btn-file">
                                            <i class="fa fa-paperclip"></i> Site Logo
                                            <input type="file" name="site_logo">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <div class="btn btn-default btn-file" >
                                            <i class="fa fa-paperclip"></i> Favicon
                                            <input type="file" name="favicon">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Address</label>
                                            <input type="text" class="form-control" name="address">
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Mobile Number</label>
                                            <input type="text" class="form-control" name="mobile">
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Email</label>
                                            <input type="email" class="form-control" name="email">
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Facebook Link</label>
                                            <input type="text" class="form-control" name="facebook_link">
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Twitter Link</label>
                                            <input type="text" class="form-control" name="twitter_link">
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Instagram Link</label>
                                            <input type="text" class="form-control" name="instagram_link">
                                        </div>

                                        <div class="form-group">
                                            <label for="name">LinkedIn Link</label>
                                            <input type="text" class="form-control" name="linkedIn_link">
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Copyright Text</label>
                                            <input type="text" class="form-control" name="copyright_text">
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="box-footer">
                            <div class="btn-group pull-right">
                                <button type="reset" class="btn btn-danger"><i class="fa fa-close"></i> Cancel</button>
                                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </section>

    </div>

@endsection