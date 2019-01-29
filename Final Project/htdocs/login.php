<?php 
session_start();
if(!empty($_POST['inputEmail'])){

require_once ('mysql_connect.php'); 

$query = "SELECT email, password, user_id
FROM users
ORDER BY user_id 
";

$result = @mysql_query ($query); // Run the query.

while ($row = mysql_fetch_array($result)) {
  if($_POST['inputEmail']==$row['email'])
    if($_POST['inputPassword']==$row['password']){
      $_SESSION['username']=$row['email'];
      header("Location:login.php?err=1");
      header('location:index.php');
    }else{header("Location:login.php?err=2");}
    
}

echo '</table>';


mysql_free_result ($result); // Free up the resources.  


mysql_close(); // Close the database connection.
}
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>car</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/menu.css">
  </head>
  <style type="text/css">
    .align-middle{
      padding-top: 50px;
    }
    .loginRequired{
      padding: 20px;
    }
    .submit{
      padding:20px;
    }
    .loginPage{
      margin:0px!important;
      min-height: 422px;
      background: linear-gradient(to right, rgba(0,0,0,0.3), rgba(0,0,0,0.3)),url(images/loginBackground.png)repeat-y;
      background-size:100% 100%;
    }
  </style>
  <body class="text-center">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="index.php">HOME</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               MODEL
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="SUV.php">SUV</a>
              <a class="dropdown-item" href="Sedan.php">SEDAN</a>
              <a class="dropdown-item" href="Sportscar.php">SPORTSCAR</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="brand.php">BRAND</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="news.php">NEWS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="events.php">EVENT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="service.php">SERVICE</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="register.php">register</a>
          </li>
          <?php
          if($_SESSION['username']!=null){
          echo ' 
           <li class="nav-item">
            <a class="nav-link" href="logout.php"}">logout</a>
          </li>
          '; 
          }else{
            echo ' 
           <li class="nav-item">
            <a class="nav-link" href="login.php">login</a>
           </li>
          '; 
          }
          echo ' 
          <li class="nav-item">
            <a class="nav-link" href="shoppingList.php">' . $_SESSION['username'] . '</a>
          </li>
          ';  
          ?>
        </ul>
      </div>
    </nav>

    <form action="login.php" method="post"class="loginPage">
    <div class=" login col-sm-3 my-1"> 
      <div class="align-middle">
      <h1 class="h3 mb-3 font-weight-normal text-light">Please sign in</h1>
      <div class="loginRequired">
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="text" name="inputEmail" class="form-control" placeholder="Email address" required autofocus/>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="inputPassword" size="10" maxlength="20" class="form-control" placeholder="Password" required/>  
      </div> 
      <div class="submit">       
      <input type="submit" name="submit" class="btn btn-secondary"value="Login" data-toggle="modal" data-target="#exampleModalCenter" />
      <input type="hidden" name="submitted" value="TRUE" /> 
      </div>   
      </div>
      <?php
      $err=isset($_GET["err"])?$_GET["err"]:"";
      switch($err) {
            case 1:
            echo '<h4 class="text-light">Login successfully</h4>';
            break;
            case 2:
            echo '<h4 class="text-light">Username or password is incorrect!<h4>';
            break;
          }
      ?>
    </div>
    </form>
    

    <?php 
      include ('footer.html');
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
