<h1>Home</h1>

<form method="GET" action="index.php" id="paginationForm">
<input type="hidden" id="pageTodos" name="pageTodos" value="{$todos->getPage()}" />
<input type="hidden" id="pageChances" name="pageChances" value="{$chances->getPage()}" />
<input type="hidden" id="pageContacts" name="pageContacts" value="{$contacts->getPage()}" />
<input type="hidden" id="sortTodos" name="sortTodos" value="{$sortTodos}" />
<input type="hidden" id="sortChances" name="sortChances" value="{$sortChances}" />
<input type="hidden" id="sortContacts" name="sortContacts" value="{$sortContacts}" />

<h2>Vervolgacties</h2>
<table id="table_todos" class="overview">
	<thead>
		<tr>
			<th>Deadline</th><th>Gebruiker</th><th>Organisatie</th><th>Omschrijving</th><th>Acties</th>
		</tr>
		<tr class="filters">
			<td>&nbsp;</td>
			<td>
				<select name="filterTodosUserId" onchange="this.form.submit()">
						<option value="-1">Filter..</option>
					{foreach item="user" from=$gebruikers}
						<option value="{$user->getId()}"{if $user->getId() == $selectedTodosUserId } selected{/if}>{$user->getNaam()}</option>
					{/foreach}
				</select>
			</td>
			<td>
				<select name="filterTodosCompanyId" onchange="this.form.submit()">
					<option value="-1">Filter..</option>
				{foreach item="organisatie" from=$bedrijven}
					<option value="{$organisatie->getId()}"{if $organisatie->getId() == $selectedTodosCompanyId } selected{/if}>{$organisatie->getNaam()}</option>
				{/foreach}
				</select>
			</td>
			<td>
				<input type="text" name="filterTodosDescription" value="{$filterTodosDescription}"/><input type="submit" value="Filter" />
			</td>
			<td>&nbsp;</td>
		</tr>
	</thead>
	<tbody>
		{if count($todos) == 0}
		<tr>
			<td colspan="5" style="text-align:center;">
				<em>Geen vervolgacties gevonden.</em>
			</td>
		</tr>
		{/if}
		{foreach item="vervolgactie" from=$todos}
        {assign var="organisatie" value=$vervolgactie->getOrganisatie()}
        {assign var="gebruiker" value=$vervolgactie->getGebruiker()}
		<tr>
			<td class="date_field">{$vervolgactie->getDatum()|date_format:"%Y-%m-%d"}</td><td>{if $gebruiker!=null}<a href="user.php?p=user&id={$gebruiker->getId()}">{$gebruiker->getNaam()}</a>{/if}</td><td>{if $organisatie!=null}<a href="company.php?p=company&id={$organisatie->getId()}">{$organisatie->getNaam()}</a>{/if}</td><td>{$vervolgactie->getOmschrijving()}</td><td><a href="todo.php?source=2&action=fin&id={$vervolgactie->getId()}"><img src="images/tick.jpg" title="Vervolgactie Afvinken"></a></td>
		</tr>
		{/foreach}
		{if $todos->haveToPaginate()}
		<tr>
			<td colspan="5" class="pagination">
			{if $todos->getPage() != 1}
				<a class="button" onclick="setValueAndSubmit('pageTodos',{$todos->getFirstPage()})"><img src="images/arrow_left_double.png" /></a>
				<a class="button" onclick="setValueAndSubmit('pageTodos',{$todos->getPage()-1})"><img src="images/arrow_left.png" /></a>
			{/if}
	        {assign var="links" value=$todos->getLinks(5)}
	        {foreach item="link" from=$links}
	        	{if $link == $todos->getPage()}
	        		{$link}
	        	{else}
		        	<a class="button" onclick="setValueAndSubmit('pageTodos',{$link})">{$link}</a>
	        	{/if}
	        {/foreach}
	        {if $todos->getPage() != $todos->getLastPage()}
				<a class="button" onclick="setValueAndSubmit('pageTodos',{$todos->getPage()+1})"><img src="images/arrow_right.png" /></a>
				<a class="button" onclick="setValueAndSubmit('pageTodos',{$todos->getLastPage()})"><img src="images/arrow_right_double.png" /></a>
			{/if}
			</td>
		</tr>
		{/if}
	</tbody>
