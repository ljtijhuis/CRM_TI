<h1>{ $titel }</h1>
<form name="addPerson" action="person.php?p={if $persoon->getId() != -1}manage{else}overview{/if}" method="post">
	<input type="hidden" name="id" value="{ $persoon->getId() }">		
	<table>
		<tr>
			<td colspan="2"><h2>Algemeen</h2></td>
		</tr>
		<tr>
			<td>Achternaam</td>
			<td><input type="text" name=achternaam value="{ $persoon->getAchternaam()|escape }" /></td>
		</tr>
		<tr>
			<td>Voorletters</td>
			<td><input type="text" name="voorletters" value="{ $persoon->getVoorletters()|escape }" /></td>
		</tr>
		<tr>
			<td>Roepnaam</td>
			<td><input type="text" name="roepnaam" value="{ $persoon->getRoepnaam()|escape }" /></td>
		</tr>
		<tr>
			<td>Functie</td>
			<td><input type="text" name="functie" value="{ $persoon->getFunctie()|escape }" /></td>
		</tr>
		<tr>
			<td>Geslacht</td>
			<td>
				<input type="radio" name="geslacht" value="0"{if !$persoon->getGeslacht()} checked="checked"{/if} /> Man
				<br />
				<input type="radio" name="geslacht" value="1"{if $persoon->getGeslacht()} checked="checked"{/if} /> Vrouw
			</td>
		</tr>
		<tr>
			<td>Actief</td>
			<td>
				<input type="radio" name="actief" value="1"{if $persoon->getActief()} checked="checked"{/if} /> Ja
				<br />
				<input type="radio" name="actief" value="0"{if !$persoon->getActief()} checked="checked"{/if} /> Nee
			</td>
		</tr>
				<tr>
			<td>Kerstkaart</td>
			<td>
				<input type="radio" name="kerstkaart" value="1"{if $persoon->getKerstkaart()} checked="checked"{/if} /> Ja
				<br />
				<input type="radio" name="kerstkaart" value="0"{if !$persoon->getKerstkaart()} checked="checked"{/if} /> Nee
			</td>
		</tr>
				<tr>
			<td>Mailing</td>
			<td>
				<input type="radio" name="mailing" value="1"{if $persoon->getMailing()} checked="checked"{/if} /> Ja
				<br />
				<input type="radio" name="mailing" value="0"{if !$persoon->getMailing()} checked="checked"{/if} /> Nee
			</td>
		</tr>
		<tr>
			<td colspan="2"><h2>Contactinformatie</h2></td>
		</tr>
		<tr>
			<td>Telefoon Primair</td>
			<td><input type="text" name="telefoon_primair" value="{ $persoon->getTelefoonPrimair()|escape }" /></td>
		</tr>
		<tr>
			<td>Telefoon Secundair</td>
			<td><input type="text" name="telefoon_secundair" value="{ $persoon->getTelefoonSecundair()|escape }" /></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" value="{ $persoon->getEmail()|escape }" /></td>
		</tr>
		<tr>
			<td colspan="2"><h2>Organisatie</h2></td>
		</tr>
		<tr>
			<td>Werkgever</td>
			<td>
				<select name="organisatie_id">
					<option value="-1">Geen</option>
				{assign var="current_organisatie_id" value=$persoon->getOrganisatieId()}
				{foreach item="organisatie" from=$bedrijven}
					<option value="{$organisatie->getId()}"{if $organisatie->getId() == $current_organisatie_id } selected{/if}>{$organisatie->getNaam()}</option>
				{/foreach}
				</select>
			</td>
		</tr>		
		<tr>
			<td colspan="2"><input type="submit" name="addPerson" value="Bevestig" /></td>
		</tr>
	</table>
</form>