<h2>Openstaande Vervolgacties</h2>

{if count($todos) == 0}
<em>Geen openstaande vervolgacties</em>
{else}

{assign var="finished" value=false}
{foreach item="todo" from=$todos}
	{assign var="datum" value=$todo->getDatum()}
	{assign var="omschrijving" value=$todo->getOmschrijving()}
	{assign var="gebruiker" value=$todo->getGebruiker()}
	{assign var="id_todo" value=$todo->getId()}
	{include file="company_todo.tpl"}
{/foreach}
{/if}

<h2>Afgehandelde Vervolgacties</h2>
{if count($finished_todos) == 0}
<em>Geen afgehandelde vervolgacties</em>
{else}

{assign var="finished" value=true}
{foreach item="todo" from=$finished_todos}
	{assign var="datum" value=$todo->getDatum()}
	{assign var="omschrijving" value=$todo->getOmschrijving()}
	{assign var="gebruiker" value=$todo->getGebruiker()}
	{assign var="id_todo" value=$todo->getId()}
	{include file="company_todo.tpl"}
{/foreach}
{/if}