<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('meta.php') ?>
    <link rel="stylesheet" href="regi.css">
    <title>Registration</title>
</head>
<body>
<?php include('navbar.php') ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <div class="submitreg">
            <label for="username">Username:</label>
                <input type="text" id="username" name="u_Name"><br>
            <label for="pw">Password:</label>
                <input type="password" id="pw" name="u_Pw"><br>
            <label for="fullName">Name:    </label> 
                <input type="text" id="fullName" name="f_Name"><br>
            <br>
            <br>
            <input type="submit"  class="buttonReg"  id="RegId" name="reg" value="Registration"> 
        </div>
    </form>
<?php
require('../controller/controller.php');

    


if (isset($_POST["reg"])) {
$u = trim($_POST["u_Name"]);
$p = trim($_POST["u_Pw"]);
$n = trim($_POST["f_Name"]);
echo reg_User($u,$p,$n);
}

?>

</body>
</html>
