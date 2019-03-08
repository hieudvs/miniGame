@extends('Layout.Web.index')

@section('css')
@endsection

@section('content')
<!-- about-->
	<div class="about-agileinfo" id="about">
		<div class="container">
			<h2><b>SƠ LƯỢC</b></h2>
			<div class="about-grids-w3-agileits">
				<div class="col-md-6 about-grid-left-agileits-w3layouts">
					<ul>
						<li><i>1.</i><a class="link link--kumya" href="single.html"><span data-letters="Qui ratione voluptatem dolores eos qui">Qui ratione voluptatem dolores</span></a></li>
						<li><i>2.</i><a class="link link--kumya" href="{{ URL::asset('#') }}"><span data-letters="Dolores eos qui ratione voluptatem sequi">Dolores eos qui ratione volu</span></a></li>
						<li><i>3.</i><a class="link link--kumya" href="{{ URL::asset('#') }}"><span data-letters="Voluptatem quia voluptas sit asper">Voluptatem quia voluptas sit asper</span></a></li>
						<li><i>4.</i><a class="link link--kumya" href="{{ URL::asset('#') }}"><span data-letters="Consectetur adipiscing elit, incid">Consectetur adipiscing elit, incid</span></a></li>
						<li><i>5.</i><a class="link link--kumya" href="{{ URL::asset('#') }}"><span data-letters="Quia voluptas sit aspernatur aut odit">Quia voluptas sit aspernatur aut</span></a></li>
						<li><i>6.</i><a class="link link--kumya" href="{{ URL::asset('#') }}"><span data-letters="Eos qui ratione voluptatem sequi">Eos qui ratione voluptatem sequi</span></a></li>
					</ul>
				</div>
				<div class="col-md-6 about-grid-right-w3-agile">
					<div class="grid-w3ls">
					<figure class="effect-zoe">
						<img src="{{ URL::asset('web/images/about.jpg') }}" alt=" " class="img-responsive" />
						<figcaption>
							<h3><b>Games<span>Events</span></b></h3>
							<p class="icon-links">
								<a href="{{ URL::asset('#') }}"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></a>
								<a href="{{ URL::asset('#') }}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
								<a href="{{ URL::asset('#') }}"><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span></a>
							</p>
							<p class="description">Suspendisse convallis malesuada libero, non rutrum arcu pellentesque lacinia.</p>
						</figcaption>			
					</figure>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->

<!-- Collection -->
	<div class="collection-agileits">
			<div class="collection-grids-agileits-w3layouts">
				<div class="col-md-4 col-sm-4 collection-left">
					
				</div>
				<div class="col-md-8 col-sm-8 collection-right">
					<div class="col-md-4 col-sm-4 collection-grid collection-text collection-grid-1">
						<img src="{{ URL::asset('web/images/c1.png') }}" alt="">
						<h3>Convallis </h3>
						<p>A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque.</p>
					</div>
					<div class="col-md-4 col-sm-4 collection-grid collection-image collection-grid-2">
						
					</div>
					<div class="col-md-4 col-sm-4 collection-grid collection-text collection-grid-3">
						<img src="{{ URL::asset('web/images/c2.png') }}" alt="" />
						<h3>Lacinia</h3>
						<p>A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque.</p>
					</div>
					<div class="col-md-4 col-sm-4 collection-grid collection-image collection-grid-4">
						
					</div>
					<div class="col-md-4 col-sm-4 collection-grid collection-text collection-grid-5">
						<img src="{{ URL::asset('web/images/c3.png') }}" alt="" />
						<h3>Sapien</h3>
						<p>A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque.</p>
					</div>
					<div class="col-md-4 col-sm-4 collection-grid collection-image collection-grid-6">
					
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
	</div>
<!-- //Collection -->


<!-- team -->
	<div class="team-w3layouts">
		<div class="container">
			<h3><b>ĐỘI NGŨ</b></h3>
			<div class="w3l_team_grids-agile">
				<div class="col-md-3 w3l_team_grid">
					<div class="view view-second">
						<img src="{{ URL::asset('web/images/t2.jpg') }}" alt=" " class="img-responsive" />
						<div class="mask"></div>
						<div class="content">
							<div class="w3l_social_icons w3l_social_icons1">
								<ul>
									<li><a href="{{ URL::asset('#') }}" class="linkedin"></a></li>
									<li><a href="{{ URL::asset('#') }}" class="google"></a></li>
									<li><a href="{{ URL::asset('#') }}" class="twitter"></a></li>
									<li><a href="{{ URL::asset('#') }}" class="facebook"></a></li>
								</ul>
							</div>
							<p>Cuộc sống tươi đẹp</p>
						</div>
					</div>
					<h4>Học Đặng</h4>
					<p>Developer</p>
				</div>
				<div class="col-md-3 w3l_team_grid">
					<div class="view view-second">
						<img src="{{ URL::asset('web/images/t2.jpg') }}" alt=" " class="img-responsive" />
						<div class="mask"></div>
						<div class="content">
							<div class="w3l_social_icons w3l_social_icons1">
								<ul>
									<li><a href="{{ URL::asset('#') }}" class="linkedin"></a></li>
									<li><a href="{{ URL::asset('#') }}" class="google"></a></li>
									<li><a href="{{ URL::asset('#') }}" class="twitter"></a></li>
									<li><a href="{{ URL::asset('#') }}" class="facebook"></a></li>
								</ul>
							</div>
							<p>Cuộc sống tươi đẹp</p>
						</div>
					</div>
					<h4>Học Đặng</h4>
					<p>Developer</p>
				</div>
				<div class="col-md-3 w3l_team_grid">
					<div class="view view-second">
						<img src="{{ URL::asset('web/images/t2.jpg') }}" alt=" " class="img-responsive" />
						<div class="mask"></div>
						<div class="content">
							<div class="w3l_social_icons w3l_social_icons1">
								<ul>
									<li><a href="{{ URL::asset('#') }}" class="linkedin"></a></li>
									<li><a href="{{ URL::asset('#') }}" class="google"></a></li>
									<li><a href="{{ URL::asset('#') }}" class="twitter"></a></li>
									<li><a href="{{ URL::asset('#') }}" class="facebook"></a></li>
								</ul>
							</div>
							<p>Cuộc sống tươi đẹp</p>
						</div>
					</div>
					<h4>Học Đặng</h4>
					<p>Developer</p>
				</div>
				<div class="col-md-3 w3l_team_grid">
					<div class="view view-second">
						<img src="{{ URL::asset('web/images/t2.jpg') }}" alt=" " class="img-responsive" />
						<div class="mask"></div>
						<div class="content">
							<div class="w3l_social_icons w3l_social_icons1">
								<ul>
									<li><a href="{{ URL::asset('#') }}" class="linkedin"></a></li>
									<li><a href="{{ URL::asset('#') }}" class="google"></a></li>
									<li><a href="{{ URL::asset('#') }}" class="twitter"></a></li>
									<li><a href="{{ URL::asset('#') }}" class="facebook"></a></li>
								</ul>
							</div>
							<p>Cuộc sống tươi đẹp</p>
						</div>
					</div>
					<h4>Học Đặng</h4>
					<p>Developer</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->
@endsection

@section('script')
@endsection