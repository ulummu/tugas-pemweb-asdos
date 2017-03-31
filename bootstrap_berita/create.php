<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CRUD PHP</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php   require 'koneksi.php';
    if (isset($_POST['submit'])) {
         $berita_judul   = $_POST['berita_judul'];
         $berita_headline  = $_POST['berita_headline'];
         $berita_isi   = $_POST['berita_isi'];
         $berita_author  = $_POST['berita_author'];
         $berita_tanggal  = date('Y-m-d H:i:s'); $query   = mysql_query("INSERT into berita VALUES('','$berita_judul','$berita_headline','$berita_isi', '$berita_author', '$berita_tanggal')");
         if($query){          
          header('location: ./read.php');
         } else{          
          echo "Gagal input";
            }
         }
          ?>
</head>
  <body>
  <section class="buatakun" id="buatakun"> 
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <form class="inner-login" method="post" onsubmit="return validasi_input(this)">
              <h3 class="text-center title-login">Input berita terlebih dahulu</h3>
              <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                  <div class="form-group">
                    <input name="berita_judul" placeholder="Judul berita" type="text" class="form-control">
                  </div>

                   <div class="form-group">
                    <input name="berita_headline" placeholder="Headline berita" type="text" class="form-control">
                  </div>

                  <div class="form-group">
                    <input name="berita_isi" placeholder="Isi berita" type="text" class="form-control">
                  </div>

                   <div class="form-group">
                    <input name="berita_author" placeholder="Penulis berita" type="text" class="form-control">
                  </div>
                  <div class="text-center">
                  <button type="submit" class="btn btn-info" name="submit">Simpan</button>
                  </div>
                   
 


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
