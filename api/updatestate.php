<?php
include 'db.php';

function updateState($st){
    global $conn;

    $sql ="update state set bcode = '".$st['state_bcode']."', note ='".addslashes($st['state_note'])."', hyperlink = '".addslashes($st['state_hyperlink'])."', tia = '".$st['state_tia']."', contact = '".addslashes($st['state_contact'])."', email = '".$st['state_email']."', phone = '".$st['state_phone']."'  where name like '".$st['state_name']."'";
    $result=$conn->query($sql);

    echo json_encode($result);
}
$st = $_POST["state"];
updateState($st);
?>
