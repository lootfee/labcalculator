<section id="lipidProfile">
	<input type="radio" id="lipidProfileRadio" name="calculations">
	<label for="lipidProfileRadio" class="sidelinkLabel">Lipid Profile</label>
		<form>
			<table id="lipidProfileTable" class="tableContainer">
				<tr>
					<td align="left" class="inputLabel">Cholesterol&nbsp;</td>
					<td align="center"><input type="text" class="inputData" name="cholesterol" id="cholesterol"></td>
				  </tr>
				  <tr>
					<td align="left" class="inputLabel">HDL&nbsp;</td>
					<td align="center"><input type="text" class="inputData" name="hdl" id="hdl"></td>
				  </tr>
				  <tr>
					<td align="left" class="inputLabel">LDL&nbsp;</td>
					<td align="center"><input type="text" class="inputData" name="ldl" id="ldl"></td>
				  </tr>
				  <tr>
					<td align="left" class="inputLabel">VLDL&nbsp;</td>
					<td align="center"><output type="text" class="outputData" name="vldl" id="vldl"></td>
				  </tr>
				  <tr>
					<td align="left" class="inputLabel">Triglycerides&nbsp;</td>
					<td align="center"><input type="text" class="inputData" name="triglycerides" id="trig"></td>
				  </tr>
				  <tr>
					<td align="left" class="inputLabel">LDL Calculated:&nbsp;</td>
					<td align="center"><output type="text" class="outputData" name="ldlc" id="ldlc"></td>
				  </tr>
				  <tr>
					<td align="left" class="inputLabel">Cholesterol/HDL ratio:&nbsp;</td>
					<td align="center"><output type="number" class="outputData" name="cholhdl" id="cholhdl"></td>
				  </tr>
				  <tr> 
					<td align="left" class="inputLabel">HDL/LDL ratio:&nbsp;</td>
					<td align="center"><output type="number" class="outputData" name="hdlldl" id="hdlldl"></td>
				  </tr>
				  <tr>
					<td align="left" class="inputLabel">LDL/HDL ratio:&nbsp;</td>
					<td align="center"><output type="number" class="outputData" name="ldlhdl" id="ldlhdl" ></output></td>
				  </tr>
			</table>
			<input type="button" class="button" value="CALCULATE" onclick="calclp()"></input>
			<input type="button" class="button" value="Reset" onclick="resetcalclp()"></input>
		  <p><strong>Note:</strong> If there is a value on the direct LDL, this will be used for calculating the ratios; the calculated LDL is just for comparison.
		
		</form>

</section>