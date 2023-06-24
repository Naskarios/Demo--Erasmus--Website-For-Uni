<!DOCTYPE html>
<?php
    if(isset($_COOKIE["registered"])){
        header("Location: more.php");
        exit;
    }
//   setcookie("registered","peos", time()+3600);
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
                <?php
                    if (isset($_COOKIE["registered"])) {
                        echo '<a class="a1" href="application.php">application</a>';
                    }
                    ?>
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
                $host = "your_host";
                $username = "your_username";
                $password = "your_password";
                $database = "your_database";

                $conn = mysqli_connect($host, $username, $password, $database);
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $username = $_POST["username"];
                $password = $_POST["password"];

                $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) == 1) {
                    // Login successful
                    setcookie("registered", "peos", time() + 3600, "/");
                    header("Location: index.php");
                    exit;
                } else {
                    // Login failed
                    echo "<p class='error'>Invalid username or password.</p>";
                }

                mysqli_close($conn);
            }
            ?>
        </div>
        <div class="last">
            <footer>
                <a href="judas.htm">παρακαλω να ειστε νομιμος πολιτης</a>
            </footer>            
        </div>       
    </div>
</body>
</html>
