<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "event";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 





$sql = "SELECT * FROM student order by event desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo '<table style="width:100%">';
    echo "   <th>Roll no</th><th>First name</th><th>Last Name</th><th>Branch</th><th>Year</th><th>Mobile</th><th>event</th><th>Email</th>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td> " . $row["rollno"]. "</td><td>" . $row["fname"]  ."</td><td>" . $row["lname"]  ."</td><td>"
		. $row["branch"]  ."</td><td>" . $row["year"]  ."</td><td>" . $row["mobile"]  ."</td><td>". $row["event"]."</td><td>". $row["email"]. "</td></td>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>