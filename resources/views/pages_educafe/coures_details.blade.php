@extends('layouts_educafe.master')
@section('title', ' Course Details | Educafe ')
@section('content')
 <!-- slider part start -->
 <div class="row">
                <div class="col-md-12 bg_image">
                    <img src="{{ asset('/assets/img/5.png')}}">
                    <div class="coursedetails_bg">
                        <h2 class="text-white">COURSE DETAILS</h2>
                        <a href="#" class="c_left">Home</a>
                        <a href="#" class="active">/ Course details</a>
                    </div>
                </div>
            </div>
            <!-- slider part end -->
            <!-- coursedetails section start -->
            <div class="container">
                <div class="border_course_details mt-5"></div>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="font-weight-bold">Course Details</h2>
                    </div>
                </div>
                <div class="row mt-5">
                    <table  class="col-md-4 border border-success">
                        <thead>
                            <tr>
                                <th colspan="2" class="text-center bg-success text-white">Course Deatils</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="p-2"><i class="fas fa-book-reader text-success"></i> Course Name</td>
                                <td>{{$ctitle}}</td>
                            </tr>
                            <tr>
                                <td class="p-2"><i class="fas fa-clock text-success"></i> Starts</td>
                                <td>{{$cstarts}}</td>
                            </tr>
                            <tr>
                                <td class="p-2"><i class="fas fa-pen text-success"></i> Duration</td>
                                <td>{{$duration}}</td>
                            </tr>
                            <tr>
                                <td class="p-2"><i class="fas fa-book-open text-success"></i> Class Duration</td>
                                <td>{{$clssduration}}</td>
                            </tr>
                            <tr>
                                <td class="p-2"><i class="fas fa-user text-success"></i> Seat Available</td>
                                <td>{{$cts}}</td>
                            </tr>
                            <tr>
                                <td class="p-2"><i class="fas fa-gift text-success"></i> Class Size</td>
                                <td>{{$ctsa}}</td>
                            </tr>
                            <tr>
                                <td class="p-2 font-weight-bold">Course Prize</td>
                                <td class="font-weight-bold">{{$cta}}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="p-3 text-center">
                                        @php
                                        $id=$cid;
                                        @endphp
                                    <a href="/enroll/{{$id}}"><button class="btn btn-outline-success">Encroll this course</button></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="col-md-8">
                        <img src="/assets/img/{{$imagename}}" class="custom_site_image" alt="">
                    </div>
                </div>
            </div>
            <!-- coursedetails section end -->
            <!-- masage section start -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <h4 class="font-weight-bold">About this Course</h4>
                        <p class="mt-4 custom_f_p">{{$cditels}}</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <h4 class="font-weight-bold">What you Will learn</h4>
                        <p class="mt-4 custom_f_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, tempora iusto fugiat aperiam reiciendis consectetur beatae dolore rem impedit recusandae doloremque eius amet similique nostrum cum ab saepe? Voluptates illo dolores doloremque quidem corporis, alias, laboriosam recusandae officia dicta, blanditiis voluptate. Nostrum animi natus necessitatibus corrupti fuga, blanditiis facilis cupiditate atque voluptatem, explicabo maxime cumque et quisquam fugiat unde quia praesentium ut repellendus voluptas, odit laudantium nulla molestiae deleniti! Commodi veniam quo, sapiente cumque id! Quo aliquid accusamus sit natus, pariatur ullam debitis dolor architecto eligendi cupiditate at reprehenderit dignissimos nulla rem adipisci ex a eveniet laborum aspernatur possimus quae. Ab necessitatibus enim sed ipsa sunt repellendus cum? Rerum tempore nobis enim quaerat officia explicabo mollitia at placeat inventore veritatis, id eaque recusandae libero, architecto, in, sint ullam hic sit exercitationem assumenda. Eaque, cupiditate maiores sequi dicta odio ea recusandae dolor! Ducimus vero, possimus doloribus nisi repellat nobis nam cum ipsum debitis adipisci quam sapiente rem. Consequatur architecto sed, quo. Quibusdam maxime beatae dolorum facilis consequuntur at sequi omnis explicabo ipsa nulla, dolores odio inventore, ex provident, minus commodi</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mt-2">
                        <p> <i class="far fa-check-square"></i> Duis autem vel eum iriure dolor in hendre . <br><i class="far fa-check-square"></i> Duis autem vel eum iriure dolor in hendre .</p>
                        
                    </div>
                    <div class="col-md-4 mt-2">
                        <p> <i class="far fa-check-square"></i> Duis autem vel eum iriure dolor in hendre . <br><i class="far fa-check-square"></i> Duis autem vel eum iriure dolor in hendre .</p>
                    </div>
                    <div class="col-md-4 mt-2">
                        <p> <i class="far fa-check-square"></i> Duis autem vel eum iriure dolor in hendre . <br><i class="far fa-check-square"></i> Duis autem vel eum iriure dolor in hendre .</p>
                    </div>
                </div>
            </div>
            <!-- masage section end -->
            <!-- instructor section start -->
            <div class="container">
                <h4 class="font-weight-bold mt-5">About Instructor</h4>
                <div class="row mt-5">
                    <div class="col-md-2 mt-2 mb-2">
                        <img src="/assets/img/{{$timagename}}" alt="" style="height:200px;width:200px;">
                    </div>
                    <div class="col-md-5 offset-1 mt-5">
                        <h5 class="font-weight-bold">{{$courseby}}</h5>
                        <p class="custom_f_p">{{$tpost}}</p>
                        <ul class="list-unstyled d-flex">
                            <li class="custom_li"><a href="#"><i class="fab fa-facebook-f active"></i></a></li>
                            <li class="ml-2 custom_li"><a href="#"><i class="fab fa-twitter "></i></a></li>
                            <li class="ml-2 custom_li"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li class="ml-2 custom_li"><a href="#"><i class="fas fa-camera"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="custom_f_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, tempore, mollitia! Quibusdam ex, delectus cumque ratione. Dolorem molestias blanditiis incidunt autem hic minima explicabo nam rerum ut ducimus quos placeat esse corrupti itaque, consequuntur. Asperiores consequuntur in commodi et qui, ex, voluptatum molestiae sapiente rem aut voluptatibus minima inventore autem maxime, fuga dolores debitis unde! Laborum voluptate quas, consequatur amet qui eaque aliquam ad suscipit quidem ut nemo quod maxime aut, ex, minus molestias ipsum voluptates distinctio cumque iure. Assumenda ipsam nisi amet quae enim, cumque ducimus quas iusto cum suscipit culpa iste harum sunt provident repudiandae optio quidem veniam.</p>
                    </div>
                </div>
            </div>
            @php
                    $count=1
                @endphp
            <!-- instructor section end -->
            <!-- comment section start -->
            <div class="container">
            <div class="row">
                <div class="col-md-8 mt-5" >
                    <h5 class="font-weight-bold text-center">You're Comment Is Here</h5>
                </div>
            </div>
              
                       
                    
                <div class="row">
                @foreach($commentdata as $fatch)
                    <div class="col-md-12 mt-5">
                        <div class=" mb-3" style="max-width: 700px;">
                            <div class="row no-gutters">
                                <div class="col-md-2">
                                    <img src="{{ asset('/assets/img/16.jpg')}}" class="" alt="" style="height:150px;width:150px; border-radius:40%;">
                                </div>
                                <div class="col-md-9 offset-1">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold">{{$fatch->name}}</h5>
                                        <p class="card-text custom_f_p">{{$fatch->comment}}</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="custom_f_p">{{$fatch->createDate}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="#Commentsection" class="custom_f_p float-right"><i class="fas fa-reply active"></i> Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @php
                    $count++
                @endphp
                @endforeach
                <div class="row">
                <div class="col-md-8 mt-5 mb-5" >
                    <h5 class="font-weight-bold text-center">Comment({{$count}})</h5>
                </div>
            </div>
            </div>
           
            
            <!-- comment section end -->
            <!-- input comment section start -->
            <div class="container">
                <div class="row" id="Commentsection">
                    <div class="col-md-8 mt-5">
                        <h5 class="font-weight-bold text-center">Leav a reply</h5>
                    </div>
                </div>
            </div>
                <div class="container" >
                    <form action="/deatilscomment" method="get">
                        <div class="row mt-5 custom_form">
                            <div class="col-md-4 mt-2" >
                                <input type="text" name="name" class="form-control" placeholder="  Name Here">
                            </div>
                            <div class="col-md-4 mt-2" >
                                <input type="text" name="email" class="form-control" placeholder="   Email Here">
                            </div>
                            <div class="col-md-8 mt-2">
                               <textarea name="comment" id="" cols="30" rows="5" class="form-control" placeholder="Type Your Massege here"></textarea>
                            </div>
                        </div>  
                        <div class="col-md-8 offset-3 mt-2 mb-5">
                            <button type="submit" class="btn btn-outline-success">Post Comment</button>
                        </div>
                    </form>
                </div>
                
                    <!-- input comment section end -->
           
@stop