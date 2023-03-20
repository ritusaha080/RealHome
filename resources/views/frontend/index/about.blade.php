@extends('frontend.blogmaster')
@section('blog.content')

    <!-- about area start  -->
    <section class="about-area">
        <div class="container">
            <div class="row">
                <ul class="camp-link">
                    <li><a href="index.html">Home</a></li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                    <li>About</li>
                </ul>
                <div class="section-title">
                    <h3 class="after-none">About <span>Our Company</span></h3>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about-img">
                        <img src="{{asset('frontend')}}/images/about/a01.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about-content">
                        <p>Quisque diam lorem interdum vitaapibus ac scelerisque vitae pede. Donec eget tellus non erat lacinia fertum. Donec in velit vel ipsum auctovinar. Proin umcorper urna et felisstibulum iaculis lacinia est. Proin dictum elem entum velit fusce euismod. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura. Lorem ipsum dolor sitamet, consetetur sadipscing elitr.</p>
                        <p>Agent info ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat nostrud tation ullamcorper nonummy nibh.</p>
                    </div>
                </div>           
            </div>
        </div>
    </section>
    <!-- about area end  -->

        <!-- service section start  -->
        <section class="service-section about-service section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-service">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <h4>Whole World</h4>
                            <p>Proin umcorper urna et felisstibulum iaculis lacinia est. Proin dictum elem entum velit fusce euismod. Aenean commodo ligula eget dolor.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-service">
                            <i class="fa fa-suitcase" aria-hidden="true"></i>
                            <h4>Confidentially</h4>
                            <p>Proin umcorper urna et felisstibulum iaculis lacinia est. Proin dictum elem entum velit fusce euismod. Aenean commodo ligula eget dolor.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-service">
                            <i class="fa fa-file-image-o" aria-hidden="true"></i>
                            <h4>Good Previews</h4>
                            <p>Proin umcorper urna et felisstibulum iaculis lacinia est. Proin dictum elem entum velit fusce euismod. Aenean commodo ligula eget dolor.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-service">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            <h4>Confidentially</h4>
                            <p>Proin umcorper urna et felisstibulum iaculis lacinia est. Proin dictum elem entum velit fusce euismod. Aenean commodo ligula eget dolor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service section end  -->
    
    <!-- team area start  -->
    <section class="team-area section-padding-2">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h3 class="after-none">Our <span>Team</span></h3>
                </div>
                <div class="col-lg-3 col-md-4 col-6  mb-30">
                    <div class="single-property team-member">
                        <img src="{{asset('frontend')}}/images/team/01.jpg" alt="">
                        <h5>Maria Spilberg</h5>
                        <p class="pb-20">Manager</p>
                    </div>                    
                </div>            
                <div class="col-lg-3 col-md-4 col-6 mb-30">
                    <div class="single-property team-member">
                        <img src="{{asset('frontend')}}/images/team/02.jpg" alt="">
                        <h5>Stan Barnard</h5>
                        <p class="pb-20">Agent</p>
                    </div>                    
                </div>            
                <div class="col-lg-3 col-md-4 col-6 mb-30">
                    <div class="single-property team-member">
                        <img src="{{asset('frontend')}}/images/team/03.jpg" alt="">
                        <h5>Phillip Morris</h5>
                        <p class="pb-20">Agent</p>
                    </div>                    
                </div>            
                <div class="col-lg-3 col-md-4 col-6 mb-30">
                    <div class="single-property team-member">
                        <img src="{{asset('frontend')}}/images/team/04.jpg" alt="">
                        <h5>Andy Zuckerberg</h5>
                        <p class="pb-20">Account Manager</p>
                    </div>                    
                </div>            
            </div>
        </div>
    </section>
    <!-- team area end  -->


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


    <!-- Partner section start -->
    <section class="brand-area section-padding">
        <div class="container">
        <div class="row align-items-center">
            <div class="col-3">
                <img src="{{asset('frontend')}}/images/partner/00.png" alt="">
            </div>
            <div class="col-9">
                <div class="brand-active">
                    <div class="brand-img">
                        <img src="{{asset('frontend')}}/images/partner/01.png" alt="">
                    </div>
                    <div class="brand-img">
                        <img src="{{asset('frontend')}}/images/partner/02.png" alt="">
                    </div>
                    <div class="brand-img">
                        <img src="{{asset('frontend')}}/images/partner/03.png" alt="">
                    </div>
                    <div class="brand-img">
                        <img src="{{asset('frontend')}}/images/partner/04.png" alt="">
                    </div>
                    <div class="brand-img">
                        <img src="{{asset('frontend')}}/images/partner/01.png" alt="">
                    </div>
                    <div class="brand-img">
                        <img src="{{asset('frontend')}}/images/partner/02.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        </div>
        <h5>display none</h5>
    </section>
    <!-- Partner section end -->

@endsection