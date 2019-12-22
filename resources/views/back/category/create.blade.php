@extends('back.layouts.master')

@section('content')
    <section class="content">
        <!-- Default box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add New Category</h3>
            </div>
                <form role="form" method="post" action="{{route('categorystore')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-2"></div>
                            <div class="col-xs-4">
                                <input type="text" class="form-control" id="category" name="category" placeholder="Category Title" required>
                            </div>
                            <div class="col-xs-2">
                                <div class="btn btn-default btn-file">
                                    <i class="fa fa-paperclip"></i> Category Image
                                    <input type="file" name="photo" required>
                                </div>
                            </div>
                            <div class="col-xs-2">
                                <button type="submit" class="btn btn-primary">Add Category</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
            <!-- Default box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">All Main Category</h3>
                </div>
                <!-- /.box-body -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped "  style="width:100%">
                        <thead>
                            <tr>
                                <th>Category Name</th>
                                <th>Action</th>
                                <th>Sub Categories</th>
                                <th>Add Sub Category</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $i = 1 @endphp
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->category}}</td>
                                <td>
                                    <form id="categorydelete-form{{$i}}" action="{{ route('categorydestroy',$category->id) }}" method="POST" style="display: inline-block">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success btn-flat btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">

                                                <li><a href="{{route('categoryedit',$category->id)}}"> <i class="fa fa-edit"></i> Edit</a></li>
                                                <li>
                                                    <a href="javaScript:void(0)" data-id="{{$i}}" class="btn-delete-category"> <i class="fa fa-trash"></i> Delete</a>
                                                </li>          
                                            </ul>
                                        </div>
                                    </form>
                                </td>
                                <td>@foreach($category->subcategory as $subcategory) {{$subcategory->subcategory}} , @endforeach</td>
                                <td>
                                    <button type="button" data-id="{{$category->id}}" id="subcategory_add_button" class="btn btn-xs btn-success" data-toggle="modal"  data-target="#myModal">Add New</button>
                                </td>
                            </tr>
                            @php $i++ @endphp
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div
            <!-- Default box -->
            <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">All sub categories</h3>
                    </div>
                   <div class="box-body">
                        <table id="example2" class="table table-bordered table-striped "  style="width:100%">
                            <thead>
                                <tr>
                                    <th>Subcategory Name</th>
                                    <th>Action</th>
                                    <th>Child Categories</th>
                                    <th>Add Child Category</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php $i = 1; @endphp
                            @foreach($subcategories as $subcategory)
                                <tr>
                                    <td>{{$subcategory->subcategory}}</td>
                                    <td>
                                        <form id="subcategorydelete-form{{$i}}" action="{{ route('subcategorydestroy',$subcategory->id) }}" method="POST" style="display: inline-block">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success btn-flat btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Action <span class="caret"></span></button>
                                                <ul class="dropdown-menu" role="menu">

                                                    <li><a href="{{route('subcategoryedit',$subcategory->id)}}"> <i class="fa fa-edit"></i> Edit</a></li>
                                                    <li>
                                                        <a href="javaScript:void(0)" data-id="{{$i}}" class="btn-delete-subcategory"> <i class="fa fa-trash"></i> Delete</a>
                                                    </li>          
                                                </ul>
                                            </div>
                                        </form>
                                    </td>
                                    <td>@foreach($subcategory->childcategory as $childcategory) {{$childcategory->childcategory}} , @endforeach</td>
                                    <td>
                                        <button type="button" id="childcategory_add_button" data-id="{{$subcategory->id}}" class="btn btn-xs btn-success" data-toggle="modal"  data-target="#myModal">Add New</button>
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
            <!-- Default box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">All Child categories</h3>
                </div>
                <div class="box-body">
                    <table id="childcategory" class="table table-bordered table-striped "  style="width:100%">
                        <thead>
                            <tr>
                                <th>Child Category Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $i = 1; @endphp
                        @foreach($childcategories as $childcategory)
                            <tr>
                                <td>{{$childcategory->childcategory}}</td>
                                <td>
                                    <form id="childcategorydelete-form{{$i}}" action="{{ route('childcategorydestroy',$childcategory->id) }}" method="POST" style="display: inline-block">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success btn-flat btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">

                                                <li><a href="{{route('childcategoryedit',$childcategory->id)}}"> <i class="fa fa-edit"></i> Edit</a></li>
                                                <li>
                                                    <a href="javaScript:void(0)" data-id="{{$i}}" class="btn-delete-childcategory"> <i class="fa fa-trash"></i> Delete</a>
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

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <form id="submitform" method="post">
                <input type="hidden" id="id" name="id">
            <div class="modal-body">
                {{csrf_field()}}
                <select multiple data-role="tagsinput" name="values[]" class="form-control">
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
            </div>

            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

@endsection
@section('script')
    <script>
        $(document).on('click','#subcategory_add_button',function (e) {
            e.preventDefault();
            $('.modal-title').text('Add New Subcategory');
            $('#id').val($(this).attr("data-id"));
            document.getElementById('submitform').action = '{{route('subcategorystore')}}'
        })

        $(document).on('click','#childcategory_add_button',function (e) {
            e.preventDefault();
            $('.modal-title').text('Add New Child Category');
            $('#id').val($(this).attr("data-id"));
            document.getElementById('submitform').action = '{{route('childcategorystore')}}'
        })
        
        
      $(document).on('click','.btn-delete-category',function (e){
        e.preventDefault();
        var id = $(this).data('id');
        console.log(id);
          alertify.confirm('Delete Message', 'Are You Sure You Wand To Delete ?', function(){
              $("#categorydelete-form"+id).submit(); 
              },
              function(){}
              );
          });
          
        $(document).on('click','.btn-delete-subcategory',function (e){
        e.preventDefault();
        var id = $(this).data('id');
        console.log(id);
          alertify.confirm('Delete Message', 'Are You Sure You Wand To Delete ?', function(){
              $("#subcategorydelete-form"+id).submit(); 
              },
              function(){}
              );
          });
          
        $(document).on('click','.btn-delete-childcategory',function (e){
        e.preventDefault();
        var id = $(this).data('id');
        console.log(id);
          alertify.confirm('Delete Message', 'Are You Sure You Wand To Delete ?', function(){
              $("#childcategorydelete-form"+id).submit(); 
              },
              function(){}
              );
          });
    </script>
@endsection