@extends('frontend.blogmaster')
@section('blog.content')

 <body>
 <!-- payment section start  -->

 <section class="payemnt-area section-padding">
    <div class="container">
        <ul class="camp-link">
            <li><a href="{{route('homepage.get')}}">Home</a></li>
            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
            <li>Payment</li>
        </ul>
        <div class="card-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="single-property sale-propety">
                        <div>
                         <img src="{{asset('storage/post-image/'.$property->image)}}" alt=">
                         </div>

                        <div class="sale-property-details">
                            {{-- <span>in</span> {{ $payments->properties->property_id}} --}}
                            <h5>{{$property->title}}</h5>
                                <p>{{$property->description}}</p>
                                <span>{{$property->price}}</span>
                        </div>
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-info">
                                <label for="card_number">Card Number</label>
                                <input type="text"  name="card_number" placeholder="XXXX - XXXX - XXXX - XXXX">
                            </div>
                            @error('card_number')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="card-info">
                                <label for="cardholder_number">Card Holder Name</label>
                                <input type="text" name="cardholder_name" placeholder="Name">
                            </div>
                            @error('cardholder_name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="card-date">
                                <label for="card_Name">Expiration Date</label>
                                <input type="text" name="expired_date" placeholder="Month">
                                {{-- <input type="text" placeholder="Year"> --}}
                            </div>
                            @error('expired_date')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="card-date">
                                <label for="cug_number">CVV_number</label>
                                <input type="text" name="cug_number" placeholder="000">
                            </div>
                            @error('cug_number')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        </div>
                        <div class="more-property mt-20">
                            <button type="submit"  class="theme-btn">Buy Home</button>
                            {{-- <a href="{{route('payment.list')}}" class="theme-btn">Buy Home</a> --}}
                        </div>
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
