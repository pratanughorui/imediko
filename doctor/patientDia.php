<?php
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
        background-image: url("../new_bg-2.png");
        background-size: auto;
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
        cursor: pointer;
      }
      .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        width: 60%;
        position: absolute;
        top: 18%;
        left: 19%;
        font-weight: 600;
      }
      /* table functional buttons */
      .row-btn {
        height: 4vh;
        display: flex;
        flex-wrap: wrap;
        /* border: 2px solid black; */
        justify-content: flex-end;
        padding: 8px 2px;
        font-size: 15px;
        margin-bottom: 5px;
      }
      .row-btn .col {
        display: flex;
        margin: 0 5px;
      }
      .row-btn .col .btn {
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        margin: 1px 0;
        width: 7vw;
        height: 3vh;
        padding: 2px 0px;
        text-align: center;
        background-color: slateblue;
        color: #c4cae0;
        border: none;
        border-radius: 4px;
        font-weight: 525;
      }
      .row-btn .col .btn:hover {
        background-color: rgb(65, 53, 137);
        color: #fff;
        transition: 0.4s;
      }
      .row-btn .col .date input {
        width: 10vw;
        height: 3.5vh;
        margin-left: 5px;
        text-align: center;
        border-radius: 3px;
      }
      .row-btn .col .time input {
        width: 10vw;
        height: 3.5vh;
        margin-left: 5px;
        text-align: center;
        border-radius: 3px;
      }
      /* table functional button */
      .row1 {
        height: 4vh;
        display: flex;
        flex-wrap: wrap;
        /* border: 2px solid black; */
        justify-content: space-around;
        padding: 8px 2px;
        font-size: 15px;
        margin-bottom: 5px;
      }
      .row1 .col {
        display: flex;
        margin: 3px 10px;
      }
      .row1 .col .p_id,
      .p_name,
      .p_gender {
        display: flex;
      }
      .row1 .col .p_id input {
        width: 10vw;
        height: 3.5vh;
        margin-left: 5px;
        text-align: center;
        border-radius: 3px;
      }
      .row1 .col .p_name input {
        width: 10vw;
        height: 3.5vh;
        margin-left: 5px;
        text-align: center;
        border-radius: 3px;
      }
      .row1 .col .p_gender input {
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
      .row2 .col .btn {
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        margin: 5px 0;
        width: 5vw;
        height: 3vh;
        padding: 2px 0px;
        text-align: center;
        background-color: slateblue;
        color: #c4cae0;
        border: none;
        border-radius: 4px;
        font-weight: 525;
      }
      .row2 .col .btn p {
        width: fit-content;
        height: fit-content;
        margin: auto;
      }
      .row2 .col .btn:hover {
        background-color: rgb(65, 53, 137);
        color: #fff;
        transition: 0.4s;
      }
      .row2 .col input {
        width: 10vw;
        height: 3.5vh;
        margin-left: 5px;
        border-radius: 3px;
      }
      .row2 .col select {
        width: 8vw;
        height: 3.5vh;
        margin-left: 2px;
        border-radius: 3px;
      }
      .row2 .col .text_box {
        width: fit-content;
        height: 7vh;
        padding: 1rem 1rem;
        border-radius: 4px;
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
        height: 27vh;
        width: 100%;
        display: flex;
        /* border: 2px solid black; */
        justify-content: space-between;
        flex-wrap: wrap;
        padding: 8px 2px;
        font-size: 15px;
        margin-bottom: 5px;
      }
      .row_table {
        height: 20vh;
        width: 100%;
        display: flex;
        /* border: 2px solid black; */
        justify-content: space-between;
        flex-wrap: wrap;
        padding: 8px 2px;
        font-size: 15px;
        margin-bottom: 5px;
        overflow: hidden;
        overflow-y: scroll;
        background-color: #d2d2d2;
      }
      .row3 .hThree {
        margin-top: 4rem;
      }
      .row3 .heading {
        width: 100%;
        height: 5vh;
        display: flex;
        align-items: center;
        /* border: 2px solid black; */
      }
      .row3 .col {
        display: flex;
        flex-wrap: wrap;
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
        padding: 0 8px 0;
      }
      .row3 .col b {
        margin-left: 4px;
        text-align: center;
        display: flex;
        justify-content: center;
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
      .row4 .col .text_area {
        width: fit-content;
        height: 5vh;
        border-radius: 4px;
        padding: 0 8px 0;
      }
      .row4 .col input[type="text"] {
        width: 10vw;
        height: 3.5vh;
        margin-left: 2px;
        border-radius: 3px;
        padding: 4px 4px;
      }
      .row4 .col .btn {
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        background-color: slateblue;
        border-radius: 4px;
        width: 5rem;
        height: 2rem;
        color: #c4cae0;
        font-size: 15px;
        padding: 2px 0px;
        text-align: center;
      }
      .row4 .col .btn:hover {
        background-color: rgb(65, 53, 137);
        color: #fff;
        transition: 0.4s;
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
        padding: 0.5rem 8px;
      }
      .row3 .col .radio-label {
        font-size: medium;
        display: flex;
        justify-content: center;
        align-items: center;
        /* border: 2px solid black; */
        width: 8vw;
      }
      .row3 .col input[type="radio"] {
        width: fit-content;
      }
      table {
        border-collapse: collapse;
        margin: 0;
        width: 100%;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.25);
      }
      table tr {
        padding: 0.45rem;
      }
      thead tr {
        background-color: slateblue;
      }
      thead th {
        color: #c4cae0;
        font-size: 1.15rem;
      }
      tbody tr:nth-child(even) {
        background-color: #eaeaea;
      }
      table th,
      td {
        font-size: 1em;
        padding: 1em;
        text-align: center;
      }
      .row3 .col_table {
        width: 100%;
      }
      .pdfdiv {
        display: flex;
        text-align: center;
        align-items: center;
        justify-content: center;
      }
      @media (max-width: 850px) {
        table {
          border: 3px solid slateblue;
        }
        table thead tr {
          display: none;
        }
        table tr {
          display: block;
        }
        table th,
        table td {
          padding: 0.5em;
        }
        table td {
          text-align: right;
          display: block;
          font-size: 1em;
        }
        table td::before {
          content: attr(data-title) ": ";
          float: left;
        }
        tbody tr:nth-child(even) {
          background-color: slateblue;
          color: #c4cae0;
        }
      }

      @media (max-width: 1225px) {
        .container {
          height: auto;
          width: auto;
          display: grid;
          place-items: center;
          position: absolute;
          left: 5%;
          transform: translate(0, 0);
          font-weight: 600;
        }
        .row3 .col .radio-label {
          font-size: small;
          display: flex;
          justify-content: flex-start;
          width: auto;
        }
        h1 {
          font-size: 20px;
          border-radius: 4px;
          width: 100%;
        }
        .row1 {
          height: auto;
          display: flex;
          justify-content: flex-start;
          /* border: 2px solid black; */
          padding: 8px 2px;
          font-size: 15px;
          margin-bottom: 5px;
          width: 100%;
        }
        .row1 .col input[type="text"] {
          width: max-content;
        }
        .row2 {
          height: auto;
          display: flex;
          flex-direction: column;
          width: 100%;
          /* border: 2px solid black; */
        }
        .row2 .col {
          /* border: 2px solid black; */
          margin-top: 10px;
          width: 95%;
          font-size: 15px;
        }
        .row2 .col select {
          margin: auto;
          width: 50%;
        }
        .row2 .col .btn {
          width: 20%;
        }
        .row2 .col .text_box {
          height: 3vh;
          width: 100%;
        }
        .row3 {
          height: auto;
          display: flex;
          flex-direction: column;
          width: 100%;
          /* border: 2px solid black; */
        }
        .row3 .col {
          height: auto;
          /* border: 2px solid black; */
          margin-top: 10px;
          width: 95%;
          font-size: 15px;
        }
        .row3 .col input {
          margin-top: 10px;
          width: 100%;
        }
        .row3 .col select {
          width: 75%;
        }
        .row3 .col b {
          margin-top: 10px;
        }
        .row-btn {
          height: auto;
          display: flex;
          justify-content: space-between;
          margin: auto;
        }
        .row-btn .col {
          /* border: 2px solid black; */
          width: 25%;
          display: flex;
          justify-content: center;
          align-items: center;
        }
        .row-btn .col .btn {
          width: 20vw;
          font-size: small;
        }
        .row4 {
          height: auto;
          display: flex;
          flex-direction: column;
          width: 100%;
          /* border: 2px solid black; */
        }
        .row4 .col {
          height: auto;
          /* border: 2px solid black; */
          margin-top: 10px;
          width: 95%;
          font-size: 15px;
        }
        .row4 .col select {
          width: 60%;
        }
        .row4 .col input[type="text"] {
          width: 50%;
          margin-right: 4px;
        }
        .row4 .col .btn {
          width: 100%;
          display: flex;
          justify-content: center;
          align-items: center;
        }
        .row4 .col .text_area {
          width: 100%;
        }
      }
    </style>
  </head>
  <body>
    <?php include 'navbar.php' ?>
    <!-- --------------------------------------main container------------------------------------------------------------------------>
    <?php
       $conn=mysqli_connect("localhost","root","","imediko") or die("connection failed");
       $sql="select * from complainmast";
       $res=mysqli_query($conn,$sql);
     ?>
    <div class="container">
      <h1>Patient Diagnosis</h1>
      <form action="data_diagnosis.php" method="post">
        <div class="row1 row">
          <div class="col">
            <div class="p_id">
              <label for="p_id">Patient Id</label>
              <input
                type="text"
                id="p_id"
                name="firstname"
                placeholder="Patient Id"
              />
            </div>
          </div>
          <div class="col">
            <div class="p_name">
              <label for="time">Patient Name</label>
              <input
                type="text"
                id="p_name"
                name="lastname"
                placeholder="Patient Name"
              />
            </div>
          </div>
          <div class="col">
            <div class="p_gender">
              <label for="gender">Gender</label>
              <input
                type="text"
                id="p_gender"
                name="lastname"
                placeholder="Gender"
              />
            </div>
          </div>
        </div>

        <div class="row2 row">
          <div class="col">
            <label for="complain">Complain:</label>
            <select id="complain">
              <option selected value="">Nil</option>
              <?php
              while($row=mysqli_fetch_assoc($res)){
                ?>
              <option value="<?php echo $row['complain'] ?>">
                <?php echo $row['complain'] ?>
              </option>
              <?php
              }
              
              ?>
            </select>
          </div>
          <div class="col">
            <div class="btn" id="w1"><p>with</p></div>
          </div>
          <div class="col">
            <textarea
              name="complain"
              id="t1"
              class="text_box"
              cols="30"
              rows="10"
            ></textarea>
          </div>
        </div>
        <div class="row row2">
          <div class="col">
            <a href="preliminary_checkup.php"><h4>Priliminary Check up</h4></a>
          </div>
        </div>
        <div class="row2 row">
          <div class="col">
            <label for="complain">Provitional Diagnosis:</label>
            <select id="pd">
              <option selected value="">Nil</option>
              <?php
               $sql="select * from diseasemast";
               $res=mysqli_query($conn,$sql);
               while($row=mysqli_fetch_assoc($res)){
                ?>
              <option value="<?php echo $row['NAME'] ?>">
                <?php echo $row['NAME'] ?>
              </option>
              <?php
              }
              
              
              ?>
            </select>
          </div>
          <div class="col">
            <div class="btn" id="w2"><p>with</p></div>
          </div>
          <div class="col">
            <textarea
              name="prov_diagnosis"
              id="t2"
              class="text_box"
              cols="30"
              rows="10"
            ></textarea>
          </div>
        </div>
        <div class="row3 row">
          <div class="heading">
            <h3>Medicine</h3>
          </div>
          <div class="col">
            <label for="medicine_type">Medicine Type:</label>
            <select id="type">
              <option selected value="">Nil</option>
              <option value="o">ointment</option>
              <option value="l">liquid/syrup</option>
              <option value="c">cream</option>
              <option value="t">tablet/capsule</option>
              <option value="i">iv fluid</option>
              <option value="d">Drop</option>
              <option value="p">Powder</option>
              <option value="s">Suspension</option>
              <option value="n">Nasal Spray</option>
            </select>
          </div>
          <div class="col">
            <label for="trade">Trade Name:</label>
            <select id="trade">
              <option selected value="">Nil</option>
              <!-- <option value="option1">Option 1</option>
              <option value="option2">Option 2</option>
              <option value="option3">Option 3</option> -->
            </select>
          </div>
          <div class="col" style="display: none">
            <input type="text" id="genname" value="" />
          </div>
          <div class="col">
            <label for="dose">Dose</label>
            <input type="text" id="dose" name="lastname" placeholder="Dose" />
          </div>
          <div class="col">
            <select id="day">
              <option selected value="">Nil</option>
              <option value="option1">Option 1</option>
              <option value="option2">Option 2</option>
              <option value="option3">Option 3</option>
            </select>
            <b>/Day at</b>
            <label for="option1" class="radio-label"
              ><input
                type="radio"
                id="day"
                name="options"
                value="option1"
              />Option 1</label
            >
            <label for="option2" class="radio-label"
              ><input
                type="radio"
                id="option2"
                name="options"
                value="option2"
              />Option 2</label
            >
            <label for="option3" class="radio-label"
              ><input
                type="radio"
                id="option3"
                name="options"
                value="option3"
              />Option 3</label
            >
            <label for="option3" class="radio-label"
              ><input
                type="radio"
                id="option3"
                name="options"
                value="option3"
              />Option 4</label
            >
            <label for="option3" class="radio-label"
              ><input
                type="radio"
                id="option3"
                name="options"
                value="option3"
              />Option 5</label
            >
            <label for="option3" class="radio-label"
              ><input
                type="radio"
                id="option3"
                name="options"
                value="option3"
              />Option 6</label
            >
            <label for="option3" class="radio-label"
              ><input
                type="radio"
                id="option3"
                name="options"
                value="option3"
              />Option 7</label
            >
            <label for="option3" class="radio-label"
              ><input
                type="radio"
                id="option3"
                name="options"
                value="option3"
              />Option 8</label
            >
            <b>for</b>
            <input type="text" id="days" name="lastname" placeholder="Dose" />
            <b>Days</b>
          </div>
        </div>
        <div class="row-btn">
          <div class="col">
            <div class="btn" onclick="addToTable()"><p>To Table</p></div>
          </div>
          <div class="col">
            <div class="btn" onclick="deleteAllRows()"><p>Fresh Table</p></div>
          </div>
          <div class="col">
            <div class="btn" onclick="deleterows()"><p>Delete</p></div>
          </div>
        </div>
        <div class="row3 row_table">
          <div class="col col_table">
            <table>
              <thead>
                <tr>
                  <th>S</th>
                  <th>Type</th>
                  <th>Trade Name</th>
                  <th>Generic Name</th>
                  <th>Dose</th>
                  <th>/Day</th>
                  <th>Adm.At</th>
                  <th>Days</th>
                </tr>
              </thead>
              <tbody id="tbdy">
                <!-- <tr>
                  <td data-title="S">1</td>
                  <td data-title="Type">2</td>
                  <td data-title="Trade Name">3</td>
                  <td data-title="Generic Name">4</td>
                  <td data-title="Dose">5</td>
                  <td data-title="/Day">6</td>
                  <td data-title="Adm.At">7</td>
                  <td data-title="Days">8</td>
                </tr> -->
              </tbody>
            </table>
          </div>
        </div>
        <div class="row3 row">
          <div class="heading hThree">
            <h3>Investigation</h3>
          </div>
          <div class="col">
            <label for="medicine_type">Sample:</label>
            <select id="sample">
              <option selected value="">Nil</option>
              <?php
             $sql="select distinct SAMPLE,SAMPLE_CD from testmast;";
             $res=mysqli_query($conn,$sql);
             while($row=mysqli_fetch_assoc($res)){

              ?>
              <option value="<?php echo $row['SAMPLE_CD'] ?>">
                <?php echo $row['SAMPLE'] ?>
              </option>
              <?php
            }
            
            
            ?>
            </select>
          </div>
          <div class="col">
            <label for="trade">Test:</label>
            <select id="test">
              <option selected value="">Nil</option>
              <!-- <option value="option1">Option 1</option>
              <option value="option2">Option 2</option>
              <option value="option3">Option 3</option> -->
            </select>
          </div>
          <div class="row-btn">
            <div class="col">
              <div class="btn" onclick="investtable()"><p>To Table</p></div>
            </div>
            <div class="col">
              <div class="btn" onclick="deleteinvestrows()"><p>Delete</p></div>
            </div>
          </div>
        </div>
        <div class="row3 row_table">
          <div class="col col_table">
            <table>
              <thead>
                <tr>
                  <th>S</th>
                  <th>Sample Name</th>
                  <th>Test Name</th>
                </tr>
              </thead>
              <tbody id="intb">
                <!-- <tr>
                  <td data-title="S">1</td>
                  <td data-title="Sample Name">2</td>
                  <td data-title="Test Name">3</td>
                </tr>
                <tr>
                  <td data-title="S">1</td>
                  <td data-title="Type">2</td>
                  <td data-title="Trade Name">3</td>
                </tr> -->
              </tbody>
            </table>
          </div>
        </div>
        <div class="row4 row">
          <div class="col">
            <label for="l_nodes">Diet Adviced</label>
            <select id="l_nodes">
              <option selected>Nil</option>
              <option value="neck">Neck</option>
              <option value="axilla">Axilla</option>
              <option value="groin">Groin</option>
            </select>
          </div>
          <div class="col">
            <input type="text" id="kl" name="lastname" placeholder="Diet" />
            <b>Kcal/Days</b>
          </div>
          <div class="col">
            <div class="btn" id="w3"><p>Go</p></div>
          </div>
          <div class="col">
            <textarea
              name="diet"
              id="t3"
              class="text_area"
              cols="30"
              rows="10"
            ></textarea>
          </div>
        </div>
        <div class="row5 row">
          <div class="col">
            <label for="past_history">Other Advice:</label>
            <input type="text" id="past" name="lastname" />
          </div>
        </div>

        <input class="submit_btn" type="submit" name="submit" value="Save" />
        <!-- <input class="submit_btn" type="submit" value="Done" /> -->
        <div class="submit_btn pdfdiv">Done</div>
      </form>
    </div>
  </body>
  <!-- <script src="../script/patientDia.js"></script>
  <script src="https://use.fontawesome.com/742ca76364.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

  <script>
    let x = 1;
    function getvalue() {
      const radioInputs = document.querySelectorAll('input[name="options"]');
      for (let i = 0; i < radioInputs.length; i++) {
        if (radioInputs[i].checked) {
          return radioInputs[i].value;
        }
      }
    }
    function addToTable() {
      let f1 = document.getElementById("type");
      let f2 = document.getElementById("trade");
      let f3 = document.getElementById("genname");
      let f4 = document.getElementById("dose");
      let f5 = document.getElementById("day");
      let f6 = getvalue();
      let f7 = document.getElementById("days");
      /*console.log(
          f1.value + f2.value + f3.value + f4.value + f5.value + f6.value
        );*/
      if (
        f1.value.trim() !== "" &&
        f2.value.trim() !== "" &&
        f3.value.trim() !== "" &&
        f4.value.trim() !== "" &&
        f5.value.trim() !== "" &&
        f6.trim() !== "" &&
        f7.value.trim() !== ""
      ) {
        const arr = [
          f1.value,
          f2.value,
          f3.value,
          f4.value,
          f5.value,
          f6,
          f7.value,
        ];
        let tbdy = document.getElementById("tbdy");
        const newRow = document.createElement("tr");

        const checkboxInput = document.createElement("input");
        checkboxInput.type = "checkbox";

        checkboxInput.setAttribute("class", "cb");
        const newCell = document.createElement("td");
        newCell.appendChild(checkboxInput);
        newRow.appendChild(newCell);
        for (let i = 0; i < 7; i++) {
          //console.log(arr[i]);

          const newCell = document.createElement("td");
          var Input = document.createElement("input");
          Input.type = "text";
          Input.name = "medi" + (i + 1) + "[]";
          Input.value = arr[i];
          /*inputElement.type = "text";
            inputElement.value = arr[i];
            inputElement.name = "about_medi[]";*/
          //console.log(Input);
          newCell.appendChild(Input);

          newRow.appendChild(newCell);
        }
        tbdy.appendChild(newRow);
      } else {
        console.log("afds");
      }
    }
    function deleteAllRows() {
      // Get the table body
      const tableBody = document.getElementById("tbdy");

      // Remove all rows from the table
      while (tableBody.firstChild) {
        tableBody.removeChild(tableBody.firstChild);
      }
    }
    function deleteRow(button) {
      // Get the row element (parentNode of the button)
      const row = button.parentNode.parentNode;
      //console.log(row);
      //Remove the row from the table
      row.remove();
    }
    function deleterows() {
      let cb = document.querySelectorAll(".cb");

      cb.forEach((checkbox) => {
        if (checkbox.checked) {
          deleteRow(checkbox); // Call the deleteRow function with the checkbox as an argument
          //console.log("yes");
        }
      });
    }
    //---------------------------------------investigation---------------------------------------------
    function investtable() {
      let f1 = document.getElementById("sample");
      let f2 = document.getElementById("test");
      f1 = f1.options[f1.selectedIndex];
      let a = f1.textContent;
      //console.log(a);
      if (a.trim() !== "" && f2.value.trim() !== "") {
        const arr = [a, f2.value];
        let tbdy = document.getElementById("intb");
        const newRow = document.createElement("tr");

        const checkboxInput = document.createElement("input");
        checkboxInput.type = "checkbox";

        checkboxInput.setAttribute("class", "cb2");
        const newCell = document.createElement("td");
        newCell.appendChild(checkboxInput);
        newRow.appendChild(newCell);
        for (let i = 0; i < 2; i++) {
          //console.log(arr[i]);
          const newCell = document.createElement("td");
          var Input = document.createElement("input");
          Input.type = "text";
          Input.name = "inves" + (i + 1) + "[]";
          Input.value = arr[i];
          newCell.appendChild(Input);
          newRow.appendChild(newCell);
        }
        tbdy.appendChild(newRow);
      }
    }
    function deleteinvestrows() {
      let cb = document.querySelectorAll(".cb2");

      cb.forEach((checkbox) => {
        if (checkbox.checked) {
          deleteRow(checkbox); // Call the deleteRow function with the checkbox as an argument
          //console.log("yes");
        }
      });
    }
    const b = document.getElementById("w1");
    const c1 = document.getElementById("complain");
    const t1 = document.getElementById("t1");
    let s = "";
    b.addEventListener("click", function () {
      if (c1.value != "") {
        if (s == "" || s[s.length - 1] == ",") {
          s += c1.value;
        } else {
          s += " " + "with" + " " + c1.value + ",";
        }
      } else {
        alert("not selected");
      }
      t1.value = s;
      // console.log(s);
    });
    const b1 = document.getElementById("w2");
    const c2 = document.getElementById("pd");
    const t2 = document.getElementById("t2");
    let s1 = "";
    b1.addEventListener("click", function () {
      if (c2.value != "") {
        if (s1 == "") {
          s1 += c2.value;
        } else {
          s1 += ", " + c2.value;
        }
      } else {
        alert("not selected");
      }
      t2.value = s1;
      // console.log(s);
    });
    const b2 = document.getElementById("w3");
    const x1 = document.getElementById("l_nodes");
    const d1 = document.getElementById("kl");
    const t3 = document.getElementById("t3");
    let s2 = "";
    b2.addEventListener("click", function () {
      if (x1.value != "" && d1.value != "") {
        s2 += x1.value + " " + d1.value + ", ";
      } else {
        alert("not selected");
      }
      t3.value = s2;
      //console.log(s2);
    });
    //--------------------------------------sample test----------------
    const samp = document.getElementById("sample");
    const test = document.getElementById("test");
    samp.addEventListener("change", () => {
      //console.log(samp.value);
      const data = { sample_cd: samp.value };
      const url = "dia_test.php";
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
          // console.log(response);
          let ans = "";
          removeSelect("dynamicSelect");
          for (let i = 0; i < response.length; i++) {
            if (response[i] != "@") {
              ans += response[i];
            } else {
              var newOption = document.createElement("option");
              newOption.textContent = ans;
              newOption.className = "dynamicSelect";
              test.appendChild(newOption);
              ans = "";
            }
          }
        })
        .catch((error) => {
          console.error("Error:", error);
        });
    });
    function removeSelect(className) {
      var selectElements = document.querySelectorAll("." + className);
      var selectCount = selectElements.length;

      // Loop through and remove all select elements with the given class
      for (var i = selectCount - 1; i >= 0; i--) {
        var selectElement = selectElements[i];
        selectElement.remove();
      }
    }
    //-----------------------medicine-------------
    const type = document.getElementById("type");
    const trade = document.getElementById("trade");
    type.addEventListener("change", () => {
      const data = { type: type.value };
      const url = "medifetch.php";
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
          // console.log(response);
          //appo_time.value = response;
          let ans = "";
          removeSelect("dynamicSelect2");
          for (let i = 0; i < response.length; i++) {
            if (response[i] != "@") {
              ans += response[i];
            } else {
              var newOption = document.createElement("option");
              newOption.textContent = ans;
              newOption.className = "dynamicSelect2";
              trade.appendChild(newOption);
              ans = "";
            }
          }
        })
        .catch((error) => {
          console.error("Error:", error);
        });
    });
    //----------------------ganename---------------
    const genname = document.getElementById("genname");
    trade.addEventListener("change", () => {
      const data = { type: type.value, trade: trade.value };
      const url = "ganename.php";
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
          //console.log(response);
          genname.value = response;
          //appo_time.value = response;
        })
        .catch((error) => {
          console.error("Error:", error);
        });
    });
  </script>
</html>
