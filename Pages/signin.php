<?php  
 include $_SERVER['DOCUMENT_ROOT'] . "/flatkit/include/header.php";

 ?> 
  <div class="app" id="app">

<!-- ############ LAYOUT START-->
  <div class="center-block w-xxl w-auto-xs p-y-md">
    <div class="navbar">
      <div class="pull-center">
        <div ui-include="'../views/blocks/navbar.brand.html'"></div>
      </div>
    </div>
    <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
      <div class="m-b text-sm">
        Sign in with your Flatkit Account
      </div>
      <form name="form">
        <div class="md-form-group float-label">
          <input type="email" class="md-input" ng-model="user.email" required>
          <label>Email</label>
        </div>
        <div class="md-form-group float-label">
          <input type="password" class="md-input" ng-model="user.password" required>
          <label>Password</label>
        </div>      
        <div class="m-b-md">        
          <label class="md-check">
            <input type="checkbox"><i class="primary"></i> Keep me signed in
          </label>
        </div>
        <button type="submit" class="btn primary btn-block p-x-md">Sign in</button>
      </form>
    </div>

    <div class="p-v-lg text-center">
      <div class="m-b"><a ui-sref="access.forgot-password" href="forgot-password.html" class="text-primary _600">Forgot password?</a></div>
      <div>Do not have an account? <a ui-sref="access.signup" href="signup.html" class="text-primary _600">Sign up</a></div>
    </div>
  </div>

<!-- ############ LAYOUT END-->

  </div>
  <?php  
 include $_SERVER['DOCUMENT_ROOT'] . "/flatkit/include/footer.php";

 ?> 
