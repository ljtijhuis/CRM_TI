<table>
	<tr>
		<td class="kopje">Achternaam</td>
		<td>{ $persoon->getAchternaam()|default:"Onbekend" }</td>
	</tr>
	<tr>
		<td class="kopje">Voorletters</td>
		<td>{ $persoon->getVoorletters()|default:"Onbekend" }</td>
	</tr>
	<tr>
		<td class="kopje">Roepnaam</td>
		<td>{ $persoon->getRoepnaam()|default:"Onbekend" }</td>
	</tr>
	<tr>
		<td class="kopje">Functie</td>
		<td>{ $persoon->getFunctie()|default:"Onbekend" }</td>
	</tr>
	<tr>
		<td class="kopje">Geslacht</td>
		<td>{if !$persoon->getGeslacht()}Man{else}Vrouw{/if}</td>
	</tr>
	<tr>
		<td class="kopje">Actief</td>
		<td>{if $persoon->getActief()}Ja{else}Nee{/if}</td>
	</tr>
	<tr>
		<td class="kopje">Kerstkaart</td>
		<td>{if $persoon->getKerstkaart()}Ja{else}Nee{/if}</td>
	</tr>
	<tr>
		<td class="kopje">Mailing</td>
		<td>{if $persoon->getMailing()}Ja{else}Nee{/if}</td>
	</tr>
</table>