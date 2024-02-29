<?php
session_start();
if(isset($_POST['submit'])){
  $id=$_POST['p_id'];
 $email=$_POST['p_email'];
  if(($id!="" and $email=="") or ($id=="" and $email!="")){
    $conn=mysqli_connect("localhost","root","","imediko") or die("connection failed");
    $sql="select * from patientmast where patient_id='".$id."' or patient_email='".$email."'";
    $res=mysqli_query($conn,$sql);
    if($id!="" and $row=mysqli_fetch_assoc($res)){
        $_SESSION['patient']=$id;
        header("Location: patreg.php");
    }else if($email!="" and $row=mysqli_fetch_assoc($res)){
        $_SESSION['patient']=$row['patient_id'];
        header("Location: patreg.php");
    }else{
        $message="data is not present please do registration";
           echo '<script type="text/javascript">';
       echo 'alert("' . $message . '");';
       echo 'window.location.href = "patreg.php"';
       echo '</script>';
    }

    //$_SESSION['patient']=
  }else{
    $message="fillup properly";
           echo '<script type="text/javascript">';
       echo 'alert("' . $message . '");';
       echo 'window.location.href = "Dashboard.php"';
       echo '</script>';
  }
}

?>