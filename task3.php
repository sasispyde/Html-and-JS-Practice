<!DOCTYPE html>
<html>
<head>
	<title>Task3</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <style type="text/css">
  	body{
  		text-align: center;
  	}
  </style>
  
</head>
<body>
	<?php
	session_start();

	$minmark=35;
	$bool=false;
	$bool1=false;
	$nameErr ="";
	$tamilErr ="";
	$englishErr ="";
	$mathsErr ="";
	$scienceErr ="";
	$socialErr ="";
	$name = $tamil =$english = $maths = $science = $sscience = "";
	$tamilf =$englishf = $mathsf = $sciencef = $ssciencef = "";
	$marksArray =$_POST[a];
	$uname=$_POST["name"];

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  if (empty($_POST["name"])) {
		    $nameErr = "Name is required";
		  } else {
		  	 $name = $_POST["name"];
		    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		      $nameErr = "Only letters and white space allowed"; 
		    }
		}
			if ($marksArray[0] =="") {
		    $tamilErr = "mark is required";
		  } else {
		  	 $tamil = $marksArray[0];
		    if (!preg_match('/^[0-9]*$/',$tamil) || $tamil >100) {
		      $tamilErr = "Enter valid mark";
		    }
		}
		if ($marksArray[1] =="") {
		    $englishErr = "mark is required";
		  } else {
		  	 $english = $marksArray[1];
		    if (!preg_match('/^[0-9]*$/',$english) || $english >100) {
		      $englishErr = "Enter valid mark";
		    }
		}
		if ($marksArray[2] =="") {
		    $mathsErr = "mark is required";
		  } else {
		  	 $maths = $marksArray[2];
		    if (!preg_match('/^[0-9]*$/',$maths) || $maths >100) {
		      $mathsErr = "Enter valid mark";
		    }
		}
		if ($marksArray[3] =="") {
		    $scienceErr = "mark is required";
		  } else {
		  	 $science = $marksArray[3];
		    if (!preg_match('/^[0-9]*$/',$science) || $science >100) {
		      $scienceErr = "Enter valid mark";
		    }
		}
		if ($marksArray[4] =="") {
		    $socialErr = "mark is required";
		  } else {
		  	 $sscience = $marksArray[4];
		    if (!preg_match('/^[0-9]*$/',$sscience) || $sscience >100) {
		      $socialErr = "Enter valid mark";
		    }
		}
			$_SESSION["firstname"]=$uname;
			$_SESSION["first"]=$marksArray;
			// var_dump($_SESSION["first"]);
			// echo $_SESSION["firstname"];

			if(isset($_SESSION['firstname']) && empty($_SESSION['firstname'])) {
				$bool=false;
			}
			else{
				$bool=true;
				// header("Location: final.php");
			}
			if (in_array("", $marksArray, true)){
					$bool1=false;
				}
				else{
					$bool1=true;
			}
			if($bool&&$bool1){
				 header("Location: final.php");
			}
	}
	?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		
		<label>Student Name :<input class="form-control" type="text" name="name" value="<?php echo $name;?>"></label>
		<span> <?php echo $nameErr;?></span>
		<br><br>	
		<label>Tamil :<input type="text" class="form-control" value="<?php echo $tamil;?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57  " maxlength="3" name="a[]" "3"></label>
		<span> <?php echo $tamilErr;?></span>
		<br><br>
		<label>English :<input type="text" class="form-control" value="<?php echo $english;?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57  " maxlength="3" name="a[]" max="3"></label>
		<span> <?php echo $englishErr;?></span>
		<br><br>
		<label>Maths :<input type="text" class="form-control" value="<?php echo $maths;?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57  " maxlength="3" name="a[]" max="3"></label>
		<span> <?php echo $mathsErr;?></span>
		<br><br>
		<label>Science :<input type="text" class="form-control" value="<?php echo $science;?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57  " maxlength="3" name="a[]" max="3"></label>
		<span> <?php echo $scienceErr;?></span>
		<br><br>
		<label>Social Science :<input type="text" class="form-control" value="<?php echo $sscience;?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57  " maxlength="3" name="a[]" max="3"></label>
		<span> <?php echo $socialErr;?></span>
		<br><br>
		<input type="submit" class="btn btn-default">

	</form>
</body>
</html>