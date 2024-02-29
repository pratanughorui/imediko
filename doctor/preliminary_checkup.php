<?php
/*we have patient id ,doctor id */
session_start();
if(!isset($_SESSION['user_type'])){
  header("Location: index.php");
}
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
        border: 0;
        outline: 0;
        height: 100vh;
        background-image: url("new_bg-2.png");
        background-size: cover;
      }
      /* my style */
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
        top: 18%;
        left: 20%;
        font-weight: 600;
      }
      .row1 {
        height: 4vh;
        display: flex;
        flex-wrap: wrap;
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
        height: auto;
        display: flex;
        flex-wrap: wrap;
        /* border: 2px solid black; */
        justify-content: space-between;
        padding: 8px 2px;
        font-size: 15px;
        margin-bottom: 5px;
      }
      .row2 .col {
        display: flex;
        margin: 3px 10px;
      }

      .row2 .col input {
        width: 10vw;
        height: 3.5vh;
        margin-left: 5px;
        border-radius: 3px;
      }
      .row2 .col b {
        margin-left: 4px;
        text-align: center;
        display: flex;
        align-items: center;
        font-size: medium;
      }
      label {
        margin: 3px 2px;
      }
      .row3 {
        height: auto;
        width: 100%;
        display: flex;
        /* border: 2px solid black; */
        justify-content: space-between;
        flex-wrap: wrap;
        padding: 8px 2px;
        font-size: 15px;
        margin-bottom: 5px;
      }
      .row3 .col {
        display: flex;
        margin: 3px 10px;
        /* border: 2px solid black; */
        width: fit-content;
        height: 4vh;
      }

      .row3 .col select {
        width: 8vw;
        height: 3.5vh;
        margin-left: 2px;
        border-radius: 3px;
      }
      .row3 .col input {
        width: 10vw;
        height: 3.5vh;
        margin-left: 5px;
        border-radius: 3px;
      }
      .row3 .col b {
        margin-left: 4px;
        text-align: center;
        display: flex;
        align-items: center;
        font-size: medium;
      }
      .submit_btn:hover {
        background-color: rgb(65, 53, 137);
        color: #fff;
        transition: 0.4s;
      }
      .row4 {
        height: 4vh;
        display: flex;
        /* border: 2px solid black; */
        justify-content: space-around;
        padding: 8px 2px;
        font-size: 15px;
        margin-bottom: 5px;
      }
      .row4 col {
        display: flex;
        margin: 3px 10px;
        /* border: 2px solid black; */
        width: auto;
        height: 4vh;
      }
      .row4 .col select {
        width: 10vw;
        height: 3.5vh;
        margin-left: 2px;
        border-radius: 3px;
      }
      #go {
        background-color: slateblue;
        border-radius: 4px;
        width: 2rem;
        height: 1.5rem;
        color: #c4cae0;
        font-size: 15px;
        padding: 2px 0px;
        text-align: center;
        cursor: pointer;
      }
      #go:hover {
        background-color: rgb(65, 53, 137);
        color: #fff;
        transition: 0.4s;
      }
      .row4 .col #text_area {
        width: fit-content;
        height: 5vh;
        border-radius: 4px;
      }
      .row5 {
        margin: 4px 0;
        width: 100%;
        /* border: 2px solid black; */
      }
      .row5 .col {
        display: flex;
        flex-direction: column;
      }
      .row5 .col input {
        width: 100%;
        height: 5vh;
        border-radius: 4px;
        padding: 2px 5px;
      }
      @media (max-width: 1000px) {
        .container {
          height: auto;
          width: fit-content;
          display: flex;
          flex-direction: column;
          justify-content: center;
          position: absolute;
          top: 60%;
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
      }
    </style>
  </head>
  <body>
    <?php include 'navbar.php' ?>
    <!-- --------------------------------------main container------------------------------------------------------------------------>
    <div class="container">
      <h1>General Examination Details</h1>
      <form action="data_prelichkup.php" method="post">
        <div class="row1 row">
          <div class="col">
            <div class="date">
              <label for="date">Date</label>
              <input type="text" id="date_ip" name="date" disabled />
            </div>
          </div>
          <div class="col">
            <div class="time">
              <label for="time">Time</label>
              <input type="text" id="time_ip" name="time" disabled />
            </div>
          </div>
        </div>
        <div class="row2 row">
          <div class="col">
            <label for="pulse">Pulse:</label>
            <input type="text" id="pulse" name="pul" require /> <b>/min</b>
          </div>
          <div class="col">
            <label for="lname">Blood Pressure:</label>
            <input type="text" id="lname" name="bp" /><b>mm of hg</b>
          </div>
          <div class="col">
            <label for="lname">Tempareture:</label>
            <input type="text" id="lname" name="temp" /><b>&degF</b>
          </div>
        </div>
        <div class="row3 row">
          <div class="col">
            <label for="icterus">Icterus:</label>
            <select id="icterus_s" name="ict">
              <option selected value="">Nil</option>
              <option value="ict1">ict 1</option>
              <option value="ict2">ict 2</option>
              <option value="ict3">ict 3</option>
            </select>
          </div>
          <div class="col">
            <label for="anaemia">Anaemia:</label>
            <select id="anaemia_s" name="ane">
              <option selected value="">Nil</option>
              <option value="ane1">ane 1</option>
              <option value="ane2">ane 2</option>
              <option value="ane3">ane 3</option>
            </select>
          </div>
          <div class="col">
            <label for="cyanosis">Cyanosis:</label>
            <select id="cyanosis_s" name="cyn">
              <option selected value="">Nil</option>
              <option value="cyn1">cyn 1</option>
              <option value="cyn2">cyn 2</option>
              <option value="cyn3">cyn 3</option>
            </select>
          </div>
        </div>
        <div class="row3 row">
          <div class="col">
            <label for="juqular_vain_plus">Juqular Vain Plus:</label>
            <input type="text" id="j_v_p" name="jvp" /><b>/min</b>
          </div>
          <div class="col">
            <label for="tonque">Tonque:</label>
            <select id="tonque_s" name="tongue">
              <option selected value="">Nil</option>
              <option value="jvp1">jvp 1</option>
              <option value="jvp2">jvp 2</option>
              <option value="jvp3">jvp 3</option>
            </select>
          </div>
        </div>
        <div class="row3 row">
          <div class="col">
            <label for="pharynx">Pharynx:</label>
            <select id="pharynx_s" name="pharynx">
              <option selected value="">Nil</option>
              <option value="pharynx1">pharynx 1</option>
              <option value="pharynx2">pharynx 2</option>
              <option value="pharynx3">pharynx 3</option>
            </select>
          </div>
          <div class="col">
            <label for="tonsils">Tonsils:</label>
            <select id="tonsils_s" name="tonsil">
              <option selected value="">Nil</option>
              <option value="tonsil1">tonsil 1</option>
              <option value="tonsil2">tonsil 2</option>
              <option value="tonsil3">tonsil 3</option>
            </select>
          </div>
          <div class="col">
            <label for="oedema">Oedema:</label>
            <select id="oedema_s" name="odema">
              <option selected value="">Nil</option>
              <option value="oedema1">oedema 1</option>
              <option value="oedema2">oedema 2</option>
              <option value="oedema3">oedema 3</option>
            </select>
          </div>
        </div>
        <div class="row3 row">
          <div class="col">
            <label for="clubbing">Clubbing</label>
            <select id="clubbing_s" name="club">
              <option selected value="">Nil</option>
              <option value="club1">club 1</option>
              <option value="club2">club 2</option>
              <option value="club3">club 3</option>
            </select>
          </div>
          <div class="col">
            <label for="blood_group">Blood Group</label>
            <select id="blood_group_s" name="bloodgrp">
              <option selected value="">Nil</option>
              <option value="a">A</option>
              <option value="b">B</option>
              <option value="ab">AB</option>
              <option value="o">O</option>
            </select>
          </div>
          <div class="col">
            <label for="rh_factor">RH Factor</label>
            <select id="icterus_s" name="rh_factor">
              <option selected value="">Nil</option>
              <option value="+">Positive</option>
              <option value="-">Negative</option>
            </select>
          </div>
        </div>
        <div class="row4 row">
          <div class="col">
            <label for="l_nodes">Lymph Node</label>
            <select id="l_nodes">
              <option selected>Nil</option>
              <option value="neck">Neck</option>
              <option value="axilla">Axilla</option>
              <option value="groin">Groin</option>
            </select>
          </div>
          <div class="col">
            <select id="l_node_type">
              <option selected>Nil</option>
              <option value="Palpable">Palpable</option>
              <option value="not palpable">Not Palpable</option>
            </select>
          </div>
          <div class="col">
            <div id="go">go</div>
          </div>
          <div class="col">
            <textarea
              name="lymphnd"
              id="text_area"
              cols="30"
              rows="10"
            ></textarea>
          </div>
        </div>
        <div class="row5 row">
          <div class="col">
            <label for="past_history">Past History:</label>
            <input type="text" id="past" name="pasthist" />
          </div>
        </div>
        <div class="row5 row">
          <div class="col">
            <label for="past_history">drag alergy:</label>
            <input type="text" id="past" name="dragaler" />
          </div>
        </div>
        <div class="row5 row">
          <div class="col">
            <label for="past_history">other alergy:</label>
            <input type="text" id="past" name="otheraler" />
          </div>
        </div>
        <div class="row5 row">
          <div class="col">
            <label for="any_other">Any Other Info:</label>
            <input type="text" id="aoi" name="otherhist" />
          </div>
        </div>

        <input class="submit_btn" type="submit" name="submit" value="Save" />
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
    //-------------------------------------------------------------------------
    const l_node = document.querySelector("#l_nodes");
    const l_node_p = document.querySelector("#l_node_type");
    let b = document.querySelector("#go");
    let text_box = document.querySelector("#text_area");
    let s = "";
    b.addEventListener("click", function () {
      //console.log("sdgf");
      /* console.log(l_node.value);
      console.log(l_node_p.value);*/
      if (l_node.value != "Nil" && l_node_p.value != "Nil") {
        if (s == "") {
          s += l_node.value + " " + l_node_p.value;
        } else {
          s += "," + l_node.value + " " + l_node_p.value;
        }
        // console.log(s);
        text_box.value = s;
      } else {
        alert("not valid input");
      }
    });
  </script>
</html>
