<?php
$data = json_decode(file_get_contents('php://input'), true);
$pid = $data['sample_cd'];
$conn=mysqli_connect("localhost","root","","imediko") or die("connection failed");
$sql="select tests from testmast where SAMPLE_CD='".$pid."'";
$res=mysqli_query($conn,$sql);
$arr=[];
$sr="";
while($row=mysqli_fetch_assoc($res)){
   // array_push($arr, $row['tests']);
   $sr.=$row['tests']."@";
   //break;
}
echo $sr;

?>