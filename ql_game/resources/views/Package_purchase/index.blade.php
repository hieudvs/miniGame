@extends('Layout.Web.index')

@section('css')

@endsection

@section('content')

	<div class="titel-page">
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h3 class="display-2">Demo chọn mua gói game</h3>
			</div>
		</div>
	</div>

	<div class="content-page">
		<div class="container">
			<div class="row">
				<div class="con-sm-12">
					<h3>Danh sách game</h3>
				</div>
				
				@if (!empty($dataPurchase))
					@foreach ($dataPurchase as $key => $purchaseItem)
						<div class="con-sm-6">
							<h1>Id gói: {{$purchaseItem->id}}</h1>
							<h1>Tên gói: {{$purchaseItem->name}}</h1>
							<h1>Giá: {{$purchaseItem->price}}</h1>
							<form action="{{route('postPackagePurchase')}}" method="post" role="form" enctype="multipart/form-data">
								@csrf
								<input type="text" name="id_purchase" hidden value="{{$purchaseItem->id}} ">
								<input type="text" name="expiry_date_purchase" value="{{$purchaseItem->expiry_date}}">
								<button type="submit"> Chọn mua</button>
							</form>
						</div>
						<div class="row">	
							@foreach ($purchaseItem->game as $gameItem)
								<div class="col-sm-3">
									<div class="card">
										<img class="card-img-top" width="400" height="200" src="{{$gameItem->image}}" alt="">
										<div class="card-body">
											<h4 class="card-title">Id: {{$gameItem->id}}</h4>
											<h4 class="card-title">Name: {{$gameItem->name}}</h4>
											<h4 class="card-title">Status:{{$gameItem->status}}</h4>
											<p class="card-text">Describe: {{$gameItem->describe}}</p>
										</div>
									</div>
								</div>
							@endforeach
						</div> <!-- End: row -->			
					@endforeach	
				@endif
		</div>
	</div>

	
	
	


@endsection

@section('script')
@endsection