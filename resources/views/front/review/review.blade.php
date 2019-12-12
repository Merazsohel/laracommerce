@extends('front.layouts.master')
@section('title')
    <title>Product Review | westernhutt.com</title>
@endsection
@section('content')
    <div class="container">
    </div>
    <div class="customer-login">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                    <h5 class="title-login">Write Your Review</h5>
                    @if(session('reviewpublish'))
                        <div class="alert alert-success">
                            {{session('reviewpublish')}}
                        </div>
                    @endif
                    <img src="{{asset('image/product-images/'.$product->singleImage->image)}}" alt="">
                    <label for="">{{$product->title}}</label>
                    <form class="login" method="post" action="{{route('postreview')}}">
                        {{csrf_field()}}
                        <p class="form-row form-row-wide">
                            <label>Title:<span class="required"></span></label>
                            <input type="text" value="" name="title" placeholder="Review Title" class="input-text">
                        </p>
                        <p class="form-row form-row-wide">
                            <label>Review :<span class="required"></span></label>
                            <textarea class="form-control" name="review" rows="10" cols="30" required>
                        </textarea>
                        </p>
                        <p class="form-row form-row-wide">
                            <label>Publishing Name :<span class="required"></span></label>
                            <input type="text" name="publisher" placeholder="Publish Your Name As" class="input-text">
                        </p>
                        <p class="form-row">
                            <input type="submit" value="Post Review" class="button-submit"></p>
                    </form>

                </div>

            </div>
        </div>
    </div>
@endsection
@section('script')

@endsection