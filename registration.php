<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="CSS/registration_style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  
</head>
<body >
    <div>
        <?php
        include("dbconnect.php");
        if(isset($_POST['register']))
        {
            $name=$_POST["fullname"];
            $rollno=$_POST["rollno"];
            $dob=$_POST["dob"];
            $email=$_POST["email"];
            $mobile=$_POST["mobile"];
            $gender=$_POST["gender"];
            $category=$_POST["category"];
            $hosteller=$_POST["hosteller"];
            $sem=$_POST["sem"];
            $branch=$_POST["branch"];
            $batch=$_POST["batch"];
            $yoa=$_POST["yoa"];
            $hosteladd=$_POST["hosteladd"];
            $address=$_POST["address"];
            $enscore=$_POST["enscore"];
            $entry=$_POST["entry"];
            $backpaper=$_POST["backpaper"];
            $gpa=$_POST["gpa"];
            $bloan=$_POST["bloan"];
            $otherscholar=$_POST["otherscholar"];
            $semfee=$_POST["semfee"];
            $examfee=$_POST["examfee"];
            $hostelfee=$_POST["hostelfee"];
            $stationaryfee=$_POST["stationaryfee"];
            $otherdetails=$_POST["otherdetails"];
            $otherfee=$_POST["otherfee"];
            $fname=$_POST["fname"];
            $fage=$_POST["fage"];
            $fsal=$_POST["fsal"];
            $mname=$_POST["mname"];
            $mage=$_POST["mage"];
            $msal=$_POST["msal"];
            $s1name=$_POST["s1name"];
            $s1age=$_POST["s1age"];
            $s1sal=$_POST["s1sal"];
            $s2name=$_POST["s2name"];
            $s2age=$_POST["s2age"];
            $s2sal=$_POST["s2sal"];
            $studid=$yoa . $branch . $sem . $batch . $rollno;
            $sql="INSERT INTO registration_details(fullname,studid,rollno,dob,email,mobile,gender,category,yoa,semester,branch,batch,hosteller,address,hosteladd,entrancerank,entrancetry,backpaper,gpa,fathername,fatherage,fatherincome,mothername,motherage,motherincome,sibling1name,sibling1age,sibling1income,sibling2name,sibling2age,sibling2income,bankreceipt,otherscholarship,semfee,hostelfee,examfee,stationaryfee,otherfeedetails,otherfee,selected)VALUES('$name','$studid',$rollno,$dob,'$email','$mobile','$gender','$category',$yoa,$sem,'$branch','$batch','$hosteller','$address','$hosteladd',$enscore,$entry,$backpaper,$gpa,'$fname',$fage,$fsal,'$mname',$mage,$msal,'$s1name',$s1age,$s1sal,'$s2name',$s2age,$s2sal,'$bloan','$otherscholar',$semfee,$hostelfee,$examfee,$stationaryfee,'$otherdetails',$otherfee,'notsel')";
            if(mysqli_query($conn,$sql))
            //$sql1="update registration_details set "
                echo "Sucessfull";
            else
                echo "Unsucessfull";

            mysqli_close($conn);
        }
        ?>
    </div>
    <div class="container">
        <header>Registration</header>
        
        <form action="registration.php" method="post" name="register" >
            <div class="form first">
                <div class="details personal">
                    <span class="title"> </span>
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" name="fullname" id="fullname" onblur="valdfn1()" onkeyup="valdfn1()" placeholder="Enter your name" required>
                        </div>
                        <div class="input-field">
                            <label>Roll no</label>
                            <input type="text" name="rollno" id="rollno" onblur="valdfn2()" onkeyup="valdfn2()" placeholder="Enter your rollno" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" name="dob" placeholder="Enter birth date" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="email" id="email" onblur="valdfn3()" onkeyup="valdfn3()" placeholder="Enter your email" required >
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" name="mobile" id="mobile" onblur="valdfn4()" onkeyup="valdfn4()" placeholder="Enter mobile number" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select required name="gender">
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Category</label>
                            <select required name="category">
                                <option disabled selected>Select category</option>
                                <option>General</option>
                                <option>SC/ST</option>
                                <option>OBC</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Hosteller</label>
                            <select required name="hosteller">
                                <option disabled selected>Select option</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Branch</label>
                            <select required id="branch" name="branch">
                                <option value="" selected="selected">Select branch</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Semester</label>
                            <select required id="sem" name="sem">
                                <option value="" selected="selected">Select semester</option>
                              
                            </select>
                        </div>
                        
                        <div class="input-field">
                            <label>Batch</label>
                            <select required id="batch" name="batch">
                                <option value="" selected="selected">Select batch</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Year Of Admission</label>
                            <input type="number"  name="yoa" id="yoa" onblur="valdfn5()" onkeyup="valdfn5()" placeholder="Enter admission year" required >
                        </div>
                        <div class="input-field">
                            <label>Hostel Address</label>
                            <input type="text" name="hosteladd" id="hosteladd"  onblur="valdfn6()" onkeyup="valdfn6()" placeholder="Enter your hostel address" required>
                        </div>
                        <div class="input-field">
                            <label>Permanent Address</label>
                            <input type="text" name="address" id="address" onblur="valdfn7()"  onkeyup="valdfn7()" placeholder="Enter your address" required>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Academic Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Kerala Entrance Score</label>
                            <input type="text" name="enscore" placeholder="Enter score" required >
                        </div>

                        <div class="input-field">
                            <label>Entrance Try</label>
                            <select required name="entry">
                                <option disabled selected>Select entrance try</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Back Papers</label>
                            <input type="number" name="backpaper" id="backpaper" onblur="valdfn8()" onkeyup="valdfn8()" placeholder="Enter no of back papers" required  >
                        </div>
                        <div class="input-field">
                            <label>GPA</label>
                            <input type="number" name="gpa"  placeholder="Enter gpa"required >
                        </div>
                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title">Fee Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Bank Loan Receipt</label>
                            <select required  name="bloan">
                                <option disabled selected>Select option</option>
                                <option>yes</option>
                                <option>no</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Other Scholarship Receipt</label>
                            <select required  name="otherscholar">
                                <option disabled selected>Select option</option>
                                <option>yes</option>
                                <option>no</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Semester Fees/Year</label>
                            <input type="number" name="semfee" id="semfee"  onblur="valdfn9()" onkeyup="valdfn9()"  placeholder="Enter your sem fees" required  >
                        </div>

                        <div class="input-field">
                            <label>Exam Fees/Year</label>
                            <input type="number" name="examfee" id="examfee"  onblur="valdfn10()" onkeyup="valdfn10()" placeholder="Enter your exam fees" required  >
                        </div>

                        <div class="input-field">
                            <label>stationary Fees/Year</label>
                            <input type="number" name="stationaryfee" id="stationaryfee"  onblur="valdfn11()" onkeyup="valdfn11()" placeholder="Enter stationary fee" required  >
                        </div>
                          <div class="input-field">
                            <label>Hostel Fees/Year</label>
                            <input type="number" name="hostelfee" id="hostelfee" onblur="valdfn12()" onkeyup="valdfn12()" placeholder="Enter hostel fee" required >
                        </div>
                        <div class="input-field">
                            <label>Other fee details</label>
                            <input type="text" name="otherdetails" id="otherfeede"  onblur="valdfn13()" onkeyup="valdfn13()"  placeholder="Enter fee detail" required >
                        </div>
                        <div class="input-field">
                            <label>Other Fees/Year</label>
                            <input type="number"  name="otherfee" id="otherfee"  onblur="valdfn14()" onkeyup="valdfn14()"  placeholder="Enter other fee" required  >
                        </div>
                    </div>
                </div>

                <div class="details family">
                    <span class="title">Family Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Father Name</label>
                            <input type="text" name="fname" id="fname"  onblur="valdfn15()" onkeyup="valdfn15()" placeholder="Enter father name" required >
                        </div>

                        <div class="input-field">
                            <label>Father age</label>
                            <input type="number" name="fage" id="fage"  onblur="valdfn16()" onkeyup="valdfn16()" placeholder="Enter father age" required  >
                        </div>

                        <div class="input-field">
                            <label>Father salary</label>
                            <input type="number" name="fsal" id="fsal" onblur="valdfn17()" onkeyup="valdfn17()" placeholder="Enter father salary" required >
                        </div>

                        <div class="input-field">
                            <label>Mother Name</label>
                            <input type="text" name="mname" id="mname"  onblur="valdfn18()" onkeyup="valdfn18()" placeholder="Enter mother name" required >
                        </div>

                        <div class="input-field">
                            <label>Mother age</label>
                            <input type="number" name="mage" id="mage"  onblur="valdfn19()" onkeyup="valdfn19()"placeholder="Enter mother age" required >
                        </div>

                        <div class="input-field">
                            <label>Mother salary</label>
                            <input type="number" name="msal" id="msal"  onblur="valdfn20()" onkeyup="valdfn20()" placeholder="Enter mother salary" required >
                        </div>
                        <div class="input-field">
                            <label>1st sibling Name</label>
                            <input type="text" name="s1name" id="s1name"  onblur="valdfn21()" onkeyup="valdfn21()" placeholder="Enter sibling1 name" required >
                        </div>

                        <div class="input-field">
                            <label>1st sibling age</label>
                            <input type="number" name="s1age" id="s1age"  onblur="valdfn22()" onkeyup="valdfn22()"placeholder="Enter sibling1 age" required >
                        </div>

                        <div class="input-field">
                            <label>1st sibling salary</label>
                            <input type="number" name="s1sal" id="s1sal"  onblur="valdfn23()" onkeyup="valdfn23()" placeholder="Enter sibling1 salary" required >
                        </div>
                        <div class="input-field">
                            <label>2nd sibling2 Name</label>
                            <input type="text" name="s2name" id="s2name"  onblur="valdfn24()" onkeyup="valdfn24()" placeholder="Enter sibling2 name" required >
                        </div>

                        <div class="input-field">
                            <label>2nd sibling2 age</label>
                            <input type="number" name="s2age" id="s2age"  onblur="valdfn25()" onkeyup="valdfn25()" placeholder="Enter sibling2 age" required >
                        </div>

                        <div class="input-field">
                            <label>2nd sibling salary</label>
                            <input type="number" name="s2sal" id="s2sal"  onblur="valdfn26()" onkeyup="valdfn26()" placeholder="Enter sibling2 salary" required >
                        </div>
                        <div class="input-field">
                            <label>Income Certificate</label>
                            <input type="file" name="incomefile" placeholder="Upload income certificate" required >
                        </div>
                        
                        
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                        
                        <button class="sumbit" id="register" name="register">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>