</table>

<h2>Kansen</h2>
<table id="filter_table" class="overview">
	<thead>
		<tr>
			<th>Planning uitvraag</th><th>Organisatie</th><th>Omschrijving</th><th>Product omschrijving</th><th>Wijze aanbesteding</th><th>Bedrag</th><th>Kans</th><th>Virtuele omzet</th>
		</tr>
		<tr class="filters">
			<td>&nbsp;</td>
			<td>
				<select name="filterChancesCompanyId" onchange="this.form.submit()">
					<option value="-1">Filter..</option>
				{foreach item="organisatie" from=$bedrijven}
					<option value="{$organisatie->getId()}"{if $organisatie->getId() == $selectedChancesCompanyId } selected{/if}>{$organisatie->getNaam()}</option>
				{/foreach}
				</select>
			</td>
			<td>
				<input type="text" name="filterChancesDescription" value="{$filterChancesDescription}"/><input type="submit" value="Filter" />
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</thead>
	<tbody>
		{if count($chances) == 0}
		<tr>
			<td colspan="8" style="text-align:center;">
				<em>Geen kansen gevonden.</em>
			</td>
		</tr>
		{/if}
		{foreach item="kans" from=$chances}
        {assign var="organisatie" value=$kans->getOrganisatie()}
		<tr>
			<td class="date_field right-align">{$kans->getPlanningUitvraag()|date_format:"%b %Y"}</td>
			<td>{if $organisatie!=null}<a href="company.php?p=company&id={$organisatie->getId()}">{$organisatie->getNaam()}</a>{/if}</td>
			<td>{$kans->getOmschrijving()}</td>
			<td>{$kans->getOmschrijvingProduct()}</td>
			<td>{$kans->getWijzeAanbesteding()}</td>
			<td class="right-align">&euro; {$kans->getBedrag()|string_format:"%.2f"}</td>
			<td class="right-align">{$kans->getKans()|string_format:"%.2f"}%</td>
			<td class="right-align">&euro; {$kans->getVirtueleOmzet()|string_format:"%.2f"}</td>
		</tr>
		{/foreach}
		<tr>
			<td colspan="7" id="virtuele_omzet_totals">
				<strong>Totaal in periode:</strong>
				<select id="virtuele_omzet_periode">
					<option value="{$totalVirtueleOmzet|string_format:"%.2f"}">Alle openstaande kansen</option>
					{foreach item="amount" key="period" from=$periodsAndAmounts}
					<option value="{$amount|string_format:"%.2f"}">{$period}</option>
					{/foreach}
				</select>
			</td>
			<td class="right-align">
				&euro; <span id="virtuele_omzet_amount">{$totalVirtueleOmzet|string_format:"%.2f"}</span>
			</td>
		</tr>
		{if $chances->haveToPaginate()}
		<tr>
			<td colspan="8" class="pagination">
			
				{if $chances->getPage() != 1}
					<a class="button" onclick="setValueAndSubmit('pageChances',{$chances->getFirstPage()})"><img src="images/arrow_left_double.png" /></a>
					<a class="button" onclick="setValueAndSubmit('pageChances',{$chances->getPage()-1})"><img src="images/arrow_left.png" /></a>
				{/if}
				{assign var="links" value=$chances->getLinks(5)}
				{foreach item="link" from=$links}
					{if $link == $chances->getPage()}
						{$link}
					{else}
						<a class="button" onclick="setValueAndSubmit('pageChances',{$link})">{$link}</a>
					{/if}
				{/foreach}
				{if $chances->getPage() != $chances->getLastPage()}
					<a class="button" onclick="setValueAndSubmit('pageChances',{$chances->getPage()+1})"><img src="images/arrow_right.png" /></a>
					<a class="button" onclick="setValueAndSubmit('pageChances',{$chances->getLastPage()})"><img src="images/arrow_right_double.png" /></a>
				{/if}
			
			</td>
		</tr>
		{/if}
	</tbody>
</table>

{ literal }

<script type="text/javascript">
	$(document).ready(function(){
		
		$('#virtuele_omzet_periode').change( function(){
			$('#virtuele_omzet_amount').text(this.value);
		});
		
	});
	
