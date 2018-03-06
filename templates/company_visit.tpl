<table>
	<tr>
		<td class="kopje">Straatnaam</td>
		<td>{ $bedrijf->getStraatBezoek()|default:"Onbekend" }</td>
	</tr>
	<tr>
		<td class="kopje">Nummer</td>
		<td>{ $bedrijf->getNummerBezoek()|default:"Onbekend" }</td>
	</tr>
	<tr>
		<td class="kopje">Postcode</td>
		<td>{ $bedrijf->getPostcodeBezoek()|default:"Onbekend" }</td>
	</tr>
	<tr>
		<td class="kopje">Stad</td>
		<td>{ $bedrijf->getStadBezoek()|default:"Onbekend" }</td>
	</tr>
</table>