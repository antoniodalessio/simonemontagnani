@extends('layouts.app')

@section('meta')
<title>{{$page->meta_title}}</title>
<meta name="description" content="{{$page->meta_description}}" />
@endsection

@section('content')
<div class="page gallery">
	<div class="container-viewport-centered container-viewport-centered--scroll">
		<div class="container-viewport-centered__wrapper container-viewport-centered__wrapper--scroll">
			<h1>{!! $page->title !!}</h1>
			<div class="gallery__content">{!! $page->content !!}</div>
			<div class="gallery-items__container">
				@foreach ($page->projects as $project)
				<div class="gallery-items__item">
					<a href="{{$project->contents[0]->slug}}">
						<img src="{{$project->images->all()[0]->img}}" />
					</a>
				</div>
				@endforeach
			</div>
			
		</div>
	</div>
</div>
@endsection
