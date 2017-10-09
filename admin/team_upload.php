<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload the team member</title>

<link rel="icon" href="../images/logo.png" type="image/x-icon">

<!-- Bootstrap files Start -->

<link rel="stylesheet" type="text/css" href="../bootstarp/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../bootstarp/css/bootstrap.min.css" />
<script src="../bootstarp/js/bootstrap.js"></script>
<script src="../bootstarp/js/bootstrap.min.js"></script>

<!-- Bootstrap files end -->

<!-- js files Start -->

<script>
function validate(){
	var pic = document.getElementById("picture").value;
	var fname = document.getElementById("fname").value;
	var lname = document.getElementById("lname").value;
	var roles = document.getElementById("roles").value;
	var univ = document.getElementById("univ").value;
	
	if(pic == ''){
		alert("You haven't entered the photo");
	}
	else if(fname == ''){
		alert("You haven't entered the First name");
	}
	else if(lname == ''){
		alert("You haven't entered the Last name");
	}
	else if(roles == ''){
		alert("You haven't entered the Roles assigned to member");
	}
	else if(univ == ''){
		alert("You haven't entered the university name or organisation");
	}
	else{
		var b = confirm("Are you sure you want to Submit values?");
		if(b==1)
		{
			alert("Successfully Submitted....");
		}
		else
		{
			alert("Submission Failed!!!..");
		}	
	}
}
</script>

<!-- js files end -->



</head>

<body>

<?

include('../database.php');

echo '<form name="upload" method="post" action="" enctype="multipart/form-data">
         
		 <div class="form-group">
        <input type="file" class="form-control" placeholder="Upload your Photo" name="pic" id="picture">
        </div>
		
             <div class="form-group">
          <input type="text" placeholder="abc" class="form-control" name="fname" id="fname">
            </div>
         
		 <div class="form-group">
        <input type="text" class="form-control" placeholder="xyz" name="lname" id="lname">
        </div>
		
             <div class="form-group">
          <input type="text" placeholder="Roles assigned" class="form-control" name="roles" id="roles">
            </div>
         
		 <div class="form-group">
        <input type="text" class="form-control" placeholder="Which year?" name="year" id="year">
        </div>
		
		 <div class="form-group">
        <input type="text" class="form-control" placeholder="Which university/oragnisation?" name="univ" id="univ">
        </div>

       <div class="form-group">
             <center> <button type="submit" name="submit" id="sub" class="button btn" onClick="validate()"><span class="glyphicon glyphicon-log-in">&nbsp;Login</span></button>
             &nbsp;&nbsp;&nbsp; <button type="reset" name="reset" id="res" class="button btn" ><span class="glyphicon glyphicon-remove-sign">&nbsp;Reset</span></button>
             </center>
             </div>
        </form>
        		';
				
				
				if(isset($_POST['submit']))
{
	
	
		$pic = $_FILES['pic']['name'];
		$temp_image= $_FILES['pic']['tmp_name'];
		move_uploaded_file($_FILES['pic']['tmp_name'],'uploads/'.$_FILES['pic']['name']);
		
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$roles = $_POST['roles'];
		$year = $_POST['year'];
		$univ = $_POST['univ'];
		
		
		$query = mysql_query("INSERT INTO team members VALUES('$pic','$fname','$lname','$roles','$year','$univ')")or die("" . mysql_error());
		
		if($query)
		{
			echo'<script type="text/javascript">alert("Files Uploaded successfully")</script>';
		}
		else
		{
			echo 'Querry failed';
		}

}

				
				
?>

</body>
</html>