@extends('layout.template')


@section('isi')

  <div class="contentArea">
    <div class="container">
      <div class="login-container-wrapper clearfix">
        <ul class="switcher clearfix">
          <li class="first logo" data-tab="login"> <a>SIGN IN</a> </li>
          <li class="second logo active" data-tab="sign_up"> <a>SIGN UP</a> </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane" id="login">
            <form class="form-horizontal login-form" method="post" action="{{ Url('/dologin') }}">
		      <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
              <div class="form-group relative">
                <input class="form-control input-lg" name="email" id="login_username" placeholder="E-mail Address" required="" value="{{\Illuminate\Support\Facades\Cookie::get('cookie_laravel_email')}}" type="email">
                 </div>
              <div class="form-group relative">
                <input class="form-control input-lg" name="password" id="login_password" placeholder="Password" required="" type="password">
                 </div>
             <div class="checkbox checkbox-success">
                <input name="remember" value="1" id="stay-sign" type="checkbox">
                <label for="stay-sign">Remember Me</label>
              </div>
			  <br />
			   <div class="form-group">
                <button class="btn btn-success btn-lg btn-block" type="submit">Sign In</button>
              </div>
              <hr />
              <div class="text-center">
                <label><a href="{{ Url('/forgot') }}" class="forgotPass">Forgot your password?</a></label>
              </div>
            </form>
          </div>
          <div class="tab-pane active" id="sign_up">
            <form class="form-horizontal login-form" method="post" action="{{ Url('/doregister') }}">
			  <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
              <div class="form-group relative">
                <input class="form-control input-lg" id="name" name="name" placeholder="Name" required="" type="text">
					<div class="errmsg hidden">Please only input letters</div>
                 </div>
                <div class="form-group relative">
                <input class="form-control input-lg" id="phone" name="phone" placeholder="Mobile Phone Number" required="" type="tel">
					<div class="errmsg hidden">Please follow the example : 082122021915</div>
                 </div>
              <div class="form-group relative">
                <input class="form-control input-lg" id="email" name="email" placeholder="E-mail Address" required="" type="email">
					<div class="errmsg hidden">Please input valid e-mail</div>
                </div>
              <div class="form-group relative">
                <input class="form-control input-lg" id="pass" name="pass" placeholder="Password" required="" type="password">
					<div class="errmsg hidden">Please input password at least 5 characters</div>
                 </div>
              <div class="checkbox checkbox-success">
                <input id="agree-terms" required type="checkbox">
                <label for="agree-terms"> Agree our terms</label>
              </div>
			  <br/>
              <div class="form-group">
                <button class="btn btn-success btn-lg btn-block" type="submit">Sign Up</button>
              </div>
              <hr>
              <div class="text-center">
                <label><a href="{{ Url('/login') }}" class="forgotPass">Already Member?</a></label>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script>
	var $regexname=/^[a-zA-Z\s]*$/;
	$('#name').on('keyup',function(){
		  if (!$(this).val().match($regexname)) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	$('#pass').on('keyup',function(){
		  if ($(this).val().length < 5) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});


	var $regexphone = /^\d{11}(\d{1})?$/;

	$('#phone').on('keyup',function(){
		  if (!$(this).val().match($regexphone)) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	var $regexmail= /^\w+[\w-\.]*\@\w+((-\w+)|(\w*))\.[a-z]{2,3}$/;

	$('#email').on('keyup',function(){
		  if (!$(this).val().match($regexmail)) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	</script>


	<script>
	$(document).ready(function(){
		
		$('ul.switcher li').click(function(){
			var tab_id = $(this).attr('data-tab');

			$('li').removeClass('active');
		$('div.tab-pane').removeClass('active');

			$(this).addClass('active');
			$("#"+tab_id).addClass('active');
		})

	})
	</script>
@endsection



