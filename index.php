<?php
require_once('config.php');
require_once('includes/functions.php');

session_start();

require_once('config.php');

$error = "";

if(isset($_POST['login'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM users
              WHERE email='$email'
              AND password='$password'";

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_assoc($result);

        $_SESSION['user'] = $row['fullname'];

        header("Location: dashboard.php");
        exit();

    }else{

        $error = "Invalid Email or Password";

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

<h2>Welcome Back</h2>

<p class="subtitle">
Sign in to continue
</p>

<form method="POST">

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
placeholder="Enter Password"
required>

</div>

<button type="submit"
name="login"
class="login-btn">

Sign In

</button>

<?php if($error != "") { ?>

<div class="error">

<?php echo $error; ?>

</div>

<?php } ?>

</form>

<div class="bottom-links">

<p>

Don't have an account?

<a href="register.php">
Create Account
</a>

</p>

</div>

</div>

</div>

</div>

</body>

</html><?php require_once('includes/footer.php'); ?>