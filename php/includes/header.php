<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" />

      <!-- Font Awesome 4 -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
        <!-- Brand -->
        <a class="navbar-brand fw-bold" href="#">
            <i class="fa fa-diamond"></i> Asad Mukhtarr
        </a>

        <!-- Toggler for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" 
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
            
            <!-- Home -->
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">
                <i class="fa fa-home"></i> Home
                </a>
            </li>

            <!-- Account Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user"></i> Account
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="index.php"><i class="fa fa-sign-in"></i> Login</a></li>
                <li><a class="dropdown-item" href="register.php"><i class="fa fa-user-plus"></i> Register</a></li>
                </ul>
            </li>

            </ul>
        </div>
        </div>
    </nav>
    <!-- Navbar End -->
    </header>