@extends('backend.master')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-10 title">
			<h1><i class="fa fa-bars"></i> Edit Advertisement</h1>
		</div>
    <div class="col-sm-12">
       @if (Session::has('message'))     
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
      @endif
    </div>   
	<div class="col-sm-12">
		<div class="row">
			<form method="post" action="{{url('updateadv')}}/{{$data->aid}}" enctype="multipart/form-data">
		      {{csrf_field()}}
		      <input type="hidden" name="tbl" value="{{encrypt('advertisements')}}"/>
		      <input type="hidden" name="aid" value="{{$data->aid}}"/>		      
				<div class="col-sm-12">
					<div class="form-group">	
						<input type="text" name="title" class="form-control" value="{{$data->title}}" placeholder="Enter title here"  required="" >
					</div>			
			        <div class="form-group">  
			          <input type="text" name="url" value="{{$data->url}}"  class="form-control" placeholder="Enter url here"  required="" >       
			        </div>    			
					<div class="form-group content featured-image">
						<h4>Advertisement Image <span class="pull-right"><i class="fa fa-chevron-down"></i></span></h4><hr>
						@if($data->image != '') 
					          <p><img id="output" style="max-width: 100%"  src="{{asset('public/advertisements')}}/{{$data->image}}" /></p>        
					          <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" style="display: none;" ></p>
					          <p><label for="file" style="cursor: pointer;">Replace Advertisement Image</label></p>  
				          @else
					          	<p><img id="output" style="max-width: 100%" /></p>        
					            <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" style="display: none;" ></p>
					          	<p><label for="file" style="cursor: pointer;">Upload Image</label></p>  
				          @endif
					</div>
					<div class="form-group">
						<label>Location</label>
						<select name="location" class="form-control">
							<option>{{$data->location}}</option>
							@if($data->location != 'leaderboard')
								<option>leaderboard</option>
							@endif
							@if($data->location != 'sidebar-top')
								<option>sidebar-top</option>
							@endif
							@if($data->location != 'sidebar-bottom')
								<option>sidebar-bottom</option>
							@endif
						</select>						
					</div>
					<div class="form-group">
						<label>Status</label>
						<select name="status" class="form-control">
							<option>{{$data->status}}</option>
							@if($data->status == 'hide')
								<option>display</option>
							@else
								<option>hide</option>
							@endif
						</select>						
					</div>
					<div class="form-group">
						<button class="btn btn-primary">Update Advertisement</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	</div>
</div>
<!-- for selecting image  -->
<script>
var loadFile = function(event) {
  var image = document.getElementById('output');
  image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
@stop