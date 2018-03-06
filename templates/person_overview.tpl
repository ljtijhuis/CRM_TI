<h1>Persoon {$persoon->getVoorletters()} {$persoon->getAchternaam()}</h1>
<table class="overview">
	<tr>
		<td>
			<h2>Algemeen</h2>
			{include file="person_general.tpl"}
		</td>
		<td>
			<h2>Contactinformatie</h2>
			{include file="person_contactinfo.tpl"}
			<hr>
			<h2>Organisatie</h2>
			{include file="person_employer.tpl"}
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<div id="tabs">
				<ul>
					<li><a href="#contactmomenten">Contactmomenten</a></li>
				</ul>
				<div id="tab_content">
					<div id="contactmomenten">
						{assign var="contacts" value=$persoon->getContacts()}
						{include file="person_contacts.tpl"}
					</div>
				</div>
			</div>
		</td>
	</tr>
</table>