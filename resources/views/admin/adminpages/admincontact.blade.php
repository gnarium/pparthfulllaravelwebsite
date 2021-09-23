@extends('layouts.app')
<body>
<header class="header fixed-top clearfix" style="background-color:#FDC716">
<!--logo start-->
<div class="brand1">
    <a href="/admin/adminindex" class="logo">
	<p>Parth Charitable Trust Admin Panel</p>
	</a>

		
</div>
<!--logo end-->
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="{{ asset ('admin/images/2.png')}}">
                <span class="username">Parth Charitable Trust</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="#"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
       
    </ul>
</div>
</header>

<section id="container" >
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
            <li>
                    <a class="active" href="/home">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/adminpages/addgallery">
                        <i class="fa fa-bullhorn"></i>
                        <span>Add Gallery </span>
                    </a>
                </li>
                <li>
                    <a href="/admin/adminpages/galleryinfo">
                        <i class="fa fa-bullhorn"></i>
                        <span>Gallery Details</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/adminpages/admincontact">
                        <i class="fa fa-bullhorn"></i>
                        <span>Connect Us</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/adminpages/adminmembershipinfo">
                        <i class="fa fa-bullhorn"></i>
                        <span>Membership Details</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
<div class="container">
      <table class="table container" style="width:700px;margin-left:15px;">
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th> Name</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th>Subject</th>
            <th>Message</th>
           </tr>
        </thead>
        @foreach($todoArr111 as $todo)
            <tbody>
                <tr>
                    <td data-breakpoints="xs">{{$todo->id}}</td>
                    <td><a href="{{$todo->name}}">{{$todo->name}}</a></td>
                    <td><a href="{{$todo->email}}">{{$todo->email}}</td>
                    <td><a href="{{$todo->phone}}">{{$todo->phone}}</td>
                    <td><a href="{{$todo->subject}}">{{$todo->subject}}</td>
                    <td><a href="{{$todo->msg}}">{{$todo->msg}}</td>
                </tr>
       </tbody>
        @endforeach
    </table>
    
    </div>
  </div>
</div>
</div>
</div>
</section>
</section>
