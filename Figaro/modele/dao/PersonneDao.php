<?php
	require_once 'ConnexionManager.php';

	/**
	 * Classe de gestion des accès aux articles
	 */
	class PersonneDao
	{
		private $bdd;

		public function __construct()
		{
			$this->bdd = (new ConnexionManager)->getInstance();
		}

		public function getList()
		{
			$data = $this->bdd->query('SELECT * FROM users');
			return $data->fetchAll(PDO::FETCH_CLASS, 'Personne');
		}

		public function getByLogin($login)
		{
			$data = $this->bdd->query('SELECT * FROM users WHERE login = '.$login);
			return $data->fetch(PDO::FETCH_OBJ);
		}

		public function getByEditeur()
		{
			$data = $this->bdd->query('SELECT * FROM users WHERE admin = 0');
			return $data->fetchAll(PDO::FETCH_CLASS, 'Personne');
        }
        
        public function addPersonne($nom,$prenom,$login,$mdp,$admin)
        {
			$data = $this->bdd->query('INSERT INTO users (`nom`,`prenom`,`login`,`mdp`,`admin`) values ("'.$nom.'","'.$prenom.'","'.$login.'","'.$mdp.'",'.$admin.')');
			return $data;
        }

	}
?>