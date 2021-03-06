@extends('Layout.Web.index')

@section('css')
@endsection

@section('content')
<div class="contact-agileinfo">
	<div class="container">
		<h2><b>PHẢN HỒI</b></h2>
		<div class="col-md-4 contact-left-agile">
			<div class="address-w3-agileits" id="address">
				<h4>Địa chỉ</h4>
				<address>
				<ul>
					<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Parma Via Modena</li>
					<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Sant'Agata Bolognese</li>
					<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> BO, Italy</li>
				</ul>
				</address>
			</div>
			<div class="phone-agileits-w3layouts" id="phone">
				<h4>Điện thoại</h4>
				<p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +1 (734) 123-4567</p>
				<p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +1 (739) 648-7114</p>
			</div>
			<div class="email">
				<h4>Email</h4>
				<p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <a href="mailto:mail@example.com"> info@example.com</a></p>
			</div>
		</div>
		<div class="col-md-8 contact-right-w3">
			<form action="#" method="post">
				<input type="text" class="text" name="Name" placeholder="Name" required="">
				<input type="text" class="text" name="Email" placeholder="Email" required="">
				<input type="text" class="text" name="Phone" placeholder="Phone" required="">
				<input type="text" class="text" name="City" placeholder="City" required="">
				<textarea name="Message" placeholder="Message" required=""></textarea>
				<input type="submit" class="more_btn" value="Send Message">
			</form>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<!-- Map-iFrame -->
<div class="map" id="map">
	<div class="map-hover">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22702.22744502486!2d11.113366067229226!3d44.662878362361056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477fc3eca9065c15%3A0x12ec8a03aadae866!2s40019+Sant&#39;Agata+Bolognese+BO%2C+Italy!5e0!3m2!1sen!2sin!4v1451281303075" allowfullscreen></iframe>
		<div class="map-hover-1"></div>
	</div>
</div>
<!-- //Map-iFrame -->
@endsection

@section('script')
@endsection