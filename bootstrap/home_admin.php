<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <section class="homeAdmin" id="homeAdmin">
      <div class="container">

    <?php
      require 'koneksi.php';
      session_start();
      if($_SESSION['username']){
        echo "Home Admin, selamat datang: ".$_SESSION['username'];
        $tampil = mysql_query("SELECT * FROM login");
        ?>
        <table class="table">  
        <tr>
            <th> Id </th>
            <th> First Name </th>
            <th> Last Name </th>
            <th> Username </th>
            <th> Email </th>
            <th> Jenis Kelamin </th>
            <th> Asal Sekolah</th>
            <th> Kota Asal </th>
            <th> Privileges </th>
            <th> Nomor Telepon </th>
            <th> Action</th>
        </tr>

        <?php  
        $queri="Select * From login" ;

        $hasil=MySQL_query ($queri);  
        $no = 1;
        while ($data = mysql_fetch_array ($hasil)){
        ?>
                <tr>
                  <td><?php echo $data[0]?></td>
                  <td><?php echo $data[1]?></td>
                  <td><?php echo $data[2]?></td>
                  <td><?php echo $data[3]?></td>
                  <td><?php echo $data[4]?></td>
                  <td><?php echo $data[6]?></td>
                  <td><?php echo $data[7]?></td>
                  <td><?php echo $data[8]?></td>
                  <td><?php echo $data[9]?></td>
                  <td><?php echo $data[10]?></td>
                  <td>
                <a class="btn btn-info" href="update.php?id=<?php echo $data[0]?>">Update
                <a class="btn btn-info" href="hapus.php?id=<?php echo $data[0]?>">Delete
              </td>
                </tr> 
                
        <?php }

        ?>

        </table>
        <br>
        <a href="register.php" class="btn btn-info">Add User</a>
        <a href="index.php">Logout</a>
        <?php 
      } else{
        header('location: ./index.php');
      }
    ?>
    </div>
</section>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>