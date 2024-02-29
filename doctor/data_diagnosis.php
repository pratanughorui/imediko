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

     $complain=$_POST['complain'];
     $prov_diagnosis=$_POST['prov_diagnosis'];
     $patcode=$_SESSION['patient'];
     $doe=date('Y-m-d');
    $dateTime = new DateTime('now', new DateTimeZone('Asia/Kolkata')); 
     $toe=$dateTime->format("H:i A");
     $conn=mysqli_connect("localhost","root","","imediko") or die("connection failed");
    $sql="insert into ddpatcomplain(patcode,cdate,ctime,complain,provitional_diagnosis)values('".$patcode."','".$doe."','".$toe."','".$complain."','".$prov_diagnosis."')";
    $res=mysqli_query($conn,$sql);
    if($res){

    
    $medi1=$_POST['medi1'];
    $medi2=$_POST['medi2'];
    $medi3=$_POST['medi3'];
    $medi4=$_POST['medi4'];
    $medi5=$_POST['medi5'];
    $medi6=$_POST['medi6'];
    $medi7=$_POST['medi7'];
    $sql="select * from medicine where id=(select count(*) from medicine);";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($res);
    $x=1;
    if($row){
        $x+=$row['medicine_code'];
    }
    for($i=0;$i<count($medi1);$i++){
        $sql="insert into medicine(medicine_code,genname,tradename,dose,timedly,att,till)values('".$x."','".$medi3[$i]."','".$medi2[$i]."','".$medi4[$i]."','".$medi5[$i]."','".$medi6[$i]."','".$medi7[$i]."')";
        $res=mysqli_query($conn,$sql);
    }
    //echo $x;
    //----------------------data are inserting into the ddtestadv------------------
    $inves1=$_POST['inves1'];
    $inves2=$_POST['inves2'];
    for($i=0;$i<count($inves1);$i++){
        $sql="select * from testmast where sample='".trim($inves1[$i])."' and tests='".trim($inves2[$i])."'";
        //echo $sql;
        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($res);
       // echo $inves1[$i]." ".$inves2[$i];
        //echo $row['TEST_CODE'];
        //print_r($row);
         $sql="insert into ddtestadv(patcode,dot,tot,test_code)values('".$patcode."','".$doe."','".$toe."','".$row['TEST_CODE']."')";
        $res=mysqli_query($conn,$sql);
    }
    //--------------------------------final insert into  ddrx 
    $diet=$_POST['diet'];
    $other_adv=$_POST['other_adv'];
    $sql="select * from ddpatcomplain order by id desc limit 1";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($res);
    $sql="insert into ddrx(patcode,cdate,ctime,complain_code,medicine_code,otheradv,diet)values('".$patcode."','".$doe."','".$toe."','".$row['id']."','".$x."','".$other_adv."','".$diet."')";
    $res=mysqli_query($conn,$sql);
    if($res){
        $message="login successfully";
           echo '<script type="text/javascript">';
       echo 'alert("' . $message . '");';
       echo 'window.location.href = "diagnosis.php"';
       echo '</script>';
    }
}
}

?>