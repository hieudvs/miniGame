<div class="header">
	<!-- Navbar -->
	<nav class="navbar navbar-default">
		<div class="container">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a  href="{{ URL::asset('/') }}"><h1>Games <img src="{{ URL::asset('web/images/c1.png') }}" alt=" " /> Events</h1></a>
			</div>

			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="hover-effect"><a href="{{ URL::asset('/') }}">TRANG CHỦ</a></li>
					<li class="hover-effect"><a href="{{ URL::asset('About') }}">GIỚI THIỆU</a></li>
					<li class="hover-effect"><a href="{{ URL::asset('Games') }}">GAMES</a></li>
					<li class="hover-effect"><a href="{{ URL::asset('Contact') }}">LIÊN HỆ</a></li>
					@if(!Auth::user())
						<li class="hover-effect"><a href="{{ URL::asset('Login') }}">ĐĂNG NHẬP</a></li>
					@else
						<li class="hover-effect"><a href="{{ URL::asset('user/system') }}">QUẢN LÝ</a></li>
						<li class="hover-effect"><a href="{{ URL::asset('Logout') }}">ĐĂNG XUẤT</a></li>
					@endif
				</ul>
			</div>

		</div>
	</nav>
	<!-- //Navbar -->

	<!-- Slider -->
	<div class="slider">
		<ul class="rslides" id="slider">
			<li>
				<img src="{{ URL::asset('web/images/banner3.jpg') }}" alt="" />
			</li>
			<li>
				<img src="{{ URL::asset('web/images/banner2.jpg') }}" alt="" />
			</li>
			<li>
				<img src="{{ URL::asset('web/images/banner1.jpg') }}" alt="" />
			</li>
		</ul>
	</div>
	<!-- //Slider -->
</div>
<script src="{{ URL::asset('web/js/responsiveslides.min.js') }}"></script>
<script>
	$(function () {
		$("#slider").responsiveSlides({
			auto: true,
			nav: true,
			speed: 800,
			namespace: "callbacks",
			pager: true,
		});
	});
</script>