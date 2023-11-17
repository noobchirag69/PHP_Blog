<?php
require "config/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<?php
$title = "Gallery";
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
        <h1 tabindex="0">Photo Gallery</h1>
        <p tabindex="0">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi
          quod velit earum soluta ratione perspiciatis reiciendis id hic
          aliquam provident.
        </p>
      </div>
    </div>
  </div>
</body>

</html>