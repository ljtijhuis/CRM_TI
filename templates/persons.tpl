<h1>Personen</h1>

<p><a href="person.php?p=form">Persoon toevoegen</a></p>

<table id="table_persons">
	<thead>
		<tr><th>Persoon</th><th>Telefoon Primair</th><th>Telefoon Secundair</th><th>Email</th><th>Werkgever</th><th>Beheer</th></tr>
	</thead>
	<tbody>
{foreach item="persoon" from=$personen}
		<tr>
			<td>
            	<a href="person.php?p=person&id={$persoon->getId()}">{$persoon->getNaam()}</a>
			</td>
			<td>
				{$persoon->getTelefoonPrimair()|default:"-"}
			</td>
			<td>
				{$persoon->getTelefoonSecundair()|default:"-"}
			</td>
			<td>
				<a href="mailto:{ $persoon->getEmail() }">{$persoon->getEmail()}</a>
			</td>
			<td>
				{assign var=organisatie value=$persoon->getOrganisatie()}
	
				{if $organisatie != null}<a href="company.php?p=company&id={$organisatie->getId()}">{ $organisatie->getNaam()}</a>{else}Geen{/if}
			</td>
			<td>
				<a href="person.php?p=form&id={$persoon->getId()}"><img src="./images/edit.gif" title="Wijzig persoon" /></a>
                <a href="person.php?p=delete&id={$persoon->getId()}"><img src="./images/delete.gif" title="Verwijder persoon" /></a>
			</td>
		</tr>
{/foreach}
	</tbody>
</table>