<!-- JAVA SCRIPT START===================================================================================================-->
    <script>
///////////////////////////////next back btn//////////////////////////////////////////////////////////////////////////////// 
        const form = document.querySelector("form"),
        nextBtn = form.querySelector(".nextBtn"),
        backBtn = form.querySelector(".backBtn"),
        allInput = form.querySelectorAll(".first input");


nextBtn.addEventListener("click", ()=> {
    allInput.forEach(input => {
        if(input.value != ""){
            form.classList.add('secActive');
        }else{
            form.classList.remove('secActive');
        }
    })
})

backBtn.addEventListener("click", () => form.classList.remove('secActive'));



/*const form = document.querySelector("form"),
        nextBtn = form.querySelector(".nextBtn"),
        backBtn = form.querySelector(".backBtn"),
        allInput = form.querySelectorAll(".first input");


nextBtn.addEventListener("click", ()=> form.classList.add('secActive'));

// nextBtn.addEventListener("click", ()=> {
    // allInput.forEach(input => {
        // if(true){
            // form.classList.add('secActive');
        // }else{
        //     form.classList.remove('secActive');
        // }
    // })
// })

backBtn.addEventListener("click", () => form.classList.remove('secActive'));*/
//////////////////////////////drop down generate/////////////////////////////////////////////////////////////////////////////////
var branchObject = {
  "CS": {
    "1": ["A","B","C"],
    "2": ["A","B","C"],
    "3": ["A","B","C"],
    "4": ["A","B","C"], 
    "5": ["A","B","C"], 
    "6": ["A","B","C"],   
    "7": ["A","B","C"], 
    "8": ["A","B","C"] 
  },
  "MS": {
    "1": ["A","B","C"],
    "2": ["A","B","C"],
    "3": ["A","B","C"],
    "4": ["A","B","C"], 
    "5": ["A","B","C"], 
    "6": ["A","B","C"],   
    "7": ["A","B","C"], 
    "8": ["A","B","C"] 
  },
   "CS": {
    "1": ["A","B","C"],
    "2": ["A","B","C"],
    "3": ["A","B","C"],
    "4": ["A","B","C"], 
    "5": ["A","B","C"], 
    "6": ["A","B","C"],   
    "7": ["A","B","C"], 
    "8": ["A","B","C"]
  },
  "EEE": {
    "1": ["A","B","C"],
    "2": ["A","B","C"],
    "3": ["A","B","C"],
    "4": ["A","B","C"], 
    "5": ["A","B","C"], 
    "6": ["A","B","C"],   
    "7": ["A","B","C"], 
    "8": ["A","B","C"] 
  },
  "C": {
    "1": ["A","B","C"],
    "2": ["A","B","C"],
    "3": ["A","B","C"],
    "4": ["A","B","C"], 
    "5": ["A","B","C"], 
    "6": ["A","B","C"],   
    "7": ["A","B","C"], 
    "8": ["A","B","C"] 
  },
  "MCA": {
    "1": ["A"],
    "2": ["A"],
    "3": ["A"],
    "4": ["A"]
 
  },
  "CHEM": {
    "1": ["A","B","C"],
    "2": ["A","B","C"],
    "3": ["A","B","C"],
    "4": ["A","B","C"], 
    "5": ["A","B","C"], 
    "6": ["A","B","C"],   
    "7": ["A","B","C"], 
    "8": ["A","B","C"]
  },
  "MTECH": {
    "1": ["A"],
    "2": ["A"],
    "3": ["A"],
    "4": ["A"] 
  },
  "MPLAN": {
    "1": ["A"],
    "2": ["A"],
    "3": ["A"],
    "4": ["A"] 
  },
  "ARCH": {
    "1": ["A","B","C"],
    "2": ["A","B","C"],
    "3": ["A","B","C"],
    "4": ["A","B","C"], 
    "5": ["A","B","C"], 
    "6": ["A","B","C"],   
    "7": ["A","B","C"], 
    "8": ["A","B","C"],
    "9": ["A","B","C"],
    "10": ["A","B","C"]
  },
  "MARCH": {
    "1": ["A","B","C"],
    "2": ["A","B","C"],
    "3": ["A","B","C"],
    "4": ["A","B","C"]
  }
}
window.onload = function() {
  var branchSel = document.getElementById("branch");
  var semSel = document.getElementById("sem");
  var batchSel = document.getElementById("batch");
  for (var x in branchObject) {
    branchSel.options[branchSel.options.length] = new Option(x, x);
  }
  branchSel.onchange = function() {
    //empty Chapters- and Topics- dropdowns
    semSel.length = 1;
    batchSel.length = 1;
    //display correct values
    for (var y in branchObject[this.value]) {
      semSel.options[semSel.options.length] = new Option(y, y);
    }
  }
  semSel.onchange = function() {
    //empty Chapters dropdown
    batchSel.length = 1;
    //display correct values
    var z = branchObject[branchSel.value][this.value];
    for (var i = 0; i < z.length; i++) {
      batchSel.options[batchSel.options.length] = new Option(z[i], z[i]);
    }
  }
}

