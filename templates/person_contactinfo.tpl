<table>
	<tr>
		<td class="kopje">Telefoon Primair</td>
		<td>{ $persoon->getTelefoonPrimair()|default:"Onbekend" }</td>
	</tr>
	<tr>
		<td class="kopje">Telefoon Secundair</td>
		<td>{ $persoon->getTelefoonSecundair()|default:"Onbekend" }</td>
	</tr>
	<tr>
		<td class="kopje">Email</td>
		<td><a href="mailto:{ $persoon->getEmail() }">{ $persoon->getEmail()|default:"Onbekend" }</a></td>
	</tr>
</table>