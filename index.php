<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Social Networking Photo Sharing Service</title>

<link rel="icon" href="images/logo.png" type="image/x-icon">

<!-- Bootstrap files Start -->

<link rel="stylesheet" type="text/css" href="bootstarp/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="bootstarp/css/bootstrap.min.css" />
<script src="bootstarp/js/bootstrap.js"></script>
<script src="bootstarp/js/bootstrap.min.js"></script>

<!-- Bootstrap files end -->

<!-- CSS files Start -->

<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/color.css" />

<!-- CSS files end  -->

<!-- js files Start -->

<script>
function loginvalidate(){
	var email = document.getElementById("emailid").value;
	var pass = document.getElementById("pswrd").value;
	
	if(email == ''){
		alert("You haven't entered your Email ID");
	}
	else if(pass == ''){
		alert("You haven't entered your Password");
	}
	else{
		var b = confirm("Are you sure you want to Login?");
		if(b==1)
		{
			alert("Successfully Logged in....");
		}
		else
		{
			alert("Login Failed!!!..");
		}	
	}
}
function signupvalidate(){
	var email = document.getElementById("emailid").value;
	var pass = document.getElementById("pswrd").value;
	
	if(email == ''){
		alert("You haven't entered your Email ID");
	}
	else if(pass == ''){
		alert("You haven't entered your Password");
	}
	else{
		var b = confirm("Are you sure you want to Login?");
		if(b==1)
		{
			alert("Successfully Logged in....");
		}
		else
		{
			alert("Login Failed!!!..");
		}	
	}
}
</script>

<!-- js files end -->


<!-- Start Slider -->
<link rel="stylesheet" type="text/css" href="slider/engine1/style.css" />
<script type="text/javascript" src="slider/engine1/jquery.js"></script>
<!-- End Slider -->


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body style="background:url(images/back2.jpg) no-repeat fixed; background-size:cover" >
<?php 

include ("database.php");

if(isset($_POST['submit']))
{
	$email=$_POST['email'];

	$pass=$_POST['pass'];

	$rs= mysql_query("select * from sign_up/in where email_id='$email' and password='$pass'");
	while ($row = mysql_fetch_array($rs)) {
		
	if(mysql_num_rows($rs)<1)
	{
		echo'<h4><p align="center" class="danger">Error while Signing in.</p></h4><br><h5><p align="center" class="danger">Reason may be deatils not found, Please try Signing up or Contact to Administrator.</p></h5>';
	}
	else{
		$_SESSION['email']=$email;
		$_SESSION['name']= $row['first_name'];
		
	}
	
	
	}
	
	if(isset($_SESSION['email'])&&isset($_SESSION['name']))
	{
		header("location:dashboard.php");
	}
	else
	{	
		header("location:index.php");
	}
	
}


?>
<div class="container-fluid">

	<!-- main start -->
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        
        <!-- header start -->	
           
            <div class="row" id="header">
            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	
                    <div class="row" style="margin:10px 0px 10px 0px;" >
        			<div class="nav navbar-fixed-top">
        			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            		</div> 
        	
            		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="margin-top:5px;">
                    
                    <a href="index.php" style="text-decoration:none; color:#fff;"><font size="+2">3<b class="color">S</b></font></a>
           		 	</div> 
        
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    </div> 
                
                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">                    
                    
                    <ul class="nav nav-pills">
                    
                    <li><a href="index.php" style="color:#FFF;">Home</a></li>
                    <li><a href="#about_section" style="color:#FFF;">About</a></li>
                    <li><a href="#team_section" style="color:#FFF;">Team</a></li>
                    <li><a href="#feature_section" style="color:#FFF;">Features</a></li>
                    <li><a href="#" id="modal" style="text-decoration:none; color:#FFF;">Login</a></li>
                    
                    
                    
                    </ul>
                    
                       <!-- The Modal -->
                        <div id="myModal" class="modal">
                        
                          <!-- Modal content -->
                          <div class="modal-content">
                            <span class="close">&times;</span>
                              
                            <div class="modal-body">                
                           <div id="login">  
                           
                            
							
                            <center> <img class="img-responsive" src="images/logo.png" /></center>
                
                <center>
               
               	<h1><font face="Times New Roman, Times, serif">Login</font></h1></center>
        <form name="login" method="post" action="">
         <div class="form-group">
        <input type="email" class="form-control" placeholder="abc@xyz.com" name="email" id="emailid">
        </div>
             <div class="form-group">
          <input type="password" placeholder="********" class="form-control" name="pass" id="pswrd">
            </div>
            
        <div class="form-group">
             <center><button type="submit" name="submit" id="sub" class="button btn" onClick="loginvalidate()"><span class="glyphicon glyphicon-log-in">&nbsp;Login</span></button>
             &nbsp;&nbsp;&nbsp;<button type="reset" name="reset" id="res" class="button btn" ><span class="glyphicon glyphicon-remove-sign">&nbsp;Reset</span></button>
             </center>
             </div>
        </form>
        					</div>            
                           
                           <!-- Footer start -->
                            <div class="modal-footer">
                              <center><h6>Not an existing user? <a href="#" onclick="on()">Sign Up</a> here</h6></center>
                            </div>
                           <!-- Footer Ends --> 
                            
                          </div>
                        <!-- Modal Body ends -->
                        
                        </div>
                        <!-- Modal Content ends -->
                        
