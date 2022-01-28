<?php
// TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees
require ASSETS . "html/header.php";
?>

<!-- todo Import here because if we import in header.html it doesn't work-->
<!-- todo import from CDN and Others -->

<link rel="stylesheet" href="<?=ASSETS?>css/main.css">
<script src="../assets/js/index.js"></script>
<!-- todo when the page load call function to fill the table -->
<body>
    <?php
        require ASSETS . "html/navbar.php";
    ?>

    <section>
    <main role="main" class="flex-shrink-0">
  <div class="container">
    <div id="jsGrid"></div>
  </div>
</main>
    </section>

    <?php
        //require '../assets/html/footer.php';
    ?>

</body>

</html>

<script src="../node_modules/jquery/dist/jquery.min.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../node_modules/jsgrid/dist/jsgrid.min.js"></script>
<script src="../assets/js/index.js"></script>