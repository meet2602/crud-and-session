<?php

// Check If form submitted, insert form data into users table.
include_once("config.php");
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $f_name = $_POST['first_name'];
    $l_name = $_POST['last_name'];
    $age_ = $_POST['age'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $dept = $_POST['dept'];
    $college_name = $_POST['college'];
    $mobile_num = $_POST['mobile'];
    $address = $_POST['address'];

    // Update user data into table

    $sql = "UPDATE register SET first_name='$f_name',last_name='$l_name',age='$age_',email='$email',dob='$dob',gender='$gender',dept='$dept',college='$college_name',mobile='$mobile_num',address='$address' WHERE id=$id";
    $result = mysqli_query($mysqli, $sql);

    mysqli_close($mysqli);
    header("Location: view_user.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM register WHERE id=$id");

while ($user_data = mysqli_fetch_array($result)) {
    $first_name = $user_data['first_name'];
    $last_name = $user_data['last_name'];
    $age = $user_data['age'];
    $email = $user_data['email'];
    $dob = $user_data['dob'];
    $gender = $user_data['gender'];
    $dept = $user_data['dept'];
    $college = $user_data['college'];
    $mobile = $user_data['mobile'];
    $address = $user_data['address'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        Form
    </title>
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
    <script src="./my_scipt.js">
    </script>
</head>

<body>

    <fieldset style="border:4px solid rgb(0, 0, 0);">
        <h1 style="text-align: center;">STUDENT REGISTRATION FORM</h1>
        <form name="register" method="POST" onsubmit="return validate()" action="edit_user.php">
            1.FIRST NAME:<input type="text" name="first_name" value=<?php echo $first_name; ?>><br><br>
            2.LAST NAME:<input type="text" name="last_name" value=<?php echo $last_name; ?>><br><br>
            3.YOUR AGE:<input type="number" name="age" value=<?php echo $age; ?>><br><br>
            4.EMAIL ID:<input type="email" name="email" value=<?php echo $email; ?>><br><br>
            5.DATE OF BIRTH<input type="date" name="dob" value=<?php echo $dob; ?>><br><br>
            6.GENDER<br>
            <input type="radio" name="gender" value="male" <?php if ($gender == "male") {
                                                                echo "checked";
                                                            } ?>> Male<br>
            <input type="radio" name="gender" value="female" <?php if ($gender == "female") {
                                                                    echo "checked";
                                                                } ?>> Female<br>
            <input type="radio" name="gender" value="other" <?php if ($gender == "other") {
                                                                echo "checked";
                                                            } ?>>Other<br><br>
            7.CHOOSE YOUR DEPARTMENT
            <select name="dept">
                <option value="">Select</option>
                <option value="CE" <?php if ($dept == 'CE') { ?> selected="selected" <?php } ?>>B.Tech(CE)</option>
                <option value="IT" <?php if ($dept == 'IT') { ?> selected="selected" <?php } ?>>B.Tech(IT)</option>
                <option value="EE" <?php if ($dept == 'EE') { ?> selected="selected" <?php } ?>>B.Tech(EE)</option>
                <option value="ME" <?php if ($dept == 'ME') { ?> selected="selected" <?php } ?>>B.Tech(ME)</option>
            </select><br><br>
            8.COLLEGE NAME:<input type="text" name="college" value=<?php echo $college; ?>><br><br>
            9.MOBILE NUMBER:<input type="number" name="mobile" value=<?php echo $mobile; ?>><br><br>
            10.ENTER YOUR ADDRESS<br><textarea name="address" style="background-color: yellow;"><?php echo htmlspecialchars($address); ?></textarea><br><br>
            <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
            <input type="submit" name="update" value="Update User">
        </form>

    </fieldset>
</body>

</html>