<?php
session_start();
if(isset($_POST["submit"])){
    $did=$_SESSION["doctor_id"];
    $patient_id=$_POST['patient_id'];
    $patient_email=$_POST['patient_email'];
    $patient_contact=$_POST['patient_contact'];
    $patient_name=$_POST['patient_name'];
    $dob=$_POST['dob'];
    $age=$_POST['age'];
    $sex=$_POST['sex'];
    $gurdain_name=$_POST['gurdian_name'];
    $occupation=$_POST['occupation'];
    $maritial_status=$_POST['maritial_status'];
    $spouse_name=$_POST['spouse_name'];
    $monthly_income=$_POST['income'];
    $c_address=$_POST['cadd'];
    $c_city=$_POST['ccity'];
    $c_pin =$_POST['cpin'];
    $c_district=$_POST['cdistrict'];
    $c_state=$_POST['cstate'];
    $c_ps=$_POST['cps'];
    $p_address=$_POST['padd'];
    $p_city=$_POST['pcity'];
    $p_pin =$_POST['ppin'];
    $p_district=$_POST['pdis'];
    $p_state=$_POST['pstate'];
    $p_ps =$_POST['pps'];
    if($patient_id!="" and  $patient_name!="" and $dob!="" and $age!="" and $patient_contact!=""){
        $conn=mysqli_connect("localhost","root","","imediko") or die("connection failed");
        $sql="insert into patientmast(patient_id,patient_name,dob,age,sex,gurdain_name,occupation,maritial_status,spouse_name,monthly_income,c_address,c_city,c_pin,c_district,c_state,c_ps,p_address,p_city,p_pin,p_district,p_state,p_ps,patient_email,patient_contact,d_id)values('".$patient_id."','".$patient_name."','".$dob."','".$age."','".$sex."','".$gurdain_name."','".$occupation."','".$maritial_status."','".$spouse_name."','".$monthly_income."','".$c_address."','".$c_city."','".$c_pin."','".$c_district."','".$c_state."','".$c_ps."','".$p_address."','".$p_city."','".$p_pin."','".$p_district."','".$p_state."','".$p_ps."','".$patient_email."','".$patient_contact."','".$did."')";
        $res=mysqli_query($conn,$sql);
        if($res){
            $_SESSION['patient']=$patient_id;
            $message="patient registration successfull";
           echo '<script type="text/javascript">';
       echo 'alert("' . $message . '");';
       echo 'window.location.href = "appoinment.php"';
       echo '</script>';
        }
    //echo $patient_id;
    }
}

?>