<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.fromclz{
    height: 32px;
    width: 70%;
    border-radius: 15px;
    margin-left: 35px;
    margin-top: 15px;
}
.fsub{
    height: 32px;
    width: 155px;
    border-radius: 10px;
    font-size: large;
}
.cnge_psd{
    height: 32px;
    width: 255px;
    border-radius: 10px;
    font-size: large;
    margin-top:32px ;
    margin-left: 32px;
}


.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}  
</style>
<body>

<div id="vanishdiv" style= "background-color:#ADEDFE;
  font-family: Raleway;
  text-transform:uppercase;
  position:absolute;
  top:33%;
  left:80%;
   border-radius: 25px;
  width: 270px;
   height:350px;
  display:none;">
  <div style="position:absolute;left:15%;">
  <h6><b>Password must contain the following:</b></h6>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
  <p id="lengtha" class="valid">Maximum <b>30 characters</b></p>
  </div>
  </div>
  
  <div id="vanishdiva" style= "background-color:#ADEDFE;
  font-family: Raleway;
  text-transform:uppercase;
  position:absolute;
  top:33%;
  left:80%;
   border-radius: 25px;
  width: 250px;
  height:150px;
  display:none;">
  <div style="position:absolute;left:15%;">
    <p id="pk" class="invalid" style="display:none;">Your <b>password </B>and <b>confirmation password </b>do not match.</p>
  <p id="pr" class="valid" style="display:none;padding-top:50px;"><B>Password match</B></p>
    </div>
  </div>


<div style="background-color: #CEDCF4;height:50%;width:50%;position:absolute;border-radius:15px;top:25%;left:25%;">
Enter Current Password<br>
<input type="password" class="fromclz" id="cupsd">
<input type="button" value="Submit" class="fsub" onclick="check_psd()">
<div style="display:none;" id="okr">
<input type="password" placeholder="Enter New Password" class="fromclz" id="pass1">
<input type="password" placeholder="Re-Enter Password" class="fromclz" id="pass2"><br>
<input type="button" value="Change Password" class="cnge_psd" onclick="subr()" id="cngepsd" disabled>

</div>
<div style="margin-left:35px;display:none;" id="err">
    <h2 style="color:red;">Enter A Valid Password</h2>
</div>
    </div>
</body>
<script>
    t6=0;t7=0;
var myInputa= document.getElementById("pass2");
myInputa.onkeyup=function()
{document.getElementById("vanishdiva").style.display = "block";
	var ptext=document.getElementById("pass1").value;
 var pctext=document.getElementById("pass2").value;
if(ptext===pctext)
{   
   document.getElementById("pk").style.display = "none";
	document.getElementById("pr").style.display = "block";
	t7=1;t6=1;test();
}
else
{  
  document.getElementById("pr").style.display = "none";
	document.getElementById("pk").style.display = "block";
	t6=0; test();
}

}




t1=0;t2=0;t3=0;t4=0;t5=0;
var myInput = document.getElementById("pass1");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  
  document.getElementById("vanishdiv").style.display = "block";
  document.getElementById("vanishdiva").style.display = "none";test();
}
myInput.onblur = function() 
{  
  document.getElementById("vanishdiv").style.display = "none";
}
myInput.onkeyup = function() {
  // Validate lowercase letters
  kpass();
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
	t1=1;
	test();
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");t1=0;test();
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");t2=1;test();
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");t2=0;test();
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");t3=1;test();
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");t3=0;test();
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");t4=1;test();
  } else {
    length.classList.remove("valid");t4=0;test();
    length.classList.add("invalid");
  }
      if(myInput.value.length >30) {
     lengtha.classList.remove("valid");
    lengtha.classList.add("invalid");t5=0;test();
  } else {
  lengtha.classList.remove("invalid");
    lengtha.classList.add("valid");t5=1;test();
  }
  
}
function kpass()
{ var pa=document.getElementById("pass1").value;
 var pb=document.getElementById("pass2").value;
if(pa==pb)
{ 
t7=1;t6=1;test();
}
else
{
t7=0;test();
}	
	
}

function test(){
    if(t1==1&&t2==1&&t3==1&&t4==1&&t5==1&&t6==1&&t7==1)
    {
document.getElementById("cngepsd").disabled=false;
    }
    else
    {
        document.getElementById("cngepsd").disabled=true;
    }
}

function check_psd(){
    passwd=document.getElementById("cupsd").value;
    uidk="<?php echo $_SESSION['login'];?>";
   // uidk="Don";
  $.ajax({
        url: 'ajax_psd_change.php',
        type: 'POST',
        data: {
            no: 1,
            psd:passwd,
			uidr:uidk,
        },
        success: function(data){
            dri(data);
		  }               
    });
 
 
}
function dri(k)
 {
	if(k==1)
	{
document.getElementById("err").style.display="none";
document.getElementById("okr").style.display="block";

	}
else
    {
document.getElementById("okr").style.display="none";
document.getElementById("err").style.display="block";

    }	
	 
 }

 function subr()
 {
	pass=document.getElementById("pass2").value;
 uidz="<?php echo $_SESSION['login'];?>";
  $.ajax({
        url: 'ajax_psd_change.php',
        type: 'POST',
        data: {
            no: 2,
            passw:pass,
			uidl:uidz,
        },
        success: function(data){
            psd(data);
		  }               
    });	
	 
 }
 function psd(h)
 {
	if(h==1)
	{
alert('password changed successfully');
window.open("login.php",'_top');
   }
else
{
alert('an error has occurred');
window.location="cnge_psd.php";
}	
	 
 }

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</html>