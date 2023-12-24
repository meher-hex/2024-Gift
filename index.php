<?php
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <!--header space-->
            <div class="header">
                <p class="big-text">Login</p>
                <!-- <p class="small-text"></p> -->
            </div>
            <!--form-->
            <!--action = the data will be submitted to login.php--> 
            <!--method = post --- the data won't be shown in the url -->
            <form method="POST" action="login.php">
                <div class="info">
                    <label for="userName">User</label>
                    <input type="text" name="user" class="username" id="userName" autocomplete="off" placeholder="Name"/>

                    <label for="passWord">Password</label>
                    <input type="password" name="pass" class="password" id="passWord" autocomplete="off" placeholder="Password"/>
                </div>

                <input type="submit" value="Submit" class="submit-btn" name="submit">
            </form>
        </div>
    </div>
</body>
</html>