<?php
session_start();
if(isset($_POST['submit'])){
    $a=$_POST['email'];
    $b=$_POST['password'];
    $message="fill the form";
    if($a=="" or $b==""){
       // header("Location: index.php");
        echo '<script type="text/javascript">';
        echo 'alert("' . $message . '");';
        echo 'window.location.href = "index.php"';
        echo '</script>';
    }else{
       // echo $a.$b;
        $conn=mysqli_connect("localhost","root","","imediko") or die("connection failed");
        $sql="select * from doctor_login where doctor_email='".$a."' and doctor_pass='".$b."'";
        $res=mysqli_query($conn,$sql);
        
        if($row=mysqli_fetch_assoc($res)){
             $_SESSION["doctor_id"]=$row['doctor_id'];
             $_SESSION["user_type"]=$row['user_type'];
           // echo $row['user_type'];
           $message="login successfully";
           echo '<script type="text/javascript">';
       echo 'alert("' . $message . '");';
       echo 'window.location.href = "Dashboard.php"';
       echo '</script>';



        }else{
            $message="data not present";
            echo '<script type="text/javascript">';
        echo 'alert("' . $message . '");';
        echo 'window.location.href = "index.php"';
        echo '</script>';
        }
        
    }
}


?>