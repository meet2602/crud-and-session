<?php
// Create database connection using config file
include_once("config.php");
?>

<html>

<head>
    <title>Homepage</title>
</head>

<body>
    <a href="add_user.php">Add New User</a><br /><br />
    <?php
    $sql = "SELECT * FROM register ORDER BY id ASC";
    $result = mysqli_query($mysqli, $sql);
    if (mysqli_num_rows($result) > 0) { ?>
        <table width='80%' border=1>

            <tr>
                <th>id </th>
                <th>first_name</th>
                <th>last_name</th>
                <th>age</th>
                <th>email</th>
                <th>dob</th>
                <th>gender</th>
                <th>dept</th>
                <th>college</th>
                <th>mobile</th>
                <th>address</th>
                <th></th>
            </tr>
        <?php
        // Fetch all users data from datsabase


        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['id'] . "</td>";
            echo "<td>" . $user_data['first_name'] . "</td>";
            echo "<td>" . $user_data['last_name'] . "</td>";
            echo "<td>" . $user_data['age'] . "</td>";
            echo "<td>" . $user_data['email'] . "</td>";
            echo "<td>" . $user_data['dob'] . "</td>";
            echo "<td>" . $user_data['gender'] . "</td>";
            echo "<td>" . $user_data['dept'] . "</td>";
            echo "<td>" . $user_data['college'] . "</td>";
            echo "<td>" . $user_data['mobile'] . "</td>";
            echo "<td>" . $user_data['address'] . "</td>";
            echo "<td><a href='edit_user.php?id=$user_data[id]'>Edit</a> | <a href='delete_user.php?id=$user_data[id]'>Delete</a></td></tr>";
        }
    }
        ?>
        </table>
</body>

</html>