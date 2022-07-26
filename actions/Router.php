<?php 

    class Router {
        private $ctrl;
        private $view;

        public function routeReq(){

            try {
                // CHARGEMENT AUTOMATIQUE LES PAGES DU DOSSIER INCLUDE
                spl_autoload_register(function($class){
                    require_once('views/'.$class.'.php');
                });
                // on crée une variable url  
                $url='';

                // on va déterminer l'url en 
                // fonction de la valeur de cette variable
                if(isset($_GET['url'])){
                            // ON D2COMPOSE L4URL ET ON LUI APPLIQUE UN FILTRE 
                            $url= explode('/', filter_var( $_GET['url'], FILTER_SANITIZE_URL));
                       
                        // on récupère le premier paramètre de l'url et on le let en miniscul 
                        // $controller= strtolower($url[0]);
                        $controller= $url[0];
                        $controllerPage= "views".$controller;

                        // on retrouve le chemin du views 
                        $controllerFile = "views/".$controllerPage.".php";

                        if(file_exists($controllerFile)){

                                require_once($controllerFile);
                                $this->ctrl= new $controllerPage($url);
                        }else {
                            throw new Exception("PAGE INTROUVABLE ", 1);
                            
                        } 
                    }else {
                        require_once('index.php');
                        // $this-> ctrl= new index
                    }
           
            } catch (\Throwable $th) {
                $error = $th->getMessage("ERREUR 404!");
                die;
                // require_once('views/accueil.php');
            }


        }





    }