<?php 
session_start();
include ('header.html');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>car</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/menu.css">
    <style type="text/css">
      .needs-validation{
         width:500px;
         margin:50px auto;
      }
      .registerSubmit{
        margin-top: 40px;
      }
      .info{
        padding-top: 45px;
        margin-top: 0px;
      }
      .registerContent{
        height: 712px;
        background: linear-gradient(to right, rgba(0,0,0,0.3), rgba(0,0,0,0.3)),url(images/registerBackground.jpg)repeat-y;
        background-size:100% 100%;
      }
    </style>
  </head>
    <div class="registerContent text-light">
    <h1 class="info h3 mb-3 font-weight-normal ">Please input your information to finish the registration</h1>  
    <form action="register.php" method="post" class="needs-validation" novalidate>
  <div class="form">
    <div class="col-md-12 mb-3">
      <label for="inputEmail">Email address</label>
      <input type="text" name="inputEmail" class="form-control" placeholder="Email address" id="validationCustom01"  required>
      <div class="invalid-feedback">
        Please provide a valid Email.
      </div>
    </div>
    <div class="col-md-12 mb-3">
      <label for="inputPassword">password</label>
      <input type="password"  name="inputPassword" class="form-control" id="validationCustom02" placeholder="Password" required>
      <div class="invalid-feedback">
        Please provide a valid Password.
      </div>
    </div>
  </div>
  <div class="form">
    <div class="col-md-12 mb-3">
      <label for="inputCity">Address</label>
      <input name="inputCity" type="text" class="form-control" id="validationCustom03" placeholder="Address" required>
      <div class="invalid-feedback">
        Please provide a valid Address.
      </div>
    </div>
    <div class="col-md-12 mb-3">
      <label for="validationCustom04">State</label>
      <input name="inputState" type="text" class="form-control" id="validationCustom04" placeholder="State" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-12 mb-3">
      <label for="validationCustom05">Zip</label>
      <input name="inputZip" type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="registerSubmit">
  <button type="submit" name="submit" class="btn btn-secondary" type="submit">Submit form</button>
  <input type="hidden" name="submitted" value="TRUE" />
  </div>
  </div>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields   <input type="submit" name="submit" value="Submit form" />
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

<?php 
  include ('footer.html');
  if (isset($_POST['submitted'])) {

  require_once ('mysql_connect.php'); 
    
  $errors = array(); 

    $em = escape_data($_POST['inputEmail']);
    $pa = escape_data($_POST['inputPassword']);
    $ct = escape_data($_POST['inputCity']);
    $st = escape_data($_POST['inputState']);
    $zip = escape_data($_POST['inputZip']);
  
  if (empty($errors)) { 
    $query = "SELECT user_id FROM users WHERE email='$em'";
    $result = mysql_query($query);
    if (mysql_num_rows($result) == 0) {

      $query1 = "INSERT INTO users ( email, password, city, state, zip) VALUES('$em','$pa','$ct','$st','$zip')";    
      $result = @mysql_query ($query1); 
      if ($result) { 
          $message = "Registed successfully!";
          echo "<script type='text/javascript'>alert('$message');</script>";       
      } else { // If it did not run OK.
        $errors[] = mysql_error() . '<br /><br />Query: ' . $query; // Debugging message.
      }
        
    } else { // Email address is already taken.
      $errors[] = 'The email address has already been registered.';
    }
        
  } // End of if (empty($errors)) IF.

  mysql_close(); // Close the database connection.
    
} else { // Form has not been submitted.

  $errors = NULL;

} 

if (!empty($errors)) { // Print any error messages.
  $message = "This email address already registed!";
  echo "<script type='text/javascript'>alert('$message');</script>";
  // echo '<h1 id="mainhead">Error!</h1>
  // <p class="error">The following error(s) occurred:<br />';
  // foreach ($errors as $msg) { // Print each error.
  //   echo " - $msg<br />\n";
  // }
  // echo '</p><p>Please try again.</p>';
}
?>
</body>
</html>


 