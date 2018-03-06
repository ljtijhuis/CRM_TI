{foreach item="contact" from=$contacts}
	{assign var="datum" value=$contact->getDatum()}
	{assign var="wijze" value=$contact->getWijze()}
	{assign var="persoon" value=$contact->getPersoon()}
	{assign var="bedrijf" value=$contact->getOrganisatie()}
	{assign var="aandachtspunten" value=$contact->getAandachtspunten()}
	{assign var="id_contact" value=$contact->getId()}
	{include file="user_contact.tpl"}
{/foreach}
