<?php
include('login.php');

if(!isset($_SESSION['login_user'])){
header("location: about.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>TECHNOSEVEN-HOME</title>
<style>
body
{
background-image:url("1.jpg");
background-repeat:no-repeat;
}
div.container {
    width: 100%;
    border: 1px solid gray;
}

header, footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}


article {
    margin:0px;
    border-left: 0px solid gray;
    padding: 0px;
    overflow:hidden;
background-color: white;
}
ul {
    list-style-type: none;
    margin: 0px;
    padding: 0px;
    overflow: hidden;
    background-color: #333;
}

li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 10px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
.floating-box {
    float: left;
    width: 550px;
    height: 175px;
    margin: 17px;
    border: 3px ; 
background-color:#b8b894;
}
</style>
</head>
<body>
<div style="background-color:#111; color:#111;  padding:0px; margin: -22px -22px 100px -8px;">
<p>1</p>
</div>
<div style="background-color:black; color:white;  padding:10px; margin: -100px -22px 100px -8px;">

<ul>
<li style="float:left"><a class="active" href="hello.php">TECHNOLOGY</a></li>
<li><a href="logout.php">Logout</a></li>
<li><a href="account.php">Account</a></li>
 <li><a class="active" href="about.php">About</a></li>
<li><a href="contactlist.php">Contact</a></li>
 <li><a href="news.php">News</a></li>
  <li><a href="hello.php">Home</a></li>
</ul>
</div>
<div style="color:greysolid;padding:25px 50px;">
<center><b><p style="font-size:300%;">ABOUT US</p></b>
<br><h1>IF YOU THINK MATHS IS HARD, TRY WEB DESIGNING</h1></center>
</div>
<br><br><br><br><br><br><br><br>
<div class="container">

<header>
   <h1>ABOUT US</h1>
</header>
<article>
<center>
  <video width="1170" controls autoplay>
  <source src="1.mp4" type="video/mp4">
</center>
</video>
<center>
<div class="floating-box"><h1>Who We Are</h1><br><p><b>We are the tech geeks and enjoy talking about the new technology</b></p>.</div>
<div class="floating-box"><h1>Our History</h1><br><p><b>We just started this site,but we have interest in technology from our childhood.</b></p>.</div>
</center>
</article>

<footer>Copyright by technoseven.weebly.com</footer>

</div>
</body>
</html>
