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
use App\Result;
use App\MultipleChoice;

class TestController extends Controller
{
    //
	function onlinetest()
	{
		return view('test.onlinetest', ['selected'=>'Online Test']);
	}
	
	function dosaveresult(Request $request)
	{
		$data = Cv::orderByRaw("created_at desc")->where("id_member", "=", Auth::user()->id)->first();
		
		$m = Result::where("id_cv", "=", $data->id)->first();
		
		if(!$m)
		{
			$m = new Result;		
			$m->id_cv = $data->id;
			$m->test_date = date("Y-m-d H:i:s");
			$m->score = str_replace("%", "", $request->input("score"));
		}
		else{
			$m->score = ($m->score + intval(str_replace("%", "", $request->input("score")))) / 2;
		}
		
		$m->save();
		
		return response()->json([
			"success"=>1,
		]);
	}
	
	function choosetest()
	{
		$a = MultipleChoice::where("category","=","Design")->count();		
		$b = MultipleChoice::where("category","=","Coding")->count();
		$c = MultipleChoice::where("category","=","QA")->count();
		$d = MultipleChoice::where("category","=","Analytic")->count();
		return view('test.choosetest', ['selected'=>'Online Test', 'a'=>$a, 'b'=>$b, 'c'=>$c, 'd'=>$d]);
	}
	
	function starttest(Request $request)
	{
		$category = $request->input("category");
		$a = MultipleChoice::where("category","=",$category)->get();	
		$acount = MultipleChoice::where("category","=",$category)->count();		
		return view('test.starttest', ['selected'=>'Online Test', 'category'=>$category, 'a'=>$a, 'count'=>$acount]);
	}
	
	function doonlinetest(Request $request)
	{
		$ucode = $request->input("ucode");
		$data = Cv::orderByRaw("created_at desc")->where("id_member", "=", Auth::user()->id)->first();
		//5a42e4d1c8b65
		if(!$data || strtolower($data->unique_code) != strtolower($ucode))
		{			
			$request->session()->flash("pesan", "Invalid Unique Code");
			$request->session()->flash("title", "Warning!");
			$request->session()->flash("alert", "warning");
			return redirect()->back();
		}
		else{
			
			return redirect('/choosetest');
		}
		
	}
}
