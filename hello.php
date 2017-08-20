<?php
include('login.php');

if(isset($_SESSION['login_user'])){
header("location: hello1.php");
}
?>
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
    margin-left: 0px;
    margin-right: 0px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
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
</style>
</head>
<body>
<div style="background-color:#111; color:#111;  padding:0px; margin: -22px -22px 100px -8px;">
<p>1</p>
</div>
<div style="background-color:black; color:white;  padding:10px; margin: -100px -22px 100px -8px;">

<ul>
<li style="float:left"><a class="active" href="hello.php">TECHNOLOGY</a></li>
<li><a  href="contact.php">Login</a></li>
 <li><a  href="signup.php">Sign Up</a></li>
 <li><a href="about.php">About</a></li>
<li><a href="contactlist.php">Contact</a></li>
 <li><a href="news.php">News</a></li>
  <li><a class="active" href="hello.php">Home</a></li>
  

</ul>
</div>
<div style="color:greysolid;padding:25px 50px;">
<center><b><p style="font-size:300%;">TECHNOLOGY</p></b>
<br><h1>All technology should be assumed guilty until proven innocent</h1></center>
</div>
<br><br><br><br><br><br><br><br>
<div class="container">

<header>
   <h1>City Gallery</h1>
</header>
  
  <ul><center>
    <li style="float:left"><a href="#london">London</a></li>
    <li style="float:left"><a href="#paris">Paris</a></li>
    <li style="float:left"><a href="#Tokyo">Tokyo</a></li>
<li style="float:right"><a class="active" href="hello.php">TECHNOLOGY</a></li>
  </ul></center>
<article>
<center>   <iframe src="shikhar.html" height="172" width="1030"></iframe></center>
</article>

<footer>Copyright by technoseven.weebly.com</footer>

</div>
</body>
</html>
