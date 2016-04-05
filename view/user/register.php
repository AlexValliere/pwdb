<?php
if (!($method == 'POST' && empty($form_errors)))
{
	?>
<?php
foreach ($form_errors as $key => $value)
{
	echo '<p>' . $value . '</p>';
}
?>
<form method="post" action="index.php?route=register" enctype="multipart/form-data" id="register">
	<h1>Créer un compte</h1>
	<fieldset>
		<label for="username">* Nom d'utilisateur :</label>  <input name="username" type="text" id="username" size="14" required /><br />
		<label for="password">* Mot de passe :</label><input type="password" name="password" id="password" size="14" required /><br />
		<label for="password_confirm">* Confirmer le mot de passe :</label><input type="password" name="password_confirm" id="confirm" size="14" required /><br />
		<label for="email">* Email :</label><input type="text" name="email" id="email" size="14" required /><br />
	</fieldset>
	<input type="submit" value="Créer le compte" />
</form>
	<?php
}
else
{
	?>
<p>Inscription OK</p>
	<?php
}
?>
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