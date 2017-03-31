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
  </head>
  <body>
  	<h2 class="text-center">Data berita</h2>
<table class="table">
<tr>
	<th>No</th>
	<th>Judul Berita</th>
	<th>Headline Berita</th>
	<th>Author</th>
	<th>Tanggal Post</th>
	<th>Aksi</th>
</tr>
	<?php
		require 'koneksi.php';
		$no = 1;
		$query = mysql_query("SELECT * from berita");
		while ($hasil = mysql_fetch_array($query)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $hasil[1]?></td>
				<td><?php echo $hasil[2]?></td>
				<td><?php echo $hasil[3]?></td>
				<td><?php echo $hasil[4]?></td>
				<td>
					<a href="update.php?berita_id=<?php echo $hasil[0]?>"> update | 
					<a href ="delete.php?berita_id=<?php echo $hasil[0]?>">delete
				</td>
			</tr>
		<?php }?>
</table>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
