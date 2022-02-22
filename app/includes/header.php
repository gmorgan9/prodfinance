<header>
    <a href="/" class="logo">
      <h1 class="logo-text"><span>Garrett</span>Inspires</h1>
    </a>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
      <li><a href="/">Home</a></li>
      <li><a href="<?php echo BASE_URL . '/documentation.php'; ?>">Documentation</a></li>
      <li><a href="<?php echo BASE_URL . '/about.php'; ?>">About</a></li>

      <?php  if (isset($_SESSION['user'])) : ?>
        <li>
          <a href="#">
            <i class="fa fa-user"></i>
            <?php echo $_SESSION['user']['username']; ?>
            <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
          </a>
          <ul>
            <?php if($_SESSION['user']['user_type'] == 'admin' || $_SESSION['user']['user_type'] == 'superadmin'): ?>
              <li><a href="admin/dashboard.php">Dashboard</a></li>
            <?php endif; ?>
            <li><a href="/?logout='1'" class="logout">Logout</a></li>
          </ul>
        </li>
      <?php else: ?>
        <li><a href="register.php">Sign Up</a></li>
        <li><a href="login.php">Login</a></li>
      <?php endif; ?>
    </ul>
</header>