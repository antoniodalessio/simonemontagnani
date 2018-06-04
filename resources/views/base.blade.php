@extends('layouts.app')

@section('meta')
<title>{{$page->meta_title}}</title>
<meta name="description" content="{{$page->meta_description}}" />
@endsection

@section('content')
<div class="page {{$page->title}}">
	<div class="main-gallery">
		<div class="main-gallery__container">
			<span class="icon-logo"></span>
			<div class="main-gallery__text">
				<p>frist<br>studio_</p>
				<p>firenze</p>
			</div>
		</div>
	</div>
</div>
@endsection
