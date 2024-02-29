<?php
session_start();
if(!isset($_SESSION['user_type'])){
  header("Location: index.php");
}

$did=$_SESSION["doctor_id"];
    $conn=mysqli_connect("localhost","root","","imediko") or die("connection failed");
    $sql="select doc_name from docmast where doc_id='".$did."'";
    $res=mysqli_query($conn,$sql);
    $row1=mysqli_fetch_assoc($res);
    $pid="";
    if(isset($_SESSION['patient'])){
      $pid=$_SESSION['patient'];
      $sql="select patient_name from patientmast where patient_id='".$pid."' or patient_email='".$pid."'";
      
      $res=mysqli_query($conn,$sql);
      $row2=mysqli_fetch_assoc($res);
     // echo $row2['patient_name'];
    }
    // if(isset($_SESSION['reg_patient'])){
    //   $pid=$_SESSION['reg_patient'];
    //   $sql="select patient_name from patientmast where patient_id='".$pid."'";
    //   $res=mysqli_query($conn,$sql);
    //   $row2=mysqli_fetch_assoc($res);
    // }
    function date_converter($desiredDay){
      $recentDate=date('Y-m-d');
      $timestamp = strtotime($recentDate);
      $currentDayOfWeek = date("w", $timestamp);
      $daysDifference = ($desiredDay - $currentDayOfWeek + 7) % 7;
      $desiredDayTimestamp = $timestamp + ($daysDifference * 24 * 60 * 60);
      $desiredDate = date("Y-m-d", $desiredDayTimestamp);
      return $desiredDate;
      }
 
             
              // print_r($row3);
              
   
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Document</title>
    <style>
      * {
        border: none;
      }
      body {
        padding: 0;
        margin: 0;
        outline: 0;
        height: 100vh;
        background-image: url("new_bg-2.png");
        background-size: cover;
        font-family: "Poppins", sans-serif;
      }

      /* my styles */
      h1 {
        font-size: 25px;
        padding: 2px 0px;
        text-align: center;
        background-color: slateblue;
        color: #c4cae0;
      }
      .submit_btn {
        margin: 5px 0;
        width: 100%;
        height: 5vh;
        font-size: 15px;
        padding: 2px 0px;
        text-align: center;
        background-color: slateblue;
        color: #c4cae0;
        border: none;
        border-radius: 4px;
      }
      .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        width: 60%;
        position: absolute;
        top: 28%;
        left: 20%;
        font-weight: 600;
      }
      .row1 {
        height: 4vh;
        display: flex;
        /* border: 2px solid black; */
        justify-content: flex-end;
        padding: 8px 2px;
        font-size: 15px;
        margin-bottom: 5px;
      }
      .row1 .col {
        display: flex;
        margin: 3px 10px;
      }
      .row1 .col .date,
      .time {
        display: flex;
      }
      .row1 .col .date input {
        width: 10vw;
        height: 3.5vh;
        margin-left: 5px;
        text-align: center;
        border-radius: 3px;
      }
      .row1 .col .time input {
        width: 10vw;
        height: 3.5vh;
        margin-left: 5px;
        text-align: center;
        border-radius: 3px;
      }
      .row2 {
        height: 4vh;
        display: flex;
        /* border: 2px solid black; */
        justify-content: space-evenly;
        padding: 8px 2px;
        font-size: 15px;
        margin-bottom: 5px;
      }
      .row2 .col {
        display: flex;
        margin: 3px 10px;
      }

      .row2 .col input {
        width: 15vw;
        height: 3.5vh;
        margin-left: 5px;
        border-radius: 3px;
      }
      label {
        margin: auto;
      }
      .row3 {
        height: 6vh;
        display: flex;
        /* border: 2px solid black; */
        justify-content: space-evenly;
        padding: 8px 2px;
        font-size: 15px;
        margin-bottom: 5px;
      }
      .row3 .col {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 3px 10px;
        width: 33%;
        /* border: 2px solid black; */
      }

      .row3 .col input {
        width: 20%;
        height: 3.5vh;
        text-align: center;
        border-radius: 3px;
      }
      .row3 .col input[type="date"] {
        width: 10vw;
      }
      .row3 .col input[type="time"],
      select {
        width: 10vw;
      }
      .row3 .col select {
        height: 3.5vh;
      }
      .submit_btn:hover {
        background-color: rgb(65, 53, 137);
        color: #fff;
        transition: 0.4s;
      }
      .option {
        border: 1px solid black;
        background-color: aqua;
      }
      @media (max-width: 900px) {
        .container {
          height: auto;
          width: fit-content;
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          font-weight: 600;
        }
        h1 {
          font-size: 20px;
        }
        .row1 {
          height: auto;
          display: flex;
          justify-content: flex-end;
          /* border: 2px solid black; */
          padding: 8px 2px;
          font-size: 15px;
          margin-bottom: 5px;
        }
        .row1 .col .date,
        .time {
          width: max-content;
        }
        .row1 .col .date input {
          width: fit-content;
        }
        .row2 label {
          width: 100%;
          margin-bottom: 8px;
        }
        .row2 {
          height: auto;
          display: flex;
          flex-direction: column;
          justify-content: center;
        }
        .row2 .col {
          display: flex;
          flex-direction: column;
        }

        .row2 .col input {
          width: 100%;
        }
        .row3 {
          height: auto;
          display: flex;
          flex-direction: column;
        }
        .row3 .col {
          display: flex;
          flex-direction: column;
          /* border: 2px solid black; */
          width: auto;
        }
        .row3 .col label {
          width: 100%;
          margin-bottom: 8px;
        }
        .row3 .col #a_p {
          width: 100%;
        }
        .row3 .col input[type="date"] {
          width: 100%;
        }
        .row3 .col input[type="time"] {
          width: 100%;
        }
      }
    </style>
  </head>
  <body>
    <?php include 'navbar.php' ?>
    <!-- --------------------------------------main container------------------------------------------------------------------------>

    <div class="container">
      <h1>Appoinment Details</h1>
      <form action="data_appointment.php" method="post">
        <div class="row1 row">
          <div class="col">
            <div class="date">
              <label for="date">Date</label>
              <input
                type="text"
                id="date_ip"
                name="firstname"
                placeholder="Patient Id"
                disabled
              />
            </div>
          </div>
          <div class="col">
            <div class="time">
              <label for="time">Time</label>
              <input
                type="text"
                id="time_ip"
                name="lastname"
                placeholder="Patient Email"
                disabled
              />
            </div>
          </div>
        </div>
        <div class="row2 row">
          <div class="col">
            <label for="fname">Patient Name:</label>
            <input type="text" id="fname" name="firstname" value="<?php if($pid!=""){echo $row2['patient_name'];} ?>"
            disabled/>
          </div>
          <div class="col">
            <label for="lname">Doctor Name:</label>
            <input
              type="text"
              id="lname"
              name="lastname"
              value="<?php  echo $row1['doc_name']; ?>"
              ;
              placeholder="Gurdain Name"
              disabled
            />
          </div>
        </div>
        <div class="row3 row">
          <div class="col">
            <label for="place">Appointment Place:</label>
            <select id="a_p" name="appo_id">
              <option value="-1">Select</option>
              <?php
             
             $sql="select practice_id,name_of_practice from docpractice where doctor_id='".$did."'";
             $res=mysqli_query($conn,$sql);
            $practice=[];
             while($row3=mysqli_fetch_assoc($res)){
              array_push($practice, $row3['practice_id']);
               ?>
              <option value="<?php echo $row3['practice_id']; ?>">
                <?php echo  $row3['name_of_practice']; ?>
              </option>
              <?php
             }?>
            </select>
          </div>

          <div class="col" id="appo_date">
            <label for="lname">Appointment Date:</label>
            <select name="appo_date" id="ad">
              <option value="Nil">Nil</option>

              <?php
              // echo count($practice);
              foreach($practice as $value){
                $sql="select day_name from practice_day where practice_id='".$value."'";
                $res=mysqli_query($conn,$sql);
                ?>

              <?php
                while($row8=mysqli_fetch_assoc($res)){
                  $s=date_converter($row8['day_name']);
                 ?>
              <option
                value="<?php echo $s; ?>"
                class="c<?php echo $value ?>"
                style="display: none"
              >
                <?php echo $s ?>
              </option>
              <?php
                }
                ?>

              <?php
              }
              ?>
            </select>
          </div>
          <div class="col">
            <label for="lname">Appointment Time:</label>
            <input
              type="text"
              id="appo_time"
              name="appo_time"
             
            />
          </div>
        </div>

        <input class="submit_btn" type="submit" name="submit"  />
      </form>
    </div>
  </body>

  <script src="https://use.fontawesome.com/742ca76364.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    const currentDate = new Date();

    // Get individual date components
    const day = String(currentDate.getDate()).padStart(2, "0");
    const month = String(currentDate.getMonth() + 1).padStart(2, "0");
    const year = currentDate.getFullYear();

    // Concatenate the components in the desired format
    const formattedDate = `${day}-${month}-${year}`;

    const d = document.getElementById("date_ip");
    d.value = formattedDate;
    //------------------for time---------------------------------
    // Get individual time components
    const hours = String(currentDate.getHours()).padStart(2, "0");
    const minutes = String(currentDate.getMinutes()).padStart(2, "0");

    // Determine AM or PM
    const amOrPm = hours >= 12 ? "PM" : "AM";

    // Convert to 12-hour format
    const formattedHours = String(hours % 12 || 12);

    // Concatenate the components in the desired format
    const formattedTime = `${formattedHours}:${minutes} ${amOrPm}`;
    const t = document.getElementById("time_ip");
    t.value = formattedTime;
    ap = document.getElementById("a_p");
    let visible = "";
    ap.addEventListener("change", function () {
      //console.log(ap.value);
      let x;
      if (ap.value != -1) {
        x = "." + "c" + ap.value;
      } else {
        x = -1;
      }
      if (x == -1) {
        if (visible != "") {
          const elements = document.querySelectorAll(visible);
          elements.forEach((element) => {
            element.style.display = "none";
          });
          visible = "";
        }
      } else {
        if (visible == "") {
          visible = x;
        } else {
          const elements = document.querySelectorAll(visible);
          elements.forEach((element) => {
            element.style.display = "none";
          });
          visible = x;
        }
        //-------------------
        const elements = document.querySelectorAll(visible);
        elements.forEach((element) => {
          element.style.display = "block";
        });
      }
    });
    // const elements = document.querySelectorAll('.c5');
    const ad = document.getElementById("ad");
    const appo_time=document.getElementById("appo_time");
    ad.addEventListener("change", function () {
      //console.log(ap.value + " " + ad.value);
      //console.log($did);

      const data = { pid: ap.value, date: ad.value};
      const url = "appo_time_cal.php";
      //console.log(data);
      fetch(url, {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(data),
      })
        .then((response) => response.text())
        .then((response) => {
          // Handle the response from the server
          //alert("Response from Page 2: " + response);
          console.log(response);
          appo_time.value=response;
        })
        .catch((error) => {
          console.error("Error:", error);
        });
    });
  </script>
</html>
