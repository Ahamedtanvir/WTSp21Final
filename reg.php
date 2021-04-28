<?php
   require_once "Controle/controle.php";
   require_once "DB/db.php";

 
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
						<td>: <input type="name" onfocusout ="checkUsername(this)" value="<?php echo $name;?>" name="name">
							<span id="err_name"></span>   
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
<script>
function check(control){
    var username = control.value;
    var xhttp= new XMLHttpRequest();
    xhttp.onreadystatechange= function(){
        if(this.readyState==4 && this.status == 200){
            var rsp= this.responseText;
            if(rsp == "true"){
                document.getElementById("err_name").innerHTML= "Valid";
                document.getElementById("err_name").style="color:Green";
            }
            else{
                document.getElementById("err_name").innerHTML= "Not Valid";
                document.getElementById("err_name").style="color:red";
            }
        }
    }
    xhttp.open("GET","check.php?Emp_name="+username,true);
    xhttp.send();
}
</script>


