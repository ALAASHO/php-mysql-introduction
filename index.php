<?php

declare(strict_types=1);

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);


//require 'connection.php';
require 'insert.php';


function whatIsHappening(){
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}


whatIsHappening();

$con = openConnection();
$sql = "SELECT studentID , first_name , last_name , email , preferred_language   FROM student ";
$result = $con->query($sql);


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>


<form method="POST">
    <label for="first_name">First name:</label>
    <input type="text" name="first_name">
    <br>
    <label for="last_name">Last name:</label>
    <input type="text" name="last_name">
    <br>
    <label for="username">Username:</label>
    <input type="text" name="username">
    <br>
    <label for="gender">Gender:</label>
    <input type="text" name="gender">
    <br>
    <label for="linkedin">LinkedIin:</label>
    <input type="text" name="linkedin">
    <br>
    <label for="github">Github:</label>
    <input type="text" name="github">
    <br>
    <label for="email">Email:</label>
    <input type="text" name="email">
    <br>
    <label for="preferred_language">Preferred language:</label>
    <input type="text" name="preferred_language">
    <br>
    <label for="avatar">Avatar:</label>
    <input type="text" name="avatar">
    <br>
    <label for="video">Video:</label>
    <input type="text" name="video">
    <br>
    <label for="quote">Quote:</label>
    <input type="text" name="quote">
    <br>
    <label for="edited_date">edited_date:</label>
    <input type="text" name="edited_date">
    <br>
    <label for="quote_author">Quote author:</label>
    <input type="text" name="quote_author">
    <br>
    <button type="submit" name="submit">Big Data!</button>
    <!--    <button>submit</button>-->
</form>
<br>
<br>
<br>


<table>
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email </th>
        <th>Preferred lang</th>
        <th>Profile Link</th>
    </tr>
    <?php
//    $con = openConnection();
//    // Check connection
////    if ($con->connect_error) {
////        die("Connection failed: " . $con->connect_error);
////        echo "just test";
////    }
//
//    $sql = "SELECT studentID , first_name , last_name , email , preferred_language   FROM student ";
//    $result = $con->query($sql);
//    if ($result->num_rows > 0) {
// output data of each row
//$https://www.ionos.com/community/hosting/mysql/use-php-to-retrieve-information-from-a-mysqlmariadb-database/
//        while($row = mysqli_fetch_array($result) ) {
////        while($row = $result->fetch_assoc()) {
//            echo "<tr><td>" . $row["first_name"]. "</td><td>" . $row["last_name"] . "</td><td>"
//                . $row["email"]. "</td></tr>" . $row["preferred_language"]. "</td></tr>";
//        }
//        echo "</table>";
////    } else { echo "0 results"; }
    ///
    ///
    ///
    ///

    foreach ($result as $row): ?>
    <tr>
        <td><?php echo $row['studentID'] ?></td>
        <td><?php echo $row['first_name'] ?></td>
        <td><?php echo $row['last_name'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['preferred_language'] ?></td>
        <td><?php echo 'http://database.local/profile.php?user='.$row['studentID'] ?></td>
        <a href=""> </a>
    </tr>

    <?php endforeach;;?>
<!--    $con->close()-->
</table>


</body>
</html>











