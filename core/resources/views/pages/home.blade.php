@extends('layouts.template')

@section('css')

	<link href="{{ URL::to('css/main.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')
@endsection

@section('banner')

	<section id="slider-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<img class="cadre" src="images/banners/facade-bg.jpg" alt="" />
				</div>	
			</div>	
		</div>	
	</section>
@endsection

@section('content')

	<section id="features">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="pull-left">
						<p>Agence immobilière professionnelle à taille humaine, flexible, prodiguant des conseils personnalisés et offrant un service de qualité en toute confiance.<br/>
						Pour toute information ou estimation sans engagement contactez-nous, nous nous ferons un plaisir de vous aider.</p>
						<p>Immobilièrement vôtre,</p>
						<p>Justin DRUET<br/>Home horizon</p>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('scripts')

	<script src="{{ URL::to('js/main.js') }} type="text/javascript" "></script>
@endsection