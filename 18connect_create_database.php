<?php
$con=mysqli_connect("localhost","ashwin","ashwingrg"); //connecting to MySQL server
if($_POST){

//syntax:- mysqli_connect("host","username","password","dbname-optional");
//mysqli_close($con);  closing a connection
    if (mysqli_connect_errno()) //check connection
    {
        echo "Failed to connect to MySQL".mysqli_connect_error();
    }
    $sql="CREATE DATABASE IF NOT EXISTS practice";
    if(mysqli_query($con,$sql))
    {
        echo "Database practice created successfully";
    }
    else
    {
        echo "Error while creating database: ".mysqli_error($con);
    }
    $con=mysqli_connect("localhost","ashwin","ashwingrg","practice");
    if(mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL".mysqli_connect_errno();
    }
    $sql="CREATE TABLE IF NOT EXISTS Persons (PID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY (PID), FirstName VARCHAR(40), LastName VARCHAR(40), Age INT)";
    if(mysqli_query($con,$sql))
    {
        echo "Table Persons created successfully";
    }
    else
    {
        echo "Error while creating table".mysqli_error($con);
    }

    if ($_SERVER['REQUEST_METHOD']=="POST")
    {
        $fname=$lname=$age='';
        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $age=$_POST["age"];

        $sql="INSERT INTO Persons (FirstName,LastName,Age) VALUES ('$fname','$lname','$age')";
        if(!mysqli_query($con,$sql))
        {
            die("Error: ".mysqli_error($con));
        }
        else
        {
            echo "1 row added";
        }
    }
//Select all datas from table Persons

    /*while($row=mysqli_fetch_array($result))
    {
        echo $row['FirstName']." ".$row['LastName']." ".$row['Age'];
        echo "<br>";
    }*/

}

$result=mysqli_query($con,"SELECT * FROM Persons");
?>

<html>
<head></head>
<body>
    <hr>
    <h1>Fill up form:</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        First Name:<input type="text" name="fname" placeholder="enter your first name.." required=""><br>
        Last Name: <input type="text" name="lname" placeholder="enter your last name.." required=""><br>
        Age: <input type="number" name="age" step="1" min="15" max="50" placeholder="Age" required=""><br>
        <input type="submit" value="SUBMIT">
    </form><hr>
    <?php
    echo "You entered:"."<br>"."First Name: ".@$fname."<br>"."Last Name: ".@$lname."<br>"."Age: ".@$age
    ?>
    <hr>
    <h2 style="text-decoration: underline;">practice-DATABASE</h2>
    <h4>Table-Persons:</h4>
    <table border="1px">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
    </tr>
    <?php
    while (@$row=mysqli_fetch_array($result))
    {
        echo "<tr>";
            echo "<td>".$row['FirstName']."</td>";
            echo "<td>".$row['LastName']."</td>";
            echo "<td>".$row['Age']."</td>";
        echo "</tr>";
    }
    ?>
    </table><hr>

</body>
</html>

