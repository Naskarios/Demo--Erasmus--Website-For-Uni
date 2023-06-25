<!DOCTYPE html>
<?php
    if(!isset($_COOKIE["user"])){
        header("Location: more.php");
        exit;
    }
    require_once("dbinfo.php");
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
                <img src="./images-videos/eReErasmusTiles.jpg" alt="erasmus wise words">
            </div>
            
            <div class="third">
                <main>
                    <h1>Εδω κανουμε τις αιτησεις μπας και αποκτησει νοημα η μιζερη ζωη μας</h1>
                    <br><p>good luck i guess</p>
              <!--Oso afora ta methods den dinei idiaterh shmasia akoma opote parakalw 
                    adiaforeiste ama deite mia lathos post h  get-->
                    <form method="post" action="application.php">
                        Ονομα &nbsp;:
                            <BR> <INPUT type="text" name="name" placeholder="nasos"> <BR>
                        Επιθετο &nbsp;: 
                            <BR><INPUT type="text" name="surname" placeholder="karras"> <BR>
                        Αριθμός μητρώου &nbsp;: 
                            <BR><INPUT type="text" name="am" placeholder="2022202000082"> <BR>
                        Ποσοστό «περασμένων» μαθημάτων έως και το προηγούμενο έτος σπουδών:
                            <BR><input type="number" name="num1" min="0" max="100" placeholder="ex 50=50%"><br>
                        Μέσος όρος «περασμένων» μαθημάτων έως και το προηγούμενο έτος σπουδών:
                            <BR><input type="number" name="num2" min="0"  placeholder="ex 2.1"><br>
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
                            <select name="paneps1">
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
                                <INPUT type="checkbox" name="checkbox" value="checkbox_option_1">
                            νταξ <BR>
                    </form>
                </main>
            </div>
            <div class="fourth">
                    <img src="images-videos/u2nknown.png" alt="good luck anime girl"> 
                    <p>"Good luck" <br>My first positive thought in years</p>
            </div>
            <div class="last">
                <footer >
                    <a href="judas.php">παρακαλω να ειστε νομιμος πολιτης</a>
                </footer>
<?php

$name=$_POST["name"];
$surname=$_POST["surname"];
$am=$_POST["am"];
$num1=$_POST["num1"];
$num2=$_POST["num2"];
$my_radio_choice=$_POST["my_radio_choice"];
$my_radio_choice2=$_POST["my_radio_choice2"];
$paneps1=$_POST["paneps1"];
$paneps2=$_POST["paneps2"];
$paneps3=$_POST["paneps3"];
$myFile1=$_POST["myFile1"];
$myFile2=$_POST["myFile2"];
$myFiles=$_POST["myFiles"];
$checkbox=$_POST["checkbox"];
$username=$_COOKIE["user"];

if($_POST["checkbox"])
{
    
    
    // $conn = mysqli_connect($servername, $usr, $psw, $db);
    // if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }
    // // cert 	extra 	classFile 	certFile 	extraFile
    // $sql = "INSERT INTO application(fname,lname,a_m,percentClass,moClass,uni1 ,uni2,uni3,username) VALUES('$name','$surname','$am','$num1','$num2','$paneps1','$username')";
    // mysqli_query($conn,$sql);
    
}
else
echo "accept terms";

?>
            </div>
        </div>
    </body>
</html> 