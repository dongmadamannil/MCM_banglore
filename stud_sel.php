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
    <link rel="stylesheet" href="CSS\Student_list_css.css">
</head>

<body>
    <div style="margin-top:5%;">
        </br></br></br></br>
        <div class="bking_list" id="bking_listz">
            <table id="customers">
            </table>
        </div>
    </div>

</body>
<script>
    crete_list();

    function csv_dn() {
        window.location = "print_csv_sel_list.php";
    }


    function rldk() {
        document.getElementById("srch").value = "";
        crete_list();

    }

    function crete_list() { //used for the creation of the list of bookings

        $.ajax({
            url: 'stud_dn_ajax.php',
            type: 'POST',
            dataType: "JSON",
            data: {
                idr: 4,
            },
            success: function(res1) {
                txv = '';
                $('#bking_listz').empty();
                notfnd = `<h3 align='center' style='color:#EC8282;'>oops,no details found</h3> `;
                if (res1[0] != "NULL") {
                    txv = txv + '<table id="customers"><tr id="t_head"><td>ID</td><td>Name</td><td>Roll No</td></tr>';
                    for (i = 0; i < res1.length; i++) {
                        idName = "stid" + i;
                        idLoca = "fname" + i;
                        tnamek = "roll" + i;
                        btnid = "sel" + i;
                        txv = txv + `<tr id='` + i + `'>
                  <td id='` + idName + `'></td>
                  <td id='` + idLoca + `'></td>
                  <td id='` + tnamek + `'></td>
                  </tr>`
                        if (i == res1.length - 1) {
                            txv = txv + '</table>'
                        }
                    }

                    $('#bking_listz').append(txv);
                    fillData(res1);
                } else {
                    $('#bking_listz').append(notfnd);
                    document.getElementById('Submit_HOD').style.visibility = 'hidden';
                    document.getElementById('csv').style.visibility = 'hidden';
                }


            },

        });
    }

    function fillData(kzm) { //used to fill data on the each booking div

        for (i = 0; i < kzm.length; i++) {
            nameId = "stid" + i;
            locaId = "fname" + i;
            tnamerh = "roll" + i;
            document.getElementById(nameId).innerHTML = kzm[i].studid;
            document.getElementById(locaId).innerHTML = kzm[i].fullname;
            document.getElementById(tnamerh).innerHTML = kzm[i].rollno;


        }

    }

    function clossdiv() { //used for closing the div and refresh the list
        document.getElementById("idview").style.display = "none";
        // document.getElementById("divtst").style.display = "none";
        crete_list();
    }
</script>

</html>