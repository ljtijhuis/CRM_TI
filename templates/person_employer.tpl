<table>
	<tr>
		<td class="kopje">Werkgever</td>
		{assign var="organisatie" value=$persoon->getOrganisatie()}
		<td>{if $organisatie == null}Geen{else}{$organisatie->getNaam()}{/if}</td>
	</tr>		
</table>