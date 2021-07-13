<?php
$uname="";
$err_uname="";
$pass="";
$err_pass="";
$hasError= false;



?>

<html>
	<head></head>
	<body>
	    <h3>Login</h3>
		<fieldset>
			<form action="" method="post">
				<table >
					<tr>
						<td >Username: </td>
						<td><input type="text" name="uname" value="<?php echo $uname;?>"></td>
						<td><span><?php echo $err_uname;?></span></td>
						
					</tr>
					<tr>
						<td >Password: </td>
						<td><input type="password" name="pass" value="<?php echo $pass;?>" ></td>
						<td><span><?php echo $err_pass;?></span></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
	</body>
</html>