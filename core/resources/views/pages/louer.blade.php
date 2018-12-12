@extends('layouts.template')

@section('css')
	<link href="{{ URL::to('css/main.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')

	{{ Breadcrumbs::render('alouer') }}

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
					            		<div class="property-flag-new">Nouveau</div>
					            	</div>
									<a href="https://www.immoweb.be/fr/rent.Estate.cfm?IdBien=7857769&xgallery=estates&xpage=1" target="_blank">
										<img src="images/a_louer/appartements/ref-7857769/7857769_4.jpg" alt="ref-7857769" title="ref-7857769" />
									</a>
									<a href="#">
										<h4>Rez-de-chaussée</h4>
										<h5>46 m² - 1 ch.</h5>
										<h5>1040 Etterbeek</h5>
									</a>
									<div class="price-container">
										<p>650 €/mois</p>
									</div>
								</div>
					        </li>
					        <li>
					            <div class="products">
					            <div class="property-flags">
					            		<div class="property-flag-new-price">Nouveau prix</div>
					            	</div>
									<a href="https://www.immoweb.be/fr/rent.estate.cfm?idbien=7780424" target="_blank">
										<img src="images/a_louer/flat_studio/ref-7780424/7780424_7.jpg" alt="ref-7780424" title="ref-7780424" />
									</a>
									<a href="#">
										<h4>Flat/Studio</h4>
										<h5>35 m²</h5>
										<h5>1700 Dilbeek</h5>
									</a>
									<div class="price-container">
										<p>515 €/mois<br/><span class="old-price">550 €/mois</span></p>
									</div>
								</div>
					        </li>
					        <li>
					            <div class="products">
					            <div class="property-flags">
					            		<div class="property-flag-new-price">Nouveau prix</div>
					            	</div>
									<a href="https://www.immoweb.be/fr/rent.estate.cfm?idbien=7805981" target="_blank">
										<img src="images/a_louer/appartements/ref-7805981/7805981_9.jpg" alt="ref-7805981" title="ref-7805981" />
									</a>
									<a href="#">
										<h4>Appartement</h4>
										<h5>92 m²- 2 ch.</h5>
										<h5>1082 Berchem-Ste-Agathe</h5>
									</a>
									<div class="price-container">
										<p>780 €/mois<br/><span class="old-price">830 €/mois</span></p>
									</div>
								</div>
					        </li>
					        <li>
					            <div class="products">
									<a href="https://www.immoweb.be/fr/rent.Estate.cfm?IdBien=7844079&xgallery=estates&xpage=1" target="_blank">
										<img src="images/a_louer/appartements/ref-7844079/7844079_1.jpg" alt="ref-7844079" title="ref-7844079" />
									</a>
									<a href="#">
										<h4>Appartement</h4>
										<h5>110 m² - 3 ch.</h5>
										<h5>1080 Molenbeek-St-Jean</h5>
									</a>
									<div class="price-container">
										<p>875 €/mois</p>
									</div>
								</div>
					        </li>
					        <li>
					            <div class="products">
									<a href="https://www.immoweb.be/fr/rent.Estate.cfm?IdBien=7806016&xgallery=estates&xpage=1" target="_blank">
										<img src="images/a_louer/appartements/ref-7806016/7806016_1.jpg" alt="ref-7806016" title="ref-7806016" />
									</a>
									<a href="#">
										<h4>Appartement</h4>
										<h5>87 m²- 1 ch.</h5>
										<h5>1081 Koekelberg</h5>
									</a>
									<div class="price-container">
										<p>650 €/mois</p>
									</div>
								</div>
					        </li>
					    </ul>
					</div>
					<!-- Pagination -->
				</div>
			</div>
		</div>
	</section>
@endsection

@section('scripts')
	<script src="{{ URL::to('js/main.js') }} type="text/javascript" "></script>
@endsection