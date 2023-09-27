<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
        <!-- Insert Logo Image Here -->
        <a class="navbar-brand" href="#">
            <img src="..\public\uploads\logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-middle">
            Mariveles Management Information System
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto"> <!-- Place the menu on the right using ml-auto -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php if(session()->get('isAdminLoggedIn')):?>
                        Welcome <?=session()->get('name'); ?>
                    <?php endif; ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-auto">
                    <li><a class="dropdown-item ml-right" href="#">Asset Management <br> Information System</a></li>
                    <li><a class="dropdown-item ml-right" href="#">Human Resources <br> Management Information System</a></li>
                    <li><a class="dropdown-item ml-right" href="#">Financial Management <br> Information System</a></li>
                        <!-- Add a divider here -->
                    <div class="dropdown-divider"></div>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <a class="dropdown-item" href="<?=base_url()?>admin/logout">Logout</a>
                </ul>
            </li> 
            <li class="nav-item dropdown">
                <button class="nav-link dropdown-toggle btn btn-secondary" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    Notifications <span class="badge badge-danger">3</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="#">Notification 1</a></li>
                    <li><a class="dropdown-item" href="#">Notification 2</a></li>
                    <li><a class="dropdown-item" href="#">Notification 3</a></li>
                </ul>
            </li>               
            </ul>
        </div>
    </div>
</nav>
