<!DOCTYPE html>
<?php
    if(isset($_COOKIE["registered"])){
        header("Location: more.php");
        exit;
    }
   setcookie("registered","peos", time()+3600);
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../styles/styles.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Συνδεσου στον κυρErasmus</title>
    </head>
    <body>
        <div class="container">
            <div class="first">
                <header>ERASMUS+:A program for the 
                    students who want to avoid their studies in a "multicultural" way
                </header>   
            </div>
            <div class="sidebar second">
                <nav>         
                    <h3 class="a1">Διαλεξε ιστοσελιδα</h3>
                    
                    <a class="a1 " href="index.php">.INDEX</a>
                    <a class="a1 " href="application.php">application</a>
                    <a class="a1 " href="reqs.php">reqs</a>
                    <a class="a1 " href="sign-up.php">sign-up</a>
                    <a class="a1 " href="login.php">login</a>
                    <a class="a1 " href="more.php">more</a>
                        
                </nav>
            </div>
            <div class="third text-center not_main">
                    <h1>User login</h1>
                    <p>Εφοσον εχετε λογαριασμο παρακαλω εισαγετε τα στοιχεια σας</p>

                    <form method="get" action="sign-up.php">
                        Username :<input type="text" name="username" required><br>
                        Password &nbsp;:<input type="text" name="password" required><br>
                        <input type="submit" value="login">
                    </form>
                    <img src="images-videos/tumblr_pkrdbmE5BJ1tgt008_1280-1340755888.png" alt="erasmus potrait"> 
            </div>
            <div class="last">
                <footer>
                    <a href="judas.htm">παρακαλω να ειστε νομιμος πολιτης</a>
                </footer>            
            </div>       
        </div>

</body>
</html> 