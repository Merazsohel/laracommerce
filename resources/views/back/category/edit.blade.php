@extends('back.layouts.master')

@section('content')
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Main Category Update</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('categoryupdate', $category->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT" />
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 col-sm-offset-2 control-label">Category Name</label>
                        <div class="col-sm-6">
                        <input type="text" name="category" class="form-control" id="inputEmail3" value="{{$category->category}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 col-sm-offset-2 control-label">Category Photo</label>
                        <div class="col-sm-3">
                            <div class="btn btn-default btn-file">
                                <i class="fa fa-paperclip"></i> Update Image
                                <input type="file" name="photo">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <img width="50" src="{{ asset('/image/category-images/'.$category->photo) }}" alt="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-4">
                            <div class="btn-group">
                                <a href="{{ route('categorycreate') }}" class="btn btn-danger"> <i class="fa fa-close"></i> Back</a>
                                    <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i> Update</button>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </form>
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
@endsection
@section('script')
    <script>
    </script>
@endsection