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
                        <div class="single-blog">
                            <h4 class="blog-title"><a href="blog-post.html">Point of Architecture</a></h4>
                            <div class="blog-img">
                                <a href="blog-post.html"><img src="{{asset('frontend')}}/images/blog/01.jpg" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <p>Vitapibus ac scelerisque vitae pede. Donec eget tellus non erat lacinia fertum. Donec in velit vel ipsum auctovinar. Proin umcorper urna et felisstibulum iaculis lacinia est. Proin dictum elem entum velit fusce euismod. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura. Lorem sitamet, consetetur sadipscing elitr.</p>
                            </div>
                            <div class="more-property text-start mt-30">
                                <a href="#" class="theme-btn">Read More</a>
                            </div>
                        </div>
                        <div class="single-blog">
                            <h4 class="blog-title"><a href="#">Aliquam Erat Volutpat</a></h4>
                            <div class="blog-img">
                                <a href="blog-post.html"><img src="{{asset('frontend')}}/images/blog/02.jpg" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <p>Vitapibus ac scelerisque vitae pede. Donec eget tellus non erat lacinia fertum. Donec in velit vel ipsum auctovinar. Proin umcorper urna et felisstibulum iaculis lacinia est. Proin dictum elem entum velit fusce euismod. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura. Lorem sitamet, consetetur sadipscing elitr.</p>
                            </div>
                            <div class="more-property text-start mt-30">
                                <a href="blog-post.html" class="theme-btn">Read More</a>
                            </div>
                        </div>
                        <div class="single-blog">
                            <h4 class="blog-title"> <a href="#">Mauris Posuere</a></h4>
                            <div class="blog-img">
                                <a href="#"><img src="{{asset('frontend')}}/images/blog/03.jpg" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <p>Vitapibus ac scelerisque vitae pede. Donec eget tellus non erat lacinia fertum. Donec in velit vel ipsum auctovinar. Proin umcorper urna et felisstibulum iaculis lacinia est. Proin dictum elem entum velit fusce euismod. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura. Lorem sitamet, consetetur sadipscing elitr.</p>
                            </div>
                            <div class="more-property text-start mt-30">
                                <a href="#" class="theme-btn">Read More</a>
                            </div>
                        </div>
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
