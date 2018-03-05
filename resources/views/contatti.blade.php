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
			<div class="big-text">
				info@si.....<br />
				Instagram: simonemontagnani Office: Via Campo d’Arrigo<br>40r, 50131 Firenze, Italia
			</div>
		</div>
	</div>
</div>
@endsection
