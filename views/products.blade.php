@extends('layouts.app')
@section('title', 'Greenland - Products')
@section('head')
<style>
.banner {
	position: relative;
	padding-top: 6%;

	background: #000;
}
.product-section {
	background: #000;
	background-size: 100% 100%;
	padding-top: 5rem;
	padding-bottom: 5rem;
}
.display-product {
	display: grid;
	grid-template-columns: repeat(4, 1fr);
	width: 100%;
	height: auto;
	gap: 1rem;
}
.prd-cover {
	width: 100%;
/*	height: 500px;*/
    transition: 0.6s;
}
.prd-cover:hover {
	transform: scale(1.03);
    transition: 0.6s;
    filter: brightness(0.95);
    cursor: pointer;
}
.prd-cover .prd {
	display: flex;
	flex-direction: column;
	gap: 1rem;
	width: 100%;
	height: 100%;
	background: #ffffff;
	color: #000;
	border-radius: 12px;
	padding: 1rem;
	font-size: 1.25rem;
}
.prd img {
	height: 320px;
/*	object-fit: cover;*/
	object-fit: contain;
}
.prd label {
	background: yellow;
	color: red;
	text-align: center;
}
.prd span {
	text-align: center;
	font-size: 0.75rem;
}
.prd-desc {
	display: flex;
	flex-direction: column;
}

/* mobile responsive */
@media(max-width: 1500px) {
	.banner {
		padding-top: 8%;
	}
	.display-product {
		grid-template-columns: repeat(3, 1fr);
	}
}
@media(max-width: 992px) {
	.display-product {
		grid-template-columns: repeat(2, 1fr);
	}
}
@media(max-width: 767.5px) {
	.banner {
		padding-top: 12%;
	}
	.prd-cover .prd {
		font-size: 1.5rem;
	}
	.prd span {
		font-size: 1rem;
	}
}
@media(max-width: 475px) {
	.product-section {
		padding: 5rem 4.5rem;
	}
	.display-product {
		grid-template-columns: repeat(1, 1fr);
		gap: 2rem;
	}
}
@media(max-width: 375px) {
	.product-section {
		padding: 5rem 4rem;
	}
}
</style>
@endsection

@section('content')
<section class="products">
	<div class="banner">
	   
	</div>

	<div class="product-section">
		<div class="container">
			@if(count($products) > 0)
			<div class="display-product">
			    @foreach ($products as $product) 
						<div class="product-item prd-cover">
							<div class="prd">
								<img class="w-100" src="{{ $product['img'] }}" alt="{{ 'Greenland - ' . $product['name'] }}">
								<div class="prd-desc">
									<label>{{ $product['name'] }}</label>
									<span>{{ $product['kg'] }}</span>
								</div>
								
							</div>
						</div>
				@endforeach
			</div>
			@else
			    <p style="color: #fff;">No product found.</p>
			    <script>
		            setTimeout(function() {
		                alert("No product found.");
		            }, 1000);
		        </script>
			@endif
		</div>
	</div>

</section>

@endsection