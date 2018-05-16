@extends('layouts.app')

@section('meta')
<title>{{$page->meta_title}}</title>
<meta name="description" content="{{$page->meta_description}}" />
@endsection

@section('content')

<div class="page project">
	<div class="container-viewport-centered container-viewport-centered--scroll">
		<div class="container-viewport-centered__wrapper container-viewport-centered__wrapper--scroll">
			<h1>{!! $page->title !!}</h1>
			<div class="project__content">{!! $page->content !!}</div>
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
