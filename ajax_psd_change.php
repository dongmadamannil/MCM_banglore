<?php
session_start();
include("dbconnect.php");
if($_POST['no']==1)
{
$ui=$_POST['uidr'];	
$psdr=$_POST['psd'];
	$sq="select * from login where uname='$ui';";
	$rest=mysqli_query($conn,$sq);
    $ro=mysqli_fetch_assoc($rest);
	$corrpsd=$ro['pass'];
	if($psdr==$corrpsd)
	{
	echo 1;	
	}
	else
	{
		echo 0;
	}
	
}
if($_POST['no']==2)
{
	$passwor=$_POST['passw'];
	$userid=$_POST['uidl'];
$sq1="update login set pass='$passwor' where uname='$userid';";
if(mysqli_query($conn,$sq1))	
{
	$_SESSION['login']="";
    echo 1;

}
else
{echo 0;
}	
}


?>