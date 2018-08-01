<html>
<head>
<title>FriendlyBlog</title>
<link rel="stylesheet" href="style.css"></head>
<body>
<center>
<?php
$squli = mysqli_connect("host", "login", "password") or die(mysqli_connect_error);
$dbs = mysqli_select_db($squli, "dbname") or die("ERROR: ".mysqli_error($squli));
$qry = mysqli_query($squli, "SELECT * FROM `blog` WHERE `id` = 1") or die("ERROR: ".mysqli_error($squli));
$array = mysqli_fetch_assoc($qry);
$title = $array["pub_title"];
$body = $array ["pub_body"];
$publisher = $array["publisher"];
$date = $array["pub_date"];
echo("<h1 class='newTitle'>$title</h1><hr><p class='newBody'>$body</p><hr><a class='newPublisher'>$publisher</a></br><a class='newDate'>$date</a>");
?>
</center>
</body>
</html>
