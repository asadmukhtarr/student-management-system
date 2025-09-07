<?php 
  include('includes/header.php'); // header .. 
  include('includes/flash.php'); // flasher .. 
?>

<div class="d-flex align-items-center justify-content-center" style="min-height:70vh;">
  <div class="card shadow-lg" style="max-width: 400px; width: 100%;">
    <div class="card-header text-white bg-primary">
      <i class="fa fa-lock"></i> Login
    </div>
    <form class="p-4" action="actions/login.php" method="get">
      <!-- Email -->
      <div class="input-group mb-3">
        <span class="input-group-text bg-primary text-white"><i class="fa fa-envelope"></i></span>
        <input type="email" class="form-control" name="email" placeholder="Email">
      </div>

      <!-- Password -->
      <div class="input-group mb-3">
        <span class="input-group-text bg-primary text-white"><i class="fa fa-key"></i></span>
        <input type="password" class="form-control" name="password" placeholder="Password">
      </div>

      <!-- Submit -->
      <button type="submit" class="btn btn-primary w-100">
        <i class="fa fa-sign-in"></i> Login
      </button>
    </form>

    <!-- Extra Links -->
    <div class="mt-3 text-center p-2">
      You have not account? <a href="register.php"><i class="fa fa-user-plus"></i> Register</a>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); // footer .. ?>
