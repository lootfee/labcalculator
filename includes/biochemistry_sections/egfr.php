<script>
	$(document).ready(function() {
		$("#egfrAdult").show();
		$("#egfrPedia").hide();
	});

</script>

<section id="egfrSection">
<input type="radio" name="calculations" id="egfrRadio">
<label for="egfrRadio" class="sidelinkLabel">eGFR</label>
	<form id="egfrForm">
		<div id="egfrAdult">
			  <table id="egfrAdultTable" class="tableContainer">
					<h2>ADULT</h2>
					<tr>
					  <td align="left" class="inputLabel">Serum Creatinine:&nbsp;</td>
					  <td align="center" colspan="2"><input type="text" class="inputData" name="screa3" id="screa3"></td>
					</tr>
					<tr>
					  <td align="left" class="inputLabel">Age:&nbsp;</td>
					  <td align="center" colspan="2"><input type="text" class="inputData" name="age" id="age"></td>
					</tr>
					<tr>
					  <td align="left" class="inputLabel">Gender:&nbsp;</td>
					  <td align="center" class="radioCell"><input class="inputRadio" type="radio" name="egfradgen" id="genm"><label for="genm" class="tableLabel">Male</label></td>
					  <td align="center" class="radioCell"><input class="inputRadio" type="radio" name="egfradgen" id="genf"><label for="genf" class="tableLabel">Female</label></td>
					</tr>
					<tr>
					  <td align="left" class="inputLabel">Race:&nbsp;</td>
					  <td align="center" class="radioCell"><input class="inputRadio" type="radio" name="egfradrace" id="raceb"><label for="raceb" class="tableLabel">Black</label></td>
					  <td align="center" class="radioCell"><input class="inputRadio" type="radio" name="egfradrace" id="raceo"><label for="raceo" class="tableLabel">Others</label></td>
					</tr>
					<tr>
					  <td align="left">eGFR (mL/min/1.73m<sup>2</sup>):&nbsp;</td>
					  <td align="center" colspan="2"><output type="text" class="outputData" name="egfr" id="egfr"></td>
					</tr>
			  </table>
				  <input type="button" class="button" value="CALCULATE" onclick="calcegfr()"></input>
				  <input type="button" class="button" value="Reset" onclick="resetegfr()"></input>
				<p><strong>Note:</strong> The formula used in this equation is based on the CKD-EPI Creatinine Equation (2009)</p>
				<p>To be used only for patients >18 years old.</p>
				<p><a id="showegfrPediaCalculator" href="#">Click here for our egfr Pediatric Calculator</a></p>
		</div>
		
		<div id="egfrPedia">
			<table id="egfrPediatricTable" class="tableContainer">
				<h2>PEDIATRIC</h2>
				<tr>
				  <td align="left" class="inputLabel">Serum Creatinine:&nbsp;</td>
				  <td align="center" colspan="2"><input type="text" class="inputData" name="screa3p" id="screa3p"></td>
				</tr>
				<tr>
				  <td align="left" class="inputLabel">Age:&nbsp;</td>
				  <td align="center" colspan="2"><input type="text" class="inputData" name="agep" id="agep"></td>
				</tr>
				<tr>
				  <td align="left" class="inputLabel">Gender:&nbsp;</td>
				  <td align="center" class="radioCell"><input class="inputRadio" type="radio" name="egfradgenp" id="genmp"><label for="genmp" class="tableLabel">Male</label></td>
				  <td align="center" class="radioCell"><input class="inputRadio" type="radio" name="egfradgenp" id="genfp"><label for="genfp" class="tableLabel">Female</label></td>
				</tr>
				<tr>
				  <td align="left" class="inputLabel" rowspan="2">Height:&nbsp;</td>
				  <td align="center" colspan="2"><input type="text" class="inputData" name="height" id="height"></td>
				</tr>
				<tr>
				  <td align="center" class="radioCell"><input class="inputRadio" type="radio" name="egfradh" id="hcm"><label for="hcm" class="tableLabel">Centimeters</label></td>
				  <td align="center" class="radioCell"><input class="inputRadio" type="radio" name="egfradh" id="hmet"><label for="hmet" class="tableLabel">Meters</label></td>
				</tr>
				<tr>
				  <td align="left" class="inputLabel">eGFR (mL/min/1.73m<sup>2</sup>):&nbsp;</td>
				  <td align="center" colspan="2"><output type="text" class="outputData" name="egfr" id="egfr"></td>
				</tr>
			  </table>
			  <input type="button" class="button" value="CALCULATE" onclick="calcegfr()"></input>
			  <input type="button" class="button" value="Reset" onclick="resetegfr()"></input>
				<p><strong>Note:</strong> The formula used in this equation is based on the CKD-EPI Creatinine Equation (2009)</p>
				<p><a id="showegfrAdultCalculator" href="#" >Click here for our egfr Adult Calculator</a></p>
			</table>
		</div>
	</form>

</section>

	