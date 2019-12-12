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
                                        @if(count($wishlists)>=1)
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Product.</th>
                                                        <th>Title</th>
                                                        <th>Price</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($wishlists as $product)
                                                    <tr>
                                                        <td class="tb-image"><a href="{{route('productdetails',['title'=>str_replace(' ','-',$product->product->title),'id'=>$product->product->id])}}" class="item-photo"><img src="{{asset('image/product-images/'.$product->product->singleImage->image)}}" style="width: 100px" alt="cart"></a></td>
                                                        <td>{{$product->product->title}}</td>
                                                        <td>{{$product->product->price}} /-</td>
                                                         <td>
                                                            <form action="{{route('wishlistremove')}}" method="post" id="formcode{{$product->product->id}}">
                                                                {{csrf_field()}}
                                                                <input type="hidden" name="pcode" value="{{$product->product->id}}">
                                                            </form>
                                                            <a href="#." title="Remove" class="removewishlist" data-code="{{$product->product->id}}"><i class="fa fa-remove"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        @else
                                            <h2>You have not added any product to your wishlist.</h2>
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
        $('.removewishlist').on('click',function () {
            $('#formcode'+$(this).attr('data-code')).submit();
        })
    </script>
@endsection