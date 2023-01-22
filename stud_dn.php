<!-- The file that is loaded of student list side -->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!-- ajax -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<style>
.viewdt {
    /*used for styling the view list*/
    height: 65%;
    width: 80%;
    background-color: #D0D4DD;
    position: absolute;
    top: 3%;
    left: 10%;
    border-radius: 15px;
    border-style: dotted;
    text-transform: uppercase;
    display: none;
}
.edt{
    height: 25px;
    width: 45%;
    border-radius:15px;
}
.refresh{
  width:60px;
  height:60px;
  background-color: #504981; 
  border: none;
  background-image:url("img/refresh-page-option.png");
  background-size:contain;
  background-repeat: no-repeat;
  background-position: center;
  background-size: 40%;
  text-align: center;
  display: inline-block;
  border-radius:5px;
  float:right;
}
.searchText{
  width: 68%;
  padding: 12px 20px;
  margin-top:5px;
  border: 3px solid white;
}
.searchText:focus{
  outline:none;
}
.searchButton{
  width:30%;
  background-color: #504981; 
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius:5px;
  float:right;
}
.searchButton:hover {
  background-color: #504981;
  color: white;
}
.ButtonwithSearch{
    width:100%;
    display: inline-block;
    border: 2px solid #504981;
    background:white;
    border-radius: 4px;
}
.searchComp{
  width:40%;
  border:1px solid #504981;
  border-radius: 4px;
  color:white;
  float:left;
  background: #504981;
}
.title{
  width:90%;
  margin-left: auto;
  margin-right: auto;
}

/* Details Table */
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 90%;
  margin-left: auto;
  margin-right: auto;
  margin-top:50px;
}

#customers td, #customers th {
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
.BtnGrp{
  margin-left: auto;
  margin-right: auto; 
  width:90%;
  margin-top:20px;
}
.Dld_Btn{
  width:60px;
  height:60px;
  background-color: #504981; 
  border: none;
  background-image:url("img/down-arrow.png");
  background-size:contain;
  background-repeat: no-repeat;
  background-position: center;
  background-size: 40%;
  text-align: center;
  display: inline-block;
  border-radius:5px;
  float:right;
  margin-left:20px;
}
.ViewEdit{
  width:40%;
  background-color: #666262; 
  border: none;
  color: white;
  padding:10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius:5px;
}
.selected{
  width:100%;
  background-color: #504981; 
  border: none;
  color: white;
  padding:10  px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius:5px;
}
</style>
<body>
  <div style="margin-top:5%;">
    <div class="title">
      <div class="searchComp">
        <label for="srch" style="padding:2px;margin-left:10px;">Search Student</label>
        </br>
        <div class="ButtonwithSearch">
          <input type="text" placeholder="Enter Name or Ref no:" id="srch" class="searchText">
          <input type="button" value="Search" onclick="crete_list()" class="searchButton">
        </div>
      </div>
      <input type="Button" onclick="csv_dn()" class="Dld_Btn">
      <input type="button" onclick="rldk()" class="refresh" >
    </div>
</br></br></br></br>
    <div class="bking_list" id="bking_listz">
      <table id="customers">  
</table>
    </div>
    <div class="viewdt" id="idview">
    <h2 id="nme" style="position:absolute;left:10%;top:35px;"><span id="name">DON G MADAMANNIL</span>&nbsp;(<span id="stdid" style="color:red;">TJXLMZHV</span>)</h2><br>
    <h3 id="adress" style="position:absolute;left:10%;top:115px;">Email id:<span id="emaildw">dongeevarghese44@gmail.com</span></h3>
    <h3 id="ano" style="position:absolute;left:10%;top:195px;">Phno:<span id="ph" style="color:blue;">9874562456</span></h3>
    <h3 id="cdetails" style="position:absolute;left:10%;top:265px;text-transform:none;">Father Income<span id="fin" style="color:blue;">565456 </span><br><br><br>Mother Income:<span id="min" style="color:blue;">45644 </span></h3>
    <h3 id="cdetails" style="position:absolute;left:10%;top:305px;text-transform:none;">Total sibling income:<span id="sin" style="color:blue;">565456 </span></h3>
    <h3 id="adress" style="position:absolute;left:10%;top:450px;">Rank:<span id="rank" style="color:blue;">56</span> </h3>
    <h3 id="ano" style="position:absolute;left:10%;top:500px;">Mark<span id="mark" style="color:blue;">564</span></h3>
