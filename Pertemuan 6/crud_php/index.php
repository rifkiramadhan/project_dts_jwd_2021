<?php
    // Create database connection using config file
    include_once("config.php");

    // Fetch all users data from database
    $result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>

    <a href="add.php">Adda New User</a><br/><br/>
    <table width=80% border="1">
        <thead>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Update</th>
        </thead>

    <?php
        while($user_data = mysqli_fetch_array($result)) {
            echo "<tbody>";
            echo "<tr>";
            echo "<td>".$user_data['name']."</td>";
            echo "<td>".$user_data['mobile']."</td>";
            echo "<td>".$user_data['email']."</td>";
            echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a
                 href='delete.php?id=$user_data[id]'>Delete</a></td>";
            echo "</tr>";
            echo "</tbody>";
        } 
    ?>
    </table>

</body>
</html>