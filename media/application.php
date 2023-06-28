<!DOCTYPE html>
<?php
error_reporting(E_ERROR | E_PARSE); // XAXAXAXAXAXAXA
    if(!isset($_COOKIE["user"])){
        header("Location: more.php");
        exit;
    }
    require_once("dbinfo.php");

     $conn = mysqli_connect($servername, $usr, $psw, $db);
     if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
     }
 
     $username = $_COOKIE["user"];
     $query = "SELECT fname, lname, a_m FROM users WHERE username = '$username'";
     $result = mysqli_query($conn, $query);
     $row = mysqli_fetch_assoc($result);
 
     $name = $row["fname"];
     $surname = $row["lname"];
     $am = $row["a_m"];

     $query = "SELECT university_name FROM universities";
     $result = mysqli_query($conn, $query);
     $universities = array();
     while ($row = mysqli_fetch_assoc($result)) {
         $universities[] = $row["university_name"];
     }
                
     
     $curDate=date("Y-m-d"); 
     $sql="SELECT * FROM dates WHERE endDate >= DATE  '$curDate' ORDER BY endDate ASC";
     $result = mysqli_query($conn,$sql);     
     $users_arr = mysqli_fetch_all($result);
     if(!$users_arr[0]){   
        header("Location: more.php");
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
                    <h1>Εδω κανουμε τις αιτησεις μπας και αποκτησει νοημα η μιζερη ζωη μας</h1>
                    <br><p>good luck i guess</p>
              <!--Oso afora ta methods den dinei idiaterh shmasia akoma opote parakalw 
                    adiaforeiste ama deite mia lathos post h  get-->
                    <form method="post" action="application.php" enctype="multipart/form-data">
                        Ονομα &nbsp;:
                            <BR> <INPUT type="text" name="name" placeholder="nasos" value="<?php echo $name; ?>" readonly> <BR>
                        Επιθετο &nbsp;: 
                            <BR><INPUT type="text" name="surname" placeholder="karras" value="<?php echo $surname; ?>" readonly> <BR>
                        Αριθμός μητρώου &nbsp;: 
                            <BR><input type="text" name="am" placeholder="2022202000082" value="<?php echo $am; ?>" readonly>   <BR>
                        Ποσοστό «περασμένων» μαθημάτων έως και το προηγούμενο έτος σπουδών:
                            <BR><input type="number" name="num1" min="0" max="100" placeholder="ex 50=50%" required><br>
                        Μέσος όρος «περασμένων» μαθημάτων έως και το προηγούμενο έτος σπουδών:
                            <BR><input type="number" name="num2" min="0"  placeholder="ex 2.1" required><br>
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
                            <?php
                                    foreach ($universities as $university) {
                                        echo '<option value="' . $university . '">' . $university . '</option>';
                                    }
                                ?>
                            </select><br>
                        Πανεπιστήμιο - 2η επιλογή 
                            <select name="paneps2">
                            <?php
                                    foreach ($universities as $university) {
                                        echo '<option value="' . $university . '">' . $university . '</option>';
                                    }
                                ?>
                            </select><br>
                        Πανεπιστήμιο - 3η επιλογή 
                            <select name="paneps3">
                            <?php
                                    foreach ($universities as $university) {
                                        echo '<option value="' . $university . '">' . $university . '</option>';
                                    }
                                ?>
                            </select>
                            <br>
                            <br>
                            Αναλυτική βαθμολογία:
                                <input type="file" name="myFile1" required><br>
                            Πτυχίο αγγλικής γλώσσας:
                                <input type="file" name="myFile2" required><br>
                            Πτυχία άλλων ξένων γλωσσών :
                                <input type="file" name="myFiles" multiple>
                            
                            <br>
                            Αποδοχή των όρων &nbsp; 
                            <a href="./text/peace.pdf">TERMS OF USE</a>
                                <INPUT type="checkbox" name="checkbox" value="checkbox_option_1" required>
                            νταξ <BR><br><input type="submit" value="hlia rixto"><br>
<?php
    $dir='./applications/'.$_COOKIE["user"];
    
    if(!is_dir($dir))//create users dir for their files
        mkdir($dir);


    for($i=1;$i<3;$i++){ //yes a for for 2 items code apo ta slides
            $destination = $dir."/";  
            if(!empty($_FILES)) 
            { 
            $destination .= $_FILES["myFile".$i]["name"]; 
            $filename = $_FILES["myFile".$i]["tmp_name"]; 
            move_uploaded_file($filename, $destination); 
            }
    }
    echo "<br>";
    
    
    $myFile1=$dir."/".$_FILES["myFile1"]["name"]."<br>";//filepath pou tha paei stin bash
    $myFile2=$dir."/".$_FILES["myFile2"]["name"];
    $am=$_POST["am"];
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $my_radio_choice=$_POST["my_radio_choice"];
    $my_radio_choice2=$_POST["my_radio_choice2"];
    $paneps1=$_POST["paneps1"];
    $paneps2=$_POST["paneps2"];
    $paneps3=$_POST["paneps3"];
    $checkbox=$_POST["checkbox"];
    $username=$_COOKIE["user"];


    $conn = mysqli_connect($servername, $usr, $psw, $db);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO application (fname, lname, a_m, percentClass, moClass, cert, extra, classFile, certFile, extraFile, uni1, uni2, uni3,username)
        VALUES ('$name', '$surname', '$am', '$num1', '$num2', '$my_radio_choice', '$my_radio_choice2', '$myFile1', '$myFile2', '0', '$paneps1', '$paneps2', '$paneps3','$username')";

    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>

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
            </div>
        </div>
    </body>
</html> 