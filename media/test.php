<!DOCTYPE html>
<html>
    <head>
        <title>TESTING..</title>
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
                    
                    <a class="a1 " href="index.php">.INDEX</a>
                    <a class="a1 " href="application.php">application</a>
                    <a class="a1 " href="reqs.php">reqs</a>
                    <a class="a1 " href="sign-up.php">sign-up</a>
                    <a class="a1 " href="login.php">login</a>
                    <a class="a1 " href="more.php">more</a>
                        
                </nav>
                <img src="./images-videos/eReErasmusTiles.jpg" alt="erasmus wise words">
            </div>
            <div class="third">
                <main>                
                    <p>PEOS</p>
                    <img src="images-videos/MEME-ERASMUS-300x199-1063275318.jpg" alt="O ERASMUS o Egkastrimithos" > 

                    <form method="get" action="test.php">
                        Start Date&nbsp; :<input type="date" name="start" required><br>
                        End Date &nbsp;:<input type="date" name="end" required><br>
                        <input type="submit" value="Set dates">
                    </form>



<?php
require_once("dbinfo.php");

$con=mysqli_connect($servername, $usr, $psw,$db);
if($con){
    // general THELEI  TESTING
    $x=$_GET["start"];
    $y=$_GET["end"];
    // $sql="INSERT INTO `dates` (`date_id`, `startDate`, `endDate`) VALUES (NULL, $x,$y);";
    // mysqli_query($con,$sql);
    echo "date1  ".$_GET["start"]."\n";
    echo "date2  ".$_GET["end"];
    
    //     // 1) Εμφάνιση όλων των αιτήσεων κατά φθίνουσα σειρά, βάσει του μέσου όρου μαθημάτων 
    //     $sql="SELECT * FROM application ORDER BY moClass DESC";
    //     // 2) Επιλεγμένη εμφάνιση των αιτήσεων με καθορισμό ελάχιστου ποσοστού επιτυχίας 
    //     // example=70%
    //     $sql="SELECT * FROM application WHERE percentClass>=70  ORDER BY moClass DESC";
    
    //     // 3) Επιλεγμένη εμφάνιση των αιτήσεων που αφορούν συγκεκριμένο πανεπιστήμιο του 
    //     // εξωτερικού  Η επιλογή του πανεπιστημίου θα γίνεται από σχετικό drop-down list,
    //     $sql="SELECT * FROM application WHERE uni1='$given'  ORDER BY moClass DESC
    //     UNION
    //     SELECT * FROM application WHERE uni2='$given'  ORDER BY moClass DESC
    //     UNION
    //     SELECT * FROM application WHERE uni3='$given'  ORDER BY moClass DESC";
    
    // // γ) Επιλογή για την εμφάνιση όλων των αιτήσεων που έχουν χαρακτηριστεί δεκτές έως εκείνη 
    //     $sql="SELECT * FROM application WHERE approval=1;
    
    // --  δ) Επιλογή για την εμφάνιση όλων των συνεργαζόμενων Πανεπιστημίων και δυνατότητα 
    // -- προσθήκης νέου Πανεπιστημίου. 
    //     $sql="SELECT * FROM universities;
    
    // // ε) Επιλογή για την εμφάνιση όλων των διαχειριστών της ErasmApp και δυνατότητα 
    // // προσθήκης νέου διαχειριστή βάσει των πεδίων της φόρμας sign-up και τις εξής όμως 
    // // διαφορές: 
    
    
    
   
    
    $sql="SELECT * FROM dates ORDER BY endDate ASC";
    
    $result = mysqli_query($con,$sql);
    $users_arr = mysqli_fetch_all($result);
    printQuery($users_arr);
    
}
else {
    echo "CONNECTION ERROR\n";
}    

?>

</main>
</div>

            <div class="last">
                <footer>
                    <a href="judas.htm">παρακαλω να ειστε νομιμος πολιτης</a>
                </footer>            
            </div>
       
        </div>
    </body>
</html> 