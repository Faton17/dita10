<?php include_once 'header.php'; ?>


    <div class="w-50 mx-auto" style="padding-top: 100px">
        <h1 class="mb-3">Please sign in</h1>
        <form>
        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
             <input type="email" id="form2Example1" class="form-control" />
            <label class="form-label" for="form2Example1">Email address</label>
        </div>

        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="password" id="form2Example2" class="form-control" />
            <label class="form-label" for="form2Example2">Password</label>
        </div>

        <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
            <div class="col d-flex justify-content-center">
        <!-- Checkbox -->
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
            <label class="form-check-label" for="form2Example31"> Remember me </label>
        </div>
        </div>

        <div class="col">
            <!-- Simple link -->
            <a href="#!">Forgot password?</a>
        </div>
        </div>

  <!-- Submit button -->
  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="#!">Register</a></p>
    
    </button>
  </div>
</form>
    


<?php include_once 'footer.php'; ?>
