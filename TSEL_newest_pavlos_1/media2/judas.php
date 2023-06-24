<!DOCTYPE html>
<?php
    if(isset($_COOKIE["registered"])){
        header("Location: more.php");
        exit;
    }
?>
<html> 
    <head>
        <link rel="stylesheet" type="text/css" href="../styles/styles.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BABY IM  A CRIMINAL</title>  
    </head>
<body class="judas">
    <div class="container judas">
        <div class="first">
            <header> HONORABLE MENTION PART 1 ΑΠΟ ΔΩ ΕΙΝΑΙ ΤΟ ΑΚΥΡΟ ΠΕΡΙΕΧΟΜΕΝΟ
            </header>
        </div>
        <div class="sidebar second ">
            <nav>         
                <h3 class="a1">Διαλεξε ιστοσελιδα</h3>
                
                <a class="a1 " href="index.php">.INDEX</a>
                <?php
                    if (isset($_COOKIE["registered"])) {
                        echo '<a class="a1" href="application.php">application</a>';
                    }
                    ?>
                <a class="a1 " href="reqs.php">reqs</a>
                <a class="a1 " href="sign-up.php">sign-up</a>
                <a class="a1 " href="login.php">login</a>
                <a class="a1 " href="more.php">more</a>
                <?php
                    if (isset($_COOKIE["registered"])) {
                        echo '<a class="a1" href="profile.php">profile</a>';
                    }
                    ?>
            </nav>
            <img src="./images-videos/painkillah.png" alt="a pretty good oldschool band">
        </div>
        <div class="third">
            <p>BREAKING THE LAW BREAKING THE LAW BREAKING THE LAW BREAKING THE LAW BREAKING THE LAW BREAKING THE LAW BREAKING THE LAW BREAKING THE LAW BREAKING THE LAW BREAKING THE LAW 
                <br>BREAKING THE LAW BREAKING THE LAW BREAKING THE LAW BREAKING THE LAW BREAKING THE LAW BREAKING THE LAW 
            </p>
            <img src="images-videos/judas.png" alt="ERASMUS el CRIMINALE"> 
            <video controls autoplay><source src="./images-videos/juuudas.mp4" type="video/mp4"></video>
            <p>BREAKING THE LAW BREAKING THE LAW BREAKING THE LAW BREAKING THE LAW BREAKING THE LAW BREAKING THE LAW BREAKING THE LAW BREAKING THE LAW BREAKING THE LAW BREAKING THE LAW 
                <br>BREAKING THE LAW BREAKING THE LAW BREAKING THE LAW BREAKING THE LAW BREAKING THE LAW BREAKING THE LAW 
            </p>
            <a href="arctic.htm" class="not_main">Τωρα ομως ας βαλουμε λιγο σωστη μουσικη</a>
        </div>
    </div>
</body>

</html> 