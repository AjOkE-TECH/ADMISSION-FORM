<?php
require_once('config.php');

$id = base64_decode($_GET['id']);

$result = mysqli_query($conn, "DELETE FROM details WHERE id='$id'");

if($result){
    header("Location: student.php");
}
?>