 @extends('admin.adminmain')
 @section('title',"Gallery")
 @section('stylesheets')

 @endsection

 @section('content')
<section id="content">
<section class="vbox">
<section class="scrollable padder">


 			<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href=""><i class="fa fa-home"></i>Home</a></li>>
                <li><a href="">Applicant</a></li>
                <!-- <li><a href=""></a></li> -->
            </ul>

<!--                        <header class="panel-heading">
                        <span class="h4">Applicant</span>
                      </header> -->

 <div class="container mb-5 mt-2">

<!--         <h1>Dream Search Health Point</h1>
        <h3>National Vocational Education Mission</h3> -->



        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <p class="card-text">Enrollment No: {{$applicants->applicant_id}}
                        </p>
                        <p class="card-text">Applicant Name: {{$applicants->applicant}}</p>
                        <p class="card-text">Father's Name: {{$applicants->father_name}} </p>
                        <p class="card-text">Mother's Name:{{$applicants->mother_name}}</p>
                        <p class="card-text">Address: {{$applicants->address}}</p>
                        <p class="card-text">Pin: {{$applicants->pin}}</p>
                        <p class="card-text">Category: {{$applicants->category}}</p>
                        <p class="card-text">Nationality: {{$applicants->nationality}}</p>
                        <p class="card-text">Religion: {{$applicants->religion}}</p>
                        <p class="card-text">Date Of Birth: {{$applicants->dob}}</p>
                        <p class="card-text">Gender: {{$applicants->sex}}</p>
                        <p class="card-text">E-Book Medium: {{$applicants->e_book_medium}}</p>
                        <p class="card-text">Mobile: {{$applicants->mobile}}</p>
                        <p class="card-text">Telephone (with STD code): {{$applicants->telephone}}</p>
                        <p class="card-text">Email: {{$applicants->email}}</p>
                    </div>
                    <div class="col-1">

                        <div class="row">
                            <div class="col-1"><img class="profile" src="{{asset('images/registration/'.$applicants->image_name)}}" alt="Profile Image" style="width: 120px;"></div>
                            <!-- Force next columns to break to new line -->
                            <div class="w-100 mb-4"></div>
                            <div class="col-1"><img class="sign" src="{{asset('images/registration/'.$applicants->sign_name)}}" alt="Signature" style="width: 120px;"></div>
                        </div>
                    </div>

                </div>
                <h6 class="card-subtitle mt-5 mb-3">Details Of Qualifying Examination:</h6>
                <div class="table-responsive mr-3">

                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <td scope="col">Exam Passed</td>
                                <td scope="col">Name of Board/Examination</td>
                                <td scope="col">School/College Name</td>
                                <td scope="col">Passing Year</td>
                                <td scope="col">% obtained</td>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($applicants->educations as $edu)
                            <tr>
                                <td>{{$edu->exam_passed}}</td>
                                <td>{{$edu->board}}</td>
                                <td>{{$edu->instituation}}</td>
                                <td>{{$edu->year_of_passing}}</td>
                                <td>{{$edu->percentage}}</td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
                <hr>
<!--                 <h4 class="card-title mb-2">For The Office Use Only:</h4>
                <div class="row">
                    <div class="col-8">
                        <p class="card-text">API Centre Name: </p>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <p class="card-text">API Centre Code: </p>
                    </div>
                    <div class="col-4">
                        <p class="card-text">Date Of Admission: </p>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <p class="card-text">Course Code: </p>
                    </div>
                    <div class="col-4">
                        <p class="card-text">Course Name: </p>
                    </div>
                </div>
                <div class="row mt-5 pt-4">

                    <div class="col-10">
                        <p class="card-text float-right">_______________________</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <p class="card-text float-right">Authorized Signature</p>
                    </div>
                </div> -->
            </div>
                 <footer class="panel-footer text-right bg-light lter">
                                    <a href="{{route('registration.index')}}" class="btn btn-danger" style="width: 100px;">Back</a>
                  </footer>
        </div>
    </div>
     
          

</section>
</section>
</section>



 @endsection


 @section('scripts')

<script>

$(document).ready(function(){

     
  $('.formConfirm').on('click', function(e) {
    //alert();
        e.preventDefault();
        var el = $(this);
        // alert(el);
        var title = el.attr('data-title');
        var msg = el.attr('data-message');
        var dataForm = el.attr('data-form');
        
        $('#formConfirm')
        .find('#frm_body').html(msg)
        .end().find('#frm_title').html(title)
        .end().modal('show');
        
        $('#formConfirm').find('#frm_submit').attr('data-form', dataForm);
  });
  $('#formConfirm').on('click', '#frm_submit', function(e) {
        // console.log($('.frmDelete'));
        $('.frmDelete').submit();        
  });
});
</script>
 @endsection
