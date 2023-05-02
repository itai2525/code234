<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!--  <link rel="stylesheet" type="text/css" href="file:///C:/Users/hp/Desktop/bootstrap-5.0.2-dist/css/bootstrap.min.css.map"> -->
	<style type="text/css">
		body{
			padding-top: 0px;
			padding: 0;
			background: powderblue;
		}
		.form-signup{
			margin: 0 auto;
			max-width: 400px;
		}
		.form-signup h2{
			text-align: center;
		}
	</style>
	<style>
div.a {
  text-align: center;
}

div.b {
  text-align: left;
}

div.c {
  text-align: right;
} 

div.d {
  text-align: justify;
} 
</style>
</head>
<body> 
	<?php include 'dropdown.php';?>
	<div class="container">		
	 <div class="a">
	  <strong><h1 style="font-size:60px;">DASHBOARD</h1></strong>
     </div>
		<form class="form-signup">
			<h2>Register</h2>
			<p>Create new account.</p>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
					<input type="text" class="form-control" name="firstname" placeholder="First Name">
					</div>
					<div class="col-md-6">
					<input type="text" class="form-control" name="lastname" placeholder="Last Name">
					</div>
			</div>
		</div>
		    <div class="form-group">
		    	<input type="email" name="email" class="form-control" placeholder="Email Address">
		    </div>
		    <div class="form-group">
		    	<input type="password" name="password" class="form-control" placeholder="Password">
		    </div>
		    <div class="form-group">
		    	<input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
		    </div>
		    <div class="form-group">
		    	<label>
		    		<input type="checkbox" name="">
		    		I accept the<a href="#"> Terms of Use</a> & <a href="">Privacy Policy</a>
		    	</label>
		    </div>
		    <input type="submit" class="btn btn-success btn-block"  name="" value="submit">
		</form>
	</div>
</body>
</html>
