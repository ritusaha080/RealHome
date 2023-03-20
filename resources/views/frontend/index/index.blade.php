@extends('frontend.blogmaster')

@section('blog.content')
    <!-- hero section start  -->
    <section class="hero-area">
        <div class="hero-wrapper">
            <div>
                <div class="single-hero" style="background-image: url({{ asset('frontend') }}/images/hero/hero01.jpeg);">
                    <div class="hero-content">
                        <h2>120 Anastasia Avenue, Coral Gables</h2>
                        <div class="info">
                            <h4>$625,000</h4>
                            <a href="#" class="theme-btn hero-btn">MORE INFO</a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="single-hero" style="background-image: url({{ asset('frontend') }}/images/hero/hero01.jpeg);">
                    <div class="hero-content">
                        <h2>120 Anastasia Avenue, Coral Gables</h2>
                        <div class="info">
                            <h4>$625,000</h4>
                            <a href="#" class="theme-btn hero-btn">MORE INFO</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero section end   -->

    <!-- offer section start -->
    <section class="offer-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="offer-title">
                        <h2>We are Offering the
                            Best Estate Deals
                        </h2>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="offer-details">
                        <p>Quisque diam lorem interdum vitaapibus ac scelerisque vitae pede. Donec eget tellus non erat
                            lacinia fertum. Donec in velit vel ipsum auctovinar. Proin umcorper urna et felisstibulum
                            iaculis lacinia est. Proin dictum elem entum velit fusce euismod. Aenean commodo ligula eget
                            dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh
                            etlibura. Lorem ipsum dolor sitamet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- offer section end -->

    <!-- service section start  -->
    <section class="service-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-service">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                        <h4>Whole World</h4>
                        <p>Proin umcorper urna et felisstibulum iaculis lacinia est. Proin dictum elem entum velit fusce
                            euismod. Aenean commodo ligula eget dolor.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service">
                        <i class="fa fa-suitcase" aria-hidden="true"></i>
                        <h4>Confidentially</h4>
                        <p>Proin umcorper urna et felisstibulum iaculis lacinia est. Proin dictum elem entum velit fusce
                            euismod. Aenean commodo ligula eget dolor.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service">
                        <i class="fa fa-file-image-o" aria-hidden="true"></i>
                        <h4>Good Previews</h4>
                        <p>Proin umcorper urna et felisstibulum iaculis lacinia est. Proin dictum elem entum velit fusce
                            euismod. Aenean commodo ligula eget dolor.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                        <h4>Confidentially</h4>
                        <p>Proin umcorper urna et felisstibulum iaculis lacinia est. Proin dictum elem entum velit fusce
                            euismod. Aenean commodo ligula eget dolor.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service section end  -->

    <!-- property section start  -->
    <section class="property-area section-padding">
        <div class="container">
            <div class="row">
                <div class="section-title text-center mb-70">
                    <h3>Featured <span>Property</span></h3>
                    <p>Quisque diam lorem interdum vitaapibus vitae pede. Donec eget tellus non erat <br> lacinia fertum.
                        Donec in velit vel ipsum auctovinar.</p>
                </div>


                @foreach ($properties as $property)
                    <div class="col-lg-4 col-md-6">
                        <h4 class="blog-title"><a href="">{{ $property->title }}</a></h4>

                        <div class="product-details">
                            <a href="#">
                                <img src="{{ asset('storage/post-image/' . $property->image) }}" alt=""
                                    style="width:100% ;">
                            </a>
                         
                        </div>
                        
                        <h4>{{ \Illuminate\Support\Str::limit($property->description, 100, '...') }}</h4>
                        <a href="{{ route('property.details.show', $property->id) }}" class="theme-btn">Read More</a>
                        
                        <hr class="horizontal-line">
                        
                        
                    </div>
                    @endforeach
                    <div class="more-property mt-20">
                        <a href="#" class="theme-btn">ALL PROPERTIES</a>
                    </div>
                    
            </div>
    </section>
    <!-- property section end  -->

    <!-- our agent section start  -->
    <section class="agent-area">
        <div class="agents-wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-4 col-12">
                        
                        <div class="slider-nav">
                            @foreach ($agents as $agent)
                            <div class="agent-img">
                                <img src="{{asset('storage/post-image/' . $agent->image)}}" alt="">
                            </div>
                                
                            @endforeach
                            {{-- <div class="agent-img">
                                <img src="assets/images/agents/02.png" alt="">
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="section-title agetn-title">
                            <h3>Our <span>Agents</span></h3>
                        </div>

                        @foreach ($agents as $agent)
                        <div class="slider-for">
                            <div class="agent-details">
                                
                                <h5>{{$agent->name}}</h5>
                                <p>{{$agent->description}}</p>
                                <ul class="agents-contacts">
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>{{$agent->phone}} </li>
                                    <li> <i class="fa fa-envelope" aria-hidden="true"></i> <a href="#">{{$agent->email}}</a> </li>
                                </ul>
                            </div>
                          
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our agent section end  -->

    <!-- more about section start  -->
    <section class="more-about">
        <div class="container">
            <div class="row">
                <div class="more-about">
                    <h2>Get Started on Buying Your <span>New Home</span></h2>
                    <div class="more-property">
                        <a href="#" class="theme-btn">MORE ABOUT US</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- more about section end  -->

    <!-- testimoni section start  -->
    <section class="testimoni-area">
        <div class="testimoni-wrapper">
            <div>
                @foreach ($testimonials as $testimonial)
                <div class="single-testimoni"
                    style="background-image: url({{asset('storage/post-image/' . $testimonial->images)}});">
                    <div class="section-title testimoni-title text-center">
                        <h3>{{$testimonial->title}} </h3>
                    </div>
                    <div class="testimoni-content">
                        <<p>{{$testimonial->description}}</p>
                        <span>Amanda Seyfried, Apple</span>
                    </div>
                </div>
                @endforeach
            </div>
            {{-- <div>
                <div class="single-testimoni"
                    style="background-image: url({{ asset('frontend') }}/images/testimoni/t01.jpeg);">
                    <div class="section-title testimoni-title text-center">
                        <h3>Testimonials </h3>
                    </div>
                    <div class="testimoni-content">
                        <p>Liber tempor cum soluta eleifend option congue nihil imperdiet doming id quod mazim placerat
                            facer possim assum, typin no habent claritatem insitam legentis qui facit eorum claritatem. </p>
                        <span>Amanda Seyfried, Apple</span>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- testimoni section end   -->

    <!-- Partner section start -->
    <section class="brand-area section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-3">
                    <img src="{{ asset('frontend') }}/images/partner/00.png" alt="">
                </div>
                <div class="col-9">
                    <div class="brand-active">
                        <div class="brand-img">
                            <img src="{{ asset('frontend') }}/images/partner/01.png" alt="">
                        </div>
                        <div class="brand-img">
                            <img src="{{ asset('frontend') }}/images/partner/02.png" alt="">
                        </div>
                        <div class="brand-img">
                            <img src="{{ asset('frontend') }}/images/partner/03.png" alt="">
                        </div>
                        <div class="brand-img">
                            <img src="{{ asset('frontend') }}/images/partner/04.png" alt="">
                        </div>
                        <div class="brand-img">
                            <img src="{{ asset('frontend') }}/images/partner/01.png" alt="">
                        </div>
                        <div class="brand-img">
                            <img src="{{ asset('frontend') }}/images/partner/02.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h5>display none</h5>
    </section>
    <!-- Partner section end -->
@endsection
