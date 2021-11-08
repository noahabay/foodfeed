<script>
function showUserResult(str) {
  if (str.length==0) {
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState == XMLHttpRequest.DONE) {
        console.log(xmlhttp.responseText);
        if(xmlhttp.responseText.includes("Username is already taken")){
            document.getElementById("validationDefaultUsername").setCustomValidity("Username is Taken");
        }
        if(xmlhttp.responseText.includes("Username is valid")){
            document.getElementById("validationDefaultUsername").setCustomValidity('');
        }
    }

  }
  xmlhttp.open("GET","includes/components/checkusername.php?username="+str, true);
  xmlhttp.send();
}

function showEmailResult(str) {
  if (str.length==0) {
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState == XMLHttpRequest.DONE) {
        console.log(xmlhttp.responseText);
        if(xmlhttp.responseText.includes("Email is already taken")){
            document.getElementById("validationDefaultUsername").setCustomValidity("Username is Taken");
        }
        if(xmlhttp.responseText.includes("Email is valid")){
            document.getElementById("validationDefaultUsername").setCustomValidity('');
        }
    }

  }
  xmlhttp.open("GET","includes/components/checkemail.php?email="+str, true);
  xmlhttp.send();
}


</script>

<form action = "loginpage.php" method = "POST">
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

    <h5><i class="bi bi-envelope-open"></i> Contact Information</h5>
    <div class="form-row">
        <div class="col-md-6 mb-6">
        <label for="validationEmail">Email address</label>
        <input type="email" class="form-control" id="validationEmail" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="col-md-6 mb-6">
            <label for="validationPhone">Last name</label>
            <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="" required>
        </div>

    </div>
    <hr>

    <!-- onkeyup="showEmailResult(this.value)" -->

    <h5><i class="bi bi-house-door"></i> Address</h5>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="validationStreet">Street Address</label>
            <input type="text" class="form-control" id="validationStreet" name="street" placeholder="Street" required>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationCity">City</label>
            <input type="text" class="form-control" id="validationCity" name="city" placeholder="City" required>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationState">State / Province</label>
            <input type="text" class="form-control" id="validationState" name="state" placeholder="State" required>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationZip">Zip / Postal Code</label>
            <input type="text" class="form-control" id="validationZip" name="zip"  placeholder="Zip" required>
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
                <input type="text" class="form-control" id="validationDefaultUsername" name="username"  placeholder="Username" aria-describedby="inputGroupPrepend2" onkeyup="showUserResult(this.value)" required>
            </div>
        </div>
        
        <div class="col-md-6 mb-6">
            <label for="psw">Password</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend2"><i class="bi bi-key"></i></span>
                </div>
                <input type="password" class="form-control" id="psw" name="password" placeholder="Password"   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            </div>    
        </div>

        <div id="username-search"></div>
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
    <button class="btn btn-success btn-lg" type="submit">Create Account <i class="bi-person-plus" style="font-size: 1rem;"></i></button>
</form>

