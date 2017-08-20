<?php
include('login.php');

if(!isset($_SESSION['login_user'])){
header("location: contactlist.php");
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
input[type=text], select {
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
<div style="background-color:black; color:white;  padding:10px; margin: -100px -22px 100px -8px;">

<ul>
<li style="float:left"><a class="active" href="hello.php">TECHNOLOGY</a></li>
<li><a href="logout.php">Logout</a></li>
<li><a href="account.php">Account</a></li>
 <li><a href="about.php">About</a></li>
<li><a class="active" href="contactlist.php">Contact</a></li>
 <li><a href="news.php">News</a></li>
  <li><a href="hello.php">Home</a></li>
</ul>
</div>
<div.shikhar style="color:greysolid;padding:25px 50px;">
<center><b><p style="font-size:300%;">CONTACT US</p></b>
<br><h1>IF YOU THINK MATHS IS HARD, TRY WEB DESIGNING</h1></center>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container">

<header>
   <h1>CONTACT US</h1>
</header>
<article>
<center>
  
<div>
   <form action="contactlist.php" method="POST">
   First Name:<br><input type="text" name="fname"><BR>
	Last Name<br><input type="text" name="lname"><BR>
	EMAIL<br><input type="text" name="email"><BR>
	COUNTRY</label><br> <select id="country" name="country">
      <option value="india">India</option>
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
  <input type="submit" value="Submit">
  </form>
<?php
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("DB2", $connection);
if(isset($_POST['fname'])&&isset($_POST['lname'])&&isset($_POST['email'])&&isset($_POST['country']))
{
$fname=htmlentities($_POST['fname']);
$lname=htmlentities($_POST['lname']);
$email=htmlentities($_POST['email']);
$country=htmlentities($_POST['country']);
if(!empty($fname)&&!empty($lname)&&!empty($email)&&!empty($country))
{
$sql = "insert into contact_us values('','$fname','$lname','$email','$country')";
if (mysql_query($sql) === TRUE) {
    echo "Congratulations!message sent";
} else {
    echo "Please Give the valid details";
}
}
else
{
echo "Fill All The Fields";
}
}
?>

</div>

</center>
</article>

<footer>Copyright by technoseven.weebly.com</footer>

</div>
</body>
</html>
