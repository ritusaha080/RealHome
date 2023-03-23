@extends('frontend.blogmaster')
@section('blog.content')
    <!-- blog area start  -->
    <section class="blog-area section-padding-2">
        <div class="container">
            <div class="row">
                <ul class="camp-link">
                    <li><a href="index.html">Home</a></li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                    <li>Blog</li>
                </ul>
                <div class="col-lg-8 col-md-8">
                    <div class="blog-wrapper">
                        @foreach ($blogs as $blog)
                        <div class="single-blog">
                            <h4 class="blog-title"><a href="blog-post.html">{{ $blog->title }}</a></h4>
                            <div class="blog-img">
                                <img src="{{ asset('storage/post-image/' . $blog->image) }}" alt=""
                                style="width:100%;">
                            </div>
                            <div class="blog-content">
                                <p>{{\Illuminate\Support\Str::limit($blog->description,100,"...")}}</p>
                            </div>
                            <div class="more-property text-start mt-30">
                                <a href="{{ route('blog.details', $blog->id) }}" class="theme-btn">Read More</a>
                            </div>
                        </div>   
                        @endforeach
                        

                    </div>
                    <ul class="pagination-list">
                        <li><a href="javascript:void(0)" class="active">1</a></li>
                        <li><a href="javascript:void(0)">2</a></li>
                        <li><a href="javascript:void(0)">3</a></li>
                        <li><a href="javascript:void(0)">4</a></li>
                        <li><a href="javascript:void(0)">5</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="category-wrap">
                        <h6 class="category-title">Categories</h6>
                        <ul class="category-list">
                            <li><a href="#">Art Direction</a></li>
                            <li><a href="#">Digital Photography</a></li>
                            <li><a href="#">Information Architecture</a></li>
                            <li><a href="#">Interior Design</a></li>
                            <li><a href="#">Motion Graphics</a></li>
                            <li><a href="#">Photoshop Tools</a></li>
                            <li><a href="#">Web Design</a></li>
                        </ul>
                    </div>
                    <div class="category-wrap">
                        <h6 class="category-title">Archives</h6>
                        <ul class="category-list">
                            <li>May 2014</li>
                            <li>March 2014</li>
                            <li>February 2014</li>
                            <li>January 2014</li>
                            <li>December 2014</li>
                            <li>May 2012</li>
                        </ul>
                    </div>
                    <div class="category-wrap">
                        <h6 class="category-title">Recent Post</h6>
                        <ul class="category-list">
                            <li class="mb-20"><a href="#">
                                <h6 class="post-title">Aliquam erat volutpat</h6>
                                <p>Proin umcorper urna et felisstibulum iaculis lacinia est. Proin dictum elem entum velit fusce euismod. Aenean commodo ligula eget dolor. Proin dictum elem entum velit fusce.</p>
                                <span>May 27, 2014</span>
                            </a></li>
                            <li><a href="#">
                                <h6 class="post-title">Mauris posuere</h6>
                                <p>Proin umcorper urna et felisstibulum iaculis lacinia est. Proin dictum elem entum velit fusce euismod. Aenean commodo ligula eget dolor. Proin dictum elem entum velit fusce.</p>
                                <span>May 27, 2014</span>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </section>
    <!-- blog area end  -->
@endsection
