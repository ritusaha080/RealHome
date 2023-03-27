@extends('frontend.blogmaster')
@section('blog.content')

 <body>
 <!-- payment section start  -->

 <section class="payemnt-area section-padding">
    <div class="container">
        <ul class="camp-link">
            <li><a href="index.html">Home</a></li>
            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
            <li>Payment</li>
        </ul>
        <div class="card-wrapper">
            <div class="row">
                <div class="single-property sale-propety">
                    <img src="{{asset('storage/post-image/'.$property->image)}}" alt=">
                    <div class="sale-property-details">
{{--                         <span>{{ $payments->properties->property_id}}</span>--}}
                    <h5>{{$property->title}}</h5>
                            <p>Illinois / Chicago</p>
                            <span>$34,000</span>
                    </div>
                </div>
                <div class="col-12">
                    <h3>Your Card Information</h3>
                </div>
                @if (Auth::user())
                <form action="{{route('payment.post')}}" method="post" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <input type="hidden" name="property_id" value="{{$property->id}}">


                <div class="col-md-6">
                    <div class="card-info">
                        <label for="card_number">Card Number</label>
                        <input type="text"  name="card_number" placeholder="XXXX - XXXX - XXXX - XXXX">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-info">
                        <label for="cardholder_number">Card Holder Name</label>
                        <input type="text" name="cardholder_name" placeholder="Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-date">
                        <label for="card_Name">Expiration Date</label>
                        <input type="text" name="expired_date" placeholder="Month">
                         <input type="text" placeholder="Year">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-date">
                        <label for="cug_number">Cug_number</label>
                        <input type="text" name="cug_number" placeholder="000">
                    </div>
                </div>
                <div class="more-property mt-20">
                    <button type="submit"  class="theme-btn">Buy Home</button>
                     <a href="{{route('payment.list')}}" class="theme-btn">Buy Home</a>
                </div>
                </form>
                @else
                    <a href="{{route('login.view')}}" class="theme-btn">Login To Buy Home</a>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- payment section end  -->
@endsection
