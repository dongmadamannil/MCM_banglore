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
  <link rel="stylesheet" href="CSS\Student_list_css.css">
</head>

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
      <input type="button" onclick="rldk()" class="refresh">
    </div>
    </br></br></br></br>
    <div class="bking_list" id="bking_listz">
      <table id="customers">
      </table>
    </div>
    <div class="viewdt" id="idview">
      <table class="tableCSS">
        <tr>
          <td>FULL NAME</td>
          <td id="fullName"></td>
        </tr>
        <tr>
          <td>Student ID</td>
          <td id="studentId"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td id="emailId"></td>
        </tr>
        <tr>
          <td>PhoneNo</td>
          <td id="phoneNo"></td>
        </tr>
        <tr>
          <td>Category</td>
          <td id="categoryDetails"></td>
        </tr>
        <tr>
          <th colspan="2"><u>Bank Details</u></th>
        </tr>
        <tr>
          <td>IFSC CODE</td>
          <td id="ifscCode"></td>
        </tr>
        <tr>
          <td>ACC no</td>
          <td id="accNo"></td>
        </tr>
        <tr>
          <td>Branch</td>
          <td id="branch"></td>
        </tr>
      </table>
      <!-- Bellow some close and that kind of buttons -->
      <input type="button" onclick="clossdiv()" value="X" style="position:absolute;left:96%;top:11px;background-color:#FF8A8A;border-radius:3px;cursor:pointer;">
      <input type="button" value="EDIT" id="editBtn" onclick="edtfn()" style="position:absolute;top:92%;left:40%;height:40px;width:115px;border-radius:10px;cursor:pointer;">
      <input type="button" value="Download details" style="position:absolute;top:92%;left:25%;height:40px;width:145px;border-radius:10px;cursor:pointer;background-color:#6F8BBA;" onclick="csv_dwn()">
    </div>
    <div class="BtnGrp">
      <input type="Button" value="Download Application List" onclick="csv_dwn()" class="searchButton">
      <input type="Button" value="Download Selected Lst" onclick="csv_dn()" class="searchButton" style="float:right" id="csv">
      <input type="button" value="Submit to HOD" onclick="to_hod()" class="searchButton" style="float:left" id="Submit_HOD">
    </div>
  </div>
