@extends('front.layouts.master')
@include('front.customer.sidebar')
@section('content')
    <main class="site-main blog-single">
        <div style="height:20px"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8 float-none float-right">
                    <div class="main-content">
                        <div class="post-detail">
                            <div class="post-item">
                                <div class="post-item-info">
                                    <div class="post-content">
                                    @if(count($reviews)>=1)
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Review</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($reviews as $review)
                                                <tr>
                                                    <td><img src="{{asset('image/product-images/'.$review->product->image[0]->image)}}" style="width:50px" alt=""></td>
                                                    <td style="width: 300px">{{$review->review}}</td>
                                                    <td>
                                                        @if($review->status==1)
                                                            <span class="label label-success">Published</span>
                                                        @else
                                                            <span class="label label-warning">Pending</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="#." class="btn-sm btn-warning"><i class="fa fa-remove"></i></a>
                                                        <a href="#." class="btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        @else
                                            <h2>You have not given any review yet.</h2>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    @yield('sidebar')
                </div>
            </div>
        </div>
    </main>
@endsection
@section('script')
    <script>

    </script>
@endsection