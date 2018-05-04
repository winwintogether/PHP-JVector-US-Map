<?php

include 'db.php';

function db_search($keyword){
    global $conn;

        $sql = "SELECT code, state, name from county where state  like '%$keyword%'";
        $result = $conn->query($sql);
        $num =$result->num_rows;
        $rows = array();

        if($num<=0){
            $sql = "SELECT code, state, name from county where state  like '%$keyword%' or name  like '%$keyword%'";
            $result = $conn->query($sql);
        } 
        
        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        echo json_encode($rows);
   
}

$keyword = $_POST['keyword'];
db_search($keyword);

?>