<?php
    
    session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<html>
<head>
<title>Mad About Gadget</title>
<link href="mAg.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
</head>
<body background="Web-background2.jpg">
<div id="wrapper">
	       
<div id="header">

	<div id="img">
		<img src="mag1.png" title="Mad about Gadget"width="120px" height="100px"/>
	</div>
		<span class="slogan">Discover your product !</span>
		
</div>

<div class ="navbar">
<ul>
	<li><a href="web2/mAg.html">HOME</a></li>
	<li><a href="#NEWS">NEWS</a></li>
	<li><a href="#VIDEOS">VIDEOS</a></li>
	<li><a href="#REVIEWS">REVIEWS</a></li>
	<li><a href="#Others">OTHERS</a></li>
	<li><a href="#About us">ABOUT US</a></li>
	
</ul>
</div>
<!-- This code makes a sliding -->
<div class="slider">
   
   <img class="mySlides" src="samsungbanner.jpg" width="1125px" height="230px" >
   <img class="mySlides" src="iphonebanner.jpg" width="1125px" height="230px" >
   <img class="mySlides" src="headphonebanner.jpg" width="1125px" height="230px" >

  <span class="buttonleft" onclick="plusDivs(-1)">&#10094;</span>
  <span class="buttonright" onclick="plusDivs(1)">&#10095;</span>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

<!-- This code makes a sliding end-->


<!-- This code makes a sidenav start-->


<div class="sidenav">
	<ul>
		<li><a href="#"> <span><img src="phone.png" width="25px" height="25px"/></span> <span style="display:inline-block" width="2px"></span> Mobiles</a>
			<ul>
					<li><a href="Samsung.php">Samsung</a></li>
					<li><a href="#">One Plus</a></li>
					<li><a href="#">Huawei</a></li>
			</ul>
		</li>	
			
			
		<li><a href="#"> <span><img src="laptop.png" width="25px" height="25px"/></span> <span style="display:inline-block" width="2px"></span> Laptops</a>
		      <ul>
					<li><a href="HP.php">HP</a></li>
					<li><a href="#">Macbook</a></li>
					<li><a href="#">Asus</a></li>
			 </ul>
		</li>
		<li><a href="#"> <span><img src="tablet.png" width="25px" height="25px"/></span> <span style="display:inline-block" width="2px"></span> Tablets</a></li>
		<li><a href="#"> <span><img src="others.png" width="25px" height="25px"/></span> <span style="display:inline-block" width="2px"></span>Others</a></li>
	</ul>
</div>

<!-- This code makes a sidenav end-->

<!-- This code makes a trends begin-->

<div id="trends">
<h1>Trends<h1>
</div>

<div id="trendmobiles">
<h2>Mobiles<h2>
</div>

<div class="samsungs8">
  <a href="file:///C:/Users/User/Desktop/web2/Samsung_s8.html"> <img src="samsungs8.png" width= "275.5px" height="175px"/> </a>
	<span class="samsungs8font">Samsung S8</span> <span class="samsungs8fontprice">: 77900 TK.</span>
</div>

<div class="samsung_s7">
	<a><img src="samsung s7.jpg" width= "275.5px" height="175px"/> </a>
	<span class="samsungs8font">Samsung S7</span> <span class="samsungs8fontprice">: 64900TK.</span>
</div>

<div class="samsung_s6">
	<a><img src="samsung_s6.jpg" width= "275.5px" height="175px"/> </a>
	<span class="samsungs8font">Samsung S6</span> <span class="samsungs8fontprice">: 44900TK.</span>
</div>

<div class="samsung_a7">
	<a><img src="samsung_a7.jpg" width= "275.5px" height="175px"/> </a>
	<span class="samsungs8font">Samsung A7</span> <span class="samsungs8fontprice">: 32900TK.</span>
</div>


<div id="trendmobiles">
<h2>Laptops<h2>
</div>

<div class="samsungs8">
  <a href="#"> <img src="hp_omen.jpg" width= "275.5px" height="175px"/> </a>
	<span class="samsungs8font">HP Omen</span> <span class="samsungs8fontprice">: 127000TK.</span>
</div>

<div class="samsung_s7">
	<a><img src="hp_envy_15.jpg" width= "275.5px" height="175px"/> </a>
	<span class="samsungs8font">HP Envy 15</span> <span class="samsungs8fontprice">: 100400TK.</span>
</div>


<div class="samsung_s6">
	<a><img src="hp_probook450g4.jpg" width= "275.5px" height="175px"/> </a>
	<span class="samsungs8font">HP 450 G4</span> <span class="samsungs8fontprice">: 70000TK.</span>
</div>

<div class="samsung_a7">
	<a><img src="hp_pavillion14.jpg" width= "275.5px" height="175px"/> </a>
	<span class="samsungs8font">HP Pavilion</span> <span class="samsungs8fontprice">: 66500TK.</span>
</div>



<div class="logandsignin">
	    <span> <img src="login.png" width="25px" height="25px"/> <span style="display:inline-block" width="2px"> <a href="file:///C:/Users/User/Desktop/web2/login.html">Login</a></span>
</div>

<div class="logandsignin1">
	      <span> <img src="signup.png" width="25px" height="25px"/> <span style="display:inline-block" width="2px"><a href="file:///C:/Users/User/Desktop/web2/signup.html">Sign Up</a></span>
</div>  

<pre>














</pre>


<div class="footer">
&copy 2017 madaboutgadget.com - All Rights Reserved
</div>

<div class="content">

		

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p style="color:#ffffff">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="mAg.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
</div>

</body>
</html>