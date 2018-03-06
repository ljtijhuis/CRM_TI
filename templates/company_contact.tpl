<table class="entry_table">
	<tr>
		<td><strong>Datum:</strong> {$datum|date_format:"%e %b %Y %H:%M"}</td>
		<td><strong>Wijze:</strong> {$contact_wijzes[$wijze]}</td>
		<td>
			<a href="contact.php?source=1&company={$bedrijf->getId()}&id={$id_contact}"><img src="images/edit.gif" title="Contactmoment Bewerken"></a>
			<a href="contact.php?source=1&action=del&id={$id_contact}"><img src="images/delete.gif" title="Contactmoment Verwijderen"></a>
		</td>
	</tr>
	<tr>
		<td><strong>Medewerker:</strong> {$persoon->getAchternaam()}, {$persoon->getRoepnaam()}</td>
		<td colspan="2"><strong>Gebruiker:</strong> {$gebruiker->getAchternaam()}, {$gebruiker->getVoornaam()}</td>
	</tr>
	<tr>
		<td colspan="3">{$aandachtspunten|nl2br}</td>
	</tr>
</table>
<br/>