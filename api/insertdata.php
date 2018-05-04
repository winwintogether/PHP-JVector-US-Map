<?php
include 'db.php';

function insertData($ct){
    global $conn;

    $sql = "INSERT INTO ctinfo (code,other_id,bcode,tia,windspeed_f,special_locale,windspeed_local,name,note,contact,phone,email,lastupdate) VALUES ('".$ct['ct_code']."','".$ct['ct_other_id']."','".$ct['ct_bcode']."','".$ct['ct_tia']."','".addslashes($ct['ct_windspeed_f'])."','".addslashes($ct['ct_special_locale'])."','".addslashes($ct['ct_windspeed_local'])."','".addslashes($ct['ct_name'])."','".addslashes($ct['ct_note'])."','".addslashes($ct['ct_contact'])."','".$ct['ct_phone']."','".$ct['ct_email']."',now())";
    $result=$conn->query($sql);

    echo json_encode($result);
}
$ct = $_POST["ct_data"];
insertData($ct);
?>
