@extends('frontend.blogmaster')
@section('blog.content')
 <!-- blog area start  -->
 <section class="blog-area section-padding-2">
    <div class="container">
        <div class="row">
            <ul class="camp-link">
                <li><a href="{{route('homepage.get')}}">Home</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li>Blog</li>
            </ul>
            <div class="col-lg-8 col-md-8">
                <div class="blog-wrapper">
                    <div class="single-blog blog-post">
                        <h4 class="blog-title">{{ $blogs->title }}</h4>

                        <div class="blog-img">
                            <img src="{{asset('storage/post-image/'.$blogs->image)}}" alt="blog hero"style="height:500px;width:300px;">>
                        </div>
                        <div class="blog-content">
                            <p> {{$blogs->description}}  </p>

{{--                            <h6 class="content-middle-title">Architect Can Advise To Plant Vines</h6>--}}
{{--                            <p>--}}
{{--                                Vitapibus ac scelerisque vitae pede. Donec eget tellus non erat lacinia fertum. Donec in velit vel ipsum auctovinar. Proin umcorper urna et felisstibulum iaculis lacinia est. Proin dictum elem entum velit fusce euismod. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura. Lorem sitamet, consetetur sadipscing elitr.--}}
{{--                            </p>--}}
{{--                            <p>--}}
{{--                                Suspendisse sapien lectus, tristique a maximus eget, sagittis sit amet erat. Morbi scelerisque sem risus, nec dictum leo auctor et. Etiam volutpat eros dui, non rutrum justo finibus nec. Nulla facilisi. Phasellus sit amet dui felis. Quisque lorem dolor, molestie id felis eu, rutrum imperdiet ante. Aliquam eu turpis eget magna suscipit pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae diam eu sem luctus malesuada. Nullam volutpat augue a pulvinar viverra. Praesent convallis dolor quis lectus sagittis, vel venenatis sem vulputate.--}}
{{--                            </p>--}}
                        </div>
                    </div>
{{--                    <ul class="blog-post-details">--}}
{{--                        <li>December 14, 2014</li>--}}
{{--                        <li>BY <a href="#">Nick Frost </a></li>--}}
{{--                        <li>IN <a href="#">Tommorow</a></li>--}}
{{--                        <li><a href="#">2 comments </a></li>--}}
{{--                        <li><a href="#">Permalink </a></li>--}}
{{--                    </ul>--}}
                    <ul class="bog-post-social">
                        <li class="fb-color"><a href="{{ getFacebookLink() }}""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
{{--                        <li class="trm-color"><a href="#"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>--}}
{{--                        <li class="twt-color"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
                        <li class="gpls-color"><a href="{{ getEmailLink() }}""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
{{--                        <li class="pr-color"><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>--}}
{{--                        <li class="mail-color"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>--}}
{{--                        <li class="prnt-color"><a href="#"><i class="fa fa-print" aria-hidden="true"></i></a></li>--}}
{{--                        <li class="plus-color"><a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></li>--}}
                    </ul>
{{--                    <div class="comnt-wrap">--}}
{{--                        <div class="single-comnt">--}}
{{--                            <div class="authore-img">--}}
{{--                                <a href="#"><img src="{{asset('frontend')}}/images/blog-post/a01.png" alt=""></a>--}}
{{--                            </div>--}}
{{--                            <div class="comnt-details">--}}
{{--                                <h5 class="authore-name">Written by Nick Frost</h5>--}}
{{--                                <p class="authore-comnt">--}}
{{--                                    Nick Frost has more than 10 years experience in the communications industry, including writing for print and online publications, and design and editing. You can connect with her on Twitter @Jane and Google+.--}}
{{--                                </p>--}}
{{--                                <span class="authores-posts">View all posts by: <a href="#">Nick Frost</a></span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="coment-list">--}}
{{--                            <h6 class="coment-count"><span>6</span> Response</h6>--}}
{{--                            <div class="single-comnt">--}}
{{--                                <div class="authore-img text-center">--}}
{{--                                    <a href="#"><img src="{{asset('frontend')}}/images/blog-post/a01.png" alt=""></a>--}}
{{--                                    <a class="authore-img-title" href="#">Nick Frost</a>--}}
{{--                                </div>--}}
{{--                                <div class="comnt-details">--}}
{{--                                    <p class="authore-comnt">--}}
{{--                                        Morbi vel erat nec erat malesuada tempor. Vestibulum nec gravida mi. Pellentesque blandit magna a nisi ultricies blandit. Maecenas pulvinar leo id eros aliquam aliquam. Vivamus auctor blandit nibh, sit amet imperdiet tortor eleifend non. Cras et tempus quam. Aliquam et porttitor sapien. Morbi ac elit vehicula, auctor nunc vitae, dignissim est. Aenean porttitor purus diam, eu suscipit lacus ornare. --}}
{{--                                    </p>--}}
{{--                                    <span class="authores-posts">May 27, 2014   /  <a href="#">Replay</a></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="single-comnt replay-comnt">--}}
{{--                                <div class="enter-icon">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"  x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="m456.96 384-128-128v110.08H90.88V0H55.04v401.92h273.92V512z" fill="#f6f6f6" data-original="#f6f6f6" class=""></path></g></svg>--}}
{{--                                </div>--}}
{{--                                <div class="authore-img text-center">--}}
{{--                                    <a href="#"><img src="{{asset('frontend')}}/images/blog-post/a01.png" alt=""></a>--}}
{{--                                    <a class="authore-img-title" href="#">Nick Frost</a>--}}
{{--                                </div>--}}
{{--                                <div class="comnt-details">--}}
{{--                                    <p class="authore-comnt">--}}
{{--                                        Morbi vel erat nec erat malesuada tempor. Vestibulum nec gravida mi. Pellentesque blandit magna a nisi ultricies blandit. Maecenas pulvinar leo id eros aliquam aliquam. Vivamus auctor blandit nibh, sit amet imperdiet tortor eleifend non. Cras et tempus quam. Aliquam et porttitor sapien. Morbi ac elit vehicula, auctor nunc vitae, dignissim est. Aenean porttitor purus diam, eu suscipit lacus ornare. --}}
{{--                                    </p>--}}
{{--                                    <span class="authores-posts">May 27, 2014   /  <a href="#">Replay</a></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="col-lg-8 mb-30">
                            <form action="{{route('contact.post')}}" class="coment-form" method="POST">
                                {{-- @method('POST') --}}
                                @csrf
                                <h5 class="comnt-input-title text-dark">Leave a comment</h5>

                                {{-- <form action="{{route('contact.post')}}" method="post" enctype="multipart/form-data">
                                    @method('POST')
                                    @csrf --}}


                                <input class="input-feild" type="text" name="name" placeholder="Your name">
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                <input class="input-feild mail-field" name="email" type="email" placeholder="Your mail">
                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                <textarea id="input_Comnt" cols="30" rows="10" name="comments" placeholder="Your Comment"></textarea>
                                @error('comments')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                <div class="coment-btns">
                                    <button type="submit"  class="theme-btn">Send</button>
                                    {{-- <button type="button" class="send-btn">Send</button> --}}
                                    <button type="button" class="clear-btn">Clear</button>
                                </div>
                            </form>
                        </div>

{{--                        <form action="#" class="coment-form">--}}
{{--                            <h5 class="comnt-input-title">Leave a comment</h5>--}}
{{--                            <input class="input-feild" type="text" placeholder="Your name">--}}
{{--                            <input class="input-feild mail-field" type="email" placeholder="Your mail">--}}
{{--                            <textarea name="msg-input" id="input_Comnt" cols="30" rows="10" placeholder="Your Comment"></textarea>--}}
{{--                            <div class="coment-btns">--}}
{{--                                <button type="button" class="send-btn">Send</button>--}}
{{--                                <button type="button" class="clear-btn">Clear</button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
                    </div>
                </div>
            </div>
{{--            <div class="col-lg-4 col-md-4">--}}
{{--                <div class="category-wrap">--}}
{{--                    <h6 class="category-title">Categories</h6>--}}
{{--                    <ul class="category-list">--}}
{{--                        <li><a href="#">Art Direction</a></li>--}}
{{--                        <li><a href="#">Digital Photography</a></li>--}}
{{--                        <li><a href="#">Information Architecture</a></li>--}}
{{--                        <li><a href="#">Interior Design</a></li>--}}
{{--                        <li><a href="#">Motion Graphics</a></li>--}}
{{--                        <li><a href="#">Photoshop Tools</a></li>--}}
{{--                        <li><a href="#">Web Design</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="category-wrap">--}}
{{--                    <h6 class="category-title">Archives</h6>--}}
{{--                    <ul class="category-list">--}}
{{--                        <li>May 2014</li>--}}
{{--                        <li>March 2014</li>--}}
{{--                        <li>February 2014</li>--}}
{{--                        <li>January 2014</li>--}}
{{--                        <li>December 2014</li>--}}
{{--                        <li>May 2012</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="category-wrap">--}}
{{--                    <h6 class="category-title">Recent Post</h6>--}}
{{--                    <ul class="category-list">--}}
{{--                        <li class="mb-20"><a href="#">--}}
{{--                            <h6 class="post-title">Aliquam erat volutpat</h6>--}}
{{--                            <p>Proin umcorper urna et felisstibulum iaculis lacinia est. Proin dictum elem entum velit fusce euismod. Aenean commodo ligula eget dolor. Proin dictum elem entum velit fusce.</p>--}}
{{--                            <span>May 27, 2014</span>--}}
{{--                        </a></li>--}}
{{--                        <li><a href="#">--}}
{{--                            <h6 class="post-title">Mauris posuere</h6>--}}
{{--                            <p>Proin umcorper urna et felisstibulum iaculis lacinia est. Proin dictum elem entum velit fusce euismod. Aenean commodo ligula eget dolor. Proin dictum elem entum velit fusce.</p>--}}
{{--                            <span>May 27, 2014</span>--}}
{{--                        </a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</section>
<!-- blog area end  -->

@endsection
