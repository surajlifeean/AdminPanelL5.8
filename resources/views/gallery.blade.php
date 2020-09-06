 @extends('main')
 @section('title',"Gallery")
 @section('stylesheets')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
	<link rel="stylesheet" href="{{asset('css/gallery-clean.css')}}">

    <style type="text/css">
        .navbar{
            margin-bottom:0px;
        }
    </style>
 @endsection

 @section('content')


    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/bg_1.jpg')}});">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Gallery</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Gallery<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>


<div class="container gallery-container">

<!--     <h1>Bootstrap 3 Gallery</h1> -->

<!--     <p class="page-description text-center">Clean Layout With Minimal Styles</p>
 -->    
    <div class="tz-gallery">

        <div class="row">
@foreach($gallery as $image)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="{{asset('/images/gallery/'.$image->image)}}">
                        <img src="{{asset('/images/gallery/'.$image->image)}}" alt="Park">
                    </a>
                    <div class="caption">
                        <h3>{{$image->title}}</h3>
                        <p>{{$image->description}}</p>
                    </div>
                </div>
            </div>
@endforeach

        </div>

    </div>

</div>

@endsection

@section('scripts')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
	<script>
	   baguetteBox.run('.tz-gallery');
	</script>

@endsection

