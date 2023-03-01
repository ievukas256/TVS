 <?php
session_start();
if (isset($_SESSION['username']) && $_SESSION['username']=="admin")
{
        echo "Sveiki sugrįžę adminas!<br><a href='logout.php'>Atsijungti</a>";
}
else
        header("Location: login.php");	
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sida.lt</title>
<script language="javascript">var image_pre_load='#x12h8192';</script>
<meta name="description" content="Signalizacijos darbai" />
<meta name="keywords" content="Signalizacijos darbai" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.auto-style1 {
	margin: 0px 1px;
	float: left;
	width: 882px;
	min-height: 300px;
	background-color: #222932;
	display: inline;
}
.auto-style2 {
	float: left;
	width: 308px;
	margin-top: 109px;
	margin-bottom: 47px;
	clear: both;
}
</style>
</head>

<body onLoad='f();'><script language="javascript" src="images/menu.js"></script>

<div id="wrapper">

  <div class="header" style="height: 128px">
    <div class="headertop"><img src="images/spacer.gif" alt="" border="0" /></div>
    <div class="floatleft logo" style="height: 110px"><a href="index.php" title="Home"><img src="images/logo.png" alt="Home" border="0" /></a></div>
    <div class="floatleft head2"><img src="images/innerhead.jpg" alt="" width="580" border="0" /></div>
  </div>

  
  <div class="auto-style1">
  <div class="innergrey">
  <div class="innerbg"> 
     <div class="innermenugrey"> 
            <div class="floatleft menucontainerlightblue">
            <div class="menubg">   
                <ul>
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
     <div class="innerleft" style="height: 501px">
       
       <div class="innerround"><img src="images/innerround.jpg" alt="" border="0" /></div>
       <div class="innercontentleft">         
         <div class="main_con">
         <a class="fontbold" target="pirmas" href="tiny17.php">Istorija</a><br />       
         </div>       
       </div>
       
       <div class="innerround"><img src="images/innerround.jpg" alt="" border="0" /></div>
       <div class="innercontentleft">         
         <div class="main_con">
         <a class="fontbold" target="pirmas" href="tiny18.php">Struktūra</a><br />
       </div>       
       </div>
       
       <div class="innerround"><img src="images/innerround.jpg" alt="" border="0" /></div>
       <div class="innercontentleft">         
         <div class="main_con">
         <a class="fontbold" target="pirmas" href="tiny19.php">Patirtis</a><br />         
         </div>       
       </div>
       
       <div class="innerround"><img src="images/innerround.jpg" alt="" border="0" /></div>
       <div class="innercontentleft">         
         <div class="main_con">
         <a class="fontbold" target="pirmas" href="tiny20.php">Rekvizitai</a><br />        
         </div>       
       </div>
       
       <div class="auto-style2" style="height: 30px"><img src="images/innerleft2.jpg" alt="" border="0" /></div>
       
      <div class="alarmsystem"><a href="produktai.php"><img src="images/alarmsystem.jpg" alt="" border="0" /></a></div>

       <div class="security"><img src="images/security.jpg" alt="" border="0" /></div>
       
     </div>

     <div class="innercontent" style="width: 528px">
     
       <div class="inner_product_service_head"><img src="images/inner_product_service_head.jpg" alt="" border="0" /></div>
       
       <div class="main_con">
       
              
      <iframe name="pirmas" src="istorija.html"  style="width: 509px; height: 603px"  >
    J&#363;s&#371; nar�ykl&#279; nepalaiko i�kylan&#269;i&#371; r&#279;m&#371;!
 </iframe> 
       
       
       
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
         <a style="color:#666; text-decoration:none;">www.sida.lt</a></div>
      </div> 
    </div>  
  </div>
</div>

<div class="innerfooterbottom"><img src="images/spacer.gif" alt="" border="0" /></div>

</div>
</body>
</html>



 