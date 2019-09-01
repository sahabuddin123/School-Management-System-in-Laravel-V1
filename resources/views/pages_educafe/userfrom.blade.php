@extends('layouts_educafe.master')
@section('title', ' Login | Educafe ')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-6 offset-3 mt-5 mb-5">
<h1>Welcome {{$name}}</h1>
</div>

<table class="table table-hover mb-5 mt-5">
<tr>
<th>Name: </th>
<td>{{$name}}</td>
</tr>
<tr>
<th>Mobile No: </th>
<td>{{$mobile}}</td>
</tr>
<tr>
<th>Email : </th>
<td>{{$email}}</td>
</tr>
<tr>
<th>Date Of Birth: </th>
<td>{{$dob}}</td>
</tr>
<tr>
<th>User Id: </th>
<td>{{$sid}}</td>
</tr>
</table>
<div class="col-md-1 offset-5">
 <a  href="/"><button class="btn btn-outline-success mb-5">Logout</button></a>
</div>          
</div>
</div>
@stop