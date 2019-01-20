<section id="24hrUchemSection">
	<input type="radio" name="calculations" id="24hrUchemRadio">
	<label for="24hrUchemRadio" class="sidelinkLabel">24 Hr Urine Chemistry</label>
		<form>
		  <table id="uchem">
			<tr>
			  <td align="left">24hr Urine Volume (ml)&nbsp;</td>
			  <td align="center"><input type="text" name="uvol" id="uvol" style="color:blue;font-weight:bold" onkeyup="calcuchem"></td>
			  <td align="center"><output type="text" name="acr" id="acr" style="color:blue;font-weight:bold"></td>
			  <td align="center" style="width:200px">(Alb/g Creatinine) A/C Ratio&nbsp;</td>
			</tr>
			<tr>
			  <td align="left">Urine Albumin (mg/L)&nbsp;</td>
			  <td align="center"><input type="text" name="ualb" id="ualb" style="color:blue;font-weight:bold" onkeyup="calcuac()"></td>
			  <td align="center"><output type="text" name="24ualb" id="24ualb" style="color:blue;font-weight:bold" ></td>
			  <td align="center" style="width:200px"> (mg/24hrs)&nbsp;</td>
			</tr>
			<tr>
			  <td align="left">Urine Creatinine (mg/dL)&nbsp;</td>
			  <td align="center"><input type="text" name="ucrea" id="ucrea" style="color:blue;font-weight:bold" onkeyup="calcuac()"></td>
			  <td align="center"><output type="text" name="24ucrea" id="24ucrea" style="color:blue;font-weight:bold"></td>
			  <td align="center" style="width:200px"> (mg/24hrs)&nbsp;</td>
			</tr>
			<tr>
			  <td align="left">Urine Calcium (mg/dL)&nbsp;</td>
			  <td align="center"><input type="text" name="ucal" id="ucal" style="color:blue;font-weight:bold" onkeyup="calcuca()"></td>
			  <td align="center"><output type="text" name="24ucal" id="24ucal" style="color:blue;font-weight:bold"></td>
			  <td align="center" style="width:200px"> (mg/24hrs)&nbsp;</td>
			</tr>
			<tr>
			  <td align="left">Urine Phosphorus (mg/dL)&nbsp;</td>
			  <td align="center"><input type="text" name="uphos" id="uphos" style="color:blue;font-weight:bold" onkeyup="calcuphos()"></td>
			  <td align="center"><output type="text" name="24uphos" id="24uphos" style="color:blue;font-weight:bold"></td>
			  <td align="center" style="width:200px"> (mg/24hrs)&nbsp;</td>
			</tr>
			<tr>
			  <td align="left">Urine Magnesium (mg/dL)&nbsp;</td>
			  <td align="center"><input type="text" name="umag" id="umag" style="color:blue;font-weight:bold" onkeyup="calcumag()"></td>
			  <td align="center"><output type="text" name="24umag" id="24umag" style="color:blue;font-weight:bold"></td>
			  <td align="center" style="width:200px">(mg/24hrs)&nbsp;</td>
			</tr>
			<tr>
			  <td align="left">Urine Uric Acid (mg/dL)&nbsp;</td>
			  <td align="center"><input type="text" name="uuric" id="uuric" style="color:blue;font-weight:bold" onkeyup="calcuuric()"></td>
			  <td align="center"><output type="text" name="24uuric" id="24uuric" style="color:blue;font-weight:bold"></td>
			  <td align="center" style="width:200px"> (mg/24hrs)&nbsp;</td>
			</tr>
			<tr>
			  <td align="left">Urine Sodium (mmol/L)&nbsp;</td>
			  <td align="center"><input type="text" name="usod" id="usod" style="color:blue;font-weight:bold" onkeyup="calcusod()"></td>
			  <td align="center"><output type="text" name="24usod" id="24usod" style="color:blue;font-weight:bold"></td>
			  <td align="center" style="width:200px"> (mmol/24hrs)&nbsp;</td>
			</tr>
			<tr>
			  <td align="left">Urine Potassium (mmol/L)&nbsp;</td>
			  <td align="center"><input type="text" name="upot" id="upot" style="color:blue;font-weight:bold" onkeyup="calcupot()"></td>
			  <td align="center"><output type="text" name="24upot" id="24upot" style="color:blue;font-weight:bold"></td>
			  <td align="center" style="width:200px"> (mmol/24hrs)&nbsp;</td>
			</tr>
			<tr>
			  <td align="left">Urine Chloride (mmol/L)&nbsp;</td>
			  <td align="center"><input type="text" name="uchlo" id="uchlo" style="color:blue;font-weight:bold" onkeyup="calcuchlo()"></td>
			  <td align="center"><output type="text" name="24uchlo" id="24uchlo" style="color:blue;font-weight:bold"></td>
			  <td align="center" style="width:200px"> (mmol/24hrs)&nbsp;</td>
			</tr>
			<tr>
			  <td align="left">Urine Total Protein (mg/L)&nbsp;</td>
			  <td align="center"><input type="text" name="utp" id="utp" style="color:blue;font-weight:bold" onkeyup="calcutp()"></td>
			  <td align="center"><output type="text" name="24utp" id="24utp" style="color:blue;font-weight:bold"></td>
			  <td align="center" style="width:200px"> (mg/24hrs)&nbsp;</td>
			</tr>
			<tr>
			  <td align="left">Urine Urea (mg/dL)&nbsp;</td>
			  <td align="center"><input type="text" name="uurea" id="uurea" style="color:blue;font-weight:bold" onkeyup="calcuurea()"></td>
			  <td align="center"><output type="text" name="24uurea" id="24uurea" style="color:blue;font-weight:bold;width:100px"></td>
			  <td align="center" style="width:200px">(g/24hrs) &nbsp;</td>
			</tr>
		  </table>
		  <p></p>
		  <input align="center" class="button" type="button" value="Reset" onclick="resetuchem()"></input>
			<p></p>
			<p></p>
		</form>
</section>