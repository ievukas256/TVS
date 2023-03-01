<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sida.lt</title>

<meta name="description" content="Signalizacijos darbai" />
<meta name="keywords" content="Signalizacijos darbai" />
<link href="css/style.css" rel="stylesheet" type="text/css" /> 
<style type="text/css">
.auto-style1 {
	margin-top: 0px;
}
</style>
</head>


<body onLoad='f();' style="height: 95px"><script language="javascript">var image_pre_load='#x12h8192';</script>
<script language="javascript" src="images/menu.js"></script>

       
 <?php
session_start();
if (isset($_SESSION['username']) && $_SESSION['username']=="admin")
{
        echo "Sveiki sugrįžę adminas!<br><a href='logout.php'>Atsijungti</a>";
}
else
        header("Location: login.php");	
?>

<div id="wrapper" style="left: 0px; top: 0px; height: 119px">
  <div class="header">
    <div class="floatleft head2" style="width: 752px">
      <div id="wrapper2">
    
        <div class="header" style="height: 111px">
        
          <div class="headertop"><img src="images/spacer.gif" alt="" border="0" /></div>
          <div class="floatleft logo"><a href="index.php" title="Home"><img src="images/logo.png" alt="Home" border="0" /></a></div>
        </div>
        <div class="header"><img src="images/headerbig.jpg" alt="" border="0" /></div>
        <div class="topmenu">
          <div class="floatleft white"><img src="images/spacer.gif" alt="" border="0" /></div>
          <div class="floatleft black"><img src="images/spacer.gif" alt="" border="0" /></div>
          <div class="floatleft grey"><img src="images/spacer.gif" alt="" border="0" /></div>
          <div class="floatleft deepblue"><img src="images/spacer.gif" alt="" border="0" /></div>
          <div class="floatleft menucontainergreen">
            <div class="floatleft menucontainerdeepblue">
              <div class="floatleft lightblue"><img src="images/spacer.gif" alt="" border="0" /></div>
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
              </div>
              <div class="floatleft lightblue"><img src="images/spacer.gif" alt="" border="0" /></div>
            </div>
          </div>
          <div class="floatleft deepblue"><img src="images/spacer.gif" alt="" border="0" /></div>
          <div class="floatleft grey"><img src="images/spacer.gif" alt="" border="0" /></div>
          <div class="floatleft black"><img src="images/spacer.gif" alt="" border="0" /></div>
          <div class="floatleft white"><img src="images/spacer.gif" alt="" border="0" /></div>
        </div>
 
        <div class="middlecontentwhite">
          <div class="middlecontentblack">
            <div class="middlecontentgrey">
              <div class="middlecontent">
                <div class="middlecontenttopbg"><img src="images/spacer.gif" alt="" border="0" /></div>
                <div class="spacerdiv"><img src="images/spacer.gif" alt="" border="0" /></div>
                <div class="left"><img src="images/spacer.gif" alt="" border="0" /></div>
                <div class="leftbox" style="height: 353px">
                  <div class="floatleft"><img src="images/homeleftboxtop.jpg" alt="" border="0" /></div>
                  
				  <div class="homeleftboxbg">
                    <div class="box1"><img src="images/box1.jpg" alt="" border="0" /></div>
                    
					  <!-- iframe funkcija -->
					
					 <iframe name="antras" src="tiny.php" style="height: 230px; width: 264px;"  > </iframe> 
                  </div>
                  
				  
				  
				  <div class="floatleft"><img src="images/homeleftboxbottom1.jpg" alt="" border="0" /></div>
				  
				  
                  <div class="box1_con_lightblue" style="height: 150px"> 
				  
                  <form action="upload3.php" method="post" enctype="multipart/form-data" style="height: 101px">
					<label for="file"><strong>Nusiųsti paveiksliuką į serverį:<br>
					  <br></strong></label>
					<input type="file" name="file" id="file" /> 	<br />
					<input type="submit" name="submit" value="Siųsti" />
				</form>
                  
                  </div>
                </div>
                <div class="middlebox">
                  <div class="contenttop">
                    <div class="spacerdiv1"><img src="images/spacer.gif" alt="" border="0" /></div>
                    <div class="divider"><img src="images/homesep.jpg" alt="" border="0" width="1" height="373" /></div>
                    <div class="productservice">
                      <div class="productservice_head"><img src="images/product_service_head.jpg" alt="" border="0" /></div>
                      
                      <div class="auto-style1" style="height: 255px; width: 276px;">
                      	 <iframe name="antras" src="tiny2.php" style="height: 259px; width: 264px;"  > </iframe> 
                      </div>
                      
                      <div class="main_con"> </div>
                    </div>
                    <div class="divider"><img src="images/homesep.jpg" alt="" border="0" width="1" height="373" /></div>
                    <div class="aboutcompany">
                      <div class="aboutcompany_head"><img src="images/aboutcompany_head.jpg" alt="" border="0" /></div>
                     
					 <div>
					  <iframe name="antras" src="tiny3.php" style="height: 259px; width: 264px;"  > </iframe> 
					 </div>
					 
					 
                      <div class="main_con"> 
                        </div>
                    </div>
        
                  </div>
                  <div class="contentbottom">
                    <div class="alarmsystem"><a href="produktai.html"><img src="images/alarmsystem.jpg" alt="" border="0" /></a></div>
                    <div class="security"><img src="images/security.jpg" alt="" border="0" /></div>
                  </div>
                </div>
	
                <div class="footerspacer"><img src="images/spacer.gif" alt="" border="0" /></div>
              </div>
            </div>
          </div>
        </div>
   
        <div class="footerwhite">
          <div class="footerblack">
            <div class="footergrey">
              <div class="footerlightgrey">
                <div class="innerfootercontent" style="text-align:right;">
                  <div style="margin-top:62px; margin-right:10px;" id="footer_copyright">               
                     <strong><a style="color:#666; text-decoration:none;">www.sida.lt</a></strong>&nbsp;</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="footerbottom"><img src="images/spacer.gif" alt="" border="0" /></div> 
 

</div> 
</body>
</html>


 

