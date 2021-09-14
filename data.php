<?php

    require_once ('helper.php');

    $query = 'SELECT * FROM films ORDER BY id DESC';
    $sql = mysqli_query($db_connect, $query);

    if($sql){

    $result = array();
    while($row = mysqli_fetch_array($sql)){
        array_push($result, array(
            'id' => $row['id'],
            'title' => $row['title'],
            'description' => $row['description'],
            'director' => $row['director'],
            'photo' => $row['photo'],
        ));
    }

    echo json_encode ($result);

    }

?>
