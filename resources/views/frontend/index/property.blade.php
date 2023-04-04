@extends('frontend.blogmaster')
@section('blog.content')



  <!-- property section start  -->
  <section class="property-area section-padding">
    <div class="container">
        <div class="row">
            <ul class="camp-link justify-content-center">
                <li><a href="{{route('homepage.get')}}">Home</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li>Property</li>
            </ul>
            <div class="section-title text-center mb-70">
                <h3>Property <span>Catalog</span></h3>
            </div>
            <div class="row">
                <ul class="nav">

                    @foreach ($categories as $key => $category)
                        <li class="nav-item"><a data-bs-toggle="tab" class="nav-link {{ $key == 0 ? 'active' : '' }}" href="#{{ "category-" . $category->id}}">{{ $category->category_name }} </a></li>
                    @endforeach
                </ul>
                <div class="tab-content">
                    @foreach ($categories as $key => $category)
                    <div id="{{ "category-" . $category->id}}" class="tab-pane {{ $key == 0 ? 'active' : '' }}">
                        <div class="row">
                            @php
                                $properties = getPropertyByCategoryId($category->id);
                            @endphp
                            @foreach ($properties as $property)
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-property">
                                    <a href="#">
                                        <img src="{{ asset('storage/post-image/' . $property->image) }}">
                                        <h5><a href="{{ route('property.details.show', $property->id) }}">{{ $property->title }}</a></h5>
                                        <p>{{ $property->description }}</p>
                                        <span>{{ $property->price }}</span>
                                        <ul class="property-details">

                                        </ul>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                            @if($properties->hasPages())
                                <div class="pagination-wrapper">
                                    {{ $properties->links() }}
                                </div>
                            @endif
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</section>
<!-- property section end  -->
@endsection
