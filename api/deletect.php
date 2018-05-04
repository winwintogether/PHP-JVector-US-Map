<?php
include 'db.php';

function deletect($id){
    global $conn;

    $sql = "delete from ctinfo where id=".$id;
    $result=$conn->query($sql);
    echo json_encode($result);
}
$id = $_POST["ct_id"];
deletect($id);
?>
