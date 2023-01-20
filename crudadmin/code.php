<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_faculty']))
{
    $faculty_id = mysqli_real_escape_string($con, $_POST['delete_faculty']);

    $query = "DELETE FROM login WHERE id='$faculty_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Faculty Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Faculty Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_faculty']))
{
    $faculty_id = mysqli_real_escape_string($con, $_POST['faculty_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $faculty_type = mysqli_real_escape_string($con, $_POST['faculty_type']);

    $query = "UPDATE login SET uname='$name',u_type='$faculty_type' WHERE id='$faculty_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Faculty Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Faculty Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_faculty']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);
    $type = mysqli_real_escape_string($con, $_POST['faculty_type']);

    $query = "INSERT INTO login (uname,id,pass,u_type) VALUES ('$name','$id','$pass','$type')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Faculty Created Successfully";
        header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Faculty Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>