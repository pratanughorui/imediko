<?php
// Include the autoloader
require 'vendor/autoload.php';

// Use the dompdf namespace
use Dompdf\Dompdf;

// Initialize dompdf class
$dompdf = new Dompdf();

// Load HTML content from a file or a string (You can also generate the HTML dynamically)
$html = file_get_contents('p2.php');
// session_start();
// $pid=$_SESSION['patient'];
// $conn=mysqli_connect("localhost","root","","imediko") or die("connection failed");
// $sql="select * from ddge where patcode='".$pid."'";
// $res=mysqli_query($conn,$sql);
// $row=mysqli_fetch_assoc($res);
// $pul="2";
// $html = str_replace('{{pul}}', "sd", $html);

// Set the HTML content for the PDF
$dompdf->loadHtml($html);

// (Optional) Set the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// (Optional) Increase the memory limit if needed
// ini_set("memory_limit", "256M");

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to the browser or save to a file
$dompdf->stream('output.pdf', ['Attachment' => false]);
// $dompdf->output(); // If you want to save the PDF to a file

?>
