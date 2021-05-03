<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Blood Donation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">
        <link rel="stylesheet" type="text/css" media="screen" href="../css/styles.css">
        <style>
        input{
            margin-bottom:20px;
        }
    </style>
            <link
            href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    </head>
    <body>
       <nav class="navbar">
    <div class="brand-title">Blood Bank</div>
    <a href="#" class="toggle-button">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </a>
    <div class="navbar-links">
      <ul>
        <li><a href="../index.html">Home</a></li>
        <li><a href="../eligibility.html">Eligibility</a></li>
        <li><a href="../register.html">Register</a></li>
        <li><a href="../search.html">Request</a></li>
        <li><a href="../faq.html">FAQ</a></li>
        <li><a href="../ContactUs.html">Contact Us</a></li>
        <li><a href="../chatbot.html">Chatbot</a></li>
      </ul>
    </div>
  </nav>
<br><br>
<?php
require 'config.php';

$conn = mysqli_connect($host,$user,$password,$database);
if($conn->connect_error){
    error_log("CONNECTION ERROR IN CONNECTING DB");
}

$blood_group = $_POST['blood_group'];

$sql = "SELECT name,place FROM donors WHERE blood_group='$blood_group'";

$result = $conn->query($sql);

$str="<table class='w3-table-all'>";
$no=0;
$str.="<tr><th>No.</th><th>Name</th><th>Place</th></tr>";
if ($result->num_rows >= 1) {
    while ($row = $result->fetch_assoc()) {
        $no++;
        $str.="<tr><th>$no</th><td>$row[name]</td><td>$row[place]</td></tr>";
    }
}

$str.="</table>";

echo $str;
?>

<a href="../search.html" class="main-quote-btn">Try another</a>
</div>
<script type="text/javascript">
const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]
toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})  
</script>
</body>
</html>