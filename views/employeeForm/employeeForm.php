<!-- TODO Employee view -->
<?php
     $url = isset($_GET["url"]) ? $_GET["url"]: null;
     $url = rtrim($url, "/");
     $url = explode("/", $url);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Luxurious+Roman&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="<?=BASE_URL?>/assets/css/main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>

</head>
<body class="d-flex flex-column h-100" data-new-gr-c-s-check-loaded="14.1043.0" data-gr-ext-installed="">

    
<?php  require_once ASSETS . "html/navbar.php";?>
<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
    <?php 
    if(isset($_GET["created"])){
        echo '<div class="alert alert-success alert-dismissible fade show w-75 mx-auto" role="alert">
        Employee <strong>'.$employee["name"].'</strong> has been added to the database.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
    ?>
    <?php 
    if(isset($_GET["updated"])){
        echo '<div class="alert alert-warning alert-dismissible fade show w-75 mx-auto" role="alert">
        Employee <strong>'.$employee["name"].'</strong> has been updated in the database.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
    ?>
    
  <form class="w-50 mx-auto" method="POST" action=<?= isset($url[2]) ? "./library/employeeController.php?editEmployee_Form ": BASE_URL . "/employeeForm/addFormEmployee" ?>>
      <div class="form-row">
          <div class="form-group col-md-6">
              <label for="inputName">Name</label>
              <input type="text" class="form-control" name="name" id="inputName" value=<?=isset($url[2]) ?  $this->employee->name : "" ?>>
          </div> 
          <div class="form-group col-md-6">
              <label for="inputLastName">Last Name</label>
              <input type="text" class="form-control" name="lastName" id="inputLastName" value=<?=isset($url[2]) ?  $this->employee->lasName : "" ?>>
          </div>
      </div>
      <div class="form-row">
          <div class="form-group col-md-6">
              <label for="inputEmail">Email Address</label>
              <input type="email" class="form-control" name="email" id="inputEmail" aria-describedby="emailHelpInline" value=<?=isset($url[2]) ?  $this->employee->email : "" ?>>
              <small id="emailHelpInline" class="text-muted">
                  We'll always share your email with anyone else.
                </small>
          </div>
          <div class="form-group col-md-6">
              <label for="inputGender">Gender</label>
              <select id="inputGender" name="gender" class="form-control">
                <option value="man" <?= isset($url[2]) ? ($this->employee->gender =="male"? "selected" : "") :"" ?>>Male</option>
                <option value="woman" <?= isset($url[2]) ? ($this->employee->gender =="female"? "selected" : "") :"" ?>>Female</option>
                </select>
          </div>
      </div>
      <div class="form-row">
          <div class="form-group col-md-6">
              <label for="inputCity">City</label>
              <input type="text" class="form-control" name="city" id="inputCity" value=<?=isset($url[2]) ?  $this->employee->city : "" ?>>
          </div>
          <div class="form-group col-md-6">
              <label for="inputStreetAddress">Street Address</label>
              <input type="text" class="form-control" name="streetAddress" id="inputStreetAddress" value=<?=isset($url[2]) ?  $this->employee->streetAdress : "" ?>>
          </div>
      </div>
      <div class="form-row">
          <div class="form-group col-md-6">
              <label for="inputState">State</label>
              <input type="text" class="form-control" name="state" id="inputState" value=<?=isset($url[2]) ?  $this->employee->state : "" ?>>
          </div>
          <div class="form-group col-md-6">
              <label for="inputPhoneNumber">Phone Number</label>
              <input type="text" class="form-control" name="phoneNumber" id="inputPhoneNumber" value=<?=isset($url[2]) ?  $this->employee->phoneNumber : "" ?>>
          </div>
      </div>
      <div class="form-row">
          <div class="form-group col-md-6">
              <label for="inputPostalCode">Postal Code</label>
              <input type="number" class="form-control" name="postalCode" id="inputPostalCode" value=<?=isset($url[2]) ?  $this->employee->postalCode : "" ?>>
          </div>
      </div>
      <input hidden type="text" name="id" value=<?=isset($url[2]) ?  $this->employee->id : "" ?>>
      <button type="submit" class="btn btn-primary"><?= isset($url[2]) ? "Edit" : "Create" ?></button>
      <a class="btn btn-secondary" href="./dashboard.php" role="button">Return</a>
  </form>
</main>

<?php
 require ASSETS . "html/footer.php";
?>

<script src="../node_modules/jquery/dist/jquery.min.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    
  

</body>
</html>