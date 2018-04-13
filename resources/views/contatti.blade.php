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
				{!!$page->content !!}
				{!! $page->settings->company_info !!}
			</div>
		</div>
	</div>
</div>
@endsection
