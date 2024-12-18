<script>
    window.addEventListener('scroll', function () {
        const navbar = document.querySelector('.navbar-custom');
        const sticky = navbar.offsetTop;

        if (window.scrollY >= sticky) {
            navbar.classList.add('sticky');
        } else {
            navbar.classList.remove('sticky');
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<header>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid ">
        <a class="logo" href="index.php"><img src="images/logo_MUMO.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav m-auto ">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="calendrier.php">Événements Calendrier</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pompidou.php">MuMo x Pompidou</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Pedagogie.php">Pédagogique</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="A_Propos.php">À Propos</a>
                    </li>
                    <a class="icon_nav" href="connexion.php">
                        <div class="user-icon">👤</div>
                    </a>
                </ul>
            </div>
        </div>
    </nav>
</header>