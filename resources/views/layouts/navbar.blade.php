<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/user-navbar.css" rel="stylesheet">
    <link rel="stylesheet" href="css/stylep.css">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5ce308cc6d.js" crossorigin="anonymous"></script>
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Lab Grafika</title>
</head>
<body>
    <nav class="navbar-user navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="./images/logo.png" class="logo" alt="logo"></a>
        <button class="navbar-toggler burger" style="border-color:transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ url('/user-peminjaman') }}">Peminjaman</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/user-pengembalian') }}">Pengembalian</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/user-riwayat') }}">Riwayat</a>
            </li>
          </ul>
          <form class="d-flex ">
          <ul class="navbar-nav me-auto mb-2 mr-4 mb-lg-0">
            
            <li class="nav-item dropdown">
            
              <a class="nav-link dropdown-toggle mt-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Nama Kamu
              <img class="img-profile rounded-circle ml-2" src="images/profile.jpg" alt="user">
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Logout</a></li>
                
              </ul>
            </li>
            
          </ul>
          </form>
        </div>
      </div>
    </nav>

    @yield('content')

    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    </body>
</html>