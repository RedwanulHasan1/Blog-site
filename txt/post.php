 <?php
include "lib/connection.php";
include "welcome.html";

if(isset($_POST['post'])){
 $title=$_POST['title'];
 $des=$_POST['des'];
 $p_date=$_POST['p_date'];
 
 
  	 $insert_sql="INSERT INTO posts (Title,Description,date) value ('$title','$des','$p_date')";

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
	 <title>Post</title>
	 <style>
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}

		td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
		}

		tr:nth-child(even) {
		  background-color: #dddddd;
		}
    </style>
	
	</head>

	<body>
	   <fieldset  name="add post">
       <legend>   POST </legend>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
		   Title: <input type="text" name="title" value=""><br><br>
		   Description: <textarea rows="4" cols="50" value="des">
                        </textarea><br><br>
		   Date: <input type="date" name="p_date" value="date"><br><br>
		  
		   <input type="submit" name="post" value="Post"> <br><br>
		   
	

		<table>
		  <h1>Post Lisit</h1>
			  <tr>
				<th>Title</th>
				<th>Description</th>
				<th>date</th>
				<th> Author</th>
				<th>action</th>
			  </tr>
			  <tr>
				<td>1st page</td>
				<td>abc</td>
				<td>08/12/19</td>
				
				<td> mr </td>
				<td> Delete</td>
			  </tr>
		  </table>
				 
		 </form>

      </fieldset>
	</body>

</html>