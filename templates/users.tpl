<h1>Gebruikers</h1>

<p><a href="user.php?p=form">Gebruiker toevoegen</a></p>

<table id="table_users">
	<thead>
		<tr><th>Achternaam, voornaam</th><th>Beheer</th></tr>
	</thead>
	<tbody>
	{foreach item="gebruiker" from=$gebruikers}
		<tr>
			<td>
				<a href="user.php?p=user&id={$gebruiker->getId()}">{$gebruiker->getNaam()}</a>
			</td>
			<td>
				<a href="user.php?p=form&id={$gebruiker->getId()}"><img src="./images/edit.gif" title="Wijzig gebruiker" /></a>
                <a href="user.php?p=delete&id={$gebruiker->getId()}"><img src="./images/delete.gif" title="Verwijder gebruiker" /></a>
			</td>
		</tr>
	{/foreach}
	</tbody>
</table>