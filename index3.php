<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

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
where id=2";

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

$result = mysql_query("SELECT * FROM informacija where id=2");
while($row = mysql_fetch_array($result))
  {
  echo $row['info'];
  }
mysql_close($con)
?> 
<body>
	<form method="post" action="tiny2.php">

    <input type="submit" name="submit"  value ="redaguoti"/>	

</form>
</body>
</html>


