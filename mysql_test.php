<?php
$host = getenv("MYSQL_SERVICE_HOST");
$port = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("MYSQL_USER");
$dbname = getenv("MYSQL_DB_NAME");
$dbpwd = getenv("MYSQL_PASSWORD");;
 
$connection = mysqli_connect($host.":".$port, $dbuser, $dbpwd, $dbname) or die("Error " . mysqli_error($connection));
$query = "SELECT * from emp" or die("Error in the consult.." . mysqli_error($connection));
echo "Hello All.. Here is the list of users: <br>";
$rs = $connection->query($query);
while ($row = mysqli_fetch_assoc($rs)) {
    echo "User Id: ".$row['id'] . " User Name: " . $row['name'] . " User salary: " . $row['sal'] . "<br>";
}
echo "End of the list <br>";
mysqli_close($connection);
?>