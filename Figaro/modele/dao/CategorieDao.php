<?php
	require_once 'ConnexionManager.php';

	/**
	 * Classe de gestion des accès aux articles
	 */
	class CategorieDao
	{
		private $id;
		private $bdd;
		private $libelle;

		public function __construct()
		{
			$this->bdd = (new ConnexionManager)->getInstance();
		}

		public function getList()
		{
			$reponse = $this->bdd->query('SELECT * FROM categorie');
			$data = $reponse->fetchAll(PDO::FETCH_CLASS, 'Categorie');
			// $reponse->closeCursor();
			return $data;
		}

		public function getById($id)
		{
			$reponse = $this->bdd->query('SELECT * FROM categorie WHERE id = '.$id);
			$data = $reponse->fetch(PDO::FETCH_OBJ);
			// $reponse->closeCursor();
			return $data;
		}

		public function addCategorie($nom)
		{
			$reponse = $this->bdd->query('INSERT INTO categorie (libelle) values ("'.$nom.'")');
			// $reponse->closeCursor();
			return $reponse;
		}

	}
?>