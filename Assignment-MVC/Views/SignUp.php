<?php include 'MainHeader.php'; ?>
<?php include 'Controllers/UserControll.php'; ?>
 <html>
    <head></head>
	<boady>
	    <div align="center">
		    <h3>Sign Up</h3>
			<h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
			    <div>
				    <h3>Name</h3>
					<input type = "text" name = "name" value="<?php echo $name; ?>"/>
					<span> <?php echo $err_name; ?> </span>
				</div>
				<div>
				    <h3>Username</h3>
					<input type = "text" name = "uname" value="<?php echo $uname; ?>"/>
					<span> <?php echo $err_uname; ?> </span>
				</div>
				<div>
				    <h3>Email</h3>
					<input type = "text" name = "email" value="<?php echo $email; ?>"/>
					<span> <?php echo $err_email; ?> </span>
				</div>
				<div>
				    <h3>Password</h3>
					<input type = "password" name = "pass"/>
					<span> <?php echo $err_pass; ?> </span>
				</div>
				<div>
					<input type = "submit" name = "signUp" value = "Sign Up" />
				</div>
			</form>
		</div>
	</boady>
    <?php include 'Footer.php'; ?>
</html>