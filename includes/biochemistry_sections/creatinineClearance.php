<section id="creaClearanceSection">
	<input type="radio" name="calculations" id="creaClearRadio">
	<label for="creaClearRadio" class="sidelinkLabel">Creatinine Clearance</label>
	
		<form>
		  <table id="creaCleartable" class="tableContainer">
			<tr>
			  <td align="right" class="inputLabel">24hr Urine Volume (ml)&nbsp;</td>
			  <td align="left"><input type="text" name="uvol2" id="uvol2"></td>
			</tr>
			<tr>
			  <td align="right" class="inputLabel">Serum Creatinine (mg/dL)&nbsp;</td>
			  <td align="left"><input type="text" name="screa2" id="screa2"></td>
			</tr>
			<tr>
			  <td align="right" class="inputLabel">Urine Creatinine (mg/dL)&nbsp;</td>
			  <td align="left"><input type="text" name="ucrea2" id="ucrea2"></td>
			</tr>
			<tr>
			  <td align="right" class="inputLabel">Collection Time (hrs)&nbsp;</td>
			  <td align="left"><input type="text" name="coltime" id="coltime"></td>
			</tr>
			<tr>
			  <td align="right" class="inputLabel">Height (ft)&nbsp;</td>
			  <td align="left"><input type="text" name="height" id="height" onkeyup="calcbsa()"></td>
			</tr>
			<tr>
			  <td align="right" class="inputLabel">Weight (kg)&nbsp;</td>
			  <td align="left"><input type="text" name="weight" id="weight" onkeyup="calcbsa()"></td>
			</tr>
			<tr>
			  <td align="right" class="inputLabel">Body Surface Area (m<sup>2</sup>):&nbsp;</td>
			  <td align="left"><output type="text" name="bsa" id="bsa""></td>
			</tr>
			<tr>
			  <td align="right" class="inputLabel">Creatinine Clearance (ml/min):&nbsp;</td>
			  <td align="left"><output type="text" name="creaclear" id="creaclear"></td>
			</tr>
			<tr>
			  <td align="right" class="inputLabel">Corrected Creatinine Clearance (ml/min/1.73 m<sup>2</sup>):&nbsp;</td>
			  <td align="left"><output type="text" name="corcreaclear" id="corcreaclear"></td>
			</tr>
		  </table>
		  <input type="button" class="button" value="CALCULATE" onclick="calccreaclear()"></input>
		  <input type="button" class="button" value="Reset" onclick="resetcreaclear()"></input>
		</form>
	
  </section>