@extends('layouts_educafe.master')
@section('title', ' Admission | Educafe ')
@section('content')
<div class="container">
      <div class="row">
        <form action="/admissionform" method="get">
        <div class="col-md-4">
            <label>Please Entar User Id: </label>
            <input type="text" class="form-control" name="sid" placeholder="User Id" require="true"><br>
        </div>
        <div class="col-md-4">
            <label>Course Id </label>
            <input type="text" class="form-control" name="cid" value="{{$cid}}" placeholder="User Id" require="true"><br>
        </div>
          <div class="col-md-4">
            <label>Student's Mobile No: </label>
            <input type="text" class="form-control" name="smobile1" placeholder="Telephone"><br>
            <input type="text" class="form-control" name="smobile2" placeholder="Mobile Number">
          </div>
          <div class="col-md-4">
            <label>Father's name:</label>
            <input type="text" class="form-control" name="fname" placeholder="Father name">
            <label>Father's occupation:</label>
            <input type="text" class="form-control" name="foccuption" placeholder="father occupation">
            <label> Mobile No:</label>
            <input type="text" class="form-control" name="fmobile" placeholder="father mobile number" >
          </div>
          <div class="col-md-4">
            <label>Mother's name:</label>
             <input type="text" class="form-control" name="mname" placeholder="Mother name">
            <label>Mother's occupation:</label>
            <input type="text" class="form-control" name="moccuption" placeholder="Mother occupation">
            <label> Mobile No:</label>
            <input type="text" class="form-control" name="mmobile" placeholder="Mother mobile number" >
          </div>
          <div class="col-md-4">
            <label> Income of Parents:</label>
            <input type="text" class="form-control" name="incomef" ><br>
            <label>Sex:</label>
            <input type="radio" class="ml-2" name="gender" value="Male"><font >Male</font>
            <input type="radio"  name="gender" value="Female"><font>Female </font>
          </div>
          <div class="col-md-4">
            <label> Present Address:</label>
            <input type="text" class="form-control"  name="pradd" placeholder="Address"><br>
            <input type="text" class="form-control"  name="prstate" placeholder="State"><br>
            <input type="text" class="form-control"  name="prpin"  placeholder="Pin"><br>
            <input type="text" class="form-control"  name="prmobile" placeholder="Mobile"><br>
          </div>
          <div class="col-md-4">
            <label>Permanent Address:</label>
            <input type="text" class="form-control"  name="peadd" placeholder="Address"><br>
            <input type="text" class="form-control"  name="pestate" placeholder="State"><br>
            <input type="text" class="form-control"  name="pepin"  placeholder="Pin"><br>
            <input type="text" class="form-control"  name="pemobile" placeholder="Mobile"><br>
          </div>
          <div class="col-md-4">
          <label>From: </label><br>
            <input type="radio" name="ufrom" value="Rural"><label>Rural</label>
            <input type="radio" name="ufrom" value="Urban"><label>Urban</label>
            <input type="radio" name="ufrom" value="City"><label>City</label>
        </div>
        <div class="col-md-4">
          <label> Nationality:</label>
          <input type="text" class="form-control" name="natn">
          <label> Religion:</label>
          <input type="text" class="form-control" name="relg">
          </div><br>
    <div class="col-md-4">
      <label>Course Name:</label>
      <input type="text"  name="brnc" required="true" value="{{$ctitle}}" class="form-control">
    </div>
    <div class="col-md-2 col-sm-3 col-lg mt-5">
      <label>Academic Qualification:</label>
      <div class="row">
        <div class="col-md-2 col-sm-3 ">
          <label>Board/University</label>
          <input type="text"  name="nob1" required="true" placeholder="10th class" class="form-control">
          <input type="text"  name="nob2" required="true" placeholder="12th class" class="form-control">
        </div>
        <div class="col-md-2 col-sm-3 ">
          <label>Year of Passing</label>
          <input type="text"  name="yop1"  required="true" placeholder="10th class" class="form-control">
          <input type="text"  name="yop2"  required="true" placeholder="12th class" class="form-control">
        </div>
        <div class="col-md-2 col-sm-3 ">
          <label>Total Mark</label>
          <input type="text"  name="tm1"  required="true" placeholder="10th class" class="form-control">
          <input type="text"  name="tm2"  required="true" placeholder="12th class" class="form-control">
        </div>
        <div class="col-md-2 col-sm-3 ">
          <label>Mark Obtained</label>
          <input type="text"  name="mo1"  required="true" placeholder="10th class" class="form-control">
          <input type="text"  name="mo2"  required="true" placeholder="12th class" class="form-control">
        </div>
        <div class="col-md-2 col-sm-3 ">
          <label>Division Mark</label>
          <input type="text"  name="divs1" required="true" placeholder="10th class" class="form-control">
          <input type="text"  name="divs2" required="true" placeholder="12th class" class="form-control">
        </div>
        <div class="col-md-2 col-sm-3 ">
          <label>% of Marks</label>
          <input type="text"  name="pom1"  required="true" placeholder="10th class" class="form-control">
          <input type="text"  name="pom2"  required="true" placeholder="12th class" class="form-control">
        </div>
      </div>
    </div>
    <div class="col-md-3 mt-5">
      <label>Medium of Instruction 10th Class</label>
    </div>
    <div class="col-md-9">
      <input type="radio"  name="moi" value="Arabiq"><label>Arabiq</label>
      <input type="radio"  name="moi" value="Hindi"><label>Hindi</label>
      <input type="radio"  name="moi" value="English"><label>English</label>
      <input type="radio"  name="moi" value="Bengali"><label>Bengali</label>
      <input type="radio"  name="moi" value="Others"><label>Others</label>
    </div>
    <div class="col-md-3">
      <label>Mode of Payment</label>
    </div>
    <div class="col-md-9">
      <input type="radio"  name="pay" value="Loan"><label>Loan</label>
      <input type="radio"  name="pay" value="Self"><label>Self</label>
    </div>
    <div class="col-md-3 offset-5">
      <input type="submit" class="btn btn-outline-success"  value="Next">
    </div>
  </form>
</div>
</div>
@stop