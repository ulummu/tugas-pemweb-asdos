<!DOCTYPE html>
<html lang="en">
<script type="text/javascript">
function validasi_input(form){
   pola_username=/^[a-zA-Z0-9\_\-]{6,100}$/;
   pola_nama=/^[a-zA-Z ]+$/;
   pola_email=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
   pola_telepon=/^[0-9]{10,12}$/;
   pola_sekolah = /^[a-zA-Z0-9\ \-]{6,100}$/;
   if (!pola_nama.test(form.fName.value)){
    alert ('Penulisan first name salah');
      form.fName.focus();
      return false;
  }
  if (!pola_nama.test(form.lName.value)){
    alert ('Penulisan Last name salah');
      form.lName.focus();
      return false;
  }
   if (!pola_username.test(form.username.value)){
      alert ('Username minimal 6 karakter dan hanya boleh Huruf atau Angka!');
      form.username.focus();
      return false;
   }
    if (!pola_email.test(form.email.value)){
      alert ('Penulisan Email tidak benar');
      form.email.focus();
      return false;
  }
  var minchar=8;
   if (form.password.value<minchar){
      alert ('Password tidak boleh kosong');
      form.email.focus();
      return false;
  }
  if (!pola_sekolah.test(form.sekolah.value)) 
    {
        alert ('Penulisan asal sekolah salah!');
        return false;
    }

    if (form.asal_kota.value ==""){
      alert("Anda belum memilih asal kota!");
      return (false);
  }

  if (form.privileges.value ==""){
      alert("Anda belum memilih privileges!");
      return (false);
  }

  if (!pola_telepon.test(form.telepon.value)){
    alert ('penulisan nomor telepon salah!');
      form.telepon.focus();
      return false;
  }

  if (form.agree.checked == false) 
    {
        alert ('anda belum menyetujui persyaratan');
        return false;
    }

    return (true);
}
</script>

<?php
  require 'koneksi.php';
  if (isset($_POST['submit'])) {
    $fullname = $_POST['fName'];
    $lastname = $_POST['lName'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $jk = $_POST['gender'];
    $sekolah = $_POST['sekolah'];
    $asal = $_POST['asal_kota'];
    $privileges = $_POST['privileges'];
    $telp = $_POST['telepon'];

    if($username==''){
      echo "Register Failed";
    } else{
      $query = mysql_query("INSERT into login VALUES('','$fullname','$lastname','$username','$email','$password','$jk','$sekolah','$asal','$privileges','$telp')");
      header('location: ./index.php');
    }
  }
?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Buat akun</title>

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
    <section class="buatakun" id="buatakun"> 
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <form class="inner-login" method="post" onsubmit="return validasi_input(this)">
              <h3 class="text-center title-login">silakan isi form terlebih dahulu</h3>
              <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                  <div class="form-group">
                    <input name="fName" placeholder="First Name" type="text" class="form-control">
                  </div>

                   <div class="form-group">
                    <input name="lName" placeholder="Last Name" type="text" class="form-control">
                  </div>

                  <div class="form-group">
                    <input name="username" placeholder="Username" type="text" class="form-control">
                  </div>

                   <div class="form-group">
                    <input name="email" placeholder="email" type="email" class="form-control">
                  </div>

                   <div class="form-group">
                   <input type="password" name="password" placeholder="Password" class="form-control">
                  </div>

                  <div class="radio">
                    <label>
                        <input type="radio" name="gender" id="jeniskelamin" value="Laki">
                        <label>Laki-laki</label>
                    </label>
                    <label>
                        <input type="radio"  name="gender" id="jeniskelamin" value="perem">
                        <label>perempuan</label>
                    </label>
                  </div>

                  

                   <div class="form-group">
                   <input type="text" name="sekolah" placeholder="Asal sekolah" class="form-control">
                  </div>

                  <div class="form-group">
                    <select class="form-control" name="asal_kota">
                      <option value="">Asal kota</option>
                      <option value="diy">Yogyakarta</option>
                      <option value="dki">Jakarta</option>
                      <option value="kotakembang">Bandung</option>
                      <option value="bonek">Surabaya</option>
                      <option value="selatsolo">Solo</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <select class="form-control" name="privileges">
                      <option value="">Pilih hak akses</option>
                      <option value="1">Admin</option>
                      <option value="0">User</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <input type="telp" name="telepon" placeholder="No. Telepon" class="form-control">
                  </div>

                  <div class="checkbox">
                  <label>
                    <input type="checkbox" id="blankCheckbox" value="option1">
                    I agree to the terms and conditions
                  </label>
                  </div>
                  <div class="text-center">
                  <button type="submit" class="btn btn-info" name="submit">Sign-up</button>
                  </div>
               </div>
             </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>