<h1>{ $titel }</h1>
<form name="addChance" id="entry_form" action="chance.php" method="post">
	<input type="hidden" name="source" value="{ $source|escape }">
	<input type="hidden" name="id" value="{ $chance->getId()|escape }">
	<input type="hidden" name="organisatie_id" value="{ $organisatie->getId()|escape }">
	<table>
		<tr>
			{assign var="datumpje" value=$chance->getDatum()|default:$smarty.now}
			<td>Datum*: <input type="text" id="datepicker" name="datum" value="{$datumpje|date_format:"%d-%m-%Y"|escape}" /></td>
			{assign var="datumpje" value=$chance->getPlanningUitvraag()|default:$smarty.now}
			<td>Planning uitvraag: <input type="text" id="datepicker_months" name="planning_uitvraag" value="{$datumpje|date_format:"%m-%Y"|escape}" /></td>
		</tr>
		<tr>
			<td>Wijze aanbesteding: <input type="text" name="wijze_aanbesteding" value="{$chance->getWijzeAanbesteding()}" /></td>
			<td>Kans (percentage): <input type="text" name="kans" id="kans" value="{$chance->getKans()|string_format:"%.2f"}" /></td>
		</tr>
		<tr>
			<td>Bedrag (euro's): <input type="text" name="bedrag" id="bedrag" value="{$chance->getBedrag()|string_format:"%.2f"}" /></td>
			<td>Virtuele omzet: <input type="text" id="virtuele_omzet" name="virtuele_omzet" value="{$chance->getVirtueleOmzet()|string_format:"%.2f"}" disabled="disabled" /></td>
		</tr>
		<tr>
			<td>
				Omschrijving: <textarea name="omschrijving" rows="4">{$chance->getOmschrijving()}</textarea>
			</td>
			<td>
				Product omschrijving: <textarea name="omschrijving_product" rows="4">{$chance->getOmschrijvingProduct()}</textarea>
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="addChance" value="Bevestig" /></td>
		</tr>
	</table>
	* De datum dient in het formaat 'dd-mm-jjjj' te zijn
</form>

{ literal }

<script type="text/javascript">
	$(document).ready(function(){
		
		updateVirtueleOmzet();
		$('#kans').change( function(){
			updateVirtueleOmzet();
		});
	
		$('#bedrag').change( function(){
			updateVirtueleOmzet();
		});
		
	});
	function updateVirtueleOmzet() {
		var bedrag = $('#entry_form').find('input[name="bedrag"]').val();
		var kans = $('#entry_form').find('input[name="kans"]').val();
		kans = kans / 100.00;
		$("#virtuele_omzet").val(bedrag * kans);
		$("#virtuele_omzet").formatCurrency({ symbol: '€ ' });
    }
	
</script>

{ /literal }