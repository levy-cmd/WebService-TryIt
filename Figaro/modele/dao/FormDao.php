<?php
	require_once 'ConnexionManager.php';

	/**
	 * Classe de gestion des formulaires
	 */
	class FormDao
	{

        private $bdd;

		public function __construct()
		{
			$this->bdd = (new ConnexionManager)->getInstance();
        }
        
        public function searchUser($login,$mdp)
		{
			$reponse = $this->bdd->query('SELECT * FROM users WHERE login ="'.$login.'" AND mdp = "'.$mdp.'"');
            $data = $reponse->fetch(PDO::FETCH_OBJ);
            return $data;
		}




    }


?>