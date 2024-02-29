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

     
      .maindiv {
        height: 100vh;
        width: 100%;
        background-image: linear-gradient(
            45deg,
            rgba(13, 70, 178, 0.55),
            rgba(239, 248, 173, 0.55)
          ),
          url("../pics/bg-1.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
      }
      .maindiv h1 {
        font-family: "Righteous", cursive;
        font-size: 8rem;
     
        color: red;
        text-shadow: 0.2rem 0.2rem 0.2rem rgba(1, 1, 1, 1.3);
        top: 12%;
        left: 50%;
        position: absolute;
        transform: translate(-50%, -50%);
      }
      .form_container {
        max-width: 600px;
        position: relative;
        margin: 0 auto;
        top: 38%;
        padding: 20px;
      }
      form {
        padding: 28px;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
      }

      h2 {
        text-align: center;
        margin-bottom: 20px;
      }

      .form-group {
        margin-bottom: 20px;
      }

      label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
      }

      input,
      textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }

      button {
        background-color: #4caf50;
        color: #ffffff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      @media (max-width: 600px) {
        .form_container {
          max-width: 100%;
          padding: 10px;
        }
        form {
          padding: 10px;
        }
      }
      @media (max-width: 400px) {
        input,
        textarea,
        button {
          font-size: 14px;
        }
      }
      /*--------------------form--------------- */
      @media (max-width: 1000px) {
      }
      @media (max-width: 998px) {
        html {
          font-size: 55%;
        }
      }
      @media (max-width: 768px) {
        html {
          font-size: 45%;
        }
        .navbar {
          display: flex;
          flex-direction: column;
          justify-content: center;
        }
        .navbar span {
          position: absolute;
          top: 20%;
        }
      }

      @media only screen and (max-width: 1000px) {
        .navbar {
          width: 40%;
          /* right: -100rem; */
        }
      }
      @media only screen and (max-width: 500px) {
        .navbar {
          width: 100%;
        }
      }
      
    </style>
  </head>
  <body>
    <?php include 'navbar.php' ?>
    <!--------------------------- main container----------------------------------------------------------->
  
    <div class="container maindiv">
    <h1>iMediko</h1>
    <div class="form_container">
        <form action="data_dashboard.php" method="post">
          <h2>Patient Information</h2>
          <div class="form-group">
            <label for="name">Patient Id:</label>
            <input type="text" id="name" name="p_id" />
          </div>
          <h2>OR</h2>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="p_email" />
          </div>

          <div class="form-group">
            <button name="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
    </body>
</html>
