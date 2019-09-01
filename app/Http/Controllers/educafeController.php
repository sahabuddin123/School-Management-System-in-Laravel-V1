<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DB;
class educafeController extends Controller
{   //header 
    // public function header(){
    //     $count=DB::select("SELECT COUNT(*) AS total FROM `admission`");
    //     $count=(array)$count[0];
    //     return ("layouts_educafe.header".$count);

    // }
    //homepage
    public function showeducafe(){
    $fatch=DB::select('SELECT * FROM course');
        return view("pages_educafe.home",["couress"=>$fatch]);
    }
    //about page
    public function showeducafeabout(){
        $fatch=DB::select('SELECT * FROM addteacher');
            return view("pages_educafe.about",["teachers"=>$fatch]);
    }
    //course page
    public function showeducafecourse(){
    $fatch=DB::select('SELECT * FROM course');
        return view("pages_educafe.courses",["couress"=>$fatch]);
    }
    //course details and comment show
    public function show(Request $r){
        $id= $r->segment(2);
        $fetchData=DB::select("SELECT `course`.`cid`,`course`.`ctitle`,`course`.`cstarts`,`course`.`cstarts`,`course`.`duration`
        ,`course`.`clssduration`,`course`.`courseby`,`course`.`cditels`,`course`.`cts`,`course`.`ctsa`,`course`.`cta`,`course`.`imagename`,
        `addteacher`.`timagename`,`addteacher`.`tpost` FROM `course` INNER JOIN `addteacher` ON `addteacher`.`id`=`course`.`cid` WHERE cid=$id");
        $fetchData=(array)$fetchData[0];
        $showresult=DB::select('SELECT * FROM comment_table');
            return view("pages_educafe.coures_details",$fetchData,["commentdata"=>$showresult]);
        //$wordlist =DB::table('comment_table')->select("SELECT `id`")->get();
        //$wordCount = $wordlist->count();
        // return view("pages_educafe.coures_details",["commentdata"=>$showresult]);
            // return view("edit",$fetchData); 
    }
    //comment
    public function comment(){
        extract($_REQUEST);
        $result=DB::table('comment_table')->insert(["name" => "$name", "email" =>"$email", "comment"=>"$comment"]);
        if($result){
            echo "<script>alert(Your comment sent successfully');</script>";
        }
        else{
            echo "<script>alert('Your comment sent unsuccessfully');</script>";
        }
        return back()->with('success','Your comment sent successfully.');
    }
    //teachres
    public function showeducafeteachers(){
        $fatch=DB::select('SELECT * FROM addteacher');
            return view("pages_educafe.teacher",["teachers"=>$fatch]);
    }
    //contact
    public function showeducafecontact(){
            return view("pages_educafe.contact");
    }
    //contact massege
    public function inserteducafecontact(){
        extract($_REQUEST);
        $result=DB::table('contact')->insert(["name" => "$name", "email" =>"$email","subject" =>"$subject", "mass"=>"$mass"]);
        if($result){
            echo "<script>alert('Your Contact sent Success');</script>";
        }
        else{
            echo "<script>alert('Your Contact sent Fail');</script>";
        }
        return view("pages_educafe.contact");
    }
    //subcribes
    public function subcribes(){
        extract($_REQUEST);
        $result=DB::table('subscibe')->insert(["email" => "$email"]);
        if($result){
            echo "<script>alert(Your successfully Subscribed');</script>";
            return back();
        }
        else{
            echo "<script>alert('Your Subscrib Unsuccessfull ');</script>";
            return back();
        }
    }
    //enroll course
    public function enroll(Request $r){
        $id= $r->segment(2);
        $fatch=DB::select("SELECT * FROM course WHERE cid=$id ");
        $fatch=(array)$fatch[0];
        return view("pages_educafe.admission_from",$fatch);
    }
    //User Ragistation
    public function ragistationf(){
        return view("pages_educafe.registation");
    }
    public function ragistationsu(){
        extract($_REQUEST);
        $insert=DB::table('student')->insert(["name"=>"$name","dob"=>"$dob","email"=>"$email","mobile"=>"$mobile","password"=>"$password"]);
        if($insert){
            echo "<script>alert('Ragistation Success');</script>";
            return view("pages_educafe.login");
        }
        else{
            echo "<script>alert('Ragistation Fail');</script>";
            return view("pages_educafe.registation");
        }
        
    }
    //User Login
    public function userlogin(){
        return view("pages_educafe.login");
    }
    public function logInconn(){
        extract($_REQUEST);
        $fetchData=DB::select("SELECT * FROM `student` WHERE `email`='$email' AND `password`='$password'");
        $fetchData=(array)$fetchData[0];
        if(!$fetchData){
            echo "<script>alert('User and Password Incorrect');</script>";
            return view("pages_educafe.login");
            
        }
        else{
            return view("pages_educafe.userfrom",$fetchData);
        }
    }
    //Admission
    public function Admission(){
        extract($_REQUEST);
        $insert=DB::table('admission')->insert(["cid"=>"$cid","sid"=>"$sid","smobile1"=>"$smobile1","smobile2"=>"$smobile2","fname"=>"$fname","foccuption"=>"$foccuption",
        "fmobile"=>"$fmobile","mname"=>"$mname","moccuption"=>"$moccuption","mmobile"=>"$mmobile","incomef"=>"$incomef",
        "gender"=>"$gender","pradd"=>"$pradd","prstate"=>"$prstate","prpin"=>"$prpin","prmobile"=>"$prmobile","peadd"=>"$peadd",
        "pestate"=>"$pestate","pepin"=>"$pepin","pemobile"=>"$pemobile","ufrom"=>"$ufrom","natn"=>"$natn","relg"=>"$relg",
        "brnc"=>"$brnc","nob1"=>"$nob1","nob2"=>"$nob2","yop1"=>"$yop1","yop2"=>"$yop2","tm1"=>"$tm1","tm2"=>"$tm2",
        "mo1"=>"$mo1","mo2"=>"$mo2","divs1"=>"$divs1","divs2"=>"$divs2","pom1"=>"$pom1","pom2"=>"$pom2","moi"=>"$moi","pay"=>"$pay"]);
        if($insert){
            echo "<script>alert('Data Add Successfully');</script>";
            return view("pages_educafe.searchfrom"); 
        }else{
            echo "<script>alert('admission data Fail');</script>";
            return view("pages_educafe.admission_from"); 
        }
        
    }
    //searchview
    public function searchview(){
            return view("pages_educafe.searchfrom");
        }
    //admission report
    public function admissionreports(){
        extract($_REQUEST);
        // echo $sid;
      $fetchData = DB::select("SELECT `student`.`sid`,`student`.`name`,`student`.`email`,`student`.`mobile`,`student`.`dob`,
      `admission`.`aid`,`admission`.`brnc`,`admission`.`divs1`,`admission`.`divs2`,`admission`.`fmobile`,
      `admission`.`fname`,`admission`.`foccuption`,`admission`.`gender`,`admission`.`incomef`,
      `admission`.`mmobile`,`admission`.`mname`,`admission`.`mo1`,`admission`.`mo2`,`admission`.`moccuption`,
      `admission`.`moi`,`admission`.`natn`,`admission`.`nob1`,`admission`.`nob2`,`admission`.`pay`,
      `admission`.`peadd`,`admission`.`pradd`,`admission`.`prpin`,`admission`.`prmobile`,`admission`.`pestate`,`admission`.`pom1`,
      `admission`.`pom2`,`admission`.`pemobile`,`admission`.`pepin`,`admission`.`prstate`,`admission`.`relg`,
      `admission`.`smobile1`,`admission`.`smobile2`,`admission`.`tm1`,`admission`.`tm2`,`admission`.`ufrom`,
      `admission`.`yop1`,`admission`.`yop2` FROM `student` INNER JOIN `admission` ON `admission`.`aid`=`student`.`sid`
       WHERE `student`.`sid`='$sid'");
            
    if($fetchData){
        $fetchData=(array)$fetchData[0]; 
         return view("pages_educafe.admission_report",$fetchData); 
     }else{
         echo "<script>alert('admission data Fail');</script>";
         return view("pages_educafe.searchfrom"); 
     }
    }
       // $fetchData = DB::table('student')
            // ->join('course', 'student.sid', '=', 'course.cid')
            // ->join('admission', 'student.sid', '=', 'admission.aid')
            // ->select('student.sid','student.name','student.email','student.mobile','student.dob','course.cid','course.ctitle',
            // 'course.clssduration','course.courseby','course.cstarts','course.cta','course.cts','course.ctsa','course.duration',
            // 'admission.aid','admission.brnc','admission.divs1','admission.divs2','admission.fmobile','admission.fname',
            // 'admission.foccuption','admission.gender','admission.incomef','admission.mmobile','admission.mname','admission.mo1',
            // 'admission.mo2','admission.moccuption','admission.moi','admission.natn','admission.nob1','admission.nob2',
            // 'admission.pay','admission.peadd','admission.pradd','admission.pemobile','admission.prmobile','admission.pestate',
            // 'admission.pepin','admission.prpin','admission.prstate','admission.relg','admission.smobile1','admission.smobile2',
            // 'admission.tm1','admission.pom1','admission.pom2','admission.tm2','admission.ufrom','admission.yop1','admission.yop2')
            // ->get();
}
