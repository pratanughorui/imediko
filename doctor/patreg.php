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
      body {
        padding: 0;
        margin: 0;
        border: 0;
        outline: 0;
        height: 100vh;
        background-image: url("new_bg-2.png");
        background-size: cover;
      }

      input[type="text"],
      select {
        width: 42%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }
      input[type="number"],
      select {
        width: 15%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }
      input[type="email"],
      select {
        width: 30%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }
      label {
        padding: 6px;
        /* margin-right: 10px; */
      }

      input[type="submit"] {
        width: 100%;
        background-color: slateblue;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      input[type="submit"]:hover {
        background-color: slateblue;
      }
      .row1 {
        width: 100%;
        box-sizing: border-box;
        padding: 1%;
      }
      .row1 input[type="text"] {
        width: 20%;
      }
      .row2 {
        width: 100%;
        box-sizing: border-box;
        padding: 1%;
      }
      .row2 input[type="text"] {
        width: 38%;
      }
      .row3 {
        width: 100%;
        box-sizing: border-box;
        padding: 1%;
      }
      .row3 input[type="text"] {
        width: 19%;
      }
      .row3 select {
        width: 15%;
      }
      .row3 input[type="date"] {
        width: 19%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }
      .row4 {
        width: 100%;
        box-sizing: border-box;
        padding: 1%;
      }
      .row4 input[type="text"] {
        width: 22%;
      }
      .row4 select {
        width: 15%;
      }
      .row5 {
        width: 100%;
        box-sizing: border-box;
        padding: 1%;
      }
      .row5 input[type="text"] {
        width: 20%;
      }
      #ca,#pa {
        width: 40%;
      }

      .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        width: 80%;
        position: absolute;
        top: 15%;
        left: 8%;
      }
      h1 {
        font-size: 25px;
        padding: 2px 0px;
        text-align: center;
        background-color: slateblue;
        color: #c4cae0;
      }
      @media screen and (max-width: 1251px) {
        .row1 input[type="text"] {
          width: 22%;
        }
      }
      @media screen and (max-width: 1215px) {
        .row4 input[type="text"] {
          width: 20%;
        }
        .row4 select {
          width: 20%;
        }
      }
      @media screen and (max-width: 1172px) {
        .row3 input[type="text"] {
          width: 30%;
        }
        .row3 select {
          width: 30%;
        }
        .row5 input[type="text"] {
          width: 28%;
        }
        #ca {
          width: 55%;
        }
      }
      @media screen and (max-width: 768px) {
        .row input[type="text"] {
          width: 100%;
        }
        .row input[type="number"] {
          width: 8rem;
        }
        .row input[type="email"] {
          width: 100%;
        }
        .row input[type="date"] {
          width: fit-content;
        }
        .row select {
          width: 100%;
          text-align: center;
          font-size: 15px;
        }
        #ca {
          width: 100%;
        }
      }
    </style>
  </head>
  <body>
    <?php include 'navbar.php' ?>
    <!--------------------------- main container----------------------------------------------------------->
    <?php
    $conn=mysqli_connect("localhost","root","","imediko") or die("connection failed");
      $sql="select * from patientmast where id=(select count(*) from patientmast);";
      $res=mysqli_query($conn,$sql);
      $patcode;
      function inc($digit){
        $d=substr($digit,-5);
        $t="";
        $a=0;
        $x;
        for($i=0;$i<5;$i++){
           if($d[$i]!=0 or $a==1){
           $t.=$d[$i];
           if($a==0) $x=$i; 
           $a=1;
         }
    
      }
       $t++;
       $d=substr_replace($d,$t,$x);
       $a=strlen($digit)-5;
       $digit=substr_replace($digit,$d,$a);
       return $digit;
    }
      if($row=mysqli_fetch_assoc($res)){
      $digit=$row['patient_id'];
      $patcode=inc($digit);

      }else{
        $sql="select * from docmast where doc_id='". $_SESSION["doctor_id"]."';";
        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($res);
        $dregid=$row['doc_regno'];
        $digit="00001";
        $patcode=$dregid.$digit;
      }
    
    ?>
    <div class="container">
      <h1>ODP Patient Registration</h1>
      <?php
      if(isset($_SESSION['patient'])){
          $identity=$_SESSION['patient'];
          $conn=mysqli_connect("localhost","root","","imediko") or die("connection failed");
          $sql="select * from patientmast where patient_id='".$identity."'";
          $res=mysqli_query($conn,$sql);
          $row=mysqli_fetch_assoc($res);
      
          ?>
      <form action="data_patreg.php" method="post">
        <div class="row1 row">
          <label for="fname">Patient Id</label>
          <input type="text" id="fname" name="patient_id" value=<?php echo $row['patient_id'] ?>
          placeholder="Patient Id" />

          <label for="lname">Patient Email</label>
          <input type="email" id="lname" name="patient_email" value=<?php echo $row['patient_email'] ?>
          placeholder="Patient Email" />
          <label for="fname">Contact No</label>
          <input type="text" id="fname" name="patient_contact" value=<?php echo $row['patient_contact'] ?>
          placeholder="Contact No" />

          <!-- <label for="country">Country</label>
          <select id="country" name="country">
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
          </select> -->
        </div>
        <div class="row2 row">
          <label for="fname">Name</label>
          <input
            type="text"
            id="fname"
            name="patient_name"
            value="<?php echo $row['patient_name'] ?>"
            placeholder="Name"
          />

          <label for="lname">Gurdain Name</label>
          <input
            type="text"
            id="lname"
            name="gurdian_name"
            value="<?php echo $row['gurdain_name'] ?>"
            placeholder="Gurdain Name"
          />
        </div>
        <div class="row3 row">
          <label for="lname">DOB:</label>
          <input type="date" id="lname" name="dob" value=<?php echo $row['dob'] ?>
          placeholder="Gurdain Name" />
          <label for="lname">Age:</label>
          <input type="number" id="lname" name="age" value=<?php echo $row['age'] ?>
          placeholder="Your age" />
          <label for="country">Gender</label>
          <select id="gender" name="sex">
            <option selected>------Nil------</option>
            <option value="male"><?php echo $row['sex'] ?></option>
            <option value="Female">Female</option>
            <option value="Others">Others</option>
          </select>
          <label for="lname">Occupation</label>
          <input type="text" id="lname" name="occupation" value=<?php echo $row['occupation'] ?>
          placeholder="Gurdain Name" />
        </div>
        <div class="row4 row">
          <label for="country">Maritial Status</label>
          <select id="gender" name="maritial_status">
            <option selected><?php echo $row['maritial_status']?></option>
            <option value="male">Single</option>
            <option value="Female">Married</option>
          </select>
          <label for="lname">Spouse's Name</label>
          <input type="text" id="lname" name="spouse_name" value=<?php echo $row['spouse_name'] ?>
          placeholder="Spouse's Name" />
          <label for="lname">Monthly Income</label>
          <input type="text" id="lname" name="income" value=<?php echo $row['monthly_income'] ?>
          placeholder="Monthly Income" />
        </div>
        <div class="row5 row">
          <label for="lname">Current Address</label>
          <input type="text" id="ca" name="cadd" value=<?php echo $row['c_address'] ?>
          placeholder="Current Address" />
          <label for="lname">City</label>
          <input type="text" id="lname" name="ccity" value=<?php echo $row['c_city'] ?>
          placeholder="City" />
          <label for="lname">Pin</label>
          <input type="text" id="lname" name="cpin" value=<?php echo $row['c_pin'] ?>
          placeholder="Pin" />
          <label for="lname">District</label>
          <input type="text" id="lname" name="cdistrict" value=<?php echo $row['c_district'] ?>
          placeholder="District" />
          <label for="lname">State</label>
          <input type="text" id="lname" name="cstate" value=<?php echo $row['c_state'] ?>
          placeholder="State" />
          <label for="lname">Police Station</label>
          <input type="text" id="lname" name="cps" value=<?php echo $row['c_ps'] ?>
          placeholder="Police Station" />
        </div>
        <div class="row5 row">
          <label for="lname">Permanent Address</label>
          <input type="text" id="ca" name="padd" value=<?php echo $row['p_address'] ?>
          placeholder="Current Address" />
          <label for="lname">City</label>
          <input type="text" id="lname" name="pcity" value=<?php echo $row['p_city'] ?>
          placeholder="City" />
          <label for="lname">Pin</label>
          <input type="text" id="lname" name="ppin" value=<?php echo $row['p_pin'] ?>
          placeholder="Pin" />
          <label for="lname">District</label>
          <input type="text" id="lname" name="pdis" value=<?php echo $row['p_district'] ?>
          placeholder="District" />
          <label for="lname">State</label>
          <input type="text" id="lname" name="pstate" value=<?php echo $row['p_state'] ?>
          placeholder="State" />
          <label for="lname">Police Station</label>
          <input type="text" id="lname" name="pps" value=<?php echo $row['p_ps'] ?>
          placeholder="Police Station" />
        </div>

        <input type="submit" name="submit" value="Submit" />
      </form>
      <?php
        }else{
          ?>
      <form action="data_patreg.php" method="post">
        <div class="row1 row">
          <label for="fname">Patient Id</label>
          <input
            type="text"
            id="fname"
            name="patient_id"
            value=<?php echo $patcode ?>
            
          />
        

          <label for="lname">Patient Email</label>
          <input
            type="email"
            id="lname"
            name="patient_email"
            placeholder="Patient Email"
          />
          <label for="fname">Contact No</label>
          <input
            type="text"
            id="fname"
            name="patient_contact"
            placeholder="Contact No"
          />

          <!-- <label for="country">Country</label>
          <select id="country" name="country">
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
          </select> -->
        </div>
        <div class="row2 row">
          <label for="fname">Name</label>
          <input
            type="text"
            id="fname"
            name="patient_name"
            placeholder="Name"
          />

          <label for="lname">Gurdain Name</label>
          <input
            type="text"
            id="lname"
            name="gurdian_name"
            placeholder="Gurdain Name"
          />
        </div>
        <div class="row3 row">
          <label for="lname">DOB:</label>
          <input type="date" id="dob" name="dob" placeholder="Gurdain Name" />
          <label for="lname">Age:</label>
          <input type="number" id="age" name="age" placeholder="Your age" />
          <label for="country">Gender</label>
          <select id="gender" name="sex">
            <option selected>------Nil------</option>
            <option value="male">Male</option>
            <option value="Female">Female</option>
            <option value="Others">Others</option>
          </select>
          <label for="lname">Occupation</label>
          <input
            type="text"
            id="lname"
            name="occupation"
            placeholder="Gurdain Name"
          />
        </div>
        <div class="row4 row">
          <label for="country">Maritial Status</label>
          <select id="gender" name="maritial_status">
            <option selected>------Nil------</option>
            <option value="male">Single</option>
            <option value="Female">Married</option>
          </select>
          <label for="lname">Spouse's Name</label>
          <input
            type="text"
            id="lname"
            name="spouse_name"
            placeholder="Spouse's Name"
          />
          <label for="lname">Monthly Income</label>
          <input
            type="text"
            id="lname"
            name="income"
            placeholder="Monthly Income"
          />
        </div>
        <div class="row5 row">
          <label for="lname">Current Address</label>
          <input
            type="text"
            id="ca"
            name="cadd"
            placeholder="Current Address"
          />
          <label for="lname">City</label>
          <input type="text" id="city" name="ccity" placeholder="City" />
          <label for="lname">Pin</label>
          <input type="text" id="cpin" name="cpin" placeholder="Pin" />
          <label for="lname">District</label>
          <input
            type="text"
            id="cdis"
            name="cdistrict"
            placeholder="District"
          />
          <label for="lname">State</label>
          <input type="text" id="cstate" name="cstate" placeholder="State" />
          <label for="lname">Police Station</label>
          <input
            type="text"
            id="cps"
            name="cps"
            placeholder="Police Station"
          />
        </div>
        <div class="row5 row">
          <label for="same">Same As</label>
          <input type="checkbox" name="sameas" value=0 id="same" >
        </div>
        <div class="row5 row">
          <label for="lname">Permanent Address</label>
          <input
            type="text"
            id="pa"
            name="padd"
            placeholder="Current Address"
          />
          <label for="lname">City</label>
          <input type="text" id="pcity" name="pcity" placeholder="City" />
          <label for="lname">Pin</label>
          <input type="text" id="ppin" name="ppin" placeholder="Pin" />
          <label for="lname">District</label>
          <input type="text" id="pdis" name="pdis" placeholder="District" />
          <label for="lname">State</label>
          <input type="text" id="pstate" name="pstate" placeholder="State" />
          <label for="lname">Police Station</label>
          <input
            type="text"
            id="pps"
            name="pps"
            placeholder="Police Station"
          />
        </div>

        <input type="submit" name="submit" value="Submit" />
      </form>
      <?php } ?>
    </div>
    
  </body>
 

  <script>
    function calculateAge(dateOfBirth) {
      // Parse the date of birth string to a Date object
      const birthDate = new Date(dateOfBirth);

      // Get the current date
      const currentDate = new Date();

      // Calculate the age
      let age = currentDate.getFullYear() - birthDate.getFullYear();

      // Check if the birthday has already occurred this year
      const birthMonth = birthDate.getMonth();
      const currentMonth = currentDate.getMonth();
      const birthDay = birthDate.getDate();
      const currentDay = currentDate.getDate();

      if (
        currentMonth < birthMonth ||
        (currentMonth === birthMonth && currentDay < birthDay)
      ) {
        // If the birthday hasn't occurred yet this year, subtract 1 from the age
        age--;
      }

      return age;
    }

    // Example usage:
   // const dateOfBirth = "2000-04-17"; // Date format: "YYYY-MM-DD"
    
    //console.log(age); // Output: (depends on the current date) e.g., 33
    const dob = document.getElementById("dob");
    const age=document.getElementById("age");
    dob.addEventListener("input", function () {
      const value = dob.value;
      const a = calculateAge(value);
      age.value=a;
      
    });
    const same=document.getElementById("same");
    same.addEventListener("click",()=>{
      if(same.value==0){
        same.value=1;
      }else{
        same.value=0;
      }
      if(same.value==1){
           
        const ca=document.getElementById("ca").value;
        const city=document.getElementById("city").value;
        const cpin=document.getElementById("cpin").value;
        const cdis=document.getElementById("cdis").value;
        const cstate=document.getElementById("cstate").value;
        const cps=document.getElementById("cps").value;
        document.getElementById("pa").value=ca;
        document.getElementById("pcity").value=city;
        document.getElementById("ppin").value=cpin;
        document.getElementById("pdis").value=cdis;
        document.getElementById("pstate").value=cstate;
        document.getElementById("pps").value=cps;
      }else{
        document.getElementById("pa").value="";
        document.getElementById("pcity").value="";
        document.getElementById("ppin").value="";
        document.getElementById("pdis").value="";
        document.getElementById("pstate").value="";
        document.getElementById("pps").value="";

      }
      // if(same.checked){
      //   console.log("clicked");
      //   const ca=document.getElementById("ca").value;
      //   const city=document.getElementById("city").value;
      //   const cpin=document.getElementById("cpin").value;
      //   const cdis=document.getElementById("cdis").value;
      //   const cstate=document.getElementById("cstate").value;
      //   const cps=document.getElementById("cps").value;
      //   document.getElementById("pa").value=ca;
      // }else{
      //   document.getElementById("ca").value="";
      // }
    })
  </script>
</html>
