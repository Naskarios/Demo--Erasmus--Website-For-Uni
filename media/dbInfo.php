<?php

$servername="localhost";
$usr="root";
$psw="";
$db="basika";

function printQuery($users_arr){
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
    $tbody .= '<td>' . $v . '</td>';
    }
    $tbody .= '</tr>';
}
$tbody .= '</tbody>';
// render table
$table = '<table>' . $thead . $tbody . '</table>';
echo $table;
}

function checkUsername($username){
    $servername="localhost";
    $usr="root";
    $psw="";
    $db="basika";
    $flag=0;
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