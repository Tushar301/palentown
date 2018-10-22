



<html>

<body bgcolor = "#E9967A">

 

 

<?php

$userid = $_POST['newsid'];


try {
    $conn = new PDO("sqlsrv:server = tcp:studenthello.database.windows.net,1433; Database = UniversityDB", "Vegeta", "Tushargupta@123");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}


$sql = "SELECT * FROM universitydb where Student_ID = $userid  ";
try{
$rows=$conn->query($sql);
}
catch(PDOException $r)
{
    echo "$r";
}
foreach ($rows as $row)
{
    $fname=$row['FirstName']  ;
    $lname=$row['LastName']  ;
    $roll=$row['Roll_no']  ;
    $gpa=$row['Gpa']  ;
    $major=$row['Major']  ;
    }
echo" Your Name is : $fname   $lname <br> <br> ";

echo" Your Roll no is : $roll <br> <br> ";

echo" Your Gpa is : $gpa <br> <br>" ;

echo " Your Major Proect is on : $major <br> <br>";


 $conn.close();



?>

</body>

</html>
