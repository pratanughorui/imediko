<?php
$data = json_decode(file_get_contents('php://input'), true);
$type = $data['type'];
$trade = $data['trade'];
$conn=mysqli_connect("localhost","root","","imediko") or die("connection failed");
$sql="select subcode from medimast where descrip like '".$type."%' and name='".$trade."';";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
$sql="select genname from gennamemast where subcode='".$row['subcode']."';";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
echo $row['genname'];
?>