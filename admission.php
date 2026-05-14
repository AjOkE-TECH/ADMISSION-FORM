<?php require_once('submit_student.php'); ?>

<!DOCTYPE html>
<html>
<head>

<title>Student Admission Form</title>

<style>

{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: Arial, sans-serif;
}

body{
    background:#dfe6e9;
    padding:40px 15px;
}

.container{
    width:60%;
    
    margin:auto;
    background:#fff;
    padding:35px;
    border-radius:15px;
}

h2{
    text-align:center;
    margin-bottom:25px;
    color:indigo;
    font-size:30px;
}

.row{
    display:flex;
    gap:15px;
}

.row .form-group{
    width:70%;
}

.form-group{
    margin-bottom:18px;
}

label{
    display:block;
    margin-bottom:8px;
    font-weight:bold;
    color:#444;
}

input,
select,
textarea{
    width:100%;
    padding:13px;
    border:1px solid #ccc;
    border-radius:8px;
    outline:none;
    font-size:15px;
    transition:0.3s;
}

input:focus,
select:focus,
textarea:focus{
    border-color:indigo;
}

textarea{
    resize:none;
    height:80px;
}

input[type="file"]{
    background:#f5f5f5;
    padding:10px;
}

button{
    width:100%;
    padding:14px;
    border:none;
    background:indigo;
    color:white;
    font-size:17px;
    border-radius:8px;
    cursor:pointer;
    font-weight:bold;
}

.success{
    margin-top:15px;
    background:#d4edda;
    color:#155724;
    padding:12px;
    border-radius:6px;
    text-align:center;
}

.error{
    margin-top:15px;
    background:#f8d7da;
    color:#721c24;
    padding:12px;
    border-radius:6px;
    text-align:center;
}

#errorMessages{
    margin-bottom:15px;
}

</style>

</head>

<body>

<div class="container">

<h2>Student Admission Form</h2>

<div id="errorMessages"></div>

<form id="admissionForm" method="post" enctype="multipart/form-data">

<div class="form-group">
<label>Upload Passport</label>
<input type="file" name="image" id="image">
</div>

<div class="row">

<div class="form-group">
<input type="text" name="firstname" id="firstname" placeholder="First Name">
</div>

<div class="form-group">
<input type="text" name="lastname" id="lastname" placeholder="Last Name">
</div>

</div>

<div class="form-group">
<label>Date of Birth</label>
<input type="date" name="dob" id="dob">
</div>

<div class="form-group">
<input type="text" name="department" id="department" placeholder="Department">
</div>

<div class="form-group">
<select name="gender" id="gender">
<option value="">Select Gender</option>
<option>Male</option>
<option>Female</option>
</select>
</div>

<div class="form-group">
<input type="text" name="state" id="state" placeholder="State of Origin">
</div>

<div class="form-group">
<input type="text" name="nationality" id="nationality" placeholder="Nationality">
</div>

<div class="form-group">
<textarea name="hobbies" id="hobbies" placeholder="Hobbies"></textarea>
</div>

<div class="form-group">
<input type="text" name="parent_name" id="parent_name" placeholder="Parent Name">
</div>

<div class="form-group">
<input type="tel" name="parent_phone" id="parent_phone" placeholder="Parent Phone">
</div>

<div class="form-group">
<textarea name="address" id="address" placeholder="Home Address"></textarea>
</div>

<button type="submit" name="student_reg">
Submit Admission
</button>

<?php if(!empty($success)) { ?>
<div class="success">
    <?php echo $success; ?>
</div>
<?php } ?>

<?php if(!empty($error)) { ?>
<div class="error">
    <?php echo $error; ?>
</div>
<?php } ?>

</form>

</div>

<script src="assets/js/script.js"></script>

</body>
</html>