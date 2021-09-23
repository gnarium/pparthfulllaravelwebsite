@extends('layouts.app')


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


<section id="container">
<!--header start-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
            <li>
                    <a class="active" href="/admin/adminindex">
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
</section>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- //market-->
		<div class="market-updates">
			<div class="clearfix"> </div>
		</div>	
		<!-- //market-->
		
	<!--//agileinfo-grap-->

				</div>
			</div>
		</div>
		<div class="row">
        
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Gallery
                        </header>
                    <div class="panel-body">
                        <div class=" form">
                            <form class="cmxform form-horizontal" method="post" action="/admin/adminpages/gallery" novalidate="novalidate" enctype="multipart/form-data">
                                {{ csrf_field()}}
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-3">Image Title (required)</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="imagename" minlength="2" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-3">Category Name(required)</label>
                                        <div class="col-lg-6">
                                        <select class="form-control" id="exampleFormControlSelect1" name="categoryname" >
                                                      <option>All</option>
                                                      <option>Food Distribution</option>
                                                      <option>Empowering Women Socially and Economically</option>
                                                      <option>Child Development And Their Education</option>
                                                      <option>Fitness Awareness : Daily Yoga</option>
                                                      <option>Tree Plantation</option>
                                                      <option>Helping Animals</option>
                                                      <option>Healthcare</option>
                                                      <option>Sanitization</option>
                                                      <option>Drinking Water</option>
                                                    </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-3">Alt Text (required)</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="cemail" type="text" name="imagealt" required="">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-3">Title Text (required)</label>
                                        <div class="col-lg-6">
                                        <input class="form-control " id="cemail" type="text" name="imagetitle" required="">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-3">Gallery Image(required)</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="cemail" type="file" accept=".png" name="galleryimage" required="">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                            <button class="btn btn-default" type="button">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
            
</section>
 </body>
</html>