<div style="background-color:red;height:60%;width:50%;position:absolute;top:30%;left:40%;border-radius:15px;">
sdgsfg
    </div>
            <input type="button" onclick="clossdiv()" value="X" style="position:absolute;left:96%;top:11px;background-color:#FF8A8A;border-radius:3px;cursor:pointer;">
            <input type="button" value="EDIT" onclick="edtfn()" style="position:absolute;top:92%;left:40%;height:40px;width:115px;border-radius:10px;cursor:pointer;">
            <input type="button" value="Select" onclick="rjt()" style="position:absolute;top:92%;left:55%;height:40px;width:115px;border-radius:10px;cursor:pointer;background-color:#6F8BBA;">
<input type="button" value="Download details" style="position:absolute;top:92%;left:25%;height:40px;width:145px;border-radius:10px;cursor:pointer;background-color:#6F8BBA;" onclick="csv_dwn()">
        </div>
        <div class="BtnGrp">
    <!-- <input type="Button" value="Download Application List" onclick="csv_dwn()" class="searchButton"> -->
    <input type="Button" value="Download Selected Lst" onclick="csv_dn()" class="searchButton" style="float:right" id="csv">
    <input type="button" value="Submit to HOD" onclick="to_hod()" class="searchButton" style="float:left" id="Submit_HOD">
</div>
  </div>
</body>
<script>
    //function call is used to create the student list on load
crete_list();
//used to download the csv file 
function csv_dwn()
{
window.location="print_csv.php";    
}
//used to download the csv file of downloaded list
function csv_dn()
{
window.location="print_csv_sel_list.php";    
}
//used to edit student details
function edtfn()
{



}

//used to transfer selected list to hod
function to_hod(){
    //alert('hello');
    $.ajax({
                url: "stud_dn_ajax.php",
                method: "POST",
                dataType: "JSON",
                data: {
                    idr: 9,
                },
                success: function(resobjri) {
                  if(resobjri==0)
                  {
                    alert("No student selected"); 
                  }
                  else
                  {
                    alert("Successfully forwarded "+resobjri+" selected students to HOD"); 
                 
                }
                }
            });

}
//when click the view details button
function viewclick(vonj) { 
           tst_id = vonj.getAttribute("data-stid");
            filldivplz(tst_id);
            document.getElementById("idview").style.display = "block";

        }
         //used for fillng the  div elements
function filldivplz(reff_no_tst) {
           
                 //  alert(reff_no_tst); 
            $.ajax({
                url: "stud_dn_ajax.php",
                method: "POST",
                dataType: "JSON",
                data: {
                    idr: 3,
                    reff_dta: reff_no_tst,
                },
                success: function(resobjri) {
                  //  alert(resobjri[0]); 
                    document.getElementById("name").innerHTML = resobjri[0];
                    document.getElementById("stdid").innerHTML = resobjri[1];
                    document.getElementById("emaildw").innerHTML = resobjri[2];
                    document.getElementById("ph").innerHTML = resobjri[3];
                    document.getElementById("fin").innerHTML = resobjri[4];
                    document.getElementById("min").innerHTML = resobjri[5];
                    document.getElementById("sin").innerHTML = resobjri[6]+ resobjri[7];
                    document.getElementById("rank").innerHTML = resobjri[8];
                    document.getElementById("mark").innerHTML = resobjri[9];


                }
            });
        }
