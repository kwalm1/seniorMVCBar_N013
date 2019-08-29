<html>
<head><title>Drink Queue</title>
</head>
<body>
<h1 id="header">Drinks</h1>
</body>
</html>
<?php
function openConn(){
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $database = 'dbdrinks';

    $conn = new mysqli ($dbHost, $dbUser, $dbPass, $database)
    or die("connection failed %s\n". $conn -> error);

    return $conn;
}

$conn = OpenConn();


    $sql = "SELECT * FROM `drinkqueue`";
    $results = $conn->query($sql);

    if ($results->num_rows > 0) {
        // output data of each row
        echo "<table border = '1'>";
        echo "<tr><th>Id</th><th>Drink</th><th>Quantity</th>";
        while ($row = $results->fetch_assoc()) {
            echo
            "<tr>
            <td>{$row["Id"]}</td>
            <td>{$row["Drink"]}</td>
            <td>{$row["Quantity"]}</td>
            </tr>";
        }
        echo "</tables>";
    } else {
        echo "0 results";
    }
    $conn->close();

?>