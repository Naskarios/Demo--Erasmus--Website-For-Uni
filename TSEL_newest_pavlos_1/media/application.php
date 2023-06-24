<!DOCTYPE html>
<?php
    if(!isset($_COOKIE["registered"])){
        header("Location: application.php");
        exit;
    }
?>
<html>
    
    <head>
        <title>Erasmus application</title>
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

                <?php
                
                require_once("dbinfo.php");
                $curDate=date("Y-m-d"); 
                $con=mysqli_connect($servername, $usr, $psw,$db);
                $sql="SELECT * FROM dates WHERE endDate >= DATE  '$curDate' ORDER BY endDate ASC";
                $result = mysqli_query($con,$sql);     
                $users_arr = mysqli_fetch_all($result);
                if(!$users_arr[0]){   
                    echo"<h2>UNFORTUNATELY, <br> YOU CANNOT APPLY IN THIS TIME PERIOD</h2>";
                }
                else{
                    echo'

                
                
                


                    <h1>Εδω κανουμε τις αιτησεις μπας και αποκτησει νοημα η μιζερη ζωη μας</h1>
                    <br><p>good luck i guess</p>
                    <!--Oso afora ta methods den dinei idiaterh shmasia akoma opote parakalw 
                    adiaforeiste ama deite mia lathos post h  get-->
                    <form method="post">
                        Ονομα &nbsp;:
                            <BR> <INPUT type="text" name="name" placeholder="nasos"> <BR>
                        Επιθετο &nbsp;: 
                            <BR><INPUT type="text" name="surname" placeholder="karras"> <BR>
                        Αριθμός μητρώου &nbsp;: 
                            <BR><INPUT type="text" name="am" placeholder="2022202000082"> <BR>
                        Ποσοστό «περασμένων» μαθημάτων έως και το προηγούμενο έτος σπουδών:
                            <BR><input type="number" name="num1" min="0" max="100" placeholder="ex 50=50%"><br>
                        Μέσος όρος «περασμένων» μαθημάτων έως και το προηγούμενο έτος σπουδών:
                            <BR><input type="number" name="num1" min="0"  placeholder="ex 2.1"><br>
                        Πιστοποιητικό γνώσης της αγγλικής γλώσσας<br>
                            <INPUT type="radio" name="my_radio_choice" value="radioA1" checked>A1
                            <INPUT type="radio" name="my_radio_choice" value="radioA2" >A2
                            <INPUT type="radio" name="my_radio_choice" value="radioB1" >B1
                            <INPUT type="radio" name="my_radio_choice" value="radioB2" >B2
                            <INPUT type="radio" name="my_radio_choice" value="radioC1" >C1
                            <INPUT type="radio" name="my_radio_choice" value="radioC2" >C2
                                <br>Γνώση επιπλέον ξένων γλωσσών<br>
                            <INPUT type="radio" name="my_radio_choice2" value="radioYES" checked>
                            YES
                            <INPUT type="radio" name="my_radio_choice2" value="radioNO" >
                            NO
                            <br>
                        <!--selected value is the value "first shown"/preselected-->
                        Πανεπιστήμιο - 1η επιλογή 
                            <select name="paneps">
                                <option selected value="uni1">uni1
                                <option value="uni2">uni2
                                <option value="uni3">uni3
                                <option value="uni4">uni4
                            </select><br>
                        Πανεπιστήμιο - 2η επιλογή 
                            <select name="paneps2">
                                <option value="uni1">uni1
                                <option selected value="uni2">uni2
                                <option value="uni3">uni3
                                <option value="uni4">uni4
                            </select><br>
                        Πανεπιστήμιο - 3η επιλογή 
                            <select name="paneps3">
                                <option selected value="uni1">uni1
                                <option value="uni2">uni2
                                <option value="uni3">uni3
                                <option value="uni4">uni4
                            </select>
                            <br>
                            <br>
                            Αναλυτική βαθμολογία:
                                <input type="file" name="myFile1"><br>
                            Πτυχίο αγγλικής γλώσσας:
                                <input type="file" name="myFile2"><br>
                            Πτυχία άλλων ξένων γλωσσών :
                                <input type="file" name="myFiles" multiple>
                            <br><input type="submit" value="hlia rixto"><br>
                            
                            Αποδοχή των όρων &nbsp; 
                            <a href="./text/peace.pdf">TERMS OF USE</a>
                                <INPUT type="checkbox" name="checkbox_1" value="checkbox_option_1">
                            νταξ <BR>
                    </form>
                </main>
            ';}
            ?>
            </div>
            <div class="fourth">
                    <img src="images-videos/u2nknown.png" alt="good luck anime girl"> 
                    <p>"Good luck" <br>My first positive thought in years</p>
            </div>
            <div class="last">
                <footer >
                    <a href="judas.htm">παρακαλω να ειστε νομιμος πολιτης</a>
                </footer>
            </div>
        </div>

    </body>
</html> 