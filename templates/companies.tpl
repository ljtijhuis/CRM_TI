<h1>Organisaties</h1>

<p><a href="company.php?p=form">Organisatie toevoegen</a></p>

<table id="table_organisations">
	<thead>
		<tr><th>Organisatie naam</th><!--<th>Acties</th>--><th>Beheer</th></tr>
	</thead>
	<tbody>
	{foreach item="bedrijf" from=$bedrijven}
		<tr>
			<td>
				<a href="company.php?p=company&id={$bedrijf->getId()}">{$bedrijf->getNaam()}</a>
			</td>
	
			<!--<td>
				<a href="contact.php?source=0&company={$bedrijf->getId()}" ><img src="images/phone.png" title="Contactmoment toevoegen" /></a>
				<a href="todo.php?source=0&company={$bedrijf->getId()}"><img src="images/todo.gif" title="Vervolgactie toevoegen"></a>
				<a href="chance.php?source=0&company={$bedrijf->getId()}"><img src="images/chance.png" title="Kans toevoegen"></a>
			</td>-->
			<td>
				<a href="company.php?p=form&id={$bedrijf->getId()}"><img src="./images/edit.gif" title="Wijzig organisatie" /></a>
				<a href="company.php?p=delete&id={$bedrijf->getId()}"><img src="./images/delete.gif" title="Verwijder organisatie" /></a>
			</td>
		</tr>
	{/foreach}
	</tbody>
</table>