/////////////////////////////validation///////////////////////////////////////////////////////////////////////////////////////////

var s1=0,s2=0,s3=0,s4=0,s5=0,s6=0,s7=0,s8=0,s9=0,s10=0,s11=0,s12=0,s13=0,s14=0,s15=0,s16=0,s17=0,s18=0,s19=0,s20=0,s21=0,s22=0,s23=0,s24=0,s25=0,s26=0;
 function valdfn1()
{
    var reg=/^[a-zA-Z]+$/;
    var fname=document.getElementById("fullname").value;
    if(reg.test(fname))
    { 
     s1=1; 
     document.getElementById("fullname").style.border = "2px solid green";

     test();
    }
    else
    {
     s1=0;
    document.getElementById("fullname").style.border = "2px solid #F91721";
    test();
    }
    
}
function valdfn2()
{
    var reg=/^[0-9]+$/;
    var rollno=document.getElementById("rollno").value;
    if(reg.test(rollno))
    { 
     s2=1; 
     document.getElementById("rollno").style.border = "2px solid green";

     test();
    }
    else
    {
     s2=0;
    document.getElementById("rollno").style.border = "2px solid #F91721";
    test();
    }
    
}
function valdfn3()
{
    var reg=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var email=document.getElementById("email").value;
    if(reg.test(email))
    { 
     s3=1; 
     document.getElementById("email").style.border = "2px solid green";

     test();
    }
    else
    {
     s3=0;
    document.getElementById("email").style.border = "2px solid #F91721";
    test();
    }
    
}
function valdfn4()
{
    var reg=/^\d{10}$/;
    var mobile=document.getElementById("mobile").value;
    if(reg.test(mobile))
    { 
     s4=1; 
     document.getElementById("mobile").style.border = "2px solid green";

     test();
    }
    else
    {
     s4=0;
    document.getElementById("mobile").style.border = "2px solid #F91721";
   test();
    }
    
}
function valdfn5()
{
    var reg=/^\d{4}$/;
    var yoa=document.getElementById("yoa").value;
    if(reg.test(yoa))
    { 
     if(yoa>=2018)
     {
     s5=1; 
     document.getElementById("yoa").style.border = "2px solid green";

     test();
     }
    }
    else
    {
     s5=0;
    document.getElementById("yoa").style.border = "2px solid #F91721";
   test();
    }
    
}
function valdfn6()
{
    var hosteladd=document.getElementById("hosteladd").value;
         if(hosteladd.length <= 50)
     {
     s6=1; 
     document.getElementById("hosteladd").style.border = "2px solid green";

     test();
     
    }
    else
    {
     s6=0;
    document.getElementById("hosteladd").style.border = "2px solid #F91721";
    test();
    }
    
}
function valdfn7()
{
    var address=document.getElementById("address").value;
         if(address.length <= 50)
     {
     s7=1; 
     document.getElementById("address").style.border = "2px solid green";

     test();
     
    }
    else
    {
     s7=0;
    document.getElementById("address").style.border = "2px solid #F91721";
   test();
    }
    
}
function valdfn8()
{
    var backpaper=document.getElementById("backpaper").value;
     if(backpaper>=0)
     {
     s8=1; 
     document.getElementById("backpaper").style.border = "2px solid green";

     test();
     }
    
    else
    {
     s8=0;
    document.getElementById("backpaper").style.border = "2px solid #F91721";
   test();
    }
    
}
function valdfn9()
{
    var semfee=document.getElementById("semfee").value;
     if(semfee>=0)
     {
     s9=1; 
     document.getElementById("semfee").style.border = "2px solid green";

     test();
     
    }
    else
    {
     s9=0;
    document.getElementById("semfee").style.border = "2px solid #F91721";
    test();
    }
    
}
function valdfn10()
{
    var examfee=document.getElementById("examfee").value;
     if(examfee>=0)
     {
     s10=1; 
     document.getElementById("examfee").style.border = "2px solid green";

     test();
     }
    
    else
    {
     s10=0;
    document.getElementById("examfee").style.border = "2px solid #F91721";
    test();
    }
    
}
function valdfn11()
{
    var stationaryfee=document.getElementById("stationaryfee").value;
     if(stationaryfee>=0)
     {
     s11=1; 
     document.getElementById("stationaryfee").style.border = "2px solid green";

     test();
    
    }
    else
    {
     s11=0;
    document.getElementById("stationaryfee").style.border = "2px solid #F91721";
    test();
    }
    
}
function valdfn12()
{
    var hostelfee=document.getElementById("hostelfee").value;
     if(hostelfee>=0)
     {
     s12=1; 
     document.getElementById("hostelfee").style.border = "2px solid green";

     test();
    
    }
    else
    {
     s12=0;
    document.getElementById("hostelfee").style.border = "2px solid #F91721";
    test();
    }
    
}
function valdfn13()
{
    var reg=/^[a-zA-Z]+$/;
    var otherfeede=document.getElementById("otherfeede").value;
    if(reg.test(otherfeede))
    { 
     s13=1; 
     document.getElementById("otherfeede").style.border = "2px solid green";

     test();
    }
    else
    {
     s13=0;
    document.getElementById("otherfeede").style.border = "2px solid #F91721";
   test();
    }
    
}
function valdfn14()
{
    var otherfee=document.getElementById("otherfee").value;
     if(otherfee>=0)
     {
     s14=1; 
     document.getElementById("otherfee").style.border = "2px solid green";

     test();
    
    }
    else
    {
     s14=0;
    document.getElementById("otherfee").style.border = "2px solid #F91721";
   test();
    }
    
}
function valdfn15()
{
    var reg=/^[a-zA-Z]+$/;
    var fname=document.getElementById("fname").value;
    if(reg.test(fname))
    { 
     s15=1; 
     document.getElementById("fname").style.border = "2px solid green";

     test();
    }
    else
    {
     s15=0;
    document.getElementById("fname").style.border = "2px solid #F91721";
   test();
    }
    
}
function valdfn16()
{
    var fage=document.getElementById("fage").value;
     if(fage>=21 && fage<=110)
     {
     s16=1; 
     document.getElementById("fage").style.border = "2px solid green";

     test();
    
    }
    else
    {
     s16=0;
    document.getElementById("fage").style.border = "2px solid #F91721";
    test();
    }
    
}
function valdfn17()
{
    var fsal=document.getElementById("fsal").value;
     if(fsal>=0)
     {
     s17=1; 
     document.getElementById("fsal").style.border = "2px solid green";

     test();
    
    }
    else
    {
     s17=0;
    document.getElementById("fsal").style.border = "2px solid #F91721";
    test();
    }
    
}
function valdfn18()
{
    var reg=/^[a-zA-Z]+$/;
    var mname=document.getElementById("mname").value;
    if(reg.test(mname))
    { 
     s18=1; 
     document.getElementById("mname").style.border = "2px solid green";

     test();
    }
    else
    {
     s18=0;
    document.getElementById("mname").style.border = "2px solid #F91721";
    test();
    }
    
}
function valdfn19()
{
    var mage=document.getElementById("mage").value;
     if(mage>=18 && mage<=110)
     {
     s19=1; 
     document.getElementById("mage").style.border = "2px solid green";

     test();
    
    }
    else
    {
     s19=0;
    document.getElementById("mage").style.border = "2px solid #F91721";
    test();
    }
    
}
function valdfn20()
{
    var msal=document.getElementById("msal").value;
     if(msal>=0)
     {
     s20=1; 
     document.getElementById("msal").style.border = "2px solid green";

     test();
    
    }
    else
    {
     s20=0;
    document.getElementById("msal").style.border = "2px solid #F91721";
   test();
    }
    
}

