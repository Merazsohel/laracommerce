
@section('sidebar')
    <div class="sidebar-left">
        <div class="block-categories-blog">
            <div class="block-title">Menu</div>
            <ul>
                <li class="categories-item"><a href="{{route('profile')}}">Dashboard</a></li>
                <li class="categories-item"><a href="{{route('customerorders')}}">My Orders</a></li>
                <li class="categories-item"><a href="{{route('customersreview')}}">My Reviews</a></li>
            </ul>
        </div>
    </div>
@endsection