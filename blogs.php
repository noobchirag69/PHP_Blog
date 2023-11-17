<?php
require "config/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<?php
$title = "Blogs";
include "partials/head.php";
?>

<body>
  <!-- Navigation Bar -->
  <?php include "partials/navbar.php"; ?>
  <div class="main">
    <!-- Side Bar -->
    <?php include "partials/sidebar.php"; ?>
    <!-- Main Content -->
    <div class="content" tabindex="0">
      <div class="container">
        <h1 tabindex="0">Latest Blogs:</h1>
        <div class="blogs">
          <h3 tabindex="0">Blog 1</h3>
          <h3 tabindex="0">Blog 2</h3>
        </div>
      </div>
    </div>
  </div>
</body>

</html>