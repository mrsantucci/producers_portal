<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap core CSS -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/signin.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <div class="container"> 

      <div class="row">
        <div class="col-12-lg text-center">
          <img class="login-logo" src="images/Sagicor_logo_vert.png">
        </div>
      </div>

      <div class="signin-form-container">
      <form class="form-signin">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
        <ul class="login-list list-inline">
          <li><a href="#">Register Here</a></li>
          <li><a href="">Forgot Password?</a></li>
        </ul>
<!--           <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label> -->
        </div>
        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
      </form>
    </div>

    </div> <!-- /container -->
    <!-- Footer -->
    <?php include 'inc/footer.html'; ?>

  </body>
</html>