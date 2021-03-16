<?php 
session_start();
if(!(isset($_SESSION['uname'])))
{
    header("Location: registration.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Signal | Calendar</title>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css?family=Oswald:400,700|Work+Sans:300,400,700"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/style.css" />

    <style>
      a.logout {
        color: #333 !important;
      }
    </style>
  </head>

  <body>
    <div class="main-bg-wrapper">
      <div class="nav-main-wrapper">
        <div class="container">
          <div class="content-wrapper">
            <div class="logo-wrapper">
              <img src="./images/campaign-logo.png" alt="" />
            </div>
            <div class="logout-btn">
              <a href="logout.php" class="logout">Logout</a>
            </div>
          </div>
        </div>
      </div>

      <div class="calendar-main-wrapper">
        <div class="container">
          <div class="content-wrapper">
            <div class="calendar-main-block">
              <div class="progress">
                <div
                  class="progress-value"
                  role="progressbar"
                  aria-valuenow="70"
                  aria-valuemin="0"
                  aria-valuemax="100"
                  style="width: 100%"
                >
                  <p class="progress-bar-text">70%</p>
                </div>
              </div>
              <div class="tooth-wrap">
                <img src="./images/tooth-chart.png" alt="" />
              </div>
              <div class="cal-head">
                <h1 class="cal-title">week one</h1>
              </div>
              <div class="cal-sub-head">
                <h1 class="cal-sub-title">you</h1>
              </div>
              <div class="calendar-grid-wrapper">
                <div class="calendar-grid-content">
                  <div class="calendar-grid-block">
                    <div class="cal-title-wrap">
                      <h1 class="cal-block-title">Monday</h1>
                    </div>
                    <div class="two-choices-wrap">
                      <div class="sun">
                        <img
                          src="./images/sun-unclicked.png"
                          id="imgClickAndChangeSun"
                          onclick="changeImageSun()"
                          alt=""
                        />
                      </div>
                      <div class="moon">
                        <img
                          src="./images/moon-unclicked.png"
                          id="imgClickAndChangeMoon"
                          onclick="changeImageMoon()"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="calendar-grid-content">
                  <div class="calendar-grid-block">
                    <div class="cal-title-wrap">
                      <h1 class="cal-block-title">Tuesday</h1>
                    </div>
                    <div class="two-choices-wrap">
                      <div class="sun">
                        <img
                          src="./images/sun-unclicked.png"
                          id="imgClickAndChangeSun1"
                          onclick="changeImageSun1()"
                          alt=""
                        />
                      </div>
                      <div class="moon">
                        <img
                          src="./images/moon-unclicked.png"
                          id="imgClickAndChangeMoon1"
                          onclick="changeImageMoon1()"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="calendar-grid-content">
                  <div class="calendar-grid-block">
                    <div class="cal-title-wrap">
                      <h1 class="cal-block-title">Wednesday</h1>
                    </div>
                    <div class="two-choices-wrap">
                      <div class="sun">
                        <img
                          src="./images/sun-unclicked.png"
                          id="imgClickAndChangeSun2"
                          onclick="changeImageSun2()"
                          alt=""
                        />
                      </div>
                      <div class="moon">
                        <img
                          src="./images/moon-unclicked.png"
                          id="imgClickAndChangeMoon2"
                          onclick="changeImageMoon2()"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="calendar-grid-content">
                  <div class="calendar-grid-block">
                    <div class="cal-title-wrap">
                      <h1 class="cal-block-title">Thursday</h1>
                    </div>
                    <div class="two-choices-wrap">
                      <div class="sun">
                        <img
                          src="./images/sun-unclicked.png"
                          id="imgClickAndChangeSun3"
                          onclick="changeImageSun3()"
                          alt=""
                        />
                      </div>
                      <div class="moon">
                        <img
                          src="./images/moon-unclicked.png"
                          id="imgClickAndChangeMoon3"
                          onclick="changeImageMoon3()"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="calendar-grid-content">
                  <div class="calendar-grid-block">
                    <div class="cal-title-wrap">
                      <h1 class="cal-block-title">Friday</h1>
                    </div>
                    <div class="two-choices-wrap">
                      <div class="sun">
                        <img
                          src="./images/sun-unclicked.png"
                          id="imgClickAndChangeSun4"
                          onclick="changeImageSun4()"
                          alt=""
                        />
                      </div>
                      <div class="moon">
                        <img
                          src="./images/moon-unclicked.png"
                          id="imgClickAndChangeMoon4"
                          onclick="changeImageMoon4()"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="calendar-grid-content">
                  <div class="calendar-grid-block">
                    <div class="cal-title-wrap">
                      <h1 class="cal-block-title">Saturday</h1>
                    </div>
                    <div class="two-choices-wrap">
                      <div class="sun">
                        <img
                          src="./images/sun-unclicked.png"
                          id="imgClickAndChangeSun5"
                          onclick="changeImageSun5()"
                          alt=""
                        />
                      </div>

                      <div class="moon">
                        <img
                          src="./images/moon-unclicked.png"
                          id="imgClickAndChangeMoon5"
                          onclick="changeImageMoon5()"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="calendar-grid-content">
                  <div class="calendar-grid-block">
                    <div class="cal-title-wrap">
                      <h1 class="cal-block-title">Sunday</h1>
                    </div>
                    <div class="two-choices-wrap">
                      <div class="sun">
                        <img
                          src="./images/sun-unclicked.png"
                          id="imgClickAndChangeSun6"
                          onclick="changeImageSun6()"
                          alt=""
                        />
                      </div>
                      <div class="moon">
                        <img
                          src="./images/moon-unclicked.png"
                          id="imgClickAndChangeMoon6"
                          onclick="changeImageMoon6()"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cal-sub-head">
                <h1 class="cal-sub-title">your parents/guardians</h1>
              </div>
              <div class="calendar-grid-wrapper">
                <div class="calendar-grid-content">
                  <div class="calendar-grid-block">
                    <div class="cal-title-wrap-m">
                      <h1 class="cal-block-title-m">Monday</h1>
                    </div>
                    <div class="two-choices-wrap">
                      <div class="sun">
                        <img
                          src="./images/sun-unclicked.png"
                          id="imgClickAndChangeSun7"
                          onclick="changeImageSun7()"
                          alt=""
                        />
                      </div>
                      <div class="moon">
                        <img
                          src="./images/moon-unclicked.png"
                          id="imgClickAndChangeMoon7"
                          onclick="changeImageMoon7()"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="calendar-grid-content">
                  <div class="calendar-grid-block">
                    <div class="cal-title-wrap-m">
                      <h1 class="cal-block-title-m">Tuesday</h1>
                    </div>
                    <div class="two-choices-wrap">
                      <div class="sun">
                        <img
                          src="./images/sun-unclicked.png"
                          id="imgClickAndChangeSun8"
                          onclick="changeImageSun8()"
                          alt=""
                        />
                      </div>
                      <div class="moon">
                        <img
                          src="./images/moon-unclicked.png"
                          id="imgClickAndChangeMoon8"
                          onclick="changeImageMoon8()"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="calendar-grid-content">
                  <div class="calendar-grid-block">
                    <div class="cal-title-wrap-m">
                      <h1 class="cal-block-title-m">Wednesday</h1>
                    </div>
                    <div class="two-choices-wrap">
                      <div class="sun">
                        <img
                          src="./images/sun-unclicked.png"
                          id="imgClickAndChangeSun9"
                          onclick="changeImageSun9()"
                          alt=""
                        />
                      </div>
                      <div class="moon">
                        <img
                          src="./images/moon-unclicked.png"
                          id="imgClickAndChangeMoon9"
                          onclick="changeImageMoon9()"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="calendar-grid-content">
                  <div class="calendar-grid-block">
                    <div class="cal-title-wrap-m">
                      <h1 class="cal-block-title-m">Thursday</h1>
                    </div>
                    <div class="two-choices-wrap">
                      <div class="sun">
                        <img
                          src="./images/sun-unclicked.png"
                          id="imgClickAndChangeSun10"
                          onclick="changeImageSun10()"
                          alt=""
                        />
                      </div>
                      <div class="moon">
                        <img
                          src="./images/moon-unclicked.png"
                          id="imgClickAndChangeMoon10"
                          onclick="changeImageMoon10()"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="calendar-grid-content">
                  <div class="calendar-grid-block">
                    <div class="cal-title-wrap-m">
                      <h1 class="cal-block-title-m">Friday</h1>
                    </div>
                    <div class="two-choices-wrap">
                      <div class="sun">
                        <img
                          src="./images/sun-unclicked.png"
                          id="imgClickAndChangeSun11"
                          onclick="changeImageSun11()"
                          alt=""
                        />
                      </div>
                      <div class="moon">
                        <img
                          src="./images/moon-unclicked.png"
                          id="imgClickAndChangeMoon11"
                          onclick="changeImageMoon11()"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="calendar-grid-content">
                  <div class="calendar-grid-block">
                    <div class="cal-title-wrap-m">
                      <h1 class="cal-block-title-m">Saturday</h1>
                    </div>
                    <div class="two-choices-wrap">
                      <div class="sun">
                        <img
                          src="./images/sun-unclicked.png"
                          id="imgClickAndChangeSun12"
                          onclick="changeImageSun12()"
                          alt=""
                        />
                      </div>
                      <div class="moon">
                        <img
                          src="./images/moon-unclicked.png"
                          id="imgClickAndChangeMoon12"
                          onclick="changeImageMoon12()"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="calendar-grid-content">
                  <div class="calendar-grid-block">
                    <div class="cal-title-wrap-m">
                      <h1 class="cal-block-title-m">Sunday</h1>
                    </div>
                    <div class="two-choices-wrap">
                      <div class="sun">
                        <img
                          src="./images/sun-unclicked.png"
                          id="imgClickAndChangeSun13"
                          onclick="changeImageSun13()"
                          alt=""
                        />
                      </div>
                      <div class="moon">
                        <img
                          src="./images/moon-unclicked.png"
                          id="imgClickAndChangeMoon13"
                          onclick="changeImageMoon13()"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-wrapper">
        <div class="container">
          <div class="content-wrapper">
            <div class="footer-block-cal">
              <div class="world-logo-wrap">
                <img src="./images/world-logo.png" alt="" />
              </div>
              <div class="signal-main-logo-wrap">
                <div class="sinhala-logo-sub-wrap">
                  <img src="./images/Sinhala-Logo.png" alt="" />
                </div>
                <div class="signal-en-logo">
                  <img src="./images/signal-res.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom-image-wrapper">
        <div class="image-block-1">
          <img src="./images/Asset 1.png" alt="" />
        </div>
        <div class="image-block-2">
          <img src="./images/Asset-2.png" alt="" />
        </div>
      </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
      function changeImageSun() {
        if (
          document.getElementById("imgClickAndChangeSun").src ==
          "./images/sun-color.png"
        ) {
          document.getElementById("imgClickAndChangeSun").src =
            "./images/sun-color.png";
        } else {
          document.getElementById("imgClickAndChangeSun").src =
            "./images/sun-color.png";
        }
      }
    </script>
    <script>
      function changeImageSun1() {
        if (
          document.getElementById("imgClickAndChangeSun1").src ==
          "./images/sun-color.png"
        ) {
          document.getElementById("imgClickAndChangeSun1").src =
            "./images/sun-color.png";
        } else {
          document.getElementById("imgClickAndChangeSun1").src =
            "./images/sun-color.png";
        }
      }
    </script>
    <script>
      function changeImageSun2() {
        if (
          document.getElementById("imgClickAndChangeSun2").src ==
          "./images/sun-color.png"
        ) {
          document.getElementById("imgClickAndChangeSun2").src =
            "./images/sun-color.png";
        } else {
          document.getElementById("imgClickAndChangeSun2").src =
            "./images/sun-color.png";
        }
      }
    </script>
    <script>
      function changeImageSun3() {
        if (
          document.getElementById("imgClickAndChangeSun3").src ==
          "./images/sun-color.png"
        ) {
          document.getElementById("imgClickAndChangeSun3").src =
            "./images/sun-color.png";
        } else {
          document.getElementById("imgClickAndChangeSun3").src =
            "./images/sun-color.png";
        }
      }
    </script>
    <script>
      function changeImageSun4() {
        if (
          document.getElementById("imgClickAndChangeSun4").src ==
          "./images/sun-color.png"
        ) {
          document.getElementById("imgClickAndChangeSun4").src =
            "./images/sun-color.png";
        } else {
          document.getElementById("imgClickAndChangeSun4").src =
            "./images/sun-color.png";
        }
      }
    </script>
    <script>
      function changeImageSun5() {
        if (
          document.getElementById("imgClickAndChangeSun5").src ==
          "./images/sun-color.png"
        ) {
          document.getElementById("imgClickAndChangeSun5").src =
            "./images/sun-color.png";
        } else {
          document.getElementById("imgClickAndChangeSun5").src =
            "./images/sun-color.png";
        }
      }
    </script>
    <script>
      function changeImageSun6() {
        if (
          document.getElementById("imgClickAndChangeSun6").src ==
          "./images/sun-color.png"
        ) {
          document.getElementById("imgClickAndChangeSun6").src =
            "./images/sun-color.png";
        } else {
          document.getElementById("imgClickAndChangeSun6").src =
            "./images/sun-color.png";
        }
      }
    </script>
    <script>
      function changeImageSun7() {
        if (
          document.getElementById("imgClickAndChangeSun7").src ==
          "./images/sun-color.png"
        ) {
          document.getElementById("imgClickAndChangeSun7").src =
            "./images/sun-color.png";
        } else {
          document.getElementById("imgClickAndChangeSun7").src =
            "./images/sun-color.png";
        }
      }
    </script>
    <script>
      function changeImageSun8() {
        if (
          document.getElementById("imgClickAndChangeSun8").src ==
          "./images/sun-color.png"
        ) {
          document.getElementById("imgClickAndChangeSun8").src =
            "./images/sun-color.png";
        } else {
          document.getElementById("imgClickAndChangeSun8").src =
            "./images/sun-color.png";
        }
      }
    </script>
    <script>
      function changeImageSun9() {
        if (
          document.getElementById("imgClickAndChangeSun9").src ==
          "./images/sun-color.png"
        ) {
          document.getElementById("imgClickAndChangeSun9").src =
            "./images/sun-color.png";
        } else {
          document.getElementById("imgClickAndChangeSun9").src =
            "./images/sun-color.png";
        }
      }
    </script>
    <script>
      function changeImageSun10() {
        if (
          document.getElementById("imgClickAndChangeSun10").src ==
          "./images/sun-color.png"
        ) {
          document.getElementById("imgClickAndChangeSun10").src =
            "./images/sun-color.png";
        } else {
          document.getElementById("imgClickAndChangeSun10").src =
            "./images/sun-color.png";
        }
      }
    </script>
    <script>
      function changeImageSun11() {
        if (
          document.getElementById("imgClickAndChangeSun11").src ==
          "./images/sun-color.png"
        ) {
          document.getElementById("imgClickAndChangeSun11").src =
            "./images/sun-color.png";
        } else {
          document.getElementById("imgClickAndChangeSun11").src =
            "./images/sun-color.png";
        }
      }
    </script>
    <script>
      function changeImageSun12() {
        if (
          document.getElementById("imgClickAndChangeSun12").src ==
          "./images/sun-color.png"
        ) {
          document.getElementById("imgClickAndChangeSun12").src =
            "./images/sun-color.png";
        } else {
          document.getElementById("imgClickAndChangeSun12").src =
            "./images/sun-color.png";
        }
      }
    </script>
    <script>
      function changeImageSun13() {
        if (
          document.getElementById("imgClickAndChangeSun13").src ==
          "./images/sun-color.png"
        ) {
          document.getElementById("imgClickAndChangeSun13").src =
            "./images/sun-color.png";
        } else {
          document.getElementById("imgClickAndChangeSun13").src =
            "./images/sun-color.png";
        }
      }
    </script>
    <script>
      function changeImageMoon() {
        if (
          document.getElementById("imgClickAndChangeMoon").src ==
          "./images/moon-color.png"
        ) {
          document.getElementById("imgClickAndChangeMoon").src =
            "./images/moon-color.png";
        } else {
          document.getElementById("imgClickAndChangeMoon").src =
            "./images/moon-color.png";
        }
      }
    </script>
    <script>
      function changeImageMoon1() {
        if (
          document.getElementById("imgClickAndChangeMoon1").src ==
          "./images/moon-color.png"
        ) {
          document.getElementById("imgClickAndChangeMoon1").src =
            "./images/moon-color.png";
        } else {
          document.getElementById("imgClickAndChangeMoon1").src =
            "./images/moon-color.png";
        }
      }
    </script>
    <script>
      function changeImageMoon2() {
        if (
          document.getElementById("imgClickAndChangeMoon2").src ==
          "./images/moon-color.png"
        ) {
          document.getElementById("imgClickAndChangeMoon2").src =
            "./images/moon-color.png";
        } else {
          document.getElementById("imgClickAndChangeMoon2").src =
            "./images/moon-color.png";
        }
      }
    </script>
    <script>
      function changeImageMoon3() {
        if (
          document.getElementById("imgClickAndChangeMoon3").src ==
          "./images/moon-color.png"
        ) {
          document.getElementById("imgClickAndChangeMoon3").src =
            "./images/moon-color.png";
        } else {
          document.getElementById("imgClickAndChangeMoon3").src =
            "./images/moon-color.png";
        }
      }
    </script>
    <script>
      function changeImageMoon4() {
        if (
          document.getElementById("imgClickAndChangeMoon4").src ==
          "./images/moon-color.png"
        ) {
          document.getElementById("imgClickAndChangeMoon4").src =
            "./images/moon-color.png";
        } else {
          document.getElementById("imgClickAndChangeMoon4").src =
            "./images/moon-color.png";
        }
      }
    </script>
    <script>
      function changeImageMoon5() {
        if (
          document.getElementById("imgClickAndChangeMoon5").src ==
          "./images/moon-color.png"
        ) {
          document.getElementById("imgClickAndChangeMoon5").src =
            "./images/moon-color.png";
        } else {
          document.getElementById("imgClickAndChangeMoon5").src =
            "./images/moon-color.png";
        }
      }
    </script>
    <script>
      function changeImageMoon6() {
        if (
          document.getElementById("imgClickAndChangeMoon6").src ==
          "./images/moon-color.png"
        ) {
          document.getElementById("imgClickAndChangeMoon6").src =
            "./images/moon-color.png";
        } else {
          document.getElementById("imgClickAndChangeMoon6").src =
            "./images/moon-color.png";
        }
      }
    </script>
    <script>
      function changeImageMoon7() {
        if (
          document.getElementById("imgClickAndChangeMoon7").src ==
          "./images/moon-color.png"
        ) {
          document.getElementById("imgClickAndChangeMoon7").src =
            "./images/moon-color.png";
        } else {
          document.getElementById("imgClickAndChangeMoon7").src =
            "./images/moon-color.png";
        }
      }
    </script>
    <script>
      function changeImageMoon8() {
        if (
          document.getElementById("imgClickAndChangeMoon8").src ==
          "./images/moon-color.png"
        ) {
          document.getElementById("imgClickAndChangeMoon8").src =
            "./images/moon-color.png";
        } else {
          document.getElementById("imgClickAndChangeMoon8").src =
            "./images/moon-color.png";
        }
      }
    </script>
    <script>
      function changeImageMoon9() {
        if (
          document.getElementById("imgClickAndChangeMoon9").src ==
          "./images/moon-color.png"
        ) {
          document.getElementById("imgClickAndChangeMoon9").src =
            "./images/moon-color.png";
        } else {
          document.getElementById("imgClickAndChangeMoon9").src =
            "./images/moon-color.png";
        }
      }
    </script>
    <script>
      function changeImageMoon10() {
        if (
          document.getElementById("imgClickAndChangeMoon10").src ==
          "./images/moon-color.png"
        ) {
          document.getElementById("imgClickAndChangeMoon10").src =
            "./images/moon-color.png";
        } else {
          document.getElementById("imgClickAndChangeMoon10").src =
            "./images/moon-color.png";
        }
      }
    </script>
    <script>
      function changeImageMoon11() {
        if (
          document.getElementById("imgClickAndChangeMoon11").src ==
          "./images/moon-color.png"
        ) {
          document.getElementById("imgClickAndChangeMoon11").src =
            "./images/moon-color.png";
        } else {
          document.getElementById("imgClickAndChangeMoon11").src =
            "./images/moon-color.png";
        }
      }
    </script>
    <script>
      function changeImageMoon12() {
        if (
          document.getElementById("imgClickAndChangeMoon12").src ==
          "./images/moon-color.png"
        ) {
          document.getElementById("imgClickAndChangeMoon12").src =
            "./images/moon-color.png";
        } else {
          document.getElementById("imgClickAndChangeMoon12").src =
            "./images/moon-color.png";
        }
      }
    </script>
    <script>
      function changeImageMoon13() {
        if (
          document.getElementById("imgClickAndChangeMoon13").src ==
          "./images/moon-color.png"
        ) {
          document.getElementById("imgClickAndChangeMoon13").src =
            "./images/moon-color.png";
        } else {
          document.getElementById("imgClickAndChangeMoon13").src =
            "./images/moon-color.png";
        }
      }
    </script>
  </body>
</html>
