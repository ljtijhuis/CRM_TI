<h1>{ $titel }</h1>
<form name="addTodo" id="entry_form" action="todo.php" method="post">
	<input type="hidden" name="source" value="{ $source|escape }">
	<input type="hidden" name="id" value="{ $todo->getId() }">
	<input type="hidden" name="organisatie_id" value="{ $organisatie->getId() }">
	<table>
		<tr>
			{assign var="datumpje" value=$todo->getDatum()|default:$smarty.now}
			<td>Deadline*: <input type="text" id="datepicker" name="datum" value="{$datumpje|date_format:"%d-%m-%Y"|escape}" /></td>
			<td>
				Gebruiker:
				{assign var="current_gebruiker_id" value=$todo->getGebruikerId()}
				<select name="gebruiker_id">
				{foreach item="gebruiker" from=$gebruikers}
					<option value="{$gebruiker->getId()}"{if $gebruiker->getId()==$current_gebruiker_id} selected{/if}>{$gebruiker->getAchternaam()}, {$gebruiker->getVoornaam()}</option>
				{/foreach}
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<textarea name="omschrijving" rows="4">{$todo->getOmschrijving()}</textarea>
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="addTodo" value="Bevestig" /></td>
		</tr>
	</table>
	* De deadline dient in het formaat 'dd-mm-jjjj' te zijn
</form>