<html>
	<title>Add product</title>
	<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"></head>
   <body>
   
<?php
if(isset($_POST["btnSubmit"]))
{
include("dbcon.php");

$cat=$_POST["cat"];

$namee=$_POST["txtName"];
$phone=$_POST["txtPh"];
$price=$_POST["price"];


$req=$_POST["chk"];
if(empty($_POST["chk"]))
	$req=0;
else
	$req=1;





$imgTp=$_FILES["img"]["type"];

if($imgTp=="image/jpeg"||$imgTp=="image/png"||$imgTp=="image/gif")
	{ 
		$ret=rand('2000001','8000000');
		$rnam=".jpg";
		$path="uploads/images/";
		$img=$_FILES['img']['tmp_name'];
		$name="trail_$ret$rnam";
		$filename=move_uploaded_file($img,$path.$name);
		$pathname="uploads/images/$name";	
	 }
		$imgs=addslashes($pathname);



$sql="INSERT INTO `product`(`cat`, `name`,  `phone`, `price`, `chk`, `img`) VALUES ('$cat','$namee','$phone',$price,'$chk','$imgs')";

mysqli_query($db,$sql);
header('Location: panel.php');
}
?>
   
   
   
   
   
   
   
   <div class="col-md-4 col-md-offset-4" style="margin-top:55px;">
		<form name="myForm"  class="form-horizontal"  method="post" enctype="multipart/form-data">
			<label><h3>Add product</h3></label>
			
			<div class="form-group" >
				<label for="inputDistrict" class="col-sm-2 control-label" >Category</label>
			<div class="col-sm-10" >
				<select  class="form-control" name="cat" required>
				<option value="">--SELECT--</option>
				<option value="womann">Woman</option>
				<option value="man">Men</option>
				
				</select>
			</div>
			
			<script type="text/javascript">
			
			
			
			</script>
			

		
			
			</div>
			
			
			
			
			
			<div class="form-group">
				<label for="inputName" class="col-sm-2 control-label">Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputEmail3" name="txtName" placeholder="Name" required>
			</div>
			</div>
			<div class="form-group">
				<label for="inputPhoneNo" class="col-sm-2 control-label">Phone No</label>
			<div class="col-sm-10">
				<input type="tel" pattern="[6789][0-9]{9}" class="form-control" name="txtPh"   id="inputEmail3" placeholder="PhoneNo" required>
				
			
				
			</div>
			</div>
			
			
			
			
			<div class="visible">
			<div class="form-group">
				<label for="inputOTHERS" class="col-sm-2 control-label">Price</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="price" id="inputEmail3" placeholder="About your need..." >
			</div>
			</div>
			</div>
			
			
			
			
			
			
			<div class="form-group">
			
			<div class="checkbox">
			<div class="col-sm-offset-2 col-sm-10">
			<label>
				<input type="checkbox" name="chk" value="1"> single
			</label>
			
			
			<div class="form-group">
				<label for="inputName" class="col-sm-2 control-label">photo</label>
			<div class="col-sm-10">
				<input type="file" name="img" id="img"  accept="image/gif, image/jpeg, image/png " required>
			</div>
			</div>
			
			
			
			</div>
			</div>
			</div>
			<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" name="btnSubmit" class="btn btn-success" >SUBMIT</button>
			</div>
			</div>
			
			
			
			
			<!--<div class="visible">
				<label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox1" value="option1"> FOOD
				</label>
				<label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox2" value="option2"> CLOTH
				</label><br/>
				<label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox1" value="option1"> WATER
				</label>
				<label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox2" value="option2"> MEDICINE
				</label>
				<div class="form-group">
				<label for="inputOTHERS" class="col-sm-2 control-label">OTHERS</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputEmail3" placeholder="OTHERS">
			</div>
			</div>-->
			
			
			
			
			
		</form>

	</div>

	</body>







</html>