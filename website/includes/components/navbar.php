<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand brand" href="index.php">food<i class="bi bi-egg-fried egg-icon"></i>feed</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">About<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-item nav-link" href="about.php">Team</a>
      </li>

      <li class="nav-item">
        <a class="nav-item nav-link" href="users.php">Users</a>
      </li>
    </ul>

    <?php
    if(isset($_SESSION["userName"])){
      ?>
      <span class="navbar-text">
        <button  class="btn btn-success btn-lg"><a href="users.php?userID=<?php echo($_SESSION["userID"])?>" style = "text-decoration: none">My Profile <i class="bi-person-circle" style="font-size: 1em"></i></i></a>  </button>  
      </span>

      <span class="navbar-text">
        <button  class="btn btn-light btn-lg"><a href="logout.php" style = "text-decoration: none">Logout <i class="bi-door-open" style="font-size: 1em"></i></i></a>  </button>  
      </span>
      <?php
    }
    else{
      ?>
      <span class="navbar-text">
        <button  class="btn btn-success btn-lg"  data-toggle="modal" data-target="#loginModal"> <a href="#" style = "text-decoration: none">Login &nbsp;<i class="bi-person-circle" style="font-size: 1em"></i></i></a>  </button>  
      </span>

      <?php
    }
    ?>

  </div>
</nav>