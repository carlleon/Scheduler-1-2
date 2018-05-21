<div class="container">
    <h1 class="well">Registration Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
		<form action="<?= base_url('main/empRegister') ?>" method="post">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-4 form-group">
						<label>Username</label>
						<input type="text" name="username" placeholder="Enter Username Here.." class="form-control">
					</div>
					<div class="col-sm-4 form-group">
						<label>Password</label>
						<input type="password" name="password" placeholder="Enter Password Here.." class="form-control">
					</div>
					<div class="col-sm-4 form-group">
						<label>Re-Password</label>
						<input type="password" name="repassword" placeholder="Re-enter Password Here.." class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4 form-group">
						<label>Email</label>
						<input type="text" name="email" placeholder="Enter Email Here.." class="form-control">
					</div>
					<div class="col-sm-4 form-group">
						<label>First Name</label>
						<input type="text" name="firstname" placeholder="Enter First Name Here.." class="form-control">
					</div>
					<div class="col-sm-4 form-group">
						<label>Last Name</label>
						<input type="text" name="lastname" placeholder="Enter Last Name Here.." class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4 form-group">
						<label>Gender</label>
						<select name="gender">
							<option value="male">Male</option>
							<option value="female">Female</option>
							
						</select>
					</div>
					<div class="col-sm-4 form-group">
						<label>Designation</label>
						<select name="designation">
							<option value="purchase">Purchase</option>
							<option value="sales">Sales</option>
							<option value="management">Management</option>
							<option value="product">Product</option>
						</select>
					</div>	
				
						<div class="col-sm-4 form-group">
							<label>Supervised By</label>
							<select name="supervisor">
								<option value="<?php  ?>"></option>
							</select>
						</div>	
				</div>					
					
				<button type="submit" class="btn btn-lg btn-info">Submit</button>					
			</div>
		</form> 
	</div>
	</div>
</div>
