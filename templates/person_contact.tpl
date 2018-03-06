<table class="entry_table">
	<tr>
		<td><strong>Datum:</strong> {$datum|date_format:"%e %b %Y %H:%M"}</td>
		<td><strong>Wijze:</strong> {$contact_wijzes[$wijze]}</td>
	</tr>
	<tr>
		<td colspan="2"><strong>Gebruiker:</strong> {$gebruiker->getNaam()}</td>
	</tr>
	<tr>
		<td colspan="2">{$aandachtspunten|nl2br}</td>
	</tr>
</table>
<br/>