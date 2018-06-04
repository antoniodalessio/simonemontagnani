@extends('layouts.app')

@section('meta')
<title>{{$page->meta_title}}</title>
<meta name="description" content="{{$page->meta_description}}" />
@endsection

@section('content')
<div class="page gallery">
	<div class="container-viewport-centered container-viewport-centered--scroll">
		<div class="container-viewport-centered__wrapper container-viewport-centered__wrapper--scroll">
			<div class="gallery-header">
				<div class="gallery-header__left"> 
					<h1>{!! $page->title !!}</h1>
				</div>
				<div class="gallery-header__right">
				<div class="gallery-header__content">{!! $page->content !!}</div>
				</div>
			</div>
			<div class="gallery-items__container">
				@foreach ($page->projects as $project)
				<div class="gallery-items__item">
					<a href="{{$project->contents[0]->slug}}">
						<div class="gallery-items__item__content">
							<span class="title">{!! $project->contents[0]->title !!}</span>
							<span class="subtitle">{!! $project->contents[0]->subtitle !!}</span>
						</div>
						<img src="{{$project->images->all()[0]->img}}" />
					</a>
				</div>
				@endforeach
			</div>
			
		</div>
	</div>
</div>
@endsection
