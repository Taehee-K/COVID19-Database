<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="BigDataApplication Project" />
        <meta name="keywords" content="Taehee Kim, Hyoyoung Lho" />
        <title>Team12: COVID19 Analysis</title>
        <link rel="stylesheet" href="styles.css" />
    </head>
    <body>
        <header id = "main_header">
        <h1>Spread of COVID19 in Korea and US</h1>
        </header>
        <nav id="main_menu"> 
            <ul>
                <li><img src = "covid.png" height = 25 width = 25 alt = "logo"></li>
                <li> <a href="index.php">Home</a> </li>
                <li> <a href="page1.php">Page1</a> </li>
                <li> <a href="page2.php">Page2</a> </li>
                <li> <a href="page3_TK.php">Page3</a> </li>
                <li> <a href="page4_TK.php">Page4</a> </li>
                <div class = "header-login">
                    <?php
                        if(isset($_SESSION['userId'])){
                            echo '<form action = "includes/logout.inc.php" method = "post">
                            <button type = "submit" name = "logout-submit">Logout</button>
                            </form>';
                        }
                        else {
                            echo '<form action = "includes/login.inc.php" method = "post">
                            <input type = "text" name = "mailuid" placeholder="Username">
                            <input type = "password" name = "pwd" placeholder="Password">
                            <button type = "submit" name = "login-submit">Login</button>
                            <a href="signup.php" class = "button" >Signup</a>
                            </form>';
                            // <form action = "signup.php"><button type = "submit">Signup</button></form>
                        }
                    ?>
                </div>
            </ul>
        </nav>
    </body>
</html>

