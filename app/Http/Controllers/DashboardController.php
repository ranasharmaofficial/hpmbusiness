<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\District;
use App\Models\CropInsuranceProcess;
use Illuminate\Http\Request;

class DashboardController extends Controller
{       
    public function login(){
        return view('dashboard.auth.login');
    }

    public function loginDash(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $dashInfo = User::where('user_id', '=', $request->username)->where('status', '1')->first();
		// dd($dashInfo);die;
        if (!$dashInfo) {
            return redirect()->route('dashboard.auth.login')->with(session()->flash('alert-danger', 'Failed! We do not recognize your username.'));
        } else if ($request->password === $dashInfo->password) {
			//Doctor role here
			if($dashInfo->role==3)
			{
				$request->session()->put('LoggedDash', $dashInfo->id);
                $doctorinfo = \App\Models\User::where('id',$dashInfo->id)->first();
                // dd($doctorinfo);
                // die;
                $logged_name = $request->session()->put('logged_name',$doctorinfo->name);
                $logged_mobile = $request->session()->put('logged_mobile',$doctorinfo->mobile);
                $logged_user_id = $request->session()->put('logged_user_id',$doctorinfo->user_id);
				return redirect('dashboard/home?doctor');
			}
			//Agent role here
			else if($dashInfo->role==2){
				$request->session()->put('LoggedDash', $dashInfo->id);
				return redirect('dashboard/home?agent');
			}
            //Farmer role here
			else if($dashInfo->role==5){
				$request->session()->put('LoggedDash', $dashInfo->id);
				return redirect('dashboard/home?farmer');
			}
            
			
        } else {
            return redirect()->route('dashboard.auth.login')->with(session()->flash('alert-danger', 'Failed! Incorrect Password.'));
        }
    }

    public function dashLogout()
    {
        if (session()->has('LoggedDash')) {
            session()->pull('LoggedDash');
            session()->pull('logged_name');
            return redirect('dashboard/home');
        }
    } 
    
    public function forgetPassword(){
        return view('dashboard.auth.forget-password');
    }    
	public function selectRegister(){
		 return view('dashboard.select_register');
	}
	public function farmerReg(){
		return view('dashboard.auth.farmer_register');
	}
    public function doctorRegistration(){
        $districtlist = District::get();
		return view('dashboard.auth.doctor_register', compact('districtlist'));
	}
    
	public function index()
    {
        return view('dashboard.home');
    }
    public function cropCare(){
        return view('dashboard.cropcare');
    }
    public function animalHealthCare(){
        return view('dashboard.animalhealthcare');
    }
    public function insurance(){
        return view('dashboard.insurance');
    }
    public function profile(){
        $data = ['LoggedUserInfo' => User::where('id', '=', session('LoggedDash'))->first()];
        $user = User::where('id', '=', session('LoggedDash'))->first();
        return view('dashboard.profile', $data, compact( 'user'));
    }
    
