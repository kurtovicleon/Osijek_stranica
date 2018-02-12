<div class="loginBox">
			<img src="slike/user.png" class="user">
			<h2>Prijava</h2>

				<p>Email</p>
				<form class="log-in-form" action="autorizacija.php" method="post">
				<input type="email" name="email" placeholder="prijava@osijek.hr"
				value="<?php if(isset($_GET["email"]))
				{ echo $_GET["email"];}
					?>">
				<p>Lozinka</p>
				<input type="password" name="lozinka" placeholder="Vaša lozinka">
			
			<input type="submit" class="button expanded" value="Prijava"  ></input>
			<?php if(isset($_GET["neuspjelo"])){
					echo "<p style='color:red;'>"."Neispravna kombinacija"."</p>" ;
				
				} ?>
			<label>
				<a href="#">Zaboravljena lozinka?</a></label>
			</form>
		</div>