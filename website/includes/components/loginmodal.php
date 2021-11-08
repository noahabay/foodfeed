<?php

?>
<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action = "loginpage.php" method = "POST">
          <div class="form-group">
              <input type="username" class="form-control" id="usernameInput" aria-describedby="usernameHelp" placeholder="Username" name = "username">
          </div>
          <div class="form-group">
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name = "password">
          </div>
      
        <button class="btn btn-info btn-lg login-button"  type="submit" >Login <i class="bi-person-check-fill" style="font-size: 1rem;"></i></button>
        </form>
        <button class="btn btn-outline-secondary btn-lg login-button"  data-toggle="modal" data-target="#newAccountModal">New User <i class="bi-person-plus" style="font-size: 1rem;"></i></button>

      </div>
    </div>
  </div>
</div>


<!-- Account Creation Modal-->
<div class="modal fade" id="newAccountModal" tabindex="-1" role="dialog" aria-labelledby="newAccountModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="newAccountModalLabel"> <i class="bi-person-plus"></i> Create an Account</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action = "loginpage.php" method = "GET">
            <h5><i class="bi bi-person-lines-fill"></i> About you</h5>
            <div class="form-row">
                <div class="col-md-6 mb-6">
                    <label for="validationDefault01">First name</label>
                    <input type="text" class="form-control" id="validationDefault01" placeholder="First name" value="" required>
                </div>
                <div class="col-md-6 mb-6">
                    <label for="validationDefault02">Last name</label>
                    <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="" required>
                </div>

            </div>
            <hr>

            <h5><i class="bi bi-house-door"></i> Address</h5>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault03">Street Address</label>
                    <input type="text" class="form-control" id="validationDefault03" name="street" placeholder="Street" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault03">City</label>
                    <input type="text" class="form-control" id="validationDefault03" name="city" placeholder="City" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault04">State / Province</label>
                    <input type="text" class="form-control" id="validationDefault04" name="state" placeholder="State" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault05">Zip / Postal Code</label>
                    <input type="text" class="form-control" id="validationDefault05" name="zip"  placeholder="Zip" required>
                </div>
            </div>

            <hr>
            <h5><i class="bi bi-door-open"></i> Login Credentials</h5>
            <div class="form-row">
                <div class="col-md-6 mb-6">
                    <label for="validationDefaultUsername">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend2"><i class="bi bi-person-badge"></i></span>
                        </div>
                        <input type="text" class="form-control" id="validationDefaultUsername" name="username"  placeholder="Username" aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>
                
                <div class="col-md-6 mb-6">
                    <label for="psw">Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend2"><i class="bi bi-key"></i></span>
                        </div>
                        <input type="password" class="form-control" id="psw" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    </div>    
                </div>
            </div>
            
            <hr>
            <h5>Terms and Conditions</h5>
            <div class="form-group">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                    Agree to terms and conditions
                </label>
                </div>
            </div>
            <button class="btn btn-info btn-lg" type="submit">Create Account <i class="bi-person-plus" style="font-size: 1rem;"></i></button>
      </form>

      </div>

    </div>
  </div>
</div>
