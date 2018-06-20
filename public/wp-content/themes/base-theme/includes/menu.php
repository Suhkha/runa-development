<nav class="navbar navbar-expand-lg navbar-light navbar--purple">
  <a class="navbar-brand navbar-brand--white" href="#">
    Development
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link nav--white nav-link--underline" href="<?php echo home_url(); ?>">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav--white nav-link--underline" href="<?php echo home_url(); ?>">Blog</a>
      </li>
    </ul>
    <?php wp_nav_menu(); ?>
  </div>
</nav>