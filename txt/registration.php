<?php
include "lib/connection.php";

include "welcome.html";

 if(isset($_POST['reg'])){
	  $name=$_POST['name'];
 $email=$_POST['email'];
 $dept=$_POST['dept'];
 $city=$_POST['city'];
 $code=$_POST['code'];
 $date=$_POST['date'];
 
 
 	 $insert_sql="INSERT INTO users (Name,Email,dept,City,Code,Date) value ('$name','$email','$dept','$city','$code','$date')";

	if ($conn -> query($insert_sql)) {
		$errcm_pass ="<span style='color:green'>Data Added</span>";
	  } 
	  else {
	   die($conn -> error);
	  }
 }
?>
<!DOCTYPE html>
<html>
	<head>
	 <meta charset="UTF-8">
	 <title> Registration </title>
	</head>

	<body>
	   <fieldset  name="add post">
       <legend>   Regristration </legend>
		 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
		 		   Name: <input type="text" name="name" value=""><br><br>
                 Full Name: <input type="text" name="=name" value=""><br><br>
		   Eamil: <input type="email" name="email" value=""><br><br>
		   
		   Department: <input type="text" name="dept" value=""><br><br>
		   City: <input type="text" name="city" value=""><br><br>
		   Code: <input type="number" name="code" value="code"><br><br>
		   Date: <input type="date" name="date" value="date"><br><br>
		  
		   <input type="submit" name="reg" value="Regristration"> <br><br>

		 </form>

      </fieldset>
	</body>

</html>