<!DOCTYPE html>

<html>
    <head>   
        <title>ΚΙΑΛΛΑ ΓΙΑ ΤΟΝ ΚΥΡ ERASMUS</title>
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
                            if (isset($_COOKIE["user"])) {
                                echo 'Welcome '.$_COOKIE["user"]."<br>";
                                echo '<a class="a1" href="profile.php">my profile</a>';
                            }
                        ?> 
                    <a class="a1 " href="index.php">.INDEX</a>
                    <?php
                    if (isset($_COOKIE["user"])) {
                        echo '<a class="a1" href="application.php">application</a>';
                    }
                    ?>
                    <a class="a1 " href="reqs.php">reqs</a>
                    <a class="a1 " href="sign-up.php">sign-up</a>
                    <a class="a1 " href="login.php">login</a>
                    <a class="a1 " href="more.php">more</a>
                </nav>
                <ul>Αν θέλετε να μάθετε για τα συνεργαζόμενα πανεπιστήμια<br>Μη διστάσετε να αναζητήσετε τις πληροφορίες μόνοι σας
                    <li><a href="https://www.hustlers.university/" target="_blank">Hustlers University</a>
                    <a href="https://www.youtube.com/watch?v=PT1l9iLD5aw" target="_blank" >info</a>
                    </li>
                    <li><a href="https://studies.ku.dk/study-abroad/erasmus/" target="_blank" >University of Copenhagen</a>
                    <a href="https://www.youtube.com/watch?v=SHsXnOlbVK8" target="_blank" >info</a>
                    </li>
                    <li><a href="https://unite.edu.mk/" target="_blank" >University of FYR--Macedonia</a>
                    <a href="https://www.mastersportal.com/countries/18/macedonia.html" target="_blank" >info</a>
                    </li>
                    <li><a href="https://www.istanbul.edu.tr/en/#!" target="_blank">University of Elladistan</a>
                    <a href="https://www.youtube.com/watch?v=60OxlvNfDB0" target="_blank">info</a></li>
                </ul>
                
                <a href="https://www.hustlers.university/" target="_blank"><img src="images-videos/unipic1.png"  alt="Gods gift to earth"> </a>
                <a href="https://studies.ku.dk/study-abroad/erasmus/" target="_blank" ><img src="images-videos/uni2pic.png" alt="University of Copenhagen"> </a>
                <a href="https://unite.edu.mk/" target="_blank" ><img src="images-videos/uni3pic.jpg" alt="FYROM einai to onoma"> </a>
                <a href="https://www.istanbul.edu.tr/en/#!" target="_blank"><img src="images-videos/unipic4.jpg" alt="eikones apo thn ellada 2"></a>
            
                <!--gia to audio to site pou xrhsimopoihsa to ekane .mp4 to audio den exei eikona opote den blepw kapoio problima-->
                <!--parollo pou ypostirizetai to mp3 sto <audio> efoson leitourgei synexizw-->
                <!--yparxei ena .mp3 sto arctic.htm-->

            </div>
            <div class="third">
                <main>
                    <h1>Huuuuuuh you want more?<br>What a drag...</h1>
                    <img src="images-videos/404d64adaf713277550e6f0d22ceec13-4231460544.jpg" alt="bored naskarios"> 
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas integer eget aliquet nibh praesent tristique magna sit. Tempor id eu nisl nunc mi ipsum faucibus vitae. Augue interdum velit euismod in. Eros donec ac odio tempor orci dapibus ultrices. Velit ut tortor pretium viverra suspendisse potenti nullam ac. Convallis tellus id interdum velit laoreet id donec ultrices tincidunt. Nunc aliquet bibendum enim facilisis. Varius morbi enim nunc faucibus a pellentesque. Lorem donec massa sapien faucibus et molestie ac. Parturient montes nascetur ridiculus mus. Convallis aenean et tortor at risus viverra. Suspendisse interdum consectetur libero id. Pulvinar elementum integer enim neque volutpat. Sagittis eu volutpat odio facilisis. Scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique. Posuere sollicitudin aliquam ultrices sagittis orci a. Nisl vel pretium lectus quam id leo in vitae. Cum sociis natoque penatibus et magnis dis parturient. In hac habitasse platea dictumst.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas integer eget aliquet nibh praesent tristique magna sit. Tempor id eu nisl nunc mi ipsum faucibus vitae. Augue interdum velit euismod in. Eros donec ac odio tempor orci dapibus ultrices. Velit ut tortor pretium viverra suspendisse potenti nullam ac. Convallis tellus id interdum velit laoreet id donec ultrices tincidunt. Nunc aliquet bibendum enim facilisis. Varius morbi enim nunc faucibus a pellentesque. Lorem donec massa sapien faucibus et molestie ac. Parturient montes nascetur ridiculus mus. Convallis aenean et tortor at risus viverra. Suspendisse interdum consectetur libero id. Pulvinar elementum integer enim neque volutpat. Sagittis eu volutpat odio facilisis. Scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique. Posuere sollicitudin aliquam ultrices sagittis orci a. Nisl vel pretium lectus quam id leo in vitae. Cum sociis natoque penatibus et magnis dis parturient. In hac habitasse platea dictumst.</p>
                </main>
            </div>
            <div class="fourth">
                <img src="images-videos/b96557b4-80dd-11e8-bc55-50daf11b720d-4204702437.jpg" height="600" width="500" alt="erasmus potrait"/> 
                <br>Ενημερωτικα video:<br>
                <video width="460" height="300" controls><source src="./images-videos/bottom_gear.mp4" type="video/mp4"></video>
                <video width="460" height="300" controls><source src="./images-videos/skyli.mp4" type="video/mp4"></video>
                <br>Ομιλια Πρυτανη του Πανεπιστημιου του Ελλαδισταν<br>
                <audio controls>
                    <source src="audio/Τσουκαλας - Το μοιρολόι του Ευλάλιου για την ΑΕΚ.mp4" type="audio/mpeg">
                </audio>
                <br>
                <br>Ομιλια Πρυτανη του Πανεπιστημιου FYR....<br>
                <audio controls>
                    <source src="audio/Ευλάλιος επιστροφάρα και το μοιρολόι του ΠΑΟ- Τάκης Τσουκαλας!!! AlaloumTV.mp4" type="audio/mpeg">
                </audio>
            </div>
            <div class="last">
                <footer>
                    <a href="judas.php">παρακαλω να ειστε νομιμος πολιτης</a>
                </footer>
            </div>
        </div>
    </body>
</html> 