<div id="overlay" ondblclick="off()">
  <div id="overlaytext">
 
      <br>
     <center> <img src="images/logo.png" class="img-responsive" width="138" height="138"/></center>
     <br>
     
	  <form name="signup" method="post" action="" enctype="multipart/form-data">
  	  
        <div class="form-group">
        <label class="label">First Name:</label>
        <input type ="text" class="form-control" placeholder="First Name" name="fn" id="fn" />      
        </div>
        
        <div class="form-group">
        <label class="label">Last Name:</label>
        <input type ="text" class="form-control" placeholder="Last name" name="ln" id="ln" />      
        </div>
        
        <div class="form-group">
        <label class="label">Photo:</label>
        <input type ="file" class="form-control" placeholder="Browse" name="pic" id="pic" />      
        </div>
        
        <div class="form-group">
        <label class="label">Email ID:</label>
        <input type="email" class="form-control" placeholder="abc@xyz.com" name="emailid" id="emailid">
        </div>
        
        <div class="form-group">
        <label class="label">Password:</label>
        <input type="password" class="form-control" placeholder="First Name" name="pass" id="pass" />      
        </div>
        
        <div class="form-group">
        <label class="label">Contact Number:</label>
        <input type ="text" class="form-control" placeholder="Last name" name="cn" id="cn"/>      
        </div>
        
        <div class="form-group">
        <label class="label">Address:</label>
        <input type="text" class="form-control" placeholder="Browse" name="add" id="add"/>      
        </div>
  		
     
      
      <div class="form-group">
      <input type ="submit">
      </div>  
  </form>
  
  </div>
</div>

<script>
function on() {
    document.getElementById("overlay").style.display = "block";
}

function off() {
    document.getElementById("overlay").style.display = "none";
}
</script>

				        <script>
						<!-- Modal Start -->

// Get the modal
    var modal = document.getElementById('myModal');
                        
  // Get the button that opens the modal
    var btn = document.getElementById("modal");
                        
  // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
                        
  // When the user clicks the button, open the modal 
    btn.onclick = function() {
       modal.style.display = "block";
    }
                        
  // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
                        
  // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

<!-- Modal end -->
						</script>              
                       
                    
                   		 </div>
                   		 <!-- The Modal end -->
                    </div>
                    
                </div>
                    
                </div>
           		</div>
            
  <!--headers one division will end in slider here-->
            
        <!-- header ends -->
        
        
        <!-- slider start -->	 
        
			<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="slider/data1/images/use_3s_to_promote_your_business.jpg" alt="Use 3S to Promote your Business" title="Use 3S to Promote your Business" id="wows1_0"/></li>
		<li><img src="slider/data1/images/use_3s_to_stay_in_touch.jpg" alt="Use 3S to stay in touch" title="Use 3S to stay in touch" id="wows1_1"/></li>
		<li><img src="slider/data1/images/use_3s_to_share_your_posts_on_all_the_social_networks.jpg" alt="Use 3S to share your posts on all the Social Networks" title="Use 3S to share your posts on all the Social Networks" id="wows1_2"/></li>
		<li><img src="slider/data1/images/use_3s_to_stay_connected_with_all_the_social_networks_at_one_time.jpg" alt="wow slider" title="Use 3S to stay connected with all the Social Networks at one time" id="wows1_3"/></li>
		<li><img src="slider/data1/images/use_3s_to_share_your_opinions_with_others.jpg" alt="Use 3S to share your opinions with others" title="Use 3S to share your opinions with others" id="wows1_4"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="Use 3S to Promote your Business"><span><img src="slider/data1/tooltips/use_3s_to_promote_your_business.jpg" alt="Use 3S to Promote your Business"/>1</span></a>
		<a href="#" title="Use 3S to stay in touch"><span><img src="slider/data1/tooltips/use_3s_to_stay_in_touch.jpg" alt="Use 3S to stay in touch"/>2</span></a>
		<a href="#" title="Use 3S to share your posts on all the Social Networks"><span><img src="slider/data1/tooltips/use_3s_to_share_your_posts_on_all_the_social_networks.jpg" alt="Use 3S to share your posts on all the Social Networks"/>3</span></a>
		<a href="#" title="Use 3S to stay connected with all the Social Networks at one time"><span><img src="slider/data1/tooltips/use_3s_to_stay_connected_with_all_the_social_networks_at_one_time.jpg" alt="Use 3S to stay connected with all the Social Networks at one time"/>4</span></a>
		<a href="#" title="Use 3S to share your opinions with others"><span><img src="slider/data1/tooltips/use_3s_to_share_your_opinions_with_others.jpg" alt="Use 3S to share your opinions with others"/>5</span></a>
	</div></div>
