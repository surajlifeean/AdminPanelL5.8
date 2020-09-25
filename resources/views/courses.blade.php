 @extends('main')
 @section('title',"Courses")
 @section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/bg_1.jpg')}});">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Courses</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Courses <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
			<div class="container px-4">
				<div class="row">
					@php
						$i=1;
					@endphp
					@foreach($courses as $course)
					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url({{asset('images/course-'.($i%4).'.jpg')}});"></div>
						@php
							$i++;
						@endphp
						<div class="text pt-4">
							<p class="meta d-flex">
<!-- 								<span><i class="icon-user mr-2"></i>Mr. Khan</span>
								<span><i class="icon-table mr-2"></i>10 seats</span> -->
								<span><i class="icon-calendar mr-2"></i>{{$course['duration']}}</span>
							</p>
							<h3><a href="#">{{$course['name']}}</a></h3>
<!-- 							<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p> -->
							<p><a href="{{route('courses.show',$course['name'])}}" class="btn btn-primary">Details</a></p>
						</div>
					</div>
					@endforeach


				</div>
			</div>
		</section>


 @endsection
