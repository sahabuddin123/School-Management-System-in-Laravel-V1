@extends('layouts_educafe.master')
@section('title', ' Admission Report | Educafe ')
@section('content')
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <center><table class="table table-bordered">
            
            <tr>
              <td><img src="{{ asset('/assets/img/logo.png')}}" width="100%" height="200px;" alt="!"> </td>
              <td><center><font>
                <br><br>
                EDUCAFE UNIVERSITY OF TECHNOLOGY AND MANAGEMENT, DHAKA - 1207, SAMOLY</font></center>
                <center><font>
                Phone : (0674)2492496, Fax : (0674)2490480
                </font></center>
                
                <br>
                <br>
                <center><font>
                ADMISSIONS (2019-20)</font></center>
              </td>
              <td colspan="2" width="3%" >
              <center><img src="{{ asset('/assets/img/16.jpg')}}" width="70%" height="200px;" alt="!"></center>
                </td>
              </tr>
              
              <tr>
                <td style="width:4%;"> <font>Name  </font> </td>
                <td style="width:8%;" colspan="3">{{$name}}</td>
              </tr>
              
              
              <tr>
                <td> <font>ID</font></td>
                <td colspan="3">{{$aid}}</td>
              </tr>
              
              
              <tr>
                <td> <font>Date of Birth  </font> </td>
                <td colspan="3">{{$dob}}</td>
              </tr>
              
              <tr>
                <td> <font>Email  </font> </td>
                <td colspan="3">{{$email}}</td>
              </tr>
      
              <tr>
                <td > <font> Mobile No.</font>  </td>
                <td colspan="3">{{$mobile}}</td>
              </tr>
              
              <tr>
                <td><font> Father's Name</font></td>
                <td  colspan="3">{{$fname}}</td>
              </tr>
              
              <tr>
                <td> <font>Father's Occupation</font></td>
                <td> {{$foccuption}}</td>
                <td><font> Mobile No.</font></td>
                <td> {{$fmobile}}</td>
              </tr>
              
              <tr>
                <td> <font>Mother's Name</font> </td>
                <td colspan="3">{{$mname}}</td>
              </tr>
              
              <tr>
                <td> <font>Mother's Occupation</font></td>
                <td> {{$moccuption}}</td>
                <td> <font>Mobile No.</font></td>
                <td> {{$mmobile}}</td>
              </tr>
              
              <tr>
                <td><font> Income of Parents monthly</font>
                  <td  colspan="3">{{$incomef}}</td>
                </tr>
                
                <tr>
                  <td> <font style="font-family: Verdana;">Sex </font>
                    <td colspan="3">{{$gender}}</td>
                    
                  </tr>
                  
                  <tr>
                    <td><font style="font-family: Verdana;"> Correspondent Address</font>
                      <td colspan="3">{{$pradd}}<br>
                      Village/State:{{$prstate}} <br>
                      Pin:{{$prpin}}<br>
                      Mobile:{{$prmobile}}<br>
                      </td>
                      
                      <tr>
                        <td> <font>Permanent Address</font>
                          <td colspan="3">{{$peadd}}<br>
                      Village/State:{{$pestate}} <br>
                      Pin:{{$pepin}}<br>
                      Mobile:{{$pemobile}}<br>
                          </td>
                        </tr>
                        
                        <tr>
                          <td> <font>From</font>
                            <td colspan="3">{{$ufrom}}</td>
                            
                          </tr>
                          
                          <tr>
                            <td><font> Nationality</font>
                              <td>{{$natn}}</td>
                              <td><font> Religion</font>
                                <td>{{$relg}}</td>
                              </tr>
                              
                                  <td><font>Alloted Branch</font></td>
                                  <td colspan="3"> {{$brnc}}</td>
                                </tr>
                               
                                <tr>
                                  <td><font>Academic Qualification</font></td>
                                  <td colspan="3">
                                    <table class="table table-hover">
                                      <thead>
                                        <tr>
                                          <th><font>Name of</font> <br><font>Board/University</font></th>
                                          <th><font>Year of</font> <br><font> Passing</font></th>
                                          <th><font>Total</font><br><font> Mark</font></th>
                                          <th><font>Mark</font> <br><font>Obtained</font></th>
                                          <th><font>Division</font></th>
                                          <th><font>% of</font><br><font> Marks</font></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>{{$nob1}}</td>
                                          <td>{{$yop1}}</td>
                                          <td>{{$tm1}}</td>
                                          <td>{{$mo1}}</td>
                                          <td>{{$divs1}}</td>
                                          <td>{{$pom1}}</td>
                                        </tr>
                                        <tr>
                                          <td>{{$nob2}}</td>
                                          <td>{{$yop2}}</td>
                                          <td>{{$tm2}}</td>
                                          <td>{{$mo2}}</td>
                                          <td>{{$divs2}}</td>
                                          <td>{{$pom2}}</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <tr>
                                      <td><font>Medium of Instruction till class 10th</font></td>
                                      
                                      <td colspan="2">{{$moi}}</td>
                                      
                                      <td colspan="2">
                                        
                                       
                                        </td>
                                      </tr>
                                      
                                      
                                      <tr>
                                        <td><font>Mode of Payment</font></td>
                                        
                                        <td colspan="2">{{$pay}}</td>
                                        
                                        <td colspan="2">
                                          <center><font>Signature</font></center>
                                        </td>
                                      </tr>
                                      
                                    </table></center>
                                  </div>
                                </div>
                              </div>
                              <center><a href="/searchadmission">Back</a></center>
                              
@stop