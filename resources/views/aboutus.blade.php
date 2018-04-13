@extends('layouts.app')

@section('meta')
<title>{{$page->meta_title}}</title>
<meta name="description" content="{{$page->meta_description}}" />
@endsection

@section('content')
<div class="page {{$page->template	}}">
	<div class="container-viewport-centered">
		<div class="container-viewport-centered__wrapper">
			<div class="container-viewport-centered__wrapper__left">
				<span class="icon-logo logo"></span>
				<img src="{{$page->images[0]->img}}" />
				<span class="text">{!! $page->settings->company_info !!}</span>
			</div>
			<div class="container-viewport-centered__wrapper__right">
				{!! $page->content !!}
			</div>
		</div>
	</div>
</div>
@endsection
