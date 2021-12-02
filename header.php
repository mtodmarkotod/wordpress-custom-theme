<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-float">
      <div class="container">
        <a href="<?php echo site_url('/'); ?>" class="navbar-brand">Digi<span class="text-primary">Gram.</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-lg-4 pt-3 pt-lg-0">
            <li class="nav-item active">
              <a href="<?php echo site_url('/'); ?>" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url('/about'); ?>" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url('/services'); ?>" class="nav-link">Services</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url('/news'); ?>" class="nav-link">News</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url('/contact'); ?>" class="nav-link">Contact</a>
            </li>
          </ul>

          <div class="ml-auto">
            <a href="#" class="btn btn-outline rounded-pill">Get a Quote</a>
          </div>
        </div>
      </div>
    </nav>
  </header>