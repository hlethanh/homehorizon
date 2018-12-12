@extends('layouts.template')

@section('css')
	<link href="{{ URL::to('css/main.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')

	{{ Breadcrumbs::render('contact') }}
	
@endsection

@section('banner')

	<section id="slider-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<iframe class="cadre top20" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2517.634747077353!2d4.32492331534535!3d50.87496136456709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c3c49e23de8f%3A0x7e0767920baef8c3!2sRue+L%C3%A9on+Theodor+71%2C+1090+Jette!5e0!3m2!1sfr!2sbe!4v1538053760320" width="98%" height="280px" frameborder="0" allowfullscreen="true"></iframe>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('content')

@endsection

@section('scripts')
	<script src="{{ URL::to('js/main.js') }} type="text/javascript" "></script>
@endsection