<header>
	<a href="index.php"><p>Panzer Waltz DataBase</p></a>
	<nav id="menu">
		<ul>
			<li><a href="index.php?route=home">Home</a></li>
			<?php if ($current_user == NULL) { ?>
				<li><a href="index.php?route=login">Connexion</a></li>
				<li><a href="index.php?route=register">Inscription</a></li>
			<?php } else { ?>
				<li><a href="index.php?route=create_metal_maiden">Add new Metal Maiden</a></li>
				<li><a href="index.php?route=logout">Déconnexion</a></li>
			<?php } ?>
		</ul>
	</nav>
</header>