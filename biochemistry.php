<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'head.php'; ?>
	</head>

	<body>
		
		<?php include 'header.php'; ?>
		
		<div id="biochemistryContainer" >
		
			<div class="departmentContainer">
				<h2>BIOCHEMISTRY</h2>
			</div>
			
			<div id="lipidProfileContainer" class="sidelink">
				
				<?php include 'includes/biochemistry_sections/lipidProfile.php'?>
			
			</div>
			
			<div id="egfrContainer" class="sidelink">
				
				<?php include 'includes/biochemistry_sections/egfr.php'?>
			
			</div>
			
			<div id="24hrUchemContainer" class="sidelink">
				
				<?php include 'includes/biochemistry_sections/24hrUchem.php'?>
			
			</div>
		
		</div>
	
	
	
	</body>
	
</html>