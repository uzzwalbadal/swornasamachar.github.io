

	@extends('master')
	@section('title')
	<title>Contact Us| Newspaper</title>
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
						<h1>Contact Us</h1>
                    </div>  
					 @if (Session::has('message')) 
					 <div class="col-sm-12">    
        <div class="alert alert-success" role="alert">
          <script>   
            window.setTimeout(function() {
             $(".alert").fadeTo(500, 0).slideUp(0, function(){
              $(this).remove(); 
              });
            }, 2000);
          </script>   
          {{ Session('message')}}
        </div>
				</div>
      @endif
                        <div class="col-sm-6">
							<form method="post" action="{{url('sendmessage')}}">
								{{ csrf_field() }}
								<input type="hidden" name="tbl" value="{{encrypt('messages')}}"
								<div class="form-group">
									<label>Your Name</label>
									<input type="text" name="name" placeholder="Full Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'नाम'" class="common-input mb-20 form-control" required="" class="form-control">
								
								<div class="form-group">
									<label>Your Email</label>
									<input type="email" name="email"  placeholder="Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" class="common-input mb-20 form-control" required="" class="form-control">
								</div>
								<div class="form-group">
									<label>Your Phone</label>
									<input type="tel" name="phone" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" class="common-input mb-20 form-control" required=""class="form-control">
								</div>
								<div class="form-group">
									<label>Your Message</label>
									<textarea name="message" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required=""class="form-control" rows="5"></textarea>
								</div>
								<div class="form-group">
									<button class="btn btn-success">Send</button>
								</div>
							</form>
						</div>
				</div>
				</div>
		



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