</div>	
<script type="text/javascript" src="slider/engine1/wowslider.js"></script>
<script type="text/javascript" src="slider/engine1/script.js"></script>
  	</div> <!--headers one division ends here-->
        
        <!-- slider ends -->	
        
        
        <!-- logo animation start -->	 
        
        <div class="row" id="animate_logo_background">
        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 			<div class="row" style="margin:70px 0px 70px 0px;">       		<center>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <div class="flap" style="background-color:#3B5998; width:85px; height:85px; margin-top:auto; transform:rotate(30deg); animation:roll 5s infinite ">
                 <div class="flap1" style="background-color:#3B5998; width:85px; height:85px; margin-top:auto; transform:rotate(30deg); animation:roll 5s infinite ">
                 <div class="flap2" style="margin-top:auto; transform:rotate(30deg); animation:roll 5s infinite "> <img src="images/fb.png" width="85" height="85"/>
               
                </div></div></div>
                
                </div>
                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <div class="flap" style="background-color:#55ACEE; width:85px; height:84px; margin-top:auto; transform:rotate(30deg); animation:roll1 4s infinite ">
                
                <div class="flap1" style="background-color:#55ACEE; width:85px; height:84px; margin-top:auto; transform:rotate(30deg); animation:roll1 4s infinite ">
                
                <div class="flap2" style="margin-top:auto; transform:rotate(30deg); animation:roll1 4s infinite "> <img src="images/twitter.png" width="85" height="84"/>
                </div></div></div>
                
                </div>
                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <div class="flap" style="background-color:#dd4b39; width:85px; height:85px; margin-top:auto; transform:rotate(30deg); animation:roll 3s infinite ">
                
                <div class="flap1" style="background-color:#dd4b39; width:85px; height:85px; margin-top:auto; transform:rotate(30deg); animation:roll 3s infinite ">
                
                <div class="flap2" style="margin-top:auto; transform:rotate(30deg); animation:roll 3s infinite "> <img src="images/google+.png" width="85" height="85"/>
                </div></div></div>
                
                </div>
                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <div class="flap" style="background-color:#007bb5; width:85px; height:85px; margin-top:auto; transform:rotate(30deg); animation:roll1 3s infinite ">
                
                <div class="flap1" style="background-color:#007bb5; width:85px; height:85px; margin-top:auto; transform:rotate(30deg); animation:roll1 3s infinite ">
                
                <div class="flap2" style="margin-top:auto; transform:rotate(30deg); animation:roll1 3s infinite "> <img src="images/linkedin.png" width="85" height="85"/>
                </div></div></div>
                
                </div>
                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <div class="flap" style="background-color:#125688; width:85px; height:85px; margin-top:auto; transform:rotate(30deg); animation:roll 4s infinite ">
                
                <div class="flap1" style="background-color:#125688; width:85px; height:85px; margin-top:auto; transform:rotate(30deg); animation:roll 4s infinite ">
                
                <div class="flap2" style="margin-top:auto; transform:rotate(30deg); animation:roll 4s infinite "><img src="images/insta.png" width="85" height="85"/>
                </div></div></div>
                
                </div>
                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <div class="flap" style="background-color:#cb2027; width:85px; height:85px; margin-top:auto; transform:rotate(30deg); animation:roll1 5s infinite ">
                
                <div class="flap1" style="background-color:#cb2027; width:85px; height:85px; margin-top:auto; transform:rotate(30deg); animation:roll1 5s infinite ">
                
                <div class="flap2" style="margin-top:auto; transform:rotate(30deg); animation:roll1 5s infinite "><img src="images/pinterest.png" width="85" height="85"/>
                </div></div></div>
                
                </div>
