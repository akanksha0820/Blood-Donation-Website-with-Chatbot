<?php
$conn = mysqli_connect("localhost","root","","blood");


$name = mysqli_real_escape_string($conn,$_POST['name']);
$blood_group = mysqli_real_escape_string($conn,$_POST['blood_group']);
$phone = mysqli_real_escape_string($conn,$_POST['phone']);
$age = mysqli_real_escape_string($conn,$_POST['age']);
$place = mysqli_real_escape_string($conn,$_POST['place']);

// $query = "INSERT INTO `donors` (`name`, `blood_group`, `phone`, `age`, `place`) VALUES ('$name', '$blood_group','$phone', '$age', '$place')";
$query = "INSERT INTO donors (name, blood_group, phone,age,place)VALUES ('$name', '$blood_group','$phone', '$age', '$place')"
$query_run = mysqli_query($conn,$query);

if($query_run)
{
	echo "Done";
	
}

else{
	echo "$conn->error";
}
header('Location:register.html');
?>

