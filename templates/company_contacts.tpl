{if count($contacts) == 0}
<em>Geen contactmomenten</em>
{else}

{foreach item="contact" from=$contacts}
	{assign var="datum" value=$contact->getDatum()}
	{assign var="wijze" value=$contact->getWijze()}
	{assign var="persoon" value=$contact->getPersoon()}
	{assign var="gebruiker" value=$contact->getGebruiker()}
	{assign var="aandachtspunten" value=$contact->getAandachtspunten()}
	{assign var="id_contact" value=$contact->getId()}
	{include file="company_contact.tpl"}
{/foreach}
{/if}