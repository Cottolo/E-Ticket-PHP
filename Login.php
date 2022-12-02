<?php
require_once('func/Connection.php');
require_once('helper/helper.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-warning px-5">
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php"><img class="logo" src="./pic/e-ticket.png" alt="e-ticket" ></img></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link fw-bold active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold" href="Ticket.php">Buy Ticket</a>
        </li>
      </ul>
    </div>
  </div>
</nav>  

<div class="containers bg-warning d-flex align-items-center">
    <form method="POST" action="<?= B_URL.'handler/handler_login.php' ?>" class="w-50 m-auto p-5">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-bold">Email</label>
            <input required type="email" name="email" class="p-2 form-control" id="exampleFormControlInput1" placeholder="admin@mail.com">
        </div>
        <div class="mb-3">
            <label type="email" for="password" class="form-label fw-bold">Password</label>
            <input required type="password" name="password" class="p-2 form-control" id="password" placeholder="1234" ></input>
        </div> 

        <button type="submit" class="btn bg-dark fw-bold text-light px-4 float-end">Login</button>

    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>