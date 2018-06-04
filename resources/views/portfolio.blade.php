@extends('layouts.app')

@section('meta')
<title>{{$page->meta_title}}</title>
<meta name="description" content="{{$page->meta_description}}" />
@endsection

@section('content')

<div class="page project">
	<div class="container-viewport-centered container-viewport-centered--scroll">
		<div class="container-viewport-centered__wrapper container-viewport-centered__wrapper--scroll">
			<div class="project-header">
				<div class="project-header__left">
					<h1>{!! $page->title !!}</h1>
					<h2>{!! $page->subtitle !!}</h2>
				</div>
				<div class="project-header__right">
				<div class="project-header__content project__content">{!! $page->content !!}</div>
				</div>
			</div>
			@foreach ($page->imagesections as $section)
				@if ($section->type_id == 2)
				<div class="portfolio-template__double">
					<div class="portfolio-template__double__item">
						<img src="{{$section->img}}" />
					</div>
					<div class="portfolio-template__double__item">
						<img src="{{$section->img_2}}" />
					</div>
				</div>
				@endif
				@if ($section->type_id == 1)
					<div class="portfolio-template__single">
						<img src="{{$section->img}}" />
					</div>
				@endif
			@endforeach
		</div>
	</div>
</div>
@endsection
