<?php

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
    $tbody .= '<td>' . $v . '</td>';
    }
    if($flag==0)
    $tbody .= '</tr>';
    else{
        $tbody .= '<td><INPUT type="checkbox" name="checkbox'.$i.' value="checkbox_option_1"></td></tr>';
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