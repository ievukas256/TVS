<?php
if (isset($_POST['submit']))
{
        $Username="admin";
        $Password="admin";
        if (($_POST['user']==$Username) && ($_POST['pass']==$Password))
        {
                session_start();
                $_SESSION['username']="admin";
                echo "Prisijungimas pavyko<br><a href='index.php'>Administravimo zona</a>";
			
        }
        else
                echo "Netinkamas vartotojo vardas arba slaptazodis...";
}
else
{

?>

<!DOCTYPE HTML>
<html>
<head>

<title>Administravimas</title>

<style type="text/css">
.auto-style1 {
	font-family: "Courier New", Courier, monospace;
	font-weight: bold;
	font-size: x-large;
}
.auto-style2 {
	color: #FFFFFF;
}
.auto-style4 {
	text-align: center;
	margin-top: 125px;
}
.auto-style5 {
	margin-left: 0px;
}
.auto-style6 {
	margin-left: 559px;
}
</style>
<body style="margin-top: 0; background-color: #C0C0C0; background-image: url('images/bg.jpg')">
<div class="auto-style4">

	<img alt="" height="92" src="images/logo.png" width="253"><span class="auto-style1"><span class="auto-style2"><br>
	<br>Prisijungimas</td>:</span></span>
<span class="auto-style1">
</tr>

 <td class="leftlinks" style="height: 83px">

</span>

</div>

<FORM Method ="POST" ACTION = "login.php" class="auto-style6">

<INPUT TYPE = "TEXT" VALUE ="vardas" NAME = "user" style="width: 140px"><br>&nbsp;<br>
<INPUT TYPE = "password" VALUE ="***************" NAME = "pass" class="auto-style5" style="width: 140px">
		<br><br>
<INPUT TYPE = "submit" VALUE = "Prisijungti" Name = "submit" ></form>
</FORM>


</head>
</html> <?php
}
?>
