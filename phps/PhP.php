<?php

  if (isset($_POST['sumit'])) {
           
    $connect = mysqli_connect("localhost", "root", "", "formulaire");

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

        $data = "insert into form1 values('$mat','$cni','$name','$pname','$date','$lieu','$add','$tel','$sex')";
        
        if (mysqli_query($connect, $data)) {

          $sql = "insert into form2 values('$mat','$stat','$corps','$grade','$ech','$min','$post','$fonct','$actN', '$actR')";

            if (mysqli_query($connect, $sql)) {

              echo "<script>
                  alert('Données enregistrées!');
                  history.back();
                </script>
              ";

            }

        } else {

          echo "<script>
                  alert('Le matricule que vous avez entrée existe déjà dans la base de données!');
                  window.history.back();
                </script>
          ";

        }
      }
    }
  }

?>