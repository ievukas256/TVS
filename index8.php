<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Redagavimas</title>

</head>

<?php

$con = mysql_connect('localhost', 'if080046', 'ievukas');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("if080046", $con);

$sql="update informacija 
set info=('$_POST[content]')
where id=7";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con)
?> 

<?php
$con = mysql_connect('localhost', 'if080046', 'ievukas');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("if080046", $con);

$result = mysql_query("SELECT * FROM informacija where id=7");
while($row = mysql_fetch_array($result))
  {
  echo $row['info'];
  }
mysql_close($con)
?> 
<body>
	<form method="post" action="tiny7.php">

    <input type="submit" name="submit"  value ="redaguoti"/>	

</form>
</body>
</html>


