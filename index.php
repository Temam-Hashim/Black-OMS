
<?php
	require_once "includes/header.php";
	require_once "includes/db.php";
	session_start();
?>

<!-- Page Content -->
<div class="container">
<div class="row">


	<div class="form-gap"></div>
	<div class="container">
<h1 class="heading" class="text-center text-primary">
	<marquee behavior="" direction="" class="text-primary"><b>Welcome to Black Financial Solution</b></marquee>
</h1>
<?php
	if(isset($_GET['warning'])){
		$warning = $_GET['warning'];
		echo "<div class='alert alert-danger'>$warning</div>";
	}
?>
		<div class="row">
<div class="col-md-3"></div>
			<div class="col-md-5">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="text-center">
							<h3><i class="fa fa-user fa-4x"></i></h3>

							<h2 class="text-center"> Black Login </h2>
							<div class="panel-body">

								<form id="login-form" role="form" autocomplete="off" action="" class="form" method="POST">

									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-user color-blue"></i></span>

											<input name="username" type="text" class="form-control" placeholder="Enter Username" required value="<?php if($_SERVER['REQUEST_METHOD']=='POST') echo $_POST['username'] ?>">
										</div>
									</div>

									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-lock color-blue"></i></span>
											<input name="password" type="password" class="form-control" placeholder="Enter Password" required>
										</div>
									</div>

									<div class="form-group">

										<input name="login" class="btn btn-lg btn-primary btn-block" value="Login" type="submit">
									</div><hr>
								</form>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div>

		<div class="col-md-3"></div>
     </div>

	</div>

</div>
</div>
</div>
</div> <!-- /.container -->

<!-- db verification -->
<?php

if(isset($_POST['login'])){
	$username = $connect->real_escape_string($_POST['username']);
	$password = $connect->real_escape_string($_POST['password']);

	$sql = "SELECT * FROM `users` WHERE `username`='$username' or `email`='$username'";
	$result = $connect->query($sql);
	$row = $result->fetch_array();

	$username_db = $row['username '];
	$email_db =    $row['email'];
	$password_db = $row['password'];
	$role_db = $row['role'];

	if(($username===$username_db && $password===$password_db) || ($username===$email_db && $password===$password_db) ){
		$_SESSION['username'] = $username_db;
		$_SESSION['userEmail'] = $email_db;
		$_SESSION['password'] = $password_db;
		$_SESSION['role'] = $role_db;
		header("Location:admin/index.php");
	}else{
		// header("Location: login.php?warning='<div class='alert alert-danger text-center'>invalid Email or password</div>'");
		echo "<script>alert('invalid credential')</script>";
	}
}

?>

<?php require_once "includes/footer.php" ?>