</body>
<script>
  accno = "";
  ifsc = "";
  branch = "";
  studid = "";
  //function call is used to create the student list on load
  crete_list();
  //used to download the csv file 
  function csv_dwn() {
    window.location = "print_csv.php";
  }
  //used to download the csv file of downloaded list
  function csv_dn() {
    window.location = "print_csv_sel_list.php";
  }
  //used to edit student details
  function edtfn() {
    if (document.getElementById("editBtn").value != "Submit") {
      document.getElementById("editBtn").value = "Submit";
      document.getElementById("ifscCode").innerHTML = "<input type='text' id='ifscEdit' value='" + ifsc + "'>";
      document.getElementById("accNo").innerHTML = "<input type='text' id='accnoEdit' value='" + accno + "'>";
      document.getElementById("branch").innerHTML = "<input type='text' id='branchEdit' value='" + branch + "'>";
    } else {
      document.getElementById("editBtn").value = "EDIT";
      accno = document.getElementById("accnoEdit").value;
      ifsc = document.getElementById("ifscEdit").value;
      branch = document.getElementById("branchEdit").value;
      document.getElementById("ifscCode").innerHTML = ifsc;
      document.getElementById("accNo").innerHTML = accno;
      document.getElementById("branch").innerHTML = branch;
      {
        $.ajax({
          url: "stud_dn_ajax.php",
          method: "POST",
          dataType: "JSON",
          data: {
            idr: 13,
            accno: accno,
            ifsc: ifsc,
            branch: branch,
            studid: studid,
          },
          success: function(resobjri) {
            if (resobjri == 0) {
              alert("Error");
            } else {
              alert("Updated Successfully");

            }
          }
        });
      }
    }

  }

  //used to transfer selected list to hod
  function to_hod() {
    //alert('hello');
    $.ajax({
      url: "stud_dn_ajax.php",
      method: "POST",
      dataType: "JSON",
      data: {
        idr: 9,
      },
      success: function(resobjri) {
        if (resobjri == 0) {
          alert("No student selected");
        } else {
          alert("Successfully forwarded " + resobjri + " selected students to HOD");

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
        document.getElementById("fullName").innerHTML = resobjri[0];
        document.getElementById("studentId").innerHTML = resobjri[1];
        document.getElementById("emailId").innerHTML = resobjri[2];
        document.getElementById("phoneNo").innerHTML = resobjri[3];
        document.getElementById("categoryDetails").innerHTML = resobjri[4];
        document.getElementById("ifscCode").innerHTML = resobjri[5];
        document.getElementById("accNo").innerHTML = resobjri[6];
        document.getElementById("branch").innerHTML = resobjri[7];
        accno = resobjri[6];
        ifsc = resobjri[5];
        branch = resobjri[7];
        studid = resobjri[1];

      }
    });
  }
  //invoked when reload button clicked
  function rldk() {
    //clear the search column
    document.getElementById("srch").value = "";
    //create the list
    crete_list();
    document.getElementById('Submit_HOD').style.visibility = 'visible';
    document.getElementById('csv').style.visibility = 'visible';

  }
  //used for the creation of the list of students
  function crete_list() {
    val1 = document.getElementById("srch").value; //get value of serach
    $.ajax({
      url: 'stud_dn_ajax.php',
      type: 'POST',
      dataType: "JSON",
      data: {
        idr: 1,
        srh: val1,

      },
      success: function(res1) {
        txv = '';
        $('#bking_listz').empty();
        notfnd = `<h3 align='center' style='color:#EC8282;'>oops,no details found</h3> `;
        if (res1[0] != "NULL") {
          txv = txv + '<table id="customers"><tr><td>ID</td><td>Name</td><td>Roll No</td><td><center>View / Edit</center></td><td><center>Action</center></td></tr>';
          for (i = 0; i < res1.length; i++) {
            idName = "stid" + i;
            idLoca = "fname" + i;
            tnamek = "roll" + i;
            btnid = "sel" + i;
            txv = txv + `<tr id='` + i + `'>
                  <td id='` + idName + `'></td>
                  <td id='` + idLoca + `'></td>
                  <td id='` + tnamek + `'></td>
                  <td ><center><input type="button" data-stid='` + res1[i].studid + `'  onclick="viewclick(this)" style="cursor:pointer;margin-right:35px;" value="View & Edit Details" class="ViewEdit"></center></td>
                  <td ><center><input  data-studentIdOfCorrespondingBox='` + res1[i].studid + `'  data-buttonIdInStudentList='` + btnid + `' type="button" id='` + btnid + `'  onclick="sel(this)" class="selected" value="Select"></center></td>
                  </tr>`
            if (i == res1.length - 1) {
              txv = txv + '</table>'
            }
          }

          $('#bking_listz').append(txv);
          document.getElementById('Submit_HOD').style.visibility = 'visible';
          document.getElementById('csv').style.visibility = 'visible';
          fillData(res1);
        } else {
          $('#bking_listz').append(notfnd);
          document.getElementById('Submit_HOD').style.visibility = 'hidden';
          document.getElementById('csv').style.visibility = 'hidden';
        }

      },

    });
  }


  function sel(vonj) {
    tst_id = vonj.getAttribute("data-studentIdOfCorrespondingBox");
    idada = vonj.getAttribute("data-buttonIdInStudentList");
    updt(tst_id, idada);


  }

  function updt(ref, idt) { //alert(ref);
    klms = document.getElementById(idt).value;
    if (klms == "Selected") {
      document.getElementById(idada).style.backgroundColor = "#6F8BBA";
      document.getElementById(idada).value = "Select";

    } else {
      document.getElementById(idada).style.backgroundColor = "green";
      document.getElementById(idada).value = "Selected";

    }
    $.ajax({
      url: 'stud_dn_ajax.php',
      type: 'POST',
      dataType: "JSON",
      data: {
        idr: 2,
        srh: ref,
        selfn: klms,

      },
      success: function(res1) {
        /*  alert("Success"); */
        /*  if (res1 == 1) {
           document.getElementById(idt).style.backgroundColor = "#6F8BBA";
           document.getElementById(idt).value = "Select";

         }
         if (res1 == 0) {
           document.getElementById(idt).style.backgroundColor = "green";
           document.getElementById(idt).value = "Selected";

         } */

        crete_list();
      },

    });
  }

  function fillData(kzm) { //used to fill data on the row

    for (i = 0; i < kzm.length; i++) {
      nameId = "stid" + i;
      locaId = "fname" + i;
      tnamerh = "roll" + i;
      btnammu = "sel" + i;
      //  dtr = "dt" + i;
      document.getElementById(nameId).innerHTML = kzm[i].studid;
      document.getElementById(locaId).innerHTML = kzm[i].fullname;
      document.getElementById(tnamerh).innerHTML = kzm[i].rollno;
      if (kzm[i].selected == "") {
        document.getElementById(btnammu).style.backgroundColor = "#6F8BBA";
        document.getElementById(btnammu).value = "Select";

      }
      if (kzm[i].selected == "selected") {
        document.getElementById(btnammu).style.backgroundColor = "green";
        document.getElementById(btnammu).value = "Selected";

      }
      if (kzm[i].selected == "rejected") {
        document.getElementById(btnammu).style.backgroundColor = "red";
        document.getElementById(btnammu).value = "rejected";

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