<?php

function stavkaizbornika($putanja,$opis){
?>
<li><?php echo $_SERVER["PHP_SELF"] === $putanja ? "class=\"active\"" : "";?>
<a href="<?php echo $putanja;?>"><?php echo $opis;?></a>
</li>
<?php
} 

function provjeraOvlasti(){
	if(!isset($_SESSION[$GLOBALS["appID"]."autoriziran"])){
		header("location: " . $GLOBALS["putanjaAPP"]);
	}
}