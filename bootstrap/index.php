<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Data SD dan MI</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Jumbotron -->
    <div class="jumbotron text-center">
      <h1>Selamat datang di website ini</h1>
    </div>
    <!-- Akhir jumbotron -->

    <!-- Login your account -->
    <section class="login" id="login">
      <div class="container">
        <div class="row">
        <div class="col-sm-12">
          <h2 class="text-center">Log-in your account</h2>
          <hr>
        </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-sm-offset-4">
            <form method="POST">
              <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Masukkan username">
              </div>

              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Masukkan password">
              </div>
              <div class="text-center">
                <p>Belum punya akun? buat akun 
                  <a href="buatakun.php"> disini</a></p>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-info" value="login" name="submit">Login</button>
              </div>

            </form>
          </div>
        </div>
      </div>
      <?php
      require 'koneksi.php';
      session_start();
      if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = mysql_query("SELECT * FROM login WHERE username = '$username' LIMIT 1");
        $hasil = mysql_fetch_array($query);
        if (password_verify($password, $hasil['password'])) {
          $_SESSION['username'] = $hasil['username'];
          if($hasil['privilege'] == 1){
            header('location: ./home_admin.php');
          } else{
            header('location: ./home_user.php');
          }
        }
        } else {
          ?>
          <div class="alert alert-warning">invalid password</div>
          <?php
      }
      ?>

    </section>
    <!-- Akhir login -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>