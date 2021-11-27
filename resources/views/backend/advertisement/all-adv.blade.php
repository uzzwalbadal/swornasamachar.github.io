@extends('backend.master')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 title">
    <h1><i class="fa fa-bars"></i> All Advertisement <a href="{{asset('add-adv')}}" 
    class="btn btn-sm btn-default">Add New</a></h1>
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
      

 

    
      <form method="post" action="{{asset('multipledelete')}}">
      <div class="filter-div">
      {{ csrf_field() }}
        <input type="hidden" name="tbl" value="{{encrypt('advertisements')}}">
        <input type="hidden" name="tblid" value="{{encrypt('aid')}}">
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
    
    
    <div class="col-sm-12">
      <div class="content">
        <table class="table table-striped" id="myTable">
          <thead>
            <tr>
              <th><input type="checkbox" id="select-all"> Title</th>
              
              <th>Link</th>
              <th >Location</th>
              <th>Image</th>
              <th>Status</th>
              <th> Date</th>
             
              
            </tr>
          </thead>
          <tbody>
              @if(count($data)> 0)
              @foreach($data as $d)
              <tr>
                <td>
                  <input type="checkbox" name="select-data[]" value="{{$d->aid}}"> 
                  <a href="{{asset('editadv')}}/{{$d->aid}}" >{{$d->title}}</a>
                </td>
                
                <td >{{$d->url}}</td>
                            
                <td >{{$d->location}}</td>  
                <td ><img src="{{url('public/advertisements')}}/{{$d->image}}" width="200"></td> 
           
                <td >{{$d->status}}</td>  
                <td >{{$d->created_at}}</td>       
              </tr> 
              @endforeach
              @else
              <tr>
                <td colspan="4">No Data found!</td>
              </tr>
              @endif
            </tbody>
        </table>
      </div>
    </div>

 
    
      
      
    </div>
  </div>
</div>

@stop

