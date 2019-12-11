@extends('back.layouts.master')
{{-- {{dd($subcategory)}} --}}
@section('content')
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Child Category Update</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('childcategoryupdate', $childcategory->id) }}" method="POST" class="form-horizontal">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT" />
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 col-sm-offset-2 control-label">Child Category Name</label>
                        <div class="col-sm-6">
                        <input type="text" name="childcategory" class="form-control" id="inputEmail3" value="{{$childcategory->childcategory}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 col-sm-offset-2 control-label">Sub Category</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="subcategory_id">
                                @foreach($subcategories as $subcategory)
                                    <option {{ ($subcategory->id == $childcategory->subcategory->id)?'selected':'' }}  value="{{$subcategory->id}}">{{ $subcategory->subcategory }}</option>
                                @endforeach
                            </select>
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