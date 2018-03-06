<h1>Organisatie {$bedrijf->getNaam()}</h1>
<table class="overview">
	<tr>
		<td>
			<h2>Algemeen</h2>
			{include file="company_general.tpl"}
		</td>
		<td>
			<h2>Bezoekadres</h2>
			{include file="company_visit.tpl"}		
		</td>
		<td>
			<h2>Postadres</h2>
			{include file="company_mail.tpl"}
		</td>
	</tr>
	<tr>
		<td colspan="3">
			<h2>Medewerkers</h2>
			{include file="company_employees.tpl"}
		</td>
	</tr>
<tr>
<td colspan="3">
<br />
<div id="tabs">
	<ul>
		<li><a href="#contactmomenten">Contactmomenten</a> <a href="contact.php?source=1&company={$bedrijf->getId()}"><img src="images/add.gif" title="Contactmoment toevoegen"></a></li>
		<li><a href="#vervolgacties">Vervolgacties</a> <a href="todo.php?source=1&company={$bedrijf->getId()}"><img src="images/add.gif" title="Vervolgactie toevoegen"></a></li>
		<li><a href="#kansen">Kansen</a> <a href="chance.php?source=1&company={$bedrijf->getId()}"><img src="images/add.gif" title="Kans toevoegen"></a></li>
	</ul>
	<div id="tab_content">
		<div id="contactmomenten">
			{assign var="contacts" value=$bedrijf->getContacts()}
			{include file="company_contacts.tpl"}
		</div>
		<div id="vervolgacties">
			{assign var="todos" value=$bedrijf->getVervolgacties()}
			{assign var="finished_todos" value=$bedrijf->getVervolgacties(true)}
			{include file="company_todos.tpl"}
		</div>
		<div id="kansen">
			{assign var="chances" value=$bedrijf->getKanss()}
			{assign var="finished_chances" value=$bedrijf->getKanss(true)}
			{include file="company_chances.tpl"}
		</div>
	</div>
</div>
</td>
</tr>
</table>
