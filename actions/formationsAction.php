<?php





// SWITCH POUR LE CONTENU DES FORMATIONS
    if (isset( $_POST['forex'])) {
        $variable=$_POST['forex'];
    }
    if (isset( $_POST['crypto'])) {
        $variable=$_POST['crypto'];
    }
    if (isset( $_POST['indices'])) {
        $variable=$_POST['indices'];
    }
// SWITCH POUR LE FORMULAIRE 
    if (isset( $_POST['postule'])) {
        $value=$_POST['value'];
        $postuler=$_POST['postuler'];
    }


    // récupérer les inscrits dans un tableau
  
    
        if(isset($_POST['btnPostuler'])){ 
              
                  
                    $user_pays = htmlspecialchars($_POST['pays']);
                    $user_nom_user = htmlspecialchars($_POST['nom']);
                    $user_prenom_user = htmlspecialchars($_POST['prenom']);
                    $user_numero = htmlspecialchars($_POST['numero']);
                    $user_email = htmlspecialchars($_POST['email']);
                    $profession= htmlspecialchars($_POST['profession']);
                    $type = htmlspecialchars($_POST['type']);
                    $sexe = htmlspecialchars($_POST['sexe']);
                    $form = htmlspecialchars($_POST['formation']);
                    $user_date = date("d-m-Y-à-H-m-s");
                    $header= "<?php include '../views/hearder.php'; ?> <br>";
                    $fichier= "../inscrits/".$user_nom_user.'_'.$user_date.".php";

                      $data= [
                            'header'=> " $header ",
                            'nom'=> " nom: <h1> <strong> $user_nom_user </h1> </strong> <br>",
                            'prenom'=>"prenom: <h1> <strong> $user_prenom_user  </h1> </strong> <br> ",
                            'email'=> " email: <h1> <strong> $user_email  </h1> </strong> <br>",
                            'pays'=> "pays:<h1> <strong> $user_pays </h1> </strong> <br> ",
                            'profession'=> "profession:<h1> <strong> $profession  </h1> </strong> <br>",
                            'sexe'=> " sexe:<h1> <strong> $sexe  </h1> </strong> <br>",
                            'type' => " type:<h1> <strong> $type  </h1> </strong> <br>",
                            'numero' => " numero:<h1> <strong> $user_numero  </h1> </strong> <br>" ,
                            'formation'=> "formation:<h1> <strong> $form  </h1> </strong> <br>"
                      ];
                     
                    //   file_put_contents($fichier, $header);
                        file_put_contents($fichier, $data);
                    
                  
              $success="VOTRE INSCRIPTION A ETE BIEN EFFECTUEE";
              }


    // function Nombre_vue(){
    //     $fichier= "../actions/compteur";
    //     return file_get_contents($fichier);
    // }