<h1>{ $titel }</h1>
<form name="addContact" id="entry_form" action="contact.php" method="post">
	<input type="hidden" name="source" value="{ $source|escape }">
	<input type="hidden" name="id" value="{ $contact->getId() }">	
	<table>
		<tr>
			{assign var="datumpje" value=$contact->getDatum()|default:$smarty.now}
			<td>
				Datum*:<br/>
				<input type="text" id="datepicker" class="tijd" name="datum" value="{$datumpje|date_format:"%d-%m-%Y"|escape}" />
				<select name="uur" class="tijd">
				{section name=foo loop=24} 
					<option value="{if $smarty.section.foo.iteration < 11}0{/if}{$smarty.section.foo.iteration-1}"{if $datumpje|date_format:"%H" == $smarty.section.foo.iteration-1} selected{/if}>{if $smarty.section.foo.iteration < 11}0{/if}{$smarty.section.foo.iteration-1}</option>
				{/section}
				</select>:
				<select name="minuten" class="tijd">
				{section name=foo loop=60} 
					<option value="{if $smarty.section.foo.iteration < 11}0{/if}{$smarty.section.foo.iteration-1}"{if $datumpje|date_format:"%M" == $smarty.section.foo.iteration-1} selected{/if}>{if $smarty.section.foo.iteration < 11}0{/if}{$smarty.section.foo.iteration-1}</option>
				{/section}
				</select>
			</td>
			<td>
				Wijze:
				{assign var="current_wijze" value=$contact->getWijze()}
				<select name="wijze">
				{foreach item="wijze" key="i" from=$contact_wijzes}
					<option value="{$i}"{if $i == $current_wijze} selected{/if}>{$wijze|escape}</option>
				{/foreach}
				</select>
			</td>
		</tr>
		<tr>
			<td>
				Medewerker:
				{assign var="current_medewerker_id" value=$contact->getPersoonId()}
				<select name="persoon_id">
				{foreach item="persoon" from=$personen}
					<option value="{$persoon->getId()}"{if $persoon->getId()==$current_medewerker_id} selected{/if}>{$persoon->getVoorletters()} {$persoon->getAchternaam()} ({$persoon->getRoepnaam()})</option>
				{/foreach}
				</select>
			</td>
			<td>
				Gebruiker:
				{assign var="current_gebruiker_id" value=$contact->getGebruikerId()}
				<select name="gebruiker_id">
				{foreach item="gebruiker" from=$gebruikers}
					<option value="{$gebruiker->getId()}"{if $gebruiker->getId()==$current_gebruiker_id} selected{/if}>{$gebruiker->getAchternaam()}, {$gebruiker->getVoornaam()}</option>
				{/foreach}
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<textarea name="aandachtspunten" rows="4">{$contact->getAandachtspunten()}</textarea>
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="addContact" value="Bevestig" /></td>
		</tr>
	</table>
	* De datum dient in het formaat 'dd-mm-jjjj' te zijn
</form>