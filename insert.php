


<html>

<body>

 

 

<?php

 
 $hostname='tcp:studenthello.database.windows.net';
$username='Vegeta';
$password='Tushargupta@123';

try {
    $conn = new PDO("sqlsrv:server = tcp:studenthello.database.windows.net,1433; Database = UniversityDB", "Vegeta", "Tushargupta@123");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

if (!$conn)

  {

  die('Could not connect: ');

  }

 


 

$sql="INSERT INTO UniversityDB(sid,roll,lname,fname,gpa,major)
VALUES ('$_POST[sid]',$_POST[roll],'$_POST[lname]','$_POST[fname]',$_POST[gpa], '$_POST[major]' )";


 

if (!$conn->query($sql))

  {

  die('Error: ' );

  }

echo "1 record added";

 

$conn->close($con)

?>

</body>

</html>
