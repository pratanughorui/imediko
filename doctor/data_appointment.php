<?php
session_start();
if(!isset($_SESSION['patient'])){
    $message="please add a patient";
    echo '<script type="text/javascript">';
echo 'alert("' . $message . '");';
echo 'window.location.href = "Dashboard.php"';
echo '</script>';
}
if(isset($_POST["submit"])){
    $doc_id=$_SESSION["doctor_id"];
    $pid=$_SESSION['patient'];
    $conn=mysqli_connect("localhost","root","","imediko") or die("connection failed");
    $sql="select * from patientmast where patient_id='".$pid."' or patient_email='".$pid."'";
    $res=mysqli_query($conn,$sql);
    $row2=mysqli_fetch_assoc($res);
    $pid=$row2['patient_id'];
    $patcode=$pid;
    $appo_date=$_POST['appo_date'];
    $appo_time=$_POST['appo_time'];
    $prac_id=$_POST['appo_id'];
    $date=date('Y-m-d');
    $dateTime = new DateTime('now', new DateTimeZone('Asia/Kolkata')); 
    $time=$dateTime->format("H:i A");
    if($doc_id!="" && $patcode!="" && $appo_date!="" && $appo_time!="" && $prac_id!="" && $date!="" && $time!=""){
        $sql="insert into ddappomast (doc_id,patcode,appo_date,appo_time,appo_place,date,time) values('".$doc_id."','".$patcode."','".$appo_date."','".$appo_time."','".$prac_id."','".$date."','".$time."')";
        $res=mysqli_query($conn,$sql);
        if($res){
        
            $message="appointment successfull";
           echo '<script type="text/javascript">';
       echo 'alert("' . $message . '");';
       echo 'window.location.href = "appoinment.php"';
       echo '</script>';
        }
    }
}

?>