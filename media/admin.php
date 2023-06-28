<?php
//problems:
//reveal
//headers admin
//MULTI-FILES
error_reporting(E_ERROR | E_PARSE); // XAXAXAXAXAXAXA
                require_once("dbinfo.php");
                if(!isset($_COOKIE["admin"])){
                    header("Location: more.php");
                    exit;
                }
                $conn=mysqli_connect($servername, $usr, $psw,$db);
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
            <?php
            // $sql="SELECT classFile FROM application WHERE fname='nasos'";
            // mysqli_query($conn,$sql);
            // $result=mysqli_query($conn,$sql);
            // $users_arr = mysqli_fetch_all($result);
            // $ref=$users_arr[0][0];
            // echo "<a href='$ref'>file</a>";
            ?>
            <form method="get"  action="admin.php">
                <h1>admin page</h1>
                
                Start Date&nbsp; :<input type="date" name="start"><br>
                End Date &nbsp;:<input type="date" name="end"><br>
                <input type="submit" value="Set dates"><br>
                <?php
                                if($_GET["start"] && $_GET["end"]){//stop entering 0s to the database
                                    $x=$_GET["start"];
                                    $y=$_GET["end"];
                                    $sql="INSERT INTO dates (date_id, startDate, endDate) VALUES (NULL, '$x','$y')";
                                    mysqli_query($conn,$sql);
                                    // $sql="SELECT * FROM dates ORDER BY endDate ASC"; 
                                    echo "<h1>dates set</h1>";
                                }
                ?>
                </form>
                <form method="get"  action="admin.php">
                Selection<select name="selectm">
                    <option  type="checkbox" name="box1" value="sel1">filters<br>
                    <option type="checkbox" name="box2" value="sel2">approved<br>
                    <option type="checkbox" name="box3" value="sel3">universities<br>
                    <option type="checkbox" name="box4" value="sel4">new admin<br>
                    <!-- <option type="checkbox" name="box5" value="sel4"> -->
                </select><br>

                <?php
                        //results depending on selection
                if($_GET['selectm']=='sel1' ){
                    //desc by mo
                    $sql="SELECT * FROM application ORDER BY moClass DESC"; 
                    $result = mysqli_query($conn,$sql);
                    $users_arr = mysqli_fetch_all($result);

                    //percent
                    echo 'Give percentage<input type="number" name="num1" min="0" max="100" placeholder="ex 50=50%">';
                    $per=$_GET['num1'];
                    $sql="SELECT * FROM application WHERE percentClass>='$per'  ORDER BY moClass DESC"; 
                    $result = mysqli_query($conn,$sql);
                    $users_arr1 = mysqli_fetch_all($result);

                    // uni drop down
                    $conn = mysqli_connect($servername,$usr,$psw,$db);
                    $sql="SELECT * FROM universities";
                    $result = mysqli_query($conn,$sql);
                    $users_arrt = mysqli_fetch_all($result);
                    echo "Select University<select name='given'>";
                    for($i=0;$i<mysqli_num_rows($result);$i++)
                    echo '<option selected value="'.$users_arrt[$i][1].'">'.$users_arrt[$i][1].'';
                    echo '</select>';
                    
                    $given=$_GET['given'];
                    $sql="SELECT * FROM application WHERE uni1='$given' UNION SELECT * FROM application WHERE uni2='$given' UNION SELECT * FROM application WHERE uni3='$given'  ORDER BY moClass DESC";
                    $result = mysqli_query($conn,$sql);
                    $users_arr2 = mysqli_fetch_all($result);

                    //print all queries
                    echo "<h1>Desc by MO</h1>";
                    printQuery($users_arr,1);
                    echo "<br><h1>Percentage</h1>";
                    printQuery($users_arr1,1);
                    echo "<br><h1>Selected Uni</h1>";
                    printQuery($users_arr2,1);
                }
                else if($_GET['selectm']=='sel2'){  //approved and reveal

                    $sql="SELECT * FROM application WHERE approval='1'ORDER BY moClass DESC"; 
                    $result = mysqli_query($conn,$sql);
                    $users_arr = mysqli_fetch_all($result);
                    printQuery($users_arr,0);
                    // echo"<form method='get' action='more.php'><input type='submit' name='showtime' value='REVEAL'></form>";
                    //NO IDEA WHY IT ISNT WORKING XRISTE MOU
                }
                else if($_GET['selectm']=='sel3'){ //uni table and addition
                    $sql="SELECT * FROM universities";
                    $result = mysqli_query($conn,$sql);
                    $users_arr = mysqli_fetch_all($result);
                    printQuery($users_arr,0);
                    echo 'University name:<input type="text" name="uniName"><br>Country:<input type="text" name="uniCountry"><br>';
                }
                ?>


                <br><input type="submit" value="submit"><br>
            </form>




            <?php
                    // AFTER SUBMIT
                    
                    if($_GET['selectm']=='sel1'){
                        $queries=array("SELECT * FROM application ORDER BY moClass DESC","SELECT * FROM application WHERE percentClass>='$per'  ORDER BY moClass DESC","SELECT * FROM application WHERE uni1='$given' UNION SELECT * FROM application WHERE uni2='$given' UNION SELECT * FROM application WHERE uni3='$given'  ORDER BY moClass DESC");
                        $sql="SELECT * FROM application";
                        $approw=mysqli_query($conn,$sql);//using  this query just the number of rows
                    
                        for($j=0;$j<3;$j++){//search for the application where the "checkbox id" matches the application id 
                                            //the match could be in one or two or all of the queries from above (the selection filters)
                            $sql=$queries[$j];            
                            $result=mysqli_query($conn,$sql);
                            $users_arr = mysqli_fetch_all($result);
                            
                            for($i=0;$i<mysqli_num_rows($approw)+15;$i++){ 
                                //to +15 yparxei giati ta ids twn application den einai apo to 0-7,oi times tous den einai seriakes
                                    
                                if($_GET[$users_arr[$i][0]]=='checkbox_option_1'){
                                    $check=$users_arr[$i][0];
                                    $sql="UPDATE application SET approval = '1' WHERE app_id = '$check'";
                                    mysqli_query($conn,$sql);
                                }
                            }
                        }
        }
      

                if($_GET["uniName"]){   //uni insert
                    $x=$_GET["uniName"];
                    $y=$_GET["uniCountry"];
                    $sql="INSERT INTO universities (university_id, university_name, country) VALUES (NULL, '$x','$y')";
                    mysqli_query($conn,$sql);
                    echo  $x. 'from'. $y."added";
                }
                if($_GET['selectm']=='sel4' || $_POST["fname"]){
                    $sql="SELECT * FROM users where user_type_id='1'";
                    mysqli_query($conn,$sql);
                    $result = mysqli_query($conn,$sql);
                    $users_arr = mysqli_fetch_all($result);
                    printQuery($users_arr,0);

                    $fname = $_POST["fname"];
                    $lname = $_POST["lname"];
                    
                    $tel = $_POST["tel"];
                    $email = $_POST["email"];
                    $username = $_POST["username"];
                    $password = $_POST["password"];
                    
                    //  IF USERNAME DOESNT EXIST 
                    if( checkUsername($username) == 1)
                    echo "USER ALREADY EXISTS";
                    else{
                    echo "New admin added";
                        $sql = "INSERT INTO users (user_id,fname, lname, a_m, tel, email, username, password,user_type_id) VALUES (NULL,'$fname', '$lname', '2022999999999', '$tel', '$email', '$username', '$password','1')";
                        mysqli_query($conn, $sql);
                    }
                    
                    echo '<h1>insert new admin</h1>
                    <form method="post" class="text-center"  action="admin.php">
                    <h1>Δεν έχετε λογαριασμό;</h1>
                    <h1><b>ΚΑΙΡΟΣ ΝΑ ΕΓΓΡΑΦΕΙΤΕ</b></h1>
                    <img src="images-videos/ino.gif" alt="smirking guy">
                    <br>
                    Όνομα &nbsp;: <input type="text" name="fname" id="name" placeholder="nasos" required>
                    Επίθετο &nbsp;: <input type="text" name="lname" id="surname" placeholder="karras" required> <br>
                    
                    Τηλέφωνο &nbsp;: <input type="text" name="tel" id="phone" placeholder="666 999 666" required> <br>
                    Email &nbsp;: <input type="email" name="email" id="email" placeholder="NaskAlter@gmail.com" required> <br>
                    Username &nbsp;: <input type="text" name="username" id="username" placeholder="Naskarios" required> <br>
                    Password &nbsp;: <input type="password" name="password" id="password" required> <br>
                    Confirm Password &nbsp;: <input type="password" name="password2" id="password2" required> <br>
                    <input type="submit" value="hlia rixto"><br>
                </form>';
                }
                
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