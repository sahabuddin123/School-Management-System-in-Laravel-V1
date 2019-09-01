@extends('layouts_educafe.master')
@section('title', ' Teachers | Educafe ')
@section('content')
<!-- start teacher banner section -->
<section class="teacher-banner">
            <div class="container  pt-5">
                <h2 class="text-light text-center">OUR TEACHER</h2>
                    <ul class="d-flex justify-content-center">
                        <li><a href="#">Home /</a></li>
                        <li><a href="#" class="text-success">Teacher</a></li>
                    </ul>
            </div>
        </section>
    <!-- end teacher banner section -->
    <!-- start our teacher -->
    <section class="teacher">
        <div class="teacher-section">
            <div class="container">
                <h2 class="my-5"><span class="overline">OUR</span> TEACHER</h2>
                <!-- start main row -->
                <div class="row">
                   
                    <!-- end single cell -->
                    <!-- start single cell -->
                    @foreach($teachers as $row)
                    <div class="col-md-4 col-sm-6 col-6 mb-3">
                        <div class="card">
                            <img src="assets/img/{{$row->timagename}}" class="card-img-top p-2" alt="..." style="height:350px;">
                            <div class="card-body" style="height:200px;">
                                  <h5 class="card-title text-center ">{{$row->tname}}</h5>
                                  <div class="card-text custom-icon mt-3">
                                    <ul class="d-flex justify-content-center ">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                  </div>
                                    <p class="card-text mt-3">
                                    {{$row->tabout}}
                                    </p>
                            </div>
                          </div>
                    </div>
                    @endforeach
                    <!-- end single cell -->
                    <!-- start single cell --> 
                </div>
                <!-- end single cell -->
                </div>
                <!-- end main row -->
                <!-- start pagination -->
                <div class="serial-btn d-flex justify-content-center my-5">
                    <nav aria-label="Page navigation example">
                      <ul class="pagination">
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                          </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item bg-success">
                          <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                </div>
                <!-- end pagination -->
            </div>
        </div>
    </section>
    <!-- end our teacher -->
@stop