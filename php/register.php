<?php include('includes/header.php'); // header .. ?>
<div class="d-flex align-items-center justify-content-center" style="min-height:70vh;">
  <div class="card shadow-lg rounded-0 mt-5" style="max-width: 400px; width: 100%;">
   <div class="card-header bg-primary text-white">
     <i class="fa fa-user-plus"></i> Register Here
   </div>

    <form class="p-4" action="actions/register.php" method="post">
      <div class="input-group mb-3">
        <span class="input-group-text bg-primary text-white"><i class="fa fa-user-circle"></i></span>
        <input type="text" class="form-control" name="name" placeholder="Name">
      </div>
      <!-- Email -->
      <div class="input-group mb-3">
        <span class="input-group-text bg-primary text-white"><i class="fa fa-envelope"></i></span>
        <input type="email" class="form-control" name="email" placeholder="Email">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text bg-primary text-white"><i class="fa fa-whatsapp"></i></span>
        <input type="number" class="form-control" name="whatsapp" placeholder="What's App Number" maxlength="15" >
      </div>
      <!-- Password -->
      <div class="input-group mb-3">
        <span class="input-group-text bg-primary text-white"><i class="fa fa-key"></i></span>
        <input type="password" class="form-control" name="password" placeholder="Password">
      </div>
    <div class="input-group mb-3">
        <span class="input-group-text bg-primary text-white"><i class="fa fa-key"></i></span>
        <input type="password" class="form-control" name="confirm_password" placeholder="Confirmation Password">
      </div>
     <div class="input-group mb-3">
        <label for=""> <i class="fa fa-venus-mars"></i> Gender
            Male <input type="radio" name="gender" value="Male" />
            Female <input type="radio" name="gender" value="Female" />
        </label>
      </div>
      <!-- Submit -->
      <button type="submit" class="btn btn-primary w-100">
        <i class="fa fa-sign-in"></i> Register
      </button>
    </form>

    <!-- Extra Links -->
    <div class="mt-3 text-center p-4">
      Already you have account? <a href="index.php"><i class="fa fa-sign-in"></i> Login</a>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); // footer .. ?>
