<?php
                require_once("dbinfo.php");
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../styles/styles.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPLICATIONS</title>
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
                
                <a class="a1" href="index.php">.INDEX</a>
                <a class="a1" href="application.php">application</a>
                <a class="a1" href="reqs.php">reqs</a>
                <a class="a1" href="sign-up.php">sign-up</a>
                <a class="a1" href="login.php">login</a>
                <a class="a1" href="more.php">more</a>                    
                <a class="a1" href="profile.php">profile</a>
            </nav>
        </div>
        <div class="third text-center not_main">

<!-- 
        // --  δ) Επιλογή για την εμφάνιση όλων των συνεργαζόμενων Πανεπιστημίων και δυνατότητα 
    // -- προσθήκης νέου Πανεπιστημίου. 
    //     $sql="SELECT * FROM universities; -->

            <h1>admin page</h1>
            <?php
                    require_once("dbinfo.php");
                    $conn = mysqli_connect($servername,$usr,$psw,$db);
                    $sql="SELECT * FROM universities";
                    $result = mysqli_query($conn,$sql);
                    $users_arr = mysqli_fetch_all($result);
                    printQuery($users_arr);
                    mysqli_close($conn);
            ?>
        </div>
        <div class="last">
            <footer>
                <a href="judas.php">παρακαλω να ειστε νομιμος πολιτης</a>
            </footer>            
        </div>       
    </div>
</body>
</html>
