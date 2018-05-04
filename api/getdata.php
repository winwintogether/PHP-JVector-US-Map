<?php
include 'db.php';

function getData($state,$ct_code){
    global $conn;
	$stateData=array();
    $ctData=array();
    $ctName=array();

    if(isset($state)){
    	$sql = "SELECT * from state where name  like '$state'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {

                $stateData[] = $row;
            }
        }
    }
    if($ct_code !="" ){
        $sql = "SELECT * from county where code  = '$ct_code'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $ctName[] = $row;
            }
        }
    }

   if($ct_code != ""){
    	$sql = "SELECT ctif.id, ct.name as ctname, ct.flag as flag, ctif.other_id,  ctif.bcode, ctif.tia, ctif.windspeed_f,ctif.special_locale,ctif.windspeed_local,ctif.name, ctif.note, ctif.contact, ctif.email,ctif.phone, ctif.lastupdate  from  ctinfo ctif inner join county ct on ctif.code = ct.code where ct.code = '$ct_code'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $ctData[] = $row;
            }
        }
    }
   $resultData=new \stdClass();
   $resultData->state = $stateData;
   $resultData->ct = $ctData;
   $resultData->ctname =$ctName;

   echo json_encode($resultData);
}
$state = $_POST['state'];
$ct_code = $_POST['ct_code'];
getData($state,$ct_code);
?>
