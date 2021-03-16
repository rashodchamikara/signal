<?php

$errors = [];
$errorMessage = '';
$successMessage = '';

$link = mysqli_connect("localhost", "root", "", "signalcalendar");


if (!empty($_POST)) {
    $pname = $_POST['pname'];
    $pemail = $_POST['pemail'];
    $ptel = $_POST['ptel'];
    $pinputPassword = $_POST['pinputPassword'];
    $cname = $_POST['cname'];
    $cinputPassword = $_POST['cinputPassword'];

    if (empty($pname)) {
        $errors[] = 'Name is empty';
    }

    if (empty($pemail)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($pemail, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if(strlen($ptel)>10){
      $errors[] = 'Please enter a valid phone number';
    }

    if(!empty($pinputPassword)) {
        if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $pinputPassword)) {
          $errors[] = "the password does not meet the requirements!";
        }
    } elseif(!empty($pinputPassword)) {
        $errors[] = "Please Check If You've Entered Or Confirmed Your Password!";
    } else {
        $errors[] = "Please enter password   ";
    }

    if (empty($cname)) {
        $errors[] = 'Name is empty';
    }

    if(!empty($cinputPassword)) {
        if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $cinputPassword)) {
          $errors[] = "the password does not meet the requirements!";
        }
    } elseif(!empty($cinputPassword)) {
        $errors[] = "Please Check If You've Entered Or Confirmed Your Password!";
    } else {
        $errors[] = "Please enter password";
    }


	if (empty($errors)) {
		
		// Attempt insert query execution
		$sql = "INSERT INTO sc_users (pname, pemail, ptel, pinputPassword, cname, cinputPassword) VALUES ('$pname', '$pemail','$ptel', '$pinputPassword', '$cname', '$cinputPassword')";
		if(mysqli_query($link, $sql)){
			echo "Records added successfully.";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
		
		// Close connection
		mysqli_close($link);
  } else {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Signal | Registration</title>
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
                <?php echo((!empty($errorMessage)) ? $errorMessage : $successMessage); ?>
                  <form method="POST" action="" id="registration-form">
                    <h1 class="parent-title">Parent Registration</h1>
                    <div class="row">
                      <div class="col">
                        <input
                          type="text"
                          id="pname"
                          name="pname"
                          class="form-control"
                          placeholder="Name"
                        />
                      </div>
                      <div class="col">
                        <input
                          type="email"
                          id="pemail"
                          name="pemail"
                          class="form-control"
                          placeholder="Email"
                        />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <input
                          type="tel"
                          id="ptel"
                          name="ptel"
                          class="form-control"
                          placeholder="Contact Number"
                        />
                      </div>
                      <div class="col">
                        <input
                          type="password"
                          class="form-control"
                          id="pinputPassword"
                          name="pinputPassword"
                          placeholder="Password"
                        />
                      </div>
                    </div>
                    <h1 class="parent-title">Child Registration</h1>
                    <div class="row">
                      <div class="col">
                        <input
                          type="text"
                          id="cname"
                          name="cname"
                          class="form-control"
                          placeholder="Name"
                        />
                      </div>
                      <div class="col">
                        <input
                          type="password"
                          id="cinputPassword"
                          class="form-control"
                          name="cinputPassword"
                          placeholder="Password"
                        />
                      </div>
                    </div>
                    <button id="submit" type="submit" class="btn btn-primary mb-2">
                      Submit
                    </button>
                  </form>
                  <div id="success"> 
                		<span>
                    		<p>You have successfully registered!</p>
                		</span>
              		</div>
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

    <script>

	$('#submit').on('click', (e) => {
		e.preventDefault();
		$('#registration-form').submit();
		console.log('Form submitted');
	});

	$("#registration-form").validate({
    rules: {
        pname: {
          required: true
        },
        pemail: {
          required: true,
          email: true
        },
        ptel: {
          required: true
        },
        pinputPassword: {
          minlength : 8
        },
        cname: {
          required: true
        },
        cinputPassword: {
          minlength : 8
        },

    },
    submitHandler: function(form) {
      console.log('Form is valid');
      $.ajax({
        url: 'login.php',
        type: form.method,
        data: $(form).serialize(),
        success: function(data) {
		    $('#registration-form :input').attr('disabled', 'disabled');
            $('#registration-form').fadeTo("slow", 0.15, function () {
                $(this).find(':input').attr('disabled', 'disabled');
                $(this).find('label').css('cursor', 'default');
                $('#success').fadeIn();
            });
		    },
        error: function(data) {
          console.log(data);
        }
      });
      return false;
    }
  });
	 </script>
  </body>
</html>
