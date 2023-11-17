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
          <div class="blog" tabindex="0">
            <h1 tabindex="0">Blog Title</h1>
            <p tabindex="0">By Author</p>
            <p tabindex="0">Blog Summary - Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus, fugit voluptatem accusamus deserunt soluta hic. Soluta vero nisi aperiam praesentium!</p>
            <a href="#">Read More</a>
          </div>
          <div class="blog" tabindex="0">
            <h1 tabindex="0">Blog Title</h1>
            <p tabindex="0">By Author</p>
            <p tabindex="0">Blog Summary - Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus, fugit voluptatem accusamus deserunt soluta hic. Soluta vero nisi aperiam praesentium!</p>
            <a href="#">Read More</a>
          </div>
          <div class="blog" tabindex="0">
            <h1 tabindex="0">Blog Title</h1>
            <p tabindex="0">By Author</p>
            <p tabindex="0">Blog Summary - Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus, fugit voluptatem accusamus deserunt soluta hic. Soluta vero nisi aperiam praesentium!</p>
            <a href="#">Read More</a>
          </div>
          <div class="blog" tabindex="0">
            <h1 tabindex="0">Blog Title</h1>
            <p tabindex="0">By Author</p>
            <p tabindex="0">Blog Summary - Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus, fugit voluptatem accusamus deserunt soluta hic. Soluta vero nisi aperiam praesentium!</p>
            <a href="#">Read More</a>
          </div>
          <div class="blog" tabindex="0">
            <h1 tabindex="0">Blog Title</h1>
            <p tabindex="0">By Author</p>
            <p tabindex="0">Blog Summary - Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus, fugit voluptatem accusamus deserunt soluta hic. Soluta vero nisi aperiam praesentium!</p>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>