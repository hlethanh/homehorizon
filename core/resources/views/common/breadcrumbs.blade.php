<section id="topic-header">
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-8 hidden-xs">
			@if (count($breadcrumbs))
			    <ol class="breadcrumb pull-right">
			        @foreach ($breadcrumbs as $breadcrumb)

			            @if ($breadcrumb->url && !$loop->last)
			                <li><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
			            @else
			                <li class="active">{{ $breadcrumb->title }}</li>
			            @endif

			        @endforeach
			    </ol>
			@endif
			</div>
		</div>
	</div>
</section>




