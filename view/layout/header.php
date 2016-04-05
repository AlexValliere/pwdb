<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php?route=home">Panzer Waltz DataBase</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<?php if ($current_user == NULL) { ?>
					<li><a href="index.php?route=login">Connexion</a></li>
					<li><a href="index.php?route=register">Inscription</a></li>
				<?php } else { ?>
					<li><a href="index.php?route=create_metal_maiden">Add new Metal Maiden</a></li>
					<li><a href="index.php?route=logout">Déconnexion</a></li>
				<?php } ?>
			</ul>
			<form class="navbar-form navbar-right">
				<input type="text" class="form-control" placeholder="Search...">
			</form>
		</div>
	</div>
</nav>