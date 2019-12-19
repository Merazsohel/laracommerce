@extends('back.layouts.master')

@section('content')
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">All Products sales data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped "  style="width:100%">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Total sales</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($productsalesata as $product)
                        <tr>
                            <td>{{$product->title}}</td>
                            <td>{{$product->totalsale}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Default Modal</h4>
                    </div>
                    <form action="" id="imageUpdateForm" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="modal-body">
                            <p>Existing Image</p>
                            <div id="existinimage"></div>
                            <label>Update Product Image</label>
                            <div class="form-group">
                                <div class="btn btn-default btn-file">
                                    <i class="fa fa-paperclip"></i> Attachment
                                    <input type="file" name="image">
                                </div>
                            </div>
                            <input type="hidden" id="id" name="id">
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

    </section>
@endsection
@section('script')
    <script>
        $('.editImageButton').on('click',function (e) {
            e.preventDefault();
            var id=$(this).data('id');

            document.getElementById('imageUpdateForm').action = '{{route('updateproductimage')}}'
            $.ajax({
                url:'{{route('getproductimage')}}',
                type:'post',
                data:{
                    '_token':'{{csrf_token()}}',
                    'id':id
                },
                success:function (res) {
                    console.log(res);
                    $('#existinimage').html('<img src="/public/image/product-images/'+res.image+'" style="width: 100px;">');
                    $('#id').val(res.id);
                },
                error:function (res) {
                    alert(res.responseText);
                }
            })
        })

        $('#supplier').on('change',function () {
            $("#supplierform").attr('action',  document.location.origin+'/admin/supplier/product/search/'+$(this).val()+'');
            this.form.submit();
        })

        $('#brand').on('change',function () {
            $("#brandform").attr('action',  document.location.origin+'/admin/brand/product/search/'+$(this).val()+'');
            this.form.submit();
        })
        $('#category').on('change',function () {
            $("#categoryform").attr('action',  document.location.origin+'/admin/category/product/search/'+$(this).val()+'');
            this.form.submit();
        })
        $('#childcategory').on('change',function () {
            $("#childcategoryform").attr('action',  document.location.origin+'/admin/type/product/search/'+$(this).val()+'');
            this.form.submit();
        })
    </script>
@endsection