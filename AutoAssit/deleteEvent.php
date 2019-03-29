<?php

$id = $_GET['id'];

echo $id;

$db = mysqli_connect('localhost', 'root', '', 'autoassit');
$sql = "delete from appointment where Reference_No='" . $id . "'";
$result = mysqli_query($db, $sql);


if ($db->query($sql) === TRUE) {
    //echo "New record created successfully";
    header("location:event.php");
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

echo $result;

$db->close();


