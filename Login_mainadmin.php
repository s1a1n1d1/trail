<html>
	<title>Login-Admin</title>
	<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"></head>
   <body>
   
   
   <div class="col-md-4 col-md-offset-4" style="margin-top:55px;">
		<form class="form-horizontal" method="post">
		
		
		
        <div class="form-group">
		    <label  class="col-sm-6 control-label"><h2><b>LOGIN</b></h2></label>
				
		
		</div>
		
		
		<div class="form-group">
				<label for="inputName" class="col-sm-2 control-label">Username</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputEmail3" name="txtUsername" placeholder="Username" required>
			</div>
			</div>
			
		
		<div class="form-group">
				<label for="inputName" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="inputEmail3" name="txtPassword" placeholder="Password" required>
			</div>
			</div>
			
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-success" name="btn_submit">Login</button>
			</div>
			</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		</form>

	</div>

	</body>


<?php 
if(!session_id()) session_start();
if(isset($_POST["btn_submit"]))
{
$unm=$_POST['txtUsername'];
$pas=$_POST['txtPassword'];
include("dbcon.php");
if($unm!="" && $pas!=""){
	$sql="SELECT * FROM `admin` WHERE `username`='$unm' AND `password`='$pas'";
	
	$resss=mysqli_query($conn,$sql);
	$num_rows = mysqli_num_rows($resss);
	if($num_rows>=1){
	$_SESSION['abc']=$unm;
	header("Location:adminpanel.php");
	}
	else{
	echo"Wrong User name or password";
	}
}
}

?>






</html>