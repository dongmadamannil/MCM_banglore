<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <style>
.vh-100 {
    height: 100%!important;
}
.gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}
</style>

</head>
<body>

<!-- navbar -->

    <div class="navbar navbar-expand-lg bg-dark navbar-dark py-3">
        <div class="container">
            <a href="#" class="navbar-brand">MCM SCHOLARSHIP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
           
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="mcmhome.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.tkmce.ac.in/about-college.php" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.tkmce.ac.in" class="nav-link">Official Website</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.tkmce.ac.in/contact.php" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
            
        </div>
        
    </div>


<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-3 mt-md-2 pb-2">
                <form action="" method="post" class="lgn">
            
                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>

                    <div class="form-outline form-white mb-4">
                    <input type="text"  class="form-control form-control-lg" placeholder="Enter Username" name="uname" required/>

                    </div>

                    <div class="form-outline form-white mb-4">
                    <input type="password"  class="form-control form-control-lg"placeholder="Enter Password" name="psw" required />
                    </div>

                    <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                    <button class="btn btn-outline-light btn-lg px-5" type="submit" name="lgn">Login</button>

                    </div>
            
                </form>

              
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
include("dbconnect.php");
if(isset($_POST['lgn']))
{
    $user=$_POST['uname'];
    $pass=$_POST['psw'];
    $sql="select * from login where uname='$user' and pass='$pass';";
    $res=mysqli_query($conn,$sql);
    if(mysqli_num_rows($res))
    {
        $row=mysqli_fetch_assoc($res);
        if($row['uname']==$user && $row['pass']==$pass)
        {
            
            $_SESSION['login']=$row['uname'];
            echo "<script>alert('Login success   ".$row['u_type']."   ". $_SESSION['login']."');</script>";
if($row['u_type']=="Advisor"){
  
echo "<script>window.location='advisor_dashboard.html';</script>";
}
else if($row['u_type']=="HOD"){
  
echo "<script>window.location='hod_dashboard.html';</script>";
}
else if($row['u_type']=="SCH"){
  
echo "<script>window.location='coordinator_dashboard.html';</script>";
}
else if($row['u_type']=="admin"){
  
echo "<script>window.location='admin_dashboard.html';</script>";
}


            
        }
        else
        {
            echo "<script>alert('Enter Valid Uname and Password');</script>";
        }
    }
    else
        {
            echo "<script>alert('Enter Valid Uname and Password');</script>";
        }

}

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