//invoked when reload button clicked
function rldk()
{
    //clear the search column
    document.getElementById("srch").value="";
    //create the list
    crete_list();
    document.getElementById('Submit_HOD').style.visibility='visible';
    document.getElementById('csv').style.visibility='visible';

}
//used for the creation of the list of students
function crete_list() {
	val1 = document.getElementById("srch").value; //date
	$.ajax({
		url: 'stud_dn_ajax.php',
		type: 'POST',
		dataType: "JSON",
		data: {
			idr: 1,
			srh: val1,

		},
		success: function(res1) {
      txv='';
			$('#bking_listz').empty();
			notfnd = `<h3 align='center' style='color:#EC8282;'>oops,no details found</h3> `;
			if (res1[0] != "NULL") {
        txv=txv+'<table id="customers"><tr><td>ID</td><td>Name</td><td>Roll No</td><td><center>View / Edit</center></td><td><center>Action</center></td></tr>';
				for (i = 0; i < res1.length; i++) {
					idName = "stid" + i;
					idLoca = "fname" + i;
					tnamek = "roll" + i;
					btnid = "sel" + i;
					txv =txv+ `<tr id='` + i + `'>
                  <td id='` + idName + `'></td>
                  <td id='` + idLoca + `'></td>
                  <td id='` + tnamek + `'></td>
                  <td ><center><input type="button" data-stid='` + res1[i].studid + `'  onclick="viewclick(this)" style="cursor:pointer;margin-right:35px;" value="View & Edit Details" class="ViewEdit"></center></td>
                  <td ><center><input  data-studentIdOfCorrespondingBox='` + res1[i].studid + `'  data-buttonIdInStudentList='` + btnid + `' type="button" id='` + btnid + `'  onclick="sel(this)" class="selected" value="Select"></center></td>
                  </tr>`
          if(i==res1.length-1){
            txv=txv+'</table>'
          }
				}
        
				$('#bking_listz').append(txv);
				fillData(res1);
			} else {
				$('#bking_listz').append(notfnd);
        document.getElementById('Submit_HOD').style.visibility='hidden';
        document.getElementById('csv').style.visibility='hidden';
			}

		},

	});
}


function sel(vonj){
    tst_id = vonj.getAttribute("data-studentIdOfCorrespondingBox");
    idada= vonj.getAttribute("data-buttonIdInStudentList");
            updt(tst_id,idada);

            
}
function updt(ref,idt)
{//alert(ref);
    klms=document.getElementById(idt).value;
    $.ajax({
                url: 'stud_dn_ajax.php',
                type: 'POST',
                dataType: "JSON",
                data: {
                    idr: 2,
                    srh:ref,
                    selfn:klms,
                
                },
                success: function(res1) {
                   
                    if(res1==1)
    {
        document.getElementById(idt).style.backgroundColor ="#6F8BBA" ;
        document.getElementById(idt).value ="Select"; 

    }
    if(res1==0)
    {
        document.getElementById(idt).style.backgroundColor ="green" ; 
        document.getElementById(idt).value ="Selected" ; 

    }

    crete_list();
               },
            
            });
}

        function fillData(kzm) { //used to fill data on the each booking div

for (i = 0; i < kzm.length; i++) {
    nameId = "stid" + i;
    locaId = "fname" + i;
    tnamerh = "roll" + i;
    btnammu = "sel" + i;
  //  dtr = "dt" + i;
      document.getElementById(nameId).innerHTML = kzm[i].studid;
    document.getElementById(locaId).innerHTML = kzm[i].fullname;
    document.getElementById(tnamerh ).innerHTML = kzm[i].rollno;
    if(kzm[i].selected=="")
    {
        document.getElementById(btnammu).style.backgroundColor ="#6F8BBA" ;
        document.getElementById(btnammu).value ="Select";

    }
    if(kzm[i].selected=="selected")
    {
        document.getElementById(btnammu).style.backgroundColor ="green" ; 
        document.getElementById(btnammu).value ="Selected" ; 

    }
    if(kzm[i].selected=="rejected")
    {
        document.getElementById(btnammu).style.backgroundColor ="red" ; 
        document.getElementById(btnammu).value ="rejected" ; 

    }

}

}
function clossdiv() { //used for closing the div and refresh the list
            document.getElementById("idview").style.display = "none";
           // document.getElementById("divtst").style.display = "none";
            crete_list();
        }
    </script>
</html>