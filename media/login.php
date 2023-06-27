<!DOCTYPE html>
<?php
    require_once("dbinfo.php");
    if(isset($_COOKIE["user"])){
        header("Location: more.php");
        exit;
    }
   //setcookie("registered","peos", time()+3600);
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../styles/styles.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Συνδεσου στον κυρErasmus</title>
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

                <a class="a1" href="reqs.php">reqs</a>
                <a class="a1" href="sign-up.php">sign-up</a>
                <a class="a1" href="login.php">login</a>
                <a class="a1" href="more.php">more</a>

            </nav>
        </div>
        <div class="third text-center not_main">
            <h1>User login</h1>
            <p>Εφοσον εχετε λογαριασμο παρακαλω εισαγετε τα στοιχεια σας</p>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                Username: <input type="text" name="username" required><br>
                Password: <input type="password" name="password" required><br>
                <input type="submit" value="Login">
            </form>
            <img src="images-videos/tumblr_pkrdbmE5BJ1tgt008_1280-1340755888.png" alt="erasmus potrait"> 
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {


                $conn = mysqli_connect($servername, $usr, $psw, $db);

                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $username = $_POST["username"];
                $password = $_POST["password"];

                $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) == 1) {
                    // Login successful
                    
                    setcookie("user",$username, time()+3600);
                    
                    $sql = "SELECT * FROM users WHERE username = '$username' AND user_type_id=1";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) == 1){
                        setcookie("admin",$username, time()+3600);
                        echo "<p>Welcome admin</p>";
                    }
                    else{
                        echo "<p>Typical User</p>";
                        echo "<p>Bre kalws ton</p><br>";
                    } 
                }
                else {
                    // Login failed
                    echo "<p class='error'>Invalid username or password.</p>";
                }

                mysqli_close($conn);
            }
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
