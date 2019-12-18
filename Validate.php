<?php
	// $decoded = json_decode($_POST['data'],true);

	// output values:
	// foreach ($decoded as $value) {
	//    echo $value["name"] . "=" . $value["value"];
	// }

	// //set values:
	// foreach ($decoded as $value) {
	//     $$value["name"] = $value["value"];
	// }

	// //both:
	// foreach ($decoded as $value) {
	//     $$value["name"] = $value["value"];
	//     echo $value["name"] . "=" . $$value["name"];
	//     echo "";
	// }
	$data = $_POST['dara'];
	echo $data;
	return $data;
?>
