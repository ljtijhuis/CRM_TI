<h2>Openstaande Kansen</h2>

{if count($chances) == 0}
<em>Geen openstaande kansen</em>
{else}
<table class="entry_table entry_table_chances">
{assign var="finished" value=false}
{foreach item="chance" from=$chances}
	{assign var="datum" value=$chance->getDatum()}
	{assign var="planning_uitvraag" value=$chance->getPlanningUitvraag()}
	{assign var="wijze_aanbesteding" value=$chance->getWijzeAanbesteding()}
	{assign var="kans" value=$chance->getKans()}
	{assign var="bedrag" value=$chance->getBedrag()}
	{assign var="virtuele_omzet" value=$chance->getVirtueleOmzet()}
	{assign var="product_omschrijving" value=$chance->getOmschrijvingProduct()}
	{assign var="omschrijving" value=$chance->getOmschrijving()}
	{assign var="id_chance" value=$chance->getId()}
	{include file="company_chance.tpl"}

{/foreach}
	
	<tr>
		<td colspan="7" class="right-align"><strong>Totale virtuele omzet:</strong></td>
		<td class="right-align">&euro; {$bedrijf->getTotaleVirtueleOmzet()|string_format:"%.2f"}</td>
	</tr>

</table>
{/if}

<h2>Afgehandelde Kansen</h2>

{if count($finished_chances) == 0}
<em>Geen afgehandelde kansen</em>
{else}
<table class="entry_table entry_table_chances">
{assign var="finished" value=true}
{foreach item="chance" from=$finished_chances}
	{assign var="datum" value=$chance->getDatum()}
	{assign var="planning_uitvraag" value=$chance->getPlanningUitvraag()}
	{assign var="wijze_aanbesteding" value=$chance->getWijzeAanbesteding()}
	{assign var="product_omschrijving" value=$chance->getOmschrijvingProduct()}
	{assign var="omschrijving" value=$chance->getOmschrijving()}
	{assign var="resultaat" value=$chance->getResultaat()}
	{assign var="bedrag_inschrijving" value=$chance->getBedragInschrijving()}
	{assign var="bedrag_concurrent" value=$chance->getBedragConcurrent()}
	{assign var="gemist_omschrijving" value=$chance->getGemistOpmerking()}
	{assign var="id_chance" value=$chance->getId()}
	{include file="company_chance.tpl"}

{/foreach}
</table>
{/if}