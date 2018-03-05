@extends('layouts.app')

@section('meta')
<title>{{$page->meta_title}}</title>
<meta name="description" content="{{$page->meta_description}}" />
@endsection

@section('content')
<!-- {{$page->content}} -->
<div class="page {{$page->template	}}">
	<div class="container-viewport-centered">
		<div class="container-viewport-centered__wrapper">
			<div class="container-viewport-centered__wrapper__left">
				<span class="icon-logo logo"></span>
				<img src="http://via.placeholder.com/350x350/000" />
				info@si.....<br />
				Instagram: simonemontagnani Office: Via Campo d’Arrigo<br>40r, 50131 Firenze, Italia
			</div>
			<div class="container-viewport-centered__wrapper__right">
				{{$page->content}}
			</div>
		</div>
	</div>
</div>
@endsection
