<?php if(!isLoggedIn()): ?>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
        <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
            WixPRO
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT?>/blogs">Blogs</a>
            </li>
            <li class="nav-item line">
                <!-- the middle ligne -->
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT?>/pages/support">Support</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT?>/pages/privacy">Privacy</a>
            </li>
        </ul>
        <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center user">
        <!-- Icon -->
        <button>
            <a class="text-reset me-3" href="<?php echo URLROOT?>/users/login">
                <i class="fa-solid fa-user"></i>
                Sign In
            </a>
        </button>        
        <!-- <a class="text-reset me-3" href="#">
            Sign up
        </a> -->
        </div>
    </div>
</nav>
<!-- Navbar -->
<?php endif ?>
<?php if(isLoggedIn()): ?>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
        <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
            WixPRO
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT?>/dashboard">Home</a>
            </li>
            <li class="nav-item line">
                <!-- the middle ligne -->
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT?>/dashboard/pages/support">Support</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT?>/dashboard/pages/privacy">Privacy</a>
            </li>
        </ul>
        <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center user">
        <button type="button" id="username" data-toggle="modal" data-target="#exampleModalCenter">
            <!-- Icon -->
            <img src="<?php echo URLROOT?>/public/img/user.svg" alt="">
                <?php echo $_SESSION['username'] ?>            
        </button>

        </div>
    </div>
</nav>
<?php endif ?>
