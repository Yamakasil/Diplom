<?php
session_start();
include "connect.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $uname = $_POST['uname'];
    $pass = $_POST['password'];

    if (empty($uname)){
        header("Location: login.php?error=Потрібно ввести логін");
        exit();
    } else if(empty($pass)){
        header("Location: login.php?error=Потрібно ввести пароль");
        exit();
    } else{
        $sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";
        
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)) {
            if (mysqli_num_rows($result) > 0) {
                $user = mysqli_fetch_assoc($result);
                $_SESSION['user'] = [
                    "id" => $user['id'],
                    "username" => $user['uname'],
                    "password" => $user['password'],
                    "name" => $user['name'],
                ];
            }
            header("Location: adminpanel.php");
            exit();
        } else{
            header("Location: login.php?error=Неправильний логін або пароль");
            exit();
        }
    }

} else{
    header("Location: login.php");
    exit();
}
?>