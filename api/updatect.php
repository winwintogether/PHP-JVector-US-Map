<?php
include 'db.php';

function updatect($ct){
    global $conn;

    $sql = "update ctinfo set other_id = '".$ct['ct_other_id']."', bcode = '".$ct['ct_bcode']."', tia = '".$ct['ct_tia']."', windspeed_f = '".addslashes($ct['ct_windspeed_f'])."', special_locale = '".addslashes($ct['ct_special_locale'])."', windspeed_local = '".addslashes($ct['ct_windspeed_local'])."', name ='".addslashes($ct['ct_name'])."', note = '".addslashes($ct['ct_note'])."', contact = '".addslashes($ct['ct_contact'])."', email = '".$ct['ct_email']."', phone = '".$ct['ct_phone']."'  where id like ".$ct['ct_id'];
    $result=$conn->query($sql);

    echo json_encode($result);
}
$ct = $_POST["ct"];
updatect($ct);
?>
