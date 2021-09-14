<?php

    require_once ('helper.php');
    parse_str(file_get_contents('php://input'), $value);

    $title       = $value['title'];
    $description = $value['description'];
    $director    = $value['director'];
    $photo       = $value['photo'];
    $id          = $value['id'];

    $query = "UPDATE films SET title='$title', description='$description', director='$director', photo='$photo' WHERE id='$id'";
    $sql = mysqli_query($db_connect, $query);

    // ""

    if($sql){

    echo json_encode (array('message' => 'updated!'));

    }

    else {
    echo json_encode (array('message' => 'Error!'));
    }

?>