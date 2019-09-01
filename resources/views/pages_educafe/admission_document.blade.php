@extends('layouts_educafe.master')
@section('title', ' Document | Educafe ')
@section('content')
<div class="container">
    <form action="/uploadfile" method="post" enctype="multipart/form-data">
        <div class="col-md-12">
            <h3 class="font-weight-bold">Upload Your Documents</h3>
            <div class="form-group">
                <input type="file" class="form-control-file" name="fileToUpload" id="exampleInputFile" aria-describedby="fileHelp">
                <small id="fileHelp" class="form-text text-muted">Please upload a passport size image: Size of image should not be more than 2MB.</small>
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <div class="container">
            <center> <div class="jumbotron" style="width:100%; box-shadow: -3px 3px 10px #999999;   margin-top:10px;">
                <h3>
                <b> <font style=" font-family: Verdana;  font-size:19px;"> Declaration By The Applicant</font></b>
                </h3>
                <p><font style=" font-family: Verdana;font-size:medium">
                    I hereby solemnly declare that all the particulars given in this form are true to the best of my knowledge
                    and belief. I shall abide by the rules and regulations laid down by the College from time to time.
                    In case the particulars furnished by me are found false, my admission stands canceled.
                </font></p>
                <input type="checkbox" id="dec" name="dec" value="I accept" onclick="send()"><font style=" font-family: Verdana;font-size:medium">
                I accept</font>
        </div>
    </form>
</div>
</div>
@stop