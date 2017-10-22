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
</head>
<style>
body{
	background:url(images/back1.jpg);
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
</style>
<body>
<div class="container-fluid" style="background:rgba(0,0,0,0.4);">

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          
                 
    <div class="row">  
    
    	<!-- side naviagtion start -->
            
    	<div class="col-md-2 col-lg-2" style="margin-bottom:56px">
        <br>
        	<img src="images/logo.png" class="img-responsive" width="500" height="500"/>
            
            <div class="nav">
            
            <ul class="nav nav-pills">
                
               	<li class="active"><a href="welcome.php">DashBoard</a></li>
                
                <li><a href="../index.php" target="_blank">Visit to Website</a></li>
                <li><a href="files.php">Upload your files</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Qualification</a>
                
                
                <ul class="dropdown-menu" style="background:rgba(0,0,0,0.95);">      
               <li><a href="edu.php" style="color:#fff;">Education Qualification</a></li><br>
               <li><a href="pro.php" style="color:#fff;">Professional Qualification</a></li>
     			</ul>         
                
                </li>
                
                <li><a href="visit.php">Industrial Visits</a></li>
                <li><a href="training.php">Industrial Trainings</a></li>
                <li><a href="achievement.php">Achievements</a></li>
                
                <li><a href="eca.php">Curricular Activities</a></li>
                <li><a href="certi.php">Certifications</a></li>
                
                <li><a href="logout.php">Logout</a></li>
                 <br><br>
            </ul>
          
            </div>
        </div>
        
        
        <!-- side naviagtion end -->
    
  		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
   		
             <!-- header start -->
        
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                    
                        <div class="company">
                            <a href="dashboard.php" class="comp"><h1><marquee><?php
							include('database.php');
							$email = $_SESSION['email'];
		$rs= mysql_query("select * from signup_signin where email_id='$email'");
	while ($row = mysql_fetch_array($rs)) {
		
	if(mysql_num_rows($rs)<1)
	{
		echo'<font color="#FF0000">No user logged in</font>';
	}
	else{
		echo'Welcome to 3S. Thank you for registring with us ';
		if($row['gender']='Male')
		{
			echo'Mr. ';
		}
		else
		{
			echo'Mrs. ';	
		}
		echo ucwords($row['first_name'].' '.$row['last_name']);
	}
	}
        ?></marquee></h1></a>
                        
                        </div>
                     
                    </div>
                     
                </div>
        
             <!-- header end -->
                
                <br>  <br>
              
              <div class="row">
                
                <div class="col-md-4 col-lg-4">
                  <!-- calander and date widget -->
                    
                     <iframe src=http://widgetscode.com/wc/nature/all?skin=blk1 style='width:320px;height:420px;margin:0;'frameborder=0></iframe>
                     
                     
                  <!-- calander and date widget -->
                     
                </div>
                
                            
                 <div class="col-md-4 col-lg-4">
               
               <script type="text/javascript" src="http://100widgets.com/js_data.php?id=249"></script>
            
                          
               </div>
               
                <div class="col-md-4 col-lg-4">
               <script type="text/javascript" src="http://100widgets.com/js_data.php?id=168"></script>
               
                </div>
                
              </div>
        	
            
            
                
        </div>  
    
    </div>
            
        
        
        
		</div>

	</div>

	
</div>
</body>
</html>