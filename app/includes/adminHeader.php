<header>
    <a class="logo" href="/">
        <h1 class="logo-text"><span>Garrett</span>Inspires</h1>
    </a>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
        
        <?php  if (isset($_SESSION['user'])) : ?>
            <li>
            <a href="/">
            <i class="fa fa-globe"></i>
            Public</a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    <?php echo $_SESSION['user']['username']; ?>
                    <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                </a>
                <ul>
                    <li><a href="../logout.php" class="logout">Logout</a></li>
                </ul>
            </li>
        <?php endif; ?>
    </ul>
</header>