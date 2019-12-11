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
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Title</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($order->product as $product)
                                                <tr>
                                                    <td><a href="{{route('productdetails',['title'=>str_replace(' ','-',$product->title),'id'=>$product->id])}}"><img src="{{asset('image/product-images/'.$product->image[0]->image)}}" style="width: 80px" alt=""></a></td>
                                                    <td>{{$product->title}}</td>
                                                    <td>{{$product->pivot->qty}}</td>
                                                    <td>{{$product->price}} /-</td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td colspan="2">Total: {{$order->total}} /-</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td colspan="2">Delivery Charge: {{$order->delivery_charge}} /-</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td colspan="2">Grand Total: {{$order->total + $order->delivery_charge}} /-</td>
                                            </tr>
                                            </tbody>
                                        </table>

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