@extends('layouts_educafe.master')
@section('title', ' Admission Report | Educafe ')
@section('content')
<div class="container">
    <h3 class="text-center mt-5 mb-5">Find Your Admission Report</h3>
    <form action="/showadmission" method="get">
    <div class="row">
        <div class="col-md-5 offset-3 mt-5 mb-5">
            <input type="number" name="sid" class="form-control" placeholder="Please Type your User id">
        </div>
        <div class="col-md-1 mt-5 mb-5">
         <button type="submit" class="btn btn-outline-success">Search</button>
        </div>
    </div>
    </form>
</div>
@stop
