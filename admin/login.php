<?php

$con = mysqli_connect("localhost","root","","collegeproject"); 
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit'])){

    $username = $_POST['ID'];
    $password = $_POST['PASSWORD'];

    $query = "SELECT * FROM adminlogin WHERE ID='$username' AND PASSWORD='$password'";
    $result = mysqli_query($con,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);

    if($count==1)
    {
        header('Location:adminpanel.php');
    }
    else{
        echo "<script>alert('Wrong password or ID'); window.location.href='admin page.html';</script>";
    }
}
    ?>