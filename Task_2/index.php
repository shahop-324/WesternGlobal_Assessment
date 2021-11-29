<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./Style/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <title>Western Global Assessment</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img
          src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2048px-Google_%22G%22_Logo.svg.png"
          width="30"
          height="30"
          alt=""
        />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Contact us</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="hero-section"></div>
    <div
      class="
        hero-typography
        d-flex
        flex-row
        align-items-center
        justify-content-center
      "
    >
      <span class="container hero-text">
        In publishing and graphic design, Lorem ipsum is a placeholder text
        commonly used to demonstrate the visual form of a document or a typeface
        without relying on meaningful content. Lorem ipsum may be used as a
        placeholder before final copy is available.
      </span>
    </div>
    <div class="container my-4">
      <div
        class="
          services-section-heading
          d-flex
          flex-row
          justify-content-center
          mb-4
        "
      >
        Services
      </div>

      <div class="container gutter">
        <div class="row">
          <div
            class="
              col-md col-sm-12
              card
              p-4
              d-flex
              flex-column
              align-items-start
              justify-content-around
            "
          >
            <img
              style="object-fit: contain; max-height: 50px"
              src="https://img.icons8.com/small/64/000000/joomla.png"
            />
            <div class="card-heading">Business setup</div>
            <div class="card-description">
              Get a full range of business setup solutions from the region's
              finest business setup experts.
            </div>
            <button class="btn btn-outline-text btn-primary">Learn more</button>
          </div>
          <div
            class="
              col-md col-sm-12
              card
              md-mx-2
              sm-my-3
              p-4
              d-flex
              flex-column
              align-items-start
              justify-content-around
            "
          >
            <img
              style="object-fit: contain; max-height: 50px"
              src="https://img.icons8.com/small/64/000000/react.png"
            />
            <div class="card-heading">Banking</div>
            <div class="card-description">
              Enhance your business with a wide range of financial assistance at
              your figertips services.
            </div>
            <button class="btn btn-outline-text btn-primary">Learn more</button>
          </div>
          <div
            class="
              col-md col-sm-12
              card
              p-4
              d-flex
              flex-column
              align-items-start
              justify-content-around
            "
          >
            <img
              style="object-fit: contain; max-height: 50px"
              src="https://img.icons8.com/small/64/000000/lastfm.png"
            />
            <div class="card-heading">Insurance</div>
            <div class="card-description">
              Compare the best range of deals from a wide range of options. Get
              home, health and business cover.
            </div>
            <button class="btn btn-outline-text btn-primary">Learn more</button>
          </div>
        </div>
      </div>
    </div>
    <div class="contact-section d-flex flex-row align-items-center justify-content-around">
<div class="col-md-6 col-sm-12" style="max-width: 48vw;">
<img src="assets/Images/contact-us.jpg" style="max-width: 48vw; border-radius: 10px;" />
</div>
<div class="col-md-6 col-sm-12" style="max-width: 48vw;">
    <div class="contact-heading mb-4">Contact us</div>
    <form action="" method="POST">
        <div class="form-group">
          <label for="fullNameInput">Full name</label>
          <input type="text" class="form-control" name="fullname" value="<?php echo $fullname; ?>" id="fullNameInput" aria-describedby="fullName" placeholder="Enter full name">
          <span class="error">* <?php echo $fullnameErr; ?></span>
        </div>
        <div class="form-group">
          <label for="mobileInput">Mobile</label>
          <input type="tel" class="form-control" id="mobileInput" name="mobile" value="<?php echo $mobile; ?>" placeholder="Mobile">
          <span class="error">* <?php echo $mobileErr; ?></span>
        </div>
        <div class="form-group">
          <label for="emailInput">Email</label>
          <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" id="emailInput" placeholder="Email">
          <span class="error">* <?php echo $emailErr; ?></span>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
       
      </form>
      

</div>

    </div>
    <footer class="d-flex flex-row align-items-center justify-content-center py-3">
        <span>&#169; All rights reserved.</span>
    </footer>
  </body>
  <?php
  // define variables and set to empty values
  $fullnameErr = $mobileErr = $emailErr = '';
  $fullname = $email = $mobile = '';

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if (empty($_POST['fullname'])) {
          $fullnameErr = 'Name is required';
          swal('Name is required');
      } else {
          $fullname = test_input($_POST['fullname']);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z-' ]*$/", $fullname)) {
              $fullnameErr = 'Only letters and white space allowed';
              swal('Only letters and white space allowed');
          }
      }
      if (empty($_POST['email'])) {
          $emailErr = 'Email is required';
          swal('Email is required');
      } else {
          $email = test_input($_POST['email']);
          // check if e-mail address is well-formed
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = 'Invalid email format';
              swal('Invalid email format');
          }
      }

      if (empty($_POST['mobile'])) {
          $mobileErr = 'Mobile is required';
          swal('Mobile is required');
      } else {
          $mobile = test_input($_POST['mobile']);
      }

      $to = 'nainashah1998@gmail.com, test@example.com';
      $subject = 'These are contact details';

      $msg = $fullname + $mobile + $email;

      $msg = wordwrap($msg, 70);

      $headers = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type:text/html;charset=UTF-8' . "\r\n";

      $headers .= 'From: <nainashah1998@gmail.com>' . "\r\n";
      $headers .= 'Cc: westernglobal@int.com' . "\r\n";

      mail($to, $subject, $message, $headers);
  }

  function test_input($data)
  {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }
  ?>
  <script
    src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"
  ></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</html>
