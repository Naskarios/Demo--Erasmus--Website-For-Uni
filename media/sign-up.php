<!DOCTYPE html>
<?php 
setcookie("username", $_GET["username"], time()+3600);
?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../styles/styles.css" />
    <title>Εγγραφειτε στον κυρErasmus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <div class="third not_main">
            
                <form method="get" class="text-center">
                    <h1>Δεν εχετε λογαριασμο??? </h1>
                    <h1><b>ΚΑΙΡΟΣ ΝΑ ΕΓΓΡΑΦΕΙΤΕ</b> </h1>
                    <img src="images-videos/ino.gif" alt="smirking guy">
                    <br>
                        Ονομα &nbsp;: <INPUT type="text" name="name" placeholder="nasos" required>
                        Επιθετο &nbsp;: <INPUT type="text" name="surname" placeholder="karras" required> <BR>
                        Αριθμός μητρώου &nbsp;: <INPUT type="text" name="am" placeholder="2022202000082" required> <BR>
                    <!--Προτιμω text λογω του συγκεκριμενου format +30 10digits θα το διωρθωσω με javascript 
                    στο επομενο μερος της εργασιας-->
                        Τηλέφωνο &nbsp;: 
                        <INPUT type="text" name="phone" placeholder="666 999 666" required> <BR>
                        Email &nbsp;: 
                        <INPUT type="email" name="email" placeholder="NaskAlter@gmail.com" required> <BR>
                        Username &nbsp;: 
                        <INPUT type="text" name="username" placeholder="Naskarios" required> <BR>
                        Password &nbsp;: 
                        <INPUT type="text" name="password" required> <BR>
                        Confirm Password &nbsp;: 
                        <INPUT type="text" name="password2" required> 
                        <BR><input type="submit" value="hlia rixto"><br>
                    </form>
            
        </div> 
        <div class="last">
            <footer>
                <a href="judas.htm">παρακαλω να ειστε νομιμος πολιτης</a>
            </footer>            
        </div>
    </div>
</body>
</html> 