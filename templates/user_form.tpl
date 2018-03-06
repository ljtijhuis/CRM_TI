<h1>{ $titel }</h1>
<form name="addUser" action="user.php?p=overview" method="post">
	<input type="hidden" name="id" value="{ $user->getId() }">
	<table>
		<tr>
			<td>Achternaam</td>
			<td><input type="text" name="achternaam" value="{ $user->getAchternaam()|escape }" /></td>
		</tr>
		<tr>
			<td>Voornaam</td>
			<td><input type="text" name="voornaam" value="{ $user->getVoornaam()|escape }" /></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="addUser" value="Bevestig" /></td>
		</tr>
	</table>
</form>