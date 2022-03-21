<?php

	$connect = mysqli_connect("localhost", "root", "", "formulaire");

	if (isset($_GET['idf'])) {

		$query = mysqli_query($connect, "SELECT * FROM form1 natural join form2 where matricule ='".$_GET['idf']."'");

		while ($rowData = mysqli_fetch_array($query)) {
	
			echo'<html>

				<head>

					<meta charset="utf-8">
					
					<title></title>

					<script type="text/javascript" src="../scripts/Verifier.js"></script>

					<link rel="stylesheet" type="text/css" href="../styles/Style3.css">

				</head>

				<body>

							<tr>
								<td>'.$rowData[0].'</td>
								<td>'.$rowData[1].'</td>
								<td>'.$rowData[2].'</td>
							</tr>
							
					<form action="Modifier1.php" method="post" name="form">
						<fieldset id="field1" style="display: block;">
							<legend>
								<div>
									<progress value="50" max="100">
								</div>
							</legend>
							<div>
								<h3 style="text-align: center">INFORMATIONS PERSONNELLES</h3><br><br>
								<div>
							        <label for="matricule">Matricule :</label>
							        <input type="text" id="mat" name="matricule" required value='.$rowData[0].' maxlength="10" style="visibility: hidden;">
							        <label for="cni">N° CNI :</label>
							        <input type="text" id="cni" name="cni" required value='.$rowData[1].' maxlength="12">
							    </div><br><br>
								<div>
							        <label for="name">Nom :</label>
							        <input type="text" id="name" name="name" required value='.$rowData[2].' maxlength="15">
							        <label for="Pname">Prenom :</label>
							        <input type="text" id="pname" name="pname" required value='.$rowData[3].' maxlength="15">
							    </div><br><br>
							    <div>
							        <label for="date">Né(e) le :</label>
							        <input type="date" id="date" name="date" required min="1920-01-01" max="2000-12-31" value='.$rowData[4].'>
							        <label for="lieu">A :</label>
							        <input type="text" id="lieu" name="lieu" required value='.$rowData[5].' maxlength="10">
							    </div><br><br>
							    <div>
							        <label for="add">Adresse :</label>
							        <input type="text" id="add" name="add" required value='.$rowData[6].' maxlength="20">
							        <label for="tel">Telephne :</label>
							        <input type="text" maxlength="9" minlength="9" id="tel" name="tel" required value='.$rowData[7].'>
							    </div><br><br>
							    <div>
							        <label for="sex">Sexe :</label>
							        <input type="radio" name="radio" value = "Masculin" id="rad1" checked> Masculin
							        <input type="radio" name="radio" value = "Feminin" id="rad1"> Feminin	
							    </div><br><br><br><br>
						    <div class="button">
						    	<button type="submit" name = "submit" id="btn3">
						    		<a href="../index.html" style="color: white;">ACCEUIL</a>
						    	</button>
						    	<button type="reset" name = "recevoir" id="btn1">EFFACER</button>
						        <button type="submit" name = "sub" id = "btn2" onmousedown ="controle()">SUIVANT</button>
						       
						    </div><br>
					    </fieldset>
					    <fieldset id="field2" style="display: none;">
							<legend>
								<div>
									<progress value="100" max="100">
								</div>
							</legend>
							<div>
								<div>
									<button type="submit" name = "back" id="Btn" onmouseup="afficher2()">RETOUR</button>
									<h3 style="text-align: center">INFORMATIONS PROFESSIONNELLES</h3>
								</div><br>
								<div>
							        <label for="stat">Statut :</label>
							        <input type="text" id="stat" name="stat" required value='.$rowData[9].' maxlength="15">
							        <label for="corps">Corps :</label>
							        <input type="text" id="corps" name="corps" required value='.$rowData[10].' maxlength="100">
							    </div><br><br>
								<div>
							        <label for="grade">Grade :</label>
							        <input type="text" id="grade" name="grade" required value='.$rowData[11].' maxlength="100">
							        <label for="ech">Echelon :</label>
							        <input type="text" maxlength="11" id="ech" name="ech" required value='.$rowData[12].'>
							    </div><br><br>
							    <div>
							        <label for="min">Ministère :</label>
							        <input type="text" id="min" name="min" required value='.$rowData[13].' maxlength="100">
							        <label for="poste">Poste :</label>
							        <input type="text" id="poste" name="poste" required value='.$rowData[14].' maxlength="50">
							    </div><br><br>
							    <div>
							        <label for="fonct">Fonction prise le :</label>
							        <input type="date" id="fonct" name="fonct"  required min="1920-01-01" max="2000-12-31" value='.$rowData[15].'>
							        <label for="actN">Acte de Nomination :</label>
							        <input type="text" id="actN" name="actN" value='.$rowData[16].' maxlength="50">
							    </div><br><br>
							    <div>
							        <label for="actR">Acte de recrutement :</label>
							        <input type="text" id="actR" name="actR" required value='.$rowData[17].' maxlength="50">
							    </div><br><br>
						    <div class="button">
						    	<button type="submit" name = "submit" id = "But2">
						    		<a href="../index.html" style="color: white;">ACCEUIL</a> 
						    	</button> 
						    	<button type="reset" name = "reset" id = "Btn4">EFFACER</button> 
						        <button type="submit" name = "submit" id = "Btn5" onmousedown ="controle3()">MODIFIER</button> 
						    </div><br>
					    </fieldset>
					</form>
				</body>
			</html>';
		}
		
	}
?>