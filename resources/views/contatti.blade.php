@extends('layouts.app')

@section('meta')
<title>{{$page->meta_title}}</title>
<meta name="description" content="{{$page->meta_description}}" />
@endsection

@section('content')
<!-- {{$page->content}} -->
<div class="page {{$page->template}}">
	<div class="container-viewport-centered">
		<div class="container-viewport-centered__wrapper">
			<div class="contatti__container">
				<div class="big-text">
					{!!$page->content !!}
					{!! $page->settings->company_info !!}
					<a href="https://www.behance.net/simone-montagnani" class="icon_container">
						<span class="icon-behance"></span>
					</a>
					<a href="https://www.instagram.com/fristudio_firenze/" class="icon_container">
						<span class="icon-instagram"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
