<nav class="navbar navbar-default">
	<div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      	<ul class="nav navbar-nav nav-main">
				<li class="{{ currentRoute(route('homepage')) }}"><a href="{{ route('homepage') }}">Accueil</a></li>
				<li class="{{ currentRoute(route('vendre')) }}"><a href="{{ route('vendre') }}">À vendre</a></li>
				<li class="{{ currentRoute(route('louer')) }}"><a href="{{ route('louer') }}">À louer</a></li>
				<li class="{{ currentRoute(route('gestion')) }}"><a href="{{ route('gestion') }}">Gestion privative</a></li>
				<li class="{{ currentRoute(route('contact')) }}"><a href="{{ route('contact') }}">Contact</a></li>
	        </ul>
	    </div>
	</div>
</nav>