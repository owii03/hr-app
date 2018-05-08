@extends('layout.template')
@section('isi')
		<div class="contentArea">
          <div class="container">
            <div class="login-container-wrapper clearfix">
              <div class="inside">
                <b>Change Password
                </b>
              </div>
              <br/>
             <form method="post" action="{{ Url('/dopassword') }}" class="form-horizontal login-form">
				<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <div class="form-group relative">
                  <input class="form-control input-lg" name="password" id="login_username" placeholder="New Password" required="" type="password">
                </div>
                <div class="form-group relative">
                  <input class="form-control input-lg" name="password_confirmation" id="login_password" placeholder="Confirm Password" required="" type="password">
				
				  {{ $errors->first("password") }}
                  <br/>
                  <div class="form-group">
                    <button class="btn btn-success btn-lg btn-block" type="submit">Change
                    </button>
                  </div>
                  <hr/>
                  </form>
                </div>
            </div>
          </div>
        </div>
@endsection