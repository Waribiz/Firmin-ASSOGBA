<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/styleMedia.css">
   <link rel="stylesheet" href="../assets/css1/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/js1/bootstrap.min.js">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title >  WARIBIZNET </title>

</head>

 <body  >  
<div class="logo">
        <div class="logoBtnMeu">
         
            <div> <?php //if(!isset($_POST['open'])) :?>
                    <form  method="post" class="open">
                    <?php if(!isset($_POST['open'])):?>
                        <button name="open" class="btn btn-primary" id="clickMenu">menu </button>
                        <?php endif ?>
                        <?php if(isset($_POST['open']) AND !isset($_POST['close'])):?>
                            <button  name="close" class="btn btn-danger">fermer</button>
                         <?php endif ?>
                    </form>
                </div>     
             <img src="../images/wariRond.png" alt="logo" width="80px" height="80px">
         </div>
              
             
                
          
                <?php if(isset($_POST['open']) AND !isset($_POST['close'])):?>
            <div id="menu" >
<!--                     
                            <form  method="post">
                
                </form> -->

                <ul class="list-group">
                    <a href="../index.php" title="aller sur accueil"><li class="rounded-pill"><span> ACCUEIL</span></li></a>
                    <a href="accueil.php" title="aller sur TRADING"><li class="rounded-pill"><span> TRADING</span></li></a>
                    <a href="formationFree.php" title="contenu gratuit"><li class="rounded-pill"><span> CONTENU GRATUIT</span></li></a>
                    <a href="formations.php" title="formations"><li class="rounded-pill"><span> NOS FORMATIONS</span></li></a>
                    <a href="blog.php" title="discussion"><li class="rounded-pill"><span> BLOG</span></li></a> 
                    <a href="info.php" title="information sur waribiznet"><li class="rounded-pill"><span> A PROPOS</span></li></a>
                    <a href="contact.php" title="nos contacts"><li class="rounded-pill"><span> CONTACTS</span></li></a> 
                </ul>
                
            </div>
        <?php endif ?>
     
  
</div> 
  
        
        <a href="https://wa.me/message/ZNINJ2OTO4TSH1" class="logoWhatsapp">
            <img src="../images/watsapp.png" width="60px" height="60px" class="rounded-pill">
        </a> 
   


