<?php
require_once './Users.php';

$user = new Users();
if(!$user->isLoggedIn ()){
    header ("location:/signing.php");
}
?>


<html>
<head>
<style>
th, td {
    border: 1px solid black;
}

table {
  text-align: center;
  margin: 90px;
  border-collapse: collapse;
  width: 30%;
}
</style>
</head>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "projekt3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, username, age, email FROM users WHERE email = '" .$_SESSION['email']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>Username</th><th>Age</th><th>Email</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["username"]. "</td><td>" . $row["age"]. "</td><td>" .$row['email']. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>

