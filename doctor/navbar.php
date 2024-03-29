<?php


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
      a {
        text-decoration: none;
        outline: 0;
        color: inherit;
      }
      body {
        font-family: Raleway, Calibri;
      }

      .inliner {
        display: inline-block;
        vertical-align: middle;
      }

      .inline {
        display: inline-block;
      }
      .vtmiddle {
        vertical-align: middle;
      }
      .vttop {
        vertical-align: top;
      }
      .vtbottom {
        vertical-align: bottom;
      }
      .go-left {
        float: left;
      }
      .go-right {
        float: right;
      }
      .clearfix {
        clear: both;
      }
      .white {
        color: #fff;
      }
      .black {
        color: #000;
      }
      .red {
        color: red;
      }
      .yellow {
        color: #ff0;
      }
      .green {
        color: #0f0;
      }
      .blue {
        color: #00f;
      }
      .cyan {
        color: #0ff;
      }
      .magenta {
        color: #f0f;
      }
      .fs4 {
        font-size: 4px;
      }
      .fs5 {
        font-size: 5px;
      }
      .fs8 {
        font-size: 8px;
      }
      .fs10 {
        font-size: 10px;
      }
      .fs14 {
        font-size: 14px;
      }
      .fs15 {
        font-size: 15px;
      }
      .fs18 {
        font-size: 18px;
      }
      .fs20 {
        font-size: 20px;
      }
      .fs25 {
        font-size: 25px;
      }
      .fs30 {
        font-size: 30px;
      }
      .fw100 {
        font-weight: 100;
      }
      .fw200 {
        font-weight: 200;
      }
      .fw300 {
        font-weight: 300;
      }
      .fw400 {
        font-weight: 400;
      }
      .fw500 {
        font-weight: 500;
      }
      .fw600 {
        font-weight: 600;
      }
      .fw700 {
        font-weight: 700;
      }
      .fw800 {
        font-weight: 800;
      }
      .verdana {
        font-family: Verdana;
      }
      .calibri {
        font-family: Calibri;
      }
      .consolas {
        font-family: Consolas;
      }
      .comic {
        font-family: Comic Sans MS;
      }
      .jokerman {
        font-family: Jokerman;
      }
      .serif {
        font-family: Serif;
      }
      .upper {
        text-transform: uppercase;
      }
      .lower {
        text-transform: lowercase;
      }
      .capitalize {
        text-transform: capitalize;
      }
      .centralize {
        text-align: center;
      }
      .left {
        text-align: left;
      }
      .right {
        text-align: right;
      }
      .justify {
        text-align: justify;
      }
      .h100 {
        height: 100%;
      }
      .w100 {
        width: 100%;
      }
      .marg2 {
        margin: 2px;
      }
      .padd2 {
        padding: 2px;
      }
      .marg5 {
        margin: 5px;
      }
      .padd5 {
        padding: 5px;
      }
      .marg10 {
        margin: 10px;
      }
      .padd10 {
        padding: 20px;
      }
      .marg20 {
        margin: 20px;
      }
      .padd20 {
        padding: 10px;
      }
      .mp5 {
        margin: 5px;
        padding: 5px;
      }
      .mp10 {
        margin: 10px;
        padding: 10px;
      }
      .mp20 {
        margin: 20px;
        padding: 20px;
      }

      .pos-fixed {
        position: fixed;
      }
      .pos-relative {
        position: relative;
      }
      .pos-absolute {
        position: absolute;
      }
      .pointer {
        cursor: pointer;
      }
      .onlypc {
        display: inline-blockt;
      }
      .onlyphone {
        display: none;
      }
      body::-webkit-scrollbar {
        width: 10px;
      }
      body::-webkit-scrollbar-track {
        width: 10px;
        background: #dcdcdc;
      }
      body::-webkit-scrollbar-thumb {
        background: #234187;
        width: 10px;
        height: 0;
      }
      input::-webkit-inner-spin-button,
      input::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }
      .arrow_box {
        position: relative;
        background: #fff;
        margin-right: -100px;
      }
      .arrow_box:after,
      .arrow_box:before {
        bottom: 100%;
        left: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
      }
      .arrow_box:after {
        border-color: rgba(255, 255, 255, 0);
        border-bottom-color: #fff;
        border-width: 8px;
        margin-left: -8px;
      }
      .arrow_box:before {
        border-color: rgba(18, 18, 18, 0);
        border-bottom-color: #121212;
        border-width: 9px;
        margin-left: -9px;
      }
      .menuToggle {
        color: #234187;
        margin: 10px 15px;
      }
      .navigation {
        top: 0;
        width: 100%;
        position: fixed;
        z-index: 1000;
        background: rgba(255, 255, 255, 0.8);
      }
      .menu {
        margin-right: 100px;
      }
      .logo img {
        height: 30px;
        width: 30px;
        margin: 5px;
      }
      .logo span.name {
        font-size: 1.3em;
        font-family: "Kaushan Script", cursive;
        color: #234187;
      }
      .menu-btn {
        margin-top: 5px;
        padding: 10px 20px;
        font-size: 1.2em;
        font-family: "Source Code Pro", monospace;
        color: #234187;
        border-bottom: 2px outset rgba(255, 255, 255, 0);
        transition: 0.5s;
        -webkit-transition: 0.5s;
        -moz-transition: 0.5s;
        -ms-transition: 0.5s;
        -o-transition: 0.5s;
      }
      .menu-btn:hover {
        background: #fff;
        color: #234187;
        box-shadow: 0 0 1px #121212;
        transition: 0.5s;
        -webkit-transition: 0.5s;
        -moz-transition: 0.5s;
        -ms-transition: 0.5s;
        -o-transition: 0.5s;
      }
      .menu-btn.active {
        background: #fff;
        color: #234187;
        box-shadow: 0 0 1px #121212;
      }
      .breadcrumbs {
        margin: auto;
        padding: 0 10px;
        color: #121212;
      }
      .breadcrumbs .breadcrumb {
        font-size: 0.8em;
        font-family: Calibri;
        color: #234187;
      }

      @media screen and (max-width: 1295px) {
        .onlypc {
          display: none;
        }
        .onlyphone {
          display: inline-block;
        }
        h1.page-heads {
          font-size: 2.5em;
          color: #234187;
        }
        p.site-para {
          text-indent: 25px;
        }
        .menu {
          top: 100%;
          right: -25%;
          height: 100vh;
          width: 50%;
          background: rgba(255, 255, 255, 0.8);
          position: absolute;
        }
        .menu-btn {
          display: block !important;
        }
        .menu-btn:hover {
          padding-left: 25px;
          background: #fff;
        }
        #dp {
          position: absolute;
          height: 300px;
          width: 250px;
        }
        .cover-contents {
          width: 100% !important;
        }

        .dot {
          cursor: pointer;
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.6s ease;
        }
      }
    </style>
  </head>
  <body>
    <div class="navigation">
      <div class="logo inliner">
      <img src="logo.png" class="inliner" />
        <span class="name inliner"> imediko </span>
        <div class="breadcrumbs">&nbsp;&nbsp;</div>
      </div>
      <div class="menuToggle inliner go-right onlyphone">
        <i class="fa fa-bars fa-2x"></i>
      </div>
      <div class="menu inliner go-right onlypc invisible">
        <nav>
          <a href="Dashboard.php" title="Home"
            ><div class="menu-btn inliner active">Home</div></a
          >
        
          <a href="patreg.php" title="Registration"
            ><div class="menu-btn inliner">Registration</div></a
          >
          <a href="appoinment.php" title="Appointment"
            ><div class="menu-btn inliner">Appointment</div></a
          >
          <?php
          if($_SESSION["user_type"]=="doctor"){

          ?>
          <a href="diagnosis.php" title="Diagnosis"
            ><div class="menu-btn inliner">Diagnosis</div></a
          >
         
          <!-- <a href="blog" title="Blog"
            ><div class="menu-btn inliner">Prescription</div></a
          > -->
          <?php } ?>
          <a href="logout.php" title="logout"
            ><div class="menu-btn inliner">logout</div></a
          >
        </nav>
      </div>
      <div class="clearfix"></div>
    </div>
  </body>

  <script src="https://use.fontawesome.com/742ca76364.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script>
    $(document).ready(function () {
      //=====navigation
      $(".menuToggle").click(function () {
        var menu = $(".menu");
        if (menu.hasClass("invisible")) {
          $(".menuToggle i").toggleClass("fa-bars fa-times");
          $(".menu").removeClass("invisible");
          $(".menu").addClass("visible");
          menu.show("slow");
        }
      });
      $(document).mouseup(function (e) {
        var menu = $(".menu");
        if (!menu.is(e.target) && menu.has(e.target).length === 0) {
          if (menu.hasClass("visible")) {
            setTimeout(function () {
              $(".menuToggle i").toggleClass("fa-times fa-bars");
              $(".menu").removeClass("visible");
              $(".menu").addClass("invisible");
            }, 500);
            menu.hide("slow");
          }
        }
      });

      //=====radindrops
    });
  </script>
</html>
