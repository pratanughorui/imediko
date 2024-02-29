<?php
session_start();
if(!isset($_SESSION['patient'])){
  $message="please add a patient";
  echo '<script type="text/javascript">';
echo 'alert("' . $message . '");';
echo 'window.location.href = "Dashboard.php"';
echo '</script>';
}
$pid=$_SESSION['patient'];
$did=$_SESSION['doctor_id'];
$conn=mysqli_connect("localhost","root","","imediko") or die("connection failed");
        $sql="select * from ddge where patcode='".$pid."'";
        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($res);
        //----fetch doctor details
        $sql="select * from docmast where doc_id='".$did."'";
        $res=mysqli_query($conn,$sql);
        $row1=mysqli_fetch_assoc($res);
        //-----------fetch patient details
        $sql="select * from patientmast where patient_id='".$pid."'";
        $res=mysqli_query($conn,$sql);
        $row2=mysqli_fetch_assoc($res);
        //------------------------
        $sql="select * from ddrx where patcode='".$pid."'";
        $res=mysqli_query($conn,$sql);
        $row5=mysqli_fetch_assoc($res);
        $sql="select * from ddpatcomplain where id='".$row5['complain_code']."'";
        $res=mysqli_query($conn,$sql);
        $row3=mysqli_fetch_assoc($res);
        //---------------------medicine--------
        $sql="select * from medicine where medicine_code='".$row5['medicine_code']."'";
        $res1=mysqli_query($conn,$sql);
        

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      * {
      }
      html {
        margin: 0;
        padding: 0;
      }
      .page {
        margin-top: 50px;
        width: 785px;
        height: 1060px;
        display: flex;
      }
      .left {
        width: 30%;
        height: 1000px;
        border-right: 1px solid black;
      }
      .right {
        width: 70%;
        position: absolute;
        top: 39;
        left: 32%;
        height: 1000px;
      }
      .heading_left {
        text-align: center;
        font-size: 20px;
        text-decoration: underline;
      }
      .page .left .row {
        margin-top: 4%;
        width: 100%;
        height: fit-content;
        font-size: 15px;
        margin-top: 10px;
      }
      .page .left .row .col {
        margin: 10px 5px;
        width: auto;
      }
      .page .left .row .col,
      label,
      b {
        padding-left: 1px;
      }

      .textadj {
        padding-left: 0;
      }
      .right .row1 {
        display: flex;
      }
      table {
        margin-top: 10px;
        width: 98%;
        border-collapse: collapse;
        border-radius: 10px;
      }

      th,
      td {
        padding: 5px;
        text-align: left;
      }
      .page .right .row h2 {
        margin-left: 10px;
      }
      .medicine {
        margin-top: 50px;
        height: 400px;
      }
      .medicine th {
        border-top: 1px solid black;
        border-bottom: 1px solid black;
      }
      .row3 {
        margin-top: 4%;
        width: 100%;
        display: flex;
      }
      .row3 .point {
        width: 20%;
        height: 90px;
        font-weight: 600;
      }
      .row3 .point p {
        margin: 0;
      }
      .row3 .para {
        width: 75%;
        height: 90px;
      }
      .row4 {
        margin-top: 4%;
        width: 100%;
        display: flex;
      }
      .row4 .point {
        font-weight: 600;
        width: 20%;
        height: 90px;
      }
      .row4 .point p {
        margin: 0;
      }
      .row4 .para {
        width: 75%;
        height: 90px;
      }
    </style>
  </head>
  <body>
    <div class="page">
      <div class="left">
        <h3 class="heading_left">G/E</h3>
        <div class="row">
          <div class="col">
            <label for="pulse" style="font-weight: 600">Pulse:</label>
            <label for=""><?php echo $row['pul'] ?></label><b>/min</b>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="blood_pressure" style="font-weight: 600"
              >Blood Pressure:</label
            >
            <label for=""><?php echo $row['bp'] ?></label><b>mm of Hg</b>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="temparature" style="font-weight: 600"
              >Temparature:</label
            >
            <label for=""><?php echo $row['temp'] ?></label><b> &deg; F</b>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="icterus" style="font-weight: 600">Icterus:</label>
            <label for=""><?php echo $row['ict'] ?></label>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="anaemia" style="font-weight: 600">Anaemia:</label>
            <label for=""><?php echo $row['ane'] ?></label>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="cyanosis" style="font-weight: 600">Cyanosis:</label>
            <label for=""><?php echo $row['cyn'] ?></label>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="tonque" style="font-weight: 600">Tonque:</label>
            <label for=""><?php echo $row['tongue'] ?></label>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="pharynx" style="font-weight: 600">Pharynx:</label>
            <label for=""><?php echo $row['pharynx'] ?></label>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="tonsils" style="font-weight: 600">Tonsils:</label>
            <label for=""><?php echo $row['tonsil'] ?></label>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="oedema" style="font-weight: 600">Oedema:</label>
            <label for=""><?php echo $row['odema'] ?></label>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <table>
              <thead>
                <tr>
                  <th>Lymph Node</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td data-label="Patcode">
                    <?php echo $row['lymphnd'] ?>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <table>
              <thead>
                <tr>
                  <th>Past History</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td data-label="Patcode">
                    <?php echo $row['past_hist'] ?>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <table>
              <thead>
                <tr>
                  <th>Any other command</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td data-label="Patcode">
                    <?php echo $row['otherhist'] ?>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="right">
        <h3 class="heading_left">prescription</h3>
        <div class="row1">
          <div class="col">
            <label for="doctor_name"
              >Doctor Name:<?php echo $row1['doc_name'] ?></label
            >
          </div>
          <div class="col">
            <div class="date_time">
              <div class="date">
                <label
                  for="date"
                  style="position: absolute; top: 6.5%; left: 48%"
                  >Date:30/07/23</label
                >
              </div>
              <div class="time">
                <label
                  for="time"
                  style="position: absolute; top: 6.5%; left: 70%"
                  >Time:19:30</label
                >
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <table>
              <thead>
                <tr>
                  <th>Patcode</th>
                  <th>Name</th>
                  <th>Age</th>
                  <th>Sex</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td data-label="Patcode"><?php echo $pid ?></td>
                  <td data-label="Name"><?php echo $row2['patient_name'] ?></td>
                  <td data-label="Age"><?php echo $row2['age'] ?></td>
                  <td data-label="Sex"><?php echo $row2['sex'] ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <table>
              <thead>
                <tr>
                  <th>Complains</th>
                  <th>Provisional Diagnosis</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td data-label="Patcode">
                    <?php echo $row3['complain'] ?>
                  </td>
                  <td data-label="Name">
                    <?php echo $row3['provitional_diagnosis'] ?>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- <div style="display: flex; justify-content: space-between" class="row">
          <div class="col">
            <label for="name">Complains:</label>
            <input type="text" />
          </div>
          <div class="col">
            <label for="name">Provisional Diagnosis:</label>
            <input style="width: auto" type="text" />
          </div>
        </div> -->
        <div class="row">
          <h2 style="float: left">RX</h2>
        </div>
        <div
          style="
            display: flex;
            flex-direction: column;
            border-bottom: 2px solid black;
            margin-top: 2%;
          "
          class="row"
        >
          <div class="col">
            <table class="medicine">
              <thead>
                <tr>
                  <th>Medicine</th>
                  <th>Dosage</th>
                  <th>Times Daily</th>
                  <th>At</th>
                  <th>Till</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while($row4=mysqli_fetch_assoc($res1)){
                  ?>
                <tr>
                  <td data-label="Medicine">
                    <?php  echo $row4['tradename'] ?>
                  </td>
                  <td data-label="Dosage"><?php  echo $row4['dose'] ?></td>
                  <td data-label="Times Daily">
                    <?php  echo $row4['timedly'] ?>
                  </td>
                  <td data-label="At"><?php  echo $row4['att'] ?></td>
                  <td data-label="Till"><?php  echo $row4['till'] ?></td>
                </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row3">
          <div class="point">
            <p>Other Advice:</p>
          </div>
          <div class="para">
            <?php  echo $row5['otheradv'] ?>
          </div>
        </div>
        <div class="row4">
          <div class="point">
            <p>Investigation Advised:</p>
          </div>
          <div class="para">
            <?php  echo $row5['diet'] ?>
          </div>
        </div>
      </div>
    </div>

    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"
    ></script>

    <!-- printThis -->

    <script type="text/javascript" src="printThis.js"></script>

    <!-- demo -->
    <script>
      const a = document.getElementById("main-container");
      
        $(".page").printThis({
          base: "https://jasonday.github.io/printThis/",
          
        });
       
     
    </script>
  </body>
</html>
