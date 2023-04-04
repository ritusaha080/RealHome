@extends('frontend.blogmaster')
@section('blog.content')
 <!-- object area start  -->

<section class="object-area">
    <div class="container">
        <div class="row">
            <ul class="camp-link">
                <li><a href="{{route('homepage.get')}}">Home</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li>Object</li>
            </ul>

            <div class="col-lg-8 col-md-8 col-12">
                <div class="main-object">
                    <div class="object-title">
                        <h4 class="property-title">{{ $properties->title }}</h4>
                    </div>
                    <div class="object-img">
                        <img src="{{ asset('storage/post-image/' . $properties->image) }}" alt=""
                            style="width:100%;">
                            <img src="{{asset('frontend')}}/images/blog/02.jpg" alt="">
                            <img src="{{asset('frontend')}}/images/blog/03.jpg" alt="">
                    </div>
                </div>

                <div class="related-post-wrap">
                    <div class="section-title section-title-2">
                        <h3>Related <span>Posts</span></h3>
                    </div>
                    <div class="related-post">
                        @foreach ($relatedProperties as $property)
                        <div class="single-property">

                            <a href="#">
                                <img src="{{ asset('storage/post-image/' . $property->image) }}">
                                <h5>{{$property->title}}</h5>
                                <p>{{$property->description}}</p>
                            </a>

                        </div>
                        @endforeach

                    </div>




                    <form action="#" class="coment-form">
                        <h5 class="comnt-input-title">No Comments Yet</h5>
                        <input class="input-feild" type="text" placeholder="Your name">
                        <input class="input-feild mail-field" type="email" placeholder="Your mail">
                        <textarea id="input_Comnt" cols="30" rows="10" placeholder="Your Comment"></textarea>
                        <div class="coment-btns">
                            <button type="button" class="send-btn">Send</button>
                            <button type="button" class="clear-btn">Clear</button>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="object-category">
                    <ul class="object-category-title">
                        <li>
                            <div class="label-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"  x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#e6e6e6" d="M5 4a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16.998a1 1 0 0 1-1.65.76l-4.7-3.517a.998.998 0 0 0-1.3 0l-4.7 3.516a1 1 0 0 1-1.65-.76z" data-original="#e6e6e6" class=""></path></g></svg>
                            </div>
                            <span>in</span> {{ $properties->category->category_name}}
                        </li>
                        <li>
                            <div class="label-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"  x="0" y="0" viewBox="0 0 426.667 426.667" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M414.08 204.373 222.187 12.48C214.4 4.8 203.733 0 192 0H42.667C19.093 0 0 19.093 0 42.667V192c0 11.84 4.8 22.507 12.587 30.187l192 192c7.68 7.68 18.347 12.48 30.08 12.48s22.507-4.8 30.187-12.48l149.333-149.333c7.68-7.787 12.48-18.453 12.48-30.187 0-11.84-4.8-22.507-12.587-30.294zM74.667 106.667c-17.707 0-32-14.293-32-32s14.293-32 32-32 32 14.293 32 32-14.294 32-32 32z" fill="#e6e6e6" data-original="#e6e6e6" class=""></path></g></svg>
                            </div>
                            <span>in</span> {{ $properties->category->category_name}}
                        </li>
                    </ul>
                    <ul class="object-category-info">
                        <ul class="object-category-info">
                            <li><span>Client:</span> {{ $properties->client }}</li>
                            <li><span>price:</span> {{ $properties->price }}</li>
                            <li><span>Date:</span> {{ $properties->created_at }}</li>
                    </ul>
                    <p class="category-description">
                        {{ $properties->description }}
                    </p>
                    <div class="more-property mt-20 text-start">
                        <a href="{{route('payment.show',$properties->id)}}" class="theme-btn">BUY THIS OBJECT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- object area end  -->


@endsection
