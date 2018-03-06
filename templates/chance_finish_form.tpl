<h1>Kans afhandelen</h1>
<form name="finishChance" id="entry_form" action="chance.php" method="post">
	<input type="hidden" name="source" value="{ $source|escape }">
	<input type="hidden" name="id" value="{ $chance->getId()|escape }">
	<table id="chance_result">
		<tr>
			<td class="radio_button"><input type="radio" name="resultaat" id="rb1" value="{ $opdracht }" checked="checked"></td><td><label for="rb1">Opdracht</label></td>
		</tr>
		<tr>
			<td class="radio_button"><input type="radio" name="resultaat" id="rb2" value="{ $gemist }"></td><td><label for="rb2">Gemist</label></td>
		</tr>
		<tr>
			<td class="radio_button"><input type="radio" name="resultaat" id="rb3" value="{ $vervallen }"></td><td><label for="rb3">Vervallen</label></td>
		</tr>
		
		
		<!-- Alleen indien NIET vervallen -->
		<tr id="bedrag_inschrijving">
			<td colspan="2">Bedrag inschrijving (euro's): <input type="text" name="bedrag_inschrijving" value="0.00" /></td>
		</tr>
		
		<!-- Indien gemist -->
		<tr id="bedrag_concurrent">
			<td colspan="2">Bedrag concurrent (euro's): <input type="text" name="bedrag_concurrent" value="0.00" /></td>
		</tr>
		<tr id="gemist_opmerking">
			<td colspan="2">Opmerking: <textarea name="gemist_opmerking" rows="4"></textarea></td>
		</tr>		
		
		<tr>
			<td colspan="2"><input type="submit" name="finishChance" value="Bevestig" /></td>
		</tr>

	</table>
</form>

{ literal }

<script type="text/javascript">
	$(document).ready(function(){
		
		$('#bedrag_inschrijving').show();
		$('#bedrag_concurrent').hide();
		$('#gemist_opmerking').hide();
		$('input[type=radio][name=resultaat]').change( function(){
			hideAndShow(this);
		});
		
	});
	function hideAndShow(rb) {
	
		if (rb.value == 
{ /literal }{ $opdracht }{ literal }) {
			$('#bedrag_inschrijving').show();
			$('#bedrag_concurrent').hide();
			$('#gemist_opmerking').hide();
		} else if (rb.value == 
{ /literal }{ $gemist }{ literal }) {
			$('#bedrag_inschrijving').show();		
			$('#bedrag_concurrent').show();
			$('#gemist_opmerking').show();
		} else {
			$('#bedrag_inschrijving').hide();
			$('#bedrag_concurrent').hide();
			$('#gemist_opmerking').hide();
		}
    }
	
</script>

{ /literal }