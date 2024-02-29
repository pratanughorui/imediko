<?php
$data = json_decode(file_get_contents('php://input'), true);
$pid = $data['type'];

$conn=mysqli_connect("localhost","root","","imediko") or die("connection failed");
$sql="select name from medimast where descrip like '".$pid."%';";
$res=mysqli_query($conn,$sql);
$str="";
while($row=mysqli_fetch_assoc($res)){
 $str.=$row['name']."@";
}
echo $str;

?>