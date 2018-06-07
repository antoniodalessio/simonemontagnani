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
				<div class="text-animation">
					<div class="text-animation__container">
						<p>firenze</p>
						<p>livorno</p>
						<p>roma</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