</script>

{ /literal }

<h2>Contactmomenten</h2>
<table id="table_contacts" class="overview">
	<thead>
		<tr>
			<th>Datum</th><th>Persoon</th><th>Organisatie</th><th>Gebruiker</th><th>Omschrijving</th>
		</tr>
		<tr class="filters">
			<td>&nbsp;</td>
			<td>
				<select name="filterContactsPersonId" onchange="this.form.submit()">
						<option value="-1">Filter..</option>
					{foreach item="person" from=$personen}
						<option value="{$person->getId()}"{if $person->getId() == $selectedContactsPersonId } selected{/if}>{$person->getNaam()}</option>
					{/foreach}
				</select>
			</td>
			<td>
				<select name="filterContactsCompanyId" onchange="this.form.submit()">
					<option value="-1">Filter..</option>
				{foreach item="organisatie" from=$bedrijven}
					<option value="{$organisatie->getId()}"{if $organisatie->getId() == $selectedContactsCompanyId } selected{/if}>{$organisatie->getNaam()}</option>
				{/foreach}
				</select>
			</td>
			<td>
				<select name="filterContactsUserId" onchange="this.form.submit()">
						<option value="-1">Filter..</option>
					{foreach item="user" from=$gebruikers}
						<option value="{$user->getId()}"{if $user->getId() == $selectedContactsUserId } selected{/if}>{$user->getNaam()}</option>
					{/foreach}
				</select>
			</td>
			<td>
				<input type="text" name="filterContactsDescription" value="{$filterContactsDescription}"/><input type="submit" value="Filter" />
			</td>
		</tr>
	</thead>
	<tbody>
		{if count($contacts) == 0}
		<tr>
			<td colspan="5" style="text-align:center;">
				<em>Geen contactmomenten gevonden.</em>
			</td>
		</tr>
		{/if}
		{foreach item="contact" from=$contacts}
		{assign var="wijze" value=$contact->getWijze()}
        {assign var="organisatie" value=$contact->getOrganisatie()}
		{assign var="persoon" value=$contact->getPersoon()}
        {assign var="gebruiker" value=$contact->getGebruiker()}
		<tr>
			<td class="date_field">{$contact->getDatum()|date_format:"%Y-%m-%d %H:%M"}</td><td>{if $persoon!=null}<a href="person.php?p=person&id={$persoon->getId()}">{$persoon->getNaam()}</a>{/if}</td><td>{if $organisatie!=null}<a href="company.php?p=company&id={$organisatie->getId()}">{$organisatie->getNaam()}</a>{/if}</td><td>{if $gebruiker!=null}<a href="user.php?p=user&id={$gebruiker->getId()}">{$gebruiker->getNaam()}</a>{/if}</td><td>{$contact->getAandachtspunten()}</td>
		</tr>
		{/foreach}
		{if $contacts->haveToPaginate()}
		<tr>
			<td colspan="5" class="pagination">
			{if $contacts->getPage() != 1}
				<a class="button" onclick="setValueAndSubmit('pageContacts',{$contacts->getFirstPage()})"><img src="images/arrow_left_double.png" /></a>
				<a class="button" onclick="setValueAndSubmit('pageContacts',{$contacts->getPage()-1})"><img src="images/arrow_left.png" /></a>
			{/if}
	        {assign var="links" value=$contacts->getLinks(5)}
	        {foreach item="link" from=$links}
	        	{if $link == $contacts->getPage()}
	        		{$link}
	        	{else}
		        	<a class="button" onclick="setValueAndSubmit('pageContacts',{$link})">{$link}</a>
	        	{/if}
	        {/foreach}
	        {if $contacts->getPage() != $contacts->getLastPage()}
				<a class="button" onclick="setValueAndSubmit('pageContacts',{$contacts->getPage()+1})"><img src="images/arrow_right.png" /></a>
				<a class="button" onclick="setValueAndSubmit('pageContacts',{$contacts->getLastPage()})"><img src="images/arrow_right_double.png" /></a>
			{/if}
			</td>
		</tr>
		{/if}
	</tbody>
</table>
</form>