<?php
  session_start();
  include('admin/vendor/inc/config.php');
  //include('vendor/inc/checklogin.php');
  //check_login();
  //$aid=$_SESSION['a_id'];
  $uemail = ""; // Initialize the $uemail variable
?>
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include("vendor/inc/head.php"); ?>

<body>
  <!-- Navigation -->
  <?php include("vendor/inc/nav.php"); ?>
  <!-- End Navigation -->

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('vendor/img/angkasbg8.jpg')">
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('vendor/img/angkasbg5.webp')">
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('vendor/img/angkasbg2.webp')">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class a="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <h1 class="my-4">Welcome to <span style="color: #00bfff">Angkas Express</span></h1>

    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-lg-6 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Why Us</h4>
          <div class="card-body">
            <p class="card-text">At Angkas, we're dedicated to transforming the transport sector, enhancing mobility, and simplifying access to various transportation options. With a focus on user satisfaction, safety, and operational excellence, we aim to become the top platform for convenient, reliable, and secure transportation. Implementing this proposal will drive our growth, foster customer loyalty, and solidify our market position, starting with the Dagupan area.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Core Values</h4>
          <div class="card-body">
            <p class="card-text">
              At Angkas, our core values are Excellence, Trust, Integrity, Responsibility, and Customer Focus. We're continuously improving our online platform to deliver an exceptional experience by upgrading technology, enhancing safety, and boosting operational efficiency.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <!-- Portfolio Section -->
    
    <!-- /.row -->

    <hr>
    <h1 class="my-4">Client Testimonials</h1>

    <div class="row">
      <?php
        $ret = "SELECT * FROM tms_feedback WHERE f_status = 'Published' ORDER BY RAND() LIMIT 3"; // Get all feedbacks
        $stmt = $mysqli->prepare($ret);
        $stmt->execute(); // Execute the query
        $res = $stmt->get_result();
        $cnt = 1;
        while ($row = $res->fetch_object()) {
      ?>
        <div class="col-lg-6 mb-4">
          <div class="card h-100">
            <h4 class="card-header"><?php echo $row->f_uname; ?></h4>
            <div class="card-body">
              <p class="card-text"><?php echo $row->f_content; ?></p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php include("vendor/inc/footer.php"); ?>
  <!-- .Footer -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
