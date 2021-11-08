<form action = "loginpage.php" method = "POST">
    <div class="form-group">
        <input type="username" class="form-control" id="usernameInput" aria-describedby="usernameHelp" placeholder="Username" name = "username" >
    </div>
    <div class="form-group">
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name = "password">
    </div>
    <button class="btn btn-success btn-lg login-button"  type="submit" >Login <i class="bi-person-check-fill" style="font-size: 1rem;"></i></button>
</form>

<button class="btn btn-outline-secondary btn-lg login-button"  data-toggle="modal" data-target="#newAccountModal">New User <i class="bi-person-plus" style="font-size: 1rem;"></i></button>
