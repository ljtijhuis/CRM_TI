<table class="entry_table">
	<tr>
		<td><strong>Deadline:</strong> {$datum|date_format:"%e %b %Y"}</td>
		<td><strong>Gebruiker:</strong> {$gebruiker->getAchternaam()}, {$gebruiker->getVoornaam()}</td>
		<td>
			<a href="todo.php?source=1&company={$bedrijf->getId()}&id={$id_todo}"><img src="images/edit.gif" title="Vervolgactie Bewerken"></a>
			<a href="todo.php?source=1&action=del&id={$id_todo}"><img src="images/delete.gif" title="Vervolgactie Verwijderen"></a>
			{if $finished == false}<a href="todo.php?source=1&action=fin&id={$id_todo}"><img src="images/tick.jpg" title="Vervolgactie Afvinken"></a>{/if}
		</td>
	</tr>
	<tr>
		<td colspan="3">{$omschrijving}</td>
	</tr>
</table>