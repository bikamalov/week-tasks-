<?php
$usernames = ["billgates","johndoe","stevejobs"];
$success = true;
if (isset($_POST["username"])) {
    $username = $_POST["username"];
    $key = in_array($username, $usernames);
    if ($username == "") {
        print '<p class="error">Username should not be empty<p>';
    }
    if ($key) {
        print '<p class="error">' . "Username $username is already reserved";
        $success = false;
    }
}


if (isset($_POST["password"]) && isset($_POST["confPassword"])) {
    $password = $_POST["password"];
    $confPassword = $_POST["confPassword"];
    if ($password == "" || $confPassword == "") {
        print '<p class="error">Password and Confirm password should not be empty<p>';
        $success = false;
    }
    else if ($password != $confPassword) {
        print '<p class="error">Password and Confirm password is not equal<p>';
        $success = false;
    }
}
?>
<html>
<head>
    <style>
        .error{
            border:1px solid red;
            font-weight:bold;
            padding:5px;
            width:400px;
            margin:4px;
        }
    </style>
</head>
    <body>
    <form action="task1.php" method="post">
        <table>
            <tr>
                <td>Username: </td>
                <td><input type="text" name="username" id="username" 
                value="<?php if (isset($username) && !$success) {echo $username; if ($success) echo '';}?>"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name="confPassword"></td>
            </tr>
        </table>
        <input type="submit">
    </form>
</body>
</html>