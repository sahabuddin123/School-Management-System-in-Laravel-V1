@extends('layouts_educafe.master')
@section('title', ' Course | Educafe ')
@section('content')
<!-- slider part start -->
<div class="row">
                <div class="col-md-12 bg_image">
                    <img src="{{ asset('/assets/img/5.png')}}">
                    <div class="about_bg">
                        <h2 class="text-white">ALL COURSE</h2>
                        <a href="#" class="a_left">Home</a>
                        <a href="#" class="active">/ Course</a>
                    </div>
                    
                </div>
            </div>
            <!-- slider part end -->
            <!-- courses section start -->
            <div class="container">
                <div class="bottom_top mt-5"></div>
                <div class="row">
                    <div class="col-md-3">
                        <h2 class="font-weight-bold">Our all Course</h2>
                    </div>
                    <div class="col-md-8 offset-1  mt-1">
                        
                        <select class="custom-select col-md-4">
                            <option>Select catagory</option>
                            <option>Web design</option>
                            <option>Graphics</option>
                            <option>Networking</option>
                        </select>
                        <select class="custom-select col-md-4">
                            <option>Sort by</option>
                            <option>100</option>
                            <option>200</option>
                            <option>300</option>
                        </select>
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
                            <i class="fas fa-search"></i>
                        </a>
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <i class="fas fa-list"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
            
            <div class="container">
                <div class="collapse show" id="collapseExample">
                    <div class="card card-body mt-5">
                        <div class="row">
                            @foreach($couress as $row)
                            <div class="col-md-4 mt-5">
                                <div class="custom_cards">
                                    <div class="card">
                                        <img class="card-img-top" src="assets/img/{{$row->imagename}}" alt="">
                                        <div class="card-body" style="height:205px;overflow:hidden; margin-bottom:20px;">
                                            <h5 class="card-title text-center"
                                            style="color: #000">{{$row->ctitle}}</h5>
                                            <p class="text-center">by__ <span style="color: green;">{{$row->courseby}}</p>
                                            <p class="card-text text-center" style="color: #000; ">{{$row->cditels}}</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="left">
                                                    <p><i class="fas fa-user"></i> {{$row->cts}}</p>
                                                </div>
                                                <div class="main">
                                                    @php
                                                    $id=$row->cid;
                                                    @endphp
                                                    <p> <a href="/showdeatils/{{$id}}"><span>Apply Now<span></a> </p>
                                                    
                                                </div>
                                                <div class="right">
                                                    <p> {{$row->cta}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!--  -->
                </div>
            </div>
            <!-- courses section end -->
            
@stop