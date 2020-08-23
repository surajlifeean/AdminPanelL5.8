    
 @extends('main')
 @section('title',"Registration")

 @section('stylesheets')

 <!--      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
<style>
h1,h3{
    text-align: center;
}
h4{
    font-size: xx-large;
}
.col-md-8{
    padding-left: 0px;
}
label{
    font-weight: 400;
}
.label{
    font-weight: 500;
    font-size: x-large;
}
.my-2{
    border: black 1px solid;
    background-color: #ffffff96;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.473), 0 6px 20px 0 rgba(0, 0, 0, 0.473);
}
.title{
    /*background-color: #000000e3;*/
    color: white;
    padding-top: 5px;
    padding-bottom: 5px;
    margin-bottom: 25px;
    margin-right: auto;
    margin-left: auto;

}
/*body{
    background-image: linear-gradient(to top right, #08aeea 0%, #b721ff 100%);
    padding-bottom: 30px;
}*/
.container-title{
    width: 75%;
    padding-right: 0px;
    padding-left: 0px;
    margin-right: auto;
    margin-left: auto;

}
 .btn-red{
    color: #fff;
    background-color: #ff4b5a;
    border-color: #ff4b5a;
  }
  .input-field{
    display: block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    /*background-color: #fff;*/
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
  }

  .invalid{
    width: 100%;
    margin-top: .25rem;
    font-size: 80%;
    color: #dc3545
  }

</style>

 @endsection

 @section('content')
    
  <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/bg_1.jpg')}});">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Registration</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Registration<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section ftco-no-pt ftc-no-pb">
      <div class="container">
  <div class="row d-flex">
    <div class="container-title">
        <div class="title">
            <h3>National Vocational Education Mission</h3>
        </div>
    </div>
    <div class="container my-2">
        <form class="needs-validation " method="POST" novalidate>
            <!-- <h4 class="mb-5">Registration Form:</h4> -->
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Applicant Name</label>
                    <input type="text" class="form-control" id="validationCustom01" required>
                    <div class="invalid-feedback">
                        Please Enter Name
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Father's Name</label>
                    <input type="text" class="form-control" id="validationCustom02" required>
                    <div class="invalid-feedback">
                        Please Enter Father's Name
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom03">Mother's Name</label>
                    <input type="text" class="form-control" id="validationCustom03" required>
                    <div class="invalid-feedback">
                        Please Enter Mother's Name
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom05">Enrollment No</label>
                    <input type="text" class="form-control" id="validationCustom05" required>
                    <div class="invalid-feedback">
                        Please provide a Enrollment No.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom04">Address</label>
                    <textarea class="form-control" id="validationCustom04" required></textarea>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom05">Pin</label>
                    <input type="text" class="form-control" id="validationCustom05" required>
                    <div class="invalid-feedback">
                        Please provide a valid Pin.
                    </div>
                </div>
            </div>
            <div class="form-row ">
                <div class="col-md-6">
                    <label for="validationCustom12">Category</label>
                    <select id="validationCustom12" class="custom-select" required>
                        <option selected disabled value="">Choose...</option>
                        <option value="SC">SC</option>
                        <option value="ST">ST</option>
                        <option value="OBC">OBC</option>
                        <option value="GENERAL">GENERAL</option>
                    </select>
                    <div class="invalid-feedback">
                        Please Select a Valid Category.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom06">Nationality</label>
                    <input type="text" class="form-control" id="validationCustom06" required>
                    <div class="invalid-feedback">
                        Please provide a Nationality.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom07">Religion</label>
                    <input type="text" class="form-control" id="validationCustom07" required>
                    <div class="invalid-feedback">
                        Please provide a Religion.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom08">Date Of Birth</label>
                    <input type="date" class="form-control" id="validationCustom08" required>
                    <div class="invalid-feedback">
                        Please provide a date of birth.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom10">Telephone (with STD code)</label>
                    <input type="text" class="form-control" id="validationCustom10" required>
                    <div class="invalid-feedback">
                        Please provide a Telephone No.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom11">Email</label>
                    <input type="email" class="form-control" id="validationCustom11" required>
                    <div class="invalid-feedback">
                        Please provide a Email.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="Sex">Sex</label>
                    <select id="Sex" class="custom-select" required>
                        <option selected disabled value="">Choose...</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <div class="invalid-feedback">
                        Please Select a Valid Sex.
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="medium">E-Book Medium</label>
                    <select id="medium" class="custom-select" required>
                        <option selected disabled value="">Choose...</option>
                        <option value="English">English</option>
                        <option value="Hindi">Hindi</option>
                        <option value="Bengali">Bengali</option>
                    </select>
                    <div class="invalid-feedback">
                        Please Select a Valid E-book Medium.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom09">Mobile</label>
                    <input type="text" class="form-control" id="validationCustom09" required>
                    <div class="invalid-feedback">
                        Please provide a Mobile No.
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="row">
                    <label class="ml-4 label">Details Of Qualifying Examination:</label>
                </div>


                <div class="table-responsive">

                    <table class="table table-dark" id="table1">
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
                            <tr>
                                <td><input type="text" class="input-field edu" id="valid01"></td>
                                <td><input type="text" class="input-field edu" id="valid02"></td>
                                <td><input type="text" class="input-field edu" id="valid03"></td>
                                <td><input type="text" class="input-field edu" id="valid04"></td>
                                <td><input type="text" class="input-field edu" id="valid05"></td>
                                <td><button class="btn btn-primary" id="validate" type="button">Add</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="outer"></div>
            </div>
            <div class="form-row">
                <div class="input-group">
                    <div class="row ml-2">
                        <label class="mt-4" for="image">Upload Image</label>
                        <input type="file" class="form-control-file" id="file1" accept="image/jpeg,image/jpg"
                            onchange="File1validation()" required>
                        <div class="invalid-feedback">
                            please Upload Image
                        </div>
                        <span id="size1_check" class="my-1"></span>
                    </div>
                    <div class="w-100"></div>
                    <div class="row ml-2">
                        <label class="mt-5" for="sign">Upload Signature</label>
                        <input type="file" class="form-control-file" id="file2" accept="image/jpeg,image/jpg"
                            onchange="File2validation()" required>
                        <div class="invalid-feedback">
                            please upload Signature
                        </div>
                        <span id="size2_check"></span>
                    </div>
                </div>

            </div>
            <label class="mt-5">Enclosure: Demand Draft Affiliated Xerox Copy of last qualification & Caste
                Certificate</label>
            <br>
            <label class="label">Terms And Conditions:</label>
            <p>
                I have read all th rules and regulations of the institute and admission to the course applied for.I
                declare that the above information
                is true and correct to my knowledge and belief and I fully understand that my admission will stand
                cancelled if any information by me
                is found to be false or twisted.
            </p>
            <div class="form-group mr-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>
            <button class="btn btn-red mb-5" type="submit">Submit form</button>
        </form>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script> -->
    <script src="{{asset('js/registration.js')}}"></script>

        </div>
      </div>
    </section>
    


@endsection
