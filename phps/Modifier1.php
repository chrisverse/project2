<?php

	$connect = mysqli_connect("localhost", "root", "", "formulaire");

	if (isset($_POST['submit'])) {

	    if ($connect -> connect_error) {

	      die('Erreur :'.$connect -> connect_error);
	                
	    }else{

	      if(isset($_POST['sumit']) || $_SERVER['REQUEST_METHOD']=='POST'){

		        $mat = $_POST['matricule'];
		        $cni =  $_POST['cni'];
		        $name = $_POST['name'];
		        $pname = $_POST['pname'];
		        $date = $_POST['date'];
		        $lieu = $_POST['lieu'];
		        $add = $_POST['add'];
		        $tel =  $_POST['tel'];
		        $sex= isset($_POST['radio']) ? $_POST['radio'] : '';

		        $stat = $_POST['stat'];
		        $corps = $_POST['corps'];
		        $grade =  $_POST['grade'];
		        $ech = $_POST['ech'];
		        $min = $_POST['min'];
		        $post = $_POST['poste'];
		        $fonct =  $_POST['fonct'];
		        $actN = $_POST['actN'];
		        $actR = $_POST['actR'];

		        $sql = mysqli_query($connect, "select count(*) from form1 where matricule = '$mat'");

		        if ($sql) {

		        	while ($row = mysqli_fetch_array($sql)) {

		        		if (1 == $row['count(*)']) {

		        			$query = mysqli_query($connect, "UPDATE form1 SET cni = '$cni', nom = '$name', prenom = '$pname', date_nais = '$date', lieu_nais = '$lieu', adresse = '$add', tel = '$tel', sexe = '$sex' WHERE form1.matricule = '$mat'");

		        			$query2 = mysqli_query($connect, "UPDATE form2 SET statut = '$stat',corps = '$corps',grade = '$grade',echelon = '$ech', ministere = '$min', poste = '$post', Date_fonct = '$fonct', Acte_nom = '$actN', Acte_rec = '$actR' WHERE form2.matricule = '$mat'");

		        			if ($query) {

		        				if ($query2) {
		        					header("Location: ../phps/ModSup.php");
		        				} else {echo "Erreur : " . $query2 . "<br>" . mysqli_error($connect);}	

		        			} else {echo "Erreur : " . $query . "<br>" . mysqli_error($connect);}
		        			

		        		} else {echo "Ce compte n'existe";}

		        	}

		        } else {echo "Erreur : " . $sql . "<br>" . mysqli_error($connect);}
	        
			}

		}

	}
?>