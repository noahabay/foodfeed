<?php include "includes/header.php" ?>

<div class="jumbotron" style = "height: 14em">
  <div class="container">
        <div class = "logo-align">
            <h1><i class="bi-building"></i> My Building</h1>
        </div>

        <div class = "logo-align logo-align-text">
        <h4>Apollo House</h4>
        <h4>123 Fake Street</h4>
        <h4>Croydon, UK</h4>

        </div>

        
  </div>
</div>

<main>
    <div class = "container">
        <div class = "row">
            <div class = "col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h2><i class="bi bi-calendar2-check"></i> Calendar</h2>
                        <h6 class="card-subtitle mb-2 text-muted">Upcoming delivery days this week:</h6>
                            <br>

                            <div class = "calendar">

                                <ul class="weekdays">
                                    <li>Mo</li>
                                    <li>Tu</li>
                                    <li>We</li>
                                    <li>Th</li>
                                    <li>Fr</li>
                                    <li>Sa</li>
                                    <li>Su</li>
                                </ul>

                                <ul class="days">
                                    <li>1<button type="button" class="btn btn-secondary">Unavailable</button></li>
                                    <li>2<button type="button" class="btn btn-success">Available</button></li>
                                    <li>3<button type="button" class="btn btn-secondary">Unavailable</button></li>
                                    <li>4<button type="button" class="btn btn-secondary">Unavailable</button></li>
                                    <li>5<button type="button" class="btn btn-success">Available</button></li>
                                    <li>6<button type="button" class="btn btn-secondary">Unavailable</button></li>
                                    <li>7<button type="button" class="btn btn-secondary">Unavailable</button></li>
                                </ul>
                            </div>
                        <br>
                        <a href="#" class="card-link">View Month</a>
                    </div>
                </div>
            </div>

            
        </div>

        <br>

        <div class = "row">
            
            <div class = "col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-compass"></i> Locker Location</h5>
                        <br>
                        <h6 class="card-subtitle mb-2 text-muted">Where to find your items</h6>
                        <p class="card-text">The locker for your building is located on the first floor, to the right once you enter the security doors.</p>
                        <img class="card-img-bottom" src="images/locker.jpg" alt="Card image cap">
                    </div>
                </div>
            </div>

            <div class = "col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-person-circle"></i> Participating Tenants</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Meet your neighbours</h6>
                        
                        <p>
                            <a href="account.php"><button type="button" class="btn btn-success"><i class="bi-person-circle"></i> John Doe</button></a>
                            <a href="account.php"><button type="button" class="btn btn-success"><i class="bi-person-circle"></i> John Doe</button>
                        </p>
                    </div>
                </div>
            </div>

        </div>



    </div>
</main>

<script>
</script>

<?php include "includes/footer.php" ?>