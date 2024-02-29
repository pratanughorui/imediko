<?php
session_start();
$data = json_decode(file_get_contents('php://input'), true);
$pid = $data['pid'];
$date = $data['date'];
$did=$_SESSION["doctor_id"];
$conn=mysqli_connect("localhost","root","","imediko") or die("connection failed");
$sql="select practice_id from docpractice where practice_id='".$pid."'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
$place=$row['practice_id'];
$sql="select * from practice_day where practice_id='".$pid."'";
$res=mysqli_query($conn,$sql);
$info=array();
while($row=mysqli_fetch_assoc($res)){
    if($date==date_converter($row['day_name'])){
          $info['start_time']= $row['start_time'];
          $info['end_time']= $row['end_time'];
          $info['avg_appotime']= $row['avg_appointment_time'];
          break;
    }
}
//$sql="select * from ddappomast where doc_id='".$did."' and appo_date='".$date."' and appo_place='".$place."'";
$sql="SELECT * FROM ddappomast WHERE doc_id='".$did."' and appo_date='".$date."' and appo_place='".$place."' ORDER BY appo_id DESC LIMIT 1;";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
if($row){
 $time=$row['appo_time'];
 $minutesToAdd=$info['avg_appotime'];
 $ans=add_time($time,$minutesToAdd);
 if($ans<$info['end_time']){
   echo $ans;
 }else{
    echo "sit full";
 }

}else{
    echo $info['start_time'];
}
function date_converter($desiredDay){
    $recentDate=date('Y-m-d');
    $timestamp = strtotime($recentDate);
    $currentDayOfWeek = date("w", $timestamp);
    $daysDifference = ($desiredDay - $currentDayOfWeek + 7) % 7;
    $desiredDayTimestamp = $timestamp + ($daysDifference * 24 * 60 * 60);
    $desiredDate = date("Y-m-d", $desiredDayTimestamp);
    return $desiredDate;
    }
    function add_time($time,$minutesToAdd){
        $hours = intval(substr($time, 0, 2));
$minutes = intval(substr($time, 3, 2));

// Add the minutes
$minutes += $minutesToAdd;

// Adjust the hours and minutes if necessary
$hours += floor($minutes / 60);
$minutes %= 60;

// Format the updated time
$updatedTime = sprintf("%02d:%02d", $hours, $minutes);
        // echo "Original Time: " . $time . "<br>";
        // echo "Minutes to Add: " . $minutesToAdd . "<br>";
        // echo "Updated Time: " . $updatedTime;
        return $updatedTime;

    }
//echo $place;
?>