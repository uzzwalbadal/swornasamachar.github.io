@extends('master') @section('content')

<div class="wrapper">
    @if(count($featured) > 0)
    <div class="row">
        @foreach($featured as $key => $f) @if($key == 0)
        <div class="col-md-6">
            <div class="relative">
                <a href="{{url('article')}}/{{$f->slug}}"><img src="{{url('public/posts')}}/{{$f->image}}" width="100%" />
            <span class="caption">{{$f->title}}</span></a>
            </div>
        </div>
        @endif @endforeach
        <div class="col-md-6">
            <div class="row">
                @foreach($featured as $key => $f) @if($key > 0 && $key
                < 5 ) <div class="col-md-6">
                    <div class="relative">
                        <a href="{{url('article')}}/{{$f->slug}}"><img src="{{url('public/posts')}}/{{$f->image}}" width="100%" />
            <span class="caption">{{$f->title}}</span></a>
                    </div>
            </div>
            @endif @endforeach
        </div>
        <div class="row" style="margin-top:30px;">
            @foreach($featured as $key => $f) @if($key > 4 && $key
            < 6) <div class="col-md-6">
                <div class="relative">
                    <a href="{{url('article')}}/{{$f->slug}}"><img src="{{url('public/posts')}}/{{$f->image}}" width="100%" />
            <span class="caption">{{$f->title}}</span></a>
                </div>
        </div>

        @endif @endforeach
    </div>
    @endif
</div>
</div>

<!-- //GENERAL NEWS -->
<div class="row" style="margin-top:30px;">
    <div class="col-md-8">
        <div class="col-md-12" style="border:1px solid #ccc; padding:15px 15px 30px 0px;">
            <div class="col-md-12">
                <h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742;">General News</span></h3>
            </div>
            <div class="col-md-6">
                @foreach ($general as $key=>$g) @if($key == 0)
                <a href="{{url('article')}}/{{$g->slug}}"><img src="{{url('public/posts')}}/{{$g->image}}" width="100%"  /></a>
                <h3><a href="{{url('article')}}/{{$g->title}}">{{$g->title}}</a></h3>
                <p align="justify">{!!substr($g->description,0,350)!!} <a href="{{url('article')}}/{{$g->slug}}"> Read more &raquo;</a>
                    <!-- <span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span></a> -->
                    @endif @endforeach
            </div>
            <div class="col-md-6">
                @foreach ($general as $key=>$g) @if($key > 0 && $key
                <6) <div class="row" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                    <div class="col-md-4">
                        <div class="row">
                            <a href="{{url('article')}}/{{$f->slug}}"><img src="{{url('public/posts')}}/{{$g->image}}" width="100%" /></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <a href="{{url('article')}}/{{$g->title}}">
                                <h4>{{$g->title}}</h4>
                            </a>
                        </div>
                    </div>
            </div>
            @endif @endforeach

        </div>
    </div>
</div>

<!-- HEALTH -->
<div class="col-md-12 image-gallery" style="border:1px solid #ccc; padding:15px 15px 30px 15px; margin-top:30px; margin-bottom:30px;">
	<h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742;">HEALTH</span></h3>
	<div class="flex">
	@foreach ($health ->take(5) as $h)
	
	<div class="side">
	<a href="{{url('article')}}/{{$h->slug}}">
		<img src="{{url('public/posts')}}/{{$h->image}}" /></div> </a>

@endforeach
</div>
<!-- END OF HEALTH -->



<!-- ENTERTAINMENT -->
<div class="row">
	<div class="col-md-6">
	<div class="col-md-12" style="border:1px solid #ccc; padding-bottom:30px;">
		<div class="col-md-12" style="border-bottom:1px solid #ccc; padding:20px 10px; margin-bottom:10px;">
		<h3 style="border-bottom:3px solid #b952c8; padding-bottom:5px;"><span style="padding:6px 12px; background:#b952c8;">ENTERTAINMENT</span></h3>
		@foreach ($entertainment as $key=>$e)
		@if($key == 0)
		<a href="{{url('article')}}/{{$e->slug}}"><img src="{{url('public/posts')}}/{{$e->image}}" width="100%"  /></a>
		<h3><a href="{{url('article')}}/{{$e->title}}">{{$e->title}}</a></h3>
		<p align="justify">{!!substr($e->description,0,350)!!} <a href="{{url('article')}}/{{$e->slug}}"> Read more &raquo;</a>
		<!-- <span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span></a> -->
	@endif
		@endforeach
		</div>
		@foreach ($entertainment as $key=>$e)
		@if($key > 0 && $key <5)
		<div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
			<div class="col-md-4">
				<div class="row fashion">
				<a href="{{url('article')}}/{{$e->slug}}"><img src="{{url('public/posts')}}/{{$e->image}}" width="100%"  /></a>
				</div>
			</div>
			<div class="col-md-8">
				<div class="row">
					<h4><a href="{{url('article')}}/{{$e->title}}">{{$e->title}}</a></h4>
				</div>
			</div>
		</div>
		@endif
		@endforeach
	</div>
	</div>

	<!-- END OF ENTERTAINMENT -->
	<!-- SPORTS -->

    <div class="row">
		<div class="col-md-6">
		<div class="col-md-12" style="border:1px solid #ccc; padding-bottom:30px;">
			<div class="col-md-12" style="border-bottom:1px solid #ccc; padding:20px 10px; margin-bottom:10px;">
			<h3 style="border-bottom:3px solid #b952c8; padding-bottom:5px;"><span style="padding:6px 12px; background:#b952c8;">SPORTS</span></h3>
			@foreach ($sports as $key=>$s)
			@if($key == 0)
			<a href="{{url('article')}}/{{$s->slug}}"><img src="{{url('public/posts')}}/{{$s->image}}" width="100%"  /></a>
			<h3><a href="{{url('article')}}/{{$s->title}}">{{$s->title}}</a></h3>
			<p align="justify">{!!substr($s->description,0,350)!!} <a href="{{url('article')}}/{{$s->slug}}"> Read more &raquo;</a>
			<!-- <span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span></a> -->
		@endif
			@endforeach
			</div>
			@foreach ($sports as $key=>$s)
			@if($key > 0 && $key <5)
			<div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
				<div class="col-md-4">
					<div class="row fashion">
					<a href="{{url('article')}}/{{$s->slug}}"><img src="{{url('public/posts')}}/{{$s->image}}" width="100%"  /></a>
					</div>
				</div>
				<div class="col-md-8">
					<div class="row">
						<h4><a href="{{url('article')}}/{{$s->title}}">{{$s->title}}</a></h4>
					</div>
				</div>
			</div>
		
			@endif
			@endforeach
		</div>
        <!-- ADS -->
