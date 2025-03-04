<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Registration system PHP and MySQL - Create user</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
	<script type="text/javascript" src="../script.js"></script>
	<style>
	a.btn{
		background-color: red;

    margin-left: 315px;
    color: white;

	}
		.header {
			background: red;
		}
		button[name=save_profile] {
			background: red;
		}
	</style>
</head>
<body>
	<div class="header">
		<h2>Admin - Create User</h2>
	</div>

	<form method="post" action="create_user.php" enctype="multipart/form-data">
		<?php if (!empty($msg)): ?>
			<div class="alert <?php echo $msg_class ?>" role="alert">
				<?php echo $msg; ?>
			</div>
		<?php endif; ?>
		<div class="form-group text-center" style="position: relative;" >
			<span class="img-div">
				<img src="images/avatar.png" onClick="triggerClick()" id="profileDisplay">
			</span>
			<input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
			<label></label>
			<div class="text-center img-placeholder"  onClick="triggerClick()">
			<button	><p>Click Here </br>to Upload Image</p></button>
			</div>
		</div>
		<div class="form-group">
			<label>Bio</label>
			<textarea name="bio" class="form-control"></textarea>
		</div>


		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>User type</label>
			<select name="user" id="user_type" >
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="save_profile"> + Create user</button>
			<a class="btn"  href="home.php">Back</a>
		</div>



	</form>
</body>
</html>
