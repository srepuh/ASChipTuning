<!DOCTYPE html>
<!--
Template Name: PlusBusiness
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<?php session_start(); ?>
<html>
<head>
<style>
div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}

div.img:hover {
    border: 2px solid red;
}

div.img img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
</style>
<title>AS Chip tuning</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<link rel="stylesheet" href="../layout/styles/login.css" type="text/css" />
<script type="text/javascript" src="../layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="../layout/scripts/login.js"></script>
</head>
<body id="top">
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <!--<h1><a href="index.php"><img src="images/logo.png" width=200; height=80;></a></h1>-->
    </div>
    <div id="topnav">
      <ul style="height: 52px; left: -63px; position: relative;">
        <li><a href="..\index.php">Home</a></li>
        <li><a href="style-demo.php">Kontakt</a></li>
        <li><a href="full-width.php">Chip tuning</a></li>
		<li style="background: none;position: relative; top: -33px;"><a style="background: none;" href="index.php"><img src="../images/logo.png" width=200; height=80;></a> </li>
        
        <li class="active"><a href="Katalog.php">Katalog</a>
          <ul>
            <li><a href="AMK.php?tip=Auto">Auta</a></li>
            <li><a href="AMK.php?tip=Kamion">Kamioni</a></li>
            <li><a href="AMK.php?tip=Motor">Motori</a></li>
          </ul>
        </li>
		<li><a href="Galerija.php">Galerija</a></li>
        <li class="last"><a href="Novosti.php">Novosti</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="breadcrumb">
    <ul>
       <li class="first"><p <p style="width:500px; display:inline-block;">>Mob: 061/552-336 --- Mob: 061/815-816 | info@aschiptuning.com</p></li>
       <a style="float:right;" href="https://www.facebook.com/ASchiptuning/?fref=ts"><img src="../images/fb.png"></a>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="container">
    <div id="homepage">
     <div class="img">
  <a target="_self" href="../pages/AMK.php?tip=Auto">
    <img src="../images/g6.jpg" alt="" width="300" height="200">
  </a>
  <div class="desc">Auta</div>
</div>

<div class="img">
  <a target="_self" href="../pages/AMK.php?tip=Kamion">
    <img src="../images/mion.jpg" alt="" width="300" height="200">
  </a>
  <div class="desc">Kamioni</div>
</div>

<div class="img">
  <a target="_self" href="../pages/AMK.php?tip=Motor">
    <img src="../images/motoj.jpg" alt="" width="300" height="200">
  </a>
  <div class="desc">Motori</div>
</div>
    </div>
 
    <br class="clear" />
  </div>
</div>
 

<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="footer">
    <div class="box1">
      <h2>Sjedište tuning kuće</h2>
      <ul>
        <li>AS Chip tuning</li>
        <li>Adema Buće 234</li>
        <li>Sarajevo</li>
        <li>71000</li>
        <li>Tel: +38761/552-336</li>
        <li>Email: digitalmotiv@gmail.com</li>
        <li class="last">Facebook: <a href="https://www.facebook.com/ASchiptuning/?fref=ts">AS Chip Tuning</a></li>
      </ul>
    </div>
    
    <div class="box flickrbox">
      <h2>Posljednje slike u galeriji!</h2>
      <div class="wrap">
        <div class="fix"></div>
        <div id="sestSlika">
        </div>
        <div class="fix"></div>
      </div>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="http://www.etermini.com">eTermini team</a></p>
	
	<?php
	if(empty($_SESSION['username'])){
	?>
		<p id="loginFooter" class="fl_right"><a href="#" onclick="UcitajFormu()"><b>Admin LogIn</b></a></p>
	
	<?php
	}else{
		?>
		<form method="post">
			<p class="fl_right"><a href="#" onclick="return SubmitLogout()"><b>Admin LogOut</b></a></p>
			<p style="margin-right: 20px;" class="fl_right"><a href="adminPanel.php"><b>Admin Panel</b></a></p>
		</form>
		
	<?php	
	}
	?>
    <br class="clear" />
  </div>
</div>

<div id="loginDiv"></div>
<script>
$(document).ready(function(){
$.ajax({
	  url: '../php/ucitajPosljednjih6Slika.php',
	  type: 'GET',
	  success:function(response){
		  $("#sestSlika").html(response);
	  }
	});
});
</script>
</body>
</html>