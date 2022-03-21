<html>
	<head>
		<title></title>
		<script type="text/javascript" src="../scripts/Confirm.js"></script>
		<link rel="stylesheet" type="text/css" href="../styles/Style4.css">
	</head>
	<body>
		<form name="form" action="ModSup.php" method="post">
			<fieldset id="field1" style="display: block;">
				<legend>
					<div>
						<progress value="100" max="100">
					</div>
				</legend>
				<div>
					<div>
						<a href="../index.html" id="b1">RETOUR</a>
						<?php
							echo "
								<button type='submit' id='b2' name='submit' onclick='return conf()'>TOUT SUPPRIMER</a></button>
							";

							if (isset($_POST['submit'])) {
								
								$connect = mysqli_connect("localhost", "root", "", "formulaire");
								$sql = mysqli_query($connect, "DELETE FROM form1");

								if ($sql) {

									$sql2 = mysqli_query($connect, "DELETE FROM form2");
									header("Location: ModSup.php");

								} else {echo "Erreur : " . $sql . "<br>" . mysqli_error($connect);}
							}
				            
				        ?>
					</div>
					<table>
						<div>
							<th>Matricule</th>
							<th>CNI</th>
							<th>Nom</th>
							<th>Prenom</th>
							<th>Telephone</th>
							<th>Ministere</th>
							<th id='th1'></th>
							<th colspan="2"></th>
						</div>
						<?php

				            $connect = mysqli_connect("localhost", "root", "", "formulaire");
				            if ($connect -> connect_error) {
				              die('Erreur :'.$connect -> connect_error); 
				            };
				            $req = "SELECT form1.matricule, cni, nom, prenom, tel, ministere FROM form1 natural join form2";
				           	$sql = mysqli_query($connect, $req);
							while($rowData = mysqli_fetch_array($sql)){
								echo "<div>
									<tr>
										<td>$rowData[0]</td>
										<td>$rowData[1]</td>
										<td>$rowData[2]</td>
										<td>$rowData[3]</td>
										<td>$rowData[4]</td>
										<td>$rowData[5]</td>
										<td>
											<a href='ModSup.php?idf=$rowData[0]' onclick='return conf()' id='sup'>Supprimer</a>
										</td>
										<td>
											&nbsp;&nbsp;&nbsp;<a href='modifier.php?idf=$rowData[0]'>Editer</a>
										</td>
									</tr>
								</div>";
							}

							if (isset($_GET['idf'])) {

								$sql = mysqli_query($connect, "DELETE FROM form1 WHERE matricule = '".$_GET['idf']."'");
								$sql = mysqli_query($connect, "DELETE FROM form2 WHERE matricule = '".$_GET['idf']."'");
								header("Location: ModSup.php");
								
							}
							
						?>	
					</table>
				</div>
			</fieldset>
		</form>
	</body>
</html>
