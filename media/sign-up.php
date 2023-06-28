<!DOCTYPE html>
<?php
    error_reporting(E_ERROR | E_PARSE); // XAXAXAXAXAXAXA
    if(isset($_COOKIE["user"])){
        header("Location: more.php");
        exit;
    }
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../styles/styles.css" />
    <title>Εγγραφείτε στον κυρErasmus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <div class="first">
            <header>ERASMUS+: A program for the students who want to avoid their studies in a "multicultural" way</header>
        </div>
        <div class="sidebar second">
            <nav>         
                <h3 class="a1">Διαλέξε ιστοσελίδα</h3>
                <a class="a1" href="index.php">.INDEX</a>
                
                <a class="a1" href="reqs.php">reqs</a>
                <a class="a1" href="sign-up.php">sign-up</a>
                <a class="a1" href="login.php">login</a>
                <a class="a1" href="more.php">more</a>  
            </nav>
        </div>
        <div class="third not_main">
            <form method="post" class="text-center" onsubmit="return validateForm()" action="sign-up.php">
                <h1>Δεν έχετε λογαριασμό;</h1>
                <h1><b>ΚΑΙΡΟΣ ΝΑ ΕΓΓΡΑΦΕΙΤΕ</b></h1>
                <img src="images-videos/ino.gif" alt="smirking guy">
                <br>
                Όνομα &nbsp;: <input type="text" name="fname" id="name" placeholder="nasos" required>
                Επίθετο &nbsp;: <input type="text" name="lname" id="surname" placeholder="karras" required> <br>
                Αριθμός μητρώου &nbsp;: <input type="text" name="a_m" id="am" placeholder="2022202000082" required> <br>
                Τηλέφωνο &nbsp;: <input type="text" name="tel" id="phone" placeholder="666 999 666" required> <br>
                Email &nbsp;: <input type="email" name="email" id="email" placeholder="NaskAlter@gmail.com" required> <br>
                Username &nbsp;: <input type="text" name="username" id="username" placeholder="Naskarios" required> <br>
                Password &nbsp;: <input type="password" name="password" id="password" required> <br>
                Confirm Password &nbsp;: <input type="password" name="password2" id="password2" required> <br>
                <input type="submit" value="hlia rixto"><br>
            </form>
    <?php
    
    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $a_m = $_POST["a_m"];
        $tel = $_POST["tel"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        
        
        require_once("dbinfo.php");
        $conn = mysqli_connect($servername, $usr, $psw, $db);
                //  IF USERNAME DOESNT EXIST 
                if( checkUsername($username) == 1)
                    echo "<h1 class='text-center'>USER ALREADY EXISTS</h1>";
                else{
                    $sql = "INSERT INTO users (user_id,fname, lname, a_m, tel, email, username, password) VALUES (null,'$fname', '$lname', '$a_m', '$tel', '$email', '$username', '$password')";
                    mysqli_query($conn, $sql);
                }

    }
    ?>
        </div> 
        <div class="last">
            <footer>
                <a href="judas.php">παρακαλώ να είστε νόμιμος πολίτης</a>
            </footer>            
        </div>
    </div>

    <script src="../scripts/sign-up.js"></script>


</body>
</html>
