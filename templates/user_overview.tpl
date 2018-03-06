<h1>Gebruiker {$gebruiker->getNaam()}</h1>

<table class="overview">
<tr>
	<td>
		<div id="tabs">
			<ul>
				<li><a href="#contactmomenten">Contactmomenten</a></li>
				<li><a href="#vervolgacties">Vervolgacties</a></li>
			</ul>
			<div id="tab_content">
				<div id="contactmomenten">
					{assign var="contacts" value=$gebruiker->getContacts()}
					{include file="user_contacts.tpl"}
				</div>
				<div id="vervolgacties">
					{assign var="todos" value=$gebruiker->getVervolgacties()}
					{assign var="finished_todos" value=$gebruiker->getVervolgacties(true)}
					{include file="user_todos.tpl"}
				</div>
			</div>
		</div>
	</td>
</tr>
</table>