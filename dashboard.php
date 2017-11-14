<?php
session_start();
if(!isset($_SESSION['email']))
{
header("location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Social Networking Photo Sharing Service | Dashboard</title>

<link rel="icon" href="images/logo.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Bootstrap Files Start -->

	<!-- Offline Files -->
    
    <!-- Css Files -->
    
    <link rel="stylesheet" type="text/css" href="bootstarp/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstarp/css/bootstrap.min.css">
    
    <!-- fonts Files -->
    
    <link rel="stylesheet" type="text/css" href="bootstarp/fonts/glyphicons-halflings-regular.svg">
    <link rel="stylesheet" type="text/css" href="bootstarp/fonts/glyphicons-halflings-regular.eot">
    <link rel="stylesheet" type="text/css" href="bootstarp/fonts/glyphicons-halflings-regular.ttf">
    <link rel="stylesheet" type="text/css" href="bootstarp/fonts/glyphicons-halflings-regular.woff">
    <link rel="stylesheet" type="text/css" href="bootstarp/fonts/glyphicons-halflings-regular.woff2">
    
    <!-- Js Files -->
    
    <script type="text/javascript" src="bootstarp/js/bootstrap.js">
	
	</script>
	<script type="text/javascript" src="bootstarp/js/bootstrap.min.js"></script>
    
    <!-- Offline Files -->
    
<!-- Bootstrap Files End -->
<script src="JQuery/jquery.min.js"></script>
<script src="JQuery/jquery.transit.min.js"></script>

</head>
<style>
body{
	background:url(images/bck1.jpg);
}
.head{
	text-align:right;
	text-transform:uppercase;
	padding:20px;
}
li a:hover{
	background:rgba(0,0,0,0.2) !important;
}
.active a{
	background-color:rgba(0,0,0,0.4) !important;
	border-style:inset !important;
}
.active a:hover{
	background-color:rgba(0,0,0,0.6) !important;
	text-decoration:underline !important;
	border-style:outset !important;
}
a:link{
	text-decoration:none;
	color:#FFFFFF;
	margin-right:15px;
}
a:visited{
	text-decoration:none;
	color:#FFFFFF;
	margin-right:15px;
}
.company{
	color:#FFF;
	margin-left:-16px;
}
.comp:hover{
		color: #26aa56;
		cursor:pointer;
}
@keyframes jump {
  0% {
    transform: translateY(0px);
  }
  50% {
	  transform: translateY(-400px);
  }
  100% {
	  transform: translateY(-2px);
  }
}
@keyframes jump1 {
  0% {
    transform: translateY(0px);
  }
  50% {
	  transform: translateY(-350px);
  }
  100% {
	  transform: translateY(-2px);
  }
}
@keyframes jump2 {
  0% {
    transform: translateY(0px);
  }
  50% {
	  transform: translateY(-300px);
  }
  100% {
	  transform: translateY(-2px);
  }
}
@keyframes jump3 {
  0% {
    transform: translateY(0px);
  }
  50% {
	  transform: translateY(-250px);
  }
  100% {
	  transform: translateY(-2px);
  }
}
@keyframes jump4 {
  0% {
    transform: translateY(0px);
  }
  50% {
	  transform: translateY(-200px);
  }
  100% {
	  transform: translateY(-2px);
  }
}
@keyframes bounce {
  0% {
    transform: translateX(0px) translateY(0px);
  }
  15%{
	  transform: translateX(90px) translateY(-100px);
  }
  30% {
	  transform: translateX(180px) translateY(-2px);
  }
  45% {
	  transform: translateX(270px) translateY(-100px);
  }
  60% {
	  transform: translateX(360px) translateY(-2px);
  }
  100%{
	  transform: translateX(0px) translateY(-2px);
  }
  }
@keyframes bounce1 {
  0% {
    transform: translateX(0px) translateY(0px);
  }
  15%{
	  transform: translateX(-90px) translateY(-100px);
  }
  30% {
	  transform: translateX(-180px) translateY(-2px);
  }
  45% {
	  transform: translateX(-270px) translateY(-100px);
  }
  60% {
	  transform: translateX(-360px) translateY(-2px);
  }
  100%{
	  transform: translateX(0px) translateY(-2px);
  }
  }
</style>
<body>
<div class="container-fluid" style="background:rgba(0,0,0,0.4);">

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          
                 
    <div class="row">  
    
    	<!-- side naviagtion start -->
            
    	<div class="col-md-2 col-lg-2" style="margin-bottom:162px">
        <br>
        	<img src="images/logo.png" class="img-responsive" width="500" height="500"/>
            
            <div class="nav">
            
            <ul class="nav nav-pills">
                <br><br>
               	<li class="active"><a href="dashboard.php">DashBoard</a></li>
                
                <li><a href="">Upload Your post</a></li>
                <li><a href="">Like the post</a></li>
                <li><a href="">Commment on post</a></li>
                
                <li><a href="">Personal Information</a></li>
                
                <li><a href="logout.php">Logout</a></li>
                 
            </ul>
          
            </div>
        </div>
        
        
        <!-- side naviagtion end -->
    
  		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
   		
             <!-- header start -->
        
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                    
                        <div class="company">
                            <a href="dashboard.php" class="comp"><h1><marquee>Welcome to 3S</marquee></h1></a>
                        
                        </div>
                     
                    </div>
                     
                </div>
        
             <!-- header end -->
                
                <br>  <br>
              
              <div class="row">
                
                <div class="col-md-3 col-lg-3">
                  
                     
                </div>
                
                            
               
                <div class="col-md-4 col-lg-4" style="margin-top:300px">
               
               <div class="row">

			  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
              <div style="background-color:#0FF; width:20px; height:20px; margin-top:auto; border-radius:10px;transform:translateX(0px) translateY(0px); animation:bounce1 3s infinite  ease-in-out;">
              </div>
              
              </div>
                
              <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
              
                <div style="background-color:blue; width:20px; height:20px; margin-top:auto; border-radius:10px;transform:translateY(-200px); animation:jump4 1s infinite  ease-in-out;">
              </div>
              
              </div>
           <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
             
            <div style="background-color:pink; width:20px; height:20px; margin-top:auto; border-radius:10px;transform:translateY(-250px); animation:jump3 2s infinite  ease-in-out;">
              </div>
              
              
              </div>
             <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
              <div style="background-color:green; width:20px; height:20px; margin-top:auto; border-radius:10px;transform:translateY(-300px); animation:jump2 3s infinite  ease-in-out;">
              </div>
              
              </div>
              <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
              
              <div style="background-color:yellow; width:20px; height:20px; margin-top:auto; border-radius:10px; transform:translateY(-350px); animation:jump1 2s infinite  ease-in-out;">
              </div>
              
              </div>
              <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
              
              <div style="background-color:red; width:20px; height:20px; margin-top:auto; border-radius:10px; transform:translateY(-400px); animation:jump 1s infinite  ease-in-out;">
              </div>
              
              </div>
          </div>
          
            
               
                </div>
                <div class="col-md-5 col-lg-5">
               
                          
               </div>
               
              </div>
        	
            
            
                
        </div>  
    
    </div>
            
        
        
        
		</div>

	</div>

	
</div>
</body>
</html>