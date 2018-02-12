<nav class="top-bar topbar-responsive">
  <div class="top-bar-title">
    <span data-responsive-toggle="topbar-responsive" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle></button>
    </span>
    <a class="topbar-responsive-logo" href="#"><strong><?php echo $naslovapp; ?></strong></a>
  </div>
  <div id="topbar-responsive" class="topbar-responsive-links">
    <div class="top-bar-right">
      <ul class="menu simple vertical medium-horizontal">
        <li><a href="kategorije/Naslovna.php">Naslovna</a></li>
        <li><a href="kategorije/Mojidogadaji.php">Moji događaji </a></li>
        <li><a href="kategorije/Mojegalerije.php">Moje galerije</a></li>
        <li><a href="kategorije/Profil.php">Profil</a></li>
        <li><a href="kategorije/Kontakt.php">Kontakt</a></li>
        <li>
        <?php if(isset($_SESSION["autoriziran"])): ?>
        <a href="<?php echo $putanjaapp;?>logout.php"><button type="button" class="button hollow topbar-responsive-button"><?php echo $_SESSION["autoriziran"];?></button></a>
        	<?php else: ?>
          <button type="button" class="button hollow topbar-responsive-button"><a href="<?php echo $putanjaapp;?>login.php">Prijava</a></button>
<?php endif;?>
        </li>
      </ul>
    </div>
  </div>
</nav>

