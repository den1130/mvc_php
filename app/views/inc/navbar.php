<nav class="py-2 bg-light border-bottom mb-3">
  <div class="container">
    <div class="container d-flex flex-wrap">
      <ul class="nav me-auto">
        <li class="nav-item"><a href="<?php echo URLROOT; ?>" class="nav-link link-dark px-2" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="<?php echo URLROOT; ?>/pages/about" class="nav-link link-dark px-2">About</a></li>
        
      </ul>
      <ul class="nav">
        <?php if(isset($_SESSION['user_id'])): ?>
          <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Welcome, <?php echo $_SESSION['user_name']; ?></a></li>
          <li class="nav-item"><a href="<?php echo URLROOT; ?>/users/logout" class="nav-link link-dark px-2">Log out</a></li>
        <?php else : ?>      
          <li class="nav-item"><a href="<?php echo URLROOT; ?>/users/register" class="nav-link link-dark px-2">Register</a></li>
          <li class="nav-item"><a href="<?php echo URLROOT; ?>/users/login" class="nav-link link-dark px-2">Login</a></li>
        <?php endif; ?>

      </ul>
    </div>
  </div>
</nav>