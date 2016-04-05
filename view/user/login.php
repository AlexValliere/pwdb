<form method="post" action="index.php?route=login" enctype="multipart/form-data" id="login">
	<h1 class="large">Login</h1>
	<fieldset>
		<input name="username" type="text" id="username" placeholder="username" required /><br />
		<input type="password" name="password" id="password" placeholder="password" required /><br />
	</fieldset>
	<input type="submit" value="Connexion" />
	<p><a href="index.php?route=forgotten_password">Mot de passe oublié ?</a></p>
</form>
<?php
if (VERBOSE)
{
	if ($method == 'POST')
	{
		echo var_dump($dbhandler);
		echo var_dump($_POST);
		echo var_dump($user);
		echo var_dump($form_errors);
	}
}
?>