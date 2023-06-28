<?php
            //  INSERT HUMOR 
                $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
                        if($actual_link == 'http://'.$_SERVER['HTTP_HOST']."/media/dbinfo.php"){
                            if (!isset($_COOKIE["user"])) {
                                echo "<h1>ALT ESY</h1><br>ti kaneis edw?<br> OUST!!!!! <a href='index.php'>RE OUST LEW</a>";
                            }
                            else{
                                echo '<br>GIATI MOU TO KANEIS AUTO? '.$_COOKIE["user"]."<br>";
                                echo "<h1>TI KANEIS ESY EDW??EISAI USER</h1> <a href='index.php'>EKSW!!!</a>";
                            }
                        }

                    
    //the actual code starts from here
$servername="localhost";
$usr="root";
$psw="";
$db="basika";

function printQuery($users_arr,$flag){
    $i=0;
    $thead = '<thead>
<tr>';
    foreach($users_arr[0] as $key => $value) {
    $thead .= '<th>' . $key . '</th>';
    }
    $thead .= '</tr>
</thead>';
// render tbody
$tbody = '<tbody>';
foreach($users_arr as $key => $value) {
$tbody .= '<tr>';
    foreach($value as $k => $v) {
        if($flag==1){
            if(stripos("$v","application")==2)
                $tbody .= '<td><a href='.$v.'>Filelink</a></td>';
                else
                    $tbody .= '<td>' . $v . '</td>';
            }
                else
                    $tbody .= '<td>' . $v . '</td>';
    }
    if($flag==0)
    $tbody .= '</tr>';
    else{//if flag == 1 the checkbox will appear next to the application
        //asxeta ama einai omorfo h oxi
        $tbody .= '<td><INPUT type="checkbox" name='.$users_arr[$i][0].' value="checkbox_option_1"></td></tr>';
        $i++;

    }
}
$tbody .= '</tbody>';
// render table
// <form><INPUT type="checkbox" name="checkbox" value="checkbox_option_1"></form>
$table = '<table>' . $thead . $tbody . '</table>';
echo $table;

}


function checkUsername($username){
    $servername="localhost";
    $usr="root";
    $psw="";
    $db="basika";
    $flag=0;
    //flasg is only for double checking if username exists
    // if f==1 account exists already

    $conn = mysqli_connect($servername,$usr,$psw,$db);
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $flag=1;
    }

    return $flag;
}
?>
<!-- $tbody .= '<td><form><INPUT type="checkbox" name="checkbox" value="checkbox_option_1"></form></td></tr>'; -->
<!-- AMA EINAI registered
no login no sign
AMA DEN 
no application -->
<!-- example for printQuery -->
<!-- $con=mysqli_connect($servername, $usr, $psw,$db);
if($con){
    $result = mysqli_query($con,"SELECT * FROM typeof");
    $users_arr = mysqli_fetch_all($result);
    //to render apo dw kai pera
    
    printQuery($users_arr);
}
else {
    echo "MARESEI TO  peos\n";
}    
 $conn = mysqli_connect($servername, $usr, $psw, $db);

-->