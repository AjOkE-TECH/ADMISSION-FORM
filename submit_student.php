<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('config.php');

$success = "";
$error = "";

if(isset($_POST['student_reg'])){

    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);

    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);

    $dob = mysqli_real_escape_string($conn, $_POST['dob']);

    $department = mysqli_real_escape_string($conn, $_POST['department']);

    $gender = mysqli_real_escape_string($conn, $_POST['gender']);

    $state = mysqli_real_escape_string($conn, $_POST['state']);

    $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);

    $hobbies = mysqli_real_escape_string($conn, $_POST['hobbies']);

    $parent_name = mysqli_real_escape_string($conn, $_POST['parent_name']);

    $parent_phone = mysqli_real_escape_string($conn, $_POST['parent_phone']);

    $address = mysqli_real_escape_string($conn, $_POST['address']);

    /* IMAGE */

    $image = $_FILES['image']['name'];

    $tmp_name = $_FILES['image']['tmp_name'];

    $folder = "uploads/" . $image;

    move_uploaded_file($tmp_name, $folder);

    /* INSERT QUERY */

    $query = "INSERT INTO details(image,firstname,lastname,dob,department,gender,state,nationality,hobbies,parent_name,parent_phone,address)

    VALUES('$image','$firstname','$lastname','$dob','$department','$gender','$state','$nationality','$hobbies','$parent_name','$parent_phone','$address')";

    $result = mysqli_query($conn, $query);

    if($result){

        $success = "Submission Successful";

    }else{

        $error = "Submission Failed";

    }

}

?>