<?php
// TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees
require ASSETS . "html/header.php";
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Luxurious+Roman&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="<?=BASE_URL?>/assets/css/main.css">
<script src="<?=BASE_URL?>/assets/js/index.js"  defer></script>
<!-- todo when the page load call function to fill the table -->
<body>
    <?php
        require ASSETS . "html/navbar.php";
    ?>

    <section>
        <!-- todo main section  -->
        <div id="jsGrid"> </div>
    </section>

    <?php
        //require '../assets/html/footer.php';
    ?>

</body>

</html>