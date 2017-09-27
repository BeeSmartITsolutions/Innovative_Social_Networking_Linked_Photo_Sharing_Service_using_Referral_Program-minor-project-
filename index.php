<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Social Networking Photo Sharing Service</title>

<link rel="icon" href="images/logo.png" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="bootstarp/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="bootstarp/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/color.css" />

<script src="bootstarp/js/bootstrap.js"></script>
<script src="bootstarp/js/bootstrap.min.js"></script>
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
        
        			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            </div> 
        	
            		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="margin-top:5px;">
                    
                    <a href="index.php" style="text-decoration:none; color:#fff;"><font size="+2">3<b class="color">S</b></font></a>
            </div> 
        
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    </div> 
                
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <style>
					
li a:hover{
    background-color: #C93 !important;
	color:#000 !important;
}


					</style>
                    
                    <div class="nav">
                    <ul class="nav nav-pills">
                    
                    <li><a href="index.php" style="color:#FFF;">Home</a></li>
                    <li><a href="#about" style="color:#FFF;">About</a></li>
                    <li><a href="#features" style="color:#FFF;">Features</a></li>
                    <li><a href="#extra" style="color:#FFF;">Achievements</a></li>
                    <li><a href="#contact" style="color:#FFF;">Contact</a></li>
                    <li><a href="#" id="modal" style="text-decoration:none; color:#FFF;">Login</a></li>
                    
                    
                    
                    </ul></div>
                    <style>
#login{
	text-align:justify;
	margin:0px 10px 0px 10px;
}
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 50px; /* Location of the box */
    left: 0;
    top: 0;
	padding-bottom:40px;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.8); /* Black w/ opacity */
}
</style>
                       <!-- The Modal -->
                        <div id="myModal" class="modal">
                        
                          <!-- Modal content -->
                          <div class="modal-content">
                            <div class="modal-header">
                              <span class="close">&times;</span>
                              
                              <center>
                              <h3>Login</h3>
                              
                            </div>
                            
                            <div class="modal-body">
                             <br>                          
                           <div id="login">  
                           
                            
							
                            <center> <img class="img-responsive" src="images/logo.png" /></center>
                
                <center>
               
               	<h1><font face="Times New Roman, Times, serif">Login</font></h1></center>
        <form name="login" method="post" action="" style="margin-left:60px">
         <div class="form-group">
        <input type="email" class="form-control" placeholder="abc@xyz.com" name="email" id="id">
        </div>
            <br>
            <div class="form-group">
          <input type="password" placeholder="********" class="form-control" name="pass" id="p">
            </div>
            <br>
            
        <div class="form-group">
            <input type="submit" name="submit" id="sub" class="button" value="Login" onClick="validate()">
            
             <input type="reset" name="reset" id="res" class="button" value="Reset">
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
         <br>
          			
                            
                            
                            
                            
                           </div>
						<br><br><br>
                      
                            <br>
                           
                            <div class="modal-footer">
                              <h6>Not an existing user? <a href="">Sign Up</a> here</h6>
                            </div>
                          </div>
                        
                        </div>
                        
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
                       <!-- The Modal end -->
                    
                    </div>
                    
                    </div>
                
        
        		</div>
                
                
                	<!-- Row 2 close -->


                    
                </div>
            </div>
        <!-- header ends -->
        
        
        
		</div>
	</div>
	 <!-- main ends -->

</div>
</body>
</html>