<!--todo html Navbar content --> 

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <div class="col d-flex ">
            <span>
                <i class="fas fa-rocket"> Rocket Employee System</i>
            </span>
        </div>
        <div class="col d-flex">
        </div>
        <div class="col d-flex justify-content-end">
            <form action="<?=BASE_URL?>/login/logout" method="POST">
                <button class="d-flex justify-content-end btn btn-light " type="submit" name="logout">Log out </button>
            </form>
        </div>

    </div>
</nav>