<?php

//session_start();
//isset($_SESSION["email"]) ? header("Location:./src/dashboard.php") : "";

//require_once '../assets/html/header.php'; ruta corregir 

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="./assets/css/login.css">
<?php
        session_start();
        if(isset($_SESSION["admin"])){
          header("Location:" . BASE_URL . "/dashboard");
        }?>
<body>
  <section class=" gradient-custom">
    <div class="container py-5 h-90 ">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 max-height: 100% text-center">
              <div class="mb-md-5 mt-md-4 pb-5">
                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                <p class="text-white-50 mb-5">Please enter your login and password!</p>
                <form action="<?php echo  BASE_URL ?>/login/logIn" method="post">
                  <div class="form-outline form-white mb-4">
                    <input name="email" type="text" id="typeEmailX" class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX">Email or user</label>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input name="password" type="password" id="typePasswordX" class="form-control form-control-lg" />
                    <label class="form-label" for="typePasswordX">Password</label>
                    <br>
                    <label class="form-label" for="typePasswordX"><?= isset($_GET["loginError"]) ? "Invalid email, user or Password" : "" ?></label>
                  </div>
                  <button class="btn btn-outline-light btn-lg px-5" type="submit" name="submitLogin">Login</button>
                </form>

                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                  <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>