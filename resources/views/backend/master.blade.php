<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>ADMIN DASHBOARD | WEBSITE NAME</title>
	<link rel="stylesheet" type="text/css" href="{{url('public/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('public/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('public/css/ionicons.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('public/css/menu.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('public/css/adminstyle.css')}}">	
  <script type="text/javascript" src="{{url('public/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/js/app.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/js/script.js')}}"></script>
</head>
<body>

<div class="sidebar">
	<ul class="sidebar-menu">
		<li><a href="{{url('patrika-admin')}}" class="dashboard"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
		<li class="treeview">
            <a href="#">
              <i class="fa fa-bookmark-o"></i> <span>Posts</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{asset('all-posts')}}"><i class="fa fa-eye"></i>All Posts</a></li>
              <li><a href="{{url('add-post')}}"><i class="fa fa-plus-circle"></i>Add Posts</a></li>
              <li><a href="{{url('viewcategory')}}"><i class="fa fa-plus-circle"></i>Categories</a></li>
            </ul>
        </li>
        
        <li class="treeview">
            <a href="#">
              <i class="fa fa-file"></i> <span>Pages</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="{{asset('all-pages')}}"><i class="fa fa-eye"></i>All Pages</a></li>
              <li><a href="{{asset('add-page')}}"><i class="fa fa-plus-circle"></i>Add Pages</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
              <i class="fa fa-image"></i> <span>Advertisements</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="{{asset('all-advs')}}"><i class="fa fa-eye"></i>All Advs</a></li>
              <li><a href="{{asset('add-adv')}}"><i class="fa fa-plus-circle"></i>Add Advs</a></li>
            </ul>
        </li>
       
       
        <li class="treeview">
            <a href="{{url('messages')}}">
              <i class="fa fa-envelope"></i> <span>Messages</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            
        </li>
        <!-- <li class="treeview">
            <a href="#">
              <i class="fa fa-user-plus"></i> <span>Users</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-eye"></i>All Users</a></li>
              <li><a href="#"><i class="fa fa-plus-circle"></i>Add Users</a></li>
            </ul>
        </li> -->
        <li class="treeview">
            <a href="#">
              <i class="fa fa-address-book"></i> <span>{{Auth::user()->name}}</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
             <ul class="treeview-menu">
              <li><a href="{{asset('register')}}"><i class="fa fa-plus"></i>Add New User</a></li>
            </ul>
             <ul class="treeview-menu">
              <li><a href="{{asset('logout')}}"><i class="fa fa-power-off"></i>Log Out</a></li>
            </ul>
        </li>		
	</ul>
</div>




@yield('content')


<footer>
	<div class="col-sm-6">
		Copyright &copy; 2018 <a href="http://www.dammerinvestmentcompany.com">dammerinvestmentcompany.com</a> All rights reserved. 
	</div>
	<div class="col-sm-6">
		<span class="pull-right">Version 2.2.3</span>
	</div>
</footer>


</body>
</html>