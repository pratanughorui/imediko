<?php
session_start();
if(!isset($_SESSION['user_type'])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- ----------Font Awesome 6.3.0---------- -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- ------------------------ Google Fonts---------------------- -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Anton&family=Kaushan+Script&family=Poppins:wght@500&family=Righteous&family=Roboto:wght@100&family=Shadows+Into+Light&display=swap"
      rel="stylesheet"
    />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        border: none;
        font-family: "Poppins", sans-serif;
      }
      html {
        font-size: 62.5%;
        font-family: "Roboto", sans-serif;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
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
        font-size: 9.5rem;
        color: red;
        text-shadow: 0.2rem 0.2rem 0.2rem rgba(1, 1, 1, 1.3);
        top: 17%;
        left: 50%;
        position: absolute;
        transform: translate(-50%, -50%);
      }
      .navbar {
        width: 25rem;
        height: 100%;
        background-color: #262626;
        position: fixed;
        top: 0;
        right: -270rem;
        display: flex;
        justify-content: center;
        align-items: center;
        /* 			border-radius: 30% 0 0 90%; */
        transition: right 0.8s cubic-bezier(1, 0, 0, 1);
      }
      .change {
        right: 0;
      }
      .hamburger-menu {
        width: 3rem;
        height: 2.5rem;
        /* background-color: red; */
        position: fixed;
        top: 2.5rem;
        right: 2.5rem;
        cursor: pointer;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
      }
      .line {
        width: 100%;
        height: 0.3rem;
        background-color: blue;
        transition: all 0.8s;
      }
      /* ---------------rotation-------------- */
      .change #line-1 {
        transform: rotateZ(-405deg) translate(-0.8rem, 0.3rem);
      }
      .change #line-2 {
        opacity: 0;
      }
      .change #line-3 {
        transform: rotateZ(405deg) translate(-0.8rem, -0.3rem);
      }
      /* ------------------------------------------ */
      .nav-item {
        list-style: none;
        margin: 2.5rem;
      }
      .nav-link {
        text-decoration: none;
        color: #fff;
        font-size: 1.8rem;
        font-weight: 300;
        text-transform: uppercase;
        letter-spacing: 0.1rem;
        position: relative;
        padding: 0.3rem 0;
      }
      .navbar span {
        position: absolute;
        top: 20%;
        display: flex;
        justify-content: center;
        align-items: flex-start;
      }

      .nav-link::before,
      .nav-link::after {
        content: "";
        width: 100%;
        height: 0.2rem;
        background-color: seagreen;
        position: absolute;
        left: 0;
        transform: scaleX(0);
        transition: transform 0.5s;
      }
      .nav-link::after {
        bottom: 0;
        transform-origin: right;
      }
      .nav-link::before {
        top: 0;
        transform-origin: left;
      }
      .nav-link:hover::before,
      .nav-link:hover::after {
        transform: scaleX(1);
      }

      /* my styles */

      /*------------form-----------------*/
      .form_container {
        max-width: 600px;
        position: relative;
        margin: 0 auto;
        top: 40%;
        padding: 20px;
      }

      form {
        padding: 20px;
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

      /* Media Queries for Responsive Design */

      /* For screens with a width less than 600px */
      @media (max-width: 600px) {
        .form_container {
          max-width: 100%;
          padding: 10px;
        }
        form {
          padding: 10px;
        }
      }

      /* For screens with a width less than 400px */
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
    <title>iMediko</title>
  </head>
  <body>
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
      <!-- ----------Navbar Start---------- -->
      <nav class="navbar">
        <span
          ><a href="http://peerssymantech.com" target="_blank"
            ><img
              src="./pics/logo.png"
              alt="logo"
              width="50"
              height="50"
              class="d-inline-block align-content-xl-center" /></a
        ></span>
        <div class="hamburger-menu">
          <div class="line" id="line-1"></div>
          <div class="line" id="line-2"></div>
          <div class="line" id="line-3"></div>
        </div>
        <ul class="nav-list">
          <li class="nav-item">
            <a href="logout.php" class="nav-link">logout</a>
          </li>

          <li class="nav-item">
            <a href="patreg.php" class="nav-link">Patient Reg.</a>
          </li>
          <?php
          if($_SESSION['user_type']=='doctor'){

          
          ?>
          <li class="nav-item">
            <a href="docdesk.html" class="nav-link">Patient Diagnosis</a>
          </li>
          <li class="nav-item">
            <a href="patchkup.php" class="nav-link">Preliminary checkup</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Prescription</a>
          </li>
          <?php } ?>
          <!-- <li class="nav-item"><a href="#" class="nav-link"  target="_blank">Fifth</a></li>
					<li class="nav-item"><a href="#" class="nav-link"  target="_blank">sixth</a></li> -->
        </ul>
      </nav>
      <!-- ----------Navbar End----------- -->
    </div>
    <script>
      const menuIcon = document.querySelector(".hamburger-menu");
      const navbar = document.querySelector(".navbar");
      menuIcon.addEventListener("click", () => {
        navbar.classList.toggle("change");
      });
    </script>
    <!-- ===================================================================================== -->
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
		--></body>
</html>
