<?php
require_once('config.php');

$id = base64_decode($_GET['id']);

$result = mysqli_query($conn, "SELECT * FROM details WHERE id='$id'");

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>

<title>Student Profile</title>

<link rel="stylesheet" href="css/style.css">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:40px;
    background:#dfe6e9;
}

/* PROFILE CARD */

.profile-card{
    width:550px;
    max-width:95%;
    background:white;
    border-radius:25px;
    overflow:hidden;
    box-shadow:0 15px 40px rgba(0,0,0,0.1);
}

/* HEADER */

.profile-header{
    background:#DDA0DD;
    padding:40px 20px;
    text-align:center;
    color:white;
}

.profile-img{
    width:100px;
    height:100px;
    border-radius:50%;
    object-fit:cover;
    border:5px solid white;
    margin-bottom:15px;
    box-shadow:0 5px 20px rgba(0,0,0,0.2);
}

.profile-header h2{
    margin-bottom:10px;
    font-size:30px;
}
/* BODY */

.profile-body{
    padding:30px;
}

.info-box{
    display:flex;
    justify-content:space-between;
    align-items:center;
    background:#f5f6fa;
    padding:16px 20px;
    border-radius:12px;
    margin-bottom:15px;
}

.info-title{
    font-weight:bold;
    color:#2d3436;
}

.info-value{
    color:#555;
    text-align:right;
    max-width:60%;
}

/* BUTTONS */

.button-group{
    display:flex;
    gap:10px;
    margin-top:25px;
}

.back-btn,
.update-btn{
    flex:1;
    text-align:center;
    padding:14px;
    border-radius:12px;
    text-decoration:none;
    color:white;
    font-weight:bold;
    transition:0.3s;
}

.back-btn{
    background:#636e72;
}

.update-btn{
    background:#0984e3;
}

.update-btn:hover{
    background:#0652DD;
}

</style>

</head>

<body>

<div class="profile-card">

    <!-- HEADER -->

    <div class="profile-header">

        <img src="uploads/<?php echo $row['image']; ?>" class="profile-img">

        <h2>
            <?php echo $row['firstname']; ?>
            <?php echo $row['lastname']; ?>
        </h2>

    </div>

    <!-- BODY -->

    <div class="profile-body">

        <div class="info-box">
            <div class="info-title">Date of Birth</div>
            <div class="info-value"><?php echo $row['dob']; ?></div>
        </div>

        <div class="info-box">
            <div class="info-title">Department</div>
            <div class="info-value"><?php echo $row['department']; ?></div>
        </div>

        <div class="info-box">
            <div class="info-title">Gender</div>
            <div class="info-value"><?php echo $row['gender']; ?></div>
        </div>

        <div class="info-box">
            <div class="info-title">State of Origin</div>
            <div class="info-value"><?php echo $row['state']; ?></div>
        </div>

        <div class="info-box">
            <div class="info-title">Nationality</div>
            <div class="info-value"><?php echo $row['nationality']; ?></div>
        </div>

        <div class="info-box">
            <div class="info-title">Hobbies</div>
            <div class="info-value"><?php echo $row['hobbies']; ?></div>
        </div>

        <div class="info-box">
            <div class="info-title">Parent Name</div>
            <div class="info-value"><?php echo $row['parent_name']; ?></div>
        </div>

        <div class="info-box">
            <div class="info-title">Parent Phone</div>
            <div class="info-value"><?php echo $row['parent_phone']; ?></div>
        </div>

        <div class="info-box">
            <div class="info-title">Address</div>
            <div class="info-value"><?php echo $row['address']; ?></div>
        </div>

        <!-- BUTTONS -->

        <div class="button-group">

            <a href="student.php" class="back-btn">
                Back
            </a>

            <a href="update.php?id=<?php echo base64_encode($row['id']); ?>" class="update-btn">
                Update Profile
            </a>

        </div>

    </div>

</div>

</body>

</html>