@extends('layouts.app')

@section('meta')
<title>{{$page->meta_title}}</title>
<meta name="description" content="{{$page->meta_description}}" />
@endsection

@section('content')
<div class="page {{$page->title}}">
	<div class="main-gallery">
		<div class="main-gallery__slide">
			<span class="icon-logo logo"></span>
			<div class="slider">
			@foreach ($page->images as $images)
			    <div><img src="{{$images->img}}" /></div>
			@endforeach
			</div>
			<div class="text">
				<h1>Simone Montagnani</h1>
				<h2>Graphic Designer</h2>
			</div>
		</div>
	</div>
</div>
@endsection
