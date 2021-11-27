@extends('backend.master')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-10 title">
			<h1><i class="fa fa-bars"></i> Add New Page</h1>
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
			<form method="post" action="{{url('addpage')}}" >
		      {{csrf_field()}}
		      <input type="hidden" name="tbl" value="{{encrypt('pages')}}">
				<div class="col-sm-9">
					<div class="form-group">	
						<input type="text" name="title" class="form-control" id="post_title" placeholder="Enter title here"  required="" >
					</div>
					
			        <div class="form-group">    
                            <input type="text" name="slug" class="form-control" id="slug" placeholder="Enter slug here">                
                        </div>      
   			
					<div class="form-group">		
						<textarea class="form-control" name="description" rows="15"></textarea>
						<div class="col-sm-12 word-count">Word count: 0</div>
					</div>	
				</div>
				<div class="col-sm-3">
					<div class="content publish-box">
						<h4>Publish  <span class="pull-right"><i class="fa fa-chevron-down"></i></span></h4><hr>	
						<div class="form-group">
							<button class="btn btn-default" name="status" value="draft">Save Draft</button>
						</div>
						<p>Status: Draft <a href="#">Edit</a></p>
						<p>Visibility: Public <a href="#">Edit</a></p>
						<p>Publish: Immediately <a href="#">Edit</a></p>
						<div class="row">
							<div class="col-sm-12 main-button">
								<button class="btn btn-primary pull-right" name="status" value="publish">Publish</button>
							</div>
						</div>	
					</div>					
					
				</div>
			</form>
		</div>
	</div>
	</div>
</div>
<script src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
<script>
	CKEDITOR.replace('description', { "filebrowserBrowseUrl": "ckfinder\/ckfinder.html", "filebrowserImageBrowseUrl": "ckfinder\/ckfinder.html?type=Images", "filebrowserFlashBrowseUrl": "ckfinder\/ckfinder.html?type=Flash", "filebrowserUploadUrl": "ckfinder\/core\/connector\/php\/connector.php?command=QuickUpload&type=Files", "filebrowserImageUploadUrl": "ckfinder\/core\/connector\/php\/connector.php?command=QuickUpload&type=Images", "filebrowserFlashUploadUrl": "ckfinder\/core\/connector\/php\/connector.php?command=QuickUpload&type=Flash" });	
</script>
<!-- for selecting image  -->

@stop