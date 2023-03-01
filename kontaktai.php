 <?php
session_start();
if (isset($_SESSION['username']) && $_SESSION['username']=="admin")
{
        echo "Sveiki sugráþæ adminas!<br><a href='logout.php'>Atsijungti</a>";
}
else
        header("Location: login.php");	
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sida.LT</title>
<script language="javascript">var image_pre_load='#x12h8192';</script>
<meta name="description" content="Signalizacijos darbai" />
<meta name="keywords" content="Signalizacijos darbai" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.auto-style1 {
	font-size: medium;
}
.auto-style2 {
	font-size: small;
}
.auto-style3 {
	float: left;
	width: 308px;
	margin-right: 0px;
}
.auto-style4 {
	float: left;
	width: 520px;
	margin-top: 33px;
	margin-left: 324px;
	margin-bottom: 0px;
	display: inline;
}
.auto-style16 {
	margin-left: 8px;
}
.auto-style17 {
	margin-left: 7px;
}
</style>
</head>

<body onLoad='f();'><script language="javascript" src="images/menu.js"></script>

<div id="wrapper">


  <div class="header" style="height: 127px">
    <div class="headertop"><img src="images/spacer.gif" alt="" border="0" /></div>
    <div class="floatleft logo" style="height: 110px"><a href="index.php" title="Home"><img src="images/logo.png" alt="Home" border="0" /></a></div>
    <div class="floatleft head2"><img src="images/innerhead.jpg" alt="" width="580" border="0" /></div>
  </div>

  <div class="innerblack">
  <div class="innergrey">
  <div class="innerbg"> 
     <div class="innermenugrey"> 
            <div class="floatleft menucontainerlightblue">
            <div class="menubg">   
                <ul>
            <li><a href="index.php" class="home">&nbsp;</a></li>    
                   <li><a href="index.php" class="home">&nbsp;</a></li>    
                  <li><a href="akcijos.php" class="services">&nbsp;</a></li>
                  <li><a href="paslaugos.php" class="solutions">&nbsp;</a></li> 
                  <li><a href="produktai.php" class="products">&nbsp;</a></li> 
                  <li><a href="about.php" class="about">&nbsp;</a></li>  
                  <li class="nobg"><a href="kontaktai.php" class="contact">&nbsp;</a></li>
                </ul>     
            </div>
            <div class="floatleft phonenumber"><img src="images/phonenumber.jpg" alt="" border="0" /></div>
            
            <div class="innerspacer1"><img src="images/spacer.gif" alt="" border="0" /></div>
            <div class="innerspacer2"><img src="images/spacer.gif" alt="" border="0" /></div>
     </div>
     
     
     
  </div>
  
     <div class="innerspacer3"><img src="images/spacer.gif" alt="" border="0" /></div>
     
     <div class="innerspacerdiv1"><img src="images/spacer.gif" alt="" border="0" /></div>
     <div class="auto-style3">
       <div class="product_division"><img src="images/kontaktai.jpg" alt="" border="0" /></div>
       
       <div class="innercontentleft" style="height: 241px">         
         <div class="main_con" style="height: 172px; width: 264px;">
         <a class="fontbold" href="#"><span class="auto-style1">UAB "Signalizacijos darbai"</span></a><br/>
        	 <span class="auto-style2"><strong>Adresas:</strong> <br>Obelynës g. 67-1, LT-47401 Kaunas <br/>
        	 <strong>Tel:</strong> +370 685 27996,      +370 650 47295 <br/>
        	 <strong>El.paðtas:</strong> info@sida.lt </span> <br/>
         	<br>
         </div>       
       </div>
       
       <div class="innerleft2"><img src="images/innerleft2.jpg" alt="" border="0" /></div>
       
        <div class="alarmsystem"><a href="produktai.html"><img src="images/alarmsystem.jpg" alt="" border="0" /></a></div>

       <div class="security"><img src="images/security.jpg" alt="" border="0" /></div>
       
     </div>

     <div class="innercontent">
     
       <div class="auto-style4" style="width: 213px; height: 179px">
		   <img src="images/kamera.png" alt="" border="0" width="188" /></div>
       
       <div class="main_con">
       
       <a class="fontbold" href="#"><span class="auto-style1">Susisiekite:</span></a><br/><br/><br/>
		
	<form method="POST" action="mail.php">
        
Vardas (*):&nbsp;&nbsp;
	
	
      <input style="width: 140px;"  type="text" name="vardas" id="form" class="auto-style16"/>
 	   <br>El. pa&#353;tas (*):
	
        <input type="text" name="elpastas" style="width: 140px;" id="form" />
  	  <br>Telefono nr.:
  
      <input name="tema" style="width: 140px;" type="text" id="form" class="auto-style17" />
		<br>&#381;inut&#279; (*):<br />
        <textarea name="laiskas" cols="40" rows="5"  id="form" > </textarea>
    <br />
       
         <input type="reset" style="margin-left:30px; margin-top:20px;" class="knopke" value="I&#353;trinti">
         <input type="submit" class="knopke" value="Si&#371;sti">
    </form> 
       
       </div>
     </div>
     <div class="innerfooterspacer"><img src="images/spacer.gif" alt="" border="0" /></div>
  </div>   
  
  </div> 
  </div>       
  

<div class="innerfooterblack">
  <div class="innerfootergrey">
    <div class="innerfooterlightgrey">  
        <div class="innerfootercontent" style="text-align:right;"> 
       <div style="margin-top:62px; margin-right:10px;" id="footer_copyright">
   

      <a  style="color:#666; text-decoration:none;">www.sida.lt</a> 
       &nbsp;</div>
      </div> 
    </div>  
  </div>
</div>

<div class="innerfooterbottom"><img src="images/spacer.gif" alt="" border="0" /></div>

</div>
</body>
</html>



 