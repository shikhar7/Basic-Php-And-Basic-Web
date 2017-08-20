<?php
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("DB2", $connection);
session_start();
// Storing Session
$user_check=$_SESSION['login_user'];
$ses_sql=mysql_query("select username from sign where email='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['email'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: contact.php'); // Redirecting To Home Page
}
?>
