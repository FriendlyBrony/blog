<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>News Update Manager</title>
</head>
<?php
if(isset($_POST["updateNew"]))
{
$publ = $_POST["publisher"]; $tit = $_POST["title"]; $bod = $_POST["body"];
$cn = mysqli_connect("sql107.epizy.com", "epiz_21063544", "friendly100prc") or die("ERROR: ".mysqli_connect_error());
$db = mysqli_select_db($cn, "epiz_21063544_blog") or die("ERROR".mysqli_error($cn));
$qry = mysqli_query($cn, "UPDATE `blog` SET `pub_title` = '$tit', `pub_body` = '$bod', `publisher` = '$publ', `pub_date` = CURRENT_DATE() WHERE `blog`.`id` = 1;");
if ($qry)
{
    echo("<font color='#c8ff00'>Uploaded. You will redirected to main page</font>");
    header("Refresh: 5;Location: http://blog.friendlybrony.cf/;");
}
}
?>
<body>
    <center>
    <h1>News Update Manager</h1>
    <form action="" method="post" autocomplete="off">
        <input type="text" id="text" name="title" required placeholder="New's Title">
        <textarea name="body" id="text" placeholder="New's Body"></textarea>
        <input type="text" id="text" name="publisher" required placeholder="New's Author">
        <hr>
        <input id="button" type="submit" name="updateNew" value="Update">
    </form>
</center>
</body>
</html>
