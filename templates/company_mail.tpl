<table>
	<tr>
		<td class="kopje">Postbus</td>
		<td>{ $bedrijf->getPostbusPost()|default:"Onbekend" }</td>
	</tr>
	<tr>
		<td class="kopje">Postcode</td>
		<td>{ $bedrijf->getPostcodePost()|default:"Onbekend" }</td>
	</tr>
	<tr>
		<td class="kopje">Stad</td>
		<td>{ $bedrijf->getStadPost()|default:"Onbekend" }</td>
	</tr>
</table>