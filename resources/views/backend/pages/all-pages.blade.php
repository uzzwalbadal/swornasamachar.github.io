@extends('backend.master')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 title">
    <h1><i class="fa fa-bars"></i> All Pages <a href="{{asset('add-page')}}" class="btn btn-sm btn-default">Add New</a></h1>
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
    <div class="search-div">
      <div class="col-sm-9">
      All({{$allposts}}) | <a href="#">Published ({{$published}})</a>
      </div>

      <div class="col-sm-3">
        <input type="text" id="search" class="form-control" placeholder="Search Posts">
      </div>
    </div>  

    <div class="clearfix"></div>

    
      <form method="post" action="{{asset('multipledelete')}}">
      <div class="filter-div">
      {{ csrf_field() }}
        <input type="hidden" name="tbl" value="{{encrypt('pages')}}">
        <input type="hidden" name="tblid" value="{{encrypt('pageid')}}">
        <div class="col-sm-2">
          <select name="bulk-action" class="form-control">
            <option value="0">Bulk Action</option>
            <option value="1">Move to Trash</option>
          </select>
        </div>

        <div class="col-sm-1">
          <div class="row">
            <button class="btn btn-default">Apply</button>
          </div>  
        </div>
      <!-- </form> -->
    
    
          
      <!-- </form>  -->
      <div class="col-sm-3">
        
      </div>
    </div>  
    
    <div class="col-sm-12">
      <div class="content">
        <table class="table table-striped" id="myTable">
          <thead>
            <tr>
              <th width="50%"><input type="checkbox" id="select-all"> Title</th>
              
              <th width="15%">Status</th>
              
              <th width="10%">Date</th>
            </tr>
          </thead>
          <tbody>
              @if(count($posts)> 0)
              @foreach($posts as $post)
              <tr>
                <td>
                  <input type="checkbox" name="select-data[]" value="{{$post->pageid}}"> 
                  <a href="{{asset('editpage')}}/{{$post->pageid}}" >{{$post->title}}</a>
                </td>
                
                <td >{{$post->status}}</td>
                            
                <td >{{$post->created_at}}</td>              
              </tr> 
              @endforeach
              @else
              <tr>
                <td colspan="4">No Pages found!</td>
              </tr>
              @endif
            </tbody>
        </table>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="filter-div">
      <form method="post">
        <div class="col-sm-2">
          <select name="action" class="form-control">
            <option>Bulk Action</option>
            <option>Move to Trash</option>
          </select>
        </div>

        <div class="col-sm-7">
          <div class="row">
            <button class="btn btn-default">Apply</button>
          </div>  
        </div>
      </form>
    
      
      
    </div>
  </div>
</div>

@stop

