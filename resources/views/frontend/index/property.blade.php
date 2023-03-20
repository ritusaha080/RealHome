@extends('frontend.blogmaster')
@section('blog.content')
 <!-- property section start  -->
 <section class="property-area section-padding">
    <div class="container">
        <div class="row">    
            <ul class="camp-link justify-content-center">
                <li><a href="index.html">Home</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li>Property</li>
            </ul>
            <div class="section-title text-center mb-70">
                <h3>Property <span>Catalog</span></h3>                        
            </div>
            <div class="row">
                <ul class="nav">
                    <li class="nav-item"><a data-bs-toggle="tab" class="nav-link active" href="#first">CHICAGO </a></li>
                    <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#second">KANSAS CITY </a></li>
                    <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#third">DENVERN</a></li>
                    <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#fourth">NEW-YORK</a></li>
                    <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#fifth">LONDON</a></li>
                </ul>
                <div class="tab-content">
                    <div id="first" class="tab-pane active">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img class="width" src="{{asset('frontend')}}/images/property/01.jpg" alt="">
                                        <h5>1450 Cloudcroft Drop</h5>
                                        <p>Illinois / Chicago</p>
                                        <span>$250,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img class="width" src="{{asset('frontend')}}/images/property/02.jpg" alt="">
                                        <h5>140 Small Village</h5>
                                        <p>Missouri / Kansas City</p>
                                        <span>$200,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/03.jpg" alt="">
                                        <h5>1250 Lake House</h5>
                                        <p>Colorado / Denver</p>
                                        <span>$339,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/04.jpg" alt="">
                                        <h5>1450 Cloudcroft Drop</h5>
                                        <p>Illinois / Chicago</p>
                                        <span>$250,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/05.jpg" alt="">
                                        <h5>140 Small Village</h5>
                                        <p>Missouri / Kansas City</p>
                                        <span>$200,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/06.jpg" alt="">
                                        <h5>1250 Lake House</h5>
                                        <p>Colorado / Denver</p>
                                        <span>$339,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/06.jpg" alt="">
                                        <h5>1250 Lake House</h5>
                                        <p>Colorado / Denver</p>
                                        <span>$339,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/06.jpg" alt="">
                                        <h5>1250 Lake House</h5>
                                        <p>Colorado / Denver</p>
                                        <span>$339,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/06.jpg" alt="">
                                        <h5>1250 Lake House</h5>
                                        <p>Colorado / Denver</p>
                                        <span>$339,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="second" class="tab-pane fade">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img class="width" src="{{asset('frontend')}}/images/property/02.jpg" alt="">
                                        <h5>1450 Cloudcroft Drop</h5>
                                        <p>Illinois / Chicago</p>
                                        <span>$250,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img class="width" src="{{asset('frontend')}}/images/property/03.jpg" alt="">
                                        <h5>140 Small Village</h5>
                                        <p>Missouri / Kansas City</p>
                                        <span>$200,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/03.jpg" alt="">
                                        <h5>1250 Lake House</h5>
                                        <p>Colorado / Denver</p>
                                        <span>$339,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/04.jpg" alt="">
                                        <h5>1450 Cloudcroft Drop</h5>
                                        <p>Illinois / Chicago</p>
                                        <span>$250,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/05.jpg" alt="">
                                        <h5>140 Small Village</h5>
                                        <p>Missouri / Kansas City</p>
                                        <span>$200,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/06.jpg" alt="">
                                        <h5>1250 Lake House</h5>
                                        <p>Colorado / Denver</p>
                                        <span>$339,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/06.jpg" alt="">
                                        <h5>1250 Lake House</h5>
                                        <p>Colorado / Denver</p>
                                        <span>$339,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/06.jpg" alt="">
                                        <h5>1250 Lake House</h5>
                                        <p>Colorado / Denver</p>
                                        <span>$339,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/06.jpg" alt="">
                                        <h5>1250 Lake House</h5>
                                        <p>Colorado / Denver</p>
                                        <span>$339,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="third" class="tab-pane fade">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img class="width" src="{{asset('frontend')}}/images/property/05.jpg" alt="">
                                        <h5>1450 Cloudcroft Drop</h5>
                                        <p>Illinois / Chicago</p>
                                        <span>$250,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img class="width" src="{{asset('frontend')}}/images/property/06.jpg" alt="">
                                        <h5>140 Small Village</h5>
                                        <p>Missouri / Kansas City</p>
                                        <span>$200,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/03.jpg" alt="">
                                        <h5>1250 Lake House</h5>
                                        <p>Colorado / Denver</p>
                                        <span>$339,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/04.jpg" alt="">
                                        <h5>1450 Cloudcroft Drop</h5>
                                        <p>Illinois / Chicago</p>
                                        <span>$250,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/05.jpg" alt="">
                                        <h5>140 Small Village</h5>
                                        <p>Missouri / Kansas City</p>
                                        <span>$200,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/06.jpg" alt="">
                                        <h5>1250 Lake House</h5>
                                        <p>Colorado / Denver</p>
                                        <span>$339,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/06.jpg" alt="">
                                        <h5>1250 Lake House</h5>
                                        <p>Colorado / Denver</p>
                                        <span>$339,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/06.jpg" alt="">
                                        <h5>1250 Lake House</h5>
                                        <p>Colorado / Denver</p>
                                        <span>$339,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/06.jpg" alt="">
                                        <h5>1250 Lake House</h5>
                                        <p>Colorado / Denver</p>
                                        <span>$339,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="fourth" class="tab-pane fade">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img class="width" src="{{asset('frontend')}}/images/property/02.jpg" alt="">
                                        <h5>1450 Cloudcroft Drop</h5>
                                        <p>Illinois / Chicago</p>
                                        <span>$250,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img class="width" src="{{asset('frontend')}}/images/property/04.jpg" alt="">
                                        <h5>140 Small Village</h5>
                                        <p>Missouri / Kansas City</p>
                                        <span>$200,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/03.jpg" alt="">
                                        <h5>1250 Lake House</h5>
                                        <p>Colorado / Denver</p>
                                        <span>$339,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/04.jpg" alt="">
                                        <h5>1450 Cloudcroft Drop</h5>
                                        <p>Illinois / Chicago</p>
                                        <span>$250,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/05.jpg" alt="">
                                        <h5>140 Small Village</h5>
                                        <p>Missouri / Kansas City</p>
                                        <span>$200,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/06.jpg" alt="">
                                        <h5>1250 Lake House</h5>
                                        <p>Colorado / Denver</p>
                                        <span>$339,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/06.jpg" alt="">
                                        <h5>1250 Lake House</h5>
                                        <p>Colorado / Denver</p>
                                        <span>$339,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/06.jpg" alt="">
                                        <h5>1250 Lake House</h5>
                                        <p>Colorado / Denver</p>
                                        <span>$339,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/06.jpg" alt="">
                                        <h5>1250 Lake House</h5>
                                        <p>Colorado / Denver</p>
                                        <span>$339,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="fifth" class="tab-pane fade">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img class="width" src="{{asset('frontend')}}/images/property/03.jpg" alt="">
                                        <h5>1450 Cloudcroft Drop</h5>
                                        <p>Illinois / Chicago</p>
                                        <span>$250,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img class="width" src="{{asset('frontend')}}/images/property/01.jpg" alt="">
                                        <h5>140 Small Village</h5>
                                        <p>Missouri / Kansas City</p>
                                        <span>$200,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/03.jpg" alt="">
                                        <h5>1250 Lake House</h5>
                                        <p>Colorado / Denver</p>
                                        <span>$339,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/04.jpg" alt="">
                                        <h5>1450 Cloudcroft Drop</h5>
                                        <p>Illinois / Chicago</p>
                                        <span>$250,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/05.jpg" alt="">
                                        <h5>140 Small Village</h5>
                                        <p>Missouri / Kansas City</p>
                                        <span>$200,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/06.jpg" alt="">
                                        <h5>1250 Lake House</h5>
                                        <p>Colorado / Denver</p>
                                        <span>$339,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/06.jpg" alt="">
                                        <h5>1250 Lake House</h5>
                                        <p>Colorado / Denver</p>
                                        <span>$339,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/06.jpg" alt="">
                                        <h5>1250 Lake House</h5>
                                        <p>Colorado / Denver</p>
                                        <span>$339,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/images/property/06.jpg" alt="">
                                        <h5>1250 Lake House</h5>
                                        <p>Colorado / Denver</p>
                                        <span>$339,000</span>
                                        <ul class="property-details">
                                            <li>3400 Sq Ft</li>
                                            <li>2 Bedrooms</li>
                                            <li>1 Bathroom</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- property section end  -->
@endsection