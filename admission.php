<?php require_once('submit_student.php'); ?>

<!DOCTYPE html>
<html>
<head>

<title>Student Admission Form</title>

<link rel="stylesheet" href="assets/css/style.css">

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