<!-- ADS -->
<!-- <div class="col-md-4"> -->
@if($sidebarBottom)
    <div class="col-sm-12 sidebar-adv1"><a href="{{$sidebarBottom->url}}">
		<img src="{{url('public/advertisements')}}/{{$sidebarBottom->image}}" alt="{{$leaderboard->title}}" />
    </a></div>
		@endif
<!-- </div> -->
<!-- end of ads -->
	
<!-- end of ads -->
		</div>
       
	</div>
   
</div>

<!-- END OF SPORTS -->
<!-- TRAVEL -->
<div class="col-md-12 image-gallery" style="border:1px solid #ccc; padding:15px 15px 30px 15px; margin-top:30px; margin-bottom:30px;">
	<h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742;">TRAVEL</span></h3>
	<div class="flex">
	@foreach ($travel ->take(5) as $t)
	
	<div class="side">
	<a href="{{url('article')}}/{{$t->slug}}">
		<img src="{{url('public/posts')}}/{{$t->image}}" /></div> </a>

@endforeach
</div>
<!-- END OF TRAVEL -->
            
<!-- POLITICS -->
<div class="row" style="margin-top:30px;">
    <div class="col-md-8">
        <div class="col-md-12" style="border:1px solid #ccc; padding:15px 15px 30px 0px;">
            <div class="col-md-12">
                <h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742;">POLITICS</span></h3>
            </div>
            <div class="col-md-6">
                @foreach ($politics as $key=>$p) @if($key == 0)
                <a href="{{url('article')}}/{{$p->slug}}"><img src="{{url('public/posts')}}/{{$p->image}}" width="100%"  /></a>
                <h3><a href="{{url('article')}}/{{$p->title}}">{{$p->title}}</a></h3>
                <p align="justify">{!!substr($p->description,0,350)!!} <a href="{{url('article')}}/{{$p->slug}}"> Read more &raquo;</a>
                    <!-- <span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span></a> -->
                    @endif @endforeach
            </div>
            <div class="col-md-6">
                @foreach ($politics as $key=>$p) @if($key > 0 && $key<6) 
				<div class="row" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                    <div class="col-md-4">
                        <div class="row">
                            <a href="{{url('article')}}/{{$f->slug}}"><img src="{{url('public/posts')}}/{{$p->image}}" width="100%" /></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <a href="{{url('article')}}/{{$p->title}}">
                                <h4>{{$p->title}}</h4>
                            </a>
                        </div>
                    </div>
            </div>
            @endif @endforeach

        </div>
    </div>
</div>
<!-- END OF POLITICS -->

<!-- INTERNATIONAL NEWS -->
<div class="col-md-4">
    <div class="col-md-12" style="border:1px solid #ccc; padding:15px;">
        <h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span style="padding:6px 12px; background:#2b99ca;">INTERNATIONAL NEWS</span></h3>
		@foreach ($travel ->take(5) as $t)
		<div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
            <div class="col-md-4">
                <div class="row">
				<a href="{{url('article')}}/{{$t->slug}}"><img src="{{url('public/posts')}}/{{$t->image}}" width="100%"  /></a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row" style="padding-left:10px;">
                    <h4><a href="{{url('article')}}/{{$t->title}}">{{$t->title}}</a></h4>
                </div>
            </div>
        </div>
       @endforeach
    </div>

	<!-- END OF INTERNATIONAL NEWS -->
<!-- ADS -->

		@if($sidebarTop)
    <p class="sidebar-adv"><a href="{{$sidebarTop->url}}">
		<img src="{{url('public/advertisements')}}/{{$sidebarTop->image}}" alt="{{$leaderboard->title}}" />
    </a></p>
		@endif
	
<!-- end of ads -->
</div>
</div>
@stop