@extends('back.layouts.master')

@section('content')
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Vendor wise All Products Sales Summery</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped "  style="width:100%">
                    <thead>
                    <tr>
                        <th>Vendor</th>
                        <th>Total sales</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($productsaledata as $data)
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->totalsale}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>

    </section>
@endsection
@section('script')
@endsection