@extends('front.layouts.master')
@section('title')
    <title>Cart Details | westernhutt.com</title>
@endsection
@section('body_class', 'page-product detail-product')
@section('content')
<main class="site-main shopping-cart">
    <div style="height:20px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-offset-1">
                <form class="form-cart">
                    <div class="table-cart">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="tb-image">Product</th>
                                    <th class="tb-product">Name</th>
                                    <th class="tb-price">Unit Price</th>
                                    <th class="tb-qty">Qty</th>
                                    <th class="tb-total">SubTotal</th>
                                    <th class="tb-remove">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($cartContents as $cartContent)
                                <tr>
                                    <td class="tb-image"><a href="{{route('productdetails',['title'=>str_replace(' ','-',$cartContent->name),'id'=>$cartContent->id])}}" class="item-photo"><img src="{{asset('image/product-images/'.$cartContent->options->image)}}" alt="cart"></a></td>

                                    <td class="tb-product">
                                        {{$cartContent->name}}
                                    </td>
                                    <td class="tb-price">
                                        <span class="price">{{$cartContent->price}}</span>
                                    </td>
                                    <td class="tb-qty">
                                        <div class="quantity">
                                            <div class="buttons-added">
                                                <input type="text" value="{{$cartContent->qty}}" id="qty{{$cartContent->rowId}}" title="Qty" class="input-text qty text" size="1">
                                                <a href="#" class="sign plus" data-number="{{$cartContent->rowId}}"><i class="fa fa-plus"></i></a>
                                                <a href="#" class="sign minus" data-number="{{$cartContent->rowId}}"><i class="fa fa-minus"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="tb-total">
                                        <span class="price" id="{{$cartContent->rowId}}">{{$cartContent->subtotal}}</span>
                                    </td>
                                    <td class="tb-remove">
                                        <form action="">
                                            <a href="#." data-number="{{$cartContent->rowId}}" onclick="onRemoveClick()" class="action-remove removecart"><span><i class="fa fa-times" aria-hidden="true"></i></span></a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-actions">
                        <a href="{{route('index')}}" class="btn btn-primary">Continue Shopping</a>
                        <a href="javascript:void(0)" id="clearcart" class="btn btn-primary">Clear Cart</a>
                        <a href="{{route('checkout')}}" class="btn btn-primary pull-right">Checkout</a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</main>
@endsection
@section('script')
    <script>
        function onRemoveClick(p) {
            var i= ($('.removecart').attr('data-number'));
            $.ajax({
                type:'post',
                data:{
                    'id':i
                },
                url:'{{route('cartdestory')}}',
                success:function () {
                    window.location.reload();
                },
                error:function (res) {
                    alert(res.responseText);
                }
            })
        }

        $('.plus').on('click',function (){
            var row=$(this).attr('data-number');
            var qty=$('#qty'+row).val();
//            alert(row);
            $.ajax({
                type:'post',
                url:'{{route('cartadd')}}',
                data:{
                    'qty':qty,
                    'row':row
                },
                success:function (res) {
                    console.log(res);
                    $('#'+row).text((parseInt(qty)+1)*res);
                },
                error:function (res) {
                    alert(res.responseText);
                }
            })
        })

        $('.minus').on('click',function () {
            var row = $(this).attr('data-number');
            var qty = $('#qty'+row).val();
//            alert(qty);
            if(qty>1)
            {
                $.ajax({
                    type: 'post',
                    url: '{{route('cartremove')}}',
                    data: {
                        'qty': qty,
                        'row': row
                    },
                    success: function (res) {
                        console.log(res);
                        $('#'+row).text((parseInt(qty)-1)*res);
                    },
                    error: function (res) {
                        alert(res.responseText);
                    }
                })
            }

            else
            {

            }

        })

        $('#clearcart').on('click',function () {
            $.ajax({
                    type: 'post',
                    url: '{{route('cartclear')}}',
                    success: function (res) {
                        window.location.href=window.location.origin;
                    },
                    error: function (res) {
                        alert(res.responseText);
                    }
                })
        })
    </script>
@endsection