<?php

require ("../actions/formationsAction.php");

?>

<?php
    include '../views/hearder.php';



    if(!isset($variable)) :
    if(!isset($postuler)) : ?>

        <nav class=" formations"><br><br>
            <h4 ><span class="welcome"> POSTULEZ A NOS FORMATIONS PROFESSIONELLES</span><br><br>
                <span class="waribiz ">WARIBIZ NET </span>
            </h4><br><br>
        
        </nav><br><br>

         <?php if(isset($success)) : ?>
        <div class="alert alert-danger"> <center><?= $success; ?></center>  </div>
        <?php endif; ?>




    <!-- LIENS VERS LES FORMATIONS  -->

    <div class="formFormation">
        <center><h1>Consultez l'une des formations TRADING  </h1></center>
        <form  method="post">
                <input type="hidden" name="forex" value="1">
                <button class="rounded-pill">Formation FOREX</button>
        </form>
        <form  method="post">
                <input type="hidden" name="crypto" value="2">
                <button class="rounded-pill">Formation CRYPTO MONNAIES</button>
        </form>
        <form  method="post">
                <input type="hidden" name="indices" value="3">
                <button class="rounded-pill">Formation INDICES SYNTHETIQUES</button>
        </form>
    </div>
    
        <?php endif;
        
        endif ?>


    <!-- LES FORMATIONS SELON LE CHOIX DE L'USER -->

    <?php
    
    
   if(isset($variable)) { 
            switch ($variable) {
            
            case '1':  //FORMATION FOREX?>

                <div class="forexbg"></div><!-- DIAPO LORS DE L'ARRIVEE -->
                    
          
                <p class="forextext">
                        Si vous manipulez les devises sans stratégie vous allez (sur du long terme) gagner une fois sur deux, 
                        et perdre une fois sur deux. Globalement Il n’y aurait aucun intérêt.
                        Par contre si vous apprenez les ficelles du Forex et que vous êtes capables de déceler si le cours 
                        d'une parité de devises a plus de probabilité de monter ou de baisser, alors vous serrez capable 
                        d'ouvrir et de fermer des positions, acheteuses ou vendeuses, aux moments opportuns. Vous serez 
                        alors à même de générer des profits substantiels et de faire fructifier votre capital. <br>
                       
                        <img src="../images/sacforex.png" alt="image" width="40%" >

                             WARIBIZNET     vous donne accès pour cela aux informations critiques qui influent le marché et aux 
                        études qui permettent de prévoir si le cours d’une parité a plus de probabilité de tendre à la hausse 
                        ou à la baisse. Des outils seront mis à votre disposition cours de cette formation  dans la rubrique « Prévisions ».
                        De plus nous sommes fiers de pouvoir partager avec vous le savoir et l’expérience de toute une 
                        communauté qui saura vous accueillir et vous conseiller sur vos investissements dans la section 
                        communauté forex à l'issu de la formation. <br>
                         
                  <center> <h4 class="btn btn-secondary">Conditions De Participation</h4></center> <br>
               <div style="text-align:center; border-style: none;  box-shadow: 2px 2px 8px black; color:white; 
                                font-weight:bolder; padding:1%; background-color:brown; ">
                    <h3> Le coût de la formation accompagnée du suivi:
                       
                           <h1> <strong style="font-size:2em; font-family:'Times New Roman', Times, serif">100.000 FCFA </strong></h1> <br>
                            Vous avez la possibilité d'opter pour un paiement en deux  tranches.
                        </h3>
                </div>   <br><br>
               
                       <center>
                            <form  method="post">
                                <input type="hidden" name="postuler" value="1">
                                <input type="hidden" name="value" value="FORMATION FOREX">
                                <button name="postule" class="btn btn-primary">Postulez maintenant</button>
                          </form>
                       </center> 
                </p>
                  



            <?php      break;
                case '2'://FORMATION CRYPTO ?>
                  <div class="cryptobg">FORMATION CRYPTO</div><br><!-- DIAPO LORS DE L'ARRIVEE -->
                  <p class="cryptotext">
              
              <center> FORMATION NON DISPONIBLE POUR LE MOMENT</center>
                  
                  
                  
                  <center>
                            <form  method="post">
                                <input type="hidden" name="postuler" value="1">
                                <input type="hidden" name="value" value="FORMATION CRYPTO">
                                <button name="postule" class="btn btn-primary">Postulez maintenant</button>
                          </form>
                       </center> 
                  </p>  
                <?php  break;
                
                case '3': //FORMATION INDICES?>
                     
                <div class="indicebg">FORMATION INDICE(VIX) </div><br> <!-- DIAPO LORS DE L'ARRIVEE -->
                  <p class="indicetext" style="color:black">
               
                        Pourquoi trader les indices synthétiques sur Deriv? <br>
            Les indices synthétiques exclusifs de Deriv simulent les mouvements réels du marché. Soutenus par un générateur de nombres aléatoires cryptographiquement sécurisé, ces indices peuvent être tradés 24h-24, 7j/7, et ne sont pas affectés par les heures normales de marché, les événements mondiaux ou les risques de marché et de liquidité.

              <br> <br>
              WARIBIZNET vous donne accès pour cela aux informations critiques qui influent le marché et aux
                études qui permettent de prévoir si le cours d’une parité a plus de probabilité de tendre à la hausse
                ou à la baisse. Des outils seront mis à votre disposition cours de cette formation dans la rubrique « Prévisions ».
                De plus nous sommes fiers de pouvoir partager avec vous le savoir et l’expérience de toute une
                communauté qui saura vous accueillir et vous conseiller sur vos investissements dans la section
                communauté INDICES à l'issu de la formation. <br><br>
                 
                 
                  <center> <h4 class="btn btn-secondary">Conditions De Participation</h4></center> <br>
               <div style="text-align:center; border-style: none;  box-shadow: 2px 2px 8px black; color:white; 
                                font-weight:bolder; padding:1%; background-color:brown; ">
                    <h3> Le coût de la formation accompagnée du suivi:
                       
                           <h1> <strong style="font-size:2em; font-family:'Times New Roman', Times, serif">100.000 FCFA </strong></h1> <br>
                            Vous avez la possibilité d'opter pour un paiement en deux  tranches.
                        </h3>
                </div>   <br><br>
               
                 
                 <center>
                            <form  method="post">
                                <input type="hidden" name="postuler" value="1">
                                <input type="hidden" name="value" value="FORMATION INDICES">
                                <button name="postule" class="btn btn-primary">Postulez maintenant</button>
                          </form>
                 </center> 
                 </p>  
                 <?php  break;      
            } //endswitch
    }//FIN IF ISSET $variable
    ?>
    
    
    
    


  <!-- FORMULAIRE POUR POSTULER A FOREX  -->
    <?php
    if(isset($postuler)) { 
            switch ($postuler) {
            
            case '1': ?>
            <br><br><br>
         <center class="titreForm">
                <h3>FORMULAIRE D'INSCRIPTION </h3>
                <h1><?= $value ?> </h1>
            </center>
            <form class="formInscription" method="POST">
                <input type="hidden" name="formation" value="<?= $value ?>">
                <center>
                    <div class="form-row">
                        <div class="form-group col-md-6" style="display:block">
                            <label for="">PRENOMS</label>
                            <input type="text" class="form-control" name="prenom" required placeholder="prenoms ici...">
                        </div><br><br>
                        <div class="form-group col-md-6" style="display:block">
                            <label for="">NOMS</label>
                            <input type="text" name="nom" class="form-control" required placeholder="noms ici...">
                        </div>
                    </div><br>
                    <div class="form-row">
                        <div class="form-group col-md-6" style="display:block">
                            <label>EMAIL</label>
                            <input type="email" name="email" class="form-control" required placeholder="email ici...">
                        </div><br><br>

                        <div class="form-group col-md-6 " style="display:block">
                            <label>PAYS</label>
                            <input type="text" name="pays" class="form-control" required placeholder="pays de résidence ici...">
                        </div>
                    </div><br><br>

                    <div class="form-row">
                        <div class="form-group col-md-6" style="display:block">
                            <label>NUMERO WHATSAPP</label>
                            <input type="tel" name="numero" class="form-control" required placeholder="numero ici...">
                        </div><br><br>

                        <div class="form-group col-md-6" style="display:block">
                            <label>PROFESSION</label>
                            <input type="text" name="profession" class="form-control" required placeholder="PROFESSION ici...">
                        </div>

                    </div> <br><br>

                    <div class="form-group" >
                        <div id="select">
                            <label>TYPE</label>
                            <select class="form-group col-md-6" name="type">

                                <option value="coaching">COACHING</option>
                                <option selected value="formationComplete">FORMATION COMPLETE</option>

                            </select><br><br>
                        </div>
                        <div id="select1">
                            <label>SEXE</label>
                            <select class="form-group col-md-6" name="sexe">

                                <option selected value="homme">HOMME</option>
                                <option value="femme">FEMME</option>

                            </select>
                        </div>
                    </div><br><br>
                </center>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" required="veuillez accepter les conditions">
                    <label class="form-check-label">
                        Accepter les conditions
                    </label>
                </div>
                <label style="color:red; ">FRAIS: 100.000 Fcfa .  </label>
                <span style=" color:rgb(163, 154, 154);">(formation complète)</span> <br>
                <label style="color:red">FRAIS: 60.000 Fcfa </label>
                <span style="color:rgb(163, 154, 154);">(coaching)</span>
                </div> <br><br>
                <center>
                    <button type="submit" name="btnPostuler" class="btn btn-danger">POSTULER</button>
                    <!-- <button type="reset" class="btn btn-secondary"><h6> ANNULER</h6></button> -->
                </center>
                <br><br>
        <marquee class="confidence">
                    Vos informations sont gardées confidentielles
                     et nous les utilisons afin de mieux vous connaitre
                     et faciliter votre insertion dans la communauté WARIBIZNET TRADING.

        </marquee>
        </form>

    <?php  break;      
            } //endswitch
    }//FIN IF ISSET $postuler
    ?>


































































































<?php
    include 'footer.php';

 ?>