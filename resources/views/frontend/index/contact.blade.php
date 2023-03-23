@extends('frontend.blogmaster')
@section('blog.content')
<!-- contact map section start  -->
<section class="map-area">
    <div class="container">
        <div class="row">    
            <ul class="camp-link">
                <li><a href="index.html">Home</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li>Blog</li>
            </ul>
            <div class="section-title section-title-2">
                <h3>Our <span>Contacts</span></h3>                        
            </div>
            <div class="col-lg-12">
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.7786647578782!2d39.66841747377167!3d-4.065477744977225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x184013daee3082b3%3A0x73d7705f0421182e!2sFREEMASON%20HALL%20MOMBASA!5e0!3m2!1sen!2sbd!4v1678771967317!5m2!1sen!2sbd"  height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact map section end  -->

<!-- contact section start  -->
<section class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-30">
                <ul class="contact-details">
                    <li class="contact-title">Contact Info</li>
                    <li><p class="contact-description">Etiam commodo consequat egestas. Morbi at ligula nulla. Mauris bibendum mi vitae condimentum mollis. Sed sollicitudin enim vehicula, varius sapien id, consectetur posuere sem commodo.</p></li>
                    <li class="contact-space">
                        <span>Real Home INC.</span>
                        <span> ST STEPHEN'S HOUSE, COLSTON AVE, BRISTOL, </span>
                        <span>BRISTOL BS1 4ST, UK</span>
                    </li>
                    <li class="contact-phone">
                        <span class="tag">Telephone:</span> +1 800 603 6035
                    </li>
                    <li class="contact-phone">                            
                        <span class="tag">FAX:</span> +1 800 889 9898
                    </li>
                    <li class="contact-phone mail">                            
                        <span class="tag">E-mail:</span> mail@demolink.org
                    </li>
                </ul>
            </div>
            <div class="col-lg-8 mb-30">
                <form action="{{route('contact.post')}}" class="coment-form" method="POST">
                    {{-- @method('POST') --}}
                     @csrf
                    <h5 class="comnt-input-title text-dark">Leave a comment</h5>

                    {{-- <form action="{{route('contact.post')}}" method="post" enctype="multipart/form-data">
                        @method('POST')
                        @csrf --}}

                     
                    <input class="input-feild" type="text" name="name" placeholder="Your name">                             
                    <input class="input-feild mail-field" name="email" type="email" placeholder="Your mail">
                    <textarea id="input_Comnt" cols="30" rows="10" name="comments" placeholder="Your Comment"></textarea>
                    <div class="coment-btns">
                        <button type="submit"  class="theme-btn">Send</button>
                        {{-- <button type="button" class="send-btn">Send</button> --}}
                        <button type="button" class="clear-btn">Clear</button>
                    </div>                         
                </form>
            </div>
        </div>
    </div>
</section>
<!-- contact section end  -->

@endsection