@extends('master')
@section('title')
	<title style="text-transform: uppercase;">{{$cat->title}} | Newspaper</title>
	@stop
@section('content')

	<div class="wrapper">

		<div class="row" style="margin-top:30px;">
			<div class="col-md-8">
				<div class="col-md-12" style="padding:15px 15px 30px 0px;">
					<div class="col-md-12">
						<h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742;text-transform:uppercase">{{$cat->title}}</span></h3>
					</div>
					@if(count($posts) > 0)
					<div class="col-md-12">
						@foreach($posts as $key=>$post)
						@if($key == 0)
						<a href="{{url('article')}}/{{$post->slug}}"><img src="{{url('public/posts')}}/{{$post->image}}" width="100%" style="margin-bottom:15px;" /></a>
						{!! substr($post->description,0,300) !!}
						
						<p> <a href="{{url('article')}}/{{$post->slug}}">Read More &raquo;</a></p>
						 @endif
						 @endforeach
					</div>
					@foreach($posts as $key=>$post)
						
						@if($key > 0 && $key < 10)
						<div class="col-md-6">
						<a href="{{url('article')}}/{{$post->slug}}"><img src="{{url('public/posts')}}/{{$post->image}}" width="100%" style="margin-bottom:15px;" /></a>
						{!! substr($post->description,0,100) !!}
						<p> <a href="{{url('article')}}/{{$post->slug}}">Read More &raquo;</a></p>
						</div>
						
						@endif
						 @endforeach
					@endif         
				</div>        
			</div>

<!-- right section -->
			<div class="col-md-4">
				<div class="col-md-12" style="padding:15px;">
					<h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span style="padding:6px 12px; background:#2b99ca;">RECENT NEWS</span></h3>
					@foreach($latest->take(10) as $l)
				
					<div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
						<div class="col-md-4">
							<div class="row">
							<a href="{{url('article')}}/{{$l->slug}}">
								<img src="{{asset('public/posts')}}/{{$l->image}}"width="100%" style="margin-left:-15px;" />
							</a>
							</div>
						</div>
						<div class="col-md-8">
							<div class="row" style="padding-left:10px;">
								<h4><a href="{{url('article')}}/{{$l->slug}}">{{$l->title}}</a></h4>
							</div>
						</div>
					</div>
					@endforeach
					</div>
				</div> 
			</div>
		</div> 
	</div>
@stop