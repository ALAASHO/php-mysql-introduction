<?php

require 'index.php';
require 'insert.php';


$con = openConnection();
$sql = "   SELECT studentID * FROM student  ";
$result = $con->query($sql);


    foreach ($result as $row): ?>
    <tr>
        <td><?php echo $row['studentID'] ?></td>
        <td><?php echo $row['first_name'] ?></td>
        <td><?php echo $row['last_name'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['preferred_language'] ?></td>
        <td><?php echo 'http://database.local/profile.php?user='.$row['studentID'] ?></td>

    </tr>
    <?php endforeach;;?>

