<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Lang;
use Hash;
use Auth;
use App\Member;

class HomeController extends Controller
{
    function index(Request $request){
    	return view('home.index', [ 
		]);
    }
	function login()
	{
		return view('home.login');
	}
	function register()
	{
		return view('home.register');
	}
	function forgot()
	{
		return view('home.forgot');
	}
	function password()
	{
		return view('home.password');
	}
	function dopassword(Request $request)
	{		
		Validator::make(
			$request->all(),
			[
				
				'password'=>'required|confirmed',				
			],[
				
				'password.required'=>'Password must be filled',
				'password.confirmed'=>'Password not match',				
			]
		)->validate();
		
		$password = $request->input("password");
		
		$data = Member::find(Auth::user()->id);		
		$data->password = Hash::make($password);
		$data->save();

		$request->session()->flash("pesan", "Success change password");
		$request->session()->flash("title", "Success!");
		$request->session()->flash("alert", "success");
		return redirect()->back();
	}	
	function doforgot(Request $request)
	{
		$email = $request->input("email");
		$model = Member::where("email", "=", $email)->first();
		if(!$model)
		{
			$request->session()->flash("pesan", "Invalid Email");
			$request->session()->flash("title", "Warning!");
			$request->session()->flash("alert", "warning");
		}
		else{
			$request->session()->flash("pesan", "We send you a link to reset your password");
			$request->session()->flash("title", "Success!");
			$request->session()->flash("alert", "success");
		}
		return redirect()->back();
	}
	function dologin(Request $request)
	{
		$email = $request->input("email");
		$password = $request->input("password");
		$remember = $request->input("remember");
		
		if(Auth::attempt([
			'email'=>$email,
			'password'=>$password
		])){
			$request->session()->flash("pesan", "Welcome " . Auth::user()->name);
			$request->session()->flash("title", "Success!");
			$request->session()->flash("alert", "success");
			

			if($remember == 1)
			{
				$ck1 = cookie('cookie_laravel_email', $email, 1);				
				return redirect('/')->withCookie($ck1);
			}
			return redirect('/');		
			
		}
		else{
			$request->session()->flash("pesan", "Invalid Email and/or Password!");
			$request->session()->flash("title", "Warning!");
			$request->session()->flash("alert", "warning");
			return redirect('login');
		}
	}
	function doregister(Request $request)
	{
		$name = $request->input("name");
		$phone = $request->input("phone");
		$email = $request->input("email");
		$pass = $request->input("pass");
		
		$member = new Member;
		$member->name = $name;
		$member->role = 'Member';
		$member->mobile_phone = $phone;
		$member->email = $email;
		$member->password = Hash::make($pass);
		$member->save();
		
		$request->session()->flash("title", "Thank you!");
		$request->session()->flash("alert", "success");
		$request->session()->flash('pesan', 'Register Success!');
		
		return redirect()->back();
	}
	function logout()
	{
		Auth::logout();		
		return redirect('/');
	}
}