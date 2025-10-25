@extends('Layouts.master')

@section('content')
	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">أقسام</span> الموقع</h3>
						<p>متعة التسوق عبر فروعنا</p>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach ($categories as $item)
					<div class="col-lg-4 col-md-6 text-center">
						<div class="single-product-item">
							<div class="product-image">
								<a href="/product/{{ $item -> id }}">
									<img src="{{ url($item -> imagepath) }}" alt="" style="min-width: 250px !important; max-height: 250px	 !important;">
								</a>
							</div>
							<h3>{{ $item -> name }}</h3>
							<p>{{ $item -> description }}</p>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- end product section -->
@endsection