	<tr>
		<td><strong>Datum:</strong> {$datum|date_format:"%e %b %Y"}</td>
		<td>
			<a href="chance.php?source=1&company={$bedrijf->getId()}&id={$id_chance}"><img src="images/edit.gif" title="Kans Bewerken"></a>
			<a href="chance.php?source=1&action=del&id={$id_chance}"><img src="images/delete.gif" title="Kans Verwijderen"></a>
			{if $finished == false}<a href="chance.php?source=1&action=fin&id={$id_chance}"><img src="images/tick.jpg" title="Kans Afhandelen"></a>{/if}
		</td>
		<td><strong>Product omschrijving</strong></td>
		<td><strong>Wijze aanbesteding</strong></td>
		<td><strong>Planning uitvraag</strong></td>
		
		{if $finished == false}
		<td><strong>Bedrag</strong></td>
		<td><strong>Kans</strong></td>
		<td><strong>Virtuele omzet</strong></td>
		{else}
		<td><strong>Resultaat</strong></td>
		<td><strong>Bedrag inschrijving</strong></td>
		<td><strong>Bedrag concurrent</strong></td>
		<td><strong>Opmerking</strong></td>
		{/if}
	</tr>
	<tr>
		<td colspan="2">{$omschrijving}</td>
		<td>{$product_omschrijving}</td>
		<td>{$wijze_aanbesteding}</td>
		<td>{$planning_uitvraag|date_format:"%b %Y"}</td>
		{if $finished == false}
		<td class="right-align">&euro; {$bedrag|string_format:"%.2f"}</td>
		<td class="right-align">{$kans|string_format:"%.2f"}%</td>
		<td class="right-align">&euro; {$virtuele_omzet|string_format:"%.2f"}</td>
		{else}
		<td class="resultaat_{$resultaat}">{$resultaat_opties[$resultaat]}</td>
		<td class="right-align">{if $resultaat == $opdracht || $resultaat == $gemist}&euro; { $bedrag_inschrijving }{else}-{/if}</td>
		<td class="right-align">{if $resultaat == $gemist}&euro; { $bedrag_concurrent }{else}-{/if}</td>
		<td>{if $resultaat == $gemist}{ $gemist_opmerking }{else}-{/if}</td>
		{/if}
	</tr>