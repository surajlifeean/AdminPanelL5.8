 @extends('main')
 @section('title',"Courses")
 @section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/bg_1.jpg')}});">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">{{$course[0]['name']}}</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Courses <i class="ion-ios-arrow-forward"></i></span> <span>Course-Details <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    <!-- {{dump($course)}} -->

    <section class="ftco-section fractro_details">

			<div class="container course-duration">
			<div class="duration" >

			<h3>Duration:
			{{$course[0]['duration']}}</h3>
			</div>

			<div class="eligibility">

			<h3>Eligibility:</h3>
			{!!$course[0]['eligibility']!!}
			</div>
			</div>
			<div class="container px-4">
				<div class="syllabus">


@foreach($sname as $s)

				<div class="session">
					<div class="col-md-12">

				<h3>Syllabus for: {{$s['session_name']}}</h3>
				</div>
				</div>
				<table class="table table-hover">
				  <thead>
				    <tr>
				      <!-- <th scope="col">#</th> -->
				      <th scope="col">Topic</th>
				      <th scope="col">Description</th>
				      <th scope="col"></th>
				    </tr>
				  </thead>
				  <tbody>

				  	@foreach($course as $topic)

				  	@if($topic['session_name']==$s['session_name'])
				    <tr>
				      <!-- <th scope="row">3</th> -->
				      <td>{{$topic['topic']}}</td>
				      <td colspan="2">{{$topic['description']}}</td>
				    </tr>
				    @endif

				    @endforeach

				  </tbody>
				</table>

@endforeach


				</div>
			</div>
		</section>


 @endsection
