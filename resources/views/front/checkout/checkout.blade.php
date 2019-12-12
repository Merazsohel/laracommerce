@extends('front.layouts.master')
@section('title')
    <title>Checkout | westernhutt.com</title>
@endsection
@section('body_class', 'page-product detail-product')
@section('content')
@if(!session()->has('address'))
<main class="site-main checkout">
    <div style="height:20px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="checkout-title clearfix">
                    <h4 class="title-checkout pull-left">Billing Address</h4>
                    <a href="#." id="newaddress"  class="btn-checkout pull-right">
                        <span><i class="fa fa-plus"></i> New Address</span>
                    </a>
                </div>
                <div class="row" id="addnewaddress"></div>
                @if(!empty($addresses))
                            <div class="row shopping-cart">
                                @php $i=1 @endphp
                                @foreach($addresses as $address)
                                <div class="col-md-4">
                                    <div class="order-summary">
                                        <h4 class="title-shopping-cart">Address {{$i++}}</h4>
                                        <div class="accountoptions">
                                            <a href="{{route('addressedit',$address->id)}}"><i class="fa fa-edit"></i></a>
                                            <a href="{{route('addressdelete',$address->id)}}"><i class=" fa fa-remove"></i></a>
                                        </div>
                                        <div class="checkout-element-content">
                                            <ul>
                                                <li><label class="inline"><span ></span>Fname: {{$address->fname}}</label></li>
                                                <li><label class="inline"><span ></span>Lname: {{$address->lname}}</label></li>
                                                <li><label class="inline"><span ></span>Phone: {{$address->phone}}</label></li>
                                                <li><label class="inline"><span ></span>Address: {{$address->address}} - City {{$address->city}}</label></li>
                                            </ul>
                                            <a href="#." data-id="{{$address->id}}"  data-city="{{$address->city}}" class="btn-checkout existingaddress">
                                                <span>Use This Address</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</main>

@else
<main class="site-main checkout">
    <div class="container">
    <div class="col-md-12">
        {{--<div class="row">--}}
            {{--<div class="col-sm-2">--}}
                {{--<ul>--}}
                    {{--<li style="list-style:none">--}}
                        {{--<label class="inline"><input id="alter" type="radio" name="address"><span class="input"></span>Change Address</label>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            <div class="checkout-title ">
                <a href="#." id="alter"   class="btn-checkout pull-right">
                    <span><i class="fa fa-refresh" aria-hidden="true"></i> Change Address</span>
                </a>
            </div>
            <div class="col-sm-10">
                <div class="row" id="addnewaddress"></div>
            </div>
        {{--</div>--}}
    </div>
    </div>
</main>
@endif

@if(session()->has('address'))
    <section id="checkout-cart">
        <main class="site-main shopping-cart">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="form-cart">
                            <div class="table-cart">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="tb-image"></th>
                                        <th class="tb-product">Product Name</th>
                                        <th class="tb-price">Unit Price</th>
                                        <th class="tb-qty">Qty</th>
                                        <th class="tb-total">SubTotal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $content)
                                        <tr>
                                            <td class="tb-image"><a href="{{route('productdetails',['title'=>str_replace(' ','-',$content->name),'id'=>$content->id])}}" class="item-photo"><img src="{{asset('image/product-images/'.$content->options->image)}}" alt="cart"></a></td>
                                            <td class="tb-product">
                                                <div class="product-name"><a href="">{{$content->name}}</a></div>
                                            </td>
                                            <td class="tb-price">
                                                <span class="price">৳ {{$content->price}} /-</span>
                                            </td>
                                            <td class="tb-price">
                                                <span class="price"> {{$content->qty}}</span>
                                            </td>
                                            <td class="tb-total">
                                                <span class="price">৳ {{Cart::subtotal()}} /-</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td  colspan="2" class="tb-total"> Delivery Charge :
                                            @if(session('address')!='Dhaka')
                                                ৳ 100 /-
                                            @else
                                                ৳ 60 /-
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td  colspan="2" class="tb-total">Grand Total :
                                            @if(session('address')!='Dhaka')
                                                @php
                                                    $d=\Gloudemans\Shoppingcart\Facades\Cart::subtotal();
                                                    $x= str_replace(',','',$d);
                                                    echo "৳ ".($x+100)." /-";
                                                @endphp
                                            @else
                                                @php
                                                    $d=\Gloudemans\Shoppingcart\Facades\Cart::subtotal();
                                                    $x= str_replace(',','',$d);
                                                    echo "৳ ".($x+60)." /-";
                                                @endphp
                                            @endif
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart-actions">
                                <form action="{{route('order')}}" method="POST">
                                    {{csrf_field()}}
                                    <button type="submit" class="btn-continu pull-right">
                                        <span>Place Order</span>
                                    </button>
                                </form>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>
@endif

@endsection
@section('script')
    <script>
        var token='{{csrf_token()}}';
        $('#newaddress').on('click',function (e) {
            e.preventDefault();
            $('#addnewaddress').html(
                "<form action='{{route('storeAddress')}}' method='post'>" +
                "<input type='hidden' value="+token+" name='_token'>"+
                "<div class='form-group col-sm-4'><input type='text' class='form-control' name='fname' id='fname' placeholder='First Name'></div>"+
                "<div class='form-group col-sm-4'><input type='text' class='form-control' name='lname' id='lname' placeholder='Last Name'></div>"+
                "<div class='form-group col-sm-4'><input type='text' class='form-control' name='phone' id='phone' placeholder='Phone'></div>"+
                "<div class='form-group col-sm-4'><input type='text' class='form-control' name='address' id='address' placeholder='Address'></div>"+
                    "<div class='form-group col-sm-4'>" +
                        "<select class='form-control' name='city'>" +
                        "<option value=''>Select City</option>" +
                        "<option value='Dhaka'>Dhaka Suburbs</option>" +
                        "<option value='Outside'>Outside Dhaka</option>" +
                        "</select>" +
                    "</div>"+
                "<div class='form-group col-md-4'>"+
                "<button type='submit' class='btn-order pull-right'>Add This Address</button>"+
                "</div>"
            );
        })

        $('.existingaddress').on('click',function () {
            var city=$(this).attr('data-city');
            $.ajax({
                type:'post',
                url:'{{route('existingAddress')}}',
                data:{
                    'city':city,
                    'id':$(this).attr('data-id')
                },
                success:function (res) {
                    window.location.reload();
                }
            })
        })

        $('#alter').on('click',function () {
            $.ajax({
                type:'post',
                url:'{{route('alteraddress')}}',
                success:function (res) {
                    window.location.reload();
                }
            })
        })
    </script>
@endsection