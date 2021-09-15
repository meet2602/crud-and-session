<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once("config.php");

    $sql = "CREATE TABLE register (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
first_name VARCHAR(30) NOT NULL,
last_name VARCHAR(30) NOT NULL,
age VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
dob VARCHAR(30) NOT NULL,
gender VARCHAR(30) NOT NULL,
dept VARCHAR(30) NOT NULL,
college VARCHAR(30) NOT NULL,
mobile VARCHAR(30) NOT NULL,
address VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

    if (mysqli_query($mysqli, $sql)) {
        echo "Table Register created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($mysqli);
    } ?>
</body>

</html>