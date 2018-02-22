<!DOCTYPE html>
<html>
<head>
	<title>HIGHRISE SCHOOL</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/w3.css">
</head>
<style type="text/css">

body{
  background-image: url(pics/school.jpg);
  background-repeat: no-repeat;



}
</style>

<body>

	
		<div class="navbar">
		<h1 style="text-align: center;">HIGHRISE SCHOOL</h1>
	</div>
<div class="jumbotron">
<div class="row">
<div class="col-sm-3"><h3>school motto</h3>
<p>Strive to achieve excellence</p></div>
  <div class="col-sm-3"><h3>school vision</h3>
<p>To become a leader in national education</p></div>
  <div class="col-sm-3"><h3>school vision</h3>
<p>To become a leader in national education</p></div>
<div class="col-sm-3">
	

<form action="top.php" method="POST" class="me">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">

Students name<br>	
<input type="text" name="name" placeholder="name" required=""> <br>
Students class<br>	
<input type="text" name="class" placeholder="class" required=""> <br>
ADM NUMBER<br>	
<input type="text" name="admno" placeholder="adm no" required=""><br>
Student Password:<span class="glyphicon glyphicon-asterisk"></span><br>
			<input type="password" name="Password" required="required"><br><br>
			<?php
			$pass=$_GET['Password'];
			if (strlen($pass)<10) {
				echo "<h4>Weak Password</4>";
			}else
			{echo "<br>";}
			?>
			Confirm Student Password:<span class="glyphicon glyphicon-asterisk"></span><br>
			<input type="password" name="Confirm" required="required"><br><br>
			<?php
			$word=$_GET['Confirm'];
			if (strlen($word)<10) {
				echo "Weak Password";
			}
			?>
			<?php 
			if ($pass!=$word) {
				echo "Password Mismatch";
			}
			?>
<button class="btn btn-success">login</button>
<button class="btn btn-danger" reset>reset</button>
</div>
</div>
</div>



</form>

</div>
</div> 


</div>
</div>


</body>
</html>

