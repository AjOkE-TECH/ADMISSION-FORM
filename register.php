<?php
require_once('config.php');
require_once('send_email.php');
require_once('includes/functions.php');

$success = "";
$error = "";

if(isset($_POST['register'])){

    $fullname = mysqli_real_escape_string(
    $conn,
    cleanInput($_POST['fullname'])
);

$email = mysqli_real_escape_string(
    $conn,
    cleanInput($_POST['email'])
);

$password = mysqli_real_escape_string(
    $conn,
    cleanInput($_POST['password'])
);

$confirm_password = mysqli_real_escape_string(
    $conn,
    cleanInput($_POST['confirm_password'])
);
    if($password != $confirm_password){

        $error = "Passwords do not match";

    }else{

        $query = "INSERT INTO users(fullname,email,password)

        VALUES('$fullname','$email','$password')";

        $result = mysqli_query($conn, $query);

        if($result){

            sendMail($email, $fullname);

            $success = "Account Created Successfully";

        }else{

            $error = "Registration Failed";

        }

    }

}
require_once('includes/header.php');
?>

<div class="container">

<div class="left-side">

<div class="logo-box">

<img src="image/ajoke logo.png" class="logo">

<h1>Student Portal</h1>

<p>
Admission Management System
</p>

</div>

</div>

<div class="right-side">

<div class="form-container">

<h2>Create Account</h2>

<p class="subtitle">
Register to access the student portal
</p>

<form method="POST">

<div class="input-box">

<label>Full Name</label>

<input type="text"
name="fullname"
placeholder="Enter Full Name"
required>

</div>

<div class="input-box">

<label>Email Address</label>

<input type="email"
name="email"
placeholder="Enter Email"
required>

</div>

<div class="input-box">

<label>Password</label>

<input type="password"
name="password"
placeholder="Create Password"
required>

</div>

<div class="input-box">

<label>Confirm Password</label>

<input type="password"
name="confirm_password"
placeholder="Confirm Password"
required>

</div>

<button type="submit"
name="register"
class="create-btn">

Create Account

</button>

<?php

if($success != "")
{
    echo successMessage($success);
}

?>

<?php

if($error != "")
{
    echo errorMessage($error);
}

?>
</form>

<div class="bottom-links">

<p>
Already have an account?
<a href="admission.php">sign in</a>
</p>

</div>

</div>

</div>

</div>

</div>

<?php require_once('includes/footer.php'); ?>