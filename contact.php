<?php
include('login.php');

if(isset($_SESSION['login_user'])){
header("location: hello1.php");
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
background-repeat:repeat-y;
}
div.container {
    width: 50%;
padding:10px;
margin:100px 0px 0px 320px;
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
input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>
<div style="background-color:#111; color:#111;  padding:0px; margin: -22px -22px 100px -8px;">
<p>1</p>
</div>
<div style="background-color:black; color:white;  padding:10px; margin: -100px -22px 5px -8px;">

<ul>
<li style="float:left"><a class="active" href="hello.php">TECHNOLOGY</a></li>
 <li><a class="active" href="contact.php">Login</a></li>
 <li><a  href="signup.php">Sign Up</a></li>
 <li><a href="about.php">About</a></li>
<li><a href="contactlist.php">Contact</a></li>
 <li><a href="news.php">News</a></li>
  <li><a href="hello.php">Home</a></li>
 
  

</ul>
</div>
<div class="container">
<header>
   <h1>LOGIN</h1>
</header>
<article>
<center>
  
<div>
  <form action="contact.php" method="POST">
<label for="emailid">EMAIL</label><BR>
<input type="text" id="username" name="email"><BR>

    <label for="lname">Password:</label><BR>
    <input type="password" id="password" name="password"><BR>

  
    <input type="submit" value="Submit" name="submit">
<span><?php echo $error; ?></span>
  </form>
</div>

</center>
</article>
<footer>Copyright by technoseven.weebly.com</footer>
</div>
</body>
</html>
