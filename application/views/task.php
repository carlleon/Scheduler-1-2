<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/stylee.css')?>">
</head>
<body>
<?php
	if(isset($success)){?>
		<div id='notif' class='alert alert-success'>
			<?php echo $success ?>
		</div>
	<?php }else if(isset($fail)) { ?>
		<div id='notif' class='alert alert-danger'>
			<?php echo $fail ?>
		</div>
	<?php }else if(isset($message)) { ?>
		<div id='notif' class='alert alert-danger'>
			<?php echo $message ?>
		</div>
	<?php } ?>
	<?php
		if(isset($username)){
			echo "WellCUM"." ".$username;
		} 
	?>

<div class='whole-container'>
	<div class='formsign-container'>
		<div class='container'>
			<center>
				<img id='text' src="<?=base_url('assets/iimg/ironman2.png')?>"><br><br>
				<img id='logo' src="<?=base_url('assets/iimg/ironman.png')?>"><br>
				<div id='buttons' class='buttons'>
					<button class='custom_but btn btn-avenger' id='signinfunc'><span>Sign in</span></button>
					<br>
					<button class='custom_but btn btn-avenger' id='signupfunc'><span>Sign up</span></button>
				</div>
				<div id='signin'>
					<form action="<?=base_url('welcome/signin')?>" method='post'>
					    <div class="form-group">
					      <label >Username</label>
					      <input type="text" class="form-control" id="" name='username' placeholder="Username">
					    </div>
					    <div class="form-group">
					      <label >Password</label>
					      <input type="password" class="form-control" id="" name='password' placeholder="Password">
					    </div>
					    <button type="submit" class="btn btn-avenger"><span>Sign in</span></button><br>
					    <span id='register'>Click here to register</span>
					</form>
				</div>
				<div id='signup'>
					<form method='post' action='<?=base_url('welcome/register')?>'>
						<div class="form-group">
					      <label >Email</label>
					      <input type="email" class="form-control" name='email' id="" placeholder="e.g. Johnwicj@adf.com">
					    </div>
					    <div class="form-group">
					      <label >Full Name</label>
					      <input type="text" class="form-control" name='fullname' id="" placeholder="e.g. John Namoc Wick">
					    </div>
					    <div class="form-group">
					      <label>Birth Date</label>
					      <input type="date" class="form-control" name='birthdate' id="" placeholder="e.g. 12/8/98">
					    </div>
					    <div class="form-group">
					      <label >Username</label>
					      <input type="text" class="form-control" name='username' id="" placeholder="e.g. username">
					    </div>
					    <div class="form-group">
					      <label >Password</label>
					      <input type="password" class="form-control" name='password' id="" placeholder="*******">
					    </div>
					    <div class="form-group">
					      <label >Confirm Password</label>
					      <input type="password" class="form-control" name='confirmpassword' id="" placeholder="*******">
					    </div>
					    <button type="submit" class="btn btn-avenger"><span>Sign Up</span></button><br><br>
					    <span id='gotologin'>Already have an account?</span>
					</form>
				</div>
			</center>
		</div>
	</div>
</div>
</body>
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src='<?=base_url('assets/js/dom.js')?>'></script>
</html>