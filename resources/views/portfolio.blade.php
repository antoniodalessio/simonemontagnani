@extends('layouts.app')

@section('meta')
<title>{{$page->meta_title}}</title>
<meta name="description" content="{{$page->meta_description}}" />
@endsection

@section('content')
<!-- {{$page->content}} -->
<div class="page {{$page->template}}">
	<div class="container-viewport-centered container-viewport-centered--scroll">
		<div class="container-viewport-centered__wrapper container-viewport-centered__wrapper--scroll">
			<div class="portfolio-template__double">
				<div class="portfolio-template__double__item">
					<a href=""><img src="http://via.placeholder.com/350x350/000" />
					</a>
				</div>
				<div class="portfolio-template__double__item">
					<a href=""><img src="http://via.placeholder.com/350x400/000" /></a>
				</div>
			</div>
			<div class="portfolio-template__single">
					<a href=""><img src="http://via.placeholder.com/900x400/000" /></a>
			</div>
		</div>
	</div>
</div>
@endsection
