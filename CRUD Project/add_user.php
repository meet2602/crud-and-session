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
        <form name="register" method="POST" onsubmit="return validate()" action="add_user.php">
            1.FIRST NAME:<input type="text" name="first_name"><br><br>
            2.LAST NAME:<input type="text" name="last_name"><br><br>
            3.YOUR AGE:<input type="number" name="age"><br><br>
            4.EMAIL ID:<input type="email" name="email"><br><br>
            5.DATE OF BIRTH<input type="date" name="dob"><br><br>
            6.GENDER<br>
            <input type="radio" name="gender" value="male"> Male<br>
            <input type="radio" name="gender" value="female"> Female<br>
            <input type="radio" name="gender" value="other">Other<br><br>
            7.CHOOSE YOUR DEPARTMENT
            <select name="dept">
                <option value="">Select</option>
                <option value="CE">B.Tech(CE)</option>
                <option value="IT">B.Tech(IT)</option>
                <option value="EE">B.Tech(EE)</option>
                <option value="ME">B.Tech(ME)</option>
            </select><br><br>
            8.COLLEGE NAME:<input type="text" name="college"><br><br>
            9.MOBILE NUMBER:<input type="number" name="mobile"><br><br>
            10.ENTER YOUR ADDRESS<br><textarea name="address" style="background-color: yellow;"></textarea><br><br>
            <input type="submit" name="submit" value="registration">
        </form>

    </fieldset>
    <?php

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['submit'])) {
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
        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $sql = "INSERT INTO register (first_name,last_name,age,email,dob,gender,dept,college,mobile,address)
VALUES ('$f_name','$l_name','$age_','$email','$dob','$gender','$dept','$college_name','$mobile_num','$address')";
        if (mysqli_query($mysqli, $sql)) {
            // Show message when user added
            echo "User added successfully. <a href='view_user.php'>View Users</a>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
        }
        mysqli_close($mysqli);
    }
    ?>
</body>

</html>