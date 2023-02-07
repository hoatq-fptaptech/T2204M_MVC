<?php
/**
 * @return mysqli|void
 */
function connect(){
    $db = "t2204m";
    $host = "localhost";
    $user = "root";
    $pwd = "root";

    $conn = new mysqli($host,$user,$pwd,$db);
    if($conn->connect_error){
        echo $conn->error;
        die();
    }
    return $conn;
}

/**
 * @param $sql
 * @return array
 */
function get($sql){
    $conn = connect();
    $rs = $conn->query($sql);
    $data = [];
    if($rs->num_rows > 0){
        while ($row = $rs->fetch_assoc()){
            $data[] = $row;
        }
    }
    return $data;
}

/**
 * @param $sql
 * @return bool|mysqli_result
 */
function update($sql){
    $conn = connect();
    return $conn->query($sql);
}
