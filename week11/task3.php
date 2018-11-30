<?php
    session_start();
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $db = 'webtasks';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    if (isset($_POST['name'])) {
        $login = $_POST['name'];
        $pass = $_POST['pass'];
        $sql = "SELECT * FROM admins WHERE username='$login' AND pass='$pass'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['login'] = $login;
            $_SESSION['admin'] = $row['admin'];
        }
        header('location: ../week11/task3.php');
        //In task 3 we will check session admin equals to 1
        /*
         if(isset($_GET['delete']) && $_SESSION['admin'] == 1) {
           $sql = "DELETE FROM cars WHERE ID=".$_GET['delete'];
	         $result = mysqli_query($conn,$sql);
         }
        */
    }
?>
<form action="taskC.php" method="post">
    <input type="text" name="name">
    <input type="password" name="pass">
    <input type="submit">
</form>