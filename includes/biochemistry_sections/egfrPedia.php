<section id="egfr">
<input type="radio" name="calculations" id="egfrRadio">
<label for="egfrRadio" class="sidelinkLabel">eGFR</label>
	<form>
	  <table id="egfrPediatricTable" class="egfrTable">
		<tr><h2>PEDIATRIC</h2>
		  <td align="left">Serum Creatinine:&nbsp;</td>
		  <td align="center" colspan="2"><input type="text" class="inputData" name="screa3p" id="screa3p"></td>
		</tr>
		<tr>
		  <td align="left">Age:&nbsp;</td>
		  <td align="center" colspan="2"><input type="text" class="inputData" name="agep" id="agep"></td>
		</tr>
		<tr>
		  <td align="left">Gender:&nbsp;</td>
		  <td align="center"><input type="radio" name="egfradgenp" id="genmp"><label for="genmp">Male</label></td>
		  <td align="center"><input type="radio" name="egfradgenp" id="genfp"><label for="genfp">Female</label></td>
		</tr>
		<tr>
		  <td align="left" rowspan="2">Height:&nbsp;</td>
		  <td align="center" colspan="2"><input type="text" class="inputData" name="height" id="height"></td>
		</tr>
		<tr>
		  <td align="center"><input type="radio" name="egfradh" id="hcm"><label for="hcm">Centimeters</label></td>
		  <td align="center"><input type="radio" name="egfradh" id="hmet"><label for="hmet">Meters</label></td>
		</tr>
		<tr>
		  <td align="left">eGFR (mL/min/1.73m<sup>2</sup>):&nbsp;</td>
		  <td align="center" colspan="2"><output type="text" class="outputData" name="egfr" id="egfr"></td>
		</tr>
	  </table>
	  <input type="button" class="button" value="CALCULATE" onclick="calcegfr()"></input>
	  <input type="button" class="button" value="Reset" onclick="resetegfr()"></input>
		<p><strong>Note:</strong> The formula used in this equation is based on the CKD-EPI Creatinine Equation (2009)</p>
	</form>
</section>