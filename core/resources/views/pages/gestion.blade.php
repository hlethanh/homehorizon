@extends('layouts.template')

@section('css')
	<link href="{{ URL::to('css/main.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')

	{{ Breadcrumbs::render('gestion') }}

@endsection

@section('banner')

	<section id="slider-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<img class="cadre top20" src="images/banners/gestion1.jpg" alt="Gestion privative" title="Gestion privative"/>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('content')

	<!-- FEATURES Start
    ================================================== -->

	<section id="features">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>Fort d'une expérience de près de 20 ans dans la gestion privative, nous nous assurons de gérer votre bien en bon père de famille : </p>
					<ul>
						<li>Conseils personnalisés</li>
						<li>Gestion administrative (enregistrement et signature de bail, remise en location, garantie locative, remise des clés, organisation d'état des lieux, indexation...)</li>
						<li>Assistance technique (suivi de chantier, réparation, demande de devis,...)</li>
						<li>Accompagnement juridique...</li>
					</ul>
					<p>N'hésitez pas à nous contacter pour une demande d'offre.</p>
					<p>Immobilièrement vôtre,</p>
					<p>Justin DRUET<br/>Home horizon</p>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('scripts')
	<script src="{{ URL::to('js/main.js') }} type="text/javascript" "></script>
@endsection