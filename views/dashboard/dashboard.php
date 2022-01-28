<?php
// TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees
require ASSETS . "html/header.php";
?>

<!-- todo Import here because if we import in header.html it doesn't work-->
<!-- todo import from CDN and Others -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Luxurious+Roman&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<script src="./../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="<?=ASSETS?>css/main.css">
<script src="../assets/js/index.js"></script>
<!-- todo when the page load call function to fill the table -->
<body onload=" callGrid(); ">
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
<script src="../assets/js/dashboard.js"></script>