    public function uploadDocRegData(Request $request){
        $request->validate([
            'name' => 'required',
            'mobile' => 'required|min:10|numeric',
            'address' => 'required',
            'state' => 'required|numeric',
            'district' => 'required|numeric',
            'block' => 'required|numeric',
            'panchayat' => 'required',
            'pin_code' => 'required|min:6|max:6',
            'experience' => 'required',
        ]);
		$checkUserExist = User::where('mobile',$request->mobile)->get();
        $c = count($checkUserExist);
        // dd($c);die;
        if($c<1){
            $doctorupload = User::create([
                "user_id" => "$request->mobile",
                "mobile" => "$request->mobile",
                "name" => "$request->name",
                "state" => "$request->state",
                "district" => "$request->district",
                "block" => "$request->block",
                "panchayat" => "$request->panchayat",
                "pincode" => "$request->pin_code",
                "experience" => "$request->experience",
                "password" => "$request->mobile",
                "role" => 3,
                "address" => "$request->address",
            
            ]);
            if($doctorupload)
            {
                //Send Message
                $msg = 'Dear Student, Your registration details are: Username : '.$request->mobile.' Password : '.$request->mobile.' Visit : https://bit.ly/3uA3gaJ Regards - HASANAH EDUCATIONAL TRUST';
                $phones = $request->mobile;
                $url = "http://45.249.108.134/api.php";
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, "username=hasanahtrust&password=752761&sender=HETRST&sendto=".$phones."&message=".$msg."&PEID=1301164733895014972&templateid=1307164922596635229&type=3");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                $response = curl_exec($ch);
                    // session()->forget(['mobileotp', 'mobilenumber']);
                return redirect('dashboard/auth/login')->with(session()->flash('alert-success', 'Registration Success.'));
            }
            else{
                return redirect()->back()->with(session()->flash('alert-danger', 'Plz Try Again!.'));
            }
        }
        else{
			return redirect()->back()->with(session()->flash('alert-danger', 'Already Registered! Try with other No.'));
        }
    }
    public function uploadFarmerRegData(Request $request){
        $request->validate([
            'name' => 'required',
            'mobile' => 'required|min:10|numeric',
            
        ]);
		$checkUserExist = User::where('mobile',$request->mobile)->get();
        $c = count($checkUserExist);
        // dd($c);die;
        if($c<1){
            $farmerupload = User::create([
                "user_id" => "$request->mobile",
                "mobile" => "$request->mobile",
                "name" => "$request->name",
                "password" => "$request->mobile",
                "role" => 5,
            ]);
            if($farmerupload)
            {
                //Send Message
                $msg = 'Dear Student, Your registration details are: Username : '.$request->mobile.' Password : '.$request->mobile.' Visit : https://bit.ly/3uA3gaJ Regards - HASANAH EDUCATIONAL TRUST';
                $phones = $request->mobile;
                $url = "http://45.249.108.134/api.php";
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, "username=hasanahtrust&password=752761&sender=HETRST&sendto=".$phones."&message=".$msg."&PEID=1301164733895014972&templateid=1307164922596635229&type=3");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                $response = curl_exec($ch);
                    // session()->forget(['mobileotp', 'mobilenumber']);
                return redirect('dashboard/auth/login')->with(session()->flash('alert-success', 'Registration Success.'));
            }
            else{
                return redirect()->back()->with(session()->flash('alert-danger', 'Plz Try Again!.'));
            }
        }
        else{
			return redirect()->back()->with(session()->flash('alert-danger', 'Already Registered! Try with other No.'));
        }
    }
    public function getPinCodeDetails(Request $request){
                $pincode=$_POST['pincode'];
        $data=file_get_contents('http://postalpincode.in/api/pincode/'.$pincode);
        $data=json_decode($data);
        if(isset($data->PostOffice['0'])){
            $arr['city']=$data->PostOffice['0']->Taluk;
            $arr['state']=$data->PostOffice['0']->State;
            echo json_encode($arr);
        }else{
            echo 'no';
        }
    }
    public function cropInsurance(){
        $data = ['LoggedUserInfo' => User::where('id', '=', session('LoggedDash'))->first()];
        $user = User::where('id', '=', session('LoggedDash'))->first();
        return view('dashboard.crop_insurance', $data, compact( 'user'));
    }
    public function uploadCropInsuranceData(Request $request){
        $request->validate([
            'employee_id' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'pincode' => 'required',
            'address' => 'required',
            'district' => 'required',
            'state' => 'required',
            'crops_insurred' => 'required',
            'aadhar_card' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'plan_details' => 'required',
            'nominee_name' => 'required',
            'nominee_father' => 'required',
            'nominee_relation' => 'required',

        ]);

        if ($request->hasfile('aadhar_card')) {
            $file = $request->file('aadhar_card');
            $extenstion = $file->getClientOriginalExtension();
            $aadhar_card = 'aadhar_card-'.time().'.'.$extenstion;
            $file->move(public_path('uploads/insurance-documents'), $aadhar_card);
        }
        // dd($aadhar_card);die;
        $agentid = User::where('user_id',$request->employee_id)->get();
      
    if(count($agentid)>=1){
        $tokenno = time().rand(1111,9999);
        $first_date = date("d-M-Y");
        $after_one_year =  date( "d-M-Y", strtotime( "$first_date +365 day" ) ); // PHP:  2009-03-04
        $cropinsuranceprocess = CropInsuranceProcess::create([
            "token_no" => "$tokenno",
            "employee_id" => "$request->employee_id",
            "salutation" => "$request->salutation",
            "name" => "$request->name",
            "gender" => "$request->gender",
            "dob" => "$request->dob",
            "mobile" => "$request->mobile",
            "state" => "$request->state",
            "district" => "$request->district",
            "pincode" => "$request->pincode",
            "address" => "$request->address",
            "aadhar_card_pic" => "$aadhar_card",
            "major_crops_insurred" => "$request->crops_insurred",
            "plan_details" => "$request->plan_details",
            "nominee_salutation" => "$request->nominee_salutation",
            "nominee_name" => "$request->nominee_name",
            "nominee_father" => "$request->nominee_father",
            "nominee_dob" => "$request->nominee_dob",
            "nominee_relation" => "$request->nominee_relation",
            "insurance_start_date" => "$first_date",
            "insurance_end_date" => "$after_one_year",
            "status" => 1,
        ]);
        if ($cropinsuranceprocess) {
            return redirect('dashboard/crop-insurance-preview'.'/'.$tokenno);
        }
        return redirect()->back()->with(session()->flash('alert-danger', 'Something went wrong. Please! try again later.'));
    }
    else{
        return redirect()->back()->with(session()->flash('alert-danger', 'Employee Code does not matched.'));
    }
       
    }

    //Crop insurance Form Preview Start
    public function cropInsuranceDetailsPreview($tokenno){
        $data = ['LoggedUserInfo' => User::where('id', '=', session('LoggedDash'))->first()];
        $user = User::where('id', '=', session('LoggedDash'))->first();
        $getdetails = CropInsuranceProcess::where('token_no',$tokenno)
                                            ->join('users', 'users.user_id', '=', 'crop_insurance_processes.employee_id')
                                            ->select('crop_insurance_processes.*', 'users.name as AgentName')->first();
        return view('dashboard/crop-insurance-details-preview', $data, compact('getdetails','user'));
    }
    
    //Crop insurance Form Preview End
}