<h1>Exporteren</h1>

<form name="export" action="export.php" method="post">
<input type="hidden" name="postCheck" value="1">
<strong>Filters</strong>
<ul id="export_filter">
	<li>
		<strong>Provincies</strong> <a onClick="changeSelection('provinces')">Inverteer selectie</a>
		<ul id="provinces">
		{foreach item="provincie" from=$provincies}
			<li><input type="checkbox" name="provinces[]" value="{$provincie->getId()}" checked /> {$provincie->getNaam()}</li>
		{/foreach}
		</ul>
	</li>

	<li>
		<strong>Organisatie types</strong> <a onClick="changeSelection('organisation_types')">Inverteer selectie</a>
		<ul id="organisation_types">
		{foreach item="type" from=$organisatie_types}
			<li><input type="checkbox" name="organisation_types[]" value="{$type->getId()}" checked /> {$type->getNaam()}</li>
		{/foreach}
		</ul>
	</li>

	<li>
		<strong>Organisaties</strong> <a onClick="changeSelection('organisations')">Inverteer selectie</a>
		<ul id="organisations">
		{foreach item="organisatie" from=$bedrijven}
			<li><input type="checkbox" name="companies[]" value="{$organisatie->getId()}" checked /> {$organisatie->getNaam()}</li>
		{/foreach}
		</ul>
	</li>
	
	<li>
		<strong>Personen</strong> <a onClick="changeSelection('persons')">Inverteer selectie</a>
		<ul id="persons">
		{foreach item="persoon" from=$personen}
			<li><input type="checkbox" name="persons[]" value="{$persoon->getId()}" checked /> {$persoon->getAchternaam()}, {$persoon->getRoepnaam()}</li>

		{/foreach}
		</ul>
	</li>
</ul>

<p>
<input type="checkbox" name="kerstkaart" value="true" />Exporteer alleen personen welke een kerstkaart ontvangen<br/>
<input type="checkbox" name="mailing" value="true" />Exporteer alleen personen welke de mailing ontvangen<br/>
<input type="checkbox" name="actief" value="true" checked />Exporteer alleen personen welke op actief staan<br/>
<input type="checkbox" name="needtohavecompany" value="true" checked />Exporteer alleen personen welke aan een organisatie gekoppeld zijn
</p>

<p><input type="submit" name="export" value="Exporteer" /></p>

</form>