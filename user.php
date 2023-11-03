<?php
include 'connect.php';

if (isset($_POST['submit'])) {
$nme=$_POST['nme'];
$mobile=$_POST['mobile'];
$pssword=$_POST['pssword'];
$emil=$_POST['emil'];   
$sluery="insert into `user` (nme,mobile,pssword,emil)
values('$nme','$mobile','$pssword','$emil')";
$d=mysqli_query($s,$sluery);

if ($d) {
   // echo "inserted .";
   header('location:show.php');
}
else{die(mysqli_error($s));
}

}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body><br><br><br>
<div class="container my-5">
<form method="POST">
  <div class="form-group">
    <label >Nme 
    <input type="text" class="form-control" placeholder="Enter nme" name="nme"
    autocomplete="off"></label>
    <small id="emailHelp" class="form-text text-muted">We'll never share your nme with anyone else.</small>
  </div>
  <div class="form-group">
    <label >Emil 
    <input type="text" class="form-control" placeholder="Enter emil" name="emil"
    autocomplete="off"></label>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label >Mobile 
    <input type="text" class="form-control" placeholder="Enter mobile" name="mobile"
    autocomplete="off"></label>
    <small id="emailHelp" class="form-text text-muted">We'll never share your mobile with anyone else.</small>
  </div>
  <div class="form-group">
    <label >Pssword 
    <input type="text" class="form-control" placeholder="Enter pssword" name="pssword"
    autocomplete="off"></label>
    <small id="emailHelp" class="form-text text-muted">We'll never share your pssword with anyone else.</small>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>

</body>
</html>