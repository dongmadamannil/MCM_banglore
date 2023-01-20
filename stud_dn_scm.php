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

</style>

<body><div style="margin-top:10%;">
<label for="srch">Search Student</label><input type="text" placeholder="Enter Name or Ref no:" id="srch"><input type="button" value="Search" onclick="crete_list()"><input type="button" value="refresh" onclick="rldk()">
<div class="bking_list" id="bking_listz"></div>
<input type="Button" value="Download Selected List" onclick="csv_dn()"><input type="button" value="Final Submit" onclick="to_admin()"></div>
</body>
<script>
crete_list();
function csv_dn()
{
window.location="print_csv_sch_hod_sel.php";    
}
function csv_dnr()
{
window.location="print_csv.php";    
}


function to_admin(){//used to transfer selected list to admin
    //alert('hello');
    $.ajax({
                url: "stud_dn_ajax.php",
                method: "POST",
                dataType: "JSON",
                data: {
                    idr: 12,
                },
                success: function(resobjri) {
                  if(resobjri==0)
                  {
                    alert("No student selected"); 
                  }
                  else
                  {
                    alert("Successfully forwarded "+resobjri+" selected students to ADMIN"); 
                 
                }
                }
            });

}



function viewclick(vonj) { //when click the view details button
           tst_id = vonj.getAttribute("data-stid");
            filldivplz(tst_id);
            csv_dnr();

        }
function filldivplz(reff_no_tst) {
            //used for fillng the test view div elements
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
                  
                }
            });
        }

function rldk()
{
    document.getElementById("srch").value="";
    crete_list();

}
function crete_list() { //used for the 
           val1 = document.getElementById("srch").value; 
           $.ajax({
                url: 'stud_dn_ajax.php',
                type: 'POST',
                dataType: "JSON",
                data: {
                    idr: 11,
                    srh:val1,
                
                },
                success: function(res1) {
                    $('#bking_listz').empty();
                    notfnd = `<h3 align='center' style='color:#EC8282;'>oobs,no details found</h3> `;
                  if (res1[0] != "NULL") {
                       
                        for (i = 0; i < res1.length; i++) {
                            idName = "stid" + i;
                            idLoca = "fname" + i;
                            tnamek = "roll" + i;
                            btnid = "sel" + i;
                            txv = `
                            <div id='` + i+ `' style='width:100%;height:65px;margin-top:5px;background-color:#DAC7C7;border-radius:15px;' ><b id='` + idName + `' style='color:black;margin-left:115px;font-size:20px;'>STUDID</b>   <b style="color:red;margin-left:115px;"id='` + idLoca + `'>FULL NAME</b> <b style="margin-left:115px;margin-right:115px;">ROLL NO: <b id='` + tnamek + `'></b></b><input type="button" data-stid='` + res1[i].studid + `'  onclick="viewclick(this)" style="cursor:pointer;margin-right:35px;" value="Download details"></div><br>
                          `;

                            $('#bking_listz').append(txv);
                        }
                        fillData(res1);
                    } else {
                        $('#bking_listz').append(notfnd);
                    }
              
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

}

}

    </script>
</html>