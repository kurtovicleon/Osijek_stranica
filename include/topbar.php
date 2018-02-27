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
        <?php 
        stavkaizbornika($putanjaapp . "kategorije/Profil.php", "Profil");
        stavkaizbornika($putanjaapp . "kategorije/Mojidogadaji.php", "Moji dogadaji");
        stavkaizbornika($putanjaapp . "kategorije/Mojegalerije.php", "Galerija");
        stavkaizbornika($putanjaapp . "kategorije/Kontakt.php", "Kontakt");
        stavkaizbornika($putanjaapp . "kategorije/Naslovna.php", "Naslovna");
        ?>
        <li>
        <?php if(isset($_SESSION["autoriziran"])): ?>
        <a href="<?php echo $putanjaapp;?>logout.php"><button type="button" class="button hollow topbar-responsive-button"><?php echo $_SESSION["autoriziran"];?></button></a>
        	<?php else: ?>
          <a href="<?php echo $putanjaapp;?>login.php"><button type="button" class="button hollow topbar-responsive-button">Prijava</a></button>
<?php endif;?>
        </li>
      </ul>
    </div>
  </div>
</nav>

