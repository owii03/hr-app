<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use Auth;
use Illuminate\Support\Facades\Validator;
use Lang;
use Hash;
use App\Cv;
use App\Work;
use App\Education;
use App\VResult;

class CvController extends Controller
{
    //
	function fillcv()
	{
		return view('cv.fillcv', ['selected'=>'Fill CV']);
	}
	function viewuserresult(){
		$data = VResult::all();
		$selected = 'Fill CV';
    	return view('cv.viewresult', [ 'selected'=>$selected, 'data'=>$data,
		]);
    }
	function viewcv()
	{
		$data = Cv::orderByRaw("created_at desc")->where("id_member", "=", Auth::user()->id)->first();
		$work = Work::orderByRaw("created_at desc")->where("id_cv", "=", $data->id)->first();
		
		$education = Education::orderByRaw("created_at desc")->where("id_cv", "=", $data->id)->first();
		return view('cv.viewcv', ['selected'=>'View CV', 'data'=>$data, 'work'=>$work, 'education'=>$education]);
	}	
	
	function dofillcv(Request $request)
	{
		$name = $request->input("full_name");
		$idNumb = $request->input("identity_number");
		$gender = $request->input("gender");
		$blood = $request->input("blood_type");
		$bornplace = $request->input("birth_place");
		$dob = $request->input("birth_date");
		$marriage = $request->input("marriage_status");
		$religi = $request->input("religion");
		$nasional = $request->input("nationality");
		$addr = $request->input("address");
		$city = $request->input("city");
		$pos = $request->input("postal_code");
		$phone = $request->input("mobile_number");
		$formalfoto = $request->file('photo');
		$formalfoto2 = "";
		if($formalfoto){
			$extension = \File::extension($formalfoto->getClientOriginalName());
			$formalfoto2 = date('Ymdhis').'.'.$extension;
			$formalfoto->move('document', $formalfoto2);
		}
				
		$inggris = $request->input("toefl_type");
		$score = $request->input("score");
		$certi = $request->file("certificate");
		$certi2 = "";
		if($certi){
			$extension = \File::extension($certi->getClientOriginalName());
			$certi2 = date('Ymdhis').'.'.$extension;
			$certi->move('document', $certi2);
		}
		$tfname = $request->input("toefl_institution");		
		
		$prio = $request->input("first_position");
		$prio2 = $request->input("second_position");
		$salary = $request->input("expected_salary");
		$prt = $request->file("prt");
		$prt2 = "";
		
		if($prt){
			$extension = \File::extension($prt->getClientOriginalName());
			$prt2 = date('Ymdhis').'.'.$extension;
			$prt->move('document', $prt2);
		}
		
		$cv = new Cv;
		$cv->id_member = Auth::user()->id;
		$cv->full_name = $name;
		$cv->identity_number = $idNumb;
		$cv->gender = $gender;
		$cv->blood_type = $blood;
		$cv->birth_place = $bornplace;
		$cv->birth_date = $dob;
		$cv->marriage_status = $marriage;
		$cv->religion = $religi;
		$cv->nationality = $nasional;
		$cv->address = $addr;
		$cv->city = $city;
		$cv->postal_code = $pos;
		$cv->mobile_number = $phone;
		$cv->photo = $formalfoto2;
		
		$cv->toefl_type = $inggris;
		$cv->certificate = $certi2;
		$cv->score = $score;
		$cv->toefl_institution = $tfname;
		
		$cv->first_position = $prio;
		$cv->second_position = $prio2;
		$cv->expected_salary = $salary;
		$cv->portfolio = $prt2;
		$cv->unique_code =  substr(str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789"), 0, 8);
		$cv->save();
		
		/* $graders = $request->input("grader");
		$institusiloc = $_POST['institusiloc1'];
		$institusiname = $_POST['institusiname1'];
		$major = $_POST['major1'];
		$focused_major = $_POST['fmajor1'];
		$gpa = $_POST['gpa1'];
		$gpa_transcript = $request->file('trans1');
		$diploma = $request->file('diploma1');
		$prt2 = "";
		
		 for($i = 0;$i < count($graders);$i++)
		{
			$e = new Education;
			$e->id_cv = $cv->id;
			$e->id_member = Auth::user()->id;
			$e->grade = $graders[$i];
						
			$e->city = $institusiloc[$i];
			$e->name = $institusiname[$i];
			$e->major = $major[$i];
			$e->focused_major = $focused_major[$i];
			$e->gpa = $gpa[$i];
			
			$prt2 = "";
			if($diploma[$i]){
				$extension = \File::extension($diploma[$i]->getClientOriginalName());
				$prt2 = date('Ymdhis').'.'.$extension;
				$prt->move('document', $prt2);
			}
			$e->diploma = $prt2;
			
			$prt2 = "";
			if($gpa_transcript[$i]){
				$extension = \File::extension($gpa_transcript[$i]->getClientOriginalName());
				$prt2 = date('Ymdhis').'.'.$extension;
				$prt->move('document', $prt2);
			}
			$e->gpa_transcript = $prt2;
			
						
			$e->save();
		} */
		
		
		
		
		return response()->json([
			"id"=>$cv->id,
			"unique_code"=>$cv->unique_code,
		]);
	}
	
	function dofilleducation(Request $request)
	{					
		$gpa_transcript = $request->file('trans1');
		$diploma = $request->file('diploma1');
		$prt2 = "";
		
		$e = new Education;
		$e->id_cv = $request->input("id_cv");
		$e->id_member = Auth::user()->id;
		$e->grade = $request->input("grader");
					
		$e->city = $request->input("institusiloc1");
		$e->name = $request->input("institusiname1");
		$e->major = $request->input("major1");
		$e->focused_major = $request->input("fmajor1");
		$e->gpa = $request->input("gpa1");
		
		$prt2 = "";
		if($diploma){
			$extension = \File::extension($diploma->getClientOriginalName());
			$prt2 = date('Ymdhis').'.'.$extension;
			$diploma->move('document', $prt2);
		}
		$e->diploma = $prt2;
		
		$prt2 = "";
		if($gpa_transcript){
			$extension = \File::extension($gpa_transcript->getClientOriginalName());
			$prt2 = date('Ymdhis').'.'.$extension;
			$gpa_transcript->move('document', $prt2);
		}
		$e->gpa_transcript = $prt2;		
					
		$e->save();
				
		return $e->id;
	}
	
	function dofillwork(Request $request)
	{							
		$e = new Work;
		$e->id_cv = $request->input("id_cv");
		$e->id_member = Auth::user()->id;
		$e->place = $request->input("place");
					
		$e->position = $request->input("position");
		$e->year_in = $request->input("year_in");
		$e->year_out = $request->input("year_out");	
					
		$e->save();
				
		return $e->id;
	}
}
