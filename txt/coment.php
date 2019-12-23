 <?php
include "lib/connection.php";
include "welcome.html";

if(isset($_POST['comm'])){
 $comment=$_POST['comment'];
 
 
  	 $insert_sql="INSERT INTO comments (comment) value ('$comment')";

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
	 <title>Comment</title>
	 
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
       <legend>   COMMENT </legend>
		 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
		   COMMENT: <textarea rows="4" cols="50" name="comment" value="comment">
                        </textarea><br><br>
		   <input type="submit" name="comm" value="COMMENT"> <br><br>
		   
		 <table>
		  <h1>COMMENT</h1>
			  <tr>
				<th>COMMENT</th>
				<th>action</th>
			  </tr>
			  <tr>
				<td><p>Today is Thursday</p></td>
				<td> Delete</td>
			  </tr>
		  </table>

		 </form>

      </fieldset>
	</body>

</html>