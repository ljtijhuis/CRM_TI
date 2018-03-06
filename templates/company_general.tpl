<table>
	<tr>
		<td class="kopje">Organisatie Naam</td>
		<td>{ $bedrijf->getNaam()|default:"Onbekend" }</td>
	</tr>
	<tr>
		<td class="kopje">Telefoon algemeen</td>
		<td>{ $bedrijf->getTelefoonAlgemeen()|default:"Onbekend" }</td>
	</tr>
	<tr>
		<td class="kopje">Website</td>
		<td>{ $bedrijf->getWebsite()|default:"Onbekend" }</td>
	</tr>
	<tr>
		<td class="kopje">Provincie</td>
		<td>
			{assign var="provincie" value=$bedrijf->getProvincie()}
			{ $provincie->getNaam()|default:"Onbekend" }
		</td>
	</tr>
	<tr>
		<td class="kopje">Bedrijfstype</td>
		<td>
			{assign var="organisatie_type" value=$bedrijf->getOrganisatieType()}
			{ $organisatie_type->getNaam()|default:"Onbekend" }
		</td>
	</tr>

</table>