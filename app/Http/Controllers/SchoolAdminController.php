<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\School_admin;
use App\Models\Student;
use App\Models\A_class;
use App\Models\Entrance_exam_form;
use App\Models\Exam_schedule;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolAdminController extends Controller
{
    public function login(){
        return view('schooladmin/auth/login');
    }
    public function schooladminLogin(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required',
        ]);
        
        $schoolAdminInfo = School_admin::where('user_id','=',$request->username)->where('status', '1')->first();
        if (!$schoolAdminInfo) {
            return redirect()->route('schooladmin/login')->with(session()->flash('alert-warning', 'Failed! We do not recognize your username.'));
        } else if ($schoolAdminInfo->status == '0') {
            return redirect()->route('schooladmin/login')->with(session()->flash('alert-danger', 'Your account is blocked.'));
        } else if ($request->password === $schoolAdminInfo->password) {
            $request->session()->put('LoggedSchoolAdmin', $schoolAdminInfo->id);
            return redirect('schooladmin/home');
        } else {
            return redirect()->route('schooladmin/login')->with(session()->flash('alert-danger', 'Failed! Incorrect Password.'));
        }
    }
    public function schoolAdminLogout(){
        if (session()->has('LoggedSchoolAdmin')) {
            session()->pull('LoggedSchoolAdmin');
            return redirect('schooladmin/login')->with(session()->flash('alert-success', 'You are successfully Logged out'));
        }
    }
    public function schoolAdminHome(){
        $data = ['LoggedSchoolAdminInfo'=>School_admin::where('id','=', session('LoggedSchoolAdmin'))->first()];
        $classCount = A_class::count();
        $schoolCount = School::count();
        $studentCount = Student::count();
        $formsPending = Entrance_exam_form::count();
        return view('schooladmin/home', $data, compact('classCount', 'schoolCount', 'studentCount', 'formsPending'));
    }
    public function studentList(){
        $data = ['LoggedSchoolAdminInfo'=>School_admin::where('id','=', session('LoggedSchoolAdmin'))->first()];
        $studentlist = Student::paginate(10);
        return view('schooladmin/studentlist', $data, compact('studentlist'));
    }
    public function addClass(){
        $data = ['LoggedSchoolAdminInfo'=>School_admin::where('id','=', session('LoggedSchoolAdmin'))->first()];
        $schools  = School::get(); 
        return view('schooladmin/addclass', $data, compact('schools'));
    }
    public function classList(){
        $data = ['LoggedSchoolAdminInfo'=>School_admin::where('id','=', session('LoggedSchoolAdmin'))->first()];
        $classlist = A_class::paginate(10);
        // // $relatedProject = A_class::where('project_cat', $project_req_details->category)->where('is_asigned',1)
        // //                             ->join('companies', 'companies.company_id', '=', 'projects.company_id')
        // //                             ->select(['companies.*', 'project_categories.*', 'projects.*'])
        // //                             ->paginate(20);
        // $classlist = A_class::join('a_classes', 'a_classes.school_id', '=', 'schools.id')
        //                     ->select(['a_classes.*', 'schools.*'])
        //                     ->paginate(5);
        return view('schooladmin/classlist', $data, compact('classlist'));
    }
    public function uploadClass(Request $request){
        $request->validate([
            'classname' => 'required',
            'classamount' => 'required',
            'schoolid' => 'required',
        ]);
        $classdetails = new A_class;
        $classdetails->class_name = $request->classname;
        $classdetails->amount = $request->classamount;
        $classdetails->school_id = $request->schoolid;
        $classdetails-> save();
        if($classdetails){
            return redirect()->back()->with(session()->flash('alert-success', 'Class Added Successfully!'));
        } else {
            return redirect()->back()->with(session()->flash('alert-danger', 'Something went wrong. Please try again.')); 
        } 

    }

    public function schoolAdminFormPending(Request $request){
        $data = ['LoggedSchoolAdminInfo'=>School_admin::where('id','=', session('LoggedSchoolAdmin'))->first()];
        $studentformlists = Entrance_exam_form::where('status', '1')->paginate(20);
        return view('schooladmin/form-pending', $data, compact('studentformlists'));
    }
    public function getAadharCard(Request $request){
        $passreq = $request->post('studentid');
        $data = Entrance_exam_form::where('form_id',$passreq)->pluck('aadhar_card')->first();
        return $data;        
    }
    public function getFatherAadharCard(Request $request){
        $passreq = $request->post('studentid');
        $data = Entrance_exam_form::where('form_id',$passreq)->pluck('father_aadhar_card')->first();
        return $data;        
    }
    public function getMarkSheet(Request $request){
        $passreq = $request->post('studentid');
        $data = Entrance_exam_form::where('form_id',$passreq)->pluck('last_year_exam_marksheet')->first();
        return $data;        
    }

    public function entranceApprove(Request $request){
        $request->validate([
            'form_id' => 'required',
        ]);

        $entranceapprove = Entrance_exam_form::where('form_id', $request->form_id)->update(['status' => 2]);
        if ($entranceapprove) {
            return redirect()->back()->with(session()->flash('alert-success', 'Form successfully accepted.'));
        }
        return redirect()->back()->with(session()->flash('alert-danger', 'Something went wrong. Please! try again later.'));
    }

    public function entranceRejected(Request $request){
        $request->validate([
            'form_id' => 'required',
        ]);

        $entrancereject = Entrance_exam_form::where('form_id', $request->form_id)->update(['status' => 3]);
        if ($entrancereject) {
            return redirect()->back()->with(session()->flash('alert-info', 'Form successfully rejected.'));
        }
        return redirect()->back()->with(session()->flash('alert-danger', 'Something went wrong. Please! try again later.'));
    }

    public function setSchedule(){
        $data = ['LoggedSchoolAdminInfo'=>School_admin::where('id','=', session('LoggedSchoolAdmin'))->first()];
        $classlist = A_class::get();
        return view('schooladmin/setschedule', $data, compact('classlist'));
    }

    public function scheduleList(){
        $data = ['LoggedSchoolAdminInfo'=>School_admin::where('id','=', session('LoggedSchoolAdmin'))->first()];
        $schedulelist = Exam_schedule::paginate(5);
        return view('schooladmin/schedulelist', $data, compact('schedulelist'));
    }

    public function Exam_schedules(Request $request){
        $request->validate([
            'class' => 'required',
            'examdate' => 'required',
            'examtimefrom' => 'required',
            'examtimeto' => 'required',
            'examcenter' => 'required',
        ]);

        $examschedule = Exam_schedule::create([
            "exam_name" => "Entrance Exam",
            "class" => "$request->class",
            "exam_date" => "$request->examdate",
            "exam_time_from" => "$request->examtimefrom",
            "exam_time_to" => "$request->examtimeto",
            "exam_center" => "$request->examcenter",
        ]);
        if ($examschedule) {
            return redirect()->back()->with(session()->flash('alert-info', 'Entrance exam schedule successfully created.'));
        }
        return redirect()->back()->with(session()->flash('alert-danger', 'Something went wrong. Please! try again later.'));
    }
    public function addSchool(){
        $data = ['LoggedSchoolAdminInfo'=>School_admin::where('id','=', session('LoggedSchoolAdmin'))->first()];
        return view('schooladmin/addschool', $data);
    }
    public function uploadSchool(Request $request){
        $request->validate([
            'schoolname' => 'required',
        ]);
        $schooldetails = new School;
        $schooldetails->school_name = $request->schoolname;
        $schooldetails-> save();
        if($schooldetails){
            return redirect()->back()->with(session()->flash('alert-success', 'Class Added Successfully!'));
        } else {
            return redirect()->back()->with(session()->flash('alert-danger', 'Something went wrong. Please try again.')); 
        } 
    }
    public function schoolList(){
        $data = ['LoggedSchoolAdminInfo'=>School_admin::where('id','=', session('LoggedSchoolAdmin'))->first()];
        $schoollist = School::paginate(5);
        return view('schooladmin/schoollist', $data, compact('schoollist'));
    }
    public static function getClassName($cid){
        $className = A_class::where('id', $cid)->first();
        $class_name = $className->class_name;
        return $class_name;
    }
   
}