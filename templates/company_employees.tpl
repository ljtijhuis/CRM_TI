<table>
	<th>Persoon</th><th>Telefoon Primair</th><th>Telefoon Secundair</th><th>Email</th><th>Functie</th><th>Geslacht</th><th>Actief</th>
{assign var="medewerkers" value=$bedrijf->getPersoons()}
{foreach item="persoon" from=$medewerkers}
	<tr>
		<td>
			<a href="person.php?p=person&id={$persoon->getId()}">{$persoon->getAchternaam()}, {$persoon->getRoepnaam()}</a>
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
			{$persoon->getFunctie()|default:"Onbekend"}
		</td>
		<td>
			{if $persoon->getGeslacht()}Vrouw{else}Man{/if}
		</td>
		<td>
			{if $persoon->getActief()}Ja{else}Nee{/if}
		</td>
	</tr>
{/foreach}
</table>