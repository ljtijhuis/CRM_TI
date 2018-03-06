<h1>Acties exporteren</h1>

<form name="export" action="exportActions.php" method="post">

<strong>Filters</strong>
<ul id="export_actions_filter">
	<li>
		<strong>Data</strong>
		<ul>
			<li>
				<table>
					<tr>
						<td>Vanaf:</td>
						<td><input type="text" id="datepicker" name="dateFrom" value="{"-6 months"|date_format:"%d-%m-%Y"}"/></td>
					</tr>
					<tr>
						<td>Tot:</td>
						<td><input type="text" id="datepicker2" name="dateTo" value="{"+6 months"|date_format:"%d-%m-%Y"}"/></td>
					</tr>
				</table>
			</li>
		</ul>
	</li>
	<li>
		<strong>Contactmomenten</strong>
		<ul id="contacts">
			<li class="too_low">Zoekterm: <input type="text" name="keywordContacts" /></li>
		</ul>
	</li>

	<li>
		<strong>Vervolgacties</strong>
		<ul id="todos">
			<li><input type="checkbox" name="onlyOpenTodos" id="onlyOpenTodos" checked /><label for="onlyOpenTodos">Alleen openstaande vervolgacties exporteren</label></li>
			<li class="too_low">Zoekterm: <input type="text" name="keywordTodos" /></li>
		</ul>
	</li>
	
	<li>
		<strong>Kansen</strong>
		<ul id="chances">
			<li>Alleen kansen exporteren met de volgende status:
				<ul>
					<li><input type="checkbox" name="exportOpenChances" id="exportOpenChances" checked /><label for="exportOpenChances">Open</label></li>
					<li><input type="checkbox" name="exportOpdrachtChances" id="exportOpdrachtChances" /><label for="exportOpdrachtChances">Opdracht</label></li>
					<li><input type="checkbox" name="exportGemistChances" id="exportGemistChances" /><label for="exportGemistChances">Gemist</label></li>
					<li><input type="checkbox" name="exportVervallenChances" id="exportVervallenChances" /><label for="exportVervallenChances">Vervallen</label></li>
				</ul>
			</li>
			<li class="too_low">Zoekterm: <input type="text" name="keywordChances" /></li>			
		</ul>
	</li>
</ul>

<p><input type="submit" name="export" value="Exporteer" /></p>

</form>