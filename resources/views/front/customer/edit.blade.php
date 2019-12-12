@extends('front.layouts.master')
@section('title')
    <title>Edit Info | westernhutt.com</title>
@endsection
@section('body_class', 'page-product detail-product')
@section('content')
        <main class="site-main checkout">
            <div style="height:20px;"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        {{ $error }}
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="clearfix">
                            <h4 class="title-checkout pull-left">Change Address</h4>
                        </div>
                        <div class="row" id="addnewaddress">
                            <form action="{{route('addresseupdate',$profile->id)}}" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="PUT">
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" value="{{$profile->fname}}" name="fname" id="fname" placeholder="First Name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" value="{{$profile->lname}}"  name="lname" id="lname" placeholder="Last Name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control"  value="{{$profile->phone}}"  name="phone" id="phone" placeholder="Phone">
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" value="{{$profile->address}}"  name="address" id="address" placeholder="Address">
                                </div>
                                <div class="form-group col-sm-8">
                                    <select class="form-control" name="city">
                                        <option value="">Select City</option>
                                        <option value="Dhaka" {{$profile->city=='Dhaka' ?  'selected':''}}>Dhaka Suburbs</option>
                                        <option value="Outside" {{$profile->city!='Dhaka' ?  'selected':''}}>Outside Dhaka</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <button type="submit" class="btn-order pull-right">Update Address</button>
                                </div>
                            </form>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
        </main>

@endsection
@section('script')
@endsection