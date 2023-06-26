<?php
                require_once("dbinfo.php");
                if(!isset($_COOKIE["admin"])){
                    header("Location: more.php");
                    exit;
                }
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
                <?php if(isset($_COOKIE["admin"])){
                    echo "Welcome admin<br>";
                }
                ?>
                <a class="a1" href="index.php">INDEX</a>
                <a class="a1" href="application.php">application</a>
                <a class="a1" href="reqs.php">reqs</a>
                <a class="a1" href="sign-up.php">sign-up</a>
                <a class="a1" href="login.php">login</a>
                <a class="a1" href="more.php">more</a>                    
                <a class="a1" href="profile.php">profile</a>
            </nav>
        </div>
        <div class="third text-center not_main">

            <form method="get" action="admin.php">
                
                Filters
                <?php                        

                require_once("dbinfo.php");
                $conn = mysqli_connect($servername,$usr,$psw,$db);
                $sql="SELECT * FROM universities";
                $result = mysqli_query($conn,$sql);
                $users_arr = mysqli_fetch_all($result);

                    echo "drop<select name='paneps'>";
                    for($i=0;$i<mysqli_num_rows($result);$i++)
                        echo '<option selected value="'.$users_arr[$i][1].'">'.$users_arr[$i][1].'';
                    echo '</select>';
                ?>

                Selection<select name="selectm">
                <option  type="checkbox" name="box1" value="sel1">filterss<br>
                <option type="checkbox" name="box2" value="sel2">approved<br>
                <option type="checkbox" name="box3" value="sel3">universities<br>
                <option type="checkbox" name="box4" value="sel5">new admin<br>
                <option type="checkbox" name="box5" value="sel4">
                <br><input type="submit" value="submit"><br>

            </form>
<!-- 
        // --  δ) Επιλογή για την εμφάνιση όλων των συνεργαζόμενων Πανεπιστημίων και δυνατότητα 
    // -- προσθήκης νέου Πανεπιστημίου. 
    //     $sql="SELECT * FROM universities; -->

            <h1>admin page</h1>
            <?php
            // if ($_SERVER["REQUEST_METHOD"] === "GET") {
            // }

                        //1... $sql="SELECT * FROM application ORDER BY moClass DESC"; 
                        //2... $sql="SELECT * FROM application WHERE percentClass>=70  ORDER BY moClass DESC";
                        //3.......$sql="SELECT * FROM application WHERE uni1='$given'  ORDER BY moClass DESC
                        // echo '<input type="submit" value="Search"><br>';



                require_once("dbinfo.php");
                $conn = mysqli_connect($servername,$usr,$psw,$db);
                $sql="SELECT * FROM universities";
                $sql="SELECT * FROM dates ORDER BY endDate ASC"; 
    // print_r( $users_arr[$i][0]); id of application

                    $result = mysqli_query($conn,$sql);
                    $users_arr = mysqli_fetch_all($result);
                    printQuery($users_arr,0);
                    mysqli_close($conn);
                    //for 4.... aprroval of uni
                    // echo "<form method=post action=admin.php>";
                    // printQuery($users_arr,1);
                    // echo "<input type='submit' value='Meme Approved'></form>";
                    // mysqli_close($conn);
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
