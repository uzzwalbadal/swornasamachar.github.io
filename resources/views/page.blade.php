

	@extends('master')
	@section('title')
	<title>{{$data->title}} | Newspaper</title>
	@stop
@section('content')

	<!-- <div class="wrapper">

		<div class="row" style="margin-top:30px;">
			<div class="col-md-8">
				<div class="col-md-12" style="padding:15px 15px 30px 0px;">				
					<div class="col-md-12">
						<img src="{{url('public/images/coffee-563797_1280-390x205.jpg')}}" width="100%" style="margin-bottom:15px;" />
						<h3>Title</h3>
						<p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>	
					<div class="row">	
						<div class="col-md-12">
							<h3>You May Also Like</h3>
						</div>			
						<div class="col-md-4">
							<img src="{{url('public/images/coffee-563797_1280-390x205.jpg')}}" width="100%" style="margin-bottom:15px;" />
							<p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
						<div class="col-md-4">
							<img src="{{url('public/images/coffee-563797_1280-390x205.jpg')}}" width="100%" style="margin-bottom:15px;" />
							<p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
						<div class="col-md-4">
							<img src="{{url('public/images/coffee-563797_1280-390x205.jpg')}}" width="100%" style="margin-bottom:15px;" />
							<p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
				</div>        
			</div> -->
			
		

    <div class="wrapper">

        <div class="row" style="margin-top:30px;">
            <div class="col-md-8">
                <div class="col-md-12" style="padding:15px 15px 30px 0px;">             
                    <div class="col-md-12">
						<h1 class="text-uppercase">{{$data->title}}</h1>
                        {!! $data->description !!}
                    </div>  
                        
					      
            </div></div>



<!-- right section -->
			<div class="col-md-4">
				<div class="col-md-12" style="padding:15px;">
					<h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span style="padding:6px 12px; background:#2b99ca;">MORE NEWS</span></h3>
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
	</div>
@stop