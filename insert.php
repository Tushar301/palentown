


<html>

<body>

 

 

<?php

$con = mysql_connect("tcp:studenthello.database.windows.net","Vegeta","Tushargupta@123");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("UniversityDB", $con);

 

$sql="INSERT INTO UniversityDB(sid,roll,lname,fname,gpa,major)
VALUES ('$_POST[sid]',$_POST[roll],'$_POST[lname]','$_POST[fname]',$_POST[gpa], '$_POST[major]' )";


 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "1 record added";

 

mysql_close($con)

?>

</body>

</html>
