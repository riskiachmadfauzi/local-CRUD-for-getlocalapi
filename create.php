<?php

    require_once ('helper.php');

    $title       = $_POST['title'];
    $description = $_POST['description'];
    $director    = $_POST['director'];
    $photo       = $_POST['photo'];
    // $title = $_POST['title'];

    $query = "INSERT INTO films(title, description, director, photo) VALUES ('$title', '$description', '$director', '$photo')";
    $sql = mysqli_query($db_connect, $query);

    // ""

    if($sql){

    echo json_encode (array('message' => 'created!'));

    }

    else {
    echo json_encode (array('message' => 'Error!'));
    }

?>