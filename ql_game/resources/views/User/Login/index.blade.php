@extends('Layout.Web.index')

@section('css')
	<link href="{{ URL::asset('user/css/login.css') }}" rel="stylesheet" type="text/css" media="all" />	
@endsection

@section('content')
	<div class="logins container">
		<center>
		<div class="form-login login text-left">
			<form action="login" method="post">
	      	  	<input type="hidden" name="_token" value="{{csrf_token()}}">
				<h1>ĐĂNG NHẬP</h1>
				<div class="form-group">
				    <label for="email">Tài khoản:</label>
				    <input type="email" class="form-control" name="email">
				</div>
				<div class="form-group">
				    <label for="pwd">Mật khẩu:</label>
				    <input type="password" class="form-control" name="pwd">
				</div>
				<div class="text-center">
					<button type="submit" class="btn btn-default">Đăng nhập</button>
				</div>
				<p><a href="#">Chưa có tài khoản?</a></p>
			</form>	
		</div>
	</center>	
	</div>
@endsection

@section('script')
@endsection