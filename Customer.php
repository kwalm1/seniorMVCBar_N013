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
$conn = openConn();
$drinkName = $_POST['Drink'];
$drinkQuan = $_POST['drinkQuan'];
CloseCon($conn);

if(isset($_POST['drinkQuan'])){
    addDrink($drinkName, $drinkQuan);
}

function addDrink($drinkName, $drinkQuan){
    $conn = openConn();
    $sql = "INSERT INTO `drinkqueue`(`Drink`, `Quantity`) VALUES ('".$drinkName."','".$drinkQuan."')";

    if (mysqli_query($conn,$sql)) {
        echo "New record created successfully";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    CloseCon($conn);
}

?>
<html>
<head>
    <title>Drink Menu</title>
    <style>

    </style>
</head>
<body>
<a href="../../../php%20files/index.php"><h5>HOME</h5></a>

<h1>Welcome to Kwame's Bar</h1>
<h3>Please Select  drink</h3>
<form method="post" action="customer.php">
    <table>
        <th colspan="4">Drink Selection</th>
        <tr>
            <td><strong>Type</strong></td>
            <td><strong>Name</strong></td>
            <td><strong>Price</strong></td>
            <td><strong>Quantity</strong></td>
        </tr>
        <tr>
            <td>Whiskey</td>
            <td><input type="text" name="Drink" value="Jack and Coke" readonly>Jack and Coke</td>
            <td>5.99</td>
            <td>
                <select name="drinkQuan">
                    <option>0</option>
                    <option value="one">1</option>
                    <option value="two">2</option>
                    <option value="three">3</option>
                    <option value="four">4</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="4"><input type="submit" name="submit" value="Order"></td>
        </tr>
    </table>
</form>
</body>
</html>