</center>            </div>
            
            </div>
        </div>
        
        <!-- logo animation ends -->	
        
        <!-- About Section Start -->	
        
        	<div id="about_section" class="row" style="background:#000000">	
        		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background:url(images/back.png) no-repeat center fixed">
                <div class="row" style="background:rgba(0,0,0,0.4)">	
        		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                
                  	<div class="row">
        		
                	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> 
                    <center><h1 id="text">About</h1></center>
                    </div>
                 
                 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> </div>
                    
                    </div>
        			<br>
                        <div class="row" style="padding:0px 0px 10px 0px;">
        				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <?php
						
						 $rs=mysql_query("select * from about");
						if(mysql_num_rows($rs)<1)
						{
							echo'<p class="danger">No rows are present</p>';
						}
						else
						{
							
							while ($row = mysql_fetch_array($rs)) 
							{						
								echo '<p align="justify">'.$row['desc'].'</p>';
							}
						}
						?>

                        </div>           
                    </div>
        
                </div>
                </div>
                </div>
        	</div>
        <!-- About Section ends -->	
        
        
        
        
        
        <!-- Team Members Start -->	
        
        	<div id="team_section" class="row">	
        		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  	<div class="row">
        		
                	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> 
                    <center><h1 id="text">Team Members</h1></center><br>
                    </div>
                 
                 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> </div>
	                    
                    </div>

                    <div class="row" style="padding:0px 0px 10px 0px;">
                        
                         <?php
						
						 $rs=mysql_query("select * from team_members where fname ='Mohit'");
						if(mysql_num_rows($rs)<1)
						{
							echo'<p class="danger">No rows are present</p>';
						}
						else
						{
							
							while ($row = mysql_fetch_array($rs)) 
							{						
								echo '<center>
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> 
								<div class="card">
<center><img class="img-responsive img-rounded"  width="auto" alt="' .$row['fname'].' '.$row['lname'].'" src="images/team/'.$row['fname'].'.jpg"></center>
                           <h3 style="color:#ffffff;"><a href="http://mohitthakur.000webhostapp.com" style="text-decoration: none; color: #FFFFFF;">' .$row['fname'].' '.$row['lname'].'</a></h3>
						   <p class="title">
						   ' .$row['roles'].'<br></p><p>
						   ' .$row['year'].'<br>
						   ' .$row['univ'].'</p>
						   
						   
						   <div style="margin: 20px 0;">
							<a href="' .$row['insta'].'" target="_blank" style="text-decoration: none; font-size: 22px; color: #FFFFFF;"><i class="fa fa-instagram" style="font-size:24px; padding:10px"></i></a> 
							<a href="' .$row['gmail'].'" target="_blank" style="text-decoration: none; font-size: 22px; color: #FFFFFF;"><i class="fa fa-envelope" style="font-size:24px; padding:10px"></i></a>  
							<a href="' .$row['linkedin'].'" target="_blank" style="text-decoration: none; font-size: 22px; color: #FFFFFF;"><i class="fa fa-linkedin" style="font-size:24px; padding:10px"></i></a>  
							<a href="' .$row['fb'].'" target="_blank" style="text-decoration: none; font-size: 22px; color: #FFFFFF;"><i class="fa fa-facebook" style="font-size:24px; padding:10px"></i></a>
							<a href="' .$row['github'].'" target="_blank" style="text-decoration: none; font-size: 22px; color: #FFFFFF;"><i class="fa fa-github" style="font-size:24px; padding:10px"></i></a>  
							<a href="' .$row['quora'].'" target="_blank" style="text-decoration: none; font-size: 22px; color: #FFFFFF;"><i class="fa fa-quora" style="font-size:24px; padding:10px"></i></a> 
						 </div> 
						 <p><button><a href="#contact_section" style="text-decoration: none; font-size: 22px; color: #FFFFFF;">Contact</a></button></p>
						</div>
		
						   
						 </div>  </center>
						   ';
						   }
	  					}
						 
						 
						 
						$rs=mysql_query("select * from team_members where fname!='Mohit'");
						if(mysql_num_rows($rs)<1)
						{
							echo'<p class="danger">No rows are present</p>';
						}
						else
						{
							
							while ($row = mysql_fetch_array($rs)) 
							{						
								echo '<center>
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> 
								<div class="card">
<center><img class="img-responsive img-rounded"  width="auto" alt="' .$row['fname'].' '.$row['lname'].'" src="images/team/'.$row['fname'].'.jpg"></center>
                           <h3 style="color:#ffffff;">' .$row['fname'].' '.$row['lname'].'</h3>
						   <p class="title">
						   ' .$row['roles'].'<br></p><br><p style="margin-top:6px;">
						   ' .$row['year'].'<br>
						   ' .$row['univ'].'</p>
						   
						   
						   <div style="margin: 20px 0;">
							<a href="' .$row['insta'].'" target="_blank" style="text-decoration: none; font-size: 22px; color: #FFFFFF;"><i class="fa fa-instagram" style="font-size:24px; padding:10px"></i></a> 
							<a href="' .$row['gmail'].'" target="_blank" style="text-decoration: none; font-size: 22px; color: #FFFFFF;"><i class="fa fa-envelope" style="font-size:24px; padding:10px"></i></a>  
							<a href="' .$row['linkedin'].'"  target="_blank" style="text-decoration: none; font-size: 22px; color: #FFFFFF;"><i class="fa fa-linkedin" style="font-size:24px; padding:10px"></i></a>  
							<a href="' .$row['fb'].'" target="_blank" style="text-decoration: none; font-size: 22px; color: #FFFFFF;"><i class="fa fa-facebook" style="font-size:24px; padding:10px"></i></a>
							<a href="' .$row['github'].'" target="_blank" style="text-decoration: none; font-size: 22px; color: #FFFFFF;"><i class="fa fa-github" style="font-size:24px; padding:10px"></i></a>  
							<a href="' .$row['quora'].'" target="_blank" style="text-decoration: none; font-size: 22px; color: #FFFFFF;"><i class="fa fa-quora" style="font-size:24px; padding:10px"></i></a> 
						 </div> 
						<p><button><a href="#contact_section" style="text-decoration: none; font-size: 22px; color: #FFFFFF;">Contact</a></button></p>
						</div>
		
						   
						 </div>  </center>
						   ';
						   }
	  					}
                        ?>
          
                    </div>
        
        
        
        		</div>
        	</div>
        <!-- Team Section ends -->	
        
        
        
        <!-- Features Section Start -->	
        
        	<div id="feature_section" class="row" style="background:url(images/features.jpg) fixed">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background:rgba(0,0,0,0.4)">
            		<div class="row">
        		
                	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> 
                    <center><h1 id="text">Features</h1></center>
                   <br> </div>
                 
                 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> </div>
                    
                    </div>
                    
                    
            	<div class="row">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
               
                	<h4><font color="#FFFFFF">Simple & User-Friendly</font></h4>
                   <ul>
                    <li>Easily accessible using the login portal.</li>
                    <li>Interactive and attractive UI/UX design which is easily understandable and less complex.</li>
                    <li>Simple and interactive architecture which makes it easy to use.</li>
                    </ul>
             		   
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">              	<h4><font color="#FFFFFF">Secure & Reliable</font></h4>
                <ul>        
                     <li>It has an isolated environment to provide confidentiality and authentication for each user.</li>
                    <li>A user can trust this web based application regarding his/her personal information.</li>
                    <li>This application is reliable in terms of ubiquitous as it is accessible anywhere, anytime and from any device.</li>
                    </ul>
             
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                	<h4><font color="#FFFFFF">Compatible & Adaptable</font></h4>
                
                     <ul>
                     <li>This web based application is adaptable to any environment. </li>
                     <li>This application is browser compatible, OS compatible, device compatible and hardware compatible thus ensures flexibility.</li>
                    </ul>
             		
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                	<h4><font color="#FFFFFF">Multi-tenancy</font></h4>
                    <ul>
                     <li>This web based application is based on SIMM (Single Instance Multi-tenancy Model) and thus provides the service to multiple users.</li>
                    </ul>
             	 
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                	<h4><font color="#FFFFFF">Performance</font></h4>
                    <ul>
                     <li>This application is light-weight which improves the performance and makes it faster and smoother.</li>
                    </ul>
             		
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                	<h4><font color="#FFFFFF">Mobility</font></h4>
                    <ul>
                     <li>This application is accessible form any geographical point without restrictions.</li>
                    </ul>
             		
                    
                  
                </div>
                </div>
            
 			</div>           
            </div>
        
        <!-- Features Section ends -->	
        
        
        
        
        
         <!-- Footer Section Start -->	
        
        	<div class="row" style="background:rgba(0,0,0,0.4);">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin:20px 0px 10px 0px">
            		<div class="row">
        		
                	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> 
                    <center><p>&copy; Copyright <a href="http://mohitthakur.000webhostapp.com" style="text-decoration:none; color:#ffffff;">Mohit Thakur</a>.<br> Website Designer and Developer</p></center>
                    </div>
                	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> </div>
                 
                    
                    </div>
                    
                    
            	
            
 			</div>           
            </div>
        
        <!-- Footer Section ends -->	   
        
        
		</div>
	</div>
	 <!-- main ends -->

</div>
</body>
</html> 