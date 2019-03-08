@extends('Layout.Web.index')

@section('css')
	<link href="{{ URL::asset('user/css/system.css') }}" rel="stylesheet" type="text/css" media="all" />	
@endsection

@section('content')
	<div class="container system">
		<div class="col-sm-4">
			<div class="info">
				<h1>THÔNG TIN</h1>
				<div class="list-group ">
				  	<a href="#" class="list-group-item disabled">Email: {{Auth::user()->email}}</a>
				  	<a href="#" class="list-group-item">Quản lý Games</a>
				  	<a href="#" class="list-group-item">Quản lý khách hàng</a>
				  	<a href="#" class="list-group-item">Đổi mật khẩu</a>
				</div>
			</div>
		</div>
		<div class="col-sm-8">
			<div class="games">
				<h1>GAME ĐANG HOẠT ĐỘNG</h1>
				<table class="table table-striped">
				    <thead>
				      <tr>
				      	<th>Bắt đầu</th>
				        <th>Game</th>
				        <th>Events</th>
				        <th>Chi tiết</th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td>14/12/2019</td>
				        <td>Win Wheel</td>
				        <td>Tri ân tháng 9</td>
				        <td><a href="#">Xem</a></td>
				      </tr>
				      <tr>
				        <td>14/12/2019</td>
				        <td>Win Wheel</td>
				        <td>Tri ân tháng 8</td>
				        <td><a href="#">Xem</a></td>
				      </tr>
				    </tbody>
				  </table>
			</div>
		</div>
	</div>
@endsection

@section('script')
@endsection