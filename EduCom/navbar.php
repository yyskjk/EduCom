<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="home.php">Educom</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav" >
            <li class="nav-item">
                <a class="nav-link">Welcome, <strong><?php echo $_SESSION['username']; ?></strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="notices.php">Notices</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="subjects.php">Online Lectures</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="files.php">Ebooks</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="info.php">Our teachers</a>
            </li>
        </ul>
    </div>
    <button type="button" class="btn btn-dark" id="logout-button"><a href="home.php?logout='1'" style="color: #ff5722; text-decoration: none">logout</a></button>
</nav>