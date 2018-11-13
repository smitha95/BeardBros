<?php include 'templates/header.php'; ?>
<div class="jumbotron jumbotron-fluid" style="background-color:#336B87 !important;">
  <div class="container">
    <h1 class="display-4 index">Welcome to the Beard Bros!</h1>
    <p class="lead" style="text-align:center; font-size:23px;">We are two friends with a love for development together we created the Beard Bros!</p>
  </div>
</div>
<!--
Blog posts and about info should be created insinde a db for refference across site.
-->
<div class="wrapper container">
  <div class="row">
      <div class="col-md-6">
        <?php
          echo file_get_contents( "austin.php" ); // get the contents, and echo it out.
        ?>

      </div>
      <div class="col-md-6">
        <?php
          echo file_get_contents( "isaac.php" ); // get the contents, and echo it out.
        ?>
      </div>
    </div>
</div>
<?php include 'templates/footer.php'; ?>
