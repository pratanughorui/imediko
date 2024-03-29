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
    <link rel="stylesheet" href="./css/style.css" />
    <title>iMediko</title>
  </head>
  <body>
    <div class="container-fluid mainherodiv">
      <!-- ----------Navbar Start---------- -->
      <nav class="navbar">
        <div class="container-fluid">
          <a
            class="navbar-brand txtlogo"
            href="http://peerssymantech.com"
            target="_blank"
          >
            <img
              src="./pics/logo.png"
              alt="logo"
              width="50"
              height="50"
              class="d-inline-block align-content-xl-center"
            />
            peers symantech
          </a>
          <a href="reg.html" class="reg">Register</a>
        </div>
      </nav>
      <!-- ----------Navbar End----------- -->
      <div class="row herorow">
        <!-- -------------------left part -->
        <div class="col-lg-7 col-sm-12">
          <div class="row leftrow">
            <div class="col-lg-10 col-12">
              <div class="row left1strow d-sm-flex">
                <div class="col-auto">
                  <figure>
                    <img
                      class="img-fluid img1 symimg"
                      src="./pics/symb_new.png"
                      alt="symbol"
                    />
                  </figure>
                </div>
                <div class="col-8 imediko">
                  <h1>iMediko</h1>
                </div>
              </div>
              <div class="row left2ndrow">
                <div class="col-12 doctor">
                  <h1>Doctor’s Desk</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- -------------------left part End -->
        <!-- -------------------right part -->
        <div class="col-lg-5 col-sm-12">
          <!-- <div class="col-md-10 col-12 bg-info"> -->
          <div class="container-fluid">
            <div class="row formrow">
              <div class="col-12">
                <div class="login">
                  <form action="data_index.php" method="post">
                    <div class="form-group">
                      <label for="email" class="font-weight-bold">Email</label>
                      <input
                        type="email"
                        class="form-control"
                        placeholder="Enter valid Email id"
                        id="email"
                        name="email"
                        require
                      />
                      <small class="form-text"
                        >We'll never share your email with anyone else.</small
                      >
                    </div>
                    <div class="form-group">
                      <label for="pass" class="font-weight-bold"
                        >Password</label
                      >
                      <input
                        type="Password"
                        class="form-control"
                        placeholder="Enter Password"
                        name="password"
                        id="pass"
                        require
                      />
                    </div>
                    <div class="d-grid gap-2">
                      <!-- <button type="submit" class="btn signin">Signin</button> -->
                      <button class="btn signin" name="submit">Signin</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- </div> -->
        </div>
        <!-- -------------------right part End -->
        <!-- ------------Footer Section Start---------  -->
        <div class="container-fluid btmdiv text-center">
          <div class="row">
            <div class="col-12">
              <p>&copy; PEERS SYMANTECH</p>
            </div>
          </div>
        </div>
        <!-- ------------Footer Section End---------  -->
      </div>
    </div>
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
    -->
  </body>
</html>
