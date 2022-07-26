    <?php
    
    require_once ("compteur.php");
    Ajouter_vue();
    
     ?>

   <br><br>
    <footer >
        <div class="footerFirstDiv">
                <img src="../images/wariRond.png"  width="80px" height="80px"><br><br>

         
       
                <div class="otherService">
                    
                  <center><a href="other.php"><h3 class="btn btn-success">AUTRES SERVICES</h3></a></center><br>
                    Nous sommes aussi spécialisés dans d'autres domaines en dehors du trading. <br>
                    WARIBIZNET est une branche de WARIBIZ et nous avons une équipe constituée de développeurs d'application web et mobile. 
                    Des graphistes et des personnes spécialisées dans les techniques de prises de vues(PhotoShoot). <br>
                </div><br><br>

                
                <ul><br><br>
                     <h5>Liens rapides</h5>

                    <a href="./blog"><li>Blog</li></a> 
                     <a href="./formationFree.php"><li>contenu gratuit</li></a> 
                     <a href="./contact.php"><li>contact</li></a> 
                     <a href="#"><li>Aide</li></a> 
                </ul>
             
             
             
                 <div class="divFormAvis">
                       <center><h2 id="h3Avis" class="btn ">Votre avis nous intéresse</h2></center> 
                        <form method="post" class="formAvis">

                        

                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">votre email</span>
                            </div>
                            <input type="email" class="form-control" aria-describedby="basic-addon3 " placeholder="example@gmail.com..." required> 
                            </div>

                            <textarea  class="form-control" name="avis" cols="10" rows="5" placeholder="écrivez votre avis ici..." required></textarea><br>

                            <center> <button name="avis" class="btn btn-danger">Envoyer</button></center> 
                    
                        </form>
                </div>
          </div> <br><br>
        <p style="color:red;" class="card-header">
                <em> Ce site a été visité
                     <strong  style="color:green; font-size:1.5em; font-weight:bolder"><?= Nombre_vue(); ?> </strong>   fois
                </em> </p><br>
              <div class="copyright">  Copyright © 2022 WARIBIZ NET </div> 
       
    </footer>

<script src="../assets/script.js"></script>
</body>
</html>