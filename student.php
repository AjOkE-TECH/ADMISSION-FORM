<?php
require_once('config.php');

$result = mysqli_query($conn, "SELECT * FROM details");
?>

<!DOCTYPE html>
<html>
<head>

<title>All Students</title>

<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<div class="table-container">

<h2>All Students</h2>

<table>

<tr>
<th>profile</th>
<th>Name</th>
<th>Department</th>
<th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<tr>

<td>
<img src="uploads/<?php echo $row['image']; ?>" class="table-img">
</td>

<td>
<?php echo $row['firstname'];?>
<?php echo " "; ?>
<?php echo $row['lastname']; ?>
</td>

<td>
<?php echo $row['department']; ?>
</td>

<td>

<a href="profile.php?id=<?php echo base64_encode($row['id']); ?>" class="view-btn">
View
</a>

<a href="delete.php?id=<?php echo base64_encode($row['id']); ?>" class="delete-btn">
Delete
</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>