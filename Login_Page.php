<?php
    include("connection.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Weekday - Login</title>
        <link rel = "stylesheet" href = "Login_Style.css"/>
        <script src = "Login_Script.js"></script>
    </head>
    <body>
        <nav class = "navbar">
            <div class = "navbar">
                <div class = "logo">
                    <div class = "icon">
                        <img src = "Images/forest.png" alt = "icon"/>
                    </div>
                    <div class = "title">
                        <a href = "Home.php">WEEKDAY</a>
                    </div>
                </div>
                <div class = "right-nav">
                    <div class = "searchbox">
                        <input type = "text" name = "search" id = "search" required/>
                    </div>
                    <ul class = "menu">
                        <li><a href = "Home.php">About</a></li>
                        <li><a href = "Home.php">Home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section id = "cover">
            
            <div class = "cover-background">
                <img src = "Images/weekday.jpg" alt = "cover"/>
            </div>

                <div class = "cover-contents">
                    
                    <div class = "content-background">
                        <div class = "content-container">
                            <form name = "form" action = "login.php" method = "POST">
                                <div class = "user-container">
                                    <input type = "text" name = "user" id = "user" required/>
                                    <div class = "userline">Username</div>
                                </div>
                                <div class = "pass-container">
                                    <input type = "password" name = "pass" id = "pass" required/>
                                    <div class = "passline">Password</div> 
                                </div>
                                <div class = "line"></div>
                                <div class = "login-button">
                                    <button type = "submit" id = "submit "name = "submit">Log In</button>
                                </div>
                                <div class = "reset-password">
                                    <a href = "Reset_Page.php">Forgot Password</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class = "content-background-2">
                        <a href = "google-login.php" class = "google-login">
                            <button class = google-button>
                                <img src = "Images/google.png" alt = "icon">
                                <p>Sign In with google</p>
                            </button>
                        </a>
                        <div class = "content-container-2">
                            <p>New to Weekday?</p> 
                            <a href = "Register_Page.php">Create Account</a>
                        </div>
                    </div>

                </div>
           
        </section>
    </body>
</html>