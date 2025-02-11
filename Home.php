<!DOCTYPE html>
<html>
    <head>
        <title>Weekday - Home</title>
        <link rel = "stylesheet" href = "Home_Style.css"/>
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
                        <input type = "text" name = "searchbox" id = "searchbox" required/>
                    </div>
                    <ul class = "menu">
                        <li><a href = "Home.php">About</a></li>
                        <li><a href = "Login_Page.php">Login</a></li>
                    </ul>        
                </div>
            </div>
        </nav>
        <section id = "cover">
            <div class = "cover-background">
                <video id = "cover-video" autoplay muted>
                    <source src = "Images/Weekday.mp4" type = "video/mp4">
                </video>
                <div id = "overlay" class = "overlay"></div>
            </div>
        </section>
    </body>
</html>