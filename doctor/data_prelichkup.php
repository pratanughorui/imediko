<?php
session_start();
if(!isset($_SESSION['patient'])){
    $message="please add a patient";
    echo '<script type="text/javascript">';
echo 'alert("' . $message . '");';
echo 'window.location.href = "Dashboard.php"';
echo '</script>';
}
if(isset($_POST['submit'])){
    $pul=$_POST['pul'];
    $bp=$_POST['bp'];
    $temp=$_POST['temp'];
    $jvp=$_POST['jvp'];
    $ict=$_POST['ict'];
    $ane=$_POST['ane'];
    $cyn=$_POST['cyn'];
    $tongue=$_POST['tongue'];
    $pharynx=$_POST['pharynx'];
    $tonsil=$_POST['tonsil'];
    $odema=$_POST['odema'];
    $club=$_POST['club'];
    $lymphnd=$_POST['lymphnd'];
    $pasthist=$_POST['pasthist'];
    $dragaler=$_POST['dragaler'];
    $otheraler=$_POST['otheraler'];
    $otherhist=$_POST['otherhist'];
    $bloodgrp=$_POST['bloodgrp'];
    $rh_factor=$_POST['rh_factor'];
    $doe=date('Y-m-d');
    $dateTime = new DateTime('now', new DateTimeZone('Asia/Kolkata')); 
    $toe=$dateTime->format("H:i A");
   // echo $doe."<br>";
    //echo $toe;
    //$_SESSION['reg_patient']
    $patient;
    if(isset($_SESSION['reg_patient'])){
      $patient=$_SESSION['reg_patient'];
    }else if(isset($_SESSION['patient'])){
        if (strpos($_SESSION['patient'], '@') !== false) {
            $conn=mysqli_connect("localhost","root","","imediko") or die("connection failed");
            $sql="select patient_id from patientmast where patient_email='".$_SESSION['patient']."'";
            $res=mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($res);
            $patient=$row['patient_id'];

        } else {
            $patient=$_SESSION['patient'];
        }
    }
    //echo $patient;
    if($patient!=""){
        $conn=mysqli_connect("localhost","root","","imediko") or die("connection failed");
    $sql="insert into ddge(patcode,doe,toe,pul,bp,temp,jvp,ict,ane,cyn,tongue,pharynx,tonsil,odema,club,lymphnd,past_hist,otherhist,bloodgrp,rh_factor)values('".$patient."','".$doe."','".$toe."','".$pul."','".$bp."','".$temp."','".$jvp."','".$ict."','".$ane."','".$cyn."','".$tongue."','".$pharynx."','".$tonsil."','".$odema."','".$club."','".$lymphnd."','".$pasthist."','".$otherhist."','".$bloodgrp."','".$rh_factor."')";
    $res=mysqli_query($conn,$sql);
    if($res){
       
        $message="priliminary checkup successfull";
       echo '<script type="text/javascript">';
   echo 'alert("' . $message . '");';
   echo 'window.location.href = "diagnosis.php"';
   echo '</script>';
    }
    }else{
        $message="patient missing";
        echo '<script type="text/javascript">';
    echo 'alert("' . $message . '");';
    echo 'window.location.href = "preliminary_checkup.php"';
    echo '</script>';
    }
}



?>