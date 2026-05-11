<?php
require_once('config.php');

$id = base64_decode($_GET['id']);

$result = mysqli_query($conn, "SELECT * FROM details WHERE id='$id'");

$row = mysqli_fetch_assoc($result);

$message = "";

if(isset($_POST['update'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $department = $_POST['department'];
    $parent_phone = $_POST['parent_phone'];
    $state = $_POST['state'];

    $image = $_FILES['image']['name'];

    if($image != ""){

        $tmp_name = $_FILES['image']['tmp_name'];

        move_uploaded_file($tmp_name, "uploads/".$image);

        $update_image = ", image='$image'";

    }else{

        $update_image = "";

    }

    $query = "UPDATE details SET

    firstname='$firstname',
    lastname='$lastname',
    department='$department',
    parent_phone='$parent_phone',
    state='$state'

    $update_image

    WHERE id='$id'";

    $update = mysqli_query($conn, $query);

    if($update){

        $message = "Profile Updated Successfully";

        header("refresh:1; url=profile.php?id=" . base64_encode($id));

    }

}
?>

<!DOCTYPE html>
<html>

<head>

<title>Update Profile</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial;
}

body{
    background:#dfe6e9;
    padding:40px;
}

.update-container{
    width:500px;
    margin:auto;
    background:white;
    padding:30px;
    border-radius:25px;
    box-shadow:0 10px 30px rgba(0,0,0,0.1);
}

.update-container h2{
    text-align:center;
    margin-bottom:25px;
    color:#2d3436;
}

.profile-preview{
    text-align:center;
    margin-bottom:20px;
}

.profile-preview img{
    width:120px;
    height:120px;
    border-radius:50%;
    object-fit:cover;
    border:4px solid #636e72;
}

input{
    width:100%;
    padding:14px;
    margin-bottom:15px;
    border:1px solid #ccc;
    border-radius:12px;
    outline:none;
}

input:focus{
    border-color:#0984e3;
}

button{
    width:100%;
    padding:15px;
    border:none;
    background:#0984e3;
    color:white;
    border-radius:12px;
    font-size:16px;
    cursor:pointer;
}

button:hover{
    background:#0652DD;
}

.success{
    background:#00b894;
    color:white;
    padding:14px;
    border-radius:10px;
    margin-bottom:15px;
    text-align:center;
}

</style>

</head>

<body>

<div class="update-container">

<h2>Update Student Profile</h2>

<?php if($message != "") { ?>

<div class="success">
    <?php echo $message; ?>
</div>

<?php } ?>

<div class="profile-preview">

<img src="uploads/<?php echo $row['image']; ?>">

</div>

<form method="POST" enctype="multipart/form-data">

<input type="file" name="image">

<input type="text"
name="firstname"
value="<?php echo $row['firstname']; ?>"
placeholder="First Name">

<input type="text"
name="lastname"
value="<?php echo $row['lastname']; ?>"
placeholder="Last Name">

<input type="text"
name="department"
value="<?php echo $row['department']; ?>"
placeholder="Department">

<input type="text"
name="state"
value="<?php echo $row['state']; ?>"
placeholder="State">

<input type="text"
name="parent_phone"
value="<?php echo $row['parent_phone']; ?>"
placeholder="Parent Phone">

<button type="submit" name="update">
Update Profile
</button>

</form>

</div>

</body>

</html>