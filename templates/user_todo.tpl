<table class="entry_table">
	<tr>
		<td><strong>Deadline:</strong> {$datum|date_format:"%e %b %Y"}</td>
		<td><strong>Organisatie:</strong> {$bedrijf->getNaam()}</td>
		<td>
			{if $finished == false}<a href="todo.php?source=3&action=fin&id={$id_todo}"><img src="images/tick.jpg" title="Vervolgactie Afvinken"></a>{/if}
		</td>
	</tr>
	<tr>
		<td colspan="3">{$omschrijving}</td>
	</tr>
</table>