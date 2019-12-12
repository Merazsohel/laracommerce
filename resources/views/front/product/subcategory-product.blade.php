@extends('front.layouts.master')
@section('title')
    <title>Buy Products Online at Best Price in Bangladesh - All Categories | Westernhutt.com</title>
@endsection
@section('body_class', 'page-product detail-product')
@section('content')
    <main class="site-main product-list product-grid">
        <div class="container">
            <ol class="breadcrumb-page">
                <li><a href="{{route('index')}}">Home </a></li>
                {{--<li class="active"><a href="#">Grid Categorys  </a></li>--}}
            </ol>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8 float-none float-right padding-left-5">
                    <div class="main-content">
                        <div class="toolbar-products">
                            <h4 class="title-product">Products Lists</h4>
                        </div>
                        <div class="block-recent-view">
                            <div class="">
                                <div class="nav-style2 border-background equal-container" id="products">
                                    @foreach($products as $product)
                                        <div class="col-md-3" style="padding: 0">
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="{{route('productdetails',['title'=>$product->title,'id'=>$product->id])}}"><img src="{{ asset('image/product-images/'.$product->singleImage->image) }}" alt="r1"></a>
                                                        </div>
                                                        <!-- <span class="onsale">-50%</span> -->
                                                        <a href="{{route('productdetails',['title'=>$product->title,'id'=>$product->id])}}" class="quick-view">View Details</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                            <div class="product-name"><a href="{{route('productdetails',['title'=>$product->title,'id'=>$product->id])}}">{{$product->title}}</a></div>
                                                            <span class="price">
                                                                <ins>৳ {{$product->price}}</ins>
                                                            </span>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="col-sidebar">
                        <div class="filter-options">
                            <div class="block-title">Shop by</div>
                            <div class="block-content">
                                <div class="filter-options-item filter-categori">
                                    <div class="filter-options-title">Available Options</div>
                                    <div class="filter-options-content">
                                        <ul>
                                            @foreach($childcaegories as $childcategories)
                                                <li> <i class="fa fa-hand-o-right" aria-hidden="true"></i> <a
                                                            href="">{{$childcategories->childcategory}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="filter-options-item filter-brand">
                                    <div class="filter-options-title">Brands</div>
                                    <div class="filter-options-content">
                                        <ul>
                                             @foreach($brands as $brand)
                                             <li><label class="inline" ><input class="brand" type="checkbox" data-number="{{$brand->id}}" value="{{$brand->name}}"><span class="input"></span>{{$brand->name}}</label></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- end MAIN -->
@endsection
@section('script')
@section('script')
    <script>

        $('.brand').on('click',function (e) {
            $('#products').html("<img src='/image/Blocks-1s-200px.gif'>");
            $.ajax({
                type:'post',
                url:'{{route('brandfilter')}}',
                data:{
                    'brand':$(this).val(),
                    'id':$(this).attr('data-number')
                },
                success:function (res) {
                    var option='';
                    for(var i=0;i<res.length;i++)
                    {
                           option+= "<div class='col-md-3' style='padding: 0'>" +
                                "<div class='product-item style1'>" +
                                    "<div class='product-inner equal-elem'>" +
                                        "<div class='product-thumb'>" +
                                            "<div class='thumb-inner'>" +
                                            "<a href=''><img src='/image/product-images/"+res[i].single_image.image+"' alt='r1'></a>"+
                                            "<span class='onsale'>-50%</span>"+
                                            "<a href='' class='quick-view'>View Details</a>"+
                                            "</div>"+
                                            "<div class='product-innfo'>"+
                                            "<div class='product-name'><a href='https://westernhutt.com/product/"+res[i].title.replace(" ",'_')+'/'+res[i].id+"'>"+res[i].title+"</a></div></div>"+
                                            "<span class='price'>"+
                                            "<ins>"+res[i].price+"</ins>"+
                                            "</span>"+
                                        "</div>"+
                                    "</div>"+
                                "</div>"+
                            "</div>";
                    }
                    $('#products').html(option);

                },
                error:function (res) {
                    alert(res.responseText);
                }
            })
            
        })

        $('#pricerange').on('click',function () {
            var value_min       = parseFloat($(this).data('value-min'));
            var value_max       = parseFloat($(this).data('value-max'));
           alert(value_max-value_min );
        })
    </script>
@endsection
@endsection