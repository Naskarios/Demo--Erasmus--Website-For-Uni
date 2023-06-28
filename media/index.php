<!DOCTYPE html>

<html>
    <head>
        <title>O PIO ERASMUS</title>
        <link rel="stylesheet" type="text/css" href="../styles/styles.css" />
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
                         <?php
                         error_reporting(E_ERROR | E_PARSE); // XAXAXAXAXAXAXA
                            if (isset($_COOKIE["user"])) {
                                echo 'Welcome '.$_COOKIE["user"]."<br>";
                                echo '<a class="a1" href="profile.php">my profile</a>';
                            }
                        ?>               
                    <a class="a1 " href="index.php">.INDEX</a>
                    <?php
                    if (isset($_COOKIE["admin"])) {
                        echo'    <a class="a1 " href="admin.php">admin</a> ';
                    }
                        if (isset($_COOKIE["user"])) {
                            echo '<a class="a1" href="application.php">application</a>';
                        }
                    ?>
                    <a class="a1 " href="reqs.php">reqs</a>
                    <a class="a1 " href="sign-up.php">sign-up</a>
                    <a class="a1 " href="login.php">login</a>
                    <a class="a1 " href="more.php">more</a>
                </nav>
                <img src="./images-videos/eReErasmusTiles.jpg" alt="erasmus wise words">
            </div>
            <div class="third">
                <main>                
                    <h1>ΠΡΟΣΟΧΗ!!!!</h1>
                    <p>Οι σελιδες που ακολουθουν οσο αφορα audio/video/links δεν αναφερονται σε σχετικο περιεχομενο
                    <br>ΑΛΛΑ αποτελουν μια προσπαθεια ερασιτεχνικου χιουμορ<br><b>PROCEED WITH CAUTION VIEWER DISCRETION IS ADVISED</b></p>
                    <img src="images-videos/MEME-ERASMUS-300x199-1063275318.jpg" alt="O ERASMUS o Egkastrimithos" > 
                    <br>
                    Τα τελευταια λογια του Erasmus
                    <br>
                    <audio controls autoplay>
                        <source src="./audio/panagia.mp3" type="audio/mpeg">
                    </audio>

                    <p>Καλως ορισατε στην σελιδα για την αιτηση σας στο προγραμμα ERASMUS
                        για το Πανεστημιο Πελοποννησου του τμηματος Πληροφορικης και τηλεπικοινωνιων 
                        <br>Καιρος να διευρεινετε τους οριζοντας σας και οτι αλλο θα ελεγε μια ιστοσελιδα για <i>"ERASMUS"</i>
                    </p>
                    <img src="images-videos/tumblr_pkrdbmE5BJ1tgt008_1280-1340755888.png" alt="typical university student/erasmus applicant" />
                    <br>
                    
                </main>
            </div>

            <div class="last">
                <footer>
                    <a href="judas.php">παρακαλω να ειστε νομιμος πολιτης</a>
                </footer>            
            </div>
       
        </div>
    </body>
</html> 