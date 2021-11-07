<?php

require_once '../modele/dao/ArticleDao.php';
require_once '../modele/dao/CategorieDao.php';
require_once '../modele/dao/PersonneDao.php';
require_once '../modele/dao/FormDao.php';
require_once '../modele/domaine/Personne.php';
require_once '../modele/domaine/Article.php';
require_once '../modele/domaine/Categorie.php';
session_start();

/**
 * Classe représentant le controleur des formulaires
 */

 function showAdmin($user)
    {       
             $articleDao = new ArticleDao();
                $categorieDao = new CategorieDao();
                $userDao = new PersonneDao();
        
                $articles = $articleDao->getList();
                $categories = $categorieDao->getList();
                $users= $userDao->getList();
                
                $_SESSION['currentUser']=$user;
                $_SESSION['articles']=$articles;
                $_SESSION['categories']=$categories;

                if($user->admin == 0)
                {
                    $_SESSION['users']=$users;
                    header('Location: ../vue/admin/');
                }                    
                else 
                {
                    header('Location: ../vue/editeur/');
                }

        //require_once '../vue/admin.php';
        

    }
 $Form=new FormController();
 $user=null;

if (isset($_POST['login']) && isset($_POST['password'])) 
{
    if (!empty($_POST['login']) && !empty($_POST['password'])) 
    {
        $FormDao = new FormDao();
        $user = $FormDao->searchUser(htmlspecialchars($_POST['login']),htmlspecialchars($_POST['password']));
        $_SESSION["theuser"]=$user;
        if(!empty($user))
            {               
                showAdmin($_SESSION["theuser"]);
            }
        else {
            header('Location: ../');
        }
    }

} else if (isset($_POST['categorie_nom'])) 
{
    if (!empty($_POST['categorie_nom'])) 
    {
        $categorieDao = new CategorieDao();
        $cat = $categorieDao->addCategorie(htmlspecialchars($_POST['categorie_nom']));
        showAdmin($_SESSION["theuser"]);
    }

} else if (isset($_POST['article_titre']) && isset($_POST['article_categorie']) && isset($_POST['article_texte'])) 
{
    if (!empty($_POST['article_titre']) && !empty($_POST['article_categorie']) && !empty($_POST['article_texte'])) 
    {
        $articleDao = new ArticleDao();
        $art = $articleDao->addArticle(htmlspecialchars($_POST['article_titre']), htmlspecialchars($_POST['article_texte']),$_POST['article_categorie']);
        showAdmin($_SESSION["theuser"]);        
    }

} else if (isset($_POST['user_nom']) && isset($_POST['user_prenom']) && isset($_POST['user_login']) && isset($_POST['user_mdp']) && isset($_POST['user_admin'])) 
{
    if (!empty($_POST['user_nom']) && !empty($_POST['user_prenom']) && !empty($_POST['user_login']) && !empty($_POST['user_mdp'])) 
    {
        // $clientSOAP = new SoapClient("http://localhost:8787/ServerSoap?wsdl");
        // $usersoap = new Personne();
        // // null,$_POST['u_nom'],$_POST['u_prenom'],$_POST['u_login'],$_POST['u_mdp'],$_POST['u_admin']
        // $usersoap->setNom($_POST['user_nom']);
        // $usersoap->setPrenom($_POST['user_prenom']);
        // $usersoap->setLogin($_POST['user_login']);
        // $usersoap->setMdp($_POST['user_mdp']);
        // $usersoap->setAdmin($_POST['user_admin']);
        // var_dump($usersoap);
        // $param = new stdClass();
        // $param->p = $usersoap;
        // var_dump($param);
        //$res = $clientSOAP->__soapCall("ajouterUser", array($param));
        $userDao = new PersonneDao();
        $usr = $userDao->addPersonne(htmlspecialchars($_POST['user_nom']), htmlspecialchars($_POST['user_prenom']),htmlspecialchars($_POST['user_login']), htmlspecialchars($_POST['user_mdp']),$_POST['user_admin']);
        showAdmin($_SESSION["theuser"]);
        
  }

}
if(isset($_GET['logout'])) {
    // do something: destroy session
    //session_start();
    unset($_SESSION["theuser"]);
    header("Location: ../");
}


class FormController
{

    function __construct()
    { 



    }

    
    
    
    
}
