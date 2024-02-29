<?php
session_start();
if(!isset($_SESSION['user_type'])){
  header("Location: index.php");
}
?>
<!doctype html>
<html lang="en" oncontextmenu="return false">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- ----------Font Awesome 6.3.0---------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ------------------------ Google Fonts---------------------- -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Kaushan+Script&family=Poppins:wght@500&family=Righteous&family=Roboto:wght@100&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <!-- ------------------------ Bootstrap Datepicker--------------------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <!-- ------------------------------------------------------------------------------------------------------------ -->
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            border: none;
        }
        :root{
            --trans: all .3s linear;
        }
        html{
            font-size: 62.5%;
        /* 	font-family: 'Anton', sans-serif; */
        /* 	font-family: 'Kaushan Script', cursive; */
        /* 	font-family: 'Poppins', sans-serif; */
        /* 	font-family: 'Righteous', cursive; */
            font-family: 'Roboto', sans-serif;
        /* 	font-family: 'Shadows Into Light', cursive; */
            color: #111;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        nav {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }
        
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .logo {
            font-size: 1.5rem;
        }
        h1{
            font-family: 'Poppins', cursive;
            font-size: 8rem;
        }
        h3{
            font-family: 'Poppins', cursive;
            font-size: 3.5rem;
            margin: 2rem 0;
        }
        p{
            font-family: 'Poppins', sans-serif;
            font-size: 1.5rem;
        }
        .maindiv{
            background-image: linear-gradient(45deg, rgba(255, 255, 255, 1.0), rgba(176, 173, 249, 1.0) );
            border-radius: .5rem;
            box-shadow: .2rem .3rem .2rem rgba(131, 131, 133,  .75);
            margin-top: 1.5rem;
            padding: 1.5rem;
        }
        .maindiv form span, .form-check-input, .form-control, label, .form-select, option{
            font-size: 1.6rem;
        }
        .form-check .form-check-input{
            margin-left: -0.5rem;margin-right: .5rem;
            margin-top: 1rem;
        }
        .form-check-label{
            margin: .5rem .3rem 0 .3rem;
        }
        .sub_btn{
            font-size: 1.5rem;
            border-radius: .5rem;
            text-transform: uppercase;
        }
        .frmhead p{
            padding: 0,5rem 0 0 0;
            font-style: italic;
            letter-spacing: .1rem;
        }
        .input-group-text{
        /* 	font-style: italic; */
            font-weight: bold;
        }
        /* .radiodiv{
            padding-left: 0;
        } */
        .top .row .col-md-4 .date_time{
            display: flex;
            justify-content:space-around;
            flex-wrap: wrap;
            width: 40vw;
            padding: 8px 4px;
        }
        .top .row .col-md-4 .frmhead p{
            font-size: 30px;
        }
        .top .row .col-md-4 .date_time .date, .time{
            width: fit-content;
            display: flex;
        }
        .top .row .col-md-4 .date_time .date p, .time p{
            margin: 4px 9px;
            font-size: medium;
            font-weight: 600;
        }
        .top .row .col-md-4 .date_time .date input{
            width: 10vw;
            font-size: large;
            border-radius: 4px;
            text-align: center;
        }
        .top .row .col-md-4 .date_time .time input{
            width: 4vw;
            font-size: large;
            border-radius: 4px;
        }
        .row .col-auto input{
            width: 4vw;
            text-align: center;
            font-size: medium;
        }
        .row .col-auto .input-group .icterus, .anaemia, .cyanosis, .tonque, .pharynx, .tonsils, .oedema, .clubbing, .b_g, .rh, .l_nodes, .l_nodes_p{
            width: 7vw;
            font-size: large;
        }
        .mt-4{
            display: flex;
            justify-content: space-between;
        }
        .row .mt-3 .btn{
            font-size: large;
            height: 4.5vh;
            width: 6vw;
            text-align: center;
            font-weight: 500;
        }
        .row .col-auto .text_area{
            width: 30vw;
            height: 10vh;
            border-radius: 10px;
        }
        .navbar{
            background: linear-gradient(45deg,rgba(176, 173, 249, 1.0),rgba(255, 255, 255, 1.0));
            font-size: large;
        }
        .navbar .navbar-toggler span{
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: medium;
        }
        .navbar .navbar-toggler:hover{
            background: rgb(150, 146, 252);
            transition: 0.3s;	
        }
        .navbar .container-fluid .navbar-collapse ul li a{
            color: black;
            margin: 0 10px;
        }
        .navbar .container-fluid .navbar-collapse ul li:hover{
            background: rgb(150, 146, 252);
            transition: 0.4s;
            /* border-bottom: 0.5px solid black; */
            text-decoration: underline;
        }
        @media(max-width: 1000px){
            .top .row .col-md-4 .date_time{
            display: flex;
            justify-content:space-around;
            flex-wrap: wrap;
            width: 100%;
        }
        .top .row .col-md-4 .date_time .date input{
            width: 60%;
            font-size: small;
            border-radius: 4px;
        }
        .top .row .col-md-4 .date_time .time input{
            width: 60%;
            font-size: small;
            border-radius: 4px;
            margin: 4px 0;
        }
        .top .row .col-md-4 .date_time .date p, .time p{
            margin: 4px 9px;
            font-size: small;
            font-weight: 500;
        }
        }
        @media(max-width: 800px){
            .row .col-auto .text_area{
            width: 25vw;
            height: 8vh;
            border-radius: 10px;
            font-size: small;
        }
            .row .mt-3 .btn{
            font-size: small;
            height: fit-content;
            width: fit-content;
            text-align: center;
            font-weight: 400;
        }
            .row .col-auto .input-group{
                width: fit-content;
            }
            .row .col-auto .input-group .tonque,.tonsils,.pharynx, .oedema, .clubbing, .b_g, .rh, .l_nodes, .l_nodes_p{
                width: max-content;
                height: 3.2vh;
                font-size: small;
            }
            .row .col-auto{
                margin-top: 2rem;
            } 
            .row .col-md-4 .input-group .id{
                width: 20%;
            }
            .row .col-auto .input-group .icterus, .anaemia, .cyanosis{
                width: max-content;
                height: 3.2vh;
                font-size: small;
            }
            .top .row .col-md-4 .date_time{
            display: flex;
            justify-content:space-around;
            flex-wrap: wrap;
            width: 100%;
        }
        .top .row .col-md-4 .frmhead p{
            font-size: calc(30px - 13px);
        }
        .top .row .col-md-4 .date_time .date input{
            width: 60%;
            font-size: small;
            border-radius: 4px;
        }
        .top .row .col-md-4 .date_time .time input{
            width: 40%;
            font-size: small;
            border-radius: 4px;
        }
        .top .row .col-md-4 .date_time .date p, .time p{
            margin: 4px 9px;
            font-size: small;
            font-weight: 500;
        }
        .mt-1{
            display: flex;
            flex-wrap: wrap;
        }
        .mt-1 .col-md-4{
            margin-top: 1rem;
            width: fit-content;
        }
        .mt-1 .col-md-4 input{
            width: 25% ;
        }
        }
        
        @media(max-width: 998px){
            html{
                font-size: 55%;
            }
        /* 	.radiodiv{
                display: block;
            } */
        
        }
        @media(max-width: 768px){
            html{
                font-size: 45%;
            }
            .radiodiv{
                display: block!important;
            }
            .navbar{
                font-size: small;
                font-weight: 500;
                text-decoration: none;
            }
        }
    </style>
    <title>iMediko</title>
  </head>
  <body>
    <!-- **********************navbar here*************************** -->

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="logout.php">logout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="patreg.php">Patient Registration</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Patient Diagnosis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="patchkup.php">Preliminary checkup</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Prescription</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- **********************navbar here*************************** -->
    
    <div class="container-fluid">
      <div class="text-center"><h3>General Examinations</h3></div>
      <div class="container maindiv">
        <form action="">
          <div class="top">
            <div class="row mt-1 position-relative">
              <div class="col-md-4">
                <div class="row frmhead"><p>G/E Details</p>
                </div>
              </div>
              <div class="col-md-4 d-flex position-absolute top-0 end-0">
                <div class="date_time">
                  <div class="date">
                    <p>Date</p>
                    <input type="date">
                  </div>
                  <div class="time">
                    <p>Time</p>
                    <input type="time">
                  </div>
                </div>
              </div>
          </div>
          <!-- ----------------------------------------------- -->
            <div class="row mt-1">
              <div class="col-auto mt-3">
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Pulse</span>
                <input type="text" class="ip w-25" placeholder="0" aria-label="pulse" aria-describedby="addon-wrapping">
                <span class="input-group-text" id="addon-wrapping">/min.</span>
              </div>
            </div>

            <div class="col-auto mt-3">
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Blood Pressure</span>
                <input type="text" class="ip w-25" placeholder="0" aria-label="bp" aria-describedby="addon-wrapping">
                <span class="input-group-text" id="addon-wrapping">mm of Hg</span>
              </div>
            </div>

            <div class="col-auto mt-3">
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Tempareture</span>
                <input type="text" class="ip w-25" placeholder="0" aria-label="temp" aria-describedby="addon-wrapping">
                <span class="input-group-text" id="addon-wrapping">&#8457</span>
              </div>
            </div>
            </div>
          <!-- ----------------------------------------------- -->
          <div class="row mt-4">
            <div class="col-auto mt-3">
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Icterus &nbsp&nbsp&nbsp</span>
                <div class="d-flex justify-content-between radiodiv">
                  <select class="icterus" name="" id="">
                    <option selected>--Nil--</option>
                    <option value="2">Option 1</option>
                    <option value="3">Option 2</option>
                    <option value="4">Option 3</option>
                    <option value="5">Option 4</option>
                    <option value="6">Option 5</option>
                    <option value="7">Option 6</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-auto mt-3">
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Anaemia</span>
                <div class="d-flex justify-content-between radiodiv">
                  <select class="anaemia" name="" id="">
                    <option selected>--Nil--</option>
                    <option value="2">Option 1</option>
                    <option value="3">Option 2</option>
                    <option value="4">Option 3</option>
                    <option value="5">Option 4</option>
                    <option value="6">Option 5</option>
                    <option value="7">Option 6</option>
                  </select>
                  <!-- ------- -->
                </div>
              </div>
            </div>
            <div class="col-auto mt-3">
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Cyanosis</span>
                <div class="d-flex justify-content-between radiodiv">
                  <select class="cyanosis" name="" id="">
                    <option selected>--Nil--</option>
                    <option value="2">Option 1</option>
                    <option value="3">Option 2</option>
                    <option value="4">Option 3</option>
                    <option value="5">Option 4</option>
                    <option value="6">Option 5</option>
                    <option value="7">Option 6</option>
                  </select>                     
                </div>
              </div>
            </div>
            <div class="col-auto mt-3">
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Juqular Vain Plus</span>
                <input type="text" class="id w-25" placeholder="0" aria-label="jvp" aria-describedby="addon-wrapping">
                <span class="input-group-text" id="addon-wrapping">/min</span>
              </div>
          </div>
          <div class="col-auto mt-3">
            <div class="input-group flex-nowrap">
              <span class="input-group-text" id="addon-wrapping">Tonque</span>
              <select class="tonque" name="" id="">
                <option selected>--Nil--</option>
                <option value="2">Option 1</option>
                <option value="3">Option 2</option>
                <option value="4">Option 3</option>
                <option value="5">Option 4</option>
                <option value="6">Option 5</option>
                <option value="7">Option 6</option>
              </select>
            </div>
          </div>
          </div>
          <!-- ----------------------------------------------- -->
          <div class="row mt-4">
            <div class="col-auto mt-3">
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Pharynx</span>
                <select class="pharynx" name="" id="">
                  <option selected>--Nil--</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                  <option value="4">Option 4</option>
                  <option value="5">Option 5</option>
                  <option value="6">Option 6</option>
                </select>
              </div>
            </div>
            <div class="col-auto mt-3">
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Tonsils</span>
                <select class="tonsils" name="" id="">
                  <option selected>--Nil--</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                  <option value="4">Option 4</option>
                  <option value="5">Option 5</option>
                  <option value="6">Option 6</option>
                </select>
              </div>
            </div>
            <div class="col-auto mt-3">
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Oedema</span>
                <select class="oedema" name="" id="">
                  <option selected>--Nil--</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                  <option value="4">Option 4</option>
                  <option value="5">Option 5</option>
                  <option value="6">Option 6</option>
                </select>
              </div>
            </div>
            <div class="col-auto mt-3">
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Clubbing</span>
                <select class="clubbing" name="" id="">
                  <option selected>--Nil--</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                  <option value="4">Option 4</option>
                  <option value="5">Option 5</option>
                  <option value="6">Option 6</option>
                </select>
              </div>
            </div>            
          </div>
          <!-- ----------------------------------------------- -->
          <div class="row mt-4">
            <div class="col-auto mt-3">
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Blood Group</span>
                <select class="b_g" name="" id="">
                  <option selected>--Nil--</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="AB">AB</option>
                  <option value="O">O</option>
                  <option value="O">Bombay..</option>
                </select>
              </div>
             </div>
             <div class="col-auto mt-3">
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">RH Factor</span>
                <select class="rh" name="" id="">
                  <option selected>--Nil--</option>
                  <option value="+">+/ Positive</option>
                  <option value="-">-/ Negative</option>
                </select>
              </div>
             </div>
          </div>
          <!-- ----------------------------------------------- -->
          <div class="row mt-4">
            <div class="col-auto mt-3">
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Lymph Nodes</span>
                <select class="l_nodes" name="" id="">
                  <option selected>--Nil--</option>
                  <option value="neck">Neck</option>
                  <option value="axilla">Axilla</option>
                  <option value="groin">Groin</option>
                </select>
              </div>
             </div>
             <div class="col-auto mt-3">
              <div class="input-group flex-wrap">
                <select class="l_nodes_p" name="" id="">
                  <option selected>--Nil--</option>
                  <option value="palpable">Palpable</option>
                  <option value="not palpable">Not Palpable</option>
                </select>
              </div>
             </div>
             <div class="d-grid gap-2 col-auto mt-3">
              <button type="button" class="btn btn-primary" id="go">Go</button>
            </div>
            <div class="col-auto mt-3">
              <input type="text" class="text_area" placeholder="Go details" aria-label="pstdisease" aria-describedby="addon-wrapping">
            </div>
          </div>
          <div class="row mt-4 d-flex flex-wrap">
            <div class="col-12 mt-3 mb-3">
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Past History</span>
                <input type="text" class="form-control" placeholder="Past Specific Disease" aria-label="pstdisease" aria-describedby="addon-wrapping">
              </div>
             </div>
          </div>
          <!-- ----------------------------------------------- -->
           <div class="row">
            <div class="col-12">
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Any Other Info</span>
                <input type="text" class="form-control" placeholder="Other Allergy(if any)" aria-label="othrallergy" aria-describedby="addon-wrapping">
              </div>
             </div>
          </div>
          <!-- ----------------------------------------------- -->
          <!-- button remaining -->
          <div class="d-grid gap-2 col-12 mt-3">
            <button class="btn btn-primary sub_btn" type="button">Save</button>
          </div>
          <div class="d-grid gap-2 col-12 mt-3">
            <button class="btn btn-primary sub_btn" type="button">Done</button>
          </div>

        </form>
      </div>
    </div>
    
    <!-- ================================================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
    $(function(){
    $('#datepicker').datepicker({autoclose:true});
    });
    </script>
    <!-- Script for go function -->
    <Script src="./JS/geDetails.js"></Script>
  </body>
</html>