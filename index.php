<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Social Networking Photo Sharing Service</title>

<link rel="icon" href="images/logo.png" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="bootstarp/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="bootstarp/css/bootstrap.min.css" />

<script src="bootstarp/js/bootstrap.js"></script>
<script src="bootstarp/js/bootstrap.min.js"></script>

</head>

<body style="background:url(images/back.png) no-repeat; background-size:cover" >
<div class="container-fluid">


	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        
        
        	<div class="row">
              	
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>   
            	
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="background:rgba(0,0,0,0.5); margin-top:90px; padding:20px 20px 30px 20px">
                
                <div class="row">
          	       <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                
                <img style="margin-left:115px" class="img-responsive" src="images/logo.png" />
                
                <center>
               
               	<h1 style="margin-left:60px"><font face="Times New Roman, Times, serif">Login</font></h1>
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
          </center>
          			</div>
                    
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <center><div style="background:#FFF; width:5px; height:300px; border-radius:10px"></div></center>
                    
                    </div>
                    
                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                    
                    </div>
                    
                              
                </div>    
                    
				</div>
                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
            </div>
            
            
            
            
        </div>
	</div>


</div>
</body>
</html>