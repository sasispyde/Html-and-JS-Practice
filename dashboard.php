<?php
		session_start();

		 if($_SESSION["user"]=="" || $_SESSION["userid"]=="")
         {
            header("Location: index.php");
         }

		 // if($_GET['logout'])
		 // {
		 // 	fun1();
		 // }

		 // function fun1()
		 // {
		 //  session_destroy();
		 //  header("Location: index.php");
		 // }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Logout Page</title>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<style type="text/css">

		body
		{
			text-align: center;
			margin-top: 15%;
		}
		#table
		{
			text-align: center;
			width: 300px;
			height: 70px;
			margin-left: 38%;
		}

	</style>
</head>
<body>
	<table class="table table-striped table-dark table-bordered" id="table">
		<thead>
		  	<tr>
		     	<th >User Name</th>
		     	<th >User Id</th>
		   </tr>
		 </thead>
		 <tbody>
		 	 <td><?php echo ucfirst($_SESSION["user"]); ?></td>
		     <td><?php echo $_SESSION["userid"]; ?></td>
		 </tbody>
	</table>
	<!-- <button id="btnfun1" name="btnfun1" class="btn btn-primary" onClick='location.href="?logout=1"'>Logout</button> -->
	<a href="logout.php" class="btn btn-primary">Logout</a>
</body>
</html>