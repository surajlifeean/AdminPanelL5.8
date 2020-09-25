 @extends('main')
 @section('title',"Doctors_chamber")
 @section('stylesheets')
<link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet" media="screen">  
<style>

 .square, .btn {
    border-radius: 0px!important;
}

/* -- color classes -- */
.coralbg {
    background-color: #FA396F;
} 

.coral {
    color: #FA396f;
}

.turqbg {
    background-color: #46D8D2;
}

.turq {
    color: #46D8D2;
}

.white {
    color: #fff!important;
}

/* -- The "User's Menu Container" specific elements. Custom container for the snippet -- */
div.user-menu-container {
  z-index: 10;
  background-color: #fff;
  margin-top: 20px;
  background-clip: padding-box;
  opacity: 0.97;
  filter: alpha(opacity=97);
  -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
}

div.user-menu-container .btn-lg {
    padding: 0px 12px;
}

div.user-menu-container h4 {
    font-weight: 300;
    color: #8b8b8b;
}

div.user-menu-container a, div.user-menu-container .btn  {
    transition: 1s ease;
}

div.user-menu-container .thumbnail {
   width:100%;
   min-height:200px;
   border: 0px!important;
   padding: 0px;
   border-radius: 0;
   border: 0px!important;
}

/* -- Vertical Button Group -- */
div.user-menu-container .btn-group-vertical {
    display: block;
}

div.user-menu-container .btn-group-vertical>a {
    padding: 20px 25px;
    background-color: #46D8D2;
    color: white;
    border-color: #fff;
}

div.btn-group-vertical>a:hover {
    color: white;
    border-color: white;
}

div.btn-group-vertical>a.active {
    background: #FA396F;
    box-shadow: none;
    color: white;
}
/* -- Individual button styles of vertical btn group -- */
div.user-menu-btns {
    padding-right: 0;
    padding-left: 0;
    padding-bottom: 0;
}

div.user-menu-btns div.btn-group-vertical>a.active:after{
  content: '';
  position: absolute;
  left: 100%;
  top: 50%;
  margin-top: -13px;
  border-left: 0;
  border-bottom: 13px solid transparent;
  border-top: 13px solid transparent;
  border-left: 10px solid #46D8D2;
}
/* -- The main tab & content styling of the vertical buttons info-- */
div.user-menu-content {
    color: #323232;
}

ul.user-menu-list {
    list-style: none;
    margin-top: 20px;
    margin-bottom: 0;
    padding: 10px;
    border: 1px solid #eee;
}
ul.user-menu-list>li {
    padding-bottom: 8px;
    text-align: center;
}

div.user-menu div.user-menu-content:not(.active){
  display: none;
}

/* -- The btn stylings for the btn icons -- */
.btn-label {position: relative;left: -12px;display: inline-block;padding: 6px 12px;background: rgba(0,0,0,0.15);border-radius: 3px 0 0 3px;}
.btn-labeled {padding-top: 0;padding-bottom: 0;}

/* -- Custom classes for the snippet, won't effect any existing bootstrap classes of your site, but can be reused. -- */

.user-pad {
    padding: 20px 25px;
}

.no-pad {
    padding-right: 0;
    padding-left: 0;
    padding-bottom: 0;
}

.user-details {
    background: #eee;
    min-height: 333px;
}

.user-image {
  max-height:200px;
  overflow:hidden;
}

.overview h3 {
    font-weight: 300;
    margin-top: 15px;
    margin: 10px 0 0 0;
}

.overview h4 {
    font-weight: bold!important;
    font-size: 40px;
    margin-top: 0;
}

.view {
    position:relative;
    overflow:hidden;
    margin-top: 10px;
}

.view p {
    margin-top: 20px;
    margin-bottom: 0;
}
 
.caption {
    position:absolute;
    top:0;
    right:0;
    background: rgba(70, 216, 210, 0.44);
    width:100%;
    height:100%;
    padding:2%;
    display: none;
    text-align:center;
    color:#fff !important;
    z-index:2;
}

.caption a {
    padding-right: 10px;
    color: #fff;
}

.info {
    display: block;
    padding: 10px;
    background: #eee;
    text-transform: uppercase;
    font-weight: 300;
    text-align: right;
}

.info p, .stats p {
    margin-bottom: 0;
}

.stats {
    display: block;
    padding: 10px;
    color: white;
}

.share-links {
    border: 1px solid #eee;
    padding: 15px;
    margin-top: 15px;
}

.square, .btn {
    border-radius: 0px!important;
}

/* -- media query for user profile image -- */
@media (max-width: 767px) {
    .user-image {
        max-height: 400px;
    }
}

</style>

 @endsection

 @section('content')

<div class="container">


@foreach($doctors as $doctor)

    <div class="row user-menu-container square doctor">
        <div class="col-md-7 user-details">
            <div class="row coralbg white">
                <div class="col-md-6 no-pad">
                    <div class="user-pad">
                        <h3>{{$doctor->name}} ,</h3>
                        <h4 class="white"><i class="fa fa-check-circle-o"></i>{!!"<p>".$doctor->qualification."</p>"!!}</h4>
                    </div>
                </div>
                <div class="col-md-6 no-pad">
                    <div class="user-image">
                        <img src="{{asset('/images/doctors/'.$doctor->image)}}" class="img-responsive thumbnail">
                    </div>
                </div>
            </div>
            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
			   	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
				    <div class="text">
						    	<span>Want To Book An Appointment?</span>
						    	<span>Call Us: + 1235 2355 98</span>
				    </div>
			</div>

        </div>

        <div class="col-md-5 user-menu user-pad">
            <div class="user-menu-content active">
                <h3>
                    Visit Dates And Time
                </h3>
                <ul class="user-menu-list">
                    <li>
                        @php
                            $time=explode(",",$doctor->visit_hours)
                        @endphp
                        @foreach($time as $t)
						<p>{{$t}}</p>
                        @endforeach
                    </li>

                </ul>
            </div>


        </div>
    </div>
@endforeach
<!--     new doctor  -->

</div>


 @endsection

 @section('scripts')

<script type="text/javascript">
$(document).ready(function() {
    var $btnSets = $('#responsive'),
    $btnLinks = $btnSets.find('a');
 
    $btnLinks.click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.user-menu>div.user-menu-content").removeClass("active");
        $("div.user-menu>div.user-menu-content").eq(index).addClass("active");
    });
});

$( document ).ready(function() {
    $("[rel='tooltip']").tooltip();    
 
    $('.view').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 
});
</script>

 @endsection