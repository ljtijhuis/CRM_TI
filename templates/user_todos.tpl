<h2>Openstaande Vervolgacties</h2>
{assign var="finished" value=false}
{foreach item="todo" from=$todos}
	{assign var="datum" value=$todo->getDatum()}
	{assign var="omschrijving" value=$todo->getOmschrijving()}
	{assign var="bedrijf" value=$todo->getOrganisatie()}
	{assign var="id_todo" value=$todo->getId()}
	{include file="user_todo.tpl"}
{/foreach}

<h2>Afgehandelde Vervolgacties</h2>
{assign var="finished" value=true}
{foreach item="todo" from=$finished_todos}
	{assign var="datum" value=$todo->getDatum()}
	{assign var="omschrijving" value=$todo->getOmschrijving()}
	{assign var="bedrijf" value=$todo->getOrganisatie()}
	{assign var="id_todo" value=$todo->getId()}
	{include file="user_todo.tpl"}
{/foreach}