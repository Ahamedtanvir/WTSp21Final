<?php
   require_once "Controle/controle.php";

 
?>


<html>
	<head></head> 
	<body>
		
		
	
		<fieldset>
			
			<center><legend><h1> Registration </h1></legend></center>
			<center>
			<form action="" method="post">
				<table>
					
					






					<tr>
						<td><span>Emp Name</span></td> 
						<td>: <input type="name" value="<?php echo $name;?>" name="name">
							
						<span><?php echo $err_name;?></span></td>
						
					</tr>
					
					
					<tr>
						<td>Password</td>
						<td>: <input type="password" value="<?php echo $password;?>" name="pass">
						<span><?php echo $err_password;?></span></td>
					</tr>
					
					
					
					<tr>
						<td> Email</td>
						<td>: <input type="text" value="<?php echo $email;?>" name="email">
						<span><?php echo $err_email;?></span></td>
						
					</tr>
					
					
					
					
					<tr>
						<td align="center" colspan="2"><input type="submit" name="submit" value="register"></td>
					</tr>
					
				</table>
				 
				
			</form>
			</center>
		</fieldset>
	</body>
</html>


