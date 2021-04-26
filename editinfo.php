<?php
require_once "Controle/controle.php";
?>

<html>
	<head></head> 
	<body>
		<?php
            $id="";
			$err_id="";
		    $name="";
			$err_name="";
			
           $email="";
			$err_email="";
			$hasError=false;
			
			 
				if($_SERVER['REQUEST_METHOD'] == "POST"){

				 if(empty($_POST["id"])){
					$err_id="*Id Required";
					$hasError=true;
				}
				else if(!is_numeric($_POST["id"])){
					$err_id="*Only numeric value is accepted";
					$hasError=true;
				}
				else{
					$id=htmlspecialchars($_POST["id"]);
				}
			
				if(empty($_POST["name"])){
					$err_name="*Name Required";
					$hasError=true;
				}
				else{
					$name=htmlspecialchars($_POST["name"]);
				}

                if(empty($_POST["email"])){
					$err_email="*Email address required";
					$hasError=true;
				}
				else if(!strpos($_POST["email"],"@")){
					$err_email="*Characters must contain @";
                    $hasError=true;

				}
				else if(!strpos($_POST["email"],".",$s+1)){
					$err_email="*Characters must contain atleast 1 dot after @";
                    $hasError=true;

				}
				else{
					$email=htmlspecialchars($_POST["email"]);
				}
				 if(!$hasError){
                   updateCustomer($_POST["id"],$_POST["name"],$_POST["email"]);
                }

				
			}
			
		?>
	
		<fieldset>
			<legend><h1>Edit Information</h1></legend>
			<form action="" method="post">
				<table>

					<tr>
						<td>ID</td>
						<td>: <input type="text" value="<?php echo $id;?>" name="id">
						<span><?php echo $err_id;?></span></td>
					</tr>



					<tr>
						<td><span>Emp Name</span></td> 
						<td>: <input type="name" value="<?php echo $name;?>" name="name">
							
						<span><?php echo $err_name;?></span></td>
						
					</tr>
					

					<tr>
						<td> Email</td>
						<td>: <input type="text" value="<?php echo $email;?>" name="email">
						<span><?php echo $err_email;?></span></td>
						
					</tr>
					
					
					
					
		

					
					
					<tr>
					<tr>
						<td align="center" colspan="2"><input type="submit" name="submit" value="register"></td>
					</tr>
					
				</table>
				 
				
			</form>
		</fieldset>
	</body>
</html>