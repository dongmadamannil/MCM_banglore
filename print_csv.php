<?php
session_start();
include("dbconnect.php");
$sqQuery =$_SESSION['fetch_qry'];
//$sqQuery ="select * from registration_details;";
$resObjQuery = mysqli_query($conn, $sqQuery);
$resObjQuery1 = mysqli_query($conn,"select * from registration_details;");
$f = fopen('php://memory', 'w'); 
$klm=mysqli_fetch_assoc($resObjQuery1);
$i=0;
foreach($klm as $key => $value) { 
    $name[$i]=$key;$i++;
}$i=0;
fputcsv($f,$name,","); 
if (mysqli_num_rows($resObjQuery)) {
while($rowObj = mysqli_fetch_assoc($resObjQuery)){

    $i=0;
    foreach($rowObj as $key => $value) { 
        $name[$i]=$value;$i++;
    }
    fputcsv($f,$name,",");   
}}
fseek($f, 0);
header('Content-Type: text/csv');
$filename="studentlist.csv";
header('Content-Disposition: attachment; filename="'.$filename.'";');
fpassthru($f);
?>