<div class="mx-auto order-0 gt-america text-lowercase">

    <ul class="menu-mobile navbar-nav mr-auto collapse navbar-collapse"  id='menu-navbar'>
      <li class="nav-item">
        <a class="nav-link navbar-arde" href="https://proyectoarde.org" >Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link navbar-arde" href="http://archivo.proyectoarde.org" target="_blank">Archivo</a>
      </li>
      <?php $link_slug = 'colecciones'; include('link-in-navbar.php'); ?>
      <?php $link_slug = 'editorial'; include('link-in-navbar.php'); ?>
      <?php $link_slug = 'materiales'; include('link-in-navbar.php'); ?>
      <?php $link_slug = 'sobre-nosotros'; include('link-in-navbar.php'); ?>
      <li class="nav-item d-md-block d-none">
        <a class="nav-link navbar-arde" href="#"><i class="fas fa-search"></i></a>
      </li>
    </ul>

</div>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-navbar">
    <span class="navbar-toggler-icon"></span>
</button>