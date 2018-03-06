<h1>{ $titel }</h1>
<form name="addCompany" action="company.php?p={if $bedrijf->getId() != -1}manage{else}overview{/if}" method="post">
	<input type="hidden" name="id" value="{ $bedrijf->getId() }">
	
	<table>
		<tr>
			<td colspan="2"><h2>Algemeen</h2></td>
		</tr>
		<tr>
			<td>Organisatie Naam</td>
			<td><input type="text" name="naam" value="{ $bedrijf->getNaam()|escape }" /></td>
		</tr>
		<tr>
			<td>Telefoon algemeen</td>
			<td><input type="text" name="telefoon_algemeen" value="{ $bedrijf->getTelefoonAlgemeen()|escape }" /></td>
		</tr>
		<tr>
			<td>Website</td>
			<td><input type="text" name="website" value="{ $bedrijf->getWebsite()|escape }" /></td>
		</tr>
		<tr>
			<td>Provincie</td>
			<td>
				<select name="provincie_id">
					{assign var="current_provincie_id" value=$bedrijf->getProvincieId()}
					{foreach item="provincie" from=$provincies}
						<option value="{$provincie->getId()}"{if $provincie->getId() == $current_provincie_id } selected{/if}>{$provincie->getNaam()|escape}</option>
					{/foreach}
				</select>
			</td>
		</tr>
		<tr>
			<td>Bedrijfstype</td>
			<td>
				<select name="type_id">
					{assign var="current_type_id" value=$bedrijf->getTypeId()}
					{foreach item="organisatie_type" from=$organisatie_types}
						<option value="{$organisatie_type->getId()}"{if $organisatie_type->getId() == $current_type_id } selected{/if}>{$organisatie_type->getNaam()|escape}</option>
					{/foreach}
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2"><h2>Bezoekadres</h2></td>
		</tr>
		<tr>
			<td>Straatnaam</td>
			<td><input type="text" name="straat_bezoek" value="{ $bedrijf->getStraatBezoek()|escape }" /></td>
		</tr>
		<tr>
			<td>Nummer</td>
			<td><input type="text" name="nummer_bezoek" value="{ $bedrijf->getNummerBezoek()|escape }" /></td>
		</tr>
		<tr>
			<td>Postcode</td>
			<td><input type="text" name="postcode_bezoek" value="{ $bedrijf->getPostcodeBezoek()|escape }" /></td>
		</tr>
		<tr>
			<td>Stad</td>
			<td><input type="text" name="stad_bezoek" value="{ $bedrijf->getStadBezoek()|escape }" /></td>
		</tr>
		<tr>
			<td colspan="2"><h2>Postadres</h2></td>
		</tr>
		<tr>
			<td>Postbus</td>
			<td><input type="text" name="postbus_post" value="{ $bedrijf->getPostbusPost()|escape }" /></td>
		</tr>
		<tr>
			<td>Postcode</td>
			<td><input type="text" name="postcode_post" value="{ $bedrijf->getPostcodePost()|escape }" /></td>
		</tr>
		<tr>
			<td>Stad</td>
			<td><input type="text" name="stad_post" value="{ $bedrijf->getStadPost()|escape }" /></td>
		</tr>
		<tr>
			<td colspan="2"><h2>Medewerkers</h2></td>
		</tr>
		<tr>
			<td colspan="2"><p class="warning">Let op: Medewerkers die hier worden toegevoegd zullen geen onderdeel meer zijn van hun huidige organisatie.</p></td>
		</tr>
		<tr>
			<td>Medewerker toevoegen</td>
			<td><!--combobox en submit knop -->
				<select name="medewerker" id="medewerker">
				{foreach item="persoon" from=$personen}
					<option value="{$persoon->getId()}">{$persoon->getVoorletters()} {$persoon->getAchternaam()} ({$persoon->getRoepnaam()})</option>
				{/foreach}
				</select>
				<input type="image" title="Medewerker toevoegen" name="addemployee" src="./images/add.gif" onclick="return addListboxElement(document.getElementById('medewerkers'),document.getElementById('medewerker')[document.getElementById('medewerker').selectedIndex].text,document.getElementById('medewerker').value);"/>
			</td>
		</tr>
		<tr>
			<td>Huidige medewerkers</td>
			<td><!-- Lijst met medewerkers die zijn toegevoegd -->
				<select name="medewerkers[]" multiple="multiple" id="medewerkers" class="listbox" size="4">
				{assign var="medewerkers" value=$bedrijf->getPersoons()}
				{foreach item="persoon" from=$medewerkers}
					<option value="{$persoon->getId()}">{$persoon->getVoorletters()} {$persoon->getAchternaam()} ({$persoon->getRoepnaam()})</option>
				{/foreach}
				</select><input type="image" title="Verwijder medewerker" name="delemployee" src="./images/delete.gif" onclick="return removeListboxElement(document.getElementById('medewerkers'),document.getElementById('medewerkers').selectedIndex);"/>
			</td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="addCompany" value="Bevestig" onclick="selectAllOptions(document.getElementById('medewerkers'));" /></td>
		</tr>
	</table>
</form>