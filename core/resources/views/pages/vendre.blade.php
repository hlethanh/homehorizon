@extends('layouts.template')

@section('css')
	<link href="{{ URL::to('css/main.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')

	{{ Breadcrumbs::render('avendre') }}

@endsection

@section('banner')

@endsection

@section('content')
	<section id="shop">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="products-heading"></div>
					<div class="product-grid">
					    <ul>
					        <li>
					            <div class="products">
					            	<div class="property-flags">
					            		<div class="property-flag-new-price">Nouveau Prix</div>
					            	</div>
									<a href="https://www.immoweb.be/fr/buy.Estate.cfm?IdBien=7848753&amp;xgallery=estates&amp;xpage=1" target="_blank">
										<img src="images/a_vendre/appartements/ref-7848753/7848753_1.jpg" alt="ref-7797692" title="ref-7797692" />
									</a>
									<a href="#">
										<h4>Appartement</h4>
										<h5>121 m² - 3 ch.</h5>
										<h5>1780 Wemmel</h5>
									</a>
									<div class="price-container">
										<p>242.000 € <br/><span class="old-price">250.000 €</span></p>
									</div>
								</div>
					        </li>
					        <li>
					            <div class="products">
									<a href="https://www.immoweb.be/fr/buy.Estate.cfm?IdBien=7835392&amp;xgallery=estates&amp;xpage=1" target="_blank">
										<img src="images/a_vendre/maisons/ref-7835392/7835392_13.jpg" alt="ref-7835392" title="ref-7835392" />
									</a>
									<a href="#">
										<h4>Maison</h4>
										<h5>148 m² - 4 ch.</h5>
										<h5>1030 Schaerbeek</h5>
									</a>
									<div class="price-container">
										<p>475.000 €</p>
									</div>
								</div>
					        </li>
					        <li>
					            <div class="products">
									<a href="https://www.immoweb.be/fr/buy.Estate.cfm?IdBien=7825832&amp;xgallery=estates&amp;xpage=1" target="_blank">
										<img src="images/a_vendre/appartements/ref-7825832/7825832_12.jpg" alt="ref-7825832" title="ref-7825832" />
									</a>
									<a href="#">
										<h4>Appartement</h4>
										<h5>293 m²- 3 ch.</h5>
										<h5>1050 Ixelles</h5>
									</a>
									<div class="price-container">
										<p>530.000 €</p>
									</div>
								</div>
					        </li>
					    </ul>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('scripts')
	<script src="{{ URL::to('js/main.js') }} type="text/javascript" "></script>
@endsection