<?php

session_start();

if(!isset($_SESSION['user'])){

    header("Location: index.php");
    exit();

}

?>

<!DOCTYPE html>
<html>

<head>

<title>Dashboard</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    background:#DDA0DD;
    min-height:100vh;
}

.header{
    background:indigo;
    color:white;
    padding:20px 40px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.header h2{
    font-size:24px;
}

.logout-btn{
    text-decoration:none;
    background:white;
    color:indigo;
    padding:10px 18px;
    border-radius:8px;
    font-weight:bold;
}

.welcome-box{
    text-align:center;
    margin-top:50px;
    color:white;
}

.welcome-box h1{
    font-size:40px;
    margin-bottom:10px;
}

.welcome-box p{
    font-size:18px;
}

.cards{
    width:90%;
    margin:50px auto;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:25px;
}

.card{
    background:white;
    padding:30px;
    border-radius:15px;
    text-align:center;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

.card h3{
    color:indigo;
    margin-bottom:15px;
}

.card p{
    color:#666;
    margin-bottom:20px;
}

.card a{
    display:inline-block;
    background:indigo;
    color:white;
    text-decoration:none;
    padding:12px 20px;
    border-radius:8px;
}

</style>

</head>

<body>

<div class="header">

<h2>Student Dashboard</h2>

<a href="logout.php" class="logout-btn">
Logout
</a>

</div>

<div class="welcome-box">

<h1>
Welcome,
<?php echo $_SESSION['user']; ?>
</h1>

<p>
Student Admission Management System
</p>

</div>

<div class="cards">

<div class="card">

<h3>Add Student</h3>

<p>
Register a new student admission record.
</p>

<a href="admission.php">
Open
</a>

</div>

<div class="card">

<h3>View Students</h3>

<p>
View all registered students.
</p>

<a href="student.php">
Open
</a>

</div>

</div>

</body>

</html>