<?php include 'templates/header.php'; ?>

  <h1>Blog</h1>
  <!--
Blog title
Blog content
date posted

-->

<?php
$mysqli = new mysqli("localhost:3306", "root", "S?sPaKLsAmeT9$chu&_*", "notes");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if (isset($_GET['message'])) {

    $user=$mysqli->real_escape_string($_GET['user']);
    $message=$mysqli->real_escape_string($_GET['message']);
    $date=date('Y-m-d H:i:s');

    $sql="INSERT INTO notes(id, user, message, date) VALUES(0,'$user','$message','$date')";
    $mysqli->query($sql);
}

?>


<head>
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP and MySql</title>
</head>

<body>
<h2>Notes</h2>

<?php
$sql = "SELECT * FROM notes";
$result = $mysqli->query($sql);

while($row = $result->fetch_assoc()) {
  echo $row['user'].',  '.$row['date'].' <br />';
  echo $row['message'].'<br />';
  echo '------------------------ <br />';
}
?>

<form method="get" action="blog.php">
<p>User:
  <label for="user"></label>
  <input type="text" name="user" id="user" />
  <br />
</p>
<p>Message: <br />
  <label for="message"></label>
  <textarea name="message" id="message" cols="45" rows="5"></textarea>
</p>
<p>
  <input type="submit" name="submit" id="submit" value="Post message" />
</p>
</form>


<?php include 'templates/footer.php'; ?>