function valdfn21()
{
    var reg=/^[a-zA-Z]+$/;
    var s1name=document.getElementById("s1name").value;
    if(reg.test(s1name))
    { 
     s21=1; 
     document.getElementById("s1name").style.border = "2px solid green";

     test();
    }
    else
    {
     s21=0;
    document.getElementById("s1name").style.border = "2px solid #F91721";
    test();
    }
    
}
function valdfn22()
{
    var s1age=document.getElementById("s1age").value;
     if(s1age>=18 && s1age<=110)
     {
     s22=1; 
     document.getElementById("s1age").style.border = "2px solid green";

    test();
    
    }
    else
    {
     s22=0;
    document.getElementById("s1age").style.border = "2px solid #F91721";
    test();
    }
    
}
function valdfn23()
{
    var s1sal=document.getElementById("s1sal").value;
     if(s1sal>=0)
     {
     s23=1; 
     document.getElementById("s1sal").style.border = "2px solid green";

     test();
    
    }
    else
    {
     s23=0;
    document.getElementById("s1sal").style.border = "2px solid #F91721";
   test();
    }
    
}
function valdfn24()
{
    var reg=/^[a-zA-Z]+$/;
    var s2name=document.getElementById("s2name").value;
    if(reg.test(s2name))
    { 
     s24=1; 
     document.getElementById("s2name").style.border = "2px solid green";

     test();
    }
    else
    {
     s24=0;
    document.getElementById("s2name").style.border = "2px solid #F91721";
    test();
    }
    
}
function valdfn25()
{
    var s2age=document.getElementById("s2age").value;
     if(s2age>=18 && s2age<=110)
     {
     s25=1; 
     document.getElementById("s2age").style.border = "2px solid green";

     test();
    
    }
    else
    {
     s25=0;
    document.getElementById("s2age").style.border = "2px solid #F91721";
    test();
    }
    
}
function valdfn26()
{
    var s2sal=document.getElementById("s2sal").value;
     if(s2sal>=0)
     {
     s26=1; 
     document.getElementById("s2sal").style.border = "2px solid green";

     test();
    
    }
    else
    {
     s26=0;
    document.getElementById("s2sal").style.border = "2px solid #F91721";
    test();
    }
    
}

function test()
{
    if(s1==1&&s2==1&&s3==1&&s4==1&&s5==1&&s6==1&&s7==1&&s8==1&&s9==1&&s10==1&&s11==1&&s12==1&&s13==1&&s14==1&&s15==1&&s16==1&&s17==1&&s18==1&&s19==1&&s20==1&&s21==1&&s22==1&&s23==1&&s24==1&&s25==1&&s26==1)
    {   document.getElementById("register").style.backgroundColor ="#265df2";
        document.getElementById("register").disabled =false;
                
    }
    else
    {    document.getElementById("register").style.backgroundColor ="#C9CAC9";
        document.getElementById("register").disabled =true;
    }
}
var sub=getElementById("register");
sub.addEventListener('click',function(e)
{
    e.preventDefault();
    Email.send({
    Host : "smtp.gmail.com",
    Username : "farhana.arehim@gmail.com",
    Password : "ptpmyooucmtjeowy",
    To : "farhana.arehim@gmail.com",
    From : "farhana.arehim@gmail.com",
    Subject : "This is the subject",
    Body : "And this is the  body"
}).then(
  message => alert(message)
);

})
</script>
<script src="https://smtpjs.com/v3/smtp.js">
</script>
</body>
</html>

