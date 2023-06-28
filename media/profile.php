<?php
                require_once("dbinfo.php");

                error_reporting(E_ERROR | E_PARSE); // XAXAXAXAXAXAXA
                if(!isset($_COOKIE["user"])){
                    header("Location: more.php");
                    exit;
                }
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../styles/styles.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
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
                    if (isset($_COOKIE["admin"])) {
                        echo'    <a class="a1 " href="admin.php">admin</a> ';
                    }
                        if (isset($_COOKIE["user"])) {
                            echo '<a class="a1" href="application.php">application</a> ';
                        }
                    ?>
                <a class="a1" href="reqs.php">reqs</a>
                <a class="a1" href="sign-up.php">sign-up</a>
                <a class="a1" href="login.php">login</a>
                <a class="a1" href="more.php">more</a>                    
                <a class="a1" href="profile.php">profile</a>
            </nav>
        </div>
        <div class="third text-center not_main">

            <h1>Edit Profile</h1>
            
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    echo "<h1>PROFILE UPDATED SUCCESFULLY<br>mpravo to agori mou</h1>";
                    // Retrieve the updated profile information from the form
                    $name = $_POST["name"];
                    $surname = $_POST["surname"];
                    $studentId = $_POST["student_id"];
                    $email = $_POST["email"];
                    $phone = $_POST["phone"];
                    
                    // Update the profile information in the database
            
                    $conn = mysqli_connect($servername, $usr, $psw, $db);
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
            
                    $username = $_COOKIE["user"];
                    $sql = "UPDATE users SET fname = '$name', lname = '$surname', a_m = '$studentId', email = '$email', tel = '$phone' WHERE username = '$username'";
                    mysqli_query($conn,$sql);
                }
            
            
            $conn = mysqli_connect($servername, $usr, $psw, $db);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            $username = $_COOKIE["user"];
            $sql = "SELECT * FROM users WHERE username = '$username'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
            }
            
            mysqli_close($conn);
            ?>

            <!-- <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> -->
            <form method="post" action="profile.php">
                <label for="name">Name:</label>
                <input type="text" name="name" value="<?php echo $row["fname"]; ?>"><br>

                <label for="surname">Surname:</label>
                <input type="text" name="surname" value="<?php echo $row["lname"]; ?>"><br>

                <label for="student_id">Student ID:</label>
                <input type="text" name="student_id" value="<?php echo $row["a_m"]; ?>"><br>

                <label for="email">Email:</label>
                <input type="email" name="email" value="<?php echo $row["email"]; ?>"><br>

                <label for="phone">Phone:</label>
                <input type="text" name="phone" value="<?php echo $row["tel"]; ?>"><br>

                <input type="submit" value="Update Profile">
            </form>

            <!-- <?php
            ?> -->
        </div>
        <div class="last">
            <footer>
                <a href="judas.php">παρακαλω να ειστε νομιμος πολιτης</a>
            </footer>            
        </div>       
    </div>
</body>
</html>
