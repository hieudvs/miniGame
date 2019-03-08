@extends('Layout.Web.Home.index')

@section('css')
@endsection

@section('content')
<div class="trend-w3layouts">
	<div class="container text-center">
		<h2><b>TOP EVENTS</b></h2>
		<ul id="flexiselDemo1">			
			@foreach($games as $game_img)
				<li>
					<div class="trend-grid">
					<a href="{{ URL::asset('games') }}/{{ $game_img->url }}" title="">
						<img src="{{ URL::asset('web/images/games/') }}/{{ $game_img->images }}" class="img-responsive"/>
					</a>
					</div>
				</li>
			@endforeach
		</ul>
	</div>
</div>
<script type="text/javascript">
	$(window).load(function() {
		$("#flexiselDemo1").flexisel({
			visibleItems: 4,
			animationSpeed: 1000,
			autoPlay: true,
			autoPlaySpeed: 3000,    		
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: { 
				portrait: { 
					changePoint:480,
					visibleItems: 2
				}, 
				landscape: { 
					changePoint:640,
					visibleItems:3
				},
				tablet: { 
					changePoint:768,
					visibleItems: 4
				}
			}
		});
		
	});
</script>
<script type="text/javascript" src="{{ URL::asset('web/js/jquery.flexisel.js') }}"></script>
<!-- //trend -->


<!-- services-->
<div class="services-agileits-w3layouts">
	<div class="container">
		<h3><b>DỊCH VỤ</b></h3>
		<div class="col-md-3 service-grid-agileits service-grid-agileits-top">
			<span class="glyphicon glyphicon-sort-by-attributes" aria-hidden="true"></span>
			<h4>Quis tortor</h4>
			<p>Curabitur suscipit porttitor aliquam. Etiam id placerat purus. Integer sodales elit eget arcu placerat.</p>
			<a href="{{ URL::asset('#') }}">Read More</a>
		</div>
		<div class="col-md-3 service-grid-agileits">
			<span class="glyphicon glyphicon-random" aria-hidden="true"></span>
			<h4>Eget arcu</h4>
			<p>Curabitur suscipit porttitor aliquam. Etiam id placerat purus. Integer sodales elit eget arcu placerat.</p>
			<a href="{{ URL::asset('#') }}">Read More</a>
		</div>
		<div class="col-md-3 service-grid-agileits service-grid-agileits-bottom">
			<span class="glyphicon glyphicon-yen" aria-hidden="true"></span>
			<h4>Risus porta</h4>
			<p>Curabitur suscipit porttitor aliquam. Etiam id placerat purus. Integer sodales elit eget arcu placerat.</p>
			<a href="{{ URL::asset('#') }}">Read More</a>
		</div>
		<div class="col-md-3 service-grid-agileits service-grid-agileits-bottom">
			<span class="glyphicon glyphicon-object-align-right" aria-hidden="true"></span>
			<h4>Proin sapien</h4>
			<p>Curabitur suscipit porttitor aliquam. Etiam id placerat purus. Integer sodales elit eget arcu placerat.</p>
			<a href="{{ URL::asset('#') }}">Read More</a>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //services-->

<!-- new games -->
<div class="new-w3-agile">
	<div class="container">
		<h3><b>GAME EVENTS</b></h3>
		@foreach($games as $game)
		<div class="col-md-3 new-grid-w3l view view-eighth">
			<img src="{{ URL::asset('web/images/games/') }}/{{ $game->images }}" alt=" " />
			<div class="mask">
				<a href="{{ URL::asset('games') }}/{{ $game->url }}"><h4>Xem thêm</h4></a>
				<p>{{ $game->name}}</p>
			</div>
		</div>
		@endforeach
		<div class="clearfix"></div>
	</div>
</div>
<!-- //new games-->



<div class="services-bottom-w3-agileits">
	<div class="container">
		<div class="wthree_info">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="wthree_info_grid">
								<h3>Duis aute dolor reprehenderit</h3>
								<p>Excepteur sint occaecat cupidatat non proident, sunt officia.</p>
								<a href="{{ URL::asset('#') }}" class="learn">Learn More</a>
							</div>
						</li>
						<li>
							<div class="wthree_info_grid">
								<h3>Aliquip commodo consequat</h3>
								<p>Curabitur lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								<a href="{{ URL::asset('#') }} class="learn">Learn More</a>
							</div>
						</li>
						<li>
							<div class="wthree_info_grid">
								<h3>Quis autem vel eum iure ea</h3>
								<p>Phasellus ornare consectetur erat, eu vehicula orci finibus at.</p>
								<a href="{{ URL::asset('#') }}" class="learn">Learn More</a>
							</div>
						</li>
					</ul>
				</div>
			</section>
		</div>
	</div>
</div>
<!-- flexSlider -->
<script defer src="{{ URL::asset('web/js/jquery.flexslider.js') }}"></script>
<script type="text/javascript">
	$(window).load(function(){
	  $('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		  $('body').removeClass('loading');
		}
	  });
	});
</script>
<!-- //flexSlider -->
@endsection

@section('script')
@endsection