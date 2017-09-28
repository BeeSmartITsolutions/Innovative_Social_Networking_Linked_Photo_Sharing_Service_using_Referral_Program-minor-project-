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



<!-- Start Slider -->
<link rel="stylesheet" type="text/css" href="slider/engine1/style.css" />
<script type="text/javascript" src="slider/engine1/jquery.js"></script>
<!-- End Slider -->


</head>

<body style="background:url(images/back.png) no-repeat fixed; background-size:cover" >
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
        
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    </div> 
                
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">                    
                    
                    <ul class="nav nav-pills">
                    
                    <li><a href="index.php" style="color:#FFF;">Home</a></li>
                    <li><a href="#about" style="color:#FFF;">About</a></li>
                    <li><a href="#features" style="color:#FFF;">Features</a></li>
                    <li><a href="#extra" style="color:#FFF;">Achievements</a></li>
                    <li><a href="#contact" style="color:#FFF;">Contact</a></li>
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
        <input type="email" class="form-control" placeholder="abc@xyz.com" name="email" id="id">
        </div>
             <div class="form-group">
          <input type="password" placeholder="********" class="form-control" name="pass" id="p">
            </div>
            
        <div class="form-group">
             <center><button type="submit" name="submit" id="sub" class="button btn" onClick="validate()"><span class="glyphicon glyphicon-log-in">&nbsp;Login</span></button>
             &nbsp;&nbsp;&nbsp;<button type="reset" name="reset" id="res" class="button btn" ><span class="glyphicon glyphicon-remove-sign">&nbsp;Reset</span></button>
             </center>
             </div>
           <?php
		  function error($error)
			{
				if($error=="N")
				   {
						echo'<h4><p align="center" class="danger">Error while signing in.</p></h4>';   
				   }
			}
           ?>
        </form>
        					</div>            
                           
                           <!-- Footer start -->
                            <div class="modal-footer">
                              <center><h6>Not an existing user? <a href="">Sign Up</a> here</h6></center>
                            </div>
                           <!-- Footer Ends --> 
                            
                          </div>
                        <!-- Modal Body ends -->
                        
                        </div>
                        <!-- Modal Content ends -->
                        
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
 			<div class="row" style="margin:10px 0px 10px 0px;">       
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                
                </div>
                
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                
                </div>
                
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                
                </div>
                
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                
                </div>
            </div>
            
            </div>
        </div>
        
        <!-- logo animation ends -->	
        
        
        
        
        
        
        
        
        
        
        
		</div>
	</div>
	 <!-- main ends -->

</div>
</body>
</html> 