@extends('layouts.app')

@section('meta')
<title>{{$page->meta_title}}</title>
<meta name="description" content="{{$page->meta_description}}" />
@endsection

@section('content')
<div class="page about-us">
	<div class="container-viewport-centered">
		<div class="container-viewport-centered__wrapper">
			<div class="container-viewport-centered__wrapper__left">
				<span class="icon-rosa"></span>
				<img src="{{$page->images[0]->img}}" />
				<span class="text">info@fristudio.it</span>
				<p>
					<a href="https://www.behance.net/simone-montagnani" class="icon_container">
						<span class="icon-behance"></span>
					</a>
					<a href="https://www.instagram.com/fristudio_firenze/" class="icon_container">
						<span class="icon-instagram"></span>
					</a>
				</p>
			</div>
			<div class="container-viewport-centered__wrapper__right">
				<div class="about-us__content">
				{!! $page->content !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
