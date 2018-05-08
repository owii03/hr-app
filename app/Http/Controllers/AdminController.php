<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Lang;
use Hash;
use Auth;
use App\Member;
use App\Cv;
use App\MultipleChoice;
use App\Practice;
use App\Result;
use App\VResult;

class AdminController extends Controller
{
    function applicantselection(Request $request){
		$a = Cv::where("first_position","=", "Design")->count();
		$b = Cv::where("first_position","=", "Coding")->count();
		$c = Cv::where("first_position","=", "Quality Assurance")->count();
		$d = Cv::where("first_position","=", "Analytic")->count();
		$search = "%" . $request->input("search") . "%";
		
		$data = Cv::where("full_name", "like", "$search")->get();
		$request->flush();
		
		$selected = 'Applicant Selection';
    	return view('admin.applicantselection', [ 'selected'=>$selected, 'members'=>$data,
		'a'=>$a, 'b'=>$b, 'c'=>$c, 'd'=>$d,
		]);
    }
	function modifytest(){
		$datacoding = MultipleChoice::where("category","=","Coding")->get();		
		$datadesign = MultipleChoice::where("category","=","Design")->get();
		$dataqa = MultipleChoice::where("category","=","QA")->get();
		$dataanalytic = MultipleChoice::where("category","=","Analytic")->get();
		
		$datapracticecoding = Practice::where("category","=","Coding")->get();	
		$datapracticedesign = Practice::where("category","=","Design")->get();	
		$datapracticeqa = Practice::where("category","=","QA")->get();	
		$datapracticeanalytic = Practice::where("category","=","Analytic")->get();	
		
		$selected = 'Modify Test';
    	return view('admin.modifytest', [ 'selected'=>$selected, 
			'datacoding'=>$datacoding, 
			'datadesign'=>$datadesign, 
			'dataqa'=>$dataqa, 
			'dataanalytic'=>$dataanalytic, 
			
			'datapracticecoding'=>$datapracticecoding,
			'datapracticedesign'=>$datapracticedesign,
			'datapracticeqa'=>$datapracticeqa,
			'datapracticeanalytic'=>$datapracticeanalytic,
		]);
    }
	function selectionresult(){
		$data = VResult::all();
		$selected = 'Selection Result';
    	return view('admin.selectionresult', [ 'selected'=>$selected, 'data'=>$data,
		]);
    }
	function dodeletetest(Request $request)
	{
		$id = $request->input("id");
		$model = MultipleChoice::find($id);
		if($model) $model->delete();
		return response()->json([
			"success"=>1,
		]);
	}
	function doedittest(Request $request)
	{
		$id = $request->input("id");
		$question = $request->input("question");
		$answer = $request->input("answer");
		$feedback = $request->input("feedback");
		$answer_a = $request->input("answer_a");
		$answer_b = $request->input("answer_b");
		$answer_c = $request->input("answer_c");
		$answer_d = $request->input("answer_d");
		
		$model = MultipleChoice::find($id);
		$model->question = $question;
		$model->answer_a = $answer_a;
		$model->answer_b = $answer_b;		
		$model->answer_c = $answer_c;		
		$model->answer_d = $answer_d;		
		$model->answer = strtolower($answer);		
		$model->feedback = $feedback;		
		$model->save();
		
		
		return response()->json([
			"success"=>1,
		]);
	}
	function doaddtest(Request $request)
	{
		$category = $request->input("category");
		$question = $request->input("question");
		$answer = $request->input("answer");
		$feedback = $request->input("feedback");
		$answer_a = $request->input("answer_a");
		$answer_b = $request->input("answer_b");
		$answer_c = $request->input("answer_c");
		$answer_d = $request->input("answer_d");
		
		$model = new MultipleChoice;
		$model->category = $category;
		$model->question = $question;
		$model->answer_a = $answer_a;
		$model->answer_b = $answer_b;		
		$model->answer_c = $answer_c;		
		$model->answer_d = $answer_d;		
		$model->answer = strtolower($answer);		
		$model->feedback = $feedback;		
		$model->save();
		
		
		return response()->json([
			"success"=>1,
		]);
	}
	function doaddpractice(Request $request)
	{
		$category = $request->input("category");
		$file = $request->file('file');
		$file2 = "";
		if($file){
			$extension = \File::extension($file->getClientOriginalName());
			$file2 = date('Ymdhis').'.'.$extension;
			$file->move('practice', $file2);
		}
			
		
		$model = new Practice;
		$model->category = $category;
		$model->file = $file2;
		$model->save();
		
		
		return response()->json([
			"success"=>1,
		]);
	}
	
	
	function dodeletepracrice(Request $request)
	{
		$id = $request->input("id");
		$model = Practice::find($id);
		if($model) $model->delete();
		return response()->json([
			"success"=>1,
		]);
	}
	
	function dodeleteresult(Request $request)
	{
		$id = $request->input("id");
		$model = Result::find($id);
		if($model) $model->delete();
		return response()->json([
			"success"=>1,
		]);
	}
}