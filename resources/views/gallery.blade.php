@extends('layouts.app')

@section('meta')
<title>{{$page->meta_title}}</title>
<meta name="description" content="{{$page->meta_description}}" />
@endsection

@section('content')
<div class="page {{$page->template}}">
	<div class="container-viewport-centered container-viewport-centered--scroll">
		<div class="container-viewport-centered__wrapper container-viewport-centered__wrapper--scroll">
			<h1>{!! $page->title !!}</h1>
			<div class="portfolio-description">{!! $page->content !!}</div>
			<div class="portfolio-template__double">
				<div class="portfolio-template__double__item">
					<a href=""><img src="http://via.placeholder.com/350x350/000" />
					</a>
				</div>
				<div class="portfolio-template__double__item">
					<a href=""><img src="http://via.placeholder.com/350x400/000" /></a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
