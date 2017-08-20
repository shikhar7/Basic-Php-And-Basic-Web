<!DOCTYPE html>
<html>
<head>
<title>Shikhar</title>
<style>
table tr:nth-child(even) {
    background-color: #eee;
}
table tr:nth-child(odd) {
   background-color:#fff;
}
table th {
    background-color: black;
    color: white;
}
</style>
</head>
<body>
<table border="0" style="background-color:#f1f1c1;text-align:center">
<tr>
<th>SNO</th>
<th>NAME</th>
<th>ROLL NO</th>
<th>LAST DATE</th>
<th>ATTENDENCE</th>
<th>COMMENT</th>
</tr>
<?php
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("DB2", $connection);
$date=date("Y-m-d");
$result=mysql_query("select * from attend order by sno", $connection);

$count=0;
 while( $row = mysql_fetch_array($result))
{
$count=$count+1;
  echo "<form action=library1.php method=POST>";
  echo "<tr>";
  echo "<td>" . "<input type=text value=" .$row['sno']." </td>";
  echo "<td>" . "<input type=text value=" .$row['name']." </td>";
  echo "<td>" . "<input type=text name=rollno[$count] value=" .$row['rollno']." </td>";
  echo "<td>" . "<input name=date type=date value=$date></td>";
 echo "<td>" . "<input type=radio name=attendence[$count] value='present'>";?>P
  <?php echo "<input type=radio name=attendence[$count] value='absent'>";?>A
  <?php
  echo"</td>";
  echo "<td><input name=Comment[$count] type=Comment row=3 column=5></td>";
//echo $count."<br>";
  }
  echo "</tr>";     
  ?>
  </table>
  <input type="submit" value="submit">
  </form>

<?php
$n=1;
while($n!=$count+1)
{
//echo "n=".$n;
//echo "\ncount=".$count;
if(isset($_POST['attendence'][$n]))
{
//$name=htmlentities($_POST['name']);
$rollno=htmlentities($_POST['rollno'][$n]);
$attending=htmlentities($_POST['attendence'][$n]);
$comment=$_POST['Comment'][$n];
//echo "attending=".$attending;
//$password=htmlentities($_POST['password']);
//$country=htmlentities($_POST['country']);
$ses_sql=mysql_query("select * from attend where rollno='$rollno'", $connection);
$rows = mysql_fetch_assoc($ses_sql);
$present=$rows['present'];
$absent=$rows['absent'];
if($attending=="present")
{
$present=$rows['present']+1;
}
else
{
$absent=$rows['absent']+1;
}
$attendence=($present/($present+$absent))*100;
if(!empty($attending))
{
$sql = "update attend set `attendence` = '$attendence', `present` = '$present', `absent` = '$absent', `Comment` = '$comment', `date` = '$date' WHERE `attend`.`rollno` = '$rollno'";
if (mysql_query($sql) === TRUE) {
//    echo "Congratulations";
//header("location: account.php");
} else {
    echo "Please Give the valid details";
}
}
else
{
echo "Fill All The Fields";
}
}
$n=$n+1;
}
?>

</body>
</html>
