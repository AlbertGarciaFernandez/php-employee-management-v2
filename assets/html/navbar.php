
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark">
      <a class="navbar-brand" href="#">Employees Management</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="<?=BASE_URL?>/dashboard">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=BASE_URL?>/employeeForm">Employee</a>
          </li>
        </ul>
        <ul class="navbar-nav px-3">
          <li class="nav-item text-nowrap">
              <a class="nav-link" href="<?= BASE_URL?>/login/logout?logout">Log out</a>
          </li>
          </ul>
      </div>
    </nav>
</header>
