<?php
include 'db.php';

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["sid"])){
  header("location: index.php");
  exit;
}

if(isset($_POST['submit']) &&  isset($_POST['pname']) && isset($_POST['pinputPassword'])){

    $form_sucsess = FALSE;

    $uname = mysqli_real_escape_string($link,$_POST['pname']);
    $salted_pass = hash('sha256',PASSWORD_SALT.$_POST['pinputPassword'].PASSWORD_SALT);

    if ($uname != "" && $salted_pass != ""){

        $sql_query = "select * from sc_users where user_email='".$uname."' and 
        (user_parent_password='".$salted_pass."' OR user_child_password='".$salted_pass."') ";
        // echo $sql_query;
        $result = mysqli_query($link,$sql_query);
        $row = mysqli_fetch_array($result);

        
        if(count($row)>0){

           $session_value = createAuthCode(15).time();

           if($row['user_parent_password']==$salted_pass){
             //parent logged in
            $login_type = 1;
           }elseif($row['user_child_password']==$salted_pass){
            // child logged in
            $login_type = 2;
           }

           $form_sucsess = TRUE;
           // now add these data to seeion table 
           $SQL_INSERT = "INSERT INTO sc_sessions (ses_user_id,ses_value,ses_log_type) VALUES ('".$row['user_id']."','".$session_value."','".$login_type."'  )";
           // echo $SQL_INSERT;
           // exit();
           $result = mysqli_query($link,$SQL_INSERT);

           $_SESSION['sid'] = $session_value;

           header('location: home.php');
           exit();


        }
    }

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Signal | Login</title>
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
  </head>

  <body>
    <div class="main-bg-wrapper">
      <div class="nav-main-wrapper">
        <div class="container">
          <div class="content-wrapper">
            <div class="logo-wrapper">
              <img src="./images/logo-signal.png" alt="" />
            </div>
          </div>
        </div>
      </div>

      <div class="login-main-wrapper">
        <div class="container">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-6">
                <div class="login-parent-wrapper">
                  <form method="POST" action="" id="login-form">
                    <h1 class="parent-title">Login</h1>
                    <div class="row">
                      <div class="col">
                        <input
                          type="text"
                          id="pname"
                          name="pname"
                          class="form-control"
                          placeholder="Name" required
                        />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <input
                          type="password"
                          class="form-control"
                          id="pinputPassword"
                          name="pinputPassword"
                          placeholder="Password" required
                        />
                      </div>
                    </div>
                    <button id="submit" type="submit" class="btn btn-primary mb-2" name="submit">
                      Sign In
                    </button>
                    <div class="row">
                      <div class="col">
                        <?PHP if(isset($form_sucsess)){
                          if($form_sucsess==FALSE){
                            ?>
                            <p style="color: red">Invalid login details.</p>
                            <?PHP
                          }
                        }?>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="img-wrapper">
                  <img src="./images/mom-child.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>

    
  </body>
</html>
