@extends('layout.template')
@section('isi')
		<div class="contentArea">
				<div class="container">
					<div class="login-container-wrapper clearfix">
						<div class="inside">
							<b>Forgot Password</b>
						</div>
						<br/>
						<form method="post" action="{{ Url('/doforgot') }}" class="form-horizontal login-form">
							<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
							<div class="form-group relative">
								<input class="form-control input-lg" name="email" id="login_username" placeholder="E-mail Address" required="" type="email">
								<br/>
								<div class="form-group">
									<button class="btn btn-success btn-lg btn-block" type="submit">Sent</button>
								</div>
								<hr/>
							</form>
						</div>
					</div>
				</div>
			</div>
@endsection