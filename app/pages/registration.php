<div class="section">
	<div class="row">
		<div class="col-md-8 ml-auto mr-auto">
			<div id="reg">
				<h1>Sign Up Here</h1>
				<div id="error">
					
				</div>
				<form action="#" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" aria-describedby="email_aria">
						<small id="email_aria" class="form-text text-muted">Use your email here.</small>
					</div>
					<div class="form-group">
						<label for="user_id">User ID</label>
						<input type="text" class="form-control" name="id" id="user_id" placeholder="User ID" value="<?php echo isset($_POST['id']) ? $_POST['id'] : '' ?>">
						<small id="userid_aria" class="form-text text-muted">Use your student ID as user ID here.</small>
					</div>
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>">
						<small id="name_aria" class="form-text text-muted">Use your name here.</small>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" id="password" placeholder="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>">
						<small id="password_aria" class="form-text text-muted">Use your password here.</small>
					</div>
					<div class="form-group">
						<label for="retype">Retype Password</label>
						<input type="password" class="form-control" name="retype" id="retype" placeholder="Retype Password" value="<?php echo isset($_POST['retype']) ? $_POST['retype'] : '' ?>">
						<small id="password_aria" class="form-text text-muted">Retype your password here.</small>
					</div>					
					<!--div class="form-group">
						<label for="photo">Profile Photo:</label>
						<input type="file" class="form-control" name="fileToUpload" id="fileToUpload" align="center">
						<small id="photo_aria" class="form-text text-muted">Use your photo here.</small>
					</div-->
					<input type="submit" name="signup" id="btn" class="btn btn-primary" value="Sign Up">
				</form>
			</div>
		</div>
	</div>
</div>

