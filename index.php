<?php
require "config/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<?php
$title = "Home";
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
        <h1 tabindex="0">Welcome to PHP Blogs</h1>
        <p tabindex="0">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque
          facilis consequuntur, voluptates corrupti voluptatibus alias minima
          expedita harum asperiores aut quas, reiciendis sunt iste rerum
          quibusdam velit. Quidem reiciendis voluptatum illo. Tenetur
          architecto incidunt, saepe eligendi ad aliquid soluta similique
          vitae exercitationem maiores temporibus vel, id, eveniet officia est
          modi.
        </p>
        <a href="blogs.php">Read Blogs</a>
        <p class="copyright" tabindex="0">
          Copyright &copy; 2023 - All Rights Reserved.
        </p>
      </div>
    </div>
  </div>
</body>

</html>