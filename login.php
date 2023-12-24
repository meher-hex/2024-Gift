<?php
    include("connection.php");
    if(isset($_POST["submit"])){
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "select * from login where username = '$username' and password = '$password' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count == 1){
        header("Location: notif1.php");
    }else if($count == 2){
        header("Location: notif2.php");
    }else if($count == 3){
        header("Location: notif3.php");
    }else if($count == 4){
        header("Location: notif4.php");
    }else if($count == 5){
        header("Location: notif5.php");
    }else if($count == 6){
        header("Location: notif6.php");
    }
    else{
        echo '<script>
            window.location.href = "index.php";
            alert("Login failed!");
        </script>';
    }
    }
?>