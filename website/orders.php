<?php include "includes/header.php" ?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
        <h1><i class="bi-building"></i> My Orders</h1>
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
                                    <li>5<button type="button" class="btn btn-outline-success " data-toggle="modal" data-target="#exampleModal">Order Pending</button></li>
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
            <div class = "col-lg-12">
                <h3>Past orders:</h3>

                <div class="card">
                  <div class="card-header">
                    October 21, 2021
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Repeat Order</a>
                  </div>
                </div>
            </div>
        </div>


    </div>
</main>

<!-- Modal -->
<div class="modal fade order-modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pending Order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5> Search for grocery items:</h5>
        <hr>
        <h5> Currently in cart:</h5>
        <div class="card cart-item" style="">
          <img class="card-img-top" src="images/hotsauce.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Hot Sauce</h5>
            <p class="card-text">$3.99</p>
            <form action="">
              <label for="cars">Quantity</label>
              <select id="cars" name="cars">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              <input type="submit" class="btn btn-outline-warning" value = "Remove">
            </form>
          </div>
        </div>

        <div class="card cart-item" style="">
          <img class="card-img-top" src="images/mayo.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Kensington Mayonnaise</h5>
            <p class="card-text">$3.99</p>
            <form action="">
              <label for="cars">Quantity</label>
              <select id="cars" name="cars">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              <input type="submit" class="btn btn-outline-warning" value = "Remove">
            </form>  
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script>
</script>

<?php include "includes/footer.php" ?>