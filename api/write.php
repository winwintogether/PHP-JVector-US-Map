<?php
include 'db.php';
$data = json_decode($_POST['data']);
$sql ="";
global $conn;
$result = false;
foreach($data as $item){
	//if(isset($item->state_name)){
		$sql = "INSERT INTO county (code, name, state) VALUES (".$item->county_code.", '".$item->county_name."', '".$item->state_name."')";
	//}
	//else{
		//$sql = "INSERT INTO county (code, name, state) VALUES (".$item->county_code.", '".$item->county_name."', '')";
	//}
	
	//$sql = $item->county_code;
	$result=$conn->query($sql);
}


echo json_encode($